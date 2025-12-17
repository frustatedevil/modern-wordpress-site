<?php
/**
 * Plugin Name: Aiwizio Features
 * Description: Custom features for Aiwizio website including contact forms, booking system, and live chat
 * Version: 1.0
 * Author: Aiwizio Team
 */

// Contact Form Handler
function aiwizio_handle_contact_form() {
    if (isset($_POST['aiwizio_contact_submit'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $company = sanitize_text_field($_POST['company']);
        $industry = sanitize_text_field($_POST['industry']);
        $message = sanitize_textarea_field($_POST['message']);
        
        $to = get_option('admin_email');
        $subject = 'New Contact Form Submission from ' . $name;
        $body = "Name: $name\nEmail: $email\nCompany: $company\nIndustry: $industry\n\nMessage:\n$message";
        $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $email);
        
        if (wp_mail($to, $subject, $body, $headers)) {
            wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
            exit;
        }
    }
}
add_action('admin_post_nopriv_aiwizio_contact', 'aiwizio_handle_contact_form');
add_action('admin_post_aiwizio_contact', 'aiwizio_handle_contact_form');

// Booking Form Handler
function aiwizio_handle_booking_form() {
    if (isset($_POST['aiwizio_booking_submit'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $company = sanitize_text_field($_POST['company']);
        $industry = sanitize_text_field($_POST['industry']);
        $service = sanitize_text_field($_POST['service']);
        $message = sanitize_textarea_field($_POST['message']);
        
        // Save to database
        global $wpdb;
        $table_name = $wpdb->prefix . 'aiwizio_bookings';
        
        $wpdb->insert(
            $table_name,
            array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'company' => $company,
                'industry' => $industry,
                'service' => $service,
                'message' => $message,
                'created_at' => current_time('mysql')
            )
        );
        
        // Send email notification
        $to = get_option('admin_email');
        $subject = 'New Consultation Booking from ' . $name;
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nIndustry: $industry\nService: $service\n\nMessage:\n$message";
        
        wp_mail($to, $subject, $body);
        
        wp_redirect(add_query_arg('booking', 'success', wp_get_referer()));
        exit;
    }
}
add_action('admin_post_nopriv_aiwizio_booking', 'aiwizio_handle_booking_form');
add_action('admin_post_aiwizio_booking', 'aiwizio_handle_booking_form');

// Create bookings table on activation
function aiwizio_create_bookings_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'aiwizio_bookings';
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20),
        company varchar(100),
        industry varchar(50),
        service varchar(50),
        message text,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'aiwizio_create_bookings_table');

// Newsletter Signup Handler
function aiwizio_handle_newsletter() {
    if (isset($_POST['aiwizio_newsletter_submit'])) {
        $email = sanitize_email($_POST['email']);
        
        global $wpdb;
        $table_name = $wpdb->prefix . 'aiwizio_newsletter';
        
        $wpdb->insert(
            $table_name,
            array(
                'email' => $email,
                'subscribed_at' => current_time('mysql')
            )
        );
        
        wp_redirect(add_query_arg('newsletter', 'success', wp_get_referer()));
        exit;
    }
}
add_action('admin_post_nopriv_aiwizio_newsletter', 'aiwizio_handle_newsletter');
add_action('admin_post_aiwizio_newsletter', 'aiwizio_handle_newsletter');

// Create newsletter table
function aiwizio_create_newsletter_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'aiwizio_newsletter';
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        email varchar(100) NOT NULL UNIQUE,
        subscribed_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'aiwizio_create_newsletter_table');

// Add admin menu for bookings
function aiwizio_admin_menu() {
    add_menu_page(
        'Aiwizio Bookings',
        'Bookings',
        'manage_options',
        'aiwizio-bookings',
        'aiwizio_bookings_page',
        'dashicons-calendar-alt',
        30
    );
    
    add_submenu_page(
        'aiwizio-bookings',
        'Newsletter Subscribers',
        'Newsletter',
        'manage_options',
        'aiwizio-newsletter',
        'aiwizio_newsletter_page'
    );
}
add_action('admin_menu', 'aiwizio_admin_menu');

function aiwizio_bookings_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'aiwizio_bookings';
    $bookings = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");
    
    echo '<div class="wrap"><h1>Consultation Bookings</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Company</th><th>Industry</th><th>Service</th><th>Date</th></tr></thead><tbody>';
    
    foreach ($bookings as $booking) {
        echo '<tr>';
        echo '<td>' . esc_html($booking->name) . '</td>';
        echo '<td>' . esc_html($booking->email) . '</td>';
        echo '<td>' . esc_html($booking->phone) . '</td>';
        echo '<td>' . esc_html($booking->company) . '</td>';
        echo '<td>' . esc_html($booking->industry) . '</td>';
        echo '<td>' . esc_html($booking->service) . '</td>';
        echo '<td>' . esc_html($booking->created_at) . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody></table></div>';
}

function aiwizio_newsletter_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'aiwizio_newsletter';
    $subscribers = $wpdb->get_results("SELECT * FROM $table_name ORDER BY subscribed_at DESC");
    
    echo '<div class="wrap"><h1>Newsletter Subscribers</h1>';
    echo '<p>Total Subscribers: ' . count($subscribers) . '</p>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Email</th><th>Subscribed Date</th></tr></thead><tbody>';
    
    foreach ($subscribers as $subscriber) {
        echo '<tr>';
        echo '<td>' . esc_html($subscriber->email) . '</td>';
        echo '<td>' . esc_html($subscriber->subscribed_at) . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody></table></div>';
}
?>

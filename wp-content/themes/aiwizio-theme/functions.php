<?php
/**
 * Aiwizio Theme Functions
 */

// Theme Setup
function aiwizio_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'aiwizio'),
        'footer' => __('Footer Menu', 'aiwizio')
    ));
}
add_action('after_setup_theme', 'aiwizio_theme_setup');

// Enqueue styles and scripts
function aiwizio_enqueue_assets() {
    wp_enqueue_style('aiwizio-style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_script('aiwizio-scripts', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'aiwizio_enqueue_assets');

// Register widget areas
function aiwizio_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'aiwizio'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here.', 'aiwizio'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'aiwizio_widgets_init');

// Custom post type for Services
function aiwizio_register_services_post_type() {
    $args = array(
        'public' => true,
        'label' => 'Services',
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-tools',
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
    );
    register_post_type('service', $args);
}
add_action('init', 'aiwizio_register_services_post_type');

// Custom post type for Case Studies
function aiwizio_register_case_studies_post_type() {
    $args = array(
        'public' => true,
        'label' => 'Case Studies',
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-portfolio',
        'has_archive' => true,
        'rewrite' => array('slug' => 'case-studies'),
    );
    register_post_type('case_study', $args);
}
add_action('init', 'aiwizio_register_case_studies_post_type');

// Add custom meta boxes for services
function aiwizio_add_service_meta_boxes() {
    add_meta_box(
        'service_details',
        'Service Details',
        'aiwizio_service_details_callback',
        'service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'aiwizio_add_service_meta_boxes');

function aiwizio_service_details_callback($post) {
    wp_nonce_field('aiwizio_save_service_details', 'aiwizio_service_details_nonce');
    $icon = get_post_meta($post->ID, '_service_icon', true);
    $price = get_post_meta($post->ID, '_service_price', true);
    ?>
    <p>
        <label for="service_icon">Service Icon (emoji or icon class):</label>
        <input type="text" id="service_icon" name="service_icon" value="<?php echo esc_attr($icon); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="service_price">Starting Price:</label>
        <input type="text" id="service_price" name="service_price" value="<?php echo esc_attr($price); ?>" style="width: 100%;">
    </p>
    <?php
}

function aiwizio_save_service_details($post_id) {
    if (!isset($_POST['aiwizio_service_details_nonce']) || 
        !wp_verify_nonce($_POST['aiwizio_service_details_nonce'], 'aiwizio_save_service_details')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (isset($_POST['service_icon'])) {
        update_post_meta($post_id, '_service_icon', sanitize_text_field($_POST['service_icon']));
    }
    
    if (isset($_POST['service_price'])) {
        update_post_meta($post_id, '_service_price', sanitize_text_field($_POST['service_price']));
    }
}
add_action('save_post', 'aiwizio_save_service_details');

// Customize excerpt length
function aiwizio_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'aiwizio_excerpt_length');

// Add custom excerpt more text
function aiwizio_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'aiwizio_excerpt_more');
?>

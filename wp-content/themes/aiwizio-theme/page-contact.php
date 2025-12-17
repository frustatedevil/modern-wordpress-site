<?php
/*
Template Name: Contact Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style>
        .contact-page-hero {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            color: white;
            padding: 150px 40px 100px;
            text-align: center;
        }
        
        .contact-page-hero h1 {
            font-size: 56px;
            margin-bottom: 20px;
        }
        
        .contact-container {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
        }
        
        .contact-info h2 {
            font-size: 36px;
            color: var(--primary-blue);
            margin-bottom: 30px;
        }
        
        .contact-item {
            margin-bottom: 30px;
        }
        
        .contact-item h3 {
            font-size: 20px;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }
        
        .contact-item p {
            font-size: 18px;
            color: #64748B;
        }
        
        .booking-section {
            background: var(--light-gray);
            padding: 60px;
            border-radius: 20px;
        }
        
        .booking-section h2 {
            font-size: 32px;
            color: var(--primary-blue);
            margin-bottom: 20px;
        }
        
        .booking-form .form-group {
            margin-bottom: 20px;
        }
        
        .booking-form input,
        .booking-form select,
        .booking-form textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #E2E8F0;
            border-radius: 8px;
            font-size: 16px;
            font-family: inherit;
        }
        
        .booking-form textarea {
            min-height: 120px;
        }
        
        .booking-form button {
            background: var(--primary-blue);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .booking-form button:hover {
            background: var(--secondary-blue);
            transform: translateY(-2px);
        }
        
        @media (max-width: 768px) {
            .contact-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
    </style>
</head>
<body <?php body_class(); ?>>

<!-- Header -->
<header class="site-header">
    <div class="header-container">
        <a href="<?php echo home_url(); ?>" class="logo">Aiwizio</a>
        <nav class="main-nav">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo home_url(); ?>#services">Services</a></li>
                <li><a href="<?php echo home_url(); ?>#industries">Industries</a></li>
                <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
                <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
            </ul>
        </nav>
        <a href="#booking" class="cta-button">Book a Call</a>
    </div>
</header>

<!-- Contact Hero -->
<section class="contact-page-hero">
    <h1>Get In Touch</h1>
    <p style="font-size: 24px; opacity: 0.9;">Let's discuss how AI can transform your business</p>
</section>

<!-- Contact Content -->
<div class="contact-container">
    <div class="contact-info">
        <h2>Contact Information</h2>
        
        <div class="contact-item">
            <h3>📧 Email</h3>
            <p>hello@aiwizio.com<br>support@aiwizio.com</p>
        </div>
        
        <div class="contact-item">
            <h3>📞 Phone</h3>
            <p>+1 (555) 123-4567<br>Available 24/7</p>
        </div>
        
        <div class="contact-item">
            <h3>🌍 Global Presence</h3>
            <p>Serving clients worldwide<br>Remote-first company</p>
        </div>
        
        <div class="contact-item">
            <h3>⏰ Business Hours</h3>
            <p>24/7 Support Available<br>Response within 2 hours</p>
        </div>
        
        <div class="contact-item">
            <h3>💬 Live Chat</h3>
            <p>Chat with our AI assistant<br>Instant responses</p>
        </div>
    </div>
    
    <div class="booking-section" id="booking">
        <h2>Book a Consultation</h2>
        <p style="color: #64748B; margin-bottom: 30px;">Schedule a free 30-minute consultation with our AI experts</p>
        
        <form class="booking-form" id="booking-form">
            <div class="form-group">
                <input type="text" name="name" placeholder="Full Name *" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address *" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="text" name="company" placeholder="Company Name">
            </div>
            <div class="form-group">
                <select name="industry" required>
                    <option value="">Select Your Industry *</option>
                    <option value="ecommerce">E-commerce</option>
                    <option value="jewelry">Jewelry</option>
                    <option value="beauty">Beauty & Skincare</option>
                    <option value="fitness">Fitness & Gyms</option>
                    <option value="medspa">Medical Spa</option>
                    <option value="solar">Solar & Roofing</option>
                    <option value="realestate">Real Estate</option>
                    <option value="dental">Dental</option>
                    <option value="chiropractic">Chiropractic</option>
                    <option value="courses">Course Creator</option>
                    <option value="pets">Pet Store</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <select name="service" required>
                    <option value="">What are you interested in? *</option>
                    <option value="chatbot">AI Chatbot</option>
                    <option value="automation">Business Automation</option>
                    <option value="analytics">Data Analytics</option>
                    <option value="leadgen">Lead Generation</option>
                    <option value="voice">Voice AI</option>
                    <option value="custom">Custom Solution</option>
                </select>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Tell us about your project and goals"></textarea>
            </div>
            <button type="submit">Schedule Consultation</button>
        </form>
    </div>
</div>

<!-- Newsletter Section -->
<section style="background: var(--primary-blue); color: white; padding: 80px 40px; text-align: center;">
    <h2 style="font-size: 42px; margin-bottom: 20px;">Stay Updated</h2>
    <p style="font-size: 20px; opacity: 0.9; margin-bottom: 40px;">Get the latest AI insights and industry trends</p>
    <form style="max-width: 600px; margin: 0 auto; display: flex; gap: 15px;">
        <input type="email" placeholder="Your email address" style="flex: 1; padding: 15px; border: none; border-radius: 8px; font-size: 16px;">
        <button type="submit" style="background: white; color: var(--primary-blue); padding: 15px 40px; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer;">Subscribe</button>
    </form>
</section>

<!-- Footer -->
<footer class="site-footer">
    <p>&copy; <?php echo date('Y'); ?> Aiwizio. Your Business Powered by Intelligence.</p>
    <p style="margin-top: 20px; opacity: 0.7;">Transforming businesses worldwide with AI solutions</p>
</footer>

<script>
document.getElementById('booking-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! We will contact you within 24 hours to schedule your consultation.');
    this.reset();
});
</script>

<?php wp_footer(); ?>
</body>
</html>

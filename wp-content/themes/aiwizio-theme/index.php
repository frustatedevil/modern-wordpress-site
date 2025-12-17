<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header -->
<header class="site-header">
    <div class="header-container">
        <a href="<?php echo home_url(); ?>" class="logo">Aiwizio</a>
        <nav class="main-nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#industries">Industries</a></li>
                <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
                <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <a href="#booking" class="cta-button">Book a Call</a>
    </div>
</header>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="hero-content">
        <h1>Aiwizio</h1>
        <p class="hero-tagline">Your Business Powered by Intelligence</p>
        <div class="hero-buttons">
            <a href="#services" class="btn-primary">Explore Solutions</a>
            <a href="#contact" class="btn-secondary">Get Started</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="scroll-section">
    <div class="section-content">
        <h2 style="font-size: 48px; text-align: center; color: var(--primary-blue); margin-bottom: 20px;">AI Solutions for Every Business</h2>
        <p style="text-align: center; font-size: 20px; color: #64748B; max-width: 800px; margin: 0 auto;">Transform your business with cutting-edge AI technology. From intelligent chatbots to complete automation systems.</p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🤖</div>
                <h3>AI Chatbots</h3>
                <p>24/7 intelligent customer support that understands context and delivers personalized responses.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Business Automation</h3>
                <p>Streamline operations with AI-powered workflows that save time and reduce costs.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Data Analytics</h3>
                <p>Turn data into actionable insights with advanced AI analytics and predictive modeling.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🎯</div>
                <h3>Lead Generation</h3>
                <p>AI-driven lead qualification and nurturing systems that convert prospects into customers.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">💬</div>
                <h3>Voice AI</h3>
                <p>Natural voice interactions for phone systems, virtual assistants, and customer service.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>Custom AI Solutions</h3>
                <p>Tailored AI systems designed specifically for your unique business challenges.</p>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section id="industries" class="scroll-section industries-section">
    <div class="section-content">
        <h2 style="font-size: 48px; text-align: center; color: var(--primary-blue); margin-bottom: 20px;">Industries We Serve</h2>
        <p style="text-align: center; font-size: 20px; color: #64748B; max-width: 800px; margin: 0 auto;">Specialized AI solutions for diverse industries worldwide</p>
        
        <div class="industries-grid">
            <div class="industry-item">
                <h4>🛍️ E-commerce</h4>
                <p>Smart product recommendations & automated customer service</p>
            </div>
            <div class="industry-item">
                <h4>💎 Jewelry Brands</h4>
                <p>Virtual try-ons & personalized shopping experiences</p>
            </div>
            <div class="industry-item">
                <h4>💄 Beauty & Skincare</h4>
                <p>AI skin analysis & product matching systems</p>
            </div>
            <div class="industry-item">
                <h4>💪 Fitness & Gyms</h4>
                <p>Automated booking & personalized workout plans</p>
            </div>
            <div class="industry-item">
                <h4>🏥 Medical Spas</h4>
                <p>Appointment scheduling & treatment recommendations</p>
            </div>
            <div class="industry-item">
                <h4>☀️ Solar & Roofing</h4>
                <p>Lead qualification & project estimation tools</p>
            </div>
            <div class="industry-item">
                <h4>🏠 Real Estate</h4>
                <p>Property matching & virtual tour assistants</p>
            </div>
            <div class="industry-item">
                <h4>🦷 Dental Clinics</h4>
                <p>Patient management & appointment reminders</p>
            </div>
            <div class="industry-item">
                <h4>🎓 Course Creators</h4>
                <p>Student engagement & automated grading systems</p>
            </div>
            <div class="industry-item">
                <h4>🐾 Pet Stores</h4>
                <p>Inventory management & customer loyalty programs</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="scroll-section contact-section">
    <div class="section-content">
        <h2 style="font-size: 48px; text-align: center; margin-bottom: 20px;">Let's Build Something Amazing</h2>
        <p style="text-align: center; font-size: 20px; opacity: 0.9; max-width: 800px; margin: 0 auto;">Ready to transform your business with AI? Get in touch with our team.</p>
        
        <form class="contact-form" id="contact-form">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <input type="text" name="company" placeholder="Company Name">
            </div>
            <div class="form-group">
                <input type="text" name="industry" placeholder="Your Industry">
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Tell us about your project" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="site-footer">
    <p>&copy; <?php echo date('Y'); ?> Aiwizio. Your Business Powered by Intelligence.</p>
    <p style="margin-top: 20px; opacity: 0.7;">Transforming businesses worldwide with AI solutions</p>
</footer>

<script>
// Scroll animations
const observerOptions = {
    threshold: 0.2,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.scroll-section').forEach(section => {
    observer.observe(section);
});

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Header scroll effect
let lastScroll = 0;
window.addEventListener('scroll', () => {
    const header = document.querySelector('.site-header');
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        header.style.padding = '10px 0';
        header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.1)';
    } else {
        header.style.padding = '20px 0';
        header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.05)';
    }
    
    lastScroll = currentScroll;
});
</script>

<?php wp_footer(); ?>
</body>
</html>

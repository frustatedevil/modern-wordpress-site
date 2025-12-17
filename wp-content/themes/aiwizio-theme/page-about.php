<?php
/*
Template Name: About Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style>
        .about-hero {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            color: white;
            padding: 150px 40px 100px;
            text-align: center;
        }
        
        .about-hero h1 {
            font-size: 56px;
            margin-bottom: 20px;
        }
        
        .about-content {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 40px;
        }
        
        .about-section {
            margin-bottom: 80px;
        }
        
        .about-section h2 {
            font-size: 42px;
            color: var(--primary-blue);
            margin-bottom: 30px;
        }
        
        .about-section p {
            font-size: 18px;
            line-height: 1.8;
            color: #475569;
            margin-bottom: 20px;
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }
        
        .value-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .value-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .value-card h3 {
            color: var(--primary-blue);
            font-size: 24px;
            margin-bottom: 15px;
        }
        
        .stats-section {
            background: var(--light-gray);
            padding: 80px 40px;
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 60px auto 0;
        }
        
        .stat-item h3 {
            font-size: 48px;
            color: var(--accent-blue);
            margin-bottom: 10px;
        }
        
        .stat-item p {
            font-size: 18px;
            color: #64748B;
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
                <li><a href="<?php echo home_url(); ?>#contact">Contact</a></li>
            </ul>
        </nav>
        <a href="#booking" class="cta-button">Book a Call</a>
    </div>
</header>

<!-- About Hero -->
<section class="about-hero">
    <h1>About Aiwizio</h1>
    <p style="font-size: 24px; opacity: 0.9; max-width: 800px; margin: 0 auto;">Empowering businesses worldwide with intelligent AI solutions</p>
</section>

<!-- About Content -->
<div class="about-content">
    <div class="about-section">
        <h2>Our Mission</h2>
        <p>At Aiwizio, we believe every business deserves access to cutting-edge AI technology. Our mission is to democratize artificial intelligence by making it accessible, affordable, and actionable for businesses of all sizes.</p>
        <p>We transform complex AI concepts into practical solutions that drive real business results. From intelligent chatbots to complete automation systems, we're here to power your business with intelligence.</p>
    </div>
    
    <div class="about-section">
        <h2>Why Choose Aiwizio?</h2>
        <p>We're not just another AI agency. We're your strategic partner in digital transformation. Our team combines deep technical expertise with industry-specific knowledge to deliver solutions that actually work.</p>
        <p>We've helped hundreds of businesses across e-commerce, healthcare, real estate, and more to automate operations, enhance customer experiences, and drive growth through AI.</p>
    </div>
    
    <div class="about-section">
        <h2>Our Values</h2>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">🎯</div>
                <h3>Results-Driven</h3>
                <p>We focus on measurable outcomes that impact your bottom line</p>
            </div>
            <div class="value-card">
                <div class="value-icon">🤝</div>
                <h3>Partnership</h3>
                <p>Your success is our success. We're in this together</p>
            </div>
            <div class="value-card">
                <div class="value-icon">💡</div>
                <h3>Innovation</h3>
                <p>Staying ahead with the latest AI technologies and trends</p>
            </div>
            <div class="value-card">
                <div class="value-icon">🔒</div>
                <h3>Trust & Security</h3>
                <p>Your data security and privacy are our top priorities</p>
            </div>
        </div>
    </div>
</div>

<!-- Stats Section -->
<section class="stats-section">
    <h2 style="font-size: 42px; color: var(--primary-blue); margin-bottom: 20px;">Our Impact</h2>
    <div class="stats-grid">
        <div class="stat-item">
            <h3>500+</h3>
            <p>Projects Delivered</p>
        </div>
        <div class="stat-item">
            <h3>50+</h3>
            <p>Industries Served</p>
        </div>
        <div class="stat-item">
            <h3>98%</h3>
            <p>Client Satisfaction</p>
        </div>
        <div class="stat-item">
            <h3>24/7</h3>
            <p>Support Available</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="site-footer">
    <p>&copy; <?php echo date('Y'); ?> Aiwizio. Your Business Powered by Intelligence.</p>
    <p style="margin-top: 20px; opacity: 0.7;">Transforming businesses worldwide with AI solutions</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>

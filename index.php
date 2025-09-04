<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dimple Star Transport - Your trusted partner for safe, comfortable, and reliable bus transportation across the Philippines.">
    <meta name="keywords" content="bus transport, Philippines, travel, booking, routes, schedules, Dimple Star">
    <meta name="author" content="Dimple Star Transport">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://dimplestar.com/">
    <meta property="og:title" content="Dimple Star Transport - Reliable Bus Transportation">
    <meta property="og:description" content="Your trusted partner for safe, comfortable, and reliable bus transportation across the Philippines.">
    <meta property="og:image" content="assets/images/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://dimplestar.com/">
    <meta property="twitter:title" content="Dimple Star Transport - Reliable Bus Transportation">
    <meta property="twitter:description" content="Your trusted partner for safe, comfortable, and reliable bus transportation across the Philippines.">
    <meta property="twitter:image" content="assets/images/og-image.jpg">

    <title>Dimple Star Transport - Reliable Bus Transportation</title>
    
    <!-- Favicon -->
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Product+Sans:wght@400;500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
</head>
<body>
    <?php 
    session_start();
    include 'components/header.php'; 
    ?>

    <!-- Hero Section -->
    <section class="hero" id="home" style="backdrop-filter: blur(10px);">
        <!-- Hero carousel background -->
        <div class="hero-carousel">
            <div class="hero-carousel-track">
                <div class="hero-carousel-slide" style="background-image: url('slide/images/b1.png');"></div>
                <div class="hero-carousel-slide" style="background-image: url('slide/images/b2.png');"></div>
                <div class="hero-carousel-slide" style="background-image: url('slide/images/b3.png');"></div>
                <div class="hero-carousel-slide" style="background-image: url('slide/images/b4.png');"></div>
                <div class="hero-carousel-slide" style="background-image: url('slide/images/b1.png');"></div>
                <div class="hero-carousel-slide" style="background-image: url('slide/images/b2.png');"></div>
                <div class="hero-carousel-slide" style="background-image: url('slide/images/b3.png');"></div>
                <div class="hero-carousel-slide" style="background-image: url('slide/images/b4.png');"></div>
            </div>
        </div>
        
        <div class="hero-content">
            <h1 class="hero-title" style="font-family: 'Product Sans', 'Google Sans', sans-serif;">DimpleStar</h1>
            <h2 class="hero-tagline" style="font-family: 'Product Sans', 'Google Sans', sans-serif; font-weight: bold; font-size: 3rem; margin-bottom: var(--spacing-md); opacity: 0; transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.45s forwards;">Arrive with ease</h2>
            <p class="hero-subtitle" style="font-family: 'Product Sans', 'Google Sans', sans-serif;">Experience reliable bus transportation across the Philippines</p>
            <div class="hero-cta">
                <a href="book.php" class="btn btn-primary">Book Your Trip</a>
                <a href="routeschedule.php" class="btn btn-secondary">View Routes</a>
            </div>
        </div>
        
        <!-- Hero search form -->
        <div class="hero-search">
            <div class="container">
                <div class="search-form-container">
                    <form class="quick-search-form" action="book.php" method="GET">
                        <div class="search-row">
                            <div class="search-field">
                                <select name="origin" id="quick-origin" class="form-select">
                                    <option value="">Select Origin</option>
                                    <option value="San Lazaro">San Lazaro</option>
                                    <option value="Espana">Espana</option>
                                    <option value="Alabang">Alabang</option>
                                    <option value="Cabuyao">Cabuyao</option>
                                    <option value="Naujan">Naujan</option>
                                    <option value="Victoria">Victoria</option>
                                    <option value="Pinamalayan">Pinamalayan</option>
                                    <option value="Gloria">Gloria</option>
                                    <option value="Bongabong">Bongabong</option>
                                    <option value="Roxas">Roxas</option>
                                    <option value="Mansalay">Mansalay</option>
                                    <option value="Bulalacao">Bulalacao</option>
                                    <option value="Magsaysay">Magsaysay</option>
                                    <option value="San Jose">San Jose</option>
                                    <option value="Pola">Pola</option>
                                    <option value="Socorro">Socorro</option>
                                </select>
                            </div>
                            <div class="search-field">
                                <select name="destination" id="quick-destination" class="form-select">
                                    <option value="">Select Destination</option>
                                    <option value="San Lazaro">San Lazaro</option>
                                    <option value="Espana">Espana</option>
                                    <option value="Alabang">Alabang</option>
                                    <option value="Cabuyao">Cabuyao</option>
                                    <option value="Naujan">Naujan</option>
                                    <option value="Victoria">Victoria</option>
                                    <option value="Pinamalayan">Pinamalayan</option>
                                    <option value="Gloria">Gloria</option>
                                    <option value="Bongabong">Bongabong</option>
                                    <option value="Roxas">Roxas</option>
                                    <option value="Mansalay">Mansalay</option>
                                    <option value="Bulalacao">Bulalacao</option>
                                    <option value="Magsaysay">Magsaysay</option>
                                    <option value="San Jose">San Jose</option>
                                    <option value="Pola">Pola</option>
                                    <option value="Socorro">Socorro</option>
                                </select>
                            </div>
                            <div class="search-field">
                                <input type="date" name="date" id="quick-date" class="form-input">
                            </div>
                            <div class="search-field">
                                <button type="submit" class="btn btn-primary">Search Routes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section features-white-bg" id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title features-title">Why Choose Dimple Star?</h2>
                <p class="section-subtitle features-subtitle">Premium bus transportation experience</p>
            </div>
            
            <div class="grid grid-cols-3">
                <div class="card features-card">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-md">
                            <i class="fas fa-shield-alt" style="font-size: 3rem; color: #1aa53fff;"></i>
                        </div>
                        <h3 class="features-card-title">Safety First</h3>
                        <p class="features-card-text">All our buses undergo regular maintenance and safety inspections. Our drivers are licensed professionals with years of experience.</p>
                    </div>
                </div>
                
                <div class="card features-card">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-md">
                            <i class="fas fa-clock" style="font-size: 3rem; color: #1aa53fff;"></i>
                        </div>
                        <h3 class="features-card-title">On-Time Service</h3>
                        <p class="features-card-text">We pride ourselves on punctuality. Our buses follow strict schedules to ensure you reach your destination on time.</p>
                    </div>
                </div>
                
                <div class="card features-card">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-md">
                            <i class="fas fa-snowflake" style="font-size: 3rem; color: #1aa53fff;"></i>
                        </div>
                        <h3 class="features-card-title">Comfortable Journey</h3>
                        <p class="features-card-text">Travel in comfort with our air-conditioned buses, spacious seating, and modern amenities for a pleasant journey.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section text-white services-section" id="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: #20c54cff;">Our Services</h2>
                <p class="section-subtitle" style="color: rgba(255, 255, 255, 0.9);">Comprehensive transportation solutions for all your travel needs</p>
            </div>
            
            <div class="grid grid-cols-2">
                <div class="service-item">
                    <div style="display: flex; align-items: center; margin-bottom: var(--spacing-md);">
                        <i class="fas fa-bus" style="font-size: 2rem; margin-right: var(--spacing-md); color: #20c54cff;"></i>
                        <h3 style="color: white;">Regular Bus Service</h3>
                    </div>
                    <p style="color: rgba(255, 255, 255, 0.9);">Daily scheduled trips to major destinations across Luzon and Mindoro with affordable fares and reliable service.</p>
                </div>
                
                <div class="service-item">
                    <div style="display: flex; align-items: center; margin-bottom: var(--spacing-md);">
                        <i class="fas fa-wind" style="font-size: 2rem; margin-right: var(--spacing-md); color: #20c54cff;"></i>
                        <h3 style="color: white;">Air-Conditioned Buses</h3>
                    </div>
                    <p style="color: rgba(255, 255, 255, 0.9);">Premium comfort with fully air-conditioned buses featuring reclining seats and extra legroom for long-distance travel.</p>
                </div>
                
                <div class="service-item">
                    <div style="display: flex; align-items: center; margin-bottom: var(--spacing-md);">
                        <i class="fas fa-shipping-fast" style="font-size: 2rem; margin-right: var(--spacing-md); color: #20c54cff;"></i>
                        <h3 style="color: white;">Express Routes</h3>
                    </div>
                    <p style="color: rgba(255, 255, 255, 0.9);">Fast and direct routes with limited stops for business travelers and those in a hurry to reach their destination.</p>
                </div>
                
                <div class="service-item">
                    <div style="display: flex; align-items: center; margin-bottom: var(--spacing-md);">
                        <i class="fas fa-users" style="font-size: 2rem; margin-right: var(--spacing-md); color: #20c54cff;"></i>
                        <h3 style="color: white;">Charter Services</h3>
                    </div>
                    <p style="color: rgba(255, 255, 255, 0.9);">Private bus rentals for groups, events, and special occasions with customizable routes and schedules.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <section class="section text-white" style="background: #1a1a1a;">
        <div class="container text-center">
            <h2 class="section-title mb-md" style="color: #20c54cff;">Ready to Travel?</h2>
            <p class="section-subtitle mb-xl" style="color: rgba(255, 255, 255, 0.9);">Book your bus ticket now and experience comfortable, reliable transportation.</p>
            <div class="cta-buttons">
                <center>
                <a href="book.php" class="btn-cta btn-secondary">Book Your Trip</a>
                <a href="contact.php" class="btn-cta btn-outline" style="margin-left: var(--spacing-md);">Contact Us</a>
                </center>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</body>
</html>

<style>
/* Hero search form styles */
.hero-search {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    width: 900px;
    max-width: calc(100% - 80px);
}

.search-form-container {
    background: transparent;
    backdrop-filter: none;
    border-radius: 20px;
    padding: 0;
    box-shadow: none;
    border: none;
    min-height: auto;
    display: flex;
    align-items: stretch;
}
.quick-search-form {
    width: 100%;
    padding: 30px;
    display: flex;
    flex-direction: row;
    gap: var(--spacing-md);
    align-items: center;
}

.search-row {
    display: flex;
    flex-direction: row;
    gap: var(--spacing-md);
    width: 100%;
    align-items: flex-end;
}

.search-field {
    display: flex;
    flex-direction: column;
    flex: 1;
    opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.3s forwards;
}

.search-field:last-child {
    flex: 0 0 auto;
}
   

.search-field input {
    background: transparent;
    color: white;
    border: 2px solid white;
    border-radius: 8px;
    padding: 16px 20px;
    font-size: 0.95rem;
    transition: all var(--transition-fast);
    font-weight: var(--font-weight-medium);
    height: 50px;
}

.search-field input[type="date"] {
    background: transparent;
    color: white;
    border: 2px solid white;
    border-radius: 8px;
    padding: 16px 40px 16px 20px; /* more right padding for icon */
    font-size: 0.95rem;
    transition: all var(--transition-fast);
    font-weight: var(--font-weight-medium);
    height: 50px;

    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    position: relative;
}

/* target the calendar icon in Chrome/Edge/Safari */
.search-field input[type="date"]::-webkit-calendar-picker-indicator {
    filter: invert(1); /* makes it white */
    cursor: pointer;
    position: absolute;
    right: 12px; /* move left/right here */
}

.search-field input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

.search-field select {
   background: transparent;
    color: white;
    border: 2px solid white;
    border-radius: 8px;
    padding: 16px 20px;
    font-size: 0.95rem;
    transition: all var(--transition-fast);
    font-weight: var(--font-weight-medium);
    height: 50px;
    
    /* remove default arrow */
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;

    /* custom chevron */
    background-image: url("data:image/svg+xml;utf8,<svg fill='white' height='16' viewBox='0 0 20 20' width='16' xmlns='http://www.w3.org/2000/svg'><path d='M5.25 7.5L10 12.25L14.75 7.5' /></svg>");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 16px 16px;
}

/* Enhanced dropdown styling */
.search-field select option {
    background: white;
    color: black;
    padding: 8px 12px;
    margin: 2px 0;
    border-radius: 6px;
    font-weight: var(--font-weight-medium);
}

.search-field select option:hover {
    background: rgba(55, 149, 59, 0.8);
}

.search-field select option:checked {
    background: white;
    color: var(--primary-green);
}   



.search-field label {
    display: block;
    margin-bottom: var(--spacing-xs);
    font-weight: var(--font-weight-medium);
    color: white;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.search-field .btn {
    background: transparent;
    color: white;
    border: 2px solid white;
    border-radius: 8px;
    padding: 16px 20px;
    font-size: 0.95rem;
    transition: all var(--transition-fast);
    font-weight: var(--font-weight-medium);
    height: 50px;
}

.search-field .btn:hover {
    background: white;
    color: var(--primary-green);
}

/* Route card styles */
.route-card {
    border-left: 4px solid var(--primary-green);
}

.route-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.route-badge {
    background: var(--primary-green);
    color: var(--text-white);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--border-radius-md);
    font-size: 0.75rem;
    font-weight: var(--font-weight-medium);
}

.route-details > div {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
}

.route-details i {
    color: var(--primary-green);
    width: 16px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .hero-search {
        position: static;
        width: calc(100% - 40px);
        max-width: none;
        margin: var(--spacing-xl) auto 0;
        transform: none;
    }
    
    .search-form-container {
        margin: 0;
    }
    
    .quick-search-form {
        padding: 25px 20px;
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .search-row {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .search-field {
        width: 100%;
    }
    
    .search-field:last-child {
        flex: 1;
    }
}
    
    .search-field .btn {
        width: 100%;
        margin-top: var(--spacing-sm);
    }
    
    .cta-buttons a {
        display: block;
        margin: var(--spacing-sm) 0 !important;
    }


/* Features Section White Background Styling */
.features-white-bg {
    background: #fff !important;
    color: #333;
    padding: 10rem 0 0rem 0;
}

.features-title {
    color: #333 !important;
}

.features-subtitle {
    color: #666 !important;
}

.features-card {
    background: #fff;
    border: 3px solid black;
    transition: all 0.3s ease;
    border-radius: 5px;
}

.features-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
    background: #ccf3d7ff;
}

.features-card-title {
    color: #333 !important;
    margin-bottom: var(--spacing-sm);
}

.features-card-text {
    color: #666 !important;
    line-height: 1.6;
}

/* Services Section Background */

.services-section {
    background: url('assets/images/services-bg.svg') no-repeat center center/cover;
    position: relative;
    padding: 25rem 0 0rem 0;
    height: 60rem;
}

.services-section .container {
    position: relative;
    z-index: 2;
}

/* Scroll Animation Styles */
.animate-on-scroll {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
}

.animate-on-scroll.animate-in {
    opacity: 1;
    transform: translateY(0);
}

/* Different animation types */
.animate-fade-up {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.8s ease-out;
}

.animate-fade-up.animate-in {
    opacity: 1;
    transform: translateY(0);
}

.animate-fade-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: all 0.8s ease-out;
}

.animate-fade-left.animate-in {
    opacity: 1;
    transform: translateX(0);
}

.animate-fade-right {
    opacity: 0;
    transform: translateX(50px);
    transition: all 0.8s ease-out;
}

.animate-fade-right.animate-in {
    opacity: 1;
    transform: translateX(0);
}

.animate-scale {
    opacity: 0;
    transform: scale(0.8);
    transition: all 0.8s ease-out;
}

.animate-scale.animate-in {
    opacity: 1;
    transform: scale(1);
}
</style>

<script>
// Scroll Animation Observer
document.addEventListener('DOMContentLoaded', function() {
    // Add animation classes to elements
    const elementsToAnimate = [
        '.section-title',
        '.section-subtitle', 
        '.card',
        '.service-item',
        '.testimonial-card',
        '.route-card',
        '.cta-section',
        '.feature-icon'
    ];
    
    elementsToAnimate.forEach(selector => {
        const elements = document.querySelectorAll(selector);
        elements.forEach((element, index) => {
            // Add different animation types based on element type
            if (selector === '.card' || selector === '.testimonial-card') {
                element.classList.add('animate-fade-up');
            } else if (selector === '.service-item') {
                element.classList.add(index % 2 === 0 ? 'animate-fade-left' : 'animate-fade-right');
            } else if (selector === '.feature-icon') {
                element.classList.add('animate-scale');
            } else {
                element.classList.add('animate-on-scroll');
            }
            
            // Add delay for staggered animations
            element.style.transitionDelay = `${index * 0.1}s`;
        });
    });
    
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe all animated elements
    const animatedElements = document.querySelectorAll('.animate-on-scroll, .animate-fade-up, .animate-fade-left, .animate-fade-right, .animate-scale');
    animatedElements.forEach(element => {
        observer.observe(element);
    });
});
</script>

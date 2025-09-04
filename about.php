<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn about Dimple Star Transport - Our history, mission, vision, and commitment to providing excellent bus transportation services across the Philippines.">
    <meta name="keywords" content="about us, Dimple Star, transport history, mission, vision, bus company">
    <meta name="author" content="Dimple Star Transport">
    
    <title>About Us - Dimple Star Transport</title>
    
    <!-- Favicon -->
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
    
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
    <section class="hero about-hero" id="about-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content-forced-center">
            <h1 class="animate-on-scroll hero-title-forced-center">About Dimple Star</h1>
            <p class="hero-subtitle-forced-center animate-on-scroll">Your trusted partner in transportation since 1993</p>
        </div>
    </section>

    <!-- History Section -->
    <section class="section" id="history">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-block animate-fade-left">
                        <h2 class="section-title">Our Journey</h2>
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-year">1993</div>
                                <div class="timeline-content">
                                    <h4>Napat Transit Era</h4>
                                    <p>Started as Napat Transit, providing reliable transportation services between Metro Manila and Mindoro Province.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-year">2004</div>
                                <div class="timeline-content">
                                    <h4>Dimple Star Born</h4>
                                    <p>Rebranded to Dimple Star Transport in May 2004, marking a new era of enhanced service and modernization.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-year">Today</div>
                                <div class="timeline-content">
                                    <h4>No Longer Operating</h4>
                                    <p>.....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-container animate-fade-right">
                        <img src="images/oldbus.jpg" alt="Historic Dimple Star Bus from 1993" class="historic-image">
                        <div class="image-caption">
                            <p><strong>October 16, 1993</strong> - Napat Transit NVR-963 (fleet No 800) traveling to Alabang along Taft Avenue near United Nations Avenue, Ermita, Manila.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="section bg-primary text-white" id="mission-vision">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title text-white animate-on-scroll">Our Purpose</h2>
                <p class="section-subtitle animate-on-scroll" style="color: rgba(255, 255, 255, 0.9);">Driving excellence in transportation services</p>
            </div>
            
            <div class="row mission-vision-cards">
                <div class="col-md-6">
                    <div class="purpose-card animate-fade-up">
                        <div class="purpose-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <p>To provide superior transport service to Metro Manila and Mindoro Province commuters through safe, reliable, and comfortable journeys that exceed expectations.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="purpose-card animate-fade-up">
                        <div class="purpose-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <p>To lead the bus transport industry through innovative service delivery, setting new standards for excellence in public transportation across the Philippines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section features-white-bg" id="values">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title features-title animate-on-scroll">Our Core Values</h2>
                <p class="section-subtitle features-subtitle animate-on-scroll">The principles that guide everything we do</p>
            </div>
            
            <div class="grid grid-cols-3">
                <div class="card features-card animate-fade-up">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-md">
                            <i class="fas fa-shield-alt" style="font-size: 3rem; color: var(--primary-green);"></i>
                        </div>
                        <h3 class="features-card-title">Safety First</h3>
                        <p class="features-card-text">Passenger safety is our top priority. We maintain rigorous safety standards and regular vehicle inspections.</p>
                    </div>
                </div>
                
                <div class="card features-card animate-fade-up">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-md">
                            <i class="fas fa-handshake" style="font-size: 3rem; color: var(--primary-green);"></i>
                        </div>
                        <h3 class="features-card-title">Reliability</h3>
                        <p class="features-card-text">We honor our commitments with punctual service and consistent quality that passengers can depend on.</p>
                    </div>
                </div>
                
                <div class="card features-card animate-fade-up">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-md">
                            <i class="fas fa-heart" style="font-size: 3rem; color: var(--primary-green);"></i>
                        </div>
                        <h3 class="features-card-title">Customer Care</h3>
                        <p class="features-card-text">Every passenger matters. We provide personalized service with a smile and genuine care for your journey.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <?php include 'components/footer.php'; ?>

<style>
/* About Page Specific Styles */
.hero-title-about {
  font-size: 6rem;
  font-weight: var(--font-weight-bold);
  margin-bottom: var(--spacing-md);
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.3s forwards;
}

.about-hero {
    background: linear-gradient(rgba(0, 133, 35, 0.8), rgba(26, 54, 93, 0.8)), url('images/oldbus.jpg');
    background-size: cover;
    background-position: center;
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(0, 133, 35, 0.1), rgba(26, 54, 93, 0.1));
}

.hero-content {
    position: relative;
    z-index: 2;
}

/* FORCED CENTERING - ABSOLUTE CENTER AT ALL COSTS */
.hero-content-forced-center {
    position: absolute !important;
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;
    z-index: 2 !important;
    width: 100% !important;
    text-align: center !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
}

.hero-title-forced-center {
    font-size: 3.5rem !important;
    font-weight: bold !important;
    color: white !important;
    margin: 0 auto 1rem auto !important;
    text-align: center !important;
    display: block !important;
    width: 100% !important;
    position: relative !important;
}

.hero-subtitle-forced-center {
    font-size: 1.2rem !important;
    color: rgba(255, 255, 255, 0.9) !important;
    text-align: center !important;
    max-width: 600px !important;
    margin: 0 auto !important;
    display: block !important;
    width: 100% !important;
    position: relative !important;
}

.hero-title-about {
    font-size: 3.5rem;
    font-weight: bold;
    color: white;
    margin-bottom: 1rem;
    text-align: center;
}

.hero-content .hero-subtitle {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

/* Timeline Styles */
.timeline {
    position: relative;
    padding: 2rem 0;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 2rem;
    top: 0;
    bottom: 0;
    width: 3px;
    background: var(--primary-green);
}

.timeline-item {
    position: relative;
    margin-bottom: 3rem;
    padding-left: 5rem;
}

.timeline-year {
    position: absolute;
    left: 0;
    top: 0;
    width: 4rem;
    height: 4rem;
    background: var(--primary-green);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.9rem;
}

.timeline-content h4 {
    color: var(--primary-green);
    margin-bottom: 0.5rem;
}

/* Historic Image Styles */
.image-container {
    position: relative;
}

.historic-image {
    width: 100%;
    border-radius: 0px;
    box-shadow: var(--shadow-lg);
}

.image-caption {
    background: black;
    padding: 1rem;
    border-radius: 0 0 var(--border-radius-lg) var(--border-radius-lg);
    font-size: 0.9rem;
    color: black;
}

/* Purpose Cards */
.purpose-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--border-radius-lg);
    padding: 2rem;
    text-align: center;
    transition: all var(--transition-normal);
    height: 100%;
}

.purpose-card:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.15);
}

.purpose-icon {
    font-size: 3rem;
    color: var(--accent-green);
    margin-bottom: 1rem;
}

.purpose-card h3 {
    color: white;
    margin-bottom: 1rem;
}

.purpose-card p {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
}

/* Stats Section */
.stats-container {
    padding: 2rem 0;
}

.stat-item {
    padding: 1rem;
}

.stat-number {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: white;
}

.stat-label {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.9);
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Grid System */
.row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
}

.col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
    padding: 0 15px;
}

.col-md-3 {
    flex: 0 0 25%;
    max-width: 25%;
    padding: 0 15px;
}

@media (max-width: 768px) {
    .col-md-6, .col-md-3 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 2rem;
    }
    
    .timeline::before {
        left: 1rem;
    }
    
    .timeline-item {
        padding-left: 3rem;
    }
    
    .timeline-year {
        width: 3rem;
        height: 3rem;
        font-size: 0.8rem;
    }
}

/* Animation Classes from index.php */
.animate-on-scroll {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
}

.animate-on-scroll.animate-in {
    opacity: 1;
    transform: translateY(0);
}

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
// Scroll Animation Observer (same as index.php)
document.addEventListener('DOMContentLoaded', function() {
    const elementsToAnimate = [
        '.section-title',
        '.section-subtitle', 
        '.card',
        '.purpose-card',
        '.timeline-item',
        '.stat-item',
        '.hero-title',
        '.hero-subtitle',
        '.content-block',
        '.image-container'
    ];
    
    elementsToAnimate.forEach(selector => {
        const elements = document.querySelectorAll(selector);
        elements.forEach((element, index) => {
            if (selector === '.card' || selector === '.purpose-card') {
                element.classList.add('animate-fade-up');
            } else if (selector === '.content-block') {
                element.classList.add('animate-fade-left');
            } else if (selector === '.image-container') {
                element.classList.add('animate-fade-right');
            } else if (selector === '.stat-item') {
                element.classList.add('animate-scale');
            } else {
                element.classList.add('animate-on-scroll');
            }
            
            element.style.transitionDelay = `${index * 0.1}s`;
        });
    });
    
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
    
    const animatedElements = document.querySelectorAll('.animate-on-scroll, .animate-fade-up, .animate-fade-left, .animate-fade-right, .animate-scale');
    animatedElements.forEach(element => {
        observer.observe(element);
    });
});
</script>

</body>
</html>
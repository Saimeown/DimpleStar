<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find Dimple Star Transport terminals in Espana Manila and San Jose Occidental Mindoro. Get location details, contact information, and directions.">
    <meta name="keywords" content="terminals, Espana, San Jose, Manila, Mindoro, bus station, location, contact">
    <meta name="author" content="Dimple Star Transport">
    
    <title>Our Terminals - Dimple Star Transport</title>
    
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

    <!-- Maps Section -->
    <section class="section features-white-bg" id="maps-section">
        <div class="container">
            <div class="section-header text-center" style="margin-top: 5rem;">
                <h2 class="section-title features-title animate-on-scroll" style="color: white; opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.3s forwards;">Find Us</h2>
                <p class="section-subtitle features-subtitle animate-on-scroll" style="opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.5s forwards;">Easy to locate with detailed maps and directions</p>
            </div>
            
            <!-- Maps Grid Container -->
            <div class="maps-grid" style="opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.7s forwards;">
                <!-- Espana Terminal Map -->
                <div class="map-container animate-fade-up" id="espana-map">
                <div class="map-header">
                    <h3 style="color: white;">Espana Terminal - Manila</h3>
                    <p>Your gateway to and from Metro Manila</p>
                </div>
                <div class="map-wrapper">
                    <iframe 
                        width="100%" 
                        height="400" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com.ph/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dimple+Star,+836BAntipoloStSampaloc,521,Manila,&amp;aq=0&amp;oq=Metro+Manila&amp;sll=14.6125312,120.9948033&amp;sspn=0.011772,0.021136&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Dimple+Star&amp;ll=14.6125312,120.9948033&amp;spn=0.011772,0.021136&amp;z=14&amp;output=embed">
                    </iframe>
                </div>
                <div class="map-footer">
                    <a href="https://www.google.com/maps/place/Dimple+Star/@14.6125312,120.9948033,770m/data=!3m2!1e3!4b1!4m2!3m1!1s0x3397b60300001d5d:0xd30645794daddf84?hl=en;z=14" target="_blank" class="btn btn-outline">
                        <i class="fas fa-external-link-alt"></i> View on Google Maps
                    </a>
                </div>
            </div>

            <!-- San Jose Terminal Map -->
            <div class="map-container animate-fade-up" id="sanjose-map">
                <div class="map-header">
                    <h3 style="color: white;">San Jose Terminal</h3>
                    <p>Your connection point in beautiful Mindoro</p>
                </div>
                <div class="map-wrapper">
                    <iframe 
                        width="100%" 
                        height="400" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com.ph/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dimple+Star+Transport,+BonifacioSt,SanJose,OccidentalMindoro,&amp;aq=0&amp;oq=&amp;sll=12.3540632,121.0618653&amp;sspn=0.011772,0.021136&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Dimple+Star+Transport&amp;ll=12.3540632,121.0618653&amp;spn=0.011772,0.021136&amp;z=14&amp;output=embed">
                    </iframe>
                </div>
                <div class="map-footer">
                    <a href="https://www.google.com/maps/place/Dimple+Star+Transport/@14.6143711,120.9841972,458m/data=!3m2!1e3!4b1!4m2!3m1!1s0x3397b5fe6f7ebf6b:0xc34baa5ed38261eb?hl=en;z=14" target="_blank" class="btn btn-outline">
                        <i class="fas fa-external-link-alt"></i> View on Google Maps
                    </a>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Travel Tips Section -->
    <section class="section text-white" id="travel-tips" style="
  background-image: url('assets/images/travel-tips.svg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: 100vh; 
  width: 100%;
  padding-top: 17rem;
">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title text-white animate-on-scroll">Travel Tips</h2>
                <p class="section-subtitle animate-on-scroll" style="color: rgba(255, 255, 255, 0.9);">Make your journey smooth and comfortable</p>
            </div>
            
            <div class="tips-grid">
                <div class="tip-card animate-fade-up">
                    <div class="tip-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>Arrive Early</h4>
                    <p>We recommend arriving at the terminal at least 30 minutes before your scheduled departure time.</p>
                </div>
                
                <div class="tip-card animate-fade-up">
                    <div class="tip-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <h4>Valid ID Required</h4>
                    <p>Please bring a valid government-issued ID for verification and security purposes.</p>
                </div>
                
                <div class="tip-card animate-fade-up">
                    <div class="tip-icon">
                        <i class="fas fa-luggage-cart"></i>
                    </div>
                    <h4>Luggage Guidelines</h4>
                    <p>Check our luggage policy for size and weight restrictions to avoid any inconvenience.</p>
                </div>
                
                <div class="tip-card animate-fade-up">
                    <div class="tip-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h4>Book Online</h4>
                    <p>Save time by booking your tickets online or calling our reservation hotline in advance.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

<style>
/* Terminal Page Specific Styles */
.terminals-hero {
    background: linear-gradient(rgba(26, 54, 93, 0.8), rgba(0, 133, 35, 0.8)), url('slide/images/b3.png');
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
    background: linear-gradient(135deg, rgba(26, 54, 93, 0.7), rgba(0, 133, 35, 0.7));
}

.hero-content {
    position: relative;
    z-index: 2;
}

/* FORCED CENTERING FOR TERMINALS - ABSOLUTE CENTER AT ALL COSTS */
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
    max-width: 700px !important;
    margin: 0 auto !important;
    display: block !important;
    width: 100% !important;
    position: relative !important;
}

/* Terminals Grid */
.terminals-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
    gap: 3rem;
    margin-top: 3rem;
}

.terminal-card {
    background: white;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-lg);
    overflow: hidden;
    transition: all var(--transition-normal);
}

.terminal-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.terminal-header {
    background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
    color: white;
    padding: 2rem;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.terminal-icon {
    font-size: 2.5rem;
    background: rgba(255, 255, 255, 0.2);
    padding: 1rem;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.terminal-info h3 {
    margin: 0;
    font-size: 1.8rem;
    color: white;
}

.terminal-location {
    color: rgba(255, 255, 255, 0.9);
    margin: 0;
    font-size: 1rem;
}

.terminal-details {
    padding: 1.5rem 2rem;
    border-bottom: 1px solid #eee;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
    font-size: 0.95rem;
}

.detail-item:last-child {
    margin-bottom: 0;
}

.detail-item i {
    color: var(--primary-green);
    width: 20px;
}

.terminal-features {
    padding: 1.5rem 2rem;
    border-bottom: 1px solid #eee;
}

.terminal-features h4 {
    margin-bottom: 1rem;
    color: var(--primary-green);
}

.terminal-features ul {
    list-style: none;
    padding: 0;
}

.terminal-features li {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
}

.terminal-features li i {
    color: var(--primary-green);
    font-size: 0.8rem;
}

.terminal-actions {
    padding: 1.5rem 2rem;
    display: flex;
    gap: 1rem;
}

/* Maps Section */
.maps-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    margin-top: 2rem;
    align-items: stretch;
}

.map-container {
    background: white;
    border-radius: var(--border-radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    margin-bottom: 0;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.map-header {
    background: var(--bg-light);
    padding: 1.5rem 2rem;
    border-bottom: 1px solid #eee;
}

.map-header h3 {
    margin: 0 0 0.5rem 0;
    color: var(--primary-green);
}

.map-header p {
    margin: 0;
    color: var(--text-light);
}

.map-wrapper {
    position: relative;
    width: 100%;
    height: 400px;
    flex: 1;
}

.map-wrapper iframe {
    border: none;
    width: 100%;
    height: 100%;
}

.map-footer {
    padding: 1rem 2rem;
    text-align: center;
    background: var(--bg-light);
    margin-top: auto;
}

/* Travel Tips */
.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.tip-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--border-radius-lg);
    padding: 1.5rem;
    text-align: center;
    transition: all var(--transition-normal);
}

.tip-card:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.15);
}

.tip-icon {
    font-size: 2.5rem;
    color: var(--accent-green);
    margin-bottom: 1rem;
}

.tip-card h4 {
    color: white;
    margin-bottom: 1rem;
}

.tip-card p {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    font-size: 0.9rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .terminals-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .maps-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .terminal-header {
        flex-direction: column;
        text-align: center;
    }
    
    .terminal-actions {
        flex-direction: column;
    }
    
    .tips-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .map-wrapper {
        height: 300px;
    }
}

/* Animation Classes (same as about.php) */
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
        '.terminal-card',
        '.map-container',
        '.tip-card',
        '.hero-title',
        '.hero-subtitle'
    ];
    
    elementsToAnimate.forEach(selector => {
        const elements = document.querySelectorAll(selector);
        elements.forEach((element, index) => {
            if (selector === '.terminal-card') {
                element.classList.add(index % 2 === 0 ? 'animate-fade-left' : 'animate-fade-right');
            } else if (selector === '.map-container' || selector === '.tip-card') {
                element.classList.add('animate-fade-up');
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="View our comprehensive bus routes and schedules between Manila, Laguna, and Mindoro. Plan your journey with Dimple Star Transport's reliable service.">
    <meta name="keywords" content="routes, schedules, bus, Manila, Mindoro, Laguna, timetable, fare, booking">
    <meta name="author" content="Dimple Star Transport">
    
    <title>Routes & Schedules - Dimple Star Transport</title>
    
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
    <section class="hero routes-hero" id="routes-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content-forced-center">
            <center>
            <h1 class="hero-title-forced-center animate-on-scroll">Routes & Schedules</h1>
            <p class="hero-subtitle-forced-center animate-on-scroll">Plan your journey with our comprehensive route network and reliable schedules</p>
            </center>
        </div>
    </section>

   

    <!-- Routes Overview Section -->
    <section class="section">
        <div class="container">
            <!-- Beautiful Schedule Section -->
            <div class="schedule-section">                
                <div class="modern-schedule-container animate-fade-up">
                    <div class="schedule-grid">
                        <!-- Ali Mall Cubao -->
                        <div class="terminal-card" style="opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.3s forwards;">
                            <div class="terminal-header">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Ali Mall Cubao Terminal</h3>
                            </div>
                            <div class="schedule-times">
                                <span class="time-badge">9:00 AM</span>
                                <span class="time-badge">10:00 AM</span>
                                <span class="time-badge">1:00 PM</span>
                                <span class="time-badge">4:00 PM</span>
                            </div>
                            <div class="destination-tag">→ San Jose</div>
                        </div>
                        
                        <!-- Alabang Terminal -->
                        <div class="terminal-card" style="opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.4s forwards;">
                            <div class="terminal-header">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Alabang Terminal</h3>
                            </div>
                            <div class="schedule-times">
                                <span class="time-badge">6:00 AM</span>
                                <span class="time-badge">7:00 AM</span>
                                <span class="time-badge">2:00 PM</span>
                                <span class="time-badge">6:00 PM</span>
                                <span class="time-badge">10:00 PM</span>
                            </div>
                            <div class="destination-tag">→ San Jose</div>
                        </div>
                        
                        <!-- Cabuyao Terminal -->
                        <div class="terminal-card" style="opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.5s forwards;">
                            <div class="terminal-header">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Cabuyao Terminal</h3>
                            </div>
                            <div class="schedule-times">
                                <span class="time-badge">8:00 AM</span>
                                <span class="time-badge">9:00 AM</span>
                                <span class="time-badge">4:00 PM</span>
                                <span class="time-badge">8:00 PM</span>
                            </div>
                            <div class="destination-tag">→ San Jose</div>
                        </div>
                        
                        <!-- Espana Terminal -->
                        <div class="terminal-card" style="opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.6s forwards;">
                            <div class="terminal-header">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Espana Terminal</h3>
                            </div>
                            <div class="schedule-times">
                                <span class="time-badge">4:30 AM</span>
                                <span class="time-badge">5:30 AM</span>
                                <span class="time-badge">12:00 PM</span>
                                <span class="time-badge">4:00 PM</span>
                                <span class="time-badge">8:00 PM</span>
                            </div>
                            <div class="destination-tag">→ San Jose</div>
                        </div>
                        
                        <!-- San Lazaro Terminal -->
                        <div class="terminal-card" style="opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.7s forwards;">
                            <div class="terminal-header">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>San Lazaro Terminal</h3>
                            </div>
                            <div class="schedule-times">
                                <span class="time-badge">3:00 AM</span>
                                <span class="time-badge">4:30 AM</span>
                                <span class="time-badge">11:00 AM</span>
                                <span class="time-badge">3:00 PM</span>
                                <span class="time-badge">7:00 PM</span>
                            </div>
                            <div class="destination-tag">→ San Jose</div>
                        </div>
                        
                        <!-- Pasay Terminal -->
                        <div class="terminal-card" style="opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out 0.8s forwards;">
                            <div class="terminal-header">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Pasay Terminal</h3>
                            </div>
                            <div class="schedule-times">
                                <span class="time-badge">5:00 AM</span>
                                <span class="time-badge">6:00 AM</span>
                                <span class="time-badge">1:00 PM</span>
                                <span class="time-badge">3:00 PM</span>
                            </div>
                            <div class="destination-tag">→ San Jose</div>
                        </div>
                    </div>
                    
                    <div class="schedule-note">
                        <p><i class="fas fa-info-circle"></i> All schedules are subject to change. Please arrive 30 minutes before departure.</p>
                    </div>
                </div>
            </div>

            <!-- Route Cards -->
            <div class="routes-grid" id="routesGrid" style="display: none;">
                <!-- Manila to Mindoro Routes -->
                <div class="route-card animate-fade-up" data-origin="Manila" data-destination="Mindoro">
                    <div class="route-header">
                        <div class="route-title">
                            <h3>Manila - San Jose</h3>
                            <div class="route-badges">
                                <span class="badge badge-express">Express</span>
                                <span class="badge badge-ac">AC Available</span>
                            </div>
                        </div>
                        <div class="route-price">₱450 - ₱650</div>
                    </div>
                    
                    <div class="route-details">
                        <div class="route-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>6-7 hours</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-route"></i>
                                <span>Direct Route</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-users"></i>
                                <span>45-54 seats</span>
                            </div>
                        </div>
                        
                        <div class="terminals">
                            <h5>Available Terminals:</h5>
                            <div class="terminal-list">
                                <span class="terminal-item">San Lazaro</span>
                                <span class="terminal-item">Espana</span>
                                <span class="terminal-item">Alabang</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="schedule-preview">
                        <h5>Daily Schedules:</h5>
                        <div class="schedule-times">
                            <div class="schedule-terminal">
                                <strong>San Lazaro:</strong>
                                <div class="time-slots">
                                    <span class="time-slot">3:00 AM</span>
                                    <span class="time-slot">4:30 AM</span>
                                    <span class="time-slot">11:00 AM</span>
                                    <span class="time-slot">3:00 PM</span>
                                    <span class="time-slot">7:00 PM</span>
                                </div>
                            </div>
                            <div class="schedule-terminal">
                                <strong>Espana:</strong>
                                <div class="time-slots">
                                    <span class="time-slot">4:30 AM</span>
                                    <span class="time-slot">5:30 AM</span>
                                    <span class="time-slot">12:00 PM</span>
                                    <span class="time-slot">4:00 PM</span>
                                    <span class="time-slot">8:00 PM</span>
                                </div>
                            </div>
                            <div class="schedule-terminal">
                                <strong>Alabang:</strong>
                                <div class="time-slots">
                                    <span class="time-slot">6:00 AM</span>
                                    <span class="time-slot">7:00 AM</span>
                                    <span class="time-slot">2:00 PM</span>
                                    <span class="time-slot">6:00 PM</span>
                                    <span class="time-slot">10:00 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="route-actions">
                        <a href="book.php?origin=Manila&destination=San Jose" class="btn btn-primary">Book This Route</a>
                        <button class="btn btn-outline" onclick="showRouteDetails('manila-sanjose')">View Details</button>
                    </div>
                </div>

                <!-- Laguna to Mindoro Routes -->
                <div class="route-card animate-fade-up" data-origin="Laguna" data-destination="Mindoro">
                    <div class="route-header">
                        <div class="route-title">
                            <h3>Cabuyao - San Jose</h3>
                            <div class="route-badges">
                                <span class="badge badge-regular">Regular</span>
                                <span class="badge badge-ac">AC Available</span>
                            </div>
                        </div>
                        <div class="route-price">₱350 - ₱500</div>
                    </div>
                    
                    <div class="route-details">
                        <div class="route-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>5-6 hours</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-route"></i>
                                <span>Scenic Route</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-users"></i>
                                <span>45-54 seats</span>
                            </div>
                        </div>
                        
                        <div class="terminals">
                            <h5>Terminal:</h5>
                            <div class="terminal-list">
                                <span class="terminal-item">Cabuyao Terminal</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="schedule-preview">
                        <h5>Daily Schedules:</h5>
                        <div class="schedule-times">
                            <div class="schedule-terminal">
                                <strong>Cabuyao Terminal:</strong>
                                <div class="time-slots">
                                    <span class="time-slot">8:00 AM</span>
                                    <span class="time-slot">9:00 AM</span>
                                    <span class="time-slot">4:00 PM</span>
                                    <span class="time-slot">8:00 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="route-actions">
                        <a href="book.php?origin=Cabuyao&destination=San Jose" class="btn btn-primary">Book This Route</a>
                        <button class="btn btn-outline" onclick="showRouteDetails('cabuyao-sanjose')">View Details</button>
                    </div>
                </div>

                <!-- Inter-Mindoro Routes -->
                <div class="route-card animate-fade-up" data-origin="Mindoro" data-destination="Mindoro">
                    <div class="route-header">
                        <div class="route-title">
                            <h3>Mindoro Island Routes</h3>
                            <div class="route-badges">
                                <span class="badge badge-regular">Regular</span>
                                <span class="badge badge-local">Local</span>
                            </div>
                        </div>
                        <div class="route-price">₱50 - ₱200</div>
                    </div>
                    
                    <div class="route-details">
                        <div class="route-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>1-4 hours</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-route"></i>
                                <span>Multiple Routes</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-users"></i>
                                <span>20-45 seats</span>
                            </div>
                        </div>
                        
                        <div class="terminals">
                            <h5>Covered Areas:</h5>
                            <div class="terminal-list">
                                <span class="terminal-item">Naujan</span>
                                <span class="terminal-item">Victoria</span>
                                <span class="terminal-item">Pinamalayan</span>
                                <span class="terminal-item">Gloria</span>
                                <span class="terminal-item">Bongabong</span>
                                <span class="terminal-item">Roxas</span>
                                <span class="terminal-item">Mansalay</span>
                                <span class="terminal-item">Bulalacao</span>
                                <span class="terminal-item">Magsaysay</span>
                                <span class="terminal-item">Pola</span>
                                <span class="terminal-item">Socorro</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="schedule-preview">
                        <h5>Schedules:</h5>
                        <p class="schedule-note">Multiple daily trips available. Contact us for specific route schedules.</p>
                    </div>
                    
                    <div class="route-actions">
                        <a href="book.php?type=local" class="btn btn-primary">Book Local Route</a>
                        <button class="btn btn-outline" onclick="showRouteDetails('mindoro-local')">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    

    <?php include 'components/footer.php'; ?>

    <script src="assets/js/main.js"></script>
    <script>
        function filterRoutes() {
            const origin = document.getElementById('search-origin').value;
            const destination = document.getElementById('search-destination').value;
            const routeCards = document.querySelectorAll('.route-card');
            
            routeCards.forEach(card => {
                const cardOrigin = card.dataset.origin;
                const cardDestination = card.dataset.destination;
                
                let show = true;
                
                if (origin && cardOrigin !== origin) {
                    show = false;
                }
                
                if (destination && cardDestination !== destination) {
                    show = false;
                }
                
                card.style.display = show ? 'block' : 'none';
            });
        }
        
        function showRouteDetails(routeId) {
            // This would typically open a modal or navigate to a detailed route page
            alert(`Showing detailed information for route: ${routeId}`);
        }
        
        // Initialize scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            initScrollAnimations();
        });
        
        function initScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                    }
                });
            }, observerOptions);
            
            // Observe all animation elements
            document.querySelectorAll('.animate-on-scroll, .animate-fade-up, .animate-slide-right, .animate-bounce').forEach(el => {
                observer.observe(el);
            });
        }
    </script>
</body>
</html>

<style>
/* Route Search */
.route-search-container {
    background: var(--white);
    padding: var(--spacing-xl);
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-md);
    text-align: center;
}

.search-header h2 {
    color: var(--primary-green);
    margin-bottom: var(--spacing-sm);
}

.search-inputs {
    display: grid;
    grid-template-columns: 1fr 1fr auto;
    gap: var(--spacing-md);
    align-items: end;
    max-width: 600px;
    margin: var(--spacing-lg) auto 0;
}

/* Route Map */
.route-map-container {
    position: relative;
    background: var(--white);
    padding: var(--spacing-lg);
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-md);
    text-align: center;
}

.route-map {
    max-width: 100%;
    height: auto;
    border-radius: var(--border-radius-md);
}

.map-legend {
    position: absolute;
    top: var(--spacing-lg);
    right: var(--spacing-lg);
    background: rgba(255, 255, 255, 0.95);
    padding: var(--spacing-md);
    border-radius: var(--border-radius-md);
    border: 1px solid var(--accent-green);
}

.legend-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-xs);
}

.legend-line {
    width: 20px;
    height: 3px;
    border-radius: 2px;
}

.legend-line.express {
    background: var(--primary-green);
}

.legend-line.regular {
    background: var(--secondary-green);
}

.legend-point {
    width: 12px;
    height: 12px;
    border-radius: 50%;
}

.legend-point.terminal {
    background: var(--error-red);
}

/* Beautiful Schedule Section */
.schedule-section {
    padding: 60px 0;
    margin: 40px 0;
    border-radius: 20px;
}

.schedule-header {
    text-align: center;
    margin-bottom: 50px;
}

.schedule-header .section-title {
    font-size: 2.5rem;
    color: var(--green-primary);
    font-weight: 700;
    margin-bottom: 10px;
    font-family: 'Orbitron', sans-serif;
}

.schedule-header .section-subtitle {
    font-size: 1.2rem;
    color: #666;
    font-weight: 300;
    opacity: 0.8;
}

.modern-schedule-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.schedule-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 24px;
    margin-bottom: 40px;
}

.terminal-card {
    background: white;
    border-radius: 5px;
    padding: 24px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 133, 35, 0.1);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.terminal-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--green-primary), var(--green-light));
}

.terminal-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 48px rgba(0, 133, 35, 0.15);
    border-color: var(--green-primary);
}

.terminal-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    padding-bottom: 16px;
    border-bottom: 2px solid #f0f0f0;
}

.terminal-header i {
    color: var(--green-primary);
    font-size: 1.2rem;
    width: 20px;
}

.terminal-header h3 {
    color: #333;
    font-size: 1.3rem;
    font-weight: 600;
    margin: 0;
    flex: 1;
}

.schedule-times {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 20px;
}

.time-badge {
    background: linear-gradient(135deg, var(--green-primary), var(--green-light));
    color: black;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 400;
    font-family: 'Product Sans', 'Google Sans', sans-serif;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 50px;
    transition: all 0.2s ease;
}

.time-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 133, 35, 0.3);
}

.destination-tag {
    background: #f8f9fa;
    color: black;
    padding: 10px 16px;
    border-radius: 50px;
    font-weight: 600;
    text-align: center;
    border: 2px solid #e8f5e8;
    font-size: 1rem;
}

.schedule-note {
    background: white;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
    border-left: 4px solid var(--green-primary);
}

.schedule-note p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.schedule-note i {
    color: var(--green-primary);
}

/* Responsive Design */
@media (max-width: 768px) {
    .schedule-section {
        padding: 40px 0;
        margin: 20px 0;
    }
    
    .schedule-header .section-title {
        font-size: 2rem;
    }
    
    .schedule-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    
    .terminal-card {
        padding: 20px;
    }
    
    .terminal-header h3 {
        font-size: 1.1rem;
    }
    
    .time-badge {
        font-size: 0.85rem;
        padding: 6px 12px;
    }
    
    .schedule-times {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .terminal-header {
        flex-direction: column;
        text-align: center;
        gap: 8px;
    }
    
    .time-badge {
        font-size: 0.8rem;
        padding: 6px 10px;
    }
    
    .schedule-note p {
        flex-direction: column;
        gap: 4px;
        font-size: 0.9rem;
    }
}

/* Routes Grid */
.routes-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
    gap: 2rem;
    max-width: 1400px;
    margin: 0 auto;
}

/* Route Cards - Clean Modern Design */
.route-card {
    background: white;
    border-radius: 0px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid #f0f0f0;
    position: relative;
}

.route-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    border-color: var(--green-primary);
}

.route-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--green-primary), var(--green-light));
}

/* Route Header */
.route-header {
    padding: 24px 24px 16px;
    background: linear-gradient(135deg, #f8fffe 0%, #f0fff8 100%);
    border-bottom: 1px solid #e8f5e8;
}

.route-path h3 {
    color: var(--green-primary);
    font-size: 1.4rem;
    font-weight: 700;
    margin: 0 0 8px 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.route-description {
    color: #666;
    font-size: 0.9rem;
    margin: 0;
    opacity: 0.8;
}

.route-badges {
    display: flex;
    gap: 8px;
    margin-top: 12px;
    flex-wrap: wrap;
}

.badge {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.badge-express {
    background: var(--green-primary);
    color: white;
}

.badge-regular {
    background: #e3f2fd;
    color: #1976d2;
}

.badge-ac {
    background: #f3e5f5;
    color: #7b1fa2;
}

.badge-local {
    background: #fff3e0;
    color: #f57c00;
}

/* Route Info Grid */
.route-info-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
    padding: 24px;
    background: white;
}

.info-card {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px;
    background: #f8f9fa;
    border-radius: 12px;
    border-left: 3px solid var(--green-primary);
}

.info-card i {
    color: var(--green-primary);
    font-size: 1.2rem;
    width: 20px;
    text-align: center;
}

.info-card div {
    flex: 1;
}

.info-label {
    display: block;
    font-size: 0.8rem;
    color: #666;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.info-value {
    display: block;
    font-size: 1rem;
    color: #333;
    font-weight: 600;
    margin-top: 2px;
}

/* Terminals Section */
.terminals-section {
    padding: 0 24px 16px;
    background: white;
}

.terminals-section h5 {
    color: #333;
    font-size: 1rem;
    font-weight: 600;
    margin: 0 0 12px 0;
}

.terminal-chips {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}

.terminal-chip {
    background: linear-gradient(135deg, var(--green-primary), var(--green-light));
    color: white;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 500;
}

/* Schedule Section */
.schedule-section {
    padding: 16px 24px 24px;
}

.schedule-section h5 {
    color: #333;
    font-size: 1rem;
    font-weight: 600;
    margin: 0 0 16px 0;
}

.time-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 16px;
}

.time-column {
    background: white;
    padding: 16px;
    border-radius: 12px;
    border: 1px solid #e8f5e8;
}

.terminal-name {
    display: block;
    color: var(--green-primary);
    font-weight: 600;
    font-size: 0.9rem;
    margin-bottom: 12px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.time-chips {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
}

.time-chip {
    background: #f8f9fa;
    color: #495057;
    padding: 6px 10px;
    border-radius: 16px;
    font-size: 0.8rem;
    font-weight: 500;
    border: 1px solid #dee2e6;
    transition: all 0.2s ease;
}

.time-chip:hover {
    background: var(--green-primary);
    color: white;
    border-color: var(--green-primary);
}

/* Route Actions */
.route-actions {
    padding: 20px 24px 24px;
    background: white;
    display: flex;
    gap: 12px;
    border-top: 1px solid #f0f0f0;
}

.btn-primary {
    flex: 1;
    background: linear-gradient(135deg, var(--green-primary), var(--green-light));
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 12px;
    font-weight: 600;
    text-decoration: none;
    text-align: center;
    transition: all 0.3s ease;
    font-size: 0.95rem;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 133, 35, 0.3);
    text-decoration: none;
    color: white;
}

.btn-secondary {
    flex: 1;
    background: white;
    color: var(--green-primary);
    border: 2px solid var(--green-primary);
    padding: 12px 24px;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.95rem;
}

.btn-secondary:hover {
    background: var(--green-primary);
    color: white;
    transform: translateY(-2px);
}
    color: var(--text-white);
}

.badge-ac {
    background: var(--light-green);
    color: var(--dark-green);
}

.badge-local {
    background: var(--warning-orange);
    color: var(--text-white);
}

.route-price {
    font-size: 1.25rem;
    font-weight: var(--font-weight-bold);
    color: var(--primary-green);
}

.route-details {
    padding: 0 var(--spacing-lg) var(--spacing-md);
}

.route-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-md);
}

.info-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.9rem;
}

.info-item i {
    color: var(--primary-green);
    width: 16px;
}

.terminals {
    margin-bottom: var(--spacing-md);
}

.terminals h5 {
    color: var(--primary-green);
    margin-bottom: var(--spacing-sm);
    font-size: 0.9rem;
}

.terminal-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-xs);
}

.terminal-item {
    background: var(--bg-light);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--border-radius-sm);
    font-size: 0.8rem;
    border: 1px solid var(--accent-green);
}

.schedule-preview {
    background: var(--bg-light);
    padding: var(--spacing-md);
    border-radius: var(--border-radius-md);
    margin-bottom: var(--spacing-md);
}

.schedule-preview h5 {
    color: var(--primary-green);
    margin-bottom: var(--spacing-sm);
    font-size: 0.9rem;
}

.schedule-terminal {
    margin-bottom: var(--spacing-sm);
}

.schedule-terminal:last-child {
    margin-bottom: 0;
}

.schedule-terminal strong {
    display: block;
    margin-bottom: var(--spacing-xs);
    color: var(--text-dark);
    font-size: 0.85rem;
}

.time-slots {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-xs);
}

.time-slot {
    background: var(--white);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--border-radius-sm);
    font-size: 0.75rem;
    border: 1px solid var(--primary-green);
    color: var(--primary-green);
    font-weight: var(--font-weight-medium);
}

.schedule-note {
    color: var(--text-light);
    font-size: 0.9rem;
}

.route-actions {
    display: flex;
    gap: var(--spacing-sm);
    padding: var(--spacing-lg);
    background: var(--bg-light);
}

.route-actions .btn {
    flex: 1;
    text-align: center;
}

/* Schedule Information */
.schedule-info-content h2 {
    color: var(--text-white);
    text-align: center;
    margin-bottom: var(--spacing-xl);
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.info-grid .info-item {
    text-align: center;
}

.info-grid .info-item i {
    font-size: 3rem;
    color: var(--accent-green);
    margin-bottom: var(--spacing-md);
}

.info-grid .info-item h4 {
    color: var(--text-white);
    margin-bottom: var(--spacing-sm);
}

.info-grid .info-item p {
    color: rgba(255, 255, 255, 0.9);
}

/* Fare Table */
.fare-section {
    max-width: 1000px;
    margin: 0 auto;
}

.fare-table-container {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: var(--spacing-xl);
    margin-top: var(--spacing-xl);
}

.fare-table h3 {
    color: var(--primary-green);
    margin-bottom: var(--spacing-md);
}

.modern-table {
    width: 100%;
    border-collapse: collapse;
    background: var(--white);
    border-radius: var(--border-radius-md);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
}

.modern-table thead {
    background: var(--primary-green);
    color: var(--text-white);
}

.modern-table th,
.modern-table td {
    padding: var(--spacing-sm) var(--spacing-md);
    text-align: left;
    border-bottom: 1px solid var(--accent-green);
}

.modern-table tbody tr:hover {
    background: var(--accent-green);
}

.modern-table tbody tr:last-child td {
    border-bottom: none;
}

.fare-notes {
    background: var(--white);
    padding: var(--spacing-lg);
    border-radius: var(--border-radius-md);
    box-shadow: var(--shadow-sm);
    border-left: 4px solid var(--secondary-green);
}

.fare-notes h4 {
    color: var(--primary-green);
    margin-bottom: var(--spacing-md);
}

.fare-notes ul {
    list-style: none;
}

.fare-notes li {
    margin-bottom: var(--spacing-xs);
    padding-left: var(--spacing-md);
    position: relative;
}

.fare-notes li::before {
    content: '•';
    color: var(--secondary-green);
    position: absolute;
    left: 0;
    font-weight: bold;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .fare-table-container {
        grid-template-columns: 1fr;
    }
    
    .routes-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .search-inputs {
        grid-template-columns: 1fr;
    }
    
    .route-header {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .route-info {
        grid-template-columns: 1fr;
    }
    
    .route-actions {
        flex-direction: column;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .map-legend {
        position: static;
        margin-top: var(--spacing-md);
    }
    
    .modern-table {
        font-size: 0.85rem;
    }
    
    .modern-table th,
    .modern-table td {
        padding: var(--spacing-xs) var(--spacing-sm);
    }
}

/* Hero Section - Forced Centering */
.routes-hero {
    background: linear-gradient(135deg, var(--green-primary) 0%, var(--green-light) 100%);
    color: white;
    padding: 120px 0 80px;
    margin-top: -70px;
    padding-top: 150px;
    position: relative;
    overflow: hidden;
    min-height: 110vh;
    display: flex;
    align-items: center;
}

.routes-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('images/oldbus.jpg') center/cover;
    opacity: 0.1;
    z-index: 0;
}

.routes-hero .container {
    position: relative;
    z-index: 1;
}

.routes-hero-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    z-index: 2;
    width: 100%;
    max-width: 800px;
}

.routes-hero h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        font-family: 'Product Sans', 'Google Sans', sans-serif;
}

.routes-hero .subtitle {
    font-size: 1.3rem;
    opacity: 0.9;
    margin-bottom: 2rem;
    font-weight: 300;
}

@media (max-width: 768px) {
    .routes-hero h1 {
        font-size: 2.5rem;
    }
    
    .routes-hero .subtitle {
        font-size: 1.1rem;
    }
}

/* Animation Classes */
.animate-on-scroll,
.animate-fade-up,
.animate-slide-right,
.animate-bounce {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.animate-slide-right {
    transform: translateX(-20px);
}

.animate-bounce {
    transform: translateY(40px);
}

.animate-on-scroll.animated,
.animate-fade-up.animated,
.animate-slide-right.animated,
.animate-bounce.animated {
    opacity: 1;
    transform: translate(0, 0);
}

.animate-bounce.animated {
    animation: bounceIn 0.8s ease-out;
}

@keyframes bounceIn {
    0% {
        opacity: 0;
        transform: scale(0.3) translateY(40px);
    }
    50% {
        opacity: 1;
        transform: scale(1.05) translateY(-10px);
    }
    70% {
        transform: scale(0.9) translateY(0);
    }
    100% {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}
</style>

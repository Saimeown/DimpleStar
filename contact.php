e<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Dimple Star Transport. Get in touch with us for bookings, inquiries, and customer support.">
    <title>Contact Us - Dimple Star Transport</title>
    
    <link rel="icon" href="assets/images/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php 
    session_start();
    include 'components/header.php'; 
    ?>

    <!-- Contact Hero Section -->
    <section class="hero contact-hero" id="contact-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content-forced-center">
            <h1 class="animate-on-scroll hero-title-forced-center">Get in Touch</h1>
            <p class="hero-subtitle-forced-center animate-on-scroll">We're here to help with your travel needs</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <!-- Contact Form -->
                <div class="contact-form-section animate-fade-up">
                    <div class="form-header">
                        <h2>Send us a Message</h2>
                        <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                    </div>

                    <form class="contact-form" action="php_includes/contact_handler.php" method="POST" id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName" class="form-label required">First Name</label>
                                <input type="text" id="firstName" name="first_name" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="form-label required">Last Name</label>
                                <input type="text" id="lastName" name="last_name" class="form-input" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email" class="form-label required">Email Address</label>
                                <input type="email" id="email" name="email" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-input" placeholder="09XX XXX XXXX">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject" class="form-label required">Subject</label>
                            <select id="subject" name="subject" class="form-select" required>
                                <option value="">Select a subject</option>
                                <option value="booking">Booking Inquiry</option>
                                <option value="schedule">Schedule Information</option>
                                <option value="complaint">Complaint/Feedback</option>
                                <option value="lost_found">Lost & Found</option>
                                <option value="charter">Charter Services</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label required">Message</label>
                            <textarea id="message" name="message" class="form-textarea" rows="6" placeholder="Please provide details about your inquiry..." required></textarea>
                        </div>

                        

                        <div class="form-actions">
                            <button type="submit" class="btn-primary">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                            <button type="reset" class="btn-secondary">
                                <i class="fas fa-undo"></i> Reset Form
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="contact-info-section animate-slide-right">
                    <div class="contact-card">
                        <div class="contact-header">
                            <h3>Get in Touch</h3>
                            <p>Choose the best way to reach us</p>
                        </div>

                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="method-info">
                                    <h4>Phone Support</h4>
                                    <p><strong><a href="tel:09292090712">0929 209 0712</a></strong></p>
                                    <p class="method-hours">24/7 Customer Support</p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="method-info">
                                    <h4>Email Support</h4>
                                    <p><strong><a href="mailto:info@dimplestar.com">info@dimplestar.com</a></strong></p>
                                    <p class="method-hours">Response within 24 hours</p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="method-info">
                                    <h4>Head Office</h4>
                                    <p><strong>Block 1 Lot 10, Southpoint Subdivision</strong><br>
                                    Brgy Banay-Banay, Cabuyao, Laguna</p>
                                    <p class="method-hours">Mon - Sun: 6:00 AM - 10:00 PM</p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fab fa-facebook-messenger"></i>
                                </div>
                                <div class="method-info">
                                    <h4>Facebook Messenger</h4>
                                    <p><strong><a href="#" target="_blank">@DimpleStarTransport</a></strong></p>
                                    <p class="method-hours">Quick responses during business hours</p>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </section>

    

    <?php include 'components/footer.php'; ?>

    <script src="assets/js/main.js"></script>
    <script>
        function toggleFAQ(element) {
            const faqItem = element.parentNode;
            const answer = faqItem.querySelector('.faq-answer');
            const icon = element.querySelector('i');
            
            faqItem.classList.toggle('active');
            
            if (faqItem.classList.contains('active')) {
                icon.style.transform = 'rotate(180deg)';
            } else {
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(() => {
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
        
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
/* Contact Hero Section - Forced Centering */
.contact-hero {
    background: linear-gradient(135deg, var(--green-primary) 0%, var(--green-light) 100%);
    color: white;
    padding: 120px 0 80px;
    margin-top: -70px;
    padding-top: 150px;
    position: relative;
    overflow: hidden;
    min-height: 50vh;
    display: flex;
    align-items: center;
}

.contact-hero::before {
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

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.5) 100%);
    z-index: 1;
}

.hero-content-forced-center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    z-index: 2;
    width: 100%;
    max-width: 800px;
    padding: 0 20px;
}

.hero-title-forced-center {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    margin-top: 6rem;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    font-family: 'Product Sans', sans-serif;
    color: white;
}

.hero-subtitle-forced-center {
    font-size: 1.3rem;
    opacity: 0.9;
    margin-bottom: 2rem;
    font-weight: 300;
    color: white;
}

.breadcrumb {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 1rem;
    margin-top: 20px;
}

.breadcrumb a {
    color: white;
    text-decoration: none;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.breadcrumb a:hover {
    opacity: 1;
}

.breadcrumb i {
    opacity: 0.6;
    font-size: 0.8rem;
}

/* Contact Section */
.contact-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8fffe 0%, #f0fff8 100%);
}

.contact-container {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 3rem;
    max-width: 1200px;
    margin: 0 auto;
}

/* Contact Form */
.contact-form-section {
    background: white;
    padding: 2.5rem;
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 133, 35, 0.1);
    position: relative;
    overflow: hidden;
}

.contact-form-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--green-primary), var(--green-light));
}

.form-header {
    text-align: center;
    margin-bottom: 2rem;
    padding-bottom: 1.5rem;
    border-bottom: 2px solid #f0f0f0;
}

.form-header h2 {
    color: #333;
    margin-bottom: 0.5rem;
    font-size: 2rem;
    font-weight: 700;
    font-family: 'Product Sans', sans-serif;
}

.form-header p {
    color: #666;
    font-size: 1rem;
    opacity: 0.8;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    color: #333;
    font-weight: 600;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
    font-family: 'Product Sans', sans-serif;
}

.form-label.required::after {
    content: ' *';
    color: #e74c3c;
}

.form-input,
.form-select,
.form-textarea {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid #000000ff;
    border-radius: 50px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
    color: #333 !important;
    font-family: 'Product Sans', sans-serif;
}

/* Specific styling for select options */
.form-select option {
    color: #333 !important;
    background: white !important;
}

.form-input:focus,
.form-select:focus,
.form-textarea:focus {
    outline: none;
    border-color: black;
}

.form-textarea {
    resize: vertical;
    min-height: 120px;
}

.radio-group {
    display: flex;
    gap: 1.5rem;
    margin-top: 0.5rem;
}

.radio-button {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    font-size: 0.95rem;
}

.radio-custom {
    width: 20px;
    height: 20px;
    border: 2px solid #ddd;
    border-radius: 50%;
    position: relative;
    transition: all 0.3s ease;
}

.radio-button input[type="radio"] {
    display: none;
}

.radio-button input[type="radio"]:checked + .radio-custom {
    border-color: var(--green-primary);
    background: var(--green-primary);
}

.radio-button input[type="radio"]:checked + .radio-custom::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 8px;
    height: 8px;
    background: white;
    border-radius: 50%;
}

.form-actions {
    display: flex;
    gap: 1rem;
    margin-top: 2rem;
}

.btn-primary {
    flex: 1;
    background: black;
    color: white;
    border: none;
    padding: 14px 24px;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 133, 35, 0.3);
}

.btn-secondary {
    flex: 1;
    background: white;
    color: #333;
    border: 2px solid #333;
    padding: 14px 24px;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-family: 'Product Sans', sans-serif;
}

.btn-secondary:hover {
    background: #333;
    color: white;
    transform: translateY(-2px);
}

/* Contact Info */
.contact-info-section {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.contact-card {
    background: white;
    padding: 2rem;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border-left: 4px solid var(--green-primary);
}

.contact-header {
    text-align: center;
    margin-bottom: 1.5rem;
}

.contact-header h3 {
    color: #333;
    margin-bottom: 0.5rem;
    font-size: 1.5rem;
    font-weight: 700;
    font-family: 'Product Sans', sans-serif;
}

.contact-header p {
    color: #666;
    font-size: 0.95rem;
}

.contact-methods {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.contact-method {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem;
    border-radius: 12px;
    background: #f8f9fa;
    transition: all 0.3s ease;
}

.contact-method:hover {
    background: #e8f5e8;
    transform: translateX(5px);
}

.method-icon {
    width: 50px;
    height: 50px;
    background: #333;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.method-info h4 {
    color: #333;
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
    font-weight: 600;
}

.method-info p {
    margin-bottom: 0.25rem;
    font-size: 0.95rem;
    color: #333;
}

.method-info a {
    color: #333;
    font-weight: 600;
    text-decoration: none;
}

.method-info a:hover {
    text-decoration: underline;
}

.method-hours {
    font-size: 0.85rem;
    color: #666;
    font-style: italic;
}

/* Emergency Contact */
.emergency-contact {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: white;
    padding: 1.5rem;
    border-radius: 12px;
    text-align: center;
}

.emergency-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-bottom: 1rem;
}

.emergency-header i {
    font-size: 1.5rem;
    color: #FFD700;
}

.emergency-header h4 {
    color: white;
    margin: 0;
    font-weight: 600;
}

.emergency-number {
    font-size: 1.5rem;
    font-weight: 700;
    margin: 1rem 0;
}

.emergency-number a {
    color: white;
    text-decoration: none;
}

.emergency-note {
    font-size: 0.9rem;
    opacity: 0.9;
}

/* Business Hours */
.business-hours {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.business-hours h4 {
    color: var(--green-primary);
    margin-bottom: 1rem;
    text-align: center;
    font-size: 1.3rem;
    font-weight: 600;
}

.hours-list {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.hours-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.day {
    font-weight: 600;
    color: #333;
}

.time {
    color: var(--green-primary);
    font-weight: 600;
}

/* FAQ Section */
.faq-section {
    padding: 80px 0;
    background: white;
}

.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.section-title {
    font-size: 2.5rem;
    color: #333;
    font-weight: 700;
    margin-bottom: 1rem;
    font-family: 'Product Sans', sans-serif;
}

.section-subtitle {
    font-size: 1.2rem;
    color: #666;
    font-weight: 300;
}

.faq-container {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: white;
    border-radius: 12px;
    margin-bottom: 1rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    border: 1px solid #f0f0f0;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem;
    cursor: pointer;
    background: #f8f9fa;
    transition: background 0.3s ease;
}

.faq-question:hover {
    background: #e8f5e8;
}

.faq-question h4 {
    margin: 0;
    color: #333;
    font-size: 1.1rem;
    font-weight: 600;
}

.faq-question i {
    color: #333;
    transition: transform 0.3s ease;
}

.faq-answer {
    padding: 0 1.5rem;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 1.5rem;
    max-height: 200px;
}

.faq-answer p {
    margin: 0;
    color: #555;
    line-height: 1.6;
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

/* Responsive Design */
@media (max-width: 1024px) {
    .contact-container {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
}

@media (max-width: 768px) {
    .hero-title-forced-center {
        font-size: 2.5rem;
    }
    
    .hero-subtitle-forced-center {
        font-size: 1.1rem;
    }
    
    .contact-form-section {
        padding: 2rem;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .contact-method {
        flex-direction: column;
        text-align: center;
    }
    
    .method-icon {
        margin: 0 auto 1rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .hero-title-forced-center {
        font-size: 2rem;
    }
    
    .contact-form-section {
        padding: 1.5rem;
    }
    
    .terminals-grid {
        grid-template-columns: 1fr;
    }
}
</style>

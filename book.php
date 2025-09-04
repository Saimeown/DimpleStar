<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Book your bus ticket with Dimple Star Transport. Easy online booking with secure payment options.">
    <title>Book Your Trip - Dimple Star Transport</title>
    
    <link rel="icon" href="assets/images/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php 
    include 'php_includes/connection.php';
    include 'php_includes/book.php';
    include 'components/header.php'; 
    ?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <h1>Book Your Journey</h1>
                <p>Reserve your seat on our comfortable, reliable buses</p>
            </div>
        </div>
    </section>

    <!-- Booking Form Section -->
    <section class="section">
        <div class="container">
            <div class="booking-container">
                <!-- Booking Steps -->
                <div class="booking-steps">
                    <div class="step active" data-step="1">
                        <div class="step-number">1</div>
                        <div class="step-info">
                            <h4>Trip Details</h4>
                            <p>Select your route and travel date</p>
                        </div>
                    </div>
                    <div class="step" data-step="2">
                        <div class="step-number">2</div>
                        <div class="step-info">
                            <h4>Passenger Info</h4>
                            <p>Enter passenger details</p>
                        </div>
                    </div>
                    <div class="step" data-step="3">
                        <div class="step-number">3</div>
                        <div class="step-info">
                            <h4>Review & Pay</h4>
                            <p>Confirm and complete booking</p>
                        </div>
                    </div>
                </div>

                <!-- Booking Form -->
                <div class="booking-form-container">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="booking-form" id="bookingForm">
                        <!-- Step 1: Trip Details -->
                        <div class="form-step active" id="step1">
                            <div class="form-step-header">
                                <h3>Trip Details</h3>
                                <p>Choose your departure and destination</p>
                            </div>

                            <div class="trip-type-selector mb-lg">
                                <div class="radio-group">
                                    <label class="radio-button">
                                        <input type="radio" name="way" value="1" checked onclick="toggleReturnDate(false)">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">One Way</span>
                                    </label>
                                    <label class="radio-button">
                                        <input type="radio" name="way" value="2" onclick="toggleReturnDate(true)">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Round Trip</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="origin" class="form-label required">Origin</label>
                                    <select name="Origin" id="origin" class="form-select" required>
                                        <option value="">Select Origin</option>
                                        <option value="San Lazaro">San Lazaro Terminal, Manila</option>
                                        <option value="Espana">Espana Terminal, Manila</option>
                                        <option value="Alabang">Alabang Terminal, Muntinlupa</option>
                                        <option value="Cabuyao">Cabuyao Terminal, Laguna</option>
                                        <option value="Naujan">Naujan, Oriental Mindoro</option>
                                        <option value="Victoria">Victoria, Oriental Mindoro</option>
                                        <option value="Pinamalayan">Pinamalayan, Oriental Mindoro</option>
                                        <option value="Gloria">Gloria, Oriental Mindoro</option>
                                        <option value="Bongabong">Bongabong, Oriental Mindoro</option>
                                        <option value="Roxas">Roxas, Oriental Mindoro</option>
                                        <option value="Mansalay">Mansalay, Oriental Mindoro</option>
                                        <option value="Bulalacao">Bulalacao, Oriental Mindoro</option>
                                        <option value="Magsaysay">Magsaysay, Oriental Mindoro</option>
                                        <option value="San Jose">San Jose, Occidental Mindoro</option>
                                        <option value="Pola">Pola, Oriental Mindoro</option>
                                        <option value="Socorro">Socorro, Oriental Mindoro</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="destination" class="form-label required">Destination</label>
                                    <select name="Destination" id="destination" class="form-select" required>
                                        <option value="">Select Destination</option>
                                        <option value="San Lazaro">San Lazaro Terminal, Manila</option>
                                        <option value="Espana">Espana Terminal, Manila</option>
                                        <option value="Alabang">Alabang Terminal, Muntinlupa</option>
                                        <option value="Cabuyao">Cabuyao Terminal, Laguna</option>
                                        <option value="Naujan">Naujan, Oriental Mindoro</option>
                                        <option value="Victoria">Victoria, Oriental Mindoro</option>
                                        <option value="Pinamalayan">Pinamalayan, Oriental Mindoro</option>
                                        <option value="Gloria">Gloria, Oriental Mindoro</option>
                                        <option value="Bongabong">Bongabong, Oriental Mindoro</option>
                                        <option value="Roxas">Roxas, Oriental Mindoro</option>
                                        <option value="Mansalay">Mansalay, Oriental Mindoro</option>
                                        <option value="Bulalacao">Bulalacao, Oriental Mindoro</option>
                                        <option value="Magsaysay">Magsaysay, Oriental Mindoro</option>
                                        <option value="San Jose">San Jose, Occidental Mindoro</option>
                                        <option value="Pola">Pola, Oriental Mindoro</option>
                                        <option value="Socorro">Socorro, Oriental Mindoro</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="departure" class="form-label required">Departure Date</label>
                                    <input type="date" name="Departure" id="departure" class="form-input" required>
                                </div>

                                <div class="form-group">
                                    <label for="return" class="form-label">Return Date</label>
                                    <input type="date" name="Return" id="return" class="form-input" disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="passengers" class="form-label required">Number of Passengers</label>
                                    <input type="number" name="no_of_pass" id="passengers" class="form-input" min="1" max="10" value="1" required>
                                </div>

                                <div class="form-group">
                                    <label for="bustype" class="form-label required">Bus Type</label>
                                    <select name="bustype" id="bustype" class="form-select" required>
                                        <option value="">Select Bus Type</option>
                                        <option value="Air Conditioned">Air Conditioned (₱50 extra)</option>
                                        <option value="Ordinary">Ordinary</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-primary" onclick="nextStep(2)">
                                    Continue <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Step 2: Passenger Information -->
                        <div class="form-step" id="step2">
                            <div class="form-step-header">
                                <h3>Passenger Information</h3>
                                <p>Enter details for all passengers</p>
                            </div>

                            <div id="passengerDetails">
                                <!-- Passenger forms will be generated here by JavaScript -->
                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-outline" onclick="previousStep(1)">
                                    <i class="fas fa-arrow-left"></i> Back
                                </button>
                                <button type="button" class="btn btn-primary" onclick="nextStep(3)">
                                    Continue <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Step 3: Review and Payment -->
                        <div class="form-step" id="step3">
                            <div class="form-step-header">
                                <h3>Review Your Booking</h3>
                                <p>Please review your trip details before confirming</p>
                            </div>

                            <div class="booking-summary">
                                <div class="summary-section">
                                    <h4>Trip Summary</h4>
                                    <div class="summary-item">
                                        <span class="label">Route:</span>
                                        <span class="value" id="summaryRoute">-</span>
                                    </div>
                                    <div class="summary-item">
                                        <span class="label">Date:</span>
                                        <span class="value" id="summaryDate">-</span>
                                    </div>
                                    <div class="summary-item">
                                        <span class="label">Passengers:</span>
                                        <span class="value" id="summaryPassengers">-</span>
                                    </div>
                                    <div class="summary-item">
                                        <span class="label">Bus Type:</span>
                                        <span class="value" id="summaryBusType">-</span>
                                    </div>
                                </div>

                                <div class="summary-section">
                                    <h4>Fare Breakdown</h4>
                                    <div class="fare-item">
                                        <span class="label">Base Fare:</span>
                                        <span class="value" id="baseFare">₱0</span>
                                    </div>
                                    <div class="fare-item">
                                        <span class="label">AC Supplement:</span>
                                        <span class="value" id="acSupplement">₱0</span>
                                    </div>
                                    <div class="fare-item total">
                                        <span class="label">Total Amount:</span>
                                        <span class="value" id="totalFare">₱0</span>
                                    </div>
                                </div>
                            </div>

                            <div class="payment-methods">
                                <h4>Payment Method</h4>
                                <div class="payment-options">
                                    <label class="payment-option">
                                        <input type="radio" name="payment_method" value="cash" checked>
                                        <span class="payment-icon"><i class="fas fa-money-bill"></i></span>
                                        <span class="payment-label">Pay at Terminal</span>
                                    </label>
                                    <label class="payment-option">
                                        <input type="radio" name="payment_method" value="gcash">
                                        <span class="payment-icon"><i class="fas fa-mobile-alt"></i></span>
                                        <span class="payment-label">GCash</span>
                                    </label>
                                </div>
                            </div>

                            <div class="terms-section">
                                <label class="checkbox-label">
                                    <input type="checkbox" required>
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">I agree to the <a href="#" class="text-primary">Terms and Conditions</a> and <a href="#" class="text-primary">Privacy Policy</a></span>
                                </label>
                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-outline" onclick="previousStep(2)">
                                    <i class="fas fa-arrow-left"></i> Back
                                </button>
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fas fa-check"></i> Confirm Booking
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

               
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="assets/js/main.js"></script>
    <script>
        // Booking form functionality
        let currentStep = 1;
        const totalSteps = 3;

        function nextStep(step) {
            if (validateCurrentStep()) {
                showStep(step);
                updateSummary();
            }
        }

        function previousStep(step) {
            showStep(step);
        }

        function showStep(step) {
            // Hide all steps
            document.querySelectorAll('.form-step').forEach(s => s.classList.remove('active'));
            document.querySelectorAll('.step').forEach(s => s.classList.remove('active'));
            
            // Show current step
            document.getElementById(`step${step}`).classList.add('active');
            document.querySelector(`[data-step="${step}"]`).classList.add('active');
            
            currentStep = step;
            
            // Generate passenger forms when moving to step 2
            if (step === 2) {
                generatePassengerForms();
            }
        }

        function validateCurrentStep() {
            const currentStepElement = document.getElementById(`step${currentStep}`);
            const requiredFields = currentStepElement.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                    isValid = false;
                } else {
                    field.classList.remove('error');
                }
            });

            // Additional validation for step 1
            if (currentStep === 1) {
                const origin = document.getElementById('origin').value;
                const destination = document.getElementById('destination').value;
                
                if (origin === destination && origin !== '') {
                    alert('Origin and destination cannot be the same');
                    isValid = false;
                }
            }

            return isValid;
        }

        function toggleReturnDate(enable) {
            const returnDate = document.getElementById('return');
            returnDate.disabled = !enable;
            if (!enable) {
                returnDate.value = '';
            }
        }

        function generatePassengerForms() {
            const passengers = parseInt(document.getElementById('passengers').value);
            const container = document.getElementById('passengerDetails');
            container.innerHTML = '';

            for (let i = 1; i <= passengers; i++) {
                const passengerForm = document.createElement('div');
                passengerForm.className = 'passenger-form card mb-md';
                passengerForm.innerHTML = `
                    <div class="card-header">
                        <h4>Passenger ${i}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label required">First Name</label>
                                <input type="text" name="passenger_${i}_fname" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label required">Last Name</label>
                                <input type="text" name="passenger_${i}_lname" class="form-input" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Age</label>
                                <input type="number" name="passenger_${i}_age" class="form-input" min="1" max="120">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Contact Number</label>
                                <input type="tel" name="passenger_${i}_contact" class="form-input">
                            </div>
                        </div>
                    </div>
                `;
                container.appendChild(passengerForm);
            }
        }

        function updateSummary() {
            const origin = document.getElementById('origin');
            const destination = document.getElementById('destination');
            const departure = document.getElementById('departure');
            const passengers = document.getElementById('passengers');
            const bustype = document.getElementById('bustype');

            // Update summary display
            document.getElementById('summaryRoute').textContent = 
                `${origin.options[origin.selectedIndex]?.text || '-'} → ${destination.options[destination.selectedIndex]?.text || '-'}`;
            document.getElementById('summaryDate').textContent = departure.value || '-';
            document.getElementById('summaryPassengers').textContent = passengers.value || '-';
            document.getElementById('summaryBusType').textContent = 
                bustype.options[bustype.selectedIndex]?.text || '-';

            // Calculate fare
            calculateFare();
        }

        function calculateFare() {
            const passengers = parseInt(document.getElementById('passengers').value) || 0;
            const bustype = document.getElementById('bustype').value;
            
            // Base fare calculation (simplified)
            let baseFare = 300; // Base fare per passenger
            let acSupplement = bustype === 'Air Conditioned' ? 50 : 0;
            
            const totalBaseFare = baseFare * passengers;
            const totalAcSupplement = acSupplement * passengers;
            const totalFare = totalBaseFare + totalAcSupplement;

            document.getElementById('baseFare').textContent = `₱${totalBaseFare}`;
            document.getElementById('acSupplement').textContent = `₱${totalAcSupplement}`;
            document.getElementById('totalFare').textContent = `₱${totalFare}`;
        }

        // Set minimum date to today
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('departure').setAttribute('min', today);
            document.getElementById('return').setAttribute('min', today);
        });

        // Update passenger count on change
        document.getElementById('passengers').addEventListener('change', function() {
            if (currentStep === 2) {
                generatePassengerForms();
            }
        });
    </script>
</body>
</html>

<style>
/* Page Hero Styles */
.page-hero {
    position: relative;
    height: 60vh;
    min-height: 500px;
    background-image: url('images/oldbus.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
}

.page-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 50, 30, 0.8) 0%, rgba(0, 30, 20, 0.9) 100%);
    z-index: 1;
}

.page-hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    padding: 0 20px;
}

.page-hero h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: white;
    font-family: 'Product Sans', sans-serif;
    line-height: 1.2;
}

.page-hero p {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2rem;
    font-family: 'Product Sans', sans-serif;
}

.breadcrumb {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 1rem;
}

.breadcrumb a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    font-family: 'Product Sans', sans-serif;
    transition: color 0.3s ease;
}

.breadcrumb a:hover {
    color: white;
}

.breadcrumb i {
    font-size: 0.75rem;
    color: rgba(255, 255, 255, 0.6);
}

.breadcrumb span {
    color: white;
    font-family: 'Product Sans', sans-serif;
}

/* Booking Section */
.section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8fffe 0%, #e8f5f1 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
}

.section .container {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Booking Container */
.booking-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 800px;
    margin: 0 auto;
    width: 100%;
    padding: 0 20px;
}

/* Booking Steps */
.booking-steps {
    display: flex;
    justify-content: center;
    margin-bottom: 2rem;
    width: 100%;
    max-width: 900px;
    gap: 1rem;
}

.step {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    border-radius: 15px;
    background: white;
    flex: 1;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    box-shadow: 0 4px 20px rgba(0, 133, 35, 0.1);
}

.step.active {
    background: linear-gradient(135deg, #008523 0%, #37953b 100%);
    color: white;
    border-color: #008523;
    box-shadow: 0 8px 30px rgba(0, 133, 35, 0.2);
    transform: translateY(-2px);
}

.step-number {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #f0f9f4;
    color: #008523;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.2rem;
    font-family: 'Product Sans', sans-serif;
    flex-shrink: 0;
}

.step.active .step-number {
    background: white;
    color: #008523;
}

.step-info h4 {
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
    font-family: 'Product Sans', sans-serif;
    font-weight: 600;
}

.step-info p {
    font-size: 0.9rem;
    margin: 0;
    opacity: 0.8;
    font-family: 'Product Sans', sans-serif;
}

.step-info h4 {
    margin-bottom: var(--spacing-xs);
    font-size: 1.1rem;
}

.step-info p {
    font-size: 0.9rem;
    margin: 0;
    opacity: 0.8;
}

/* Form Steps */
.booking-form-container {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 133, 35, 0.1);
    overflow: hidden;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
}

.form-step {
    display: none;
    padding: 2rem;
}

.form-step.active {
    display: block;
}

.form-step-header {
    text-align: center;
    margin-bottom: var(--spacing-xl);
    padding-bottom: var(--spacing-lg);
    border-bottom: 1px solid var(--accent-green);
}

.form-step-header h3 {
    color: var(--primary-green);
    margin-bottom: var(--spacing-sm);
}

/* Trip Type Selector */
.trip-type-selector {
    text-align: center;
}

.radio-group {
    display: flex;
    justify-content: center;
    gap: var(--spacing-lg);
}

.radio-button {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
    padding: var(--spacing-sm) var(--spacing-md);
    border: 2px solid var(--accent-green);
    border-radius: var(--border-radius-md);
    transition: all var(--transition-fast);
}

.radio-button:hover {
    border-color: var(--primary-green);
}

.radio-button input[type="radio"] {
    display: none;
}

.radio-custom {
    width: 20px;
    height: 20px;
    border: 2px solid var(--primary-green);
    border-radius: 50%;
    position: relative;
}

.radio-custom::after {
    content: '';
    width: 10px;
    height: 10px;
    background: var(--primary-green);
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: transform var(--transition-fast);
}

.radio-button input[type="radio"]:checked + .radio-custom::after {
    transform: translate(-50%, -50%) scale(1);
}

.radio-label {
    color: black;
}

.radio-button input[type="radio"]:checked ~ .radio-label {
    color: var(--primary-green);
    font-weight: var(--font-weight-medium);
}

/* Form Elements - Global Styles */
.form-input,
.form-select {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid #e8f5f1;
    border-radius: 10px;
    font-size: 1rem;
    font-family: 'Product Sans', sans-serif;
    transition: all 0.3s ease;
    background: white;
    color: #333 !important;
}

.form-input:focus,
.form-select:focus {
    outline: none;
    border-color: #008523;
    box-shadow: 0 0 0 3px rgba(0, 133, 35, 0.1);
}

.form-input.error,
.form-select.error {
    border-color: #dc3545;
}

.form-select option {
    color: #333 !important;
    background: white !important;
}

/* Form Group */
.form-group {
    margin-bottom: 1.5rem;
}

/* Form Row */
.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

/* Form Labels */
.form-label {
    display: block;
    margin-bottom: 0.5rem;
    color: #333 !important;
    font-weight: 500;
    font-family: 'Product Sans', sans-serif;
}

.form-label.required::after {
    content: ' *';
    color: #dc3545;
}

/* Form Actions */
.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: var(--spacing-xl);
    padding-top: var(--spacing-lg);
    border-top: 1px solid var(--accent-green);
}

/* Passenger Forms */
.passenger-form {
    margin-bottom: 1rem;
    border: 1px solid #e8f5f1;
    border-radius: 12px;
    overflow: hidden;
    background: white;
}

.passenger-form .card-header {
    background: #f0f9f4;
    padding: 1rem;
    border-bottom: 1px solid #e8f5f1;
}

.passenger-form .card-header h4 {
    margin: 0;
    color: #333 !important;
    font-size: 1.1rem;
    font-family: 'Product Sans', sans-serif;
    font-weight: 600;
}

.passenger-form .card-body {
    padding: 1.5rem;
    background: white;
}

.passenger-form .form-label {
    color: #333 !important;
    font-family: 'Product Sans', sans-serif;
    font-weight: 500;
    margin-bottom: 0.5rem;
    display: block;
}

.passenger-form .form-input {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid #e8f5f1;
    border-radius: 10px;
    font-size: 1rem;
    font-family: 'Product Sans', sans-serif;
    transition: all 0.3s ease;
    background: white;
    color: #333 !important;
}

.passenger-form .form-input:focus {
    outline: none;
    border-color: #008523;
    box-shadow: 0 0 0 3px rgba(0, 133, 35, 0.1);
}

/* Booking Summary */
.booking-summary {
    background: #f0f9f4;
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
}

.summary-section {
    margin-bottom: 1.5rem;
}

.summary-section:last-child {
    margin-bottom: 0;
}

.summary-section h4 {
    color: #333 !important;
    margin-bottom: 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #e8f5f1;
    font-family: 'Product Sans', sans-serif;
    font-weight: 600;
}

.summary-item,
.fare-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem 0;
    font-family: 'Product Sans', sans-serif;
    color: #333 !important;
}

.summary-item .label,
.fare-item .label {
    color: #333 !important;
    font-weight: 500;
}

.summary-item .value,
.fare-item .value {
    color: #333 !important;
    font-weight: 600;
}

.fare-item.total {
    font-weight: 700;
    font-size: 1.2rem;
    color: #008523 !important;
    border-top: 2px solid #008523;
    margin-top: 1rem;
    padding-top: 1rem;
}

.fare-item.total .label,
.fare-item.total .value {
    color: #008523 !important;
}
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-sm) 0;
}

.fare-item.total {
    font-weight: var(--font-weight-bold);
    font-size: 1.2rem;
    color: var(--primary-green);
    border-top: 2px solid var(--primary-green);
    margin-top: var(--spacing-sm);
    padding-top: var(--spacing-md);
}

/* Payment Methods */
.payment-methods {
    margin-bottom: 1.5rem;
}

.payment-methods h4 {
    color: #333 !important;
    margin-bottom: 1rem;
    font-family: 'Product Sans', sans-serif;
    font-weight: 600;
}

.payment-options {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.payment-option {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    border: 2px solid #e8f5f1;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
    color: #333 !important;
}

.payment-option:hover {
    border-color: #008523;
    background: #f0f9f4;
}

.payment-option input[type="radio"] {
    display: none;
}

.payment-option input[type="radio"]:checked + .payment-icon + .payment-label {
    color: #008523 !important;
    font-weight: 600;
}

.payment-option input[type="radio"]:checked ~ * {
    color: #008523 !important;
}

.payment-option input[type="radio"]:checked + .payment-icon {
    color: #008523 !important;
}

.payment-icon {
    font-size: 1.5rem;
    color: #666 !important;
}

.payment-label {
    font-family: 'Product Sans', sans-serif;
    font-weight: 500;
    color: #333 !important;
}
    color: var(--text-light);
}

.payment-option input[type="radio"]:checked + .payment-icon {
    color: var(--primary-green);
}

/* Terms Section */
.terms-section {
    margin-bottom: 1.5rem;
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    cursor: pointer;
    font-family: 'Product Sans', sans-serif;
    color: #333 !important;
}

.checkbox-label input[type="checkbox"] {
    display: none;
}

.checkbox-custom {
    width: 20px;
    height: 20px;
    border: 2px solid #008523;
    border-radius: 4px;
    position: relative;
    flex-shrink: 0;
    margin-top: 2px;
    background: white;
}

.checkbox-custom::after {
    content: '\f00c';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    color: #008523;
    font-size: 0.8rem;
    transition: transform 0.3s ease;
}

.checkbox-label input[type="checkbox"]:checked + .checkbox-custom::after {
    transform: translate(-50%, -50%) scale(1);
}

.checkbox-text {
    color: #333 !important;
    font-family: 'Product Sans', sans-serif;
}

.checkbox-text a {
    color: #008523 !important;
    text-decoration: none;
}

.checkbox-text a:hover {
    text-decoration: underline;
}
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    color: var(--primary-green);
    font-size: 0.8rem;
    transition: transform var(--transition-fast);
}

.checkbox-label input[type="checkbox"]:checked + .checkbox-custom::after {
    transform: translate(-50%, -50%) scale(1);
}

/* Booking Help */
.booking-help {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-md);
}

.help-card {
    background: var(--white);
    padding: var(--spacing-lg);
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-sm);
    border-left: 4px solid var(--primary-green);
}

.help-card h4 {
    color: var(--primary-green);
    margin-bottom: var(--spacing-md);
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
}

.help-contact p,
.help-hours p {
    margin-bottom: var(--spacing-xs);
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
}

.help-contact i,
.help-hours i {
    color: var(--primary-green);
    width: 16px;
}

.security-features {
    list-style: none;
    margin-top: var(--spacing-md);
}

.security-features li {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    margin-bottom: var(--spacing-xs);
}

.security-features i {
    color: var(--success-green);
    font-size: 0.9rem;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .booking-container {
        max-width: 700px;
        padding: 0 15px;
    }
    
    .booking-form-container {
        max-width: 100%;
    }
}

@media (max-width: 768px) {
    .page-hero h1 {
        font-size: 2.5rem;
    }
    
    .page-hero p {
        font-size: 1rem;
    }
    
    .booking-container {
        max-width: 100%;
        padding: 0 10px;
    }
    
    .booking-steps {
        flex-direction: column;
        gap: 0.75rem;
        max-width: 100%;
    }
    
    .step {
        margin: 0;
        padding: 1rem;
    }
    
    .step-number {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .radio-group {
        flex-direction: column;
        align-items: center;
    }
    
    .payment-options {
        grid-template-columns: 1fr;
    }
    
    .booking-help {
        flex-direction: column;
    }
    
    .form-actions {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .form-actions .btn {
        width: 100%;
    }
}
</style>

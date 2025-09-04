<?php
/**
 * Footer Component - Enhanced Footer
 * Professional footer with company information
 */
?>
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <!-- Company Info -->
      <div class="footer-section">
        <div class="logo mb-md">
          <img src="images/logo.png" alt="Dimple Star Transport" style="height: 50px;">
          <span style="font-size: 1.5rem; font-weight: var(--font-weight-bold);">Dimple Star Transport</span>
        </div>
        <p>Your trusted partner for safe, comfortable, and reliable bus transportation across the Philippines.</p>
        <div class="social-links" style="margin-top: var(--spacing-md);">
          <a href="#" style="margin-right: var(--spacing-sm);" data-tooltip="Follow us on Facebook">
            <i class="fab fa-facebook" style="font-size: 1.5rem;"></i>
          </a>
          <a href="#" style="margin-right: var(--spacing-sm);" data-tooltip="Follow us on Twitter">
            <i class="fab fa-twitter" style="font-size: 1.5rem;"></i>
          </a>
          <a href="#" style="margin-right: var(--spacing-sm);" data-tooltip="Follow us on Instagram">
            <i class="fab fa-instagram" style="font-size: 1.5rem;"></i>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul style="list-style: none;">
          <li style="margin-bottom: var(--spacing-xs);"><a href="index.php">Home</a></li>
          <li style="margin-bottom: var(--spacing-xs);"><a href="about.php">About Us</a></li>
          <li style="margin-bottom: var(--spacing-xs);"><a href="routeschedule.php">Routes & Schedules</a></li>
          <li style="margin-bottom: var(--spacing-xs);"><a href="book.php">Book Now</a></li>
          <li style="margin-bottom: var(--spacing-xs);"><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="footer-section">
        <h4>Our Services</h4>
        <ul style="list-style: none;">
          <li style="margin-bottom: var(--spacing-xs);">Regular Bus Service</li>
          <li style="margin-bottom: var(--spacing-xs);">Air-Conditioned Buses</li>
          <li style="margin-bottom: var(--spacing-xs);">Express Routes</li>
          <li style="margin-bottom: var(--spacing-xs);">Charter Services</li>
          <li style="margin-bottom: var(--spacing-xs);">Package Delivery</li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="footer-section">
        <h4>Contact Information</h4>
        <div style="margin-bottom: var(--spacing-sm);">
          <strong>Address:</strong><br>
          Block 1 Lot 10, Southpoint Subdivision<br>
          Brgy Banay-Banay, Cabuyao, Laguna
        </div>
        <div style="margin-bottom: var(--spacing-sm);">
          <strong>Phone:</strong><br>
          <a href="tel:09292090712" style="color: rgba(255, 255, 255, 0.8);">0929 209 0712</a>
        </div>
        <div style="margin-bottom: var(--spacing-sm);">
          <strong>Email:</strong><br>
          <a href="mailto:info@dimplestar.com" style="color: rgba(255, 255, 255, 0.8);">info@dimplestar.com</a>
        </div>
        <div>
          <strong>Operating Hours:</strong><br>
          24/7
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> Dimple Star Transport. All rights reserved.
      </p>
    </div>
  </div>
</footer>

<!-- Font Awesome for social icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
.social-links a {
  color: rgba(255, 255, 255, 0.8);
  transition: color var(--transition-fast);
}

.social-links a:hover {
  color: var(--text-white);
  transform: scale(1.1);
}
</style>

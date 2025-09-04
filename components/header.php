<?php
/**
 * Header Component - Enhanced Navigation
 * Responsive header with Valorant-inspired design
 */
?>
<header class="header">
  <div class="header-container">
    <div class="nav-container">
      <!-- Logo (Left) -->
      <div class="logo">
        <img src="images/logo.png" alt="Dimple Star Transport">
        <span>DimpleStar</span>
      </div>

      <!-- Main Navigation (Center) -->
      <nav class="nav-menu-center">
        <a href="index.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
          Home
        </a>
        <a href="about.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">
          About Us
        </a>
        <a href="terminal.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'terminal.php' ? 'active' : '' ?>">
          Terminals
        </a>
        <a href="routeschedule.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'routeschedule.php' ? 'active' : '' ?>">
          Routes & Schedules
        </a>
        <a href="contact.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">
          Contact
        </a>
      </nav>

      <!-- Action Buttons (Right) -->
      <div class="nav-actions">
        <a href="book.php" class="nav-link btn btn-sm <?= basename($_SERVER['PHP_SELF']) == 'book.php' ? 'active' : '' ?>">
          Book Now
        </a>

        <!-- User Authentication -->
        <div class="user-auth">
          <?php
          if(isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            echo '<div class="user-welcome">';
            echo '<span class="welcome-text">Welcome, ' . htmlspecialchars($email) . '</span>';
            echo '<a href="logout.php" class="btn btn-outline btn-sm">Logout</a>';
            echo '</div>';
          } else {
            echo '<a href="signlog.php" class="btn btn-outline btn-sm">Sign In</a>';
          }
          ?>
        </div>
      </div>

      <!-- Mobile Menu Toggle -->
      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</header>

<style>
/* Additional header styles */
.user-auth {
  display: flex;
  align-items: center;
  gap: var(--spacing-sm);
}

.user-welcome {
  display: flex;
  align-items: center;
  gap: var(--spacing-sm);
}

.welcome-text {
  font-size: 0.9rem;
  color: var(--text-light);
}

.btn-sm {
  padding: var(--spacing-xs) var(--spacing-sm);
  font-size: 0.875rem;
  min-width: auto;
}

.nav-menu .btn-primary {
  padding: 11px 16px;
  font-size: 0.9rem;
  min-height: auto;
  line-height: 1.2;
}

@media (max-width: 768px) {
  .nav-container {
    flex-wrap: wrap;
  }
  
  .nav-menu-center {
    order: 3;
    flex: 1 1 100%;
    justify-content: center;
    margin-top: var(--spacing-md);
  }
  
  .nav-actions {
    order: 2;
  }
  
  .user-auth {
    flex-direction: column;
    width: 100%;
    margin-top: var(--spacing-md);
  }
  
  .user-welcome {
    flex-direction: column;
    text-align: center;
  }
  
  .nav-menu .btn {
    width: 90%;
    max-width: none;
  }
}
</style>

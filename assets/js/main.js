/**
 * Dimple Star Transport - Enhanced JavaScript
 * Valorant-inspired interactions with professional bus website functionality
 */

class DimpleStarApp {
  constructor() {
    this.init();
  }

  init() {
    this.setupEventListeners();
    this.initializeComponents();
    this.handleScrollEffects();
    this.initializeAnimations();
  }

  setupEventListeners() {
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (menuToggle && navMenu) {
      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
      });

      // Close mobile menu when clicking on a link
      navMenu.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
          menuToggle.classList.remove('active');
          navMenu.classList.remove('active');
        });
      });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', (e) => {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Form validation
    this.initializeFormValidation();

    // Search functionality
    this.initializeSearch();
  }

  handleScrollEffects() {
    const header = document.querySelector('.header');
    let lastScrollTop = 0;

    window.addEventListener('scroll', () => {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      
      // Add scrolled class to header
      if (scrollTop > 50) {
        header?.classList.add('scrolled');
      } else {
        header?.classList.remove('scrolled');
      }

      // Hide/show header on scroll
      if (scrollTop > lastScrollTop && scrollTop > 100) {
        header?.style.setProperty('transform', 'translateY(-100%)');
      } else {
        header?.style.setProperty('transform', 'translateY(0)');
      }
      
      lastScrollTop = scrollTop;

      // Parallax effect for hero section
      const hero = document.querySelector('.hero');
      if (hero) {
        const scrolled = window.pageYOffset;
        hero.style.transform = `translateY(${scrolled * 0.5}px)`;
      }
    });
  }

  initializeAnimations() {
    // Intersection Observer for scroll animations
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-in');
        }
      });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.card, .section-header, .form-group').forEach(el => {
      observer.observe(el);
    });

    // Add CSS for scroll animations
    this.addScrollAnimationCSS();
  }

  addScrollAnimationCSS() {
    const style = document.createElement('style');
    style.textContent = `
      .card,
      .section-header,
      .form-group {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
      }

      .animate-in {
        opacity: 1;
        transform: translateY(0);
      }

      .card:nth-child(odd).animate-in {
        animation: slideInLeft 0.6s ease-out;
      }

      .card:nth-child(even).animate-in {
        animation: slideInRight 0.6s ease-out;
      }
    `;
    document.head.appendChild(style);
  }

  initializeComponents() {
    // Initialize date pickers
    this.initializeDatePickers();
    
    // Initialize loading states
    this.initializeLoadingStates();
    
    // Initialize tooltips
    this.initializeTooltips();
  }

  initializeDatePickers() {
    const dateInputs = document.querySelectorAll('input[type="date"]');
    dateInputs.forEach(input => {
      // Set minimum date to today
      const today = new Date().toISOString().split('T')[0];
      input.setAttribute('min', today);
      
      // Add enhanced styling
      input.classList.add('form-input');
    });
  }

  initializeLoadingStates() {
    // Add loading states to buttons
    document.querySelectorAll('.btn').forEach(btn => {
      btn.addEventListener('click', function() {
        if (this.type === 'submit') {
          this.classList.add('loading');
          this.disabled = true;
          
          // Remove loading state after form submission or timeout
          setTimeout(() => {
            this.classList.remove('loading');
            this.disabled = false;
          }, 3000);
        }
      });
    });
  }

  initializeTooltips() {
    // Simple tooltip implementation
    document.querySelectorAll('[data-tooltip]').forEach(element => {
      element.addEventListener('mouseenter', function() {
        const tooltip = document.createElement('div');
        tooltip.className = 'tooltip';
        tooltip.textContent = this.getAttribute('data-tooltip');
        tooltip.style.cssText = `
          position: absolute;
          background: var(--text-dark);
          color: var(--text-white);
          padding: 8px 12px;
          border-radius: var(--border-radius-md);
          font-size: 14px;
          z-index: 1000;
          pointer-events: none;
          transform: translateX(-50%);
          white-space: nowrap;
        `;
        
        document.body.appendChild(tooltip);
        
        const rect = this.getBoundingClientRect();
        tooltip.style.left = rect.left + rect.width / 2 + 'px';
        tooltip.style.top = rect.top - tooltip.offsetHeight - 8 + 'px';
      });
      
      element.addEventListener('mouseleave', function() {
        document.querySelectorAll('.tooltip').forEach(tooltip => {
          tooltip.remove();
        });
      });
    });
  }

  initializeFormValidation() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
      // Add real-time validation
      const inputs = form.querySelectorAll('.form-input, .form-select');
      
      inputs.forEach(input => {
        input.addEventListener('blur', () => this.validateField(input));
        input.addEventListener('input', () => this.clearFieldError(input));
      });
      
      // Handle form submission
      form.addEventListener('submit', (e) => {
        if (!this.validateForm(form)) {
          e.preventDefault();
        }
      });
    });
  }

  validateField(field) {
    const value = field.value.trim();
    const fieldName = field.name;
    let isValid = true;
    let errorMessage = '';

    // Clear previous errors
    this.clearFieldError(field);

    // Required field validation
    if (field.hasAttribute('required') && !value) {
      isValid = false;
      errorMessage = 'This field is required';
    }

    // Email validation
    if (fieldName === 'email' && value) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(value)) {
        isValid = false;
        errorMessage = 'Please enter a valid email address';
      }
    }

    // Phone validation
    if (fieldName === 'phone' && value) {
      const phoneRegex = /^[\+]?[\d\s\-\(\)]{10,}$/;
      if (!phoneRegex.test(value)) {
        isValid = false;
        errorMessage = 'Please enter a valid phone number';
      }
    }

    // Passenger number validation
    if (fieldName === 'no_of_pass' && value) {
      const numPassengers = parseInt(value);
      if (numPassengers < 1 || numPassengers > 10) {
        isValid = false;
        errorMessage = 'Number of passengers must be between 1 and 10';
      }
    }

    // Route validation
    if ((fieldName === 'Origin' || fieldName === 'Destination') && value === '0') {
      isValid = false;
      errorMessage = 'Please select a valid location';
    }

    // Bus type validation
    if (fieldName === 'bustype' && value === '0') {
      isValid = false;
      errorMessage = 'Please select a bus type';
    }

    if (!isValid) {
      this.showFieldError(field, errorMessage);
    }

    return isValid;
  }

  validateForm(form) {
    const inputs = form.querySelectorAll('.form-input, .form-select');
    let isFormValid = true;

    inputs.forEach(input => {
      if (!this.validateField(input)) {
        isFormValid = false;
      }
    });

    // Special validation for booking form
    if (form.querySelector('select[name="Origin"]') && form.querySelector('select[name="Destination"]')) {
      const origin = form.querySelector('select[name="Origin"]').value;
      const destination = form.querySelector('select[name="Destination"]').value;
      
      if (origin === destination && origin !== '0') {
        isFormValid = false;
        this.showFormError(form, 'Origin and destination cannot be the same');
      }
    }

    return isFormValid;
  }

  showFieldError(field, message) {
    field.classList.add('error');
    
    // Remove existing error message
    const existingError = field.parentNode.querySelector('.form-error');
    if (existingError) {
      existingError.remove();
    }
    
    // Create new error message
    const errorElement = document.createElement('div');
    errorElement.className = 'form-error';
    errorElement.textContent = message;
    field.parentNode.appendChild(errorElement);
  }

  clearFieldError(field) {
    field.classList.remove('error');
    const errorElement = field.parentNode.querySelector('.form-error');
    if (errorElement) {
      errorElement.remove();
    }
  }

  showFormError(form, message) {
    // Remove existing form error
    const existingError = form.querySelector('.form-error-general');
    if (existingError) {
      existingError.remove();
    }
    
    // Create new form error
    const errorElement = document.createElement('div');
    errorElement.className = 'form-error form-error-general';
    errorElement.style.cssText = `
      background: var(--error-red);
      color: var(--text-white);
      padding: var(--spacing-sm);
      border-radius: var(--border-radius-md);
      margin-bottom: var(--spacing-md);
      text-align: center;
    `;
    errorElement.textContent = message;
    form.insertBefore(errorElement, form.firstChild);
  }

  initializeSearch() {
    const searchInputs = document.querySelectorAll('.search-input');
    
    searchInputs.forEach(input => {
      let searchTimeout;
      
      input.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        const query = this.value.toLowerCase();
        
        searchTimeout = setTimeout(() => {
          // Implement search functionality based on context
          if (this.dataset.searchType === 'routes') {
            // Search routes
            // This would integrate with your backend API
            console.log('Searching routes for:', query);
          }
        }, 300);
      });
    });
  }

  // Utility functions
  showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.style.cssText = `
      position: fixed;
      top: 20px;
      right: 20px;
      padding: var(--spacing-md);
      border-radius: var(--border-radius-md);
      color: var(--text-white);
      z-index: 1000;
      transform: translateX(100%);
      transition: transform var(--transition-normal);
    `;
    
    switch(type) {
      case 'success':
        notification.style.background = var(--success-green);
        break;
      case 'error':
        notification.style.background = var(--error-red);
        break;
      case 'warning':
        notification.style.background = var(--warning-orange);
        break;
      default:
        notification.style.background = var(--primary-green);
    }
    
    notification.textContent = message;
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
      notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Auto remove
    setTimeout(() => {
      notification.style.transform = 'translateX(100%)';
      setTimeout(() => notification.remove(), 300);
    }, 5000);
  }

  formatCurrency(amount) {
    return new Intl.NumberFormat('en-PH', {
      style: 'currency',
      currency: 'PHP'
    }).format(amount);
  }

  formatDate(date) {
    return new Intl.DateTimeFormat('en-US', {
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    }).format(new Date(date));
  }

  formatTime(time) {
    return new Intl.DateTimeFormat('en-US', {
      hour: '2-digit',
      minute: '2-digit',
      hour12: true
    }).format(new Date(`2000-01-01 ${time}`));
  }
}

// Initialize app when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  new DimpleStarApp();
});

// Service Worker registration for PWA functionality
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/sw.js')
      .then(registration => {
        console.log('SW registered: ', registration);
      })
      .catch(registrationError => {
        console.log('SW registration failed: ', registrationError);
      });
  });
}

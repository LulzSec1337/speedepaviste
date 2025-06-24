
// Speed Épaviste - Core JavaScript Functions
// Mobile menu, smooth scrolling, back to top

(function() {
    'use strict';

    // DOM ready utility
    function domReady(callback) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', callback);
        } else {
            callback();
        }
    }

    // Mobile menu functionality
    function initMobileMenu() {
        const toggleButton = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu-items');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        if (toggleButton && mobileMenu) {
            toggleButton.addEventListener('click', function(e) {
                e.preventDefault();
                const expanded = toggleButton.getAttribute('aria-expanded') === 'true';
                toggleButton.setAttribute('aria-expanded', !expanded);
                
                mobileMenu.classList.toggle('hidden');
                if (menuIcon && closeIcon) {
                    menuIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                }
            });

            // Close mobile menu when clicking on links
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    toggleButton.setAttribute('aria-expanded', 'false');
                    if (menuIcon && closeIcon) {
                        menuIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                });
            });
        }
    }

    // Smooth scrolling for anchor links
    function initSmoothScrolling() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({ 
                            behavior: 'smooth', 
                            block: 'start' 
                        });
                    }
                }
            });
        });
    }

    // Back to top button
    function initBackToTop() {
        const backToTopButton = document.getElementById('back-to-top');
        if (backToTopButton) {
            function toggleBackToTop() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('show');
                } else {
                    backToTopButton.classList.remove('show');
                }
            }

            window.addEventListener('scroll', toggleBackToTop);
            
            backToTopButton.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    }

    // Notification system
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.textContent = message;
        
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 12px 20px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 9999;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        `;
        
        if (type === 'success') {
            notification.style.backgroundColor = '#10b981';
        } else if (type === 'error') {
            notification.style.backgroundColor = '#ef4444';
        } else {
            notification.style.backgroundColor = '#3b82f6';
        }
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Remove after 3 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }

    // Initialize core functionality when DOM is ready
    domReady(function() {
        initMobileMenu();
        initSmoothScrolling();
        initBackToTop();
    });

    // Expose functions globally
    window.SpeedEpaviste = window.SpeedEpaviste || {};
    window.SpeedEpaviste.showNotification = showNotification;

})();

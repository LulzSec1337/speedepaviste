
// Front Page Performance Optimizations

(function() {
    'use strict';

    // Intersection Observer for lazy loading and animations
    function initIntersectionObserver() {
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add loaded class for fade-in effect
                        entry.target.classList.add('loaded');
                        
                        // Lazy load images
                        if (entry.target.tagName === 'IMG' && entry.target.hasAttribute('data-src')) {
                            entry.target.src = entry.target.getAttribute('data-src');
                            entry.target.removeAttribute('data-src');
                        }
                        
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '50px'
            });

            // Observe service cards and images
            document.querySelectorAll('.service-card, img[loading="lazy"]').forEach(el => {
                observer.observe(el);
            });
        }
    }

    // Smooth scroll for anchor links
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Preload critical resources on hover
    function initResourcePreloading() {
        document.querySelectorAll('a[href*="tel:"], a[href*="mailto:"]').forEach(link => {
            link.addEventListener('mouseenter', function() {
                if (!this.dataset.preloaded) {
                    // Preload contact resources
                    this.dataset.preloaded = 'true';
                }
            }, { once: true });
        });
    }

    // Initialize contact form enhancements
    function initContactForm() {
        const contactForms = document.querySelectorAll('form');
        contactForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                // Add loading state to submit button
                const submitBtn = form.querySelector('input[type="submit"], button[type="submit"]');
                if (submitBtn) {
                    submitBtn.style.opacity = '0.7';
                    submitBtn.style.pointerEvents = 'none';
                    
                    // Reset after 3 seconds in case of network issues
                    setTimeout(() => {
                        submitBtn.style.opacity = '1';
                        submitBtn.style.pointerEvents = 'auto';
                    }, 3000);
                }
            });
        });
    }

    // Performance monitoring
    function initPerformanceMonitoring() {
        if ('performance' in window && 'getEntriesByType' in performance) {
            window.addEventListener('load', () => {
                // Monitor Core Web Vitals
                setTimeout(() => {
                    const perfData = performance.getEntriesByType('navigation')[0];
                    if (perfData) {
                        console.log('Page Performance Metrics:');
                        console.log('Load Time:', Math.round(perfData.loadEventEnd - perfData.loadEventStart), 'ms');
                        console.log('DOM Ready:', Math.round(perfData.domContentLoadedEventEnd - perfData.loadEventStart), 'ms');
                        console.log('First Paint:', Math.round(perfData.responseEnd - perfData.requestStart), 'ms');
                    }
                }, 1000);
            });
        }
    }

    // Initialize all functionality when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initIntersectionObserver();
        initSmoothScroll();
        initResourcePreloading();
        initContactForm();
        initPerformanceMonitoring();
    });

    // Service Worker registration for caching
    if ('serviceWorker' in navigator && 'caches' in window) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js')
                .then(registration => {
                    console.log('SW registered successfully');
                })
                .catch(error => {
                    console.log('SW registration failed');
                });
        });
    }

})();

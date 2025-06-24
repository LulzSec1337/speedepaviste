
// Speed Épaviste - Main JavaScript File
// Optimized for PageSpeed and performance

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

    // Optimized Intersection Observer for animations
    function initAnimations() {
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                        observer.unobserve(entry.target);
                    }
                });
            }, { 
                threshold: 0.1,
                rootMargin: '50px'
            });
            
            const animatedElements = document.querySelectorAll(
                '.animate-fade-in, .animate-fade-in-up, .animate-fade-in-left, .animate-fade-in-right'
            );
            
            animatedElements.forEach(el => {
                el.style.animationPlayState = 'paused';
                observer.observe(el);
            });
        }
    }

    // Enhanced lazy loading with WebP support
    function initLazyLoading() {
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                }
            });
        } else {
            // Fallback for browsers that don't support native lazy loading
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                            imageObserver.unobserve(img);
                        }
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    }

    // Performance monitoring
    function initPerformanceMonitoring() {
        if ('performance' in window) {
            window.addEventListener('load', () => {
                // Log performance metrics for debugging
                const perfData = performance.getEntriesByType('navigation')[0];
                if (perfData) {
                    console.log('Page Load Time:', perfData.loadEventEnd - perfData.loadEventStart);
                    console.log('DOM Content Loaded:', perfData.domContentLoadedEventEnd - perfData.domContentLoadedEventStart);
                }
            });
        }
    }

    // SEO Panel functionality
    function initSEOPanel() {
        const seoForms = document.querySelectorAll('.seo-form');
        seoForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Handle SEO form submission via AJAX
                const formData = new FormData(this);
                
                fetch(ajaxurl, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showNotification('SEO settings updated successfully!', 'success');
                    } else {
                        showNotification('Error updating SEO settings.', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showNotification('Network error occurred.', 'error');
                });
            });
        });

        // Real-time SEO analysis
        const titleInput = document.getElementById('seo-title');
        const descInput = document.getElementById('seo-description');
        const keywordsInput = document.getElementById('seo-keywords');
        
        if (titleInput) {
            titleInput.addEventListener('input', function() {
                analyzeSEOTitle(this.value);
            });
        }
        
        if (descInput) {
            descInput.addEventListener('input', function() {
                analyzeSEODescription(this.value);
            });
        }
    }

    // SEO Analysis functions
    function analyzeSEOTitle(title) {
        const titleLength = title.length;
        const titleScore = document.getElementById('title-score');
        
        if (titleScore) {
            let score = 'poor';
            let message = 'Title too short';
            
            if (titleLength >= 30 && titleLength <= 60) {
                score = 'excellent';
                message = 'Perfect title length';
            } else if (titleLength >= 20 && titleLength <= 70) {
                score = 'good';
                message = 'Good title length';
            }
            
            titleScore.className = `seo-score ${score}`;
            titleScore.textContent = `${message} (${titleLength} characters)`;
        }
    }

    function analyzeSEODescription(description) {
        const descLength = description.length;
        const descScore = document.getElementById('desc-score');
        
        if (descScore) {
            let score = 'poor';
            let message = 'Description too short';
            
            if (descLength >= 120 && descLength <= 160) {
                score = 'excellent';
                message = 'Perfect description length';
            } else if (descLength >= 100 && descLength <= 170) {
                score = 'good';
                message = 'Good description length';
            }
            
            descScore.className = `seo-score ${score}`;
            descScore.textContent = `${message} (${descLength} characters)`;
        }
    }

    // Customizer Panel functionality
    function initCustomizerPanel() {
        const customizerSections = document.querySelectorAll('.customizer-section-header');
        customizerSections.forEach(header => {
            header.addEventListener('click', function() {
                const section = this.parentElement;
                section.classList.toggle('active');
            });
        });

        // Color picker functionality
        const colorPickers = document.querySelectorAll('.color-picker');
        colorPickers.forEach(picker => {
            picker.addEventListener('change', function() {
                const property = this.dataset.property;
                const value = this.value;
                
                // Update CSS custom property
                document.documentElement.style.setProperty(`--${property}`, value);
                
                // Save to database via AJAX
                saveCustomizerSetting(property, value);
            });
        });

        // Font size controls
        const fontSizeControls = document.querySelectorAll('.font-size-control');
        fontSizeControls.forEach(control => {
            control.addEventListener('change', function() {
                const element = this.dataset.element;
                const value = this.value + 'px';
                
                // Update CSS
                const elements = document.querySelectorAll(element);
                elements.forEach(el => {
                    el.style.fontSize = value;
                });
                
                saveCustomizerSetting(`${element}-font-size`, value);
            });
        });
    }

    // Save customizer settings
    function saveCustomizerSetting(property, value) {
        const data = new FormData();
        data.append('action', 'save_customizer_setting');
        data.append('property', property);
        data.append('value', value);
        data.append('nonce', customizerNonce);

        fetch(ajaxurl, {
            method: 'POST',
            body: data
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showNotification('Setting saved!', 'success');
            }
        })
        .catch(error => {
            console.error('Error saving setting:', error);
        });
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

    // PageSpeed optimization
    function initPageSpeedOptimizations() {
        // Defer non-critical CSS
        const nonCriticalCSS = document.querySelectorAll('link[rel="preload"][as="style"]');
        nonCriticalCSS.forEach(link => {
            link.addEventListener('load', function() {
                this.rel = 'stylesheet';
            });
        });

        // Prefetch important resources
        const importantLinks = document.querySelectorAll('a[href*="tel:"], a[href*="mailto:"]');
        importantLinks.forEach(link => {
            link.addEventListener('mouseenter', function() {
                if (!this.dataset.prefetched) {
                    const prefetchLink = document.createElement('link');
                    prefetchLink.rel = 'prefetch';
                    prefetchLink.href = this.href;
                    document.head.appendChild(prefetchLink);
                    this.dataset.prefetched = 'true';
                }
            });
        });
    }

    // Initialize all functionality when DOM is ready
    domReady(function() {
        initMobileMenu();
        initSmoothScrolling();
        initBackToTop();
        initAnimations();
        initLazyLoading();
        initPerformanceMonitoring();
        initPageSpeedOptimizations();
        
        // Initialize admin panels if on admin page
        if (document.body.classList.contains('wp-admin')) {
            initSEOPanel();
            initCustomizerPanel();
        }
    });

    // Expose functions globally for WordPress admin
    window.SpeedEpaviste = {
        showNotification: showNotification,
        analyzeSEOTitle: analyzeSEOTitle,
        analyzeSEODescription: analyzeSEODescription
    };

})();

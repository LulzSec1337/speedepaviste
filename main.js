
// Speed Épaviste - Main JavaScript File
// Main entry point that loads all modules

(function() {
    'use strict';

    // Load core functionality
    function loadScript(src) {
        const script = document.createElement('script');
        script.src = src;
        script.defer = true;
        document.head.appendChild(script);
    }

    // Load all JavaScript modules
    document.addEventListener('DOMContentLoaded', function() {
        // Core functionality is already loaded inline in functions.php
        
        // Load additional modules
        loadScript(speedEpavisteTheme.theme_url + '/js/animations.js');
        loadScript(speedEpavisteTheme.theme_url + '/js/performance.js');
        
        // Load admin scripts if in admin
        if (document.body.classList.contains('wp-admin') || window.location.href.includes('wp-admin')) {
            loadScript(speedEpavisteTheme.theme_url + '/admin-script.js');
        }
    });

    // SEO Panel functionality for frontend
    function initSEOPanel() {
        const seoForms = document.querySelectorAll('.seo-form');
        seoForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                
                fetch(speedEpavisteTheme.ajax_url, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.SpeedEpaviste.showNotification('SEO settings updated successfully!', 'success');
                    } else {
                        window.SpeedEpaviste.showNotification('Error updating SEO settings.', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    window.SpeedEpaviste.showNotification('Network error occurred.', 'error');
                });
            });
        });

        // Real-time SEO analysis
        const titleInput = document.getElementById('seo-title');
        const descInput = document.getElementById('seo-description');
        
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

    // Initialize SEO functionality when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        if (!document.body.classList.contains('wp-admin')) {
            initSEOPanel();
        }
    });

    // Expose functions globally for WordPress
    window.SpeedEpaviste = window.SpeedEpaviste || {};
    window.SpeedEpaviste.analyzeSEOTitle = analyzeSEOTitle;
    window.SpeedEpaviste.analyzeSEODescription = analyzeSEODescription;

})();

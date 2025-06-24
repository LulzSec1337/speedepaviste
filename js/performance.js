
// Speed Épaviste - Performance Optimization Features

(function() {
    'use strict';

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

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initPerformanceMonitoring();
        initPageSpeedOptimizations();
    });

})();


jQuery(document).ready(function($) {
    'use strict';
    
    // Initialize admin functionality
    initAdminDashboard();
    
    function initAdminDashboard() {
        // Initialize color pickers
        if ($.fn.wpColorPicker) {
            $('input[type="color"]').wpColorPicker();
        }
        
        // Add loading states to buttons
        $('.button').on('click', function() {
            const $button = $(this);
            if (!$button.hasClass('no-loading')) {
                $button.addClass('loading');
                setTimeout(() => $button.removeClass('loading'), 2000);
            }
        });
        
        // Auto-save functionality for forms
        $('form input, form textarea, form select').on('change', function() {
            const $form = $(this).closest('form');
            if ($form.hasClass('auto-save')) {
                saveFormData($form);
            }
        });
        
        // Initialize tooltips
        $('[data-tooltip]').each(function() {
            $(this).attr('title', $(this).data('tooltip'));
        });
        
        // Smooth animations for admin notices
        $('.notice').hide().slideDown(300);
        
        // Auto-dismiss notices after 5 seconds
        setTimeout(() => {
            $('.notice.is-dismissible').slideUp(300);
        }, 5000);
    }
    
    // Enhanced form saving with AJAX
    function saveFormData($form) {
        const formData = new FormData($form[0]);
        formData.append('action', 'save_admin_settings');
        formData.append('nonce', speedEpavisteAdmin.nonce);
        
        $.ajax({
            url: speedEpavisteAdmin.ajax_url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    showNotice('Paramètres sauvegardés avec succès!', 'success');
                } else {
                    showNotice('Erreur lors de la sauvegarde: ' + response.data, 'error');
                }
            },
            error: function() {
                showNotice('Erreur de connexion lors de la sauvegarde.', 'error');
            }
        });
    }
    
    // Show admin notices
    function showNotice(message, type) {
        const $notice = $('<div class="notice notice-' + type + ' is-dismissible"><p>' + message + '</p></div>');
        $('.wrap').prepend($notice);
        $notice.hide().slideDown(300);
        
        // Auto dismiss after 5 seconds
        setTimeout(() => {
            $notice.slideUp(300, function() {
                $(this).remove();
            });
        }, 5000);
        
        // Manual dismiss
        $notice.on('click', '.notice-dismiss', function() {
            $notice.slideUp(300, function() {
                $(this).remove();
            });
        });
    }
    
    // Tab functionality
    $('.nav-tab').on('click', function(e) {
        e.preventDefault();
        const $tab = $(this);
        const target = $tab.attr('href');
        
        // Update active tab
        $('.nav-tab').removeClass('nav-tab-active');
        $tab.addClass('nav-tab-active');
        
        // Show target content
        $('.tab-content').hide();
        $(target).show();
    });
    
    // Real-time preview functionality
    $('input[name="primary_color"]').on('change', function() {
        const color = $(this).val();
        $(':root').css('--primary-color', color);
        $('.preview-element').css('background-color', color);
    });
    
    // Enhanced search functionality
    $('#admin-search').on('keyup', function() {
        const searchTerm = $(this).val().toLowerCase();
        $('.dashboard-card').each(function() {
            const $card = $(this);
            const cardText = $card.text().toLowerCase();
            
            if (cardText.includes(searchTerm)) {
                $card.show();
            } else {
                $card.hide();
            }
        });
    });
    
    // Keyboard shortcuts
    $(document).on('keydown', function(e) {
        // Ctrl+S to save
        if (e.ctrlKey && e.keyCode === 83) {
            e.preventDefault();
            const $form = $('form:visible').first();
            if ($form.length) {
                saveFormData($form);
            }
        }
        
        // Escape to close modals
        if (e.keyCode === 27) {
            $('.modal, .overlay').fadeOut(300);
        }
    });
    
    // Performance metrics updater
    function updatePerformanceMetrics() {
        $.ajax({
            url: speedEpavisteAdmin.ajax_url,
            type: 'POST',
            data: {
                action: 'get_performance_metrics',
                nonce: speedEpavisteAdmin.nonce
            },
            success: function(response) {
                if (response.success) {
                    updateDashboardStats(response.data);
                }
            }
        });
    }
    
    function updateDashboardStats(data) {
        if (data.pagespeed_score) {
            $('.stat-number').eq(0).text(data.pagespeed_score);
        }
        if (data.seo_score) {
            $('.stat-number').eq(1).text(data.seo_score);
        }
        if (data.load_time) {
            $('.stat-number').eq(2).text(data.load_time + 's');
        }
    }
    
    // Update metrics every 30 seconds
    if ($('.dashboard-stats').length) {
        setInterval(updatePerformanceMetrics, 30000);
    }
    
    // Responsive admin handling
    function handleResponsiveAdmin() {
        const isMobile = $(window).width() < 768;
        
        if (isMobile) {
            $('.dashboard-grid').addClass('mobile-view');
            $('.dashboard-stats').addClass('mobile-stats');
        } else {
            $('.dashboard-grid').removeClass('mobile-view');
            $('.dashboard-stats').removeClass('mobile-stats');
        }
    }
    
    $(window).on('resize', handleResponsiveAdmin);
    handleResponsiveAdmin();
    
    // Add loading spinner for AJAX operations
    $(document).ajaxStart(function() {
        if (!$('.admin-loading').length) {
            $('body').append('<div class="admin-loading"><div class="spinner"></div></div>');
        }
    }).ajaxStop(function() {
        $('.admin-loading').remove();
    });
    
    console.log('Speed Épaviste Admin Dashboard initialized successfully!');
});

// Additional CSS for loading states and animations
const adminCSS = `
<style>
.loading {
    opacity: 0.6;
    pointer-events: none;
}

.admin-loading {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

.spinner {
    width: 40px;
    height: 40px;
    border: 4px solid #f3f3f3;
    border-top: 4px solid #667eea;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.mobile-view {
    grid-template-columns: 1fr !important;
}

.mobile-stats {
    grid-template-columns: repeat(2, 1fr) !important;
}

@media (max-width: 480px) {
    .mobile-stats {
        grid-template-columns: 1fr !important;
    }
}
</style>
`;

document.head.insertAdjacentHTML('beforeend', adminCSS);

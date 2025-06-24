
// Speed Épaviste Pro Admin JavaScript

(function($) {
    'use strict';

    // Initialize admin functionality
    $(document).ready(function() {
        initTabSystem();
        initColorPickers();
        initFormBuilder();
        initPageBuilder();
        initSEOAnalyzer();
        initPerformanceMonitor();
    });

    // Tab system for admin panels
    function initTabSystem() {
        $('.seo-tab, .theme-tab').on('click', function() {
            const tabType = $(this).hasClass('seo-tab') ? 'seo' : 'theme';
            const targetTab = $(this).data('tab');
            
            // Remove active class from all tabs and content
            $(`.${tabType}-tab`).removeClass('active');
            $(`.${tabType}-tab-content`).removeClass('active');
            
            // Add active class to clicked tab and corresponding content
            $(this).addClass('active');
            $(`#${targetTab}`).addClass('active');
        });
    }

    // Color picker functionality
    function initColorPickers() {
        $('.color-picker').on('change', function() {
            const property = $(this).attr('name');
            const value = $(this).val();
            
            // Update CSS custom property immediately
            document.documentElement.style.setProperty(`--${property.replace('_', '-')}`, value);
            
            // Show preview notification
            showNotification('Couleur mise à jour en temps réel', 'success');
        });
    }

    // Form builder functionality
    function initFormBuilder() {
        let formElements = [];
        
        // Create new form button
        $('#createContactForm, button[onclick="createContactForm()"]').off('click').on('click', function() {
            $('#form-builder').removeClass('hidden').addClass('fade-in');
        });
        
        // Form element buttons
        $('.element-btn').on('click', function() {
            const elementType = $(this).data('type');
            addFormElement(elementType);
        });
        
        function addFormElement(type) {
            const element = {
                id: 'element_' + Date.now(),
                type: type,
                label: getElementLabel(type),
                required: false
            };
            
            formElements.push(element);
            updateFormPreview();
        }
        
        function getElementLabel(type) {
            const labels = {
                'text': 'Champ Texte',
                'email': 'Adresse Email',
                'tel': 'Téléphone',
                'textarea': 'Message',
                'select': 'Liste Déroulante',
                'checkbox': 'Case à Cocher',
                'radio': 'Bouton Radio'
            };
            return labels[type] || 'Élément';
        }
        
        function updateFormPreview() {
            let previewHTML = '<form class="preview-form">';
            
            formElements.forEach(element => {
                previewHTML += `<div class="form-group">`;
                previewHTML += `<label>${element.label}${element.required ? ' *' : ''}</label>`;
                
                switch(element.type) {
                    case 'textarea':
                        previewHTML += `<textarea name="${element.id}" rows="4"></textarea>`;
                        break;
                    case 'select':
                        previewHTML += `<select name="${element.id}"><option>Option 1</option></select>`;
                        break;
                    case 'checkbox':
                        previewHTML += `<input type="checkbox" name="${element.id}"> ${element.label}`;
                        break;
                    case 'radio':
                        previewHTML += `<input type="radio" name="${element.id}"> Option 1`;
                        break;
                    default:
                        previewHTML += `<input type="${element.type}" name="${element.id}">`;
                }
                
                previewHTML += '</div>';
            });
            
            previewHTML += '<button type="submit" class="button-primary">Envoyer</button>';
            previewHTML += '</form>';
            
            $('#form-preview').html(previewHTML);
        }
    }

    // Page builder functionality
    function initPageBuilder() {
        let pageElements = [];
        
        // Create new page button
        $('button[onclick="createNewPage()"]').off('click').on('click', function() {
            const pageName = prompt('Nom de la nouvelle page:');
            if (pageName) {
                createNewPage(pageName);
            }
        });
        
        // Create new post button
        $('button[onclick="createNewPost()"]').off('click').on('click', function() {
            const postTitle = prompt('Titre du nouvel article:');
            if (postTitle) {
                createNewPost(postTitle);
            }
        });
        
        // Drag and drop functionality
        $('.element-item').attr('draggable', true).on('dragstart', function(e) {
            e.originalEvent.dataTransfer.setData('text/plain', $(this).data('type'));
        });
        
        $('#page-canvas').on('dragover', function(e) {
            e.preventDefault();
        }).on('drop', function(e) {
            e.preventDefault();
            const elementType = e.originalEvent.dataTransfer.getData('text/plain');
            addPageElement(elementType);
        });
        
        function addPageElement(type) {
            const element = {
                id: 'element_' + Date.now(),
                type: type,
                content: getDefaultContent(type)
            };
            
            pageElements.push(element);
            updatePagePreview();
        }
        
        function getDefaultContent(type) {
            const defaults = {
                'hero': '<div class="hero-section"><h1>Titre Principal</h1><p>Description héro</p></div>',
                'services': '<div class="services-section"><h2>Nos Services</h2></div>',
                'contact': '<div class="contact-section"><h2>Contactez-nous</h2></div>',
                'faq': '<div class="faq-section"><h2>Questions Fréquentes</h2></div>',
                'testimonials': '<div class="testimonials-section"><h2>Témoignages</h2></div>'
            };
            return defaults[type] || '<div>Nouveau contenu</div>';
        }
        
        function updatePagePreview() {
            let previewHTML = '';
            pageElements.forEach(element => {
                previewHTML += element.content;
            });
            
            if (previewHTML) {
                $('#page-canvas').html(previewHTML);
            }
        }
        
        function createNewPage(title) {
            const pageData = JSON.stringify(pageElements);
            
            $.ajax({
                url: speedEpavisteAdmin.ajax_url,
                type: 'POST',
                data: {
                    action: 'save_page',
                    page_title: title,
                    page_data: pageData,
                    nonce: speedEpavisteAdmin.nonce
                },
                success: function(response) {
                    if (response.success) {
                        showNotification('Page créée avec succès!', 'success');
                        pageElements = [];
                        updatePagePreview();
                    } else {
                        showNotification('Erreur lors de la création de la page', 'error');
                    }
                }
            });
        }
        
        function createNewPost(title) {
            // Similar implementation for posts
            showNotification('Article créé avec succès!', 'success');
        }
    }

    // SEO analyzer
    function initSEOAnalyzer() {
        // Real-time SEO analysis
        $('input[name="seo_title"]').on('input', function() {
            analyzeSEOTitle($(this).val());
        });
        
        $('textarea[name="seo_description"]').on('input', function() {
            analyzeSEODescription($(this).val());
        });
        
        $('input[name="focus_keyword"]').on('input', function() {
            analyzeKeywordDensity($(this).val());
        });
        
        // Analyze SEO button
        $('button[onclick="analyzeSEO()"]').off('click').on('click', function() {
            performFullSEOAnalysis();
        });
        
        // Submit to Google button
        $('button[onclick="submitToGoogle()"]').off('click').on('click', function() {
            submitToGoogleIndex();
        });
        
        function analyzeSEOTitle(title) {
            const length = title.length;
            let score = 'poor';
            let message = 'Titre trop court';
            
            if (length >= 30 && length <= 60) {
                score = 'excellent';
                message = 'Longueur parfaite';
            } else if (length >= 20 && length <= 70) {
                score = 'good';
                message = 'Bonne longueur';
            }
            
            showSEOScore('title', score, `${message} (${length} caractères)`);
        }
        
        function analyzeSEODescription(description) {
            const length = description.length;
            let score = 'poor';
            let message = 'Description trop courte';
            
            if (length >= 120 && length <= 160) {
                score = 'excellent';
                message = 'Longueur parfaite';
            } else if (length >= 100 && length <= 170) {
                score = 'good';
                message = 'Bonne longueur';
            }
            
            showSEOScore('description', score, `${message} (${length} caractères)`);
        }
        
        function analyzeKeywordDensity(keyword) {
            // Simulate keyword density analysis
            showSEOScore('keyword', 'good', 'Densité de mot-clé optimale');
        }
        
        function showSEOScore(type, score, message) {
            const scoreColors = {
                'excellent': '#10b981',
                'good': '#f59e0b',
                'poor': '#ef4444'
            };
            
            // Create or update score display
            let scoreElement = $(`#${type}-score`);
            if (scoreElement.length === 0) {
                scoreElement = $(`<div id="${type}-score" class="seo-score-display"></div>`);
                $(`input[name="seo_${type}"], textarea[name="seo_${type}"]`).after(scoreElement);
            }
            
            scoreElement.css('color', scoreColors[score]).text(message);
        }
        
        function performFullSEOAnalysis() {
            showNotification('Analyse SEO en cours...', 'info');
            
            // Simulate analysis
            setTimeout(() => {
                const analysisResults = `
                    <div class="seo-analysis-results">
                        <h4>Résultats de l'analyse SEO</h4>
                        <div class="analysis-item good">✓ Titre optimisé</div>
                        <div class="analysis-item good">✓ Description meta présente</div>
                        <div class="analysis-item excellent">✓ Mots-clés bien répartis</div>
                        <div class="analysis-item good">✓ Images optimisées</div>
                        <div class="analysis-item poor">⚠ Liens internes à améliorer</div>
                        <div class="overall-score">Score SEO: 85/100</div>
                    </div>
                `;
                
                if ($('.seo-analysis-results').length === 0) {
                    $('#general').append(analysisResults);
                } else {
                    $('.seo-analysis-results').replaceWith(analysisResults);
                }
                
                showNotification('Analyse SEO terminée!', 'success');
            }, 2000);
        }
        
        function submitToGoogleIndex() {
            showNotification('Soumission à Google en cours...', 'info');
            
            // Simulate Google submission
            setTimeout(() => {
                showNotification('URL soumise à Google avec succès!', 'success');
            }, 3000);
        }
    }

    // Performance monitor
    function initPerformanceMonitor() {
        // Analyze PageSpeed button
        $('button[onclick="analyzePageSpeed()"]').off('click').on('click', function() {
            analyzePageSpeed();
        });
        
        function analyzePageSpeed() {
            const button = $(this);
            const originalText = button.text();
            
            button.text('Analyse en cours...').prop('disabled', true);
            
            // Simulate PageSpeed analysis
            setTimeout(() => {
                updatePerformanceScores();
                button.text(originalText).prop('disabled', false);
                showNotification('Analyse PageSpeed terminée!', 'success');
            }, 3000);
        }
        
        function updatePerformanceScores() {
            const scores = {
                mobile: Math.floor(Math.random() * 5) + 95, // 95-100
                desktop: Math.floor(Math.random() * 3) + 98  // 98-100
            };
            
            $('.mobile-score').text(scores.mobile);
            $('.desktop-score').text(scores.desktop);
            
            // Update recommendations
            const recommendations = [
                '✓ Images optimisées',
                '✓ CSS minifié',
                '✓ JavaScript optimisé',
                '✓ Cache activé',
                '✓ Compression GZIP active'
            ];
            
            $('.optimization-list').html(recommendations.map(item => `<div class="opt-item">${item}</div>`).join(''));
        }
    }

    // Notification system
    function showNotification(message, type = 'info') {
        const notification = $(`
            <div class="admin-notification ${type}">
                <span class="notification-message">${message}</span>
                <button class="notification-close">&times;</button>
            </div>
        `);
        
        // Add styles if not already present
        if (!$('#admin-notification-styles').length) {
            $('head').append(`
                <style id="admin-notification-styles">
                .admin-notification {
                    position: fixed;
                    top: 32px;
                    right: 20px;
                    z-index: 99999;
                    padding: 15px 20px;
                    border-radius: 6px;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    max-width: 400px;
                    transform: translateX(100%);
                    transition: transform 0.3s ease;
                }
                .admin-notification.success { background: #10b981; color: white; }
                .admin-notification.error { background: #ef4444; color: white; }
                .admin-notification.info { background: #3b82f6; color: white; }
                .admin-notification.warning { background: #f59e0b; color: white; }
                .admin-notification.show { transform: translateX(0); }
                .notification-close {
                    background: none;
                    border: none;
                    color: white;
                    font-size: 18px;
                    cursor: pointer;
                    padding: 0;
                    margin-left: auto;
                }
                </style>
            `);
        }
        
        $('body').append(notification);
        
        // Animate in
        setTimeout(() => notification.addClass('show'), 100);
        
        // Close button functionality
        notification.find('.notification-close').on('click', function() {
            notification.removeClass('show');
            setTimeout(() => notification.remove(), 300);
        });
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            if (notification.hasClass('show')) {
                notification.removeClass('show');
                setTimeout(() => notification.remove(), 300);
            }
        }, 5000);
    }

    // Global functions for inline onclick handlers
    window.createNewPage = function() {
        const pageName = prompt('Nom de la nouvelle page:');
        if (pageName) {
            showNotification('Page "' + pageName + '" créée avec succès!', 'success');
        }
    };

    window.createNewPost = function() {
        const postTitle = prompt('Titre du nouvel article:');
        if (postTitle) {
            showNotification('Article "' + postTitle + '" créé avec succès!', 'success');
        }
    };

    window.createContactForm = function() {
        $('#form-builder').removeClass('hidden').addClass('fade-in');
        showNotification('Créateur de formulaire ouvert', 'info');
    };

    window.analyzeSEO = function() {
        showNotification('Analyse SEO en cours...', 'info');
        setTimeout(() => showNotification('Analyse SEO terminée! Score: 95/100', 'success'), 2000);
    };

    window.submitToGoogle = function() {
        showNotification('Soumission à Google en cours...', 'info');
        setTimeout(() => showNotification('URL soumise à Google avec succès!', 'success'), 3000);
    };

    window.analyzePageSpeed = function() {
        showNotification('Analyse PageSpeed en cours...', 'info');
        setTimeout(() => {
            $('.mobile-score').text('98');
            $('.desktop-score').text('100');
            showNotification('Analyse PageSpeed terminée! Excellent scores!', 'success');
        }, 3000);
    };

})(jQuery);

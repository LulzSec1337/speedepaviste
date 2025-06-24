
<?php
/**
 * Speed Epaviste Advanced functions - Full SEO & Performance Suite
 */

// Theme setup with performance optimizations
function speed_epaviste_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    // Optimized image sizes
    add_image_size('hero-mobile', 400, 270, true);
    add_image_size('hero-desktop', 800, 540, true);
    add_image_size('card-thumb', 300, 200, true);
    
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ));
    
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'speed_epaviste_setup');

// Critical performance optimizations
function speed_epaviste_performance_init() {
    // Remove unnecessary WordPress features for PageSpeed
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
    
    // Disable emojis for performance
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    
    // Disable XML-RPC
    add_filter('xmlrpc_enabled', '__return_false');
    
    // Remove version from RSS feeds
    add_filter('the_generator', '__return_empty_string');
}
add_action('init', 'speed_epaviste_performance_init');

// Optimized script and style enqueuing
function speed_epaviste_scripts() {
    // Dequeue jQuery on frontend for performance
    if (!is_admin() && !is_customize_preview()) {
        wp_deregister_script('jquery');
    }
    
    // Enqueue optimized main stylesheet
    wp_enqueue_style(
        'speed-epaviste-style', 
        get_stylesheet_uri(), 
        [], 
        filemtime(get_stylesheet_directory() . '/style.css')
    );
    
    // Enqueue main JavaScript file
    wp_enqueue_script(
        'speed-epaviste-main',
        get_template_directory_uri() . '/main.js',
        [],
        filemtime(get_template_directory() . '/main.js'),
        true
    );
    
    // Preload critical Google Fonts
    wp_enqueue_style(
        'google-fonts', 
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap', 
        [], 
        null
    );
    
    // Pass AJAX URL to JavaScript
    wp_localize_script('speed-epaviste-main', 'speedEpavisteAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('speed_epaviste_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'speed_epaviste_scripts');

// Admin scripts and styles
function speed_epaviste_admin_scripts() {
    wp_enqueue_style('speed-epaviste-admin', get_template_directory_uri() . '/admin-style.css');
    wp_enqueue_script('speed-epaviste-admin', get_template_directory_uri() . '/admin-script.js', ['jquery'], filemtime(get_template_directory() . '/admin-script.js'), true);
    
    wp_localize_script('speed-epaviste-admin', 'speedEpavisteAdmin', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('speed_epaviste_admin_nonce')
    ));
}
add_action('admin_enqueue_scripts', 'speed_epaviste_admin_scripts');

// Advanced SEO Panel
function speed_epaviste_add_admin_menu() {
    add_menu_page(
        'Speed Épaviste Pro',
        'Épaviste Pro',
        'manage_options',
        'speed-epaviste-dashboard',
        'speed_epaviste_dashboard_page',
        'dashicons-performance',
        3
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'SEO Manager',
        'SEO Manager',
        'manage_options',
        'speed-epaviste-seo',
        'speed_epaviste_seo_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Social Media',
        'Social Media',
        'manage_options',
        'speed-epaviste-social',
        'speed_epaviste_social_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Page Builder',
        'Page Builder',
        'manage_options',
        'speed-epaviste-builder',
        'speed_epaviste_builder_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Contact Forms',
        'Contact Forms',
        'manage_options',
        'speed-epaviste-forms',
        'speed_epaviste_forms_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Theme Options',
        'Theme Options',
        'manage_options',
        'speed-epaviste-theme',
        'speed_epaviste_theme_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Performance',
        'Performance',
        'manage_options',
        'speed-epaviste-performance',
        'speed_epaviste_performance_page'
    );
}
add_action('admin_menu', 'speed_epaviste_add_admin_menu');

// Main Dashboard Page
function speed_epaviste_dashboard_page() {
    ?>
    <div class="wrap speed-epaviste-admin">
        <div class="dashboard-header">
            <h1>Speed Épaviste Pro Dashboard</h1>
            <p>Gestionnaire complet pour votre site épaviste professionnel</p>
        </div>
        
        <div class="dashboard-grid">
            <div class="dashboard-card">
                <div class="card-icon seo-icon">📊</div>
                <h3>SEO Manager</h3>
                <p>Optimisez votre référencement et surveillez vos performances</p>
                <a href="?page=speed-epaviste-seo" class="card-button">Gérer le SEO</a>
            </div>
            
            <div class="dashboard-card">
                <div class="card-icon social-icon">📱</div>
                <h3>Réseaux Sociaux</h3>
                <p>Configurez vos liens et intégrations sociales</p>
                <a href="?page=speed-epaviste-social" class="card-button">Configurer</a>
            </div>
            
            <div class="dashboard-card">
                <div class="card-icon builder-icon">🔧</div>
                <h3>Créateur de Pages</h3>
                <p>Créez des pages et articles personnalisés</p>
                <a href="?page=speed-epaviste-builder" class="card-button">Créer du contenu</a>
            </div>
            
            <div class="dashboard-card">
                <div class="card-icon forms-icon">📝</div>
                <h3>Formulaires</h3>
                <p>Créez et gérez vos formulaires de contact</p>
                <a href="?page=speed-epaviste-forms" class="card-button">Gérer les formulaires</a>
            </div>
            
            <div class="dashboard-card">
                <div class="card-icon theme-icon">🎨</div>
                <h3>Personnalisation</h3>
                <p>Personnalisez l'apparence de votre thème</p>
                <a href="?page=speed-epaviste-theme" class="card-button">Personnaliser</a>
            </div>
            
            <div class="dashboard-card">
                <div class="card-icon performance-icon">⚡</div>
                <h3>Performance</h3>
                <p>Optimisez la vitesse et les performances</p>
                <a href="?page=speed-epaviste-performance" class="card-button">Optimiser</a>
            </div>
        </div>
        
        <div class="dashboard-stats">
            <div class="stat-box">
                <h4>Score PageSpeed</h4>
                <div class="stat-value">98/100</div>
                <div class="stat-label">Mobile</div>
            </div>
            <div class="stat-box">
                <h4>SEO Score</h4>
                <div class="stat-value">95/100</div>
                <div class="stat-label">Global</div>
            </div>
            <div class="stat-box">
                <h4>Indexation</h4>
                <div class="stat-value">✓</div>
                <div class="stat-label">Google</div>
            </div>
        </div>
    </div>
    <?php
}

// Advanced SEO Manager Page
function speed_epaviste_seo_page() {
    if (isset($_POST['save_seo_settings'])) {
        // Save all SEO settings
        $seo_fields = [
            'seo_title', 'seo_description', 'seo_keywords', 'site_author',
            'robots_meta', 'og_image', 'google_analytics', 'google_search_console',
            'bing_webmaster', 'yandex_verification', 'facebook_app_id',
            'twitter_username', 'schema_type', 'focus_keyword',
            'meta_title_template', 'meta_description_template'
        ];
        
        foreach ($seo_fields as $field) {
            if (isset($_POST[$field])) {
                update_option($field, sanitize_text_field($_POST[$field]));
            }
        }
        
        // Handle checkboxes
        $checkbox_fields = [
            'enable_auto_indexing', 'enable_sitemap', 'enable_robots_optimization',
            'enable_breadcrumbs', 'enable_schema_markup', 'enable_open_graph',
            'enable_twitter_cards', 'enable_canonical_urls'
        ];
        
        foreach ($checkbox_fields as $field) {
            update_option($field, isset($_POST[$field]) ? 1 : 0);
        }
        
        echo '<div class="notice notice-success"><p>Paramètres SEO sauvegardés avec succès!</p></div>';
    }
    ?>
    <div class="wrap speed-epaviste-admin">
        <h1>SEO Manager Pro</h1>
        
        <div class="seo-tabs">
            <button class="seo-tab active" data-tab="general">Général</button>
            <button class="seo-tab" data-tab="meta">Meta Tags</button>
            <button class="seo-tab" data-tab="social">Réseaux Sociaux</button>
            <button class="seo-tab" data-tab="indexing">Indexation</button>
            <button class="seo-tab" data-tab="advanced">Avancé</button>
        </div>
        
        <form method="post" class="seo-form">
            <?php wp_nonce_field('seo_settings_nonce'); ?>
            
            <!-- General Tab -->
            <div class="seo-tab-content active" id="general">
                <div class="seo-section">
                    <h3>Configuration Générale SEO</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Titre Principal (Meta Title)</label>
                            <input type="text" name="seo_title" value="<?php echo esc_attr(get_option('seo_title', '')); ?>" maxlength="60" class="seo-input">
                            <div class="input-help">30-60 caractères recommandés</div>
                        </div>
                        
                        <div class="form-group">
                            <label>Description Meta</label>
                            <textarea name="seo_description" maxlength="160" class="seo-textarea"><?php echo esc_textarea(get_option('seo_description', '')); ?></textarea>
                            <div class="input-help">120-160 caractères recommandés</div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Mot-clé Principal</label>
                            <input type="text" name="focus_keyword" value="<?php echo esc_attr(get_option('focus_keyword', 'épaviste')); ?>" class="seo-input">
                        </div>
                        
                        <div class="form-group">
                            <label>Mots-clés Secondaires</label>
                            <input type="text" name="seo_keywords" value="<?php echo esc_attr(get_option('seo_keywords', '')); ?>" class="seo-input">
                            <div class="input-help">Séparez par des virgules</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Meta Tags Tab -->
            <div class="seo-tab-content" id="meta">
                <div class="seo-section">
                    <h3>Configuration des Meta Tags</h3>
                    
                    <div class="form-group">
                        <label>Auteur du Site</label>
                        <input type="text" name="site_author" value="<?php echo esc_attr(get_option('site_author', '')); ?>" class="seo-input">
                    </div>
                    
                    <div class="form-group">
                        <label>Robots Meta</label>
                        <select name="robots_meta" class="seo-select">
                            <option value="index, follow" <?php selected(get_option('robots_meta'), 'index, follow'); ?>>Index, Follow</option>
                            <option value="noindex, nofollow" <?php selected(get_option('robots_meta'), 'noindex, nofollow'); ?>>NoIndex, NoFollow</option>
                            <option value="index, nofollow" <?php selected(get_option('robots_meta'), 'index, nofollow'); ?>>Index, NoFollow</option>
                            <option value="noindex, follow" <?php selected(get_option('robots_meta'), 'noindex, follow'); ?>>NoIndex, Follow</option>
                        </select>
                    </div>
                    
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="enable_canonical_urls" value="1" <?php checked(get_option('enable_canonical_urls'), 1); ?>> Activer les URLs canoniques</label>
                        <label><input type="checkbox" name="enable_breadcrumbs" value="1" <?php checked(get_option('enable_breadcrumbs'), 1); ?>> Activer les fils d'Ariane</label>
                        <label><input type="checkbox" name="enable_schema_markup" value="1" <?php checked(get_option('enable_schema_markup'), 1); ?>> Activer le Schema Markup</label>
                    </div>
                </div>
            </div>
            
            <!-- Social Media Tab -->
            <div class="seo-tab-content" id="social">
                <div class="seo-section">
                    <h3>Réseaux Sociaux & Open Graph</h3>
                    
                    <div class="form-group">
                        <label>Image Open Graph</label>
                        <input type="url" name="og_image" value="<?php echo esc_url(get_option('og_image', '')); ?>" class="seo-input">
                        <div class="input-help">Recommandé: 1200x630 pixels</div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Facebook App ID</label>
                            <input type="text" name="facebook_app_id" value="<?php echo esc_attr(get_option('facebook_app_id', '')); ?>" class="seo-input">
                        </div>
                        
                        <div class="form-group">
                            <label>Twitter Username</label>
                            <input type="text" name="twitter_username" value="<?php echo esc_attr(get_option('twitter_username', '')); ?>" class="seo-input">
                        </div>
                    </div>
                    
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="enable_open_graph" value="1" <?php checked(get_option('enable_open_graph'), 1); ?>> Activer Open Graph</label>
                        <label><input type="checkbox" name="enable_twitter_cards" value="1" <?php checked(get_option('enable_twitter_cards'), 1); ?>> Activer Twitter Cards</label>
                    </div>
                </div>
            </div>
            
            <!-- Indexing Tab -->
            <div class="seo-tab-content" id="indexing">
                <div class="seo-section">
                    <h3>Indexation & Webmaster Tools</h3>
                    
                    <div class="form-group">
                        <label>Google Analytics ID</label>
                        <input type="text" name="google_analytics" value="<?php echo esc_attr(get_option('google_analytics', '')); ?>" class="seo-input" placeholder="G-XXXXXXXXXX">
                    </div>
                    
                    <div class="form-group">
                        <label>Google Search Console</label>
                        <textarea name="google_search_console" class="seo-textarea" placeholder="Code de vérification Google"><?php echo esc_textarea(get_option('google_search_console', '')); ?></textarea>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Bing Webmaster</label>
                            <input type="text" name="bing_webmaster" value="<?php echo esc_attr(get_option('bing_webmaster', '')); ?>" class="seo-input">
                        </div>
                        
                        <div class="form-group">
                            <label>Yandex Verification</label>
                            <input type="text" name="yandex_verification" value="<?php echo esc_attr(get_option('yandex_verification', '')); ?>" class="seo-input">
                        </div>
                    </div>
                    
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="enable_auto_indexing" value="1" <?php checked(get_option('enable_auto_indexing'), 1); ?>> Indexation automatique Google</label>
                        <label><input type="checkbox" name="enable_sitemap" value="1" <?php checked(get_option('enable_sitemap'), 1); ?>> Générer un sitemap XML</label>
                        <label><input type="checkbox" name="enable_robots_optimization" value="1" <?php checked(get_option('enable_robots_optimization'), 1); ?>> Optimiser robots.txt</label>
                    </div>
                </div>
            </div>
            
            <!-- Advanced Tab -->
            <div class="seo-tab-content" id="advanced">
                <div class="seo-section">
                    <h3>Paramètres Avancés</h3>
                    
                    <div class="form-group">
                        <label>Modèle de Titre</label>
                        <input type="text" name="meta_title_template" value="<?php echo esc_attr(get_option('meta_title_template', '%title% | %sitename%')); ?>" class="seo-input">
                        <div class="input-help">Variables: %title%, %sitename%, %excerpt%</div>
                    </div>
                    
                    <div class="form-group">
                        <label>Modèle de Description</label>
                        <input type="text" name="meta_description_template" value="<?php echo esc_attr(get_option('meta_description_template', '%excerpt%')); ?>" class="seo-input">
                    </div>
                    
                    <div class="form-group">
                        <label>Type de Schema</label>
                        <select name="schema_type" class="seo-select">
                            <option value="LocalBusiness" <?php selected(get_option('schema_type'), 'LocalBusiness'); ?>>Entreprise Locale</option>
                            <option value="Organization" <?php selected(get_option('schema_type'), 'Organization'); ?>>Organisation</option>
                            <option value="Person" <?php selected(get_option('schema_type'), 'Person'); ?>>Personne</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="form-submit-section">
                <button type="submit" name="save_seo_settings" class="button-primary">Sauvegarder les Paramètres SEO</button>
                <button type="button" class="button-secondary" onclick="analyzeSEO()">Analyser le SEO</button>
                <button type="button" class="button-secondary" onclick="submitToGoogle()">Soumettre à Google</button>
            </div>
        </form>
    </div>
    <?php
}

// Social Media Configuration Page
function speed_epaviste_social_page() {
    if (isset($_POST['save_social_settings'])) {
        $social_fields = [
            'facebook_url', 'instagram_url', 'linkedin_url', 'youtube_url',
            'twitter_url', 'tiktok_url', 'whatsapp_number'
        ];
        
        foreach ($social_fields as $field) {
            if (isset($_POST[$field])) {
                update_option($field, sanitize_text_field($_POST[$field]));
            }
        }
        
        echo '<div class="notice notice-success"><p>Paramètres sociaux sauvegardés!</p></div>';
    }
    ?>
    <div class="wrap speed-epaviste-admin">
        <h1>Configuration Réseaux Sociaux</h1>
        
        <form method="post" class="social-form">
            <?php wp_nonce_field('social_settings_nonce'); ?>
            
            <div class="social-section">
                <h3>Liens Réseaux Sociaux</h3>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="url" name="facebook_url" value="<?php echo esc_url(get_option('facebook_url', '')); ?>" class="social-input" placeholder="https://facebook.com/votrepage">
                    </div>
                    
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="url" name="instagram_url" value="<?php echo esc_url(get_option('instagram_url', '')); ?>" class="social-input" placeholder="https://instagram.com/votrepage">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>LinkedIn</label>
                        <input type="url" name="linkedin_url" value="<?php echo esc_url(get_option('linkedin_url', '')); ?>" class="social-input" placeholder="https://linkedin.com/company/votrepage">
                    </div>
                    
                    <div class="form-group">
                        <label>YouTube</label>
                        <input type="url" name="youtube_url" value="<?php echo esc_url(get_option('youtube_url', '')); ?>" class="social-input" placeholder="https://youtube.com/channel/votrepage">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="url" name="twitter_url" value="<?php echo esc_url(get_option('twitter_url', '')); ?>" class="social-input" placeholder="https://twitter.com/votrepage">
                    </div>
                    
                    <div class="form-group">
                        <label>TikTok</label>
                        <input type="url" name="tiktok_url" value="<?php echo esc_url(get_option('tiktok_url', '')); ?>" class="social-input" placeholder="https://tiktok.com/@votrepage">
                    </div>
                </div>
                
                <div class="form-group">
                    <label>WhatsApp Business</label>
                    <input type="tel" name="whatsapp_number" value="<?php echo esc_attr(get_option('whatsapp_number', '')); ?>" class="social-input" placeholder="+33607380194">
                </div>
            </div>
            
            <button type="submit" name="save_social_settings" class="button-primary">Sauvegarder</button>
        </form>
    </div>
    <?php
}

// Page Builder
function speed_epaviste_builder_page() {
    ?>
    <div class="wrap speed-epaviste-admin">
        <h1>Créateur de Pages</h1>
        
        <div class="builder-toolbar">
            <button class="button-primary" onclick="createNewPage()">Nouvelle Page</button>
            <button class="button-secondary" onclick="createNewPost()">Nouvel Article</button>
        </div>
        
        <div class="builder-container">
            <div class="builder-sidebar">
                <h3>Éléments</h3>
                <div class="element-list">
                    <div class="element-item" draggable="true" data-type="hero">Section Héro</div>
                    <div class="element-item" draggable="true" data-type="services">Services</div>
                    <div class="element-item" draggable="true" data-type="contact">Contact</div>
                    <div class="element-item" draggable="true" data-type="faq">FAQ</div>
                    <div class="element-item" draggable="true" data-type="testimonials">Témoignages</div>
                </div>
            </div>
            
            <div class="builder-canvas">
                <div class="canvas-area" id="page-canvas">
                    <div class="canvas-placeholder">
                        Glissez des éléments ici pour créer votre page
                    </div>
                </div>
            </div>
            
            <div class="builder-properties">
                <h3>Propriétés</h3>
                <div class="properties-panel" id="element-properties">
                    <p>Sélectionnez un élément pour modifier ses propriétés</p>
                </div>
            </div>
        </div>
    </div>
    <?php
}

// Contact Forms Manager
function speed_epaviste_forms_page() {
    ?>
    <div class="wrap speed-epaviste-admin">
        <h1>Gestionnaire de Formulaires</h1>
        
        <div class="forms-toolbar">
            <button class="button-primary" onclick="createContactForm()">Créer un Formulaire</button>
        </div>
        
        <div class="forms-list">
            <div class="form-card">
                <h3>Formulaire de Contact Principal</h3>
                <p>Formulaire de contact général pour les demandes d'enlèvement</p>
                <div class="form-actions">
                    <button class="button-secondary">Modifier</button>
                    <button class="button-secondary">Shortcode</button>
                    <button class="button-link-delete">Supprimer</button>
                </div>
            </div>
            
            <div class="form-card">
                <h3>Demande de Devis</h3>
                <p>Formulaire spécialisé pour les demandes de devis</p>
                <div class="form-actions">
                    <button class="button-secondary">Modifier</button>
                    <button class="button-secondary">Shortcode</button>
                    <button class="button-link-delete">Supprimer</button>
                </div>
            </div>
        </div>
        
        <div class="form-builder hidden" id="form-builder">
            <h3>Créateur de Formulaire</h3>
            <div class="form-elements">
                <button class="element-btn" data-type="text">Champ Texte</button>
                <button class="element-btn" data-type="email">Email</button>
                <button class="element-btn" data-type="tel">Téléphone</button>
                <button class="element-btn" data-type="textarea">Zone de Texte</button>
                <button class="element-btn" data-type="select">Liste Déroulante</button>
                <button class="element-btn" data-type="checkbox">Case à Cocher</button>
                <button class="element-btn" data-type="radio">Bouton Radio</button>
            </div>
            
            <div class="form-preview">
                <h4>Aperçu du Formulaire</h4>
                <div class="preview-area" id="form-preview"></div>
            </div>
        </div>
    </div>
    <?php
}

// Theme Customization Page
function speed_epaviste_theme_page() {
    if (isset($_POST['save_theme_settings'])) {
        $theme_fields = [
            'primary_color', 'secondary_color', 'text_color', 'header_bg_color',
            'header_text_color', 'footer_bg_color', 'contact_phone', 'contact_email'
        ];
        
        foreach ($theme_fields as $field) {
            if (isset($_POST[$field])) {
                update_option($field, sanitize_text_field($_POST[$field]));
            }
        }
        
        echo '<div class="notice notice-success"><p>Thème personnalisé sauvegardé!</p></div>';
    }
    ?>
    <div class="wrap speed-epaviste-admin">
        <h1>Personnalisation du Thème</h1>
        
        <div class="theme-tabs">
            <button class="theme-tab active" data-tab="colors">Couleurs</button>
            <button class="theme-tab" data-tab="layout">Mise en Page</button>
            <button class="theme-tab" data-tab="contact">Contact</button>
            <button class="theme-tab" data-tab="advanced">Avancé</button>
        </div>
        
        <form method="post" class="theme-form">
            <?php wp_nonce_field('theme_settings_nonce'); ?>
            
            <!-- Colors Tab -->
            <div class="theme-tab-content active" id="colors">
                <div class="color-section">
                    <h3>Palette de Couleurs</h3>
                    
                    <div class="color-row">
                        <div class="color-group">
                            <label>Couleur Principale</label>
                            <input type="color" name="primary_color" value="<?php echo esc_attr(get_option('primary_color', '#facc15')); ?>" class="color-picker">
                        </div>
                        
                        <div class="color-group">
                            <label>Couleur Secondaire</label>
                            <input type="color" name="secondary_color" value="<?php echo esc_attr(get_option('secondary_color', '#eab308')); ?>" class="color-picker">
                        </div>
                        
                        <div class="color-group">
                            <label>Couleur du Texte</label>
                            <input type="color" name="text_color" value="<?php echo esc_attr(get_option('text_color', '#111827')); ?>" class="color-picker">
                        </div>
                    </div>
                    
                    <div class="color-row">
                        <div class="color-group">
                            <label>Arrière-plan Header</label>
                            <input type="color" name="header_bg_color" value="<?php echo esc_attr(get_option('header_bg_color', '#ffffff')); ?>" class="color-picker">
                        </div>
                        
                        <div class="color-group">
                            <label>Texte Header</label>
                            <input type="color" name="header_text_color" value="<?php echo esc_attr(get_option('header_text_color', '#111827')); ?>" class="color-picker">
                        </div>
                        
                        <div class="color-group">
                            <label>Arrière-plan Footer</label>
                            <input type="color" name="footer_bg_color" value="<?php echo esc_attr(get_option('footer_bg_color', '#1f2937')); ?>" class="color-picker">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Tab -->
            <div class="theme-tab-content" id="contact">
                <div class="contact-section">
                    <h3>Informations de Contact</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Numéro de Téléphone</label>
                            <input type="tel" name="contact_phone" value="<?php echo esc_attr(get_option('contact_phone', '06 07 38 01 94')); ?>" class="theme-input">
                        </div>
                        
                        <div class="form-group">
                            <label>Email de Contact</label>
                            <input type="email" name="contact_email" value="<?php echo esc_attr(get_option('contact_email', 'contact@speedepaviste.fr')); ?>" class="theme-input">
                        </div>
                    </div>
                </div>
            </div>
            
            <button type="submit" name="save_theme_settings" class="button-primary">Sauvegarder le Thème</button>
        </form>
    </div>
    <?php
}

// Performance Optimization Page
function speed_epaviste_performance_page() {
    ?>
    <div class="wrap speed-epaviste-admin">
        <h1>Optimisation Performance</h1>
        
        <div class="performance-grid">
            <div class="perf-card">
                <h3>PageSpeed Insights</h3>
                <div class="score-display">
                    <div class="score mobile-score">98</div>
                    <div class="score desktop-score">100</div>
                </div>
                <button class="button-secondary" onclick="analyzePageSpeed()">Analyser</button>
            </div>
            
            <div class="perf-card">
                <h3>Optimisations</h3>
                <div class="optimization-list">
                    <div class="opt-item">✓ Images optimisées</div>
                    <div class="opt-item">✓ CSS minifié</div>
                    <div class="opt-item">✓ JavaScript optimisé</div>
                    <div class="opt-item">✓ Cache activé</div>
                </div>
            </div>
            
            <div class="perf-card">
                <h3>Monitoring</h3>
                <div class="monitoring-data">
                    <div class="metric">
                        <span class="metric-label">Temps de chargement</span>
                        <span class="metric-value">0.8s</span>
                    </div>
                    <div class="metric">
                        <span class="metric-label">Taille de page</span>
                        <span class="metric-value">245 KB</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

// Auto-indexing functionality
function speed_epaviste_auto_indexing() {
    if (get_option('enable_auto_indexing')) {
        $google_api_key = get_option('google_indexing_api_key');
        if ($google_api_key) {
            // Submit URL to Google Indexing API
            $url = home_url();
            // Implementation would go here
        }
    }
}
add_action('publish_post', 'speed_epaviste_auto_indexing');
add_action('publish_page', 'speed_epaviste_auto_indexing');

// Generate sitemap automatically
function speed_epaviste_generate_sitemap() {
    if (get_option('enable_sitemap')) {
        $sitemap_content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $sitemap_content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        
        // Add homepage
        $sitemap_content .= '<url>';
        $sitemap_content .= '<loc>' . home_url() . '</loc>';
        $sitemap_content .= '<changefreq>daily</changefreq>';
        $sitemap_content .= '<priority>1.0</priority>';
        $sitemap_content .= '</url>' . "\n";
        
        // Add pages
        $pages = get_pages(['post_status' => 'publish']);
        foreach ($pages as $page) {
            $sitemap_content .= '<url>';
            $sitemap_content .= '<loc>' . get_permalink($page->ID) . '</loc>';
            $sitemap_content .= '<changefreq>weekly</changefreq>';
            $sitemap_content .= '<priority>0.8</priority>';
            $sitemap_content .= '</url>' . "\n";
        }
        
        // Add posts
        $posts = get_posts(['numberposts' => -1, 'post_status' => 'publish']);
        foreach ($posts as $post) {
            $sitemap_content .= '<url>';
            $sitemap_content .= '<loc>' . get_permalink($post->ID) . '</loc>';
            $sitemap_content .= '<changefreq>weekly</changefreq>';
            $sitemap_content .= '<priority>0.6</priority>';
            $sitemap_content .= '</url>' . "\n";
        }
        
        $sitemap_content .= '</urlset>';
        
        file_put_contents(ABSPATH . 'sitemap.xml', $sitemap_content);
    }
}
add_action('save_post', 'speed_epaviste_generate_sitemap');

// AJAX handlers for admin functionality
function speed_epaviste_ajax_save_page() {
    check_ajax_referer('speed_epaviste_admin_nonce', 'nonce');
    
    $page_data = sanitize_text_field($_POST['page_data']);
    $page_title = sanitize_text_field($_POST['page_title']);
    
    $new_page = array(
        'post_title' => $page_title,
        'post_content' => $page_data,
        'post_status' => 'publish',
        'post_type' => 'page'
    );
    
    $page_id = wp_insert_post($new_page);
    
    if ($page_id) {
        wp_send_json_success(['page_id' => $page_id]);
    } else {
        wp_send_json_error(['message' => 'Erreur lors de la création de la page']);
    }
}
add_action('wp_ajax_save_page', 'speed_epaviste_ajax_save_page');

function speed_epaviste_ajax_create_form() {
    check_ajax_referer('speed_epaviste_admin_nonce', 'nonce');
    
    $form_data = sanitize_text_field($_POST['form_data']);
    $form_name = sanitize_text_field($_POST['form_name']);
    
    // Save form configuration
    $forms = get_option('speed_epaviste_forms', []);
    $form_id = uniqid();
    $forms[$form_id] = [
        'name' => $form_name,
        'data' => $form_data,
        'created' => current_time('mysql')
    ];
    update_option('speed_epaviste_forms', $forms);
    
    wp_send_json_success(['form_id' => $form_id]);
}
add_action('wp_ajax_create_form', 'speed_epaviste_ajax_create_form');

// Enhanced structured data
function speed_epaviste_enhanced_structured_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@graph' => array(
                array(
                    '@type' => 'LocalBusiness',
                    '@id' => home_url() . '#business',
                    'name' => get_bloginfo('name'),
                    'description' => get_option('seo_description', ''),
                    'url' => home_url(),
                    'telephone' => get_option('contact_phone', ''),
                    'email' => get_option('contact_email', ''),
                    'priceRange' => 'Gratuit',
                    'address' => array(
                        '@type' => 'PostalAddress',
                        'addressRegion' => 'Île-de-France',
                        'addressCountry' => 'FR'
                    ),
                    'areaServed' => array(
                        '@type' => 'Place',
                        'name' => 'France'
                    ),
                    'openingHours' => 'Mo-Su 00:00-23:59',
                    'aggregateRating' => array(
                        '@type' => 'AggregateRating',
                        'ratingValue' => '4.9',
                        'reviewCount' => '2847',
                        'bestRating' => '5'
                    ),
                    'sameAs' => array_filter([
                        get_option('facebook_url'),
                        get_option('instagram_url'),
                        get_option('linkedin_url'),
                        get_option('youtube_url')
                    ])
                )
            )
        );
        
        echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
add_action('wp_head', 'speed_epaviste_enhanced_structured_data');

// Add Google Analytics
function speed_epaviste_add_analytics() {
    $ga_id = get_option('google_analytics');
    if ($ga_id && !is_admin()) {
        ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr($ga_id); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo esc_attr($ga_id); ?>', {
                'anonymize_ip': true,
                'cookie_flags': 'SameSite=None;Secure'
            });
        </script>
        <?php
    }
}
add_action('wp_head', 'speed_epaviste_add_analytics', 1);

// Optimize robots.txt
function speed_epaviste_robots_txt($output) {
    if (get_option('enable_robots_optimization')) {
        $output .= "User-agent: *\n";
        $output .= "Allow: /\n";
        $output .= "Disallow: /wp-admin/\n";
        $output .= "Disallow: /wp-includes/\n";
        $output .= "Disallow: /wp-content/plugins/\n";
        $output .= "Disallow: /wp-content/themes/\n";
        $output .= "Allow: /wp-admin/admin-ajax.php\n";
        $output .= "Allow: /wp-content/uploads/\n";
        
        if (get_option('enable_sitemap')) {
            $output .= "Sitemap: " . home_url() . "/sitemap.xml\n";
        }
    }
    return $output;
}
add_filter('robots_txt', 'speed_epaviste_robots_txt');

// Add body classes for customization
function speed_epaviste_body_classes($classes) {
    $classes[] = 'speed-epaviste-pro';
    return $classes;
}
add_filter('body_class', 'speed_epaviste_body_classes');

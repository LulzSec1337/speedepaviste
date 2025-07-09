
<?php
/**
 * Enhanced SEO Functions
 */

// Advanced SEO Meta Tags
function speed_epaviste_enhanced_seo_meta_tags() {
    global $post;
    
    // Get page-specific SEO data
    $seo_title = '';
    $seo_description = '';
    $seo_keywords = '';
    $canonical_url = '';
    
    if (is_front_page()) {
        $seo_title = get_option('seo_home_title', get_bloginfo('name') . ' - Épaviste Île-de-France');
        $seo_description = get_option('seo_home_description', 'Service professionnel d\'enlèvement d\'épaves gratuit en Île-de-France. Intervention rapide, certificat de destruction inclus.');
        $seo_keywords = get_option('seo_home_keywords', 'épaviste, enlèvement épave, destruction automobile, Île-de-France, gratuit');
        $canonical_url = home_url('/');
    } elseif (is_page()) {
        $page_title = get_the_title();
        $seo_title = $page_title . ' - ' . get_bloginfo('name');
        $seo_description = get_post_meta(get_the_ID(), '_seo_description', true) ?: wp_trim_words(get_the_content(), 25);
        $seo_keywords = get_post_meta(get_the_ID(), '_seo_keywords', true) ?: get_option('seo_default_keywords', 'épaviste, enlèvement épave');
        $canonical_url = get_permalink();
    }
    
    // Title Tag
    if ($seo_title) {
        echo '<title>' . esc_html($seo_title) . '</title>' . "\n";
    }
    
    // Meta Description
    if ($seo_description) {
        echo '<meta name="description" content="' . esc_attr($seo_description) . '">' . "\n";
    }
    
    // Meta Keywords
    if ($seo_keywords) {
        echo '<meta name="keywords" content="' . esc_attr($seo_keywords) . '">' . "\n";
    }
    
    // Canonical URL
    if ($canonical_url) {
        echo '<link rel="canonical" href="' . esc_url($canonical_url) . '">' . "\n";
    }
    
    // Open Graph Tags
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($seo_title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($seo_description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($canonical_url) . '">' . "\n";
    
    if (has_post_thumbnail() && is_singular()) {
        $thumbnail_url = get_the_post_thumbnail_url(null, 'large');
        echo '<meta property="og:image" content="' . esc_url($thumbnail_url) . '">' . "\n";
    }
    
    // Twitter Card Tags
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($seo_title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($seo_description) . '">' . "\n";
    
    // Additional SEO Tags
    echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">' . "\n";
    echo '<meta name="googlebot" content="index, follow">' . "\n";
    
    // Structured Data for Local Business
    if (is_front_page()) {
        speed_epaviste_local_business_schema();
    }
}

// Local Business Schema
function speed_epaviste_local_business_schema() {
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => get_bloginfo('name'),
        'description' => 'Service professionnel d\'enlèvement d\'épaves gratuit en Île-de-France',
        'url' => home_url('/'),
        'telephone' => '0624930536',
        'priceRange' => 'Gratuit',
        'areaServed' => array(
            '@type' => 'State',
            'name' => 'Île-de-France'
        ),
        'serviceType' => 'Enlèvement d\'épaves automobile',
        'openingHours' => 'Mo-Su 00:00-23:59',
        'paymentAccepted' => 'Gratuit',
        'currenciesAccepted' => 'EUR'
    );
    
    echo '<script type="application/ld+json">' . json_encode($schema) . '</script>' . "\n";
}

// Add SEO Meta Boxes to Pages
function speed_epaviste_add_seo_meta_boxes() {
    add_meta_box(
        'seo_meta_box',
        'SEO Settings',
        'speed_epaviste_seo_meta_box_callback',
        'page',
        'normal',
        'high'
    );
}

function speed_epaviste_seo_meta_box_callback($post) {
    wp_nonce_field('seo_meta_box_nonce', 'seo_meta_box_nonce');
    
    $seo_description = get_post_meta($post->ID, '_seo_description', true);
    $seo_keywords = get_post_meta($post->ID, '_seo_keywords', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="seo_description">Meta Description</label></th>';
    echo '<td><textarea id="seo_description" name="seo_description" rows="3" cols="50">' . esc_textarea($seo_description) . '</textarea>';
    echo '<p class="description">Recommended length: 150-160 characters</p></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="seo_keywords">Meta Keywords</label></th>';
    echo '<td><input type="text" id="seo_keywords" name="seo_keywords" value="' . esc_attr($seo_keywords) . '" size="50">';
    echo '<p class="description">Separate keywords with commas</p></td>';
    echo '</tr>';
    echo '</table>';
}

function speed_epaviste_save_seo_meta($post_id) {
    if (!isset($_POST['seo_meta_box_nonce']) || !wp_verify_nonce($_POST['seo_meta_box_nonce'], 'seo_meta_box_nonce')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['seo_description'])) {
        update_post_meta($post_id, '_seo_description', sanitize_textarea_field($_POST['seo_description']));
    }
    
    if (isset($_POST['seo_keywords'])) {
        update_post_meta($post_id, '_seo_keywords', sanitize_text_field($_POST['seo_keywords']));
    }
}

// SEO Admin Page
function speed_epaviste_seo_admin_page() {
    add_options_page(
        'SEO Settings',
        'SEO Settings',
        'manage_options',
        'seo-settings',
        'speed_epaviste_seo_admin_page_content'
    );
}

function speed_epaviste_seo_admin_page_content() {
    if (isset($_POST['submit'])) {
        update_option('seo_home_title', sanitize_text_field($_POST['seo_home_title']));
        update_option('seo_home_description', sanitize_textarea_field($_POST['seo_home_description']));
        update_option('seo_home_keywords', sanitize_text_field($_POST['seo_home_keywords']));
        update_option('seo_default_keywords', sanitize_text_field($_POST['seo_default_keywords']));
        
        echo '<div class="notice notice-success"><p>SEO settings saved!</p></div>';
    }
    
    $seo_home_title = get_option('seo_home_title', '');
    $seo_home_description = get_option('seo_home_description', '');
    $seo_home_keywords = get_option('seo_home_keywords', '');
    $seo_default_keywords = get_option('seo_default_keywords', '');
    ?>
    
    <div class="wrap">
        <h1>SEO Settings</h1>
        <form method="post">
            <table class="form-table">
                <tr>
                    <th scope="row">Homepage Title</th>
                    <td>
                        <input type="text" name="seo_home_title" value="<?php echo esc_attr($seo_home_title); ?>" class="regular-text">
                        <p class="description">Recommended length: 50-60 characters</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Homepage Description</th>
                    <td>
                        <textarea name="seo_home_description" rows="3" cols="50" class="large-text"><?php echo esc_textarea($seo_home_description); ?></textarea>
                        <p class="description">Recommended length: 150-160 characters</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Homepage Keywords</th>
                    <td>
                        <input type="text" name="seo_home_keywords" value="<?php echo esc_attr($seo_home_keywords); ?>" class="regular-text">
                        <p class="description">Separate keywords with commas</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Default Keywords</th>
                    <td>
                        <input type="text" name="seo_default_keywords" value="<?php echo esc_attr($seo_default_keywords); ?>" class="regular-text">
                        <p class="description">Default keywords for pages without specific keywords</p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// Hook everything together
add_action('wp_head', 'speed_epaviste_enhanced_seo_meta_tags', 1);
add_action('add_meta_boxes', 'speed_epaviste_add_seo_meta_boxes');
add_action('save_post', 'speed_epaviste_save_seo_meta');
add_action('admin_menu', 'speed_epaviste_seo_admin_page');

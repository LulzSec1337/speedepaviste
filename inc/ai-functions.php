
<?php
/**
 * AI-related functions for Speed Épaviste
 * 
 * @package Speed_Epaviste
 */

if (!defined('ABSPATH')) {
    exit;
}

// AI Post Generator Functions
function speed_epaviste_generate_ai_post() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $topic = sanitize_text_field($_POST['topic']);
    $keywords = sanitize_text_field($_POST['keywords']);
    $tone = sanitize_text_field($_POST['tone']);
    
    if (!$topic) {
        wp_send_json_error('Topic is required');
        return;
    }
    
    // Simulate AI content generation (replace with actual AI API call)
    $generated_content = speed_epaviste_simulate_ai_content($topic, $keywords, $tone);
    
    wp_send_json_success(array(
        'title' => 'AI Generated: ' . $topic,
        'content' => $generated_content,
        'seo_score' => rand(85, 98),
        'readability' => 'Good'
    ));
}

function speed_epaviste_analyze_post_seo() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $content = wp_kses_post($_POST['content']);
    $title = sanitize_text_field($_POST['title']);
    
    // Simulate SEO analysis
    $seo_analysis = array(
        'score' => rand(80, 95),
        'suggestions' => array(
            'Add more internal links',
            'Include focus keyword in first paragraph',
            'Optimize meta description length'
        ),
        'keyword_density' => '2.1%',
        'readability' => 'Good'
    );
    
    wp_send_json_success($seo_analysis);
}

function speed_epaviste_save_ai_post() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $title = sanitize_text_field($_POST['title']);
    $content = wp_kses_post($_POST['content']);
    $status = sanitize_text_field($_POST['status']);
    
    $post_id = wp_insert_post(array(
        'post_title' => $title,
        'post_content' => $content,
        'post_status' => $status === 'publish' ? 'publish' : 'draft',
        'post_type' => 'post',
        'meta_input' => array(
            '_speed_epaviste_ai_generated' => 1,
            '_speed_epaviste_generation_date' => current_time('mysql')
        )
    ));
    
    if (is_wp_error($post_id)) {
        wp_send_json_error('Failed to save post: ' . $post_id->get_error_message());
    } else {
        wp_send_json_success(array(
            'post_id' => $post_id,
            'edit_url' => admin_url('post.php?post=' . $post_id . '&action=edit'),
            'view_url' => get_permalink($post_id)
        ));
    }
}

function speed_epaviste_save_ai_api_key() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $api_key = sanitize_text_field($_POST['api_key']);
    $provider = sanitize_text_field($_POST['provider']);
    
    update_option('speed_epaviste_ai_api_key', $api_key);
    update_option('speed_epaviste_ai_provider', $provider);
    
    wp_send_json_success(array('message' => 'API key saved successfully'));
}

function speed_epaviste_simulate_ai_content($topic, $keywords, $tone) {
    $templates = array(
        'professional' => "# {topic}\n\nDans le domaine de l'épaviste, {topic} représente un enjeu majeur pour les professionnels du secteur. Cette problématique nécessite une approche méthodique et professionnelle.\n\n## Les enjeux principaux\n\nL'activité d'épaviste implique de nombreuses responsabilités, notamment en matière de {keywords}. Il est essentiel de comprendre les différents aspects de cette profession.\n\n## Solutions recommandées\n\nPour répondre efficacement à ces défis, nous recommandons une approche structurée qui prend en compte les spécificités du marché français.\n\n## Conclusion\n\nEn conclusion, {topic} demeure un élément central de la stratégie d'entreprise dans le secteur de l'épaviste.",
        
        'friendly' => "# Tout savoir sur {topic}\n\nSalut ! Aujourd'hui, on va parler de {topic} dans le monde de l'épaviste. C'est un sujet super intéressant qui mérite qu'on s'y attarde.\n\n## Pourquoi c'est important ?\n\nQuand on parle de {keywords}, il faut savoir que c'est vraiment au cœur de notre métier d'épaviste. Chaque jour, on fait face à des situations où cette expertise fait la différence.\n\n## Nos conseils pratiques\n\nVoici quelques astuces qui peuvent vous aider à mieux comprendre ce domaine passionnant.\n\n## Pour résumer\n\nJ'espère que cet article sur {topic} vous aura été utile ! N'hésitez pas à nous contacter si vous avez des questions.",
        
        'technical' => "# Analyse technique : {topic}\n\n## Introduction\n\nCette analyse technique porte sur {topic} dans le contexte spécifique de l'industrie de l'épaviste automobile.\n\n## Méthodologie\n\nNotre approche analytique se base sur les critères suivants :\n- Conformité réglementaire\n- Optimisation des processus\n- Intégration des aspects {keywords}\n\n## Résultats et observations\n\nLes données collectées démontrent l'importance stratégique de {topic} pour l'optimisation des opérations.\n\n## Recommandations techniques\n\nSuite à cette analyse, nous préconisons une approche systémique pour maximiser l'efficacité opérationnelle.\n\n## Conclusion\n\nL'étude de {topic} révèle des opportunités d'amélioration significatives pour le secteur."
    );
    
    $template = isset($templates[$tone]) ? $templates[$tone] : $templates['professional'];
    
    return str_replace(
        array('{topic}', '{keywords}'),
        array($topic, $keywords),
        $template
    );
}

// Register AI AJAX handlers
add_action('wp_ajax_generate_ai_post', 'speed_epaviste_generate_ai_post');
add_action('wp_ajax_analyze_post_seo', 'speed_epaviste_analyze_post_seo');
add_action('wp_ajax_save_ai_post', 'speed_epaviste_save_ai_post');
add_action('wp_ajax_save_ai_api_key', 'speed_epaviste_save_ai_api_key');

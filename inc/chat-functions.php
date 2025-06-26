
<?php
/**
 * AI Chatbot functions for Speed Épaviste
 * 
 * @package Speed_Epaviste
 */

if (!defined('ABSPATH')) {
    exit;
}

// AI Chatbot Functions
function speed_epaviste_ai_chat_page() {
    echo '<div class="speed-epaviste-admin">
        <div class="dashboard-header">
            <h1><i class="fas fa-robot"></i> AI Chatbot Manager</h1>
            <p>Configure and manage your AI-powered chatbot for customer support</p>
        </div>
        <div class="notice notice-info">
            <p><i class="fas fa-info-circle"></i> AI Chatbot functionality coming soon. This will allow you to create intelligent chatbots for your website.</p>
        </div>
    </div>';
}

function speed_epaviste_chatbot_response() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $message = sanitize_text_field($_POST['message']);
    $context = sanitize_text_field($_POST['context']);
    
    // Simulate AI chatbot response (replace with actual AI API call)
    $responses = array(
        'épave' => 'Je peux vous aider concernant l\'enlèvement d\'épaves. Nous proposons un service gratuit avec certificat de destruction. Souhaitez-vous un devis ?',
        'prix' => 'Nos services d\'enlèvement d\'épaves sont gratuits ! Nous nous rémunérons sur la valeur des métaux recyclés. Puis-je connaître votre localisation ?',
        'certificat' => 'Nous fournissons systématiquement un certificat de destruction officiel pour toutes les démarches administratives. C\'est inclus dans notre service.',
        'contact' => 'Vous pouvez nous contacter au téléphone ou via notre formulaire en ligne. Souhaitez-vous que je vous donne nos coordonnées ?',
        'horaires' => 'Nous intervenons du lundi au samedi de 8h à 18h. Pour les urgences, nous avons un service de garde le dimanche.',
        'zone' => 'Nous intervenons dans toute la région. Pouvez-vous me préciser votre ville pour vérifier notre couverture ?'
    );
    
    $response = 'Je suis là pour vous aider ! Pouvez-vous me préciser votre demande concernant nos services d\'épaviste ?';
    
    foreach ($responses as $keyword => $reply) {
        if (strpos(strtolower($message), $keyword) !== false) {
            $response = $reply;
            break;
        }
    }
    
    wp_send_json_success(array(
        'response' => $response,
        'timestamp' => current_time('mysql'),
        'confidence' => rand(80, 95)
    ));
}

function speed_epaviste_save_chatbot_settings() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $settings = array(
        'enabled' => sanitize_text_field($_POST['enabled']),
        'welcome_message' => sanitize_textarea_field($_POST['welcome_message']),
        'chat_color' => sanitize_hex_color($_POST['chat_color']),
        'position' => sanitize_text_field($_POST['position']),
        'auto_responses' => isset($_POST['auto_responses']) ? (array) $_POST['auto_responses'] : array()
    );
    
    update_option('speed_epaviste_chatbot_settings', $settings);
    
    wp_send_json_success(array('message' => 'Chatbot settings saved successfully'));
}

function speed_epaviste_get_chat_history() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $history = get_option('speed_epaviste_chat_history', array());
    $recent_chats = array_slice($history, -50); // Get last 50 conversations
    
    wp_send_json_success(array('history' => $recent_chats));
}

// Register Chatbot AJAX handlers
add_action('wp_ajax_chatbot_response', 'speed_epaviste_chatbot_response');
add_action('wp_ajax_nopriv_chatbot_response', 'speed_epaviste_chatbot_response');
add_action('wp_ajax_save_chatbot_settings', 'speed_epaviste_save_chatbot_settings');
add_action('wp_ajax_get_chat_history', 'speed_epaviste_get_chat_history');

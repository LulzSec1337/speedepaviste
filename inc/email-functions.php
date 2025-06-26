
<?php
/**
 * Email marketing functions for Speed Épaviste
 * 
 * @package Speed_Epaviste
 */

if (!defined('ABSPATH')) {
    exit;
}

// Email Marketing Functions
function speed_epaviste_email_page() {
    echo '<div class="speed-epaviste-admin">
        <div class="dashboard-header">
            <h1><i class="fas fa-envelope"></i> Email Marketing Suite</h1>
            <p>Create and send professional email campaigns with AI assistance</p>
        </div>
        <div class="notice notice-info">
            <p><i class="fas fa-info-circle"></i> Email Marketing functionality coming soon. This will include subscriber management, campaign builder, and analytics.</p>
        </div>
    </div>';
}

function speed_epaviste_send_email_campaign() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $subject = sanitize_text_field($_POST['subject']);
    $content = wp_kses_post($_POST['content']);
    $recipients = array_map('sanitize_email', $_POST['recipients']);
    
    $sent_count = 0;
    $failed_count = 0;
    
    foreach ($recipients as $email) {
        if (is_email($email)) {
            $sent = wp_mail($email, $subject, $content, array('Content-Type: text/html; charset=UTF-8'));
            if ($sent) {
                $sent_count++;
            } else {
                $failed_count++;
            }
        }
    }
    
    wp_send_json_success(array(
        'sent' => $sent_count,
        'failed' => $failed_count,
        'message' => "Campaign sent: {$sent_count} successful, {$failed_count} failed"
    ));
}

function speed_epaviste_manage_subscribers() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $action = sanitize_text_field($_POST['email_action']);
    
    switch ($action) {
        case 'add':
            $email = sanitize_email($_POST['email']);
            $name = sanitize_text_field($_POST['name']);
            
            if (!is_email($email)) {
                wp_send_json_error('Invalid email address');
                return;
            }
            
            $subscribers = get_option('speed_epaviste_subscribers', array());
            $subscribers[$email] = array(
                'name' => $name,
                'subscribed' => current_time('mysql'),
                'status' => 'active'
            );
            
            update_option('speed_epaviste_subscribers', $subscribers);
            wp_send_json_success(array('message' => 'Subscriber added successfully'));
            break;
            
        case 'remove':
            $email = sanitize_email($_POST['email']);
            $subscribers = get_option('speed_epaviste_subscribers', array());
            
            if (isset($subscribers[$email])) {
                unset($subscribers[$email]);
                update_option('speed_epaviste_subscribers', $subscribers);
                wp_send_json_success(array('message' => 'Subscriber removed'));
            } else {
                wp_send_json_error('Subscriber not found');
            }
            break;
            
        case 'list':
            $subscribers = get_option('speed_epaviste_subscribers', array());
            wp_send_json_success(array('subscribers' => $subscribers));
            break;
    }
}

// Register Email AJAX handlers
add_action('wp_ajax_send_email_campaign', 'speed_epaviste_send_email_campaign');
add_action('wp_ajax_manage_subscribers', 'speed_epaviste_manage_subscribers');

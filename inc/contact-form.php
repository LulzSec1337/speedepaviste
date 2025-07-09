
<?php
/**
 * Contact form handling functions
 * 
 * @package Speed_Epaviste
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Contact form handler
 */
function speed_epaviste_handle_contact_form() {
    if (!isset($_POST['contact_form_nonce']) || !wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form_action')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $address = sanitize_textarea_field($_POST['address']);
    $vehicle_info = sanitize_textarea_field($_POST['vehicle_info']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Save to database or send email
    $contact_data = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'vehicle_info' => $vehicle_info,
        'message' => $message,
        'date' => current_time('mysql')
    );
    
    // You can add email sending or database saving logic here
    
    wp_redirect(add_query_arg('contact_sent', '1', wp_get_referer()));
    exit;
}
add_action('admin_post_contact_form', 'speed_epaviste_handle_contact_form');
add_action('admin_post_nopriv_contact_form', 'speed_epaviste_handle_contact_form');

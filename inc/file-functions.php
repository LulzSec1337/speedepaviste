
<?php
/**
 * File management functions for Speed Épaviste
 * 
 * @package Speed_Epaviste
 */

if (!defined('ABSPATH')) {
    exit;
}

// File Manager Functions
function speed_epaviste_file_manager_page() {
    echo '<div class="speed-epaviste-admin">
        <div class="dashboard-header">
            <h1><i class="fas fa-folder-open"></i> File Manager Pro</h1>
            <p>Manage all your website files and folders with advanced editing capabilities</p>
        </div>
        <div class="notice notice-info">
            <p><i class="fas fa-info-circle"></i> File Manager functionality coming soon. This feature will allow you to browse, edit, and manage all your website files directly from the admin panel.</p>
        </div>
    </div>';
}

function speed_epaviste_browse_files() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $path = sanitize_text_field($_POST['path']);
    $base_path = ABSPATH;
    
    // Security check - prevent directory traversal
    $real_path = realpath($base_path . $path);
    if (!$real_path || strpos($real_path, $base_path) !== 0) {
        wp_send_json_error('Invalid path');
        return;
    }
    
    if (!is_dir($real_path)) {
        wp_send_json_error('Directory not found');
        return;
    }
    
    $files = array();
    $directories = array();
    
    $items = scandir($real_path);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        
        $item_path = $real_path . '/' . $item;
        $item_info = array(
            'name' => $item,
            'path' => str_replace($base_path, '', $item_path),
            'size' => filesize($item_path),
            'modified' => filemtime($item_path),
            'permissions' => substr(sprintf('%o', fileperms($item_path)), -4)
        );
        
        if (is_dir($item_path)) {
            $directories[] = $item_info;
        } else {
            $item_info['extension'] = pathinfo($item, PATHINFO_EXTENSION);
            $files[] = $item_info;
        }
    }
    
    wp_send_json_success(array(
        'directories' => $directories,
        'files' => $files,
        'current_path' => $path
    ));
}

function speed_epaviste_edit_file() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $file_path = sanitize_text_field($_POST['file_path']);
    $content = $_POST['content']; // Don't sanitize as it might contain code
    
    $full_path = ABSPATH . $file_path;
    
    // Security checks
    $real_path = realpath(dirname($full_path));
    if (!$real_path || strpos($real_path, ABSPATH) !== 0) {
        wp_send_json_error('Invalid file path');
        return;
    }
    
    // Check file extension for safety
    $allowed_extensions = array('php', 'css', 'js', 'html', 'txt', 'json', 'xml');
    $extension = pathinfo($file_path, PATHINFO_EXTENSION);
    
    if (!in_array($extension, $allowed_extensions)) {
        wp_send_json_error('File type not allowed for editing');
        return;
    }
    
    if (file_put_contents($full_path, $content) !== false) {
        wp_send_json_success(array('message' => 'File saved successfully'));
    } else {
        wp_send_json_error('Failed to save file');
    }
}

function speed_epaviste_upload_file() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    if (!isset($_FILES['file'])) {
        wp_send_json_error('No file uploaded');
        return;
    }
    
    $upload_dir = wp_upload_dir();
    $file = $_FILES['file'];
    
    // Basic file validation
    $allowed_types = array('image/jpeg', 'image/png', 'image/gif', 'text/plain', 'application/pdf');
    if (!in_array($file['type'], $allowed_types)) {
        wp_send_json_error('File type not allowed');
        return;
    }
    
    $upload_file = wp_handle_upload($file, array('test_form' => false));
    
    if (isset($upload_file['error'])) {
        wp_send_json_error($upload_file['error']);
    } else {
        wp_send_json_success(array(
            'url' => $upload_file['url'],
            'file' => $upload_file['file'],
            'message' => 'File uploaded successfully'
        ));
    }
}

// Register File Manager AJAX handlers
add_action('wp_ajax_browse_files', 'speed_epaviste_browse_files');
add_action('wp_ajax_edit_file', 'speed_epaviste_edit_file');
add_action('wp_ajax_upload_file', 'speed_epaviste_upload_file');

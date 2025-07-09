
<?php
/**
 * Speed Épaviste functions and definitions
 *
 * @package Speed_Epaviste
 */

// Include all function files with error handling
$function_files = array(
    'inc/theme-setup.php',
    'inc/asset-management.php',
    'inc/contact-form.php',
    'inc/optimization.php',
    'inc/seo-functions.php',
    'inc/performance-functions.php',
    'inc/template-functions.php',
    'inc/template-tags.php',
    'inc/ai-functions.php',
    'inc/email-functions.php',
    'inc/file-functions.php',
    'inc/chat-functions.php',
    'inc/admin-functions.php'
);

foreach ($function_files as $file) {
    $full_path = get_template_directory() . '/' . $file;
    if (file_exists($full_path)) {
        require $full_path;
    }
}


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <!-- Include Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Include Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body <?php body_class('min-h-screen flex flex-col'); ?>>

<header class="bg-white py-4 px-6 flex justify-between items-center">
  <div class="flex items-center">
    <?php if(has_custom_logo()): ?>
      <?php the_custom_logo(); ?>
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Speed Épaviste Logo" class="h-12 object-contain">
    <?php endif; ?>
  </div>
  
  <nav class="hidden md:flex items-center space-x-6 text-gray-800">
    <a href="#" class="hover:text-gray-600">Enlèvement d'épave</a>
    <a href="#" class="hover:text-gray-600">Zone intervention</a>
    <div class="relative group">
      <button class="flex items-center hover:text-gray-600">
        Épaviste <i class="fas fa-chevron-down ml-1 h-4 w-4"></i>
      </button>
      <div class="absolute top-full left-0 mt-2 bg-white shadow-md rounded py-2 w-48 z-10 hidden group-hover:block">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Service 1</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Service 2</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Service 3</a>
      </div>
    </div>
  </nav>
  
  <a href="tel:0624930536" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded-full">
    <span class="mr-2">📞</span> 06 24 93 05 36
  </a>
</header>

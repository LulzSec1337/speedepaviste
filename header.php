
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="robots" content="index, follow">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="canonical" href="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>">
  <?php wp_head(); ?>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body <?php body_class('min-h-screen flex flex-col'); ?>>

<a class="skip-link sr-only focus:not-sr-only" href="#primary">Aller au contenu principal</a>

<header class="bg-white py-4 px-6 flex justify-between items-center shadow-md z-10" role="banner">
  <div class="flex items-center gap-2">
    <?php if(has_custom_logo()): ?>
      <?php the_custom_logo(); ?>
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo Speed Épaviste" class="h-12 object-contain" loading="lazy">
    <?php endif; ?>
    <span class="font-bold text-yellow-500 text-lg hidden sm:block ml-2 tracking-wider">Speed Épaviste</span>
  </div>
  
  <nav class="hidden md:flex items-center space-x-6 text-gray-800 font-medium" aria-label="Navigation principale">
    <a href="<?php echo esc_url(home_url('/')); ?>#services" class="hover:text-yellow-500 transition-colors flex items-center gap-1" aria-label="Enlèvement d'épave"><i class="fas fa-truck-pickup"></i> Enlèvement d'épave</a>
    <a href="<?php echo esc_url(home_url('/')); ?>#zones" class="hover:text-yellow-500 transition-colors flex items-center gap-1" aria-label="Zone intervention"><i class="fas fa-map"></i> Zone intervention</a>
    <a href="<?php echo esc_url(home_url('/')); ?>#agrements" class="hover:text-yellow-500 transition-colors flex items-center gap-1" aria-label="Agréments"><i class="fas fa-certificate"></i> Agréments</a>
    <div class="relative group">
      <button class="flex items-center hover:text-yellow-500 transition-colors gap-1" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-shield"></i>
        Épaviste
        <i class="fas fa-chevron-down ml-1"></i>
      </button>
      <div class="absolute top-full left-0 mt-2 bg-white shadow-md rounded py-2 w-52 z-10 hidden group-hover:block text-gray-800">
        <a href="<?php echo esc_url(home_url('/')); ?>#service1" class="block px-4 py-2 hover:bg-yellow-50 flex items-center gap-1"><i class="fas fa-user"></i> Service 1</a>
        <a href="<?php echo esc_url(home_url('/')); ?>#service2" class="block px-4 py-2 hover:bg-yellow-50 flex items-center gap-1"><i class="fas fa-user"></i> Service 2</a>
        <a href="<?php echo esc_url(home_url('/')); ?>#service3" class="block px-4 py-2 hover:bg-yellow-50 flex items-center gap-1"><i class="fas fa-user"></i> Service 3</a>
      </div>
    </div>
  </nav>
  
  <a href="tel:0624930536" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded-full shadow hover:scale-105 transition-transform inline-flex items-center gap-2 animate-fade-in" aria-label="Appeler le service">
    <i class="fas fa-phone-alt"></i>
    <span class="ml-1 hidden sm:inline">06 24 93 05 36</span>
  </a>
</header>

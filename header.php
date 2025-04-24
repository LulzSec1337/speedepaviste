
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="robots" content="index, follow">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>">
    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body <?php body_class('min-h-screen flex flex-col bg-gray-50'); ?>>
    <?php wp_body_open(); ?>
    
    <a class="skip-link sr-only focus:not-sr-only" href="#primary">
        <?php esc_html_e('Aller au contenu principal', 'speed-epaviste'); ?>
    </a>

    <header class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <?php if(has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" 
                                 alt="<?php bloginfo('name'); ?>" 
                                 class="h-12 w-auto"
                                 loading="lazy">
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" 
                            class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500"
                            aria-controls="mobile-menu"
                            aria-expanded="false">
                        <span class="sr-only">Ouvrir le menu principal</span>
                        <i class="fas fa-bars h-6 w-6"></i>
                    </button>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8" aria-label="Navigation principale">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex space-x-8',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'fallback_cb' => false,
                        'walker' => new Custom_Walker_Nav_Menu()
                    ));
                    ?>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center">
                    <a href="tel:0624930536" 
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-black bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-all duration-200">
                        <i class="fas fa-phone-alt mr-2"></i>
                        <span>06 24 93 05 36</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'mobile-menu-items',
                    'fallback_cb' => false,
                    'walker' => new Custom_Walker_Nav_Menu()
                ));
                ?>
                <a href="tel:0624930536" 
                   class="flex items-center px-4 py-2 text-base font-medium text-black bg-yellow-400 hover:bg-yellow-500 rounded-full">
                    <i class="fas fa-phone-alt mr-2"></i>
                    <span>06 24 93 05 36</span>
                </a>
            </div>
        </div>
    </header>

    <div class="h-16"><!-- Spacer to prevent content from hiding under fixed header --></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    const expanded = this.getAttribute('aria-expanded') === 'true';
                    this.setAttribute('aria-expanded', !expanded);
                    mobileMenu.classList.toggle('hidden');
                    
                    // Toggle icon between bars and times
                    const icon = this.querySelector('i');
                    if (icon) {
                        icon.classList.toggle('fa-bars');
                        icon.classList.toggle('fa-times');
                    }
                });
            }
        });
    </script>

    <?php
    // Custom Walker class for the menu
    if (!class_exists('Custom_Walker_Nav_Menu')):
        class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
            public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
                $indent = ($depth) ? str_repeat("\t", $depth) : '';
                $classes = empty($item->classes) ? array() : (array) $item->classes;
                
                // Add custom classes based on device
                if (wp_is_mobile()) {
                    $classes[] = 'block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50';
                } else {
                    $classes[] = 'inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 hover:text-yellow-500 transition-colors duration-200';
                }
                
                $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
                $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
                
                $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth);
                $id = $id ? ' id="' . esc_attr($id) . '"' : '';
                
                $output .= $indent . '<li' . $id . $class_names .'>';
                
                $atts = array();
                $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
                $atts['target'] = !empty($item->target) ? $item->target : '';
                $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
                $atts['href']   = !empty($item->url) ? $item->url : '';
                
                $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
                
                $attributes = '';
                foreach ($atts as $attr => $value) {
                    if (!empty($value)) {
                        $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                        $attributes .= ' ' . $attr . '="' . $value . '"';
                    }
                }
                
                // Add icon based on menu item title (customize as needed)
                $icon_class = '';
                switch(strtolower($item->title)) {
                    case 'accueil':
                        $icon_class = 'fa-home';
                        break;
                    case 'services':
                        $icon_class = 'fa-wrench';
                        break;
                    case 'contact':
                        $icon_class = 'fa-envelope';
                        break;
                    default:
                        $icon_class = 'fa-circle';
                }
                
                $item_output = $args->before;
                $item_output .= '<a'. $attributes .'>';
                $item_output .= '<i class="fas ' . $icon_class . ' mr-2"></i>';
                $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
                $item_output .= '</a>';
                $item_output .= $args->after;
                
                $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
            }
        }
    endif;
    ?>
</body>
</html>

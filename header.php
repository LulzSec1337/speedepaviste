
<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'speed-epaviste' ); ?></a>

	<header id="masthead" class="site-header bg-white shadow-md sticky top-0 z-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex justify-between items-center py-4">
				<div class="flex items-center">
					<?php if (has_custom_logo()): ?>
						<?php the_custom_logo(); ?>
					<?php else: ?>
						<a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold text-gray-900">
							<?php bloginfo('name'); ?>
						</a>
					<?php endif; ?>
				</div>

				<nav class="hidden md:flex items-center space-x-8">
					<a href="<?php echo home_url('/'); ?>" class="text-gray-700 hover:text-yellow-600 font-medium">Accueil</a>
					<a href="<?php echo home_url('/about'); ?>" class="text-gray-700 hover:text-yellow-600 font-medium">À propos</a>
					<a href="<?php echo home_url('/faq'); ?>" class="text-gray-700 hover:text-yellow-600 font-medium">FAQ</a>
					<a href="<?php echo home_url('/contact'); ?>" class="text-gray-700 hover:text-yellow-600 font-medium">Contact</a>
				</nav>

				<div class="flex items-center space-x-4">
					<a href="tel:0624930536" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded-full transition-colors">
						📞 06 24 93 05 36
					</a>
					
					<!-- Mobile menu button -->
					<button class="md:hidden p-2" onclick="toggleMobileMenu()">
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
				</div>
			</div>

			<!-- Mobile menu -->
			<div id="mobile-menu" class="hidden md:hidden pb-4">
				<div class="space-y-2">
					<a href="<?php echo home_url('/'); ?>" class="block px-4 py-2 text-gray-700 hover:bg-yellow-50 rounded">Accueil</a>
					<a href="<?php echo home_url('/about'); ?>" class="block px-4 py-2 text-gray-700 hover:bg-yellow-50 rounded">À propos</a>
					<a href="<?php echo home_url('/faq'); ?>" class="block px-4 py-2 text-gray-700 hover:bg-yellow-50 rounded">FAQ</a>
					<a href="<?php echo home_url('/contact'); ?>" class="block px-4 py-2 text-gray-700 hover:bg-yellow-50 rounded">Contact</a>
				</div>
			</div>
		</div>
	</header>

	<script>
	function toggleMobileMenu() {
		const menu = document.getElementById('mobile-menu');
		menu.classList.toggle('hidden');
	}
	</script>

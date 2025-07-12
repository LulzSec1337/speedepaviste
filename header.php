
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

	<header id="masthead" class="site-header">
		<div class="header-container">
			<div class="header-inner">
				<div class="header-content">
					<!-- Logo Section -->
					<div class="logo-container">
						<?php if (has_custom_logo()): ?>
							<div class="logo-link">
								<?php the_custom_logo(); ?>
							</div>
						<?php else: ?>
							<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
								<div class="logo-icon">
									<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
										<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
									</svg>
								</div>
								<div class="logo-text">
									<div class="text-xl font-bold"><?php bloginfo('name'); ?></div>
									<div class="logo-subtext">Épaviste Agréé</div>
								</div>
							</a>
						<?php endif; ?>
					</div>

					<!-- Desktop Navigation -->
					<nav class="desktop-nav">
						<a href="<?php echo home_url('/'); ?>" class="nav-link">Accueil</a>
						<a href="<?php echo home_url('/about'); ?>" class="nav-link">À propos</a>
						<a href="<?php echo home_url('/faq'); ?>" class="nav-link">FAQ</a>
						<a href="<?php echo home_url('/contact'); ?>" class="nav-link">Contact</a>
					</nav>

					<!-- CTA Button and Mobile Toggle -->
					<div class="header-actions">
						<a href="tel:0607380194" class="cta-button">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
								<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
							</svg>
							06 07 38 01 94
						</a>
						
						<!-- Mobile menu button -->
						<button class="mobile-toggle" onclick="toggleMobileMenu()" aria-label="Toggle menu">
							<svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
							</svg>
						</button>
					</div>
				</div>

				<!-- Mobile Navigation -->
				<div class="mobile-nav">
					<div id="mobile-menu" class="mobile-menu-items hidden">
						<a href="<?php echo home_url('/'); ?>" class="mobile-nav-link">Accueil</a>
						<a href="<?php echo home_url('/about'); ?>" class="mobile-nav-link">À propos</a>
						<a href="<?php echo home_url('/faq'); ?>" class="mobile-nav-link">FAQ</a>
						<a href="<?php echo home_url('/contact'); ?>" class="mobile-nav-link">Contact</a>
						
						<div class="mobile-cta-container">
							<a href="tel:0607380194" class="mobile-cta-button">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
									<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
								</svg>
								06 07 38 01 94
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<script>
	function toggleMobileMenu() {
		const menu = document.getElementById('mobile-menu');
		menu.classList.toggle('hidden');
	}

	// Close mobile menu when clicking outside
	document.addEventListener('click', function(event) {
		const menu = document.getElementById('mobile-menu');
		const toggle = document.querySelector('.mobile-toggle');
		
		if (!menu.contains(event.target) && !toggle.contains(event.target)) {
			menu.classList.add('hidden');
		}
	});
	</script>


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
			<div class="header-content">
				<!-- Logo Section -->
				<div class="logo-section">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
						<div class="logo-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
								<path d="M3 3h18v18H3V3zm2 2v14h14V5H5zm2 8h10v2H7v-2zm0-4h10v2H7V9z"/>
							</svg>
						</div>
						<div class="logo-text">
							<h1 class="logo-title">Speed <span class="logo-highlight">Épaviste</span></h1>
							<p class="logo-subtitle">Gratuit, <span class="logo-location">Île-de-France et alentours</span></p>
							<p class="logo-tagline">ÉPAVISTE GRATUIT</p>
						</div>
					</a>
				</div>

				<!-- Desktop Navigation -->
				<nav class="desktop-nav" role="navigation">
					<a href="<?php echo home_url('/'); ?>" class="nav-link">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
							<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
						</svg>
						Accueil
					</a>
					<a href="<?php echo home_url('/about'); ?>" class="nav-link">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
							<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
						</svg>
						À propos
					</a>
					<a href="<?php echo home_url('/services'); ?>" class="nav-link">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
							<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
						</svg>
						Services
					</a>
					<a href="<?php echo home_url('/contact'); ?>" class="nav-link">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
							<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
						</svg>
						Contact
					</a>
				</nav>

				<!-- CTA Button and Mobile Toggle -->
				<div class="header-actions">
					<a href="tel:0607380194" class="header-cta-button">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
							<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
						</svg>
						06 07 38 01 94
					</a>
					
					<!-- Mobile menu button -->
					<button class="mobile-toggle" onclick="toggleMobileMenu()" aria-label="Toggle menu">
						<span class="hamburger-line"></span>
						<span class="hamburger-line"></span>
						<span class="hamburger-line"></span>
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

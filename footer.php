<?php
/**
 * The template for displaying the footer
 * Speed Épaviste Pro - Professional footer
 */
?>

	<footer class="site-footer" style="background: linear-gradient(135deg, var(--gray-800), var(--gray-900)); color: white; padding: 4rem 0 2rem;">
		<div class="container">
			<!-- Main Footer Content -->
			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 3rem; margin-bottom: 3rem;">
				
				<!-- Company Info -->
				<div>
					<div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
						<div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--primary-yellow), var(--primary-yellow-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="var(--gray-900)">
								<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
							</svg>
						</div>
						<div>
							<h3 style="color: white; margin: 0; font-size: 1.5rem; font-weight: 700;">Speed Épaviste</h3>
							<p style="color: var(--primary-yellow); margin: 0; font-size: 0.875rem; font-weight: 500;">Épaviste Agréé VHU</p>
						</div>
					</div>
					<p style="color: #D1D5DB; line-height: 1.6; margin-bottom: 1.5rem;">
						Votre spécialiste de l'enlèvement d'épave gratuit en Île-de-France. Service professionnel agréé VHU avec certificat de destruction officiel.
					</p>
					<div style="display: flex; gap: 1rem;">
						<a href="tel:0624930536" style="background: var(--accent-red); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem; transition: var(--transition-normal);">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
								<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
							</svg>
							Appel Gratuit
						</a>
					</div>
				</div>

				<!-- Services -->
				<div>
					<h4 style="color: var(--primary-yellow); font-size: 1.125rem; font-weight: 600; margin-bottom: 1.5rem;">Nos Services</h4>
					<ul style="list-style: none; padding: 0; margin: 0; space-y: 0.75rem;">
						<li style="margin-bottom: 0.75rem;">
							<a href="#" style="color: #D1D5DB; text-decoration: none; display: flex; align-items: center; gap: 0.5rem; transition: var(--transition-fast);">
								<span style="color: var(--primary-yellow);">→</span>
								Enlèvement d'épave gratuit
							</a>
						</li>
						<li style="margin-bottom: 0.75rem;">
							<a href="#" style="color: #D1D5DB; text-decoration: none; display: flex; align-items: center; gap: 0.5rem; transition: var(--transition-fast);">
								<span style="color: var(--primary-yellow);">→</span>
								Certificat de destruction VHU
							</a>
						</li>
						<li style="margin-bottom: 0.75rem;">
							<a href="#" style="color: #D1D5DB; text-decoration: none; display: flex; align-items: center; gap: 0.5rem; transition: var(--transition-fast);">
								<span style="color: var(--primary-yellow);">→</span>
								Démarches administratives
							</a>
						</li>
						<li style="margin-bottom: 0.75rem;">
							<a href="#" style="color: #D1D5DB; text-decoration: none; display: flex; align-items: center; gap: 0.5rem; transition: var(--transition-fast);">
								<span style="color: var(--primary-yellow);">→</span>
								Recyclage écologique
							</a>
						</li>
						<li style="margin-bottom: 0.75rem;">
							<a href="#" style="color: #D1D5DB; text-decoration: none; display: flex; align-items: center; gap: 0.5rem; transition: var(--transition-fast);">
								<span style="color: var(--primary-yellow);">→</span>
								Service d'urgence 7j/7
							</a>
						</li>
					</ul>
				</div>

				<!-- Navigation -->
				<div>
					<h4 style="color: var(--primary-yellow); font-size: 1.125rem; font-weight: 600; margin-bottom: 1.5rem;">Navigation</h4>
					<ul style="list-style: none; padding: 0; margin: 0;">
						<li style="margin-bottom: 0.75rem;">
							<a href="<?php echo home_url('/'); ?>" style="color: #D1D5DB; text-decoration: none; transition: var(--transition-fast);">Accueil</a>
						</li>
						<li style="margin-bottom: 0.75rem;">
							<a href="<?php echo home_url('/about'); ?>" style="color: #D1D5DB; text-decoration: none; transition: var(--transition-fast);">À propos</a>
						</li>
						<li style="margin-bottom: 0.75rem;">
							<a href="<?php echo home_url('/faq'); ?>" style="color: #D1D5DB; text-decoration: none; transition: var(--transition-fast);">FAQ</a>
						</li>
						<li style="margin-bottom: 0.75rem;">
							<a href="<?php echo home_url('/contact'); ?>" style="color: #D1D5DB; text-decoration: none; transition: var(--transition-fast);">Contact</a>
						</li>
					</ul>
				</div>

				<!-- Contact Info -->
				<div>
					<h4 style="color: var(--primary-yellow); font-size: 1.125rem; font-weight: 600; margin-bottom: 1.5rem;">Contact</h4>
					<div style="space-y: 1rem;">
						<div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
							<div style="width: 40px; height: 40px; background: var(--primary-yellow); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="var(--gray-900)">
									<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
								</svg>
							</div>
							<div>
								<p style="color: #D1D5DB; margin: 0; font-weight: 600;">06 24 93 05 36</p>
								<p style="color: #9CA3AF; margin: 0; font-size: 0.875rem;">24h/24 - 7j/7</p>
							</div>
						</div>
						
						<div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
							<div style="width: 40px; height: 40px; background: var(--primary-yellow); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="var(--gray-900)">
									<path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
									<path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
								</svg>
							</div>
							<div>
								<p style="color: #D1D5DB; margin: 0; font-weight: 600;">Île-de-France</p>
								<p style="color: #9CA3AF; margin: 0; font-size: 0.875rem;">75, 77, 78, 91, 92, 93, 94, 95</p>
							</div>
						</div>
						
						<div style="background: rgba(255, 193, 7, 0.1); border: 1px solid var(--primary-yellow); border-radius: 8px; padding: 1rem; margin-top: 1.5rem;">
							<p style="color: var(--primary-yellow); margin: 0; font-weight: 600; font-size: 0.875rem;">🏆 Épaviste Agréé VHU</p>
							<p style="color: #D1D5DB; margin: 0; font-size: 0.875rem;">Certification officielle pour le traitement des véhicules hors d'usage</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Bottom Footer -->
			<div style="border-top: 1px solid #374151; padding-top: 2rem; display: flex; flex-direction: column; gap: 1rem;">
				<div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
					<p style="color: #9CA3AF; margin: 0; font-size: 0.875rem;">
						© <?php echo date('Y'); ?> Speed Épaviste. Tous droits réservés. | Service d'épaviste agréé en Île-de-France
					</p>
					<div style="display: flex; gap: 1.5rem;">
						<a href="#" style="color: #9CA3AF; text-decoration: none; font-size: 0.875rem; transition: var(--transition-fast);">Mentions légales</a>
						<a href="#" style="color: #9CA3AF; text-decoration: none; font-size: 0.875rem; transition: var(--transition-fast);">Confidentialité</a>
						<a href="#" style="color: #9CA3AF; text-decoration: none; font-size: 0.875rem; transition: var(--transition-fast);">CGU</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Back to top button -->
		<button id="back-to-top" style="position: fixed; bottom: 2rem; right: 2rem; width: 50px; height: 50px; background: linear-gradient(135deg, var(--primary-yellow), var(--primary-yellow-dark)); color: var(--gray-900); border: none; border-radius: 50%; cursor: pointer; box-shadow: var(--shadow-lg); opacity: 0; visibility: hidden; transition: all var(--transition-normal); z-index: 1000;" aria-label="Retour en haut">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
				<path d="M7 14l5-5 5 5z"/>
			</svg>
		</button>
	</footer>

	<script>
	// Back to top functionality
	const backToTopButton = document.getElementById('back-to-top');
	
	window.addEventListener('scroll', function() {
		if (window.pageYOffset > 300) {
			backToTopButton.style.opacity = '1';
			backToTopButton.style.visibility = 'visible';
		} else {
			backToTopButton.style.opacity = '0';
			backToTopButton.style.visibility = 'hidden';
		}
	});
	
	backToTopButton.addEventListener('click', function() {
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		});
	});

	// Enhanced link hover effects
	document.querySelectorAll('footer a').forEach(link => {
		link.addEventListener('mouseenter', function() {
			if (this.style.color === 'rgb(209, 213, 219)' || this.style.color === '#D1D5DB') {
				this.style.color = 'var(--primary-yellow)';
			}
		});
		
		link.addEventListener('mouseleave', function() {
			if (!this.closest('.cta-link')) {
				this.style.color = '#D1D5DB';
			}
		});
	});

	// Performance optimization for scroll events
	let ticking = false;
	function updateBackToTop() {
		if (window.pageYOffset > 300) {
			backToTopButton.style.opacity = '1';
			backToTopButton.style.visibility = 'visible';
		} else {
			backToTopButton.style.opacity = '0';
			backToTopButton.style.visibility = 'hidden';
		}
		ticking = false;
	}

	window.addEventListener('scroll', function() {
		if (!ticking) {
			requestAnimationFrame(updateBackToTop);
			ticking = true;
		}
	});
	</script>

<?php wp_footer(); ?>

</body>
</html>
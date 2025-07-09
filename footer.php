
<?php
/**
 * The template for displaying the footer
 */
?>

	<footer id="colophon" class="site-footer bg-gray-800 text-white py-12">
		<div class="max-w-6xl mx-auto px-6">
			<div class="grid md:grid-cols-4 gap-8">
				<div>
					<h3 class="text-xl font-bold mb-4"><?php bloginfo('name'); ?></h3>
					<p class="text-gray-300 mb-4">
						Service professionnel d'enlèvement d'épaves gratuit en Île-de-France.
					</p>
					<div class="flex space-x-4">
						<a href="tel:0624930536" class="bg-yellow-400 hover:bg-yellow-500 text-black px-4 py-2 rounded font-semibold transition-colors">
							📞 Appeler
						</a>
					</div>
				</div>

				<div>
					<h4 class="text-lg font-semibold mb-4">Navigation</h4>
					<ul class="space-y-2">
						<li><a href="<?php echo home_url('/'); ?>" class="text-gray-300 hover:text-white">Accueil</a></li>
						<li><a href="<?php echo home_url('/about'); ?>" class="text-gray-300 hover:text-white">À propos</a></li>
						<li><a href="<?php echo home_url('/faq'); ?>" class="text-gray-300 hover:text-white">FAQ</a></li>
						<li><a href="<?php echo home_url('/contact'); ?>" class="text-gray-300 hover:text-white">Contact</a></li>
					</ul>
				</div>

				<div>
					<h4 class="text-lg font-semibold mb-4">Services</h4>
					<ul class="space-y-2 text-gray-300">
						<li>Enlèvement gratuit</li>
						<li>Certificat de destruction</li>
						<li>Démarches administratives</li>
						<li>Recyclage écologique</li>
					</ul>
				</div>

				<div>
					<h4 class="text-lg font-semibold mb-4">Zone d'intervention</h4>
					<p class="text-gray-300 mb-2">Île-de-France</p>
					<ul class="text-sm text-gray-400 space-y-1">
						<li>Paris (75)</li>
						<li>Seine-et-Marne (77)</li>
						<li>Yvelines (78)</li>
						<li>Essonne (91)</li>
						<li>Hauts-de-Seine (92)</li>
						<li>Seine-Saint-Denis (93)</li>
						<li>Val-de-Marne (94)</li>
						<li>Val-d'Oise (95)</li>
					</ul>
				</div>
			</div>

			<div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Tous droits réservés.</p>
				<p class="mt-2 text-sm">Enlèvement d'épaves gratuit - Service professionnel agréé</p>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>

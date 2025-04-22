
<footer class="bg-gray-900 text-white" role="contentinfo">
  <div class="max-w-6xl mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Company Info -->
      <div>
        <h3 class="text-xl font-bold mb-4">Speed Épaviste</h3>
        <p class="text-gray-300 mb-4">
          Service d'enlèvement d'épaves agréé VHU en Île-de-France et alentours.
        </p>
        <div class="flex space-x-4">
          <a href="#" rel="nofollow" class="text-gray-300 hover:text-yellow-400" aria-label="Facebook"><i class="fab fa-facebook text-xl"></i></a>
          <a href="#" rel="nofollow" class="text-gray-300 hover:text-yellow-400" aria-label="Instagram"><i class="fab fa-instagram text-xl"></i></a>
          <a href="#" rel="nofollow" class="text-gray-300 hover:text-yellow-400" aria-label="Twitter"><i class="fab fa-twitter text-xl"></i></a>
          <a href="#" rel="nofollow" class="text-gray-300 hover:text-yellow-400" aria-label="Linkedin"><i class="fab fa-linkedin text-xl"></i></a>
        </div>
      </div>
      <!-- Services -->
      <div id="services">
        <h3 class="text-xl font-bold mb-4">Nos Services</h3>
        <ul class="space-y-2">
          <li><a href="<?php echo esc_url(home_url('/')); ?>#enlevement" class="text-gray-300 hover:text-yellow-400">Enlèvement d'épave gratuit</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>#destruction" class="text-gray-300 hover:text-yellow-400">Destruction de véhicule</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>#certificat" class="text-gray-300 hover:text-yellow-400">Certificat de destruction</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>#rachat" class="text-gray-300 hover:text-yellow-400">Rachat d'épave</a></li>
        </ul>
      </div>
      <!-- Zones -->
      <div id="zones">
        <h3 class="text-xl font-bold mb-4">Zones d'intervention</h3>
        <ul class="space-y-2">
          <li><a href="#" class="text-gray-300 hover:text-yellow-400">Paris (75)</a></li>
          <li><a href="#" class="text-gray-300 hover:text-yellow-400">Seine-et-Marne (77)</a></li>
          <li><a href="#" class="text-gray-300 hover:text-yellow-400">Yvelines (78)</a></li>
          <li><a href="#" class="text-gray-300 hover:text-yellow-400">Essonne (91)</a></li>
          <li><a href="#" class="text-gray-300 hover:text-yellow-400">Hauts-de-Seine (92)</a></li>
        </ul>
      </div>
      <!-- Contact -->
      <div>
        <h3 class="text-xl font-bold mb-4">Contact</h3>
        <ul class="space-y-3">
          <li class="flex items-start"><i class="fas fa-phone text-yellow-400 mr-2 mt-1"></i><a href="tel:0624930536">06 24 93 05 36</a></li>
          <li class="flex items-start"><i class="fas fa-envelope text-yellow-400 mr-2 mt-1"></i><a href="mailto:contact@speed-epaviste.fr">contact@speed-epaviste.fr</a></li>
          <li class="flex items-start"><i class="fas fa-map-marker-alt text-yellow-400 mr-2 mt-1"></i>Île-de-France et alentours</li>
        </ul>
      </div>
    </div>
    <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400 text-sm">
      <p>&copy; <?php echo date('Y'); ?> Speed Épaviste. Tous droits réservés.</p>
      <div class="mt-2 space-x-4">
        <a href="<?php echo esc_url(home_url('/')); ?>#legal" class="hover:text-yellow-400">Mentions légales</a>
        <a href="<?php echo esc_url(home_url('/')); ?>#privacy" class="hover:text-yellow-400">Politique de confidentialité</a>
        <a href="<?php echo esc_url(home_url('/')); ?>#cgu" class="hover:text-yellow-400">CGU</a>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

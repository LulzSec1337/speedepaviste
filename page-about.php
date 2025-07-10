
<?php
/**
 * Template Name: About Page
 * Speed Épaviste Pro - À propos
 */
get_header();
?>

<main id="primary" class="site-main">
  <div class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          À propos de <strong>Speed Épaviste</strong>
        </h1>
        <p class="hero-subtitle">
          Votre partenaire de confiance pour l'enlèvement d'épaves gratuit en Île-de-France depuis plus de 10 ans
        </p>
      </div>
    </div>
    
    <!-- Wave separator -->
    <div style="position: absolute; bottom: 0; left: 0; right: 0;">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: auto;">
        <path d="M0 120H1440V0C1320 40 1080 80 720 80C360 80 120 40 0 0V120Z" fill="white" />
      </svg>
    </div>
  </div>

  <section class="py-16 px-6 bg-white">
    <div class="max-w-4xl mx-auto">
      <div class="prose prose-lg max-w-none">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Notre histoire</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
          Speed Épaviste est une entreprise spécialisée dans l'enlèvement gratuit de véhicules hors d'usage (VHU) 
          en Île-de-France. Forte de plusieurs années d'expérience dans le secteur automobile et environnemental, 
          notre équipe s'engage à offrir un service rapide, professionnel et respectueux de l'environnement.
        </p>
        
        <p class="text-gray-700 leading-relaxed mb-8">
          Nous comprenons que se débarrasser d'un véhicule en fin de vie peut être une source de stress. 
          C'est pourquoi nous avons développé un service simple, gratuit et sans tracas pour nos clients. 
          Notre mission est de vous décharger de cette responsabilité tout en contribuant à la protection 
          de notre environnement grâce au recyclage responsable.
        </p>
      </div>
    </div>
  </section>

  <section class="py-16 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
        Nos valeurs
      </h2>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="text-center bg-white rounded-lg p-8 shadow-md">
          <div class="bg-yellow-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Rapidité</h3>
          <p class="text-gray-600">
            Intervention sous 24-48h partout en Île-de-France. Notre réactivité est notre force.
          </p>
        </div>
        
        <div class="text-center bg-white rounded-lg p-8 shadow-md">
          <div class="bg-yellow-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Écologie</h3>
          <p class="text-gray-600">
            Recyclage responsable et respect de l'environnement dans tous nos processus.
          </p>
        </div>
        
        <div class="text-center bg-white rounded-lg p-8 shadow-md">
          <div class="bg-yellow-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Professionnalisme</h3>
          <p class="text-gray-600">
            Service de qualité avec prise en charge complète des démarches administratives.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 px-6 bg-white">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
        Notre processus
      </h2>
      
      <div class="space-y-8">
        <div class="flex items-start space-x-6">
          <div class="bg-yellow-400 text-black font-bold w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
            1
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Contact</h3>
            <p class="text-gray-600">
              Contactez-nous par téléphone ou via notre formulaire en ligne. 
              Nous prenons note de vos informations et de l'adresse du véhicule.
            </p>
          </div>
        </div>
        
        <div class="flex items-start space-x-6">
          <div class="bg-yellow-400 text-black font-bold w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
            2
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Planification</h3>
            <p class="text-gray-600">
              Nous planifions l'intervention selon vos disponibilités et envoyons 
              une équipe avec le matériel de remorquage adapté.
            </p>
          </div>
        </div>
        
        <div class="flex items-start space-x-6">
          <div class="bg-yellow-400 text-black font-bold w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
            3
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Enlèvement</h3>
            <p class="text-gray-600">
              Notre équipe procède à l'enlèvement de votre véhicule en toute sécurité, 
              quel que soit son état ou sa position.
            </p>
          </div>
        </div>
        
        <div class="flex items-start space-x-6">
          <div class="bg-yellow-400 text-black font-bold w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
            4
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Administration</h3>
            <p class="text-gray-600">
              Nous nous occupons de toutes les démarches administratives et vous 
              fournissons le certificat de destruction officiel.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 px-6 bg-yellow-50">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">
        Nos engagements
      </h2>
      
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg p-6 shadow-md">
          <div class="text-2xl mb-2">🆓</div>
          <h3 class="font-semibold text-gray-900 mb-2">100% Gratuit</h3>
          <p class="text-sm text-gray-600">Aucun frais caché</p>
        </div>
        
        <div class="bg-white rounded-lg p-6 shadow-md">
          <div class="text-2xl mb-2">⚡</div>
          <h3 class="font-semibold text-gray-900 mb-2">Intervention Rapide</h3>
          <p class="text-sm text-gray-600">24-48h maximum</p>
        </div>
        
        <div class="bg-white rounded-lg p-6 shadow-md">
          <div class="text-2xl mb-2">🌱</div>
          <h3 class="font-semibold text-gray-900 mb-2">Éco-responsable</h3>
          <p class="text-sm text-gray-600">Recyclage respectueux</p>
        </div>
        
        <div class="bg-white rounded-lg p-6 shadow-md">
          <div class="text-2xl mb-2">📋</div>
          <h3 class="font-semibold text-gray-900 mb-2">Administratif</h3>
          <p class="text-sm text-gray-600">Prise en charge complète</p>
        </div>
      </div>
      
      <div class="mt-12">
        <a href="<?php echo home_url('/contact'); ?>" 
           class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-8 py-4 rounded-lg transition-colors inline-block">
          Contactez-nous dès maintenant
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

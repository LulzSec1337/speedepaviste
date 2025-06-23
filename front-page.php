
<?php get_header(); ?>

<main id="primary" class="flex-grow">
  <!-- Hero Section -->
  <section class="relative overflow-hidden hero-section" aria-label="Enlèvement épave gratuit en Île-de-France - Speed Épaviste Agréé VHU" itemscope itemtype="https://schema.org/LocalBusiness">
    <div class="bg-gradient-to-b from-white via-yellow-100 to-yellow-400 pt-20 pb-40 px-6 md:px-12 lg:px-24">
      <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 animate-fade-in-up" itemprop="name">
          Enlèvement d'Épave Gratuit par Épaviste Agréé VHU en Île-de-France
        </h1>
        <div class="animate-fade-in-up delay-100" itemprop="description">
          <p class="text-lg md:text-xl text-gray-700 mb-6 max-w-2xl font-medium">
            <strong>Speed Épaviste</strong>, expert agréé VHU depuis 2015, propose un <span class="text-yellow-700 font-semibold">service d'enlèvement d'épave 100% gratuit</span> et <strong>recyclage écologique</strong> de votre véhicule hors d'usage dans tous les départements d'Île-de-France (75 Paris, 92 Hauts-de-Seine, 93 Seine-Saint-Denis, 94 Val-de-Marne, 78 Yvelines, 91 Essonne, 77 Seine-et-Marne, 95 Val-d'Oise).
          </p>
          <ul class="list-disc pl-5 mb-8 text-gray-700 space-y-2">
            <li><span class="font-semibold">Enlèvement gratuit</span> - aucun frais pour l'enlèvement et le recyclage de votre épave</li>
            <li><span class="font-semibold">Intervention express</span> - en moins de 2h sur Paris et proche banlieue</li>
            <li><span class="font-semibold">Certificat de destruction</span> officiel fourni immédiatement (obligatoire pour la préfecture)</li>
            <li><span class="font-semibold">Recyclage écologique</span> - conforme aux normes UE et françaises (95% du véhicule recyclé)</li>
            <li><span class="font-semibold">Disponibilité étendue</span> - 7j/7 de 6h à minuit, même les jours fériés</li>
            <li><span class="font-semibold">Sans carte grise</span> - enlèvement possible même sans documents</li>
          </ul>
        </div>
        <div class="animate-fade-in-up delay-200">
          <a href="tel:0607380194" 
             class="inline-flex bg-black hover:bg-gray-800 text-white px-8 py-4 rounded-full font-medium transition-all duration-300 hover:scale-105 shadow-lg"
             aria-label="Appeler Speed Épaviste pour enlèvement d'épave gratuit en Île-de-France"
             itemprop="telephone">
            <i class="fas fa-phone mr-2"></i> 06 07 38 01 94
          </a>
        </div>
        
        <!-- Hidden Schema Data -->
        <meta itemprop="url" content="<?php echo esc_url(home_url('/')); ?>">
        <meta itemprop="priceRange" content="Gratuit">
        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress" style="display:none;">
          <meta itemprop="addressRegion" content="Île-de-France">
          <meta itemprop="addressCountry" content="FR">
        </div>
        <div itemprop="areaServed" itemscope itemtype="https://schema.org/Place" style="display:none;">
          <meta itemprop="name" content="Île-de-France et départements limitrophes">
        </div>
        <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" style="display:none;">
          <meta itemprop="ratingValue" content="4.9">
          <meta itemprop="reviewCount" content="2500">
          <meta itemprop="bestRating" content="5">
        </div>
      </div>
    </div>
    <div class="absolute right-10 bottom-10 hidden lg:block animate-float">
      <div class="absolute inset-0 bg-yellow-400 opacity-0 group-hover:opacity-10 rounded-xl transition-opacity duration-500"></div>
    </div>
    <div class="absolute bottom-0 left-0 right-0" aria-hidden="true">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full" width="1440" height="120">
        <path d="M0 120H1440V0C1320 40 1080 80 720 80C360 80 120 40 0 0V120Z" fill="white" />
      </svg>
    </div>
  </section>

  <!-- What is an Epave Section -->
  <section class="py-20 px-6 bg-white" itemscope itemtype="https://schema.org/AboutPage">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="animate-fade-in-left">
          <h2 class="text-2xl md:text-3xl font-bold mb-8" itemprop="headline">
            <i class="fas fa-question-circle text-yellow-500 mr-3"></i> Définition d'une Épave Automobile et Obligations Légales
          </h2>
          <p class="text-gray-700 mb-6 leading-relaxed" itemprop="text">
            Un <strong>véhicule épave</strong>, ou <strong>Véhicule Hors d'Usage (VHU)</strong> selon la réglementation française (article R543-154 du code de l'environnement), désigne tout véhicule inutilisable ou dont les réparations dépasseraient sa valeur. La loi impose un <strong>enlèvement par un épaviste agréé</strong> comme <a href="<?php echo esc_url(home_url('/')); ?>" class="text-yellow-600 hover:underline">Speed Épaviste</a> pour garantir un <strong>recyclage conforme</strong>.
          </p>
          <h3 class="text-xl font-semibold mb-4 text-gray-800 mt-8">
            <i class="fas fa-car-crash text-yellow-500 mr-2"></i> Quand faire enlever son véhicule comme épave ?
          </h3>
          <ul class="list-disc pl-5 mb-6 text-gray-700 space-y-3">
            <li><strong>Accident grave</strong> avec dommages structurels compromettant la sécurité</li>
            <li><strong>Véhicule irréparable</strong> dont les réparations coûteraient plus cher que sa valeur</li>
            <li><strong>Immobilisé depuis +1 an</strong> sans utilisation (épave abandonnée)</li>
            <li><strong>Non conforme</strong> aux normes antipollution actuelles</li>
            <li><strong>Sans assurance</strong> ni contrôle technique valide</li>
            <li><strong>Moteur ou transmission</strong> irréparable</li>
            <li><strong>Rouille importante</strong> avec corrosion structurelle</li>
          </ul>
          <h3 class="text-xl font-semibold mb-4 text-gray-800 mt-8">
            <i class="fas fa-balance-scale text-yellow-500 mr-2"></i> Réglementation VHU en Île-de-France
          </h3>
          <p class="text-gray-700 mb-4 leading-relaxed">
            Tout propriétaire d'un VHU doit obligatoirement le confier à un <strong>centre VHU agréé</strong>. Speed Épaviste (n° agrément: FR-123-456-789) garantit :
          </p>
          <ul class="list-disc pl-5 text-gray-700 space-y-2">
            <li><strong>Dépollution totale</strong> selon les normes environnementales</li>
            <li><strong>Démontage professionnel</strong> des pièces réutilisables</li>
            <li><strong>Recyclage 95%</strong> du poids du véhicule</li>
            <li><strong>Certificat de destruction</strong> officiel immédiat</li>
            <li><strong>Démarches préfecture</strong> effectuées pour vous</li>
            <li><strong>Traçabilité complète</strong> du processus</li>
          </ul>
        </div>
        <div class="flex flex-col gap-8 animate-fade-in-right">
          <div class="relative group">
            <picture>
              <source media="(max-width: 768px)" srcset="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" type="image/webp">
              <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                   alt="Épaviste professionnel en train d'enlever une épave automobile en Île-de-France"
                   class="rounded-xl shadow-xl w-full h-auto transform transition duration-700 group-hover:scale-105 group-hover:shadow-2xl"
                   width="600"
                   height="400"
                   loading="lazy"
                   decoding="async"
                   itemprop="image">
            </picture>
            <div class="absolute inset-0 bg-yellow-400 opacity-0 group-hover:opacity-10 rounded-xl transition-opacity duration-500"></div>
          </div>
          <div class="bg-yellow-50 p-6 rounded-xl border border-yellow-200 shadow-md">
            <h3 class="text-xl font-semibold mb-4 flex items-center">
              <i class="fas fa-info-circle text-yellow-600 mr-3"></i> Pourquoi choisir un épaviste agréé ?
            </h3>
            <p class="text-gray-700 mb-4">
              En Île-de-France, <strong>40% des épaves</strong> sont encore traitées par des filières non agréées. Les risques :
            </p>
            <ul class="list-disc pl-5 text-gray-700 mb-4 space-y-1">
              <li>Pas de certificat de destruction (obligation légale)</li>
              <li>Responsabilité pénale en cas d'abandon</li>
              <li>Pollution environnementale</li>
              <li>Fraudes sur les pièces détachées</li>
            </ul>
            <p class="text-gray-700">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="text-yellow-600 hover:underline">Speed Épaviste</a> vous garantit un <strong>enlèvement d'épave légal et écologique</strong> en Île-de-France.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-20 px-6 bg-gray-50" id="services" itemscope itemtype="https://schema.org/Service">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-16 animate-fade-in">
        <i class="fas fa-tools text-yellow-500 mr-3"></i> Nos Services Complets d'Épaviste Agréé VHU
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <article class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 animate-fade-in-up delay-100" itemscope itemtype="https://schema.org/ServiceFeature">
          <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 w-20 h-20 rounded-full flex items-center justify-center mb-6 mx-auto text-white shadow-md">
            <i class="fas fa-truck-moving text-3xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-center mb-4" itemprop="name">Enlèvement d'Épave Gratuit</h3>
          <ul class="text-gray-700 space-y-3" itemprop="description">
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>Intervention rapide</strong> - 2h max sur Paris et banlieue proche</span></li>
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>Équipements professionnels</strong> - camions plateau, grues, hayons</span></li>
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>7j/7</strong> - de 6h à minuit, jours fériés inclus</span></li>
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>Gratuit</strong> - aucun frais caché, certificat inclus</span></li>
          </ul>
        </article>
        
        <!-- Service 2 -->
        <article class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 animate-fade-in-up delay-200" itemscope itemtype="https://schema.org/ServiceFeature">
          <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 w-20 h-20 rounded-full flex items-center justify-center mb-6 mx-auto text-white shadow-md">
            <i class="fas fa-recycle text-3xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-center mb-4" itemprop="name">Recyclage Écologique</h3>
          <ul class="text-gray-700 space-y-3" itemprop="description">
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>Dépollution totale</strong> - huiles, liquides, batteries, airbags</span></li>
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>95% recyclé</strong> - norme européenne dépassée</span></li>
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>Centres VHU agréés</strong> - installations contrôlées</span></li>
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>Traçabilité</strong> - suivi complet du processus</span></li>
          </ul>
        </article>
        
        <!-- Service 3 -->
        <article class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 animate-fade-in-up delay-300" itemscope itemtype="https://schema.org/ServiceFeature">
          <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 w-20 h-20 rounded-full flex items-center justify-center mb-6 mx-auto text-white shadow-md">
            <i class="fas fa-file-alt text-3xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-center mb-4" itemprop="name">Gestion Administrative</h3>
          <ul class="text-gray-700 space-y-3" itemprop="description">
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>Certificat de destruction</strong> - délivré immédiatement</span></li>
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>Démarches préfecture</strong> - effectuées pour vous</span></li>
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>Sans carte grise</strong> - enlèvement possible</span></li>
            <li class="flex items-start"><div class="bg-yellow-100 rounded-full p-1 mr-3"><i class="fas fa-check text-yellow-600 text-sm"></i></div><span><strong>Assistance</strong> - véhicules sans papiers</span></li>
          </ul>
        </article>
      </div>
      
      <!-- Additional Services Info -->
      <div class="mt-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center animate-fade-in delay-400">
        <div>
          <h3 class="text-2xl font-bold mb-6">
            <i class="fas fa-car text-yellow-500 mr-3"></i> Véhicules Acceptés en Île-de-France
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
              <div class="flex items-center mb-3"><div class="bg-yellow-100 w-12 h-12 rounded-full flex items-center justify-center mr-4"><i class="fas fa-car text-yellow-600"></i></div><h4 class="font-semibold text-lg">Voitures</h4></div>
              <p class="text-gray-700 text-sm">Tous modèles et marques (citadines, berlines, SUV, 4x4, breaks, monospaces, cabriolets)</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
              <div class="flex items-center mb-3"><div class="bg-yellow-100 w-12 h-12 rounded-full flex items-center justify-center mr-4"><i class="fas fa-truck text-yellow-600"></i></div><h4 class="font-semibold text-lg">Utilitaires</h4></div>
              <p class="text-gray-700 text-sm">Fourgons, camionnettes ≤3.5T, pick-ups, véhicules commerciaux légers</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
              <div class="flex items-center mb-3"><div class="bg-yellow-100 w-12 h-12 rounded-full flex items-center justify-center mr-4"><i class="fas fa-motorcycle text-yellow-600"></i></div><h4 class="font-semibold text-lg">Deux-roues</h4></div>
              <p class="text-gray-700 text-sm">Motos, scooters, cyclomoteurs, quads (toutes cylindrées)</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
              <div class="flex items-center mb-3"><div class="bg-yellow-100 w-12 h-12 rounded-full flex items-center justify-center mr-4"><i class="fas fa-car-battery text-yellow-600"></i></div><h4 class="font-semibold text-lg">Véhicules endommagés</h4></div>
              <p class="text-gray-700 text-sm">Accidentés, incendiés, inondés, partiellement démontés</p>
            </div>
          </div>
        </div>
        <div class="relative group">
          <picture>
            <source media="(max-width: 768px)" srcset="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" type="image/webp">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                 alt="Processus de recyclage automobile par épaviste agréé VHU en Île-de-France"
                 class="rounded-xl shadow-xl w-full h-auto transform transition duration-700 group-hover:scale-105 group-hover:shadow-2xl"
                 width="600"
                 height="400"
                 loading="lazy"
                 decoding="async">
          </picture>
          <div class="absolute inset-0 bg-yellow-400 opacity-0 group-hover:opacity-10 rounded-xl transition-opacity duration-500"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recycling Process Section -->
  <section class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-16 animate-fade-in">
        <i class="fas fa-leaf text-green-500 mr-3"></i> Processus de Recyclage Écologique des Épaves
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Step 1 -->
        <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:border-yellow-400 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-left delay-100">
          <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto text-white shadow-md">
            <span class="text-xl font-bold">1</span>
          </div>
          <h3 class="text-xl font-semibold text-center mb-4">Dépollution Complète</h3>
          <p class="text-gray-700 mb-4 text-center">Étape cruciale pour l'environnement</p>
          <ul class="text-gray-700 text-sm space-y-2">
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Vidange de tous les fluides (huile, liquides, carburant)</span></li>
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Récupération des gaz climatiseur</span></li>
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Démontage batteries et airbags</span></li>
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Traitement des liquides dangereux</span></li>
          </ul>
        </div>
        
        <!-- Step 2 -->
        <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:border-yellow-400 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up delay-200">
          <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto text-white shadow-md">
            <span class="text-xl font-bold">2</span>
          </div>
          <h3 class="text-xl font-semibold text-center mb-4">Démontage des Pièces</h3>
          <p class="text-gray-700 mb-4 text-center">Valorisation des composants</p>
          <ul class="text-gray-700 text-sm space-y-2">
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Récupération pièces réutilisables</span></li>
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Tri des matériaux recyclables</span></li>
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Démontage éléments valorisables</span></li>
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Contrôle qualité des pièces</span></li>
          </ul>
        </div>
        
        <!-- Step 3 -->
        <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:border-yellow-400 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-right delay-300">
          <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto text-white shadow-md">
            <span class="text-xl font-bold">3</span>
          </div>
          <h3 class="text-xl font-semibold text-center mb-4">Broyage et Valorisation</h3>
          <p class="text-gray-700 mb-4 text-center">Transformation finale</p>
          <ul class="text-gray-700 text-sm space-y-2">
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Broyage de la carcasse</span></li>
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Tri magnétique des métaux</span></li>
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Séparation métaux non-ferreux</span></li>
            <li class="flex items-start"><i class="fas fa-check text-yellow-500 mr-2 mt-1"></i><span>Valorisation énergétique</span></li>
          </ul>
        </div>
      </div>
      
      <!-- Environmental Impact -->
      <div class="mt-16 bg-gradient-to-r from-yellow-50 to-green-50 p-8 rounded-xl border border-yellow-200 shadow-md animate-fade-in delay-400">
        <h3 class="text-2xl font-bold mb-6 text-center">
          <i class="fas fa-chart-line text-green-500 mr-2"></i> Impact Environnemental
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-white p-4 rounded-lg shadow-sm text-center">
            <div class="text-4xl font-bold text-green-600 mb-2">95%</div>
            <p class="text-gray-700">du véhicule recyclé</p>
          </div>
          <div class="bg-white p-4 rounded-lg shadow-sm text-center">
            <div class="text-4xl font-bold text-green-600 mb-2">-80%</div>
            <p class="text-gray-700">émissions CO2 réduites</p>
          </div>
          <div class="bg-white p-4 rounded-lg shadow-sm text-center">
            <div class="text-4xl font-bold text-green-600 mb-2">100%</div>
            <p class="text-gray-700">fluides traités</p>
          </div>
        </div>
        <p class="text-gray-700 mt-6 text-center">
          Avec <a href="<?php echo esc_url(home_url('/')); ?>" class="text-yellow-600 hover:underline">Speed Épaviste</a>, votre <strong>enlèvement d'épave en Île-de-France</strong> participe activement à l'économie circulaire et à la protection de l'environnement.
        </p>
      </div>
    </div>
  </section>

  <!-- FAQ Section for SEO -->
  <section class="py-20 px-6 bg-gray-50" id="faq" itemscope itemtype="https://schema.org/FAQPage">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-16 animate-fade-in">
        <i class="fas fa-question-circle text-yellow-500 mr-3"></i> Questions Fréquentes
      </h2>
      <div class="space-y-6">
        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <h3 itemprop="name" class="font-semibold p-6 border-b text-lg">Comment faire l'enlèvement d'épave gratuitement ?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-6">
            <p itemprop="text" class="text-gray-700">L'enlèvement d'épave est gratuit avec notre service. Contactez-nous au 06 07 38 01 94, nous nous occupons de toutes les démarches administratives et du remorquage. Notre équipe intervient dans toute l'Île-de-France.</p>
          </div>
        </article>
        
        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <h3 itemprop="name" class="font-semibold p-6 border-b text-lg">Quelles zones sont couvertes par Speed Épaviste ?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-6">
            <p itemprop="text" class="text-gray-700">Nous intervenons dans toute l'Île-de-France : Paris (75), Hauts-de-Seine (92), Seine-Saint-Denis (93), Val-de-Marne (94), Seine-et-Marne (77), Yvelines (78), Essonne (91), Val-d'Oise (95) et départements limitrophes.</p>
          </div>
        </article>
        
        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <h3 itemprop="name" class="font-semibold p-6 border-b text-lg">Quels documents sont nécessaires pour l'enlèvement ?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-6">
            <p itemprop="text" class="text-gray-700">Idealement la carte grise du véhicule et une pièce d'identité. Cependant, nous pouvons intervenir même sans carte grise dans certains cas. Nous nous occupons de toutes les formalités administratives.</p>
          </div>
        </article>
        
        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <h3 itemprop="name" class="font-semibold p-6 border-b text-lg">Combien de temps pour obtenir le certificat de destruction ?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-6">
            <p itemprop="text" class="text-gray-700">Le certificat de destruction vous est remis immédiatement lors de l'enlèvement. C'est un document obligatoire que vous devez présenter à la préfecture pour vous dégager de toute responsabilité.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Final CTA Section -->
  <section class="bg-gradient-to-b from-yellow-300 to-yellow-400 py-20 px-6 text-center" id="contact" itemscope itemtype="https://schema.org/ContactPage">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 animate-fade-in" itemprop="headline">
        <i class="fas fa-calendar-check text-gray-900 mr-3"></i> Demandez Votre Enlèvement d'Épave Gratuit
      </h2>
      <p class="text-xl font-semibold text-gray-900 mb-8 animate-fade-in delay-100" itemprop="description">
        Épaviste Agréé VHU en Île-de-France - Intervention Rapide 7j/7
      </p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto animate-fade-in delay-200">
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-phone text-yellow-600 text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Par téléphone</h3>
          <a href="tel:0607380194" 
             class="text-xl font-bold text-gray-900 hover:text-yellow-700 transition-colors"
             itemprop="telephone">
            06 07 38 01 94
          </a>
          <p class="text-sm text-gray-700 mt-2">7j/7 de 6h à minuit</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-envelope text-yellow-600 text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Par email</h3>
          <a href="mailto:contact@speedepaviste.fr" 
             class="text-lg font-bold text-gray-900 hover:text-yellow-700 transition-colors"
             itemprop="email">
            contact@speedepaviste.fr
          </a>
          <p class="text-sm text-gray-700 mt-2">Réponse sous 1h</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-map-marked-alt text-yellow-600 text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Zone d'intervention</h3>
          <p class="text-lg font-bold text-gray-900">Île-de-France</p>
          <p class="text-sm text-gray-700">Paris + 7 départements</p>
        </div>
      </div>
      <p class="text-xs text-gray-700 mt-12 animate-fade-in delay-300">
        <i class="fas fa-certificate mr-1"></i> Agrément VHU n° FR-123-456-789 - Certifié Ministère Transition Écologique
      </p>
    </div>
  </section>

  <!-- Google Maps Section -->
  <section class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-12 animate-fade-in">
        <i class="fas fa-map-marker-alt text-yellow-500 mr-3"></i> Notre Zone d'Intervention
      </h2>
      <div class="relative max-w-screen-2xl mb-12">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.947226469!2d2.347035!3d48.858854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sen!2sfr!4v1620000000000!5m2!1sen!2sfr"
          width="100%" 
          style="max-width:100%; min-width:320px;" 
          height="400"
          class="w-full h-auto rounded-xl shadow-lg"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Carte Google Maps de Paris - Zone d'intervention Speed Épaviste">
        </iframe>
      </div>
    </div>
  </section>
</main>

<!-- Back to Top Button -->
<button 
  id="back-to-top"
  aria-label="Retour en haut de page"
  class="fixed bottom-6 right-6 w-12 h-12 bg-yellow-500 text-gray-900 rounded-full shadow-lg flex items-center justify-center transition-all opacity-0 invisible hover:bg-yellow-400 hover:animate-bounce z-50"
>
  <i class="fas fa-arrow-up"></i>
</button>

<?php get_footer(); ?>

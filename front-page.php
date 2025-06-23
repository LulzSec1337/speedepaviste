
<?php get_header(); ?>

<!-- SEO Meta Tags (for SEO, can also be placed in header.php) -->
<meta name="description" content="Speed Épaviste - Enlèvement d'épave gratuit 7j/7 en Île-de-France. Épaviste agréé VHU pour recyclage écologique de votre voiture, camionnette ou moto. Certificat de destruction immédiat.">
<meta name="keywords" content="enlèvement épave gratuit, épaviste Paris, recyclage voiture, enlèvement voiture hors d'usage, destruction auto, certificat de destruction, épaviste agréé Île-de-France, vhu gratuit, enlèvement épave 92, 93, 94, 75, 78, 77, 91, 95">
<meta name="author" content="Speed Épaviste">
<meta name="robots" content="index, follow">
<meta property="og:title" content="Enlèvement Épave Gratuit Île-de-France | Speed Épaviste Agréé">
<meta property="og:description" content="Service professionnel d'enlèvement d'épaves gratuit 7j/7 dans toute l'Île-de-France. Épaviste agréé VHU avec certificat de destruction immédiat.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://speedepaviste.fr">
<meta property="og:image" content="https://speedepaviste.fr/wp-content/uploads/logo-speed-epaviste.jpg">
<link rel="canonical" href="https://speedepaviste.fr" />

<!-- Inline Critical Animations CSS -->
<style>
  .animate-fade-in { animation: fadeIn 1s ease-out forwards; opacity: 0;}
  .animate-fade-in-up { animation: fadeInUp 1s ease-out forwards; opacity: 0;}
  .animate-fade-in-left { animation: fadeInLeft 1s ease-out forwards; opacity: 0;}
  .animate-fade-in-right { animation: fadeInRight 1s ease-out forwards; opacity: 0;}
  .animate-float { animation: float 8s ease-in-out infinite;}
  .delay-100 { animation-delay: 0.1s;}
  .delay-200 { animation-delay: 0.2s;}
  .delay-300 { animation-delay: 0.3s;}
  .delay-400 { animation-delay: 0.4s;}
  @keyframes fadeIn { to { opacity: 1; } }
  @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } from { opacity: 0; transform: translateY(30px); } }
  @keyframes fadeInLeft { to { opacity: 1; transform: translateX(0); } from { opacity: 0; transform: translateX(-30px); } }
  @keyframes fadeInRight { to { opacity: 1; transform: translateX(0); } from { opacity: 0; transform: translateX(30px); } }
  @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
  /* CLS: Reserve space for hero section (adjust min-height as needed) */
  .hero-section { min-height: 520px; }
</style>

<main id="primary" class="flex-grow">
  <!-- Hero Section -->
  <section class="relative overflow-hidden hero-section" aria-label="Enlèvement épave gratuit en Île-de-France - Speed Épaviste Agréé VHU" itemscope itemtype="https://schema.org/LocalBusiness">
    <div class="bg-gradient-to-b from-white via-yellow-100 to-yellow-400 pt-20 pb-40 px-6 md:px-12 lg:px-24">
      <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 animate-fade-in-up" itemprop="name">
          Services Épaviste Agréé VHU en France - Enlèvement d'Épave Gratuit
        </h1>
        <div class="animate-fade-in-up delay-100" itemprop="description">
          <p class="text-lg md:text-xl text-gray-700 mb-6 max-w-2xl font-medium">
            <strong>Speed Épaviste</strong>, expert agréé VHU depuis 2015, propose une <span class="text-yellow-700 font-semibold">couverture nationale en France pour l'enlèvement, le rachat et la destruction écologique</span> de vos véhicules hors d'usage dans tous les départements d'Île-de-France.
          </p>
          <ul class="list-disc pl-5 mb-8 text-gray-700 space-y-2">
            <li><span class="font-semibold">Service Gratuit</span> - enlèvement d'épave gratuit par épaviste agréé en France</li>
            <li><span class="font-semibold">Intervention 7j/7</span> - dans toute la France avec dépanneurs professionnels certifiés</li>
            <li><span class="font-semibold">Meilleur Prix</span> - rachat de véhicule accidenté et épave au meilleur prix</li>
            <li><span class="font-semibold">Éco-responsable</span> - centre VHU agréé pour destruction écologique</li>
            <li><span class="font-semibold">Démarches administratives incluses</span> - certificat de destruction officiel</li>
            <li><span class="font-semibold">Compatible prime à la conversion</span> - estimation gratuite en ligne</li>
          </ul>
        </div>
        <div class="animate-fade-in-up delay-200">
          <a href="tel:0607380194" class="inline-flex bg-black hover:bg-gray-800 text-white px-8 py-4 rounded-full font-medium transition-all duration-300 hover:scale-105 shadow-lg" aria-label="Appeler Speed Épaviste pour enlèvement d'épave gratuit en France">
            <i class="fas fa-phone mr-2"></i> 06 07 38 01 94
          </a>
        </div>
        
        <!-- Schema Data -->
        <meta itemprop="url" content="<?php echo esc_url(home_url('/')); ?>">
        <meta itemprop="priceRange" content="Gratuit">
        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress" style="display:none;">
          <meta itemprop="addressRegion" content="France">
          <meta itemprop="addressCountry" content="FR">
        </div>
      </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0" aria-hidden="true">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full"><path d="M0 120H1440V0C1320 40 1080 80 720 80C360 80 120 40 0 0V120Z" fill="white" /></svg>
    </div>
  </section>

  <!-- Services Overview Section -->
  <section class="py-20 px-6 bg-white" itemscope itemtype="https://schema.org/Service">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-16 animate-fade-in">
        <i class="fas fa-tools text-yellow-500 mr-3"></i> Services Épaviste Agréé VHU en France
      </h2>
      <p class="text-xl text-gray-700 text-center mb-12 animate-fade-in delay-100">
        Une couverture nationale en France pour l'enlèvement, le rachat et la destruction écologique de vos véhicules hors d'usage.
      </p>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Service Gratuit -->
        <article class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 animate-fade-in-up delay-100" itemscope itemtype="https://schema.org/ServiceFeature">
          <div class="relative mb-6">
            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=60" 
                 alt="Service gratuit d'enlèvement d'épave par épaviste agréé en France"
                 class="w-full h-40 object-cover rounded-lg shadow-md"
                 width="400"
                 height="160"
                 loading="lazy"
                 decoding="async">
            <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
              GRATUIT
            </div>
          </div>
          <h3 class="text-xl font-semibold text-center mb-4" itemprop="name">Service Gratuit</h3>
          <p class="text-gray-700 mb-4 text-center" itemprop="description">
            Service d'enlèvement d'épave gratuit par épaviste agréé en France
          </p>
          <ul class="text-gray-700 space-y-2 text-sm">
            <li class="flex items-start"><i class="fas fa-check text-green-500 mr-2 mt-1"></i><span>Intervention 7j/7 dans toute la France</span></li>
            <li class="flex items-start"><i class="fas fa-check text-green-500 mr-2 mt-1"></i><span>Dépanneurs professionnels certifiés</span></li>
            <li class="flex items-start"><i class="fas fa-check text-green-500 mr-2 mt-1"></i><span>Démarches administratives incluses</span></li>
          </ul>
        </article>

        <!-- Meilleur Prix -->
        <article class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 animate-fade-in-up delay-200" itemscope itemtype="https://schema.org/ServiceFeature">
          <div class="relative mb-6">
            <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=60" 
                 alt="Rachat de véhicule accidenté et épave au meilleur prix en France"
                 class="w-full h-40 object-cover rounded-lg shadow-md"
                 width="400"
                 height="160"
                 loading="lazy"
                 decoding="async">
            <div class="absolute top-4 left-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
              MEILLEUR PRIX
            </div>
          </div>
          <h3 class="text-xl font-semibold text-center mb-4" itemprop="name">Meilleur Prix</h3>
          <p class="text-gray-700 mb-4 text-center" itemprop="description">
            Rachat de véhicule accidenté et épave au meilleur prix en France
          </p>
          <ul class="text-gray-700 space-y-2 text-sm">
            <li class="flex items-start"><i class="fas fa-check text-blue-500 mr-2 mt-1"></i><span>Estimation gratuite en ligne</span></li>
            <li class="flex items-start"><i class="fas fa-check text-blue-500 mr-2 mt-1"></i><span>Offre de rachat sans engagement</span></li>
            <li class="flex items-start"><i class="fas fa-check text-blue-500 mr-2 mt-1"></i><span>Compatible prime à la conversion</span></li>
          </ul>
        </article>

        <!-- Éco-responsable -->
        <article class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 animate-fade-in-up delay-300" itemscope itemtype="https://schema.org/ServiceFeature">
          <div class="relative mb-6">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=60" 
                 alt="Centre VHU agréé pour destruction écologique des épaves en France"
                 class="w-full h-40 object-cover rounded-lg shadow-md"
                 width="400"
                 height="160"
                 loading="lazy"
                 decoding="async">
            <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
              ÉCO-RESPONSABLE
            </div>
          </div>
          <h3 class="text-xl font-semibold text-center mb-4" itemprop="name">Éco-responsable</h3>
          <p class="text-gray-700 mb-4 text-center" itemprop="description">
            Centre VHU agréé pour destruction écologique des épaves en France
          </p>
          <ul class="text-gray-700 space-y-2 text-sm">
            <li class="flex items-start"><i class="fas fa-check text-green-500 mr-2 mt-1"></i><span>Certificat de destruction officiel</span></li>
            <li class="flex items-start"><i class="fas fa-check text-green-500 mr-2 mt-1"></i><span>Annulation de carte grise incluse</span></li>
            <li class="flex items-start"><i class="fas fa-check text-green-500 mr-2 mt-1"></i><span>Recyclage jusqu'à 95% du véhicule</span></li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- Detailed Services Section -->
  <section class="py-20 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Enlèvement d'Épave -->
        <div class="animate-fade-in-left">
          <div class="bg-white p-8 rounded-xl shadow-lg">
            <div class="flex items-center mb-6">
              <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-truck text-yellow-600 text-2xl"></i>
              </div>
              <h3 class="text-2xl font-bold">Enlèvement d'Épave</h3>
            </div>
            <p class="text-gray-700 mb-6 leading-relaxed">
              Notre service d'enlèvement gratuit intervient rapidement pour tout type de véhicule hors d'usage, quelle que soit sa localisation : parking souterrain, terrain privé, voie publique, champ ou allée étroite. Notre équipement spécialisé permet d'accéder à tous les endroits.
            </p>
            <ul class="text-gray-700 space-y-3">
              <li class="flex items-start"><i class="fas fa-clock text-yellow-500 mr-3 mt-1"></i><span><strong>Intervention 7j/7</strong> dans toute la France</span></li>
              <li class="flex items-start"><i class="fas fa-certificate text-yellow-500 mr-3 mt-1"></i><span><strong>Dépanneurs professionnels certifiés</strong></span></li>
              <li class="flex items-start"><i class="fas fa-file-alt text-yellow-500 mr-3 mt-1"></i><span><strong>Démarches administratives incluses</strong></span></li>
            </ul>
          </div>
        </div>

        <!-- Rachat d'Épave -->
        <div class="animate-fade-in-right">
          <div class="bg-white p-8 rounded-xl shadow-lg">
            <div class="flex items-center mb-6">
              <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-euro-sign text-blue-600 text-2xl"></i>
              </div>
              <h3 class="text-2xl font-bold">Rachat d'Épave</h3>
            </div>
            <p class="text-gray-700 mb-6 leading-relaxed">
              Obtenez la meilleure valorisation pour votre véhicule hors d'usage. Nous rachetons tous types d'épaves et véhicules accidentés à des prix compétitifs, avec une estimation transparente et un paiement immédiat.
            </p>
            <ul class="text-gray-700 space-y-3">
              <li class="flex items-start"><i class="fas fa-calculator text-blue-500 mr-3 mt-1"></i><span><strong>Estimation gratuite en ligne</strong></span></li>
              <li class="flex items-start"><i class="fas fa-handshake text-blue-500 mr-3 mt-1"></i><span><strong>Offre de rachat sans engagement</strong></span></li>
              <li class="flex items-start"><i class="fas fa-exchange-alt text-blue-500 mr-3 mt-1"></i><span><strong>Compatible prime à la conversion</strong></span></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Destruction Écologique -->
      <div class="mt-12 animate-fade-in delay-400">
        <div class="bg-white p-8 rounded-xl shadow-lg">
          <div class="flex items-center mb-6 justify-center">
            <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mr-4">
              <i class="fas fa-leaf text-green-600 text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold">Destruction Écologique</h3>
          </div>
          <p class="text-gray-700 mb-6 leading-relaxed text-center max-w-4xl mx-auto">
            Faites détruire votre véhicule dans le respect des normes environnementales par notre réseau de centres VHU agréés par les préfectures. Nous garantissons une dépollution complète et le recyclage maximal des composants.
          </p>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="text-center">
              <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-certificate text-green-600"></i>
              </div>
              <h4 class="font-semibold mb-2">Certificat de destruction officiel</h4>
              <p class="text-gray-600 text-sm">Document légal obligatoire</p>
            </div>
            <div class="text-center">
              <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-id-card text-green-600"></i>
              </div>
              <h4 class="font-semibold mb-2">Annulation de carte grise incluse</h4>
              <p class="text-gray-600 text-sm">Démarches préfecture automatiques</p>
            </div>
            <div class="text-center">
              <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-recycle text-green-600"></i>
              </div>
              <h4 class="font-semibold mb-2">Recyclage jusqu'à 95% du véhicule</h4>
              <p class="text-gray-600 text-sm">Respect des normes européennes</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-16 animate-fade-in">
        <i class="fas fa-cogs text-yellow-500 mr-3"></i> Comment fonctionne le service épaviste chez Speed Épaviste ?
      </h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Step 1 -->
        <div class="text-center bg-gray-50 p-6 rounded-xl hover:shadow-lg transition-shadow duration-300 animate-fade-in-up delay-100">
          <div class="bg-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto text-white shadow-md">
            <span class="text-2xl font-bold">1</span>
          </div>
          <h3 class="text-xl font-semibold mb-4">Prise de contact</h3>
          <p class="text-gray-700 text-sm">
            Contactez-nous par téléphone ou en ligne pour prendre des informations et que l'on puisse entamer le processus pour votre véhicule.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="text-center bg-gray-50 p-6 rounded-xl hover:shadow-lg transition-shadow duration-300 animate-fade-in-up delay-200">
          <div class="bg-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto text-white shadow-md">
            <span class="text-2xl font-bold">2</span>
          </div>
          <h3 class="text-xl font-semibold mb-4">Planification de l'intervention 100% gratuite</h3>
          <p class="text-gray-700 text-sm">
            Planifiez l'enlèvement de votre épave à l'heure qui vous convient, notre service est ouvert 7j / 7.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="text-center bg-gray-50 p-6 rounded-xl hover:shadow-lg transition-shadow duration-300 animate-fade-in-up delay-300">
          <div class="bg-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto text-white shadow-md">
            <span class="text-2xl font-bold">3</span>
          </div>
          <h3 class="text-xl font-semibold mb-4">Enlèvement épave et démarches administratives</h3>
          <p class="text-gray-700 text-sm">
            Nous venons enlever votre épave rapidement et efficacement, sans frais pour vous. Nous vous remettons immédiatement le certificat de destruction.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="text-center bg-gray-50 p-6 rounded-xl hover:shadow-lg transition-shadow duration-300 animate-fade-in-up delay-400">
          <div class="bg-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto text-white shadow-md">
            <span class="text-2xl font-bold">4</span>
          </div>
          <h3 class="text-xl font-semibold mb-4">Rachat de l'épave</h3>
          <p class="text-gray-700 text-sm">
            Recevez une compensation financière pour votre épave selon son état et sa valeur.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Coverage Map Section -->
  <section class="py-20 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 animate-fade-in">
        <i class="fas fa-map-marker-alt text-yellow-500 mr-3"></i> Besoin d'un épaviste près de chez vous ?
      </h2>
      <p class="text-xl text-gray-700 text-center mb-12 animate-fade-in delay-100">
        Notre réseau d'épavistes agréés couvre l'ensemble du territoire français pour un service de proximité rapide et efficace
      </p>
      
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="animate-fade-in-left">
          <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=75" 
               alt="Carte de France montrant la couverture nationale des épavistes agréés"
               class="rounded-xl shadow-xl w-full h-auto"
               width="600"
               height="400"
               loading="lazy"
               decoding="async">
        </div>
        <div class="animate-fade-in-right">
          <h3 class="text-2xl font-bold mb-6">Pourquoi choisir notre service d'épaviste de proximité</h3>
          <ul class="space-y-4">
            <li class="flex items-start">
              <div class="bg-yellow-100 rounded-full p-2 mr-4 mt-1">
                <i class="fas fa-map text-yellow-600"></i>
              </div>
              <div>
                <h4 class="font-semibold">Couverture nationale</h4>
                <p class="text-gray-700 text-sm">Intervention dans toute la France métropolitaine</p>
              </div>
            </li>
            <li class="flex items-start">
              <div class="bg-yellow-100 rounded-full p-2 mr-4 mt-1">
                <i class="fas fa-clock text-yellow-600"></i>
              </div>
              <div>
                <h4 class="font-semibold">Rapidité d'intervention</h4>
                <p class="text-gray-700 text-sm">Service sous 24h dans la plupart des cas</p>
              </div>
            </li>
            <li class="flex items-start">
              <div class="bg-yellow-100 rounded-full p-2 mr-4 mt-1">
                <i class="fas fa-shield-alt text-yellow-600"></i>
              </div>
              <div>
                <h4 class="font-semibold">Épavistes agréés</h4>
                <p class="text-gray-700 text-sm">Tous nos partenaires sont certifiés VHU</p>
              </div>
            </li>
            <li class="flex items-start">
              <div class="bg-yellow-100 rounded-full p-2 mr-4 mt-1">
                <i class="fas fa-euro-sign text-yellow-600"></i>
              </div>
              <div>
                <h4 class="font-semibold">Service gratuit</h4>
                <p class="text-gray-700 text-sm">Aucun frais caché, tout inclus</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section Enhanced -->
  <section class="py-20 px-6 bg-white" id="faq" itemscope itemtype="https://schema.org/FAQPage">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-16 animate-fade-in">
        <i class="fas fa-question-circle text-yellow-500 mr-3"></i> Épaviste & Centre VHU - Les Questions Fréquentes
      </h2>
      <p class="text-lg text-gray-700 text-center mb-12">
        Retrouvez les réponses à vos questions les plus fréquentes sur nos services d'épaviste.
      </p>
      
      <div class="space-y-6">
        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <h3 itemprop="name" class="font-semibold p-6 border-b text-lg cursor-pointer" onclick="toggleFAQ(this)">
            <i class="fas fa-clock text-yellow-500 mr-2"></i>
            Quel est le délai pour l'enlèvement d'une épave à mon domicile ?
            <i class="fas fa-chevron-down float-right transition-transform duration-300"></i>
          </h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-6 hidden">
            <p itemprop="text" class="text-gray-700">Nous intervenons généralement dans les 24 à 48 heures suivant votre demande. Pour les interventions urgentes en Île-de-France, nous pouvons intervenir en moins de 2 heures.</p>
          </div>
        </article>
        
        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <h3 itemprop="name" class="font-semibold p-6 border-b text-lg cursor-pointer" onclick="toggleFAQ(this)">
            <i class="fas fa-file-alt text-yellow-500 mr-2"></i>
            Quels documents sont nécessaires pour l'enlèvement d'une épave ?
            <i class="fas fa-chevron-down float-right transition-transform duration-300"></i>
          </h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-6 hidden">
            <p itemprop="text" class="text-gray-700">Idéalement, nous demandons la carte grise du véhicule et une pièce d'identité. Cependant, nous pouvons intervenir même sans carte grise dans certaines situations (succession, véhicule abandonné).</p>
          </div>
        </article>

        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <h3 itemprop="name" class="font-semibold p-6 border-b text-lg cursor-pointer" onclick="toggleFAQ(this)">
            <i class="fas fa-euro-sign text-yellow-500 mr-2"></i>
            Combien puis-je obtenir pour le rachat de mon épave ?
            <i class="fas fa-chevron-down float-right transition-transform duration-300"></i>
          </h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-6 hidden">
            <p itemprop="text" class="text-gray-700">Le prix de rachat dépend de plusieurs facteurs : marque, modèle, année, état du véhicule, cours des métaux. Nous proposons une estimation gratuite en ligne et une offre sans engagement.</p>
          </div>
        </article>

        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <h3 itemprop="name" class="font-semibold p-6 border-b text-lg cursor-pointer" onclick="toggleFAQ(this)">
            <i class="fas fa-leaf text-yellow-500 mr-2"></i>
            Proposez-vous des services de destruction d'épave écologique ?
            <i class="fas fa-chevron-down float-right transition-transform duration-300"></i>
          </h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-6 hidden">
            <p itemprop="text" class="text-gray-700">Oui, nous sommes un centre VHU agréé. Nous garantissons une dépollution complète, le recyclage de 95% du véhicule et la remise du certificat de destruction officiel.</p>
          </div>
        </article>

        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <h3 itemprop="name" class="font-semibold p-6 border-b text-lg cursor-pointer" onclick="toggleFAQ(this)">
            <i class="fas fa-gift text-yellow-500 mr-2"></i>
            Est-ce que l'enlèvement d'épave est vraiment gratuit ?
            <i class="fas fa-chevron-down float-right transition-transform duration-300"></i>
          </h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-6 hidden">
            <p itemprop="text" class="text-gray-700">Oui, l'enlèvement est 100% gratuit. Aucun frais caché, le certificat de destruction et les démarches administratives sont inclus. Selon l'état du véhicule, vous pourriez même recevoir une compensation.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Additional Services Section -->
  <section class="py-20 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-16 animate-fade-in">
        <i class="fas fa-wrench text-yellow-500 mr-3"></i> Nos services automobiles
      </h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-tools text-yellow-600 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-center mb-3">Dépannage et Remorquage auto</h3>
          <p class="text-gray-700 text-sm text-center">Service de dépannage 24h/24 pour tous véhicules</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-bolt text-yellow-600 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-center mb-3">Dépannage & Rechargement électrique</h3>
          <p class="text-gray-700 text-sm text-center">Assistance spécialisée véhicules électriques</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-search text-yellow-600 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-center mb-3">Recherche de bornes de recharge électrique</h3>
          <p class="text-gray-700 text-sm text-center">Localisation des points de charge</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-gavel text-yellow-600 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-center mb-3">Enchères automobiles</h3>
          <p class="text-gray-700 text-sm text-center">Vente aux enchères de véhicules</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-handshake text-yellow-600 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-center mb-3">Rachat Véhicule Occasion</h3>
          <p class="text-gray-700 text-sm text-center">Rachat de véhicules d'occasion</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Final CTA Section -->
  <section class="bg-gradient-to-b from-yellow-300 to-yellow-400 py-20 px-6 text-center" id="contact">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 animate-fade-in">
        <i class="fas fa-calendar-check text-gray-900 mr-3"></i> Épaviste : enlèvement et reprise de voiture à la casse
      </h2>
      <p class="text-xl font-semibold text-gray-900 mb-8 animate-fade-in delay-100">
        Enlèvement et reprise de voiture à la casse par un épaviste agréé
      </p>
      <p class="text-lg text-gray-800 mb-8 max-w-3xl mx-auto">
        Nous sommes votre épaviste professionnel pour l'enlèvement d'épave et la reprise de voiture à la casse dans toute la région. Intervention rapide sous 24 h, récupération sur place et prise en charge de toutes les démarches administratives.
      </p>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto animate-fade-in delay-200 mb-12">
        <div class="bg-white p-6 rounded-xl shadow-lg">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-phone text-yellow-600 text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Enlèvement gratuit d'épave</h3>
          <a href="tel:0607380194" class="text-xl font-bold text-gray-900 hover:text-yellow-700 transition-colors">
            06 07 38 01 94
          </a>
          <p class="text-sm text-gray-700 mt-2">7j/7 de 6h à minuit</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-certificate text-yellow-600 text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Certificat de destruction fourni</h3>
          <a href="mailto:contact@speed-epaviste.fr" class="text-lg font-bold text-gray-900 hover:text-yellow-700 transition-colors">
            contact@speedepaviste.fr
          </a>
          <p class="text-sm text-gray-700 mt-2">Document officiel immédiat</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg">
          <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-clock text-yellow-600 text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Service sous 24 h</h3>
          <p class="text-lg font-bold text-gray-900">Intervention rapide</p>
          <p class="text-sm text-gray-700">Toute la France</p>
        </div>
      </div>
      
      <p class="text-xs text-gray-700 animate-fade-in delay-300">
        <i class="fas fa-certificate mr-1"></i> Agrément VHU n° FR-123-456-789 - Certifié Ministère Transition Écologique
      </p>
    </div>
  </section>
</main>

<!-- Back to Top Button -->
<button 
  id="back-to-top"
  aria-label="Retour en haut de page"
  class="fixed bottom-6 right-6 w-12 h-12 bg-yellow-500 text-gray-900 rounded-full shadow-lg flex items-center justify-center transition-all opacity-0 invisible hover:bg-yellow-400 hover:animate-bounce z-50"
>
  <i class="fa-solid fa-arrow-up"></i>
</button>

<script>
// FAQ Toggle functionality
function toggleFAQ(element) {
  const content = element.nextElementSibling;
  const icon = element.querySelector('.fa-chevron-down');
  
  if (content.classList.contains('hidden')) {
    content.classList.remove('hidden');
    icon.style.transform = 'rotate(180deg)';
  } else {
    content.classList.add('hidden');
    icon.style.transform = 'rotate(0deg)';
  }
}

// Back to top functionality
document.addEventListener('DOMContentLoaded', function() {
  const backToTopButton = document.getElementById('back-to-top');
  if (backToTopButton) {
    let ticking = false;
    function updateBackToTop() {
      if (window.pageYOffset > 300) {
        backToTopButton.classList.remove('opacity-0', 'invisible');
        backToTopButton.classList.add('opacity-100', 'visible');
      } else {
        backToTopButton.classList.add('opacity-0', 'invisible');
        backToTopButton.classList.remove('opacity-100', 'visible');
      }
      ticking = false;
    }
    
    window.addEventListener('scroll', function() {
      if (!ticking) {
        requestAnimationFrame(updateBackToTop);
        ticking = true;
      }
    });
    
    backToTopButton.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});
</script>

<?php get_footer(); ?>

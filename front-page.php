
<?php get_header(); ?>
<main id="primary" class="flex-grow">
  <!-- Hero Section with Schema Markup -->
  <section class="relative overflow-hidden" aria-label="Enlèvement épave gratuit en Île-de-France" itemscope itemtype="https://schema.org/LocalBusiness">
    <div class="bg-gradient-to-b from-white via-yellow-100 to-yellow-400 pt-16 pb-32 px-6 md:px-12 lg:px-24">
      <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6" itemprop="name">
          Votre enlèvement d'épave gratuit par un épaviste agréé VHU, c'est ici.
        </h1>
        <p class="text-sm md:text-base text-gray-700 mb-8 max-w-2xl" itemprop="description">
          SPEED ÉPAVISTE vous accompagne dans l'enlèvement de votre épave à domicile 7j/7. Service 100% GRATUIT, remorquage d'épave et certificat de cession du véhicule offert.
        </p>
        <a href="#contact" class="inline-flex bg-black hover:bg-gray-800 text-white px-8 py-3 rounded-full font-medium animate-fade-in transition-all duration-300" aria-label="Contact pour enlèvement d'épave" itemprop="url">
          Enlèvement Épave
        </a>
        <!-- Hidden Schema Data -->
        <meta itemprop="telephone" content="0624930536">
        <meta itemprop="priceRange" content="Gratuit">
        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress" style="display:none;">
          <meta itemprop="addressRegion" content="Île-de-France">
          <meta itemprop="addressCountry" content="FR">
        </div>
        <div itemprop="areaServed" itemscope itemtype="https://schema.org/Place" style="display:none;">
          <meta itemprop="name" content="Île-de-France et départements limitrophes">
        </div>
      </div>
    </div>
    <!-- Optimized SVG wave -->
    <div class="absolute bottom-0 left-0 right-0" aria-hidden="true">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full" width="1440" height="120">
        <path d="M0 120H1440V0C1320 40 1080 80 720 80C360 80 120 40 0 0V120Z" fill="white" />
      </svg>
    </div>
  </section>

  <!-- Features Section with Schema -->
  <section class="py-16 px-6 bg-white" id="services" itemscope itemtype="https://schema.org/Service">
    <div class="max-w-6xl mx-auto">
      <h2 class="sr-only">Nos services d'enlèvement d'épave</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        <!-- Feature 1 -->
        <article class="flex flex-col items-center text-center p-4 rounded-xl shadow-sm bg-yellow-50 hover:shadow-md transition-shadow duration-300" itemscope itemtype="https://schema.org/ServiceFeature">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 3H9v5h5V6z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2" itemprop="name">Disponible 7j/7</h3>
          <p class="text-gray-700" itemprop="description">6h / 00h00</p>
        </article>

        <!-- Feature 2 -->
        <article class="flex flex-col items-center text-center p-4 rounded-xl shadow-sm bg-yellow-50 hover:shadow-md transition-shadow duration-300" itemscope itemtype="https://schema.org/ContactPoint">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2">
            <a href="tel:0624930536" aria-label="Téléphone direct - 06 24 93 05 36" itemprop="telephone" class="hover:text-yellow-600 transition-colors">
              06 24 93 05 36
            </a>
          </h3>
          <p class="text-gray-700">Ligne directe</p>
        </article>

        <!-- Feature 3 -->
        <article class="flex flex-col items-center text-center p-4 rounded-xl shadow-sm bg-yellow-50 hover:shadow-md transition-shadow duration-300" itemscope itemtype="https://schema.org/ServiceFeature">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M7 2v11h3v9l7-12h-4l4-8z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2" itemprop="name">Intervention rapide</h3>
          <p class="text-gray-700" itemprop="description">30min à Paris</p>
        </article>

        <!-- Feature 4 -->
        <article class="flex flex-col items-center text-center p-4 rounded-xl shadow-sm bg-yellow-50 hover:shadow-md transition-shadow duration-300" itemscope itemtype="https://schema.org/Certification">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2" itemprop="name">Agréé VHU</h3>
          <p class="text-gray-700" itemprop="description">Certificat de destruction</p>
        </article>
      </div>

      <!-- Second row of features -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mt-8">
        <!-- Feature 5 -->
        <article class="flex flex-col items-center text-center p-4 rounded-xl shadow-sm bg-yellow-50 hover:shadow-md transition-shadow duration-300" itemscope itemtype="https://schema.org/EnvironmentalFeature">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66.95-2.3c.48.17.98.3 1.34.3C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75S7 8 17 8z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2" itemprop="name">Respect de l'environnement</h3>
          <p class="text-gray-700" itemprop="description">Traitement écologique</p>
        </article>

        <!-- Feature 6 -->
        <article class="flex flex-col items-center text-center p-4 rounded-xl shadow-sm bg-yellow-50 hover:shadow-md transition-shadow duration-300" itemscope itemtype="https://schema.org/ServiceFeature">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2" itemprop="name">Tous véhicules</h3>
          <p class="text-gray-700" itemprop="description">Auto, utilitaire, 2 roues…</p>
        </article>

        <!-- Feature 7 -->
        <article class="flex flex-col items-center text-center p-4 rounded-xl shadow-sm bg-yellow-50 hover:shadow-md transition-shadow duration-300" itemscope itemtype="https://schema.org/ServiceArea">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2" itemprop="name">Île-de-France</h3>
          <p class="text-gray-700" itemprop="description">+ départements limitrophes</p>
        </article>

        <!-- Feature 8 -->
        <article class="flex flex-col items-center text-center p-4 rounded-xl shadow-sm bg-yellow-50 hover:shadow-md transition-shadow duration-300" itemscope itemtype="https://schema.org/Rating">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M14 9V5a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2M9 5a1 1 0 0 1 2 0v4H9zm5 13.5l-2.5-1.5L9 19l.5-2.5L7 14l2.5-.5L11 11l1.5 2.5L15 14l-2.5 2.5z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2" itemprop="name">Satisfaction client</h3>
          <p class="text-gray-700" itemprop="description">2000+ avis positifs</p>
          <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" style="display:none;">
            <meta itemprop="ratingValue" content="4.8">
            <meta itemprop="reviewCount" content="2000">
            <meta itemprop="bestRating" content="5">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Content Section with optimized image -->
  <section class="py-16 px-6 bg-white" id="about" itemscope itemtype="https://schema.org/AboutPage">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-2xl md:text-3xl font-bold mb-6" itemprop="headline">Speed épaviste ? Agir pour l'écologie.</h2>
          <p class="text-gray-700 mb-4" itemprop="text">
            Un épaviste enlève un véhicule hors d'usage. Speed épaviste intervient partout en Île-de-France et alentours : 91, 93, 92, 94, 77, 78, 02, 27, 28, 45, 60. Nos pros sont agréés et titulaires d'un certificat de conformité pour votre tranquillité.
          </p>
        </div>
        <div class="flex justify-center">
          <picture>
            <source media="(max-width: 768px)" srcset="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" type="image/webp">
            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                 alt="Clé de voiture sur fond jaune - Service d'enlèvement d'épave Speed Épaviste" 
                 class="rounded-lg shadow-lg max-w-full h-auto" 
                 width="400" 
                 height="270" 
                 fetchpriority="low" 
                 decoding="async" 
                 loading="lazy"
                 itemprop="image" />
          </picture>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section for SEO -->
  <section class="py-16 px-6 bg-yellow-50" id="faq" itemscope itemtype="https://schema.org/FAQPage">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-8">Questions Fréquentes</h2>
      <div class="space-y-4">
        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-white rounded-lg shadow-sm">
          <h3 itemprop="name" class="font-semibold p-4 border-b">Comment faire l'enlèvement d'épave gratuitement ?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-4">
            <p itemprop="text">L'enlèvement d'épave est gratuit avec notre service. Contactez-nous au 06 24 93 05 36, nous nous occupons de toutes les démarches administratives et du remorquage.</p>
          </div>
        </article>
        
        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-white rounded-lg shadow-sm">
          <h3 itemprop="name" class="font-semibold p-4 border-b">Quelles zones sont couvertes ?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-4">
            <p itemprop="text">Nous intervenons dans toute l'Île-de-France et les départements limitrophes (75, 77, 78, 91, 92, 93, 94, 95).</p>
          </div>
        </article>
        
        <article itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-white rounded-lg shadow-sm">
          <h3 itemprop="name" class="font-semibold p-4 border-b">Quels documents sont nécessaires ?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-4">
            <p itemprop="text">Vous aurez besoin de la carte grise du véhicule et d'une pièce d'identité. Nous nous occupons du reste des formalités.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Call to Action with Contact Schema -->
  <section class="bg-gradient-to-b from-yellow-300 to-yellow-400 py-16 px-6 text-center" id="contact" itemscope itemtype="https://schema.org/ContactPage">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6" itemprop="headline">
        Véhicule hors d'usage ? Réparations trop chères ?
      </h2>
      <p class="text-xl font-semibold text-gray-900 mb-8">Une solution simple : contactez nos spécialistes.</p>
      <p class="text-sm text-gray-800 mb-8" itemprop="description">
        Organisez gratuitement l'enlèvement de votre épave par un épaviste agréé, en toute confiance.
      </p>
      <a href="tel:0624930536" 
         class="inline-flex bg-black hover:bg-gray-800 text-white px-8 py-3 rounded-full font-medium transition-all duration-300 hover:shadow-lg"
         itemprop="telephone"
         aria-label="Appeler Speed Épaviste au 06 24 93 05 36">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
        </svg>
        Je contacte un spécialiste
      </a>
    </div>
  </section>

  <!-- JSON-LD Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Speed Épaviste",
    "description": "Service d'enlèvement d'épave gratuit et agréé VHU en Île-de-France",
    "url": "<?php echo esc_url(home_url('/')); ?>",
    "telephone": "0624930536",
    "priceRange": "Gratuit",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Île-de-France",
      "addressCountry": "FR"
    },
    "areaServed": {
      "@type": "Place",
      "name": "Île-de-France et départements limitrophes"
    },
    "openingHours": "Mo-Su 06:00-00:00",
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.8",
      "reviewCount": "2000"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Services d'enlèvement d'épave",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Enlèvement d'épave gratuit",
            "description": "Service d'enlèvement d'épave 24h/24 7j/7"
          }
        }
      ]
    }
  }
  </script>
</main>
<?php get_footer(); ?>

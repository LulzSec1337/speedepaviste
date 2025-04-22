
<?php get_header(); ?>

<main class="flex-grow">
  <!-- Hero Section -->
  <div class="relative overflow-hidden">
    <div class="bg-gradient-to-b from-white via-yellow-100 to-yellow-400 pt-16 pb-32 px-6 md:px-12 lg:px-24">
      <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
          Votre enlèvement d'épave gratuit par un épaviste agréé VHU, c'est ici.
        </h1>
        
        <p class="text-sm md:text-base text-gray-700 mb-8 max-w-2xl">
          SPEED EPAVISTE vous accompagne dans l'enlèvement de votre épave à domicile 7j/7. Service 100% GRATUIT correspondant à votre besoin de remorquage d'épave. Nous vous créons un certificat de cession de votre véhicule.
        </p>
        
        <a href="#contact" class="inline-flex bg-black hover:bg-gray-800 text-white px-8 py-3 rounded-full font-medium">
          Enlèvement Épave
        </a>
      </div>
    </div>
    
    <!-- Wave shape at bottom -->
    <div class="absolute bottom-0 left-0 right-0">
      <svg 
        viewBox="0 0 1440 120" 
        fill="none" 
        xmlns="http://www.w3.org/2000/svg"
        class="w-full"
      >
        <path 
          d="M0 120H1440V0C1320 40 1080 80 720 80C360 80 120 40 0 0V120Z" 
          fill="white"
        />
      </svg>
    </div>
  </div>

  <!-- Feature Section -->
  <div class="py-16 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Feature 1 -->
        <div class="flex flex-col items-center text-center">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <i class="fas fa-check h-8 w-8 text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2">Disponible 7j / 7</h3>
          <p class="text-gray-700">6h / 00h00</p>
        </div>
        
        <!-- Feature 2 -->
        <div class="flex flex-col items-center text-center">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <i class="fas fa-check h-8 w-8 text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2">06 24 93 05 36</h3>
        </div>
        
        <!-- Feature 3 -->
        <div class="flex flex-col items-center text-center">
          <div class="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
            <i class="fas fa-check h-8 w-8 text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2">Épaviste gratuit</h3>
          <p class="text-gray-700">Île-de-France & aux alentours</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Section -->
  <div class="py-16 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-2xl md:text-3xl font-bold mb-6">
            Speed épaviste ? C'est agir pour l'écologie demandée.
          </h2>
          
          <p class="text-gray-700 mb-4">
            Un épaviste est chargé d'intervenir & d'enlever un véhicule hors d'usage. Les automobiles n'étant plus en état de circuler, les épaves de tous types peuvent ou non, être éliminées gratuitement prennent en charge l'enlèvement de l'épave.
          </p>
          
          <p class="text-gray-700 mb-4">
            Speed épaviste dispose de plusieurs professionnels dans l'enlèvement d'épave dans tout l'Île-de-France & aux alentours : 91, 93, 92, 94, 77, 78, 02, 27, 28, 45, 60 entre 10. Pour certifier l'enlèvement d'épave, il est impératif pour un épaviste d'obtenir une agrégation.
          </p>
          
          <p class="text-gray-700">
            Chaque épaviste affilié à Speed épaviste est titulaire d'un certificat de conformité spécifique aux épaves.
          </p>
        </div>
        
        <div class="flex justify-center">
          <img
            src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
            alt="Car key"
            class="rounded-lg shadow-lg max-w-full h-auto"
          />
        </div>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div class="bg-gradient-to-b from-yellow-300 to-yellow-400 py-16 px-6 text-center">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
        Si votre voiture est hors d'usage ou des réparations coûteuses sont nécessaires hors de votre budget ?
      </h2>
      
      <p class="text-xl font-semibold text-gray-900 mb-8">
        Une solution est à portée de main !
      </p>
      
      <p class="text-sm text-gray-800 mb-8">
        Contactez simplement nos spécialistes et découvrez nos solutions avantageuses. Organisons gratuitement l'enlèvement de l'épave par un de nos épavistes agréés.
      </p>
      
      <a href="#contact" class="inline-flex bg-black hover:bg-gray-800 text-white px-8 py-3 rounded-full font-medium">
        Je contacte un spécialiste
      </a>
    </div>
  </div>
</main>

<?php get_footer(); ?>

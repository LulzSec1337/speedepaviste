
<?php
/**
 * Template Name: Contact Page
 * Speed Épaviste Pro - Contact
 */
get_header();
?>

<main id="primary" class="site-main">
  <div class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          <strong>Contactez-nous</strong>
        </h1>
        <p class="hero-subtitle">
          Demandez votre enlèvement d'épave 100% gratuit dès maintenant • Intervention sous 24-48h en Île-de-France
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
    <div class="max-w-6xl mx-auto">
      <div class="grid lg:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">
            Demande d'enlèvement gratuit
          </h2>
          
          <form id="contact-form" class="space-y-6">
            <div class="grid sm:grid-cols-2 gap-4">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                  Nom complet *
                </label>
                <input type="text" id="name" name="name" required 
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
              </div>
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                  Téléphone *
                </label>
                <input type="tel" id="phone" name="phone" required 
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
              </div>
            </div>
            
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                Email
              </label>
              <input type="email" id="email" name="email" 
                     class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
            </div>
            
            <div>
              <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                Adresse du véhicule *
              </label>
              <textarea id="address" name="address" rows="3" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent"></textarea>
            </div>
            
            <div>
              <label for="vehicle-info" class="block text-sm font-medium text-gray-700 mb-2">
                Informations sur le véhicule
              </label>
              <textarea id="vehicle-info" name="vehicle-info" rows="3" 
                        placeholder="Marque, modèle, année, état général..."
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent"></textarea>
            </div>
            
            <div>
              <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                Message complémentaire
              </label>
              <textarea id="message" name="message" rows="4" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent"></textarea>
            </div>
            
            <button type="submit" 
                    class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-8 py-4 rounded-lg transition-colors">
              Envoyer ma demande
            </button>
          </form>
        </div>

        <!-- Contact Information -->
        <div class="space-y-8">
          <div class="bg-gray-50 rounded-lg p-8">
            <h3 class="text-xl font-bold text-gray-900 mb-6">
              Informations de contact
            </h3>
            
            <div class="space-y-4">
              <div class="flex items-start space-x-4">
                <div class="bg-yellow-400 p-2 rounded-lg">
                  <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                  </svg>
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900">Téléphone</h4>
                  <p class="text-gray-600">06 24 93 05 36</p>
                  <p class="text-sm text-gray-500">Disponible 7j/7</p>
                </div>
              </div>
              
              <div class="flex items-start space-x-4">
                <div class="bg-yellow-400 p-2 rounded-lg">
                  <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900">Zone d'intervention</h4>
                  <p class="text-gray-600">Île-de-France</p>
                  <p class="text-sm text-gray-500">75, 77, 78, 91, 92, 93, 94, 95</p>
                </div>
              </div>
              
              <div class="flex items-start space-x-4">
                <div class="bg-yellow-400 p-2 rounded-lg">
                  <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900">Horaires</h4>
                  <p class="text-gray-600">7j/7 - 24h/24</p>
                  <p class="text-sm text-gray-500">Service d'urgence disponible</p>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">
              Service 100% gratuit
            </h3>
            <ul class="space-y-2 text-sm text-gray-700">
              <li class="flex items-center space-x-2">
                <span class="text-green-500">✓</span>
                <span>Enlèvement gratuit</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-500">✓</span>
                <span>Certificat de destruction</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-500">✓</span>
                <span>Démarches administratives</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-500">✓</span>
                <span>Intervention rapide</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
document.getElementById('contact-form').addEventListener('submit', function(e) {
  e.preventDefault();
  
  // Simple form validation
  const name = document.getElementById('name').value;
  const phone = document.getElementById('phone').value;
  const address = document.getElementById('address').value;
  
  if (!name || !phone || !address) {
    alert('Veuillez remplir tous les champs obligatoires.');
    return;
  }
  
  // Here you would typically send the form data to your server
  alert('Merci pour votre demande ! Nous vous contacterons dans les plus brefs délais.');
  this.reset();
});
</script>

<?php get_footer(); ?>

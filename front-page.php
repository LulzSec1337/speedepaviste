
<?php
/**
 * The front page template file
 */
get_header(); 
?>

<main id="primary" class="site-main" role="main">
    
    <!-- Hero Section -->
    <section class="hero-section relative overflow-hidden bg-gradient-to-br from-yellow-100 via-yellow-200 to-yellow-400" aria-label="Enlèvement épave gratuit en Île-de-France">
        <div class="container mx-auto px-6 py-16 md:py-24">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 animate-fade-in">
                    Votre enlèvement d'épave gratuit par un épaviste agréé VHU, c'est ici.
                </h1>
                <p class="text-lg md:text-xl text-gray-700 mb-8 max-w-2xl mx-auto leading-relaxed">
                    SPEED ÉPAVISTE vous accompagne dans l'enlèvement de votre épave à domicile 7j/7. Service 100% GRATUIT, remorquage d'épave et certificat de cession du véhicule offert.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="tel:0624930536" class="btn btn-primary inline-flex items-center gap-2 px-8 py-4 text-lg font-semibold rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        📞 Appeler Maintenant
                    </a>
                    <a href="#contact" class="btn btn-secondary px-8 py-4 text-lg font-semibold rounded-full border-2 border-gray-900 text-gray-900 bg-white hover:bg-gray-900 hover:text-white transition-all duration-300">
                        Demander un Devis
                    </a>
                </div>
            </div>
        </div>
        <!-- Wave separator -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                <path d="M0 120H1440V0C1320 40 1080 80 720 80C360 80 120 40 0 0V120Z" fill="white" />
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Nos Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Des solutions complètes pour l'enlèvement de votre épave</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="service-card p-6 bg-gray-50 rounded-xl hover:shadow-lg transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mb-4 mx-auto">
                        🚗
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">Enlèvement Gratuit</h3>
                    <p class="text-gray-600 text-center">Service 100% gratuit partout en Île-de-France</p>
                </div>
                <div class="service-card p-6 bg-gray-50 rounded-xl hover:shadow-lg transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mb-4 mx-auto">
                        📋
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">Certificat VHU</h3>
                    <p class="text-gray-600 text-center">Certificat de destruction officiel fourni</p>
                </div>
                <div class="service-card p-6 bg-gray-50 rounded-xl hover:shadow-lg transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mb-4 mx-auto">
                        🔄
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">Recyclage Écologique</h3>
                    <p class="text-gray-600 text-center">Traitement respectueux de l'environnement</p>
                </div>
                <div class="service-card p-6 bg-gray-50 rounded-xl hover:shadow-lg transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mb-4 mx-auto">
                        ⏰
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">Service 7j/7</h3>
                    <p class="text-gray-600 text-center">Disponible tous les jours de la semaine</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Contactez-nous</h2>
                <p class="text-xl text-gray-600">Intervention rapide en Île-de-France</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                            📞
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Téléphone</h3>
                            <a href="tel:0624930536" class="text-yellow-600 hover:text-yellow-700 font-medium">06 24 93 05 36</a>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                            ✉️
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                            <a href="mailto:contact@speed-epaviste.fr" class="text-yellow-600 hover:text-yellow-700 font-medium">contact@speed-epaviste.fr</a>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                            📍
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Zone d'intervention</h3>
                            <p class="text-gray-600">Île-de-France et communes limitrophes</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <?php echo do_shortcode('[contact-form-7 id="1" title="Contact"]'); ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>


<?php
/**
 * The template for displaying the footer
 */
?>

<footer id="colophon" class="site-footer bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white relative overflow-hidden">
    <!-- Background decorative elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-yellow-400 opacity-5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-300 opacity-5 rounded-full blur-3xl"></div>
    
    <div class="relative z-10">
        <!-- Main Footer Content -->
        <div class="container mx-auto px-6 py-16">
            <div class="grid md:grid-cols-4 gap-8 lg:gap-12">
                
                <!-- Company Info -->
                <div class="md:col-span-1">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center mr-3">
                            🚗
                        </div>
                        <h3 class="text-2xl font-bold"><?php bloginfo('name'); ?></h3>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        Service professionnel d'enlèvement d'épaves gratuit et agréé VHU en Île-de-France. Intervention rapide 7j/7.
                    </p>
                    <div class="flex items-center space-x-4">
                        <a href="tel:0624930536" class="bg-yellow-400 hover:bg-yellow-500 text-black px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                            📞 06 24 93 05 36
                        </a>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-6 flex items-center">
                        <span class="w-2 h-6 bg-yellow-400 rounded-full mr-3"></span>
                        Navigation
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="<?php echo home_url('/'); ?>" class="text-gray-300 hover:text-yellow-400 transition-colors duration-200 flex items-center group">
                            <span class="w-0 group-hover:w-2 h-2 bg-yellow-400 rounded-full mr-0 group-hover:mr-2 transition-all duration-200"></span>
                            Accueil
                        </a></li>
                        <li><a href="<?php echo home_url('/about'); ?>" class="text-gray-300 hover:text-yellow-400 transition-colors duration-200 flex items-center group">
                            <span class="w-0 group-hover:w-2 h-2 bg-yellow-400 rounded-full mr-0 group-hover:mr-2 transition-all duration-200"></span>
                            À propos
                        </a></li>
                        <li><a href="<?php echo home_url('/faq'); ?>" class="text-gray-300 hover:text-yellow-400 transition-colors duration-200 flex items-center group">
                            <span class="w-0 group-hover:w-2 h-2 bg-yellow-400 rounded-full mr-0 group-hover:mr-2 transition-all duration-200"></span>
                            FAQ
                        </a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>" class="text-gray-300 hover:text-yellow-400 transition-colors duration-200 flex items-center group">
                            <span class="w-0 group-hover:w-2 h-2 bg-yellow-400 rounded-full mr-0 group-hover:mr-2 transition-all duration-200"></span>
                            Contact
                        </a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-6 flex items-center">
                        <span class="w-2 h-6 bg-yellow-400 rounded-full mr-3"></span>
                        Nos Services
                    </h4>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></span>
                            Enlèvement gratuit d'épaves
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-3"></span>
                            Certificat de destruction VHU
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-3"></span>
                            Démarches administratives
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-400 rounded-full mr-3"></span>
                            Recyclage écologique
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-red-400 rounded-full mr-3"></span>
                            Intervention 7j/7
                        </li>
                    </ul>
                </div>

                <!-- Zone d'intervention -->
                <div>
                    <h4 class="text-lg font-semibold mb-6 flex items-center">
                        <span class="w-2 h-6 bg-yellow-400 rounded-full mr-3"></span>
                        Zone d'intervention
                    </h4>
                    <p class="text-yellow-400 font-semibold mb-4">Île-de-France</p>
                    <div class="grid grid-cols-2 gap-2 text-sm text-gray-400">
                        <div class="flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>
                            Paris (75)
                        </div>
                        <div class="flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>
                            Seine-et-Marne (77)
                        </div>
                        <div class="flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>
                            Yvelines (78)
                        </div>
                        <div class="flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>
                            Essonne (91)
                        </div>
                        <div class="flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>
                            Hauts-de-Seine (92)
                        </div>
                        <div class="flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>
                            Seine-Saint-Denis (93)
                        </div>
                        <div class="flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>
                            Val-de-Marne (94)
                        </div>
                        <div class="flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>
                            Val-d'Oise (95)
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="border-t border-gray-700 py-12">
            <div class="container mx-auto px-6">
                <h4 class="text-center text-xl font-bold mb-8 flex items-center justify-center">
                    <span class="text-yellow-400 mr-2">⭐</span>
                    Avis clients
                    <span class="text-yellow-400 ml-2">⭐</span>
                </h4>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-gray-800 bg-opacity-50 backdrop-blur-sm p-6 rounded-xl border border-gray-700 hover:border-yellow-400 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-300 italic mb-4">"Service impeccable ! Mon épave a été enlevée rapidement et gratuitement. Je recommande vivement."</p>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                                <span class="text-black font-bold">JM</span>
                            </div>
                            <span class="font-semibold">Jean M.</span>
                        </div>
                    </div>
                    <div class="bg-gray-800 bg-opacity-50 backdrop-blur-sm p-6 rounded-xl border border-gray-700 hover:border-yellow-400 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-300 italic mb-4">"Équipe très professionnelle et sympathique. Toutes les démarches ont été prises en charge."</p>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                                <span class="text-black font-bold">FD</span>
                            </div>
                            <span class="font-semibold">Fatou D.</span>
                        </div>
                    </div>
                    <div class="bg-gray-800 bg-opacity-50 backdrop-blur-sm p-6 rounded-xl border border-gray-700 hover:border-yellow-400 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-300 italic mb-4">"Intervention très rapide, service gratuit comme promis. Parfait !"</p>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                                <span class="text-black font-bold">PR</span>
                            </div>
                            <span class="font-semibold">Paul R.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="border-t border-gray-700 py-8">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="flex items-center mb-4 md:mb-0">
                        <span class="text-gray-400">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</span>
                        <span class="text-gray-400 ml-1">Tous droits réservés.</span>
                    </div>
                    <div class="flex items-center space-x-6">
                        <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors duration-200 text-sm underline-offset-2 hover:underline">Mentions légales</a>
                        <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors duration-200 text-sm underline-offset-2 hover:underline">Politique de confidentialité</a>
                        <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors duration-200 text-sm underline-offset-2 hover:underline">CGU</a>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="text-sm text-gray-400">Enlèvement d'épaves gratuit - Service professionnel agréé VHU</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to top button -->
<button id="back-to-top" class="fixed bottom-6 right-6 bg-yellow-400 hover:bg-yellow-500 text-black p-3 rounded-full shadow-lg transform translate-y-20 opacity-0 transition-all duration-300 z-50">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
</button>

<script>
// Back to top functionality
document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('back-to-top');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove('translate-y-20', 'opacity-0');
            backToTopButton.classList.add('translate-y-0', 'opacity-100');
        } else {
            backToTopButton.classList.add('translate-y-20', 'opacity-0');
            backToTopButton.classList.remove('translate-y-0', 'opacity-100');
        }
    });
    
    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
</script>

</div>

<?php wp_footer(); ?>

</body>
</html>

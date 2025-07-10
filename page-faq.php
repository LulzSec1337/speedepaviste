
<?php
/**
 * Template Name: FAQ Page
 * Speed Épaviste Pro - Questions Fréquentes
 */
get_header();
?>

<main id="primary" class="site-main">
  <div class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          <strong>Questions Fréquentes</strong>
        </h1>
        <p class="hero-subtitle">
          Trouvez toutes les réponses à vos questions sur notre service d'épaviste agréé VHU en Île-de-France
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
      <?php
      $faqs = array(
        array(
          'question' => 'Comment faire l\'enlèvement d\'épave gratuitement ?',
          'answer' => 'L\'enlèvement d\'épave est entièrement gratuit avec notre service. Il vous suffit de nous contacter par téléphone ou via notre formulaire en ligne. Nous nous occupons de toutes les démarches administratives et du remorquage de votre véhicule.'
        ),
        array(
          'question' => 'Quels documents sont nécessaires pour l\'enlèvement ?',
          'answer' => 'Vous aurez besoin de la carte grise du véhicule et d\'une pièce d\'identité valide. Si vous n\'êtes pas le propriétaire, une procuration signée par le propriétaire sera également requise. Nous nous occupons du reste des formalités administratives.'
        ),
        array(
          'question' => 'Dans quelles zones intervenez-vous ?',
          'answer' => 'Nous intervenons dans toute l\'Île-de-France et les départements limitrophes : Paris (75), Seine-et-Marne (77), Yvelines (78), Essonne (91), Hauts-de-Seine (92), Seine-Saint-Denis (93), Val-de-Marne (94), Val-d\'Oise (95).'
        ),
        array(
          'question' => 'Combien de temps pour l\'intervention ?',
          'answer' => 'Nous intervenons généralement sous 24h à 48h après votre demande. Pour les cas d\'urgence, nous proposons des interventions en express selon nos disponibilités. Le délai peut varier selon votre localisation.'
        ),
        array(
          'question' => 'Que devient mon véhicule après l\'enlèvement ?',
          'answer' => 'Votre véhicule est acheminé vers un centre de traitement agréé VHU (Véhicules Hors d\'Usage). Il y est dépollué puis recyclé dans le respect de l\'environnement. Vous recevez un certificat de destruction officiel.'
        ),
        array(
          'question' => 'L\'enlèvement est-il vraiment gratuit ?',
          'answer' => 'Oui, l\'enlèvement est totalement gratuit, quel que soit l\'état de votre véhicule. Aucun frais caché, aucune surprise. Ce service est financé par la filière de recyclage automobile.'
        ),
        array(
          'question' => 'Peut-on enlever un véhicule sans carte grise ?',
          'answer' => 'Dans certains cas exceptionnels, nous pouvons procéder à l\'enlèvement sans carte grise, mais cela nécessite des justificatifs supplémentaires et une procédure particulière. Contactez-nous pour étudier votre situation.'
        ),
        array(
          'question' => 'Faut-il vider le véhicule avant l\'enlèvement ?',
          'answer' => 'Oui, vous devez retirer tous vos effets personnels du véhicule avant notre intervention. Pensez également à récupérer vos plaques d\'immatriculation si elles sont encore fixées.'
        )
      );
      ?>

      <div class="space-y-4">
        <?php foreach ($faqs as $index => $faq): ?>
          <div class="bg-yellow-50 rounded-lg border border-yellow-200">
            <button class="w-full text-left p-6 focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-lg" 
                    onclick="toggleFaq(<?php echo $index; ?>)">
              <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-900 pr-4">
                  <?php echo esc_html($faq['question']); ?>
                </h3>
                <svg class="w-5 h-5 text-yellow-600 transform transition-transform duration-200" 
                     id="icon-<?php echo $index; ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </div>
            </button>
            <div class="hidden px-6 pb-6" id="answer-<?php echo $index; ?>">
              <p class="text-gray-700 leading-relaxed">
                <?php echo esc_html($faq['answer']); ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="mt-12 text-center bg-gray-50 rounded-lg p-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">
          Vous ne trouvez pas votre réponse ?
        </h2>
        <p class="text-gray-600 mb-6">
          Notre équipe est là pour vous aider. Contactez-nous directement.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="tel:0624930536" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-3 rounded-lg transition-colors">
            📞 06 24 93 05 36
          </a>
          <a href="<?php echo home_url('/contact'); ?>" class="bg-white hover:bg-gray-50 text-gray-900 font-semibold px-6 py-3 rounded-lg border border-gray-300 transition-colors">
            Formulaire de contact
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
function toggleFaq(index) {
  const answer = document.getElementById('answer-' + index);
  const icon = document.getElementById('icon-' + index);
  
  if (answer.classList.contains('hidden')) {
    answer.classList.remove('hidden');
    icon.style.transform = 'rotate(180deg)';
  } else {
    answer.classList.add('hidden');
    icon.style.transform = 'rotate(0deg)';
  }
}
</script>

<?php get_footer(); ?>

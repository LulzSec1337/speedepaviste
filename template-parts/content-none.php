
<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>
<section class="no-results not-found">
  <header class="page-header mb-8">
    <h1 class="page-title text-2xl font-bold"><?php esc_html_e('Aucun résultat', 'speed-epaviste'); ?></h1>
  </header>
  <div class="page-content">
    <?php if (is_search()) : ?>
      <p><?php esc_html_e('Désolé, aucun contenu ne correspond à votre recherche. Essayez avec d’autres mots clefs.', 'speed-epaviste'); ?></p>
      <?php get_search_form(); ?>
    <?php else : ?>
      <p><?php esc_html_e('Il semble que ce que vous cherchez est introuvable. Essayez la recherche.', 'speed-epaviste'); ?></p>
      <?php get_search_form(); ?>
    <?php endif; ?>
  </div>
</section>

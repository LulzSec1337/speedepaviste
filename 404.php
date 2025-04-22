
<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<main id="primary" class="site-main py-16 px-6">
  <div class="max-w-4xl mx-auto text-center">
    <h1 class="text-4xl font-bold mb-6"><?php esc_html_e('Page non trouvée', 'speed-epaviste'); ?></h1>
    <p class="text-xl mb-8"><?php esc_html_e('La page que vous recherchez semble introuvable.', 'speed-epaviste'); ?></p>
    
    <div class="mb-8">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex bg-yellow-400 hover:bg-yellow-500 text-black px-8 py-3 rounded-full font-medium">
        <?php esc_html_e('Retour à l\'accueil', 'speed-epaviste'); ?>
      </a>
    </div>
    
    <div class="max-w-md mx-auto">
      <p class="mb-4"><?php esc_html_e('Ou essayez de rechercher:', 'speed-epaviste'); ?></p>
      <?php get_search_form(); ?>
    </div>
  </div>
</main>

<?php
get_footer();


<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>

<section class="no-results not-found">
  <header class="page-header mb-8">
    <h1 class="page-title text-2xl font-bold"><?php esc_html_e('Nothing Found', 'speed-epaviste'); ?></h1>
  </header>

  <div class="page-content">
    <?php
    if (is_search()) :
      ?>
      <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'speed-epaviste'); ?></p>
      <?php
      get_search_form();
    else :
      ?>
      <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'speed-epaviste'); ?></p>
      <?php
      get_search_form();
    endif;
    ?>
  </div>
</section>

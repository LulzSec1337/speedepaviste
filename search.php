
<?php
/**
 * The template for displaying search results pages
 */
get_header();
?>
<main id="primary" class="site-main py-8 px-6">
  <div class="max-w-4xl mx-auto">
    <?php if (have_posts()) : ?>
      <header class="page-header mb-8">
        <h1 class="page-title text-2xl font-bold">
          <?php
          printf(
            esc_html__('Résultats de recherche pour : %s', 'speed-epaviste'),
            '<span>' . get_search_query() . '</span>'
          );
          ?>
        </h1>
      </header>
      <?php while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'search');
      endwhile;
      the_posts_navigation();
    else :
      get_template_part('template-parts/content', 'none');
    endif; ?>
  </div>
</main>
<?php get_footer(); ?>

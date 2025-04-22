
<?php
/**
 * The template for displaying all pages
 */
get_header();
?>
<main id="primary" class="site-main py-8 px-6">
  <div class="max-w-4xl mx-auto">
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header mb-8">
          <?php the_title('<h1 class="entry-title text-3xl font-bold">', '</h1>'); ?>
        </header>
        <?php if (has_post_thumbnail()) : ?>
          <div class="entry-thumbnail mb-6">
            <?php the_post_thumbnail('large', ['class' => 'rounded-lg w-full h-auto', 'loading' => 'lazy']); ?>
          </div>
        <?php endif; ?>
        <div class="entry-content prose max-w-none">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>

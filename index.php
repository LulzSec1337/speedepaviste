
<?php
/**
 * The main template file for displaying posts.
 */
get_header(); 
?>
<main id="primary" class="site-main py-8 px-6">
  <div class="max-w-4xl mx-auto">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class("mb-12 group"); ?>>
          <header class="mb-5">
            <a href="<?php the_permalink(); ?>" class="block group-hover:text-yellow-500 transition-colors">
              <?php if (has_post_thumbnail()): ?>
                <div class="mb-3 rounded-lg overflow-hidden">
                  <?php the_post_thumbnail('large', ['class' => 'rounded-lg w-full h-auto', 'loading' => 'lazy']); ?>
                </div>
              <?php endif; ?>
              <h2 class="text-2xl font-bold mb-1"><?php the_title(); ?></h2>
            </a>
            <div class="text-sm text-gray-500">
              Publié le <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo get_the_date(); ?></time> par <?php the_author(); ?>
            </div>
          </header>
          <div class="entry-content prose max-w-none mb-3">
            <?php the_excerpt(); ?>
          </div>
          <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-yellow-500 hover:text-yellow-600 font-semibold" aria-label="Lire la suite de <?php the_title_attribute(); ?>">
            Lire la suite <i class="fas fa-arrow-right ml-1"></i>
          </a>
        </article>
      <?php endwhile; ?>
      <div class="mt-10">
        <?php the_posts_navigation(); ?>
      </div>
    <?php else : ?>
      <div class="py-24 text-center text-gray-600">
        <h2 class="text-2xl font-bold mb-3">Aucun article trouvé</h2>
        <p>Revenez bientôt pour de nouveaux articles ou utilisez la recherche.</p>
      </div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>

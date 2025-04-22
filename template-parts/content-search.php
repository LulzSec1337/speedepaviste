
<?php
/**
 * Template part for displaying results in search pages
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-8 pb-8 border-b border-gray-200'); ?>>
  <header class="entry-header mb-4">
    <?php the_title(sprintf('<h2 class="entry-title text-xl font-bold"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

    <?php if ('post' === get_post_type()) : ?>
    <div class="entry-meta text-gray-600 text-sm">
      <?php
      echo sprintf(
        esc_html__('Posted on %s', 'speed-epaviste'),
        '<time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>'
      );
      ?>
    </div>
    <?php endif; ?>
  </header>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>

  <footer class="entry-footer mt-4">
    <a href="<?php echo esc_url(get_permalink()); ?>" class="text-black font-semibold hover:underline">
      <?php esc_html_e('Lire la suite →', 'speed-epaviste'); ?>
    </a>
  </footer>
</article>

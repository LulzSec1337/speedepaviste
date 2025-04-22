
<?php
/**
 * Template part for displaying posts
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>
  <header class="entry-header mb-4">
    <?php
    if (is_singular()) :
      the_title('<h1 class="entry-title text-3xl font-bold">', '</h1>');
    else :
      the_title('<h2 class="entry-title text-2xl font-bold"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
    endif;
    if ('post' === get_post_type()) : ?>
      <div class="entry-meta text-gray-600 text-sm">
        <?php
        echo sprintf(
          esc_html__('Posté le %s', 'speed-epaviste'),
          '<time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>'
        );
        ?>
      </div>
    <?php endif; ?>
  </header>
  <?php if (has_post_thumbnail()) : ?>
    <div class="entry-thumbnail mb-4">
      <?php the_post_thumbnail('large', ['class' => 'rounded-lg w-full h-auto', 'loading' => 'lazy']); ?>
    </div>
  <?php endif; ?>
  <div class="entry-content prose max-w-none">
    <?php
    if (is_singular()) :
      the_content();
    else :
      the_excerpt(); ?>
      <p class="mt-4">
        <a href="<?php echo esc_url(get_permalink()); ?>" class="text-black font-semibold hover:underline">
          <?php esc_html_e('Lire la suite →', 'speed-epaviste'); ?>
        </a>
      </p>
    <?php endif; ?>
  </div>
</article>

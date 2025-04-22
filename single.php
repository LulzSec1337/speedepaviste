
<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<main id="primary" class="site-main py-8 px-6">
  <div class="max-w-4xl mx-auto">
    <?php
    while (have_posts()) :
      the_post();

      get_template_part('template-parts/content', get_post_type());

      // If comments are open or we have at least one comment, load up the comment template.
      if (comments_open() || get_comments_number()) :
        comments_template();
      endif;

      // Previous/next post navigation.
      the_post_navigation(
        array(
          'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'speed-epaviste') . '</span> <span class="nav-title">%title</span>',
          'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'speed-epaviste') . '</span> <span class="nav-title">%title</span>',
          'class'     => 'my-8',
        )
      );

    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();

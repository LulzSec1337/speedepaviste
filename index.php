
<?php
/**
 * The main template file
 */

get_header();
?>

<main id="primary" class="site-main py-8 px-6">
  <div class="max-w-4xl mx-auto">
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
        
        get_template_part('template-parts/content', get_post_type());
        
      endwhile;
        
      the_posts_navigation();
    
    else :
        
      get_template_part('template-parts/content', 'none');
        
    endif;
    ?>
  </div>
</main>

<?php
get_footer();

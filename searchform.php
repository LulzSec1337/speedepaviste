
<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <div class="flex items-center">
    <label class="sr-only" for="s">
      <?php echo esc_html_x('Rechercher :', 'label', 'speed-epaviste'); ?>
    </label>
    <input id="s" type="search" class="search-field px-4 py-2 border border-gray-300 rounded-l-lg w-full focus:outline-none focus:ring-2 focus:ring-yellow-400"
           placeholder="<?php echo esc_attr_x('Rechercher…', 'placeholder', 'speed-epaviste'); ?>"
           value="<?php echo get_search_query(); ?>" name="s" aria-label="Recherche" />
    <button type="submit" class="search-submit bg-yellow-400 hover:bg-yellow-500 text-black px-4 py-2 rounded-r-lg" aria-label="Lancer la recherche">
      <span class="screen-reader-text"><?php echo esc_html_x('Rechercher', 'submit button', 'speed-epaviste'); ?></span>
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>

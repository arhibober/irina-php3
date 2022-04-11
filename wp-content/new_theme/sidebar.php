<aside class="sidebar">
	<div id="search-container">
		<div class="search-box">
			<?php get_search_form(); ?>
		</div>
	</div>
	<!-- Меню -->
	<nav class="main-navigation">
          <?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
        </nav>
		<div class="my-new-sidebar">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Area 1") ) : ?>
  <?php endif; ?>
</div>
</aside>
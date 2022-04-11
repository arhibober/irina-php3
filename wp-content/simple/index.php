<?php 
get_header(); 
get_sidebar(); ?>
	<div class="site-content"> 
	<div class="my-new-sidebar">
	  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Area 1") ) : ?>
	  <?php endif; ?>
	</div>
		<?php get_template_part( 'loop', 'index' );?>
	</div><!-- .site-content -->
<?php 
get_footer(); ?>

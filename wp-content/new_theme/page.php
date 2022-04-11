<?php
/**
 * Template for displaying page pages
 *
 * @package WordPress
 * @subpackage Simple
 * @since Simple 1.0
 */
 get_header(); 
get_sidebar(); ?>
	<div class="site-content"> 
		<?php get_template_part( 'loop', 'single' );?>
	</div><!-- .site-content -->
<?php get_footer(); ?>
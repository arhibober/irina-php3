<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Simple
 * @since Simple 1.0
 */
get_header(); ?>
  <div class="wrapper"> 
		<div class="center"> 
			<h1 class="entry-title"  style="margin-top:150px;">
			<?php echo "Ошибка 404"; ?></h1>
			<div class="entry-content">
				<p><?php echo 'Извините, такой страницы не существует.'; ?></p>					
			</div>
		</div>
  </div>
<?php get_footer(); ?>
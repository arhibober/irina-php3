<?php 
/* Template Name: mini */ 
get_header ();
get_sidebar ();
?>
<div class="site-content">
	<div class="my-new-sidebar">
	  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Area 1") ) : ?>
	  <?php endif; ?>
	</div>
	<h2>Миниатюры</h2>
	<ul><?php query_posts('showposts=8'); ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php if(has_post_thumbnail()) {?>
    <div style="display: inline-block;">
			<li>
				<p>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
				</p>
				<p>
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</p>
			</li>
		</div>
	<?php } ?>
	<?php endwhile; ?>
	</ul>
</div>
<!-- .site-content -->
<?php 
get_footer(); ?>
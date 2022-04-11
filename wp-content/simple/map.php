<?php
/*
Template Name: Sitemap1
*/
?>
<?php 
get_header(); 
get_sidebar(); ?>
	<div class="site-content"> 
	<div class="my-new-sidebar">
	  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Area 1") ) : ?>
	  <?php endif; ?>
	</div>
		<div class="sitemap-xml"> 
			<span>
				<h2>Страницы</h2>
				<ul>
					<?php wp_list_pages('title_li='); ?> 
				</ul>
				<h2>Категории</h2>
				<ul>
					<?php wp_list_categories('title_li='); ?>
				</ul>
			</span>                    
			<span>
				<h2>Архивы</h2>
				<ul>
					<?php wp_get_archives('type=monthly&show_post_count=0'); ?>
				</ul>
			</span>                
			<span class="post-cat"><h2>Статьи по категориям</h2>
				<?php
					$cats = get_categories();
					foreach ( $cats as $cat ) {
						query_posts( 'posts_per_page=-1&cat=' . $cat->cat_ID ); ?>
							<h3><?php echo $cat->cat_name; ?></h3>
							<ul>   
								<?php while ( have_posts() ) { the_post(); ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php } wp_reset_query(); ?>
							</ul>
							<?php } ?>
			</span>			 
		</div>
	</div><!-- .site-content -->
<?php 
get_footer(); ?>

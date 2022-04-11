
			<?php if ( have_posts() ) : ?>
			<!-- Начало цикла WordPress -->
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
						<div class="featured-post">
							<?php _e( 'Избранная запись' ); ?>
						</div>
						<?php endif; ?>
						<header class="entry-header">
						<a href = "<?php the_permalink(); ?> "title=" <?php the_title(); ?> "> <?php the_post_thumbnail('thumbnail'); ?></a> 
							<!-- Если это запись -->
							<?php if ( is_single() || is_sticky() ) : ?>
							<h1 class="entry-title"><?php the_title(); ?></h1>
							<?php else : ?>
							<h1 class="entry-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?></a>
							</h1>
							<?php endif; ?>
							
							<?php echo get_the_category_list(); ?>
							<?php echo get_the_tag_list('', ', ');?>
							
						</header><!-- .entry-header -->

						<?php if ( is_search() ) : // Покаывать только краткое описание записи, если это результаты поиска?>
						<div class="entry-summary">
							<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->
						<?php else : ?>
						<div class="entry-content">
							<?php the_content( __( 'Читатать дальше.. <span class="meta-nav">></span>') ); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Страницы:'), 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content -->
						<?php endif; ?>

						<footer class="entry-meta">

							<?php printf(
								 __( 'Эта запись была опубликована %1$s автором %2$s.' ),
								esc_html( get_the_date() ),
								esc_html( get_the_author() )
							);	
							?>
							<?php edit_post_link( __( 'Редактировать', '' ), '<span class="edit-link">', '</span>' ); ?>
							
						</footer><!-- .entry-meta -->
					</article><!-- #post -->
				<?php endwhile; ?>
				<!-- Конец цикла WordPress -->
			
				<?php /* Display navigation to next/previous pages when applicable */ ?>
					<?php /* if (  $wp_query->max_num_pages > 1 ) : ?>
									<div id="nav-below" class="navigation">
										<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts' ) ); ?></div>
										<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>' ) ); ?></div>
									</div><!-- #nav-below -->
					<?php endif;*/ ?>
					 <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Страницы:'), 'after' => '</div>' ) ); ?>
				
			<!-- Записей для отображения нет, тогда выводим сообщение об этом -->
			<?php else : ?>
				<article class="not-found">
				<?php if ( current_user_can( 'edit_posts' ) ) : ?>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Нет записей для отображения.', '' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php printf( __( 'Готовы опубликовать свою первую запись? <a href="%s">Тогда перейдите по этой ссылке.</a>.'), admin_url( 'post-new.php' ) ); ?></p>
					</div><!-- .entry-content -->

				<?php else : ?>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Ничего не найдено'); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e( 'Ничего не найдено, воспользуйтесь поиском.'); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				<?php endif; ?>

				</article><!--.not-found -->

			<?php endif; // конец have_posts() проверки ?>
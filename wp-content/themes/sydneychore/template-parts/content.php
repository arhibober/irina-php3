<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sydneychore
 */

?>

<div class="articleSpace">
    <div class="imgBlock">
	<?php
		_s_post_thumbnail ();
	?>
	</div><!-- .entry-header -->

	<div class="contentText">
		<?php
		$page_link = get_page_link ();
		the_title ("<h5 class='titleArticle'>", "</h5>");
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sydneychore' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		/*wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sydneychore' ),
			'after'  => '</div>',
		) );*/
		?>
		<a href="<?php echo $page_link; ?>" class="moreInfo">MORE INFO</a>
		<a href="#" class="bookNow">BOOK NOW</a>
	</div><!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->

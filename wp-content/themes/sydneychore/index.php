<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sydneychore
 */

	get_header ();
	echo $tgh_categories;
	$arg_cat = array(
		"orderby"      => "name",
		"order"        => "ASC",
		"hide_empty"   => 1,
		"exclude"      => "",
		"include"      => "",
		"taxonomy"     => "category",
	);
	$categories = get_categories ($arg_cat);
	if ($categories)
	{
		foreach ($categories as $cat)
		{				
			$arg_posts = array
			(
				"orderby"        => "name",
				"order"          => "ASC",
				"posts_per_page" => 10,
				"post_type"      => "post",
				"post_status"    => "publish",
				"cat"            => $cat->cat_ID,
			);
			$query = new WP_Query ($arg_posts);
			if ( have_posts ()) :
				if ((is_home ()) && (!is_front_page ())) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title (); ?></h1>
					</header>
				<?php
				endif;
				if ($query->have_posts ())
				?>
					<h4 class="tittleBlock padleft"><?php echo $cat->name; ?></h4>
					<?php
						while ($query->have_posts ()) :
							$query->the_post ();
							get_template_part ("template-parts/content", get_post_type ());
						endwhile;
				else :
					get_template_part ("template-parts/content", "none");
				endif;
					wp_reset_postdata ();
		}
	}
?>
</article>
<?php
	get_footer ();
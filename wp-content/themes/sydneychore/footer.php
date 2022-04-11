</section>
<section>
	<div class="row">
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sydneychore
 */
	if (!function_exists ("dynamic_sidebar") || !(dynamic_sidebar ("SidebarArea8")))
	{
	}
	echo "</div>
	</section>
	<section>";
	if (!function_exists ("dynamic_sidebar") || !(dynamic_sidebar ("SidebarArea5")))
	{
	}
	echo "</section>";
	if (has_nav_menu ("social")) :
		?>
		<section class="socBlock">
			<ul class="socList">
				<?php
					wp_nav_menu
					(
						array
						(
							"theme_location" => "social",
							"link_before"    => "<span class='screen-reader-text'>",
							"link_after"     => "</span>",
							"menu_class"     => "menu clearfix",
							"fallback_cb"    => false,
						)
					);
				?>
			</ul>
		</section><!-- .social-navigation -->
	<?php
	endif;
?>

	</div><!-- #content -->

	<footer>
		<?php
			if (!function_exists ("dynamic_sidebar") || !(dynamic_sidebar ("SidebarArea2")))
			{ 
			}
			if (has_nav_menu ("social")) :
				?>
				<ul class="footerListSoc">
					<?php
						wp_nav_menu
						(
							array
							(
								"theme_location" => "social",
								"link_before"    => "<span class='screen-reader-text'>",
								"link_after"     => "</span>",
								"menu_class"     => "menu clearfix",
								"fallback_cb"    => false,
							)
						);
					?>
					<li><a href="#"><img src="<?php echo get_template_directory_uri (); ?>/images/search.png" alt="search"></a></li>
				</ul>
				</nav><!-- .social-navigation -->
				<?php
					endif;
				if (!function_exists ("dynamic_sidebar") || !(dynamic_sidebar ("SidebarArea4")))
				{ 
				}
		?>
	</footer><!-- #colophon -->
<?php
	wp_footer ();
?>
</body>
</html>
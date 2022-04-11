<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sydneychore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="description" content="description">
    <meta name="keywords" content="keywords">
    <meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>

<body>
	<header class="container">
		<div class="row">
			<div class="col-md-7 col-sm-7">
				<ul class="logoLine">
					<?php
						if (!function_exists ("dynamic_sidebar") || !(dynamic_sidebar ("SidebarArea1")))
						{
						}
					?>
				</ul>
			</div>
			<div class="col-md-5 col-sm-5">              
				<div class="topHeaderBlock">
					<ul class="headerNav">
						<li>
							<?php
								if (!function_exists ("dynamic_sidebar") || !(dynamic_sidebar ("SidebarArea7")))
								{
								}
							?>
						</li>
						<li>
							<div class="sendSearch"></div>
							<ul class="headerListSoc">
								<?php
									if (has_nav_menu ("social"))
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
								<li><a href="#"><img src="<?php echo get_template_directory_uri (); ?>/headerSoc/soc5.png" alt="search"></a></li>
							</ul>
						</li>
						<li>
							<?php
								if (!function_exists ("dynamic_sidebar") || !(dynamic_sidebar ("SidebarArea6")))
								{
								}
							?>
						</li>
					</ul>
					<?php
						if (!function_exists ("dynamic_sidebar") || !(dynamic_sidebar ("SidebarArea3")))
						{
						}
					?>
				</div>
				<div class="searchRow">             
					<form role="search" method="get"  action="">                       
						<div class="searchHeaderBlock">                        
							<div class="small-8 columns">
								<input type="text" value="" name="s"  placeholder="Search" class="inputSearch" autofocus/>              
							</div>  
							<div class="small-4 columns">
								<input type="submit" value="Search" class="buttonSearch">
							</div>                          
						</div>
					</form>								
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default navbar-static-top">             
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed icon-menu menuActive" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                                 
            </div>
            <div id="navbar" class="navbar-collapse menu">
			<?php
				if (has_nav_menu ("main-menu"))
					wp_nav_menu
					(
						array
						(
							"theme_location" => "main-menu",
							"link_before"    => "",
							"link_after"     => "",
							"menu_class"     => "nav navbar-nav",
							"fallback_cb"    => false,
							"container"      => false
						)
					);
			?>
            </div>            
        </nav>
    </header>
	<?php
		echo "<section class='sliderBlock'>
			<div class='owl-carousel owl-theme actSlider'>";
			$i = 0;
		//foreach ($header_im as $hi)
		//{
			if (have_posts ())
				while (have_posts ())
				{
					the_post ();
				//echo " hiurl: ".$hi ["url"];
					$i++;
/*$strElgar = <<<EOD
                <div class="sliderStyle slider$i">
                    <div class="containerSlider">
                        <div class="blockNow">
                            <h3>Elgar<br> The Dream of Gerontius</h3>
                            <p class="textSlider">
                                400 singers perform Elgar’s monumental work under the stunning Sydney Opera House sails.
                            </p>
                            <a href="#" class="nowLink">BOOK NOW</a>
                        </div>
                    </div>
                </div>
EOD;*/
					if ($i > 4)
						break;
					echo "<div class='item mainSlider".$i."' style='background-image: url(\"".wp_get_attachment_image_src (get_post_thumbnail_id (), "thumbnail-size", true) [0]."\")'>
						<div class='sliderStyle slider".$i."'>
							<div class='containerSlider'>
								<div class='blockNow'>
									<h3>".get_the_title ()."</h3>".
									get_the_excerpt ().
									"<a href='".get_page_link ()."' class='nowLink'>BOOK NOW</a>
								</div>
							</div>
						</div>
                    </div>";
				}
		echo "</div>
		</section>";
			global $options;
			foreach ($options as $value) {
				if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
	?>
	<script>

	 jQuery(document).ready(function($){

	  $('#slides').slides({

	  preload: true,

	  preloadImage: '<?php echo get_template_directory_uri(); ?>/images/loading.gif',

	  play: 5000,

	  pause: 2500,

	  hoverPause: true

	   

	   });

	 });

	</script>
	<section class="articleSpaceBlock container">
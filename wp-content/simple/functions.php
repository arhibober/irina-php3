<?php 
remove_filter('the_content', 'wpautop');

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
// begin widget setting
if ( function_exists('register_sidebars') )
register_sidebar( array(
		'name' => 'Sidebar Area',
	   'before_widget' => '<div id="%1$s" class="backgroundlist %2$s"><div class="listtitle">',
      'after_widget' => '</div></div>',
      'before_title' => '<h2>',
      'after_title' => '</h2></div><div class="contentbox">'
      )); 
// begin widget setting
if ( function_exists('register_sidebars') )
register_sidebar( array(
		'name' => 'Sidebar Area 1',
	   'before_widget' => '<div id="%1$s" class="backgroundlist %2$s"><div class="listtitle">',
      'after_widget' => '</div></div>',
      'before_title' => '<h2>',
      'after_title' => '</h2></div><div class="contentbox">'
      ));
function enqueue_styles() {
    wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
    wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
    wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
}
?>
<?php
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

if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}

function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start ();
	ob_end_clean ();
	$output = preg_match_all ( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
	$first_img = $matches [1] [0];
	
	return $first_img;
}

add_custom_background();
$args = array(
    'width' => 200, // размеры
    'height' => 100,// изоюражения    'uploads' => true,// разрешаем загрузку новых
    'default-image' => get_template_directory_uri() . '/img/logo.png'// изображение по-умолчанию
    );
add_theme_support( 'custom-header', $args );
add_submenu_page( $parent_slug , $page_title , $menu_title , $capability , $menu_slug , $function );
function setup_theme_admin_menus() { 
  add_submenu_page('themes.php', 
  'Front Page Elements', 'Front Page', 'manage_options', 
  'front-page-elements', 'theme_front_page_settings'); 
}
add_action( "admin_menu" , "setup_theme_admin_menus" );

function theme_front_page_settings() { 
    echo "Hello, world!"; 
}
   add_menu_page('Theme settings', 'Example theme', 'manage_options',  
        'tut_theme_settings', 'theme_settings_page', WP_CONTENT_URL."/themes/simple/my_teme.png", 5);            
    add_submenu_page('tut_theme_settings',  
        'Front Page Elements', 'Front Page', 'manage_options',  
        'tut_theme_settings', 'theme_settings_page');
   add_action("admin_menu", "setup_theme_admin_menus");   
function theme_settings_page() { 
   echo "Hello!";  
}
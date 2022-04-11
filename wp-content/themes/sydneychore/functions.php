<?php
/**
 * sydneychore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sydneychore
 */
	add_action ("wp_enqueue_scripts", "my_scripts_method");
	function my_scripts_method ()
	{
		wp_enqueue_script ("jquery");
	}

	function enqueue_styles1 ()
	{
		wp_enqueue_style ("whitesquare-style1", get_template_directory_uri ()."/css/bootstrap.min.css");
	}
	add_action ("wp_enqueue_scripts", "enqueue_styles1");
	
	function enqueue_styles2 ()
	{
		wp_enqueue_style ("whitesquare-style2", get_template_directory_uri ()."/css/font-awesome.min.css");
	}
	add_action ("wp_enqueue_scripts", "enqueue_styles2");
	
	function enqueue_styles3 ()
	{
		wp_enqueue_style ("whitesquare-style3", get_template_directory_uri ()."/css/owl.carousel.min.css");
	}
	add_action ("wp_enqueue_scripts", "enqueue_styles3");
	
	function enqueue_styles ()
	{
		wp_enqueue_style ("whitesquare-style", get_template_directory_uri ()."/css/animate.css");
	}
	add_action ("wp_enqueue_scripts", "enqueue_styles");
	
	
	function enqueue_styles5 ()
	{
		wp_enqueue_style ("whitesquare-style5", get_template_directory_uri ()."/css/stylesheet.css");
	}
	add_action ("wp_enqueue_scripts", "enqueue_styles5");

	function enqueue_scripts2 ()
	{
		wp_enqueue_script ("whitesquare-style2", get_template_directory_uri ()."/js/jquery.min.js", array( 'jquery' ), '20182609', true);
	}
	add_action ("wp_enqueue_scripts", "enqueue_scripts2");
	
	function enqueue_scripts ()
	{
		wp_enqueue_script ("whitesquare-style", get_template_directory_uri ()."/js/bootstrap.min.js", array( 'jquery' ), '20182609', true);
	}
	add_action ("wp_enqueue_scripts", "enqueue_scripts");

	
	function enqueue_scripts4 ()
	{
		wp_enqueue_script ("whitesquare-style4", get_template_directory_uri ()."/js/owl.carousel.min.js", array( 'jquery' ), '20182609', true);
	}
	add_action ("wp_enqueue_scripts", "enqueue_scripts4");
	
	
	function enqueue_scripts1 ()
	{
		wp_enqueue_script ("whitesquare-style1", get_template_directory_uri ()."/js/jquery.h5validate.js", array( 'jquery' ), '20182609', true);
	}
	add_action ("wp_enqueue_scripts", "enqueue_scripts1");

	

	function enqueue_scripts3 ()
	{
		//echo "dfffff";
		wp_enqueue_script ("whitesquare-style3", get_template_directory_uri ()."/js/main.js", array( 'jquery' ), '20182609', true);
	}
	add_action ("wp_enqueue_scripts", "enqueue_scripts3");

	if (function_exists ("add_theme_support"))
		add_theme_support ("menus");

	// begin widget setting
	if (function_exists ("register_sidebars"))
		register_sidebar
		(
			array
			(
				"name" => "SidebarArea1",
				"before_widget" => "<li>",
				"after_widget" => "</li>",
				"before_title" => "<h2>",
				"after_title" => "</h2>"
			)
		);
		
	if (function_exists ("register_sidebars"))
		register_sidebar
		(
			array
			(
				"name" => "SidebarArea2",
				"before_widget" => "",
				"after_widget" => "",
				"before_title" => "<h2>",
				"after_title" => "</h2>"
			)
		);
		
	if (function_exists ("register_sidebars"))
		register_sidebar
		(
			array
			(
				"name" => "SidebarArea3",
				"before_widget" => "",
				"after_widget" => "",
				"before_title" => "<h2>",
				"after_title" => "</h2>"
			)
		);
		
	if (function_exists ("register_sidebars"))
		register_sidebar
		(
			array
			(
				"name" => "SidebarArea4",
				"before_widget" => "",
				"after_widget" => "",
				"before_title" => "<h2>",
				"after_title" => "</h2>"
			)
		);
		
	if (function_exists ("register_sidebars"))
		register_sidebar
		(
			array
			(
				"name" => "SidebarArea5",
				"before_widget" => "",
				"after_widget" => "</div>",
				"before_title" => "<h4 class='tittleBlock text-center'>",
				"after_title" => "</h4><div class='wiget'>"
			)
		);
	if (function_exists ("register_sidebars"))
		register_sidebar
		(
			array
			(
				"name" => "SidebarArea6",
				"before_widget" => "",
				"after_widget" => "",
				"before_title" => "<h2>",
				"after_title" => "</h2></div><div class='contentbox'>"
			)
		);
	if (function_exists ("register_sidebars"))
		register_sidebar
		(
			array
			(
				"name" => "SidebarArea7",
				"before_widget" => "",
				"after_widget" => "",
				"before_title" => "<h2>",
				"after_title" => "</h2></div><div class='contentbox'>"
			)
		);
	if (function_exists ("register_sidebars"))
		register_sidebar
		(
			array
			(
				"name" => "SidebarArea8",
				"before_widget" => "<div class='col-md-4'>",
				"after_widget" => "</div>",
				"before_title" => "<h4 class='tittleBlock'>",
				"after_title" => "</h4>"
			)
		);
		
if ( ! function_exists( '_s_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _s_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sydneychore, use a find and replace
		 * to change 'sydneychore' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sydneychore', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'sydneychore' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
/*function _s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sydneychore' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sydneychore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );*/

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	wp_enqueue_style( 'sydneychore-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sydneychore-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sydneychore-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
if (function_exists ("add_theme_support"))
		add_theme_support ("post-thumbnails");

function catch_that_image ()
{
	global $post, $posts;
	$first_img = "";
	ob_start ();
	ob_end_clean ();
	$output = preg_match_all ('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	return $first_img;
}

require get_parent_theme_file_path ("/inc/icon-functions.php");

add_custom_background ();
$args = array
(
   	'uploads' => true,// разрешаем загрузку новых
    "default-image" => get_template_directory_uri ()."/images/logo.png",// изображение по-умолчанию
	
	'random-default'         => false, // нужно ли показывать разные изображения на разных страницах
	'width'                  => 1920, // ширина шапки
	'height'                 => 1200, // высота шапки
	'flex-height'            => false, // резиновая высота
	'flex-width'             => false, // резиновая ширина
	'default-text-color'     => '', // цвет текста в шапке по умолчанию
	'header-text'            => true, // можно ли будет в админке указывать текст для шапки
	'uploads'                => true, // может ли пользователь загружать собственное изображение
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support ("custom-header", $args);

// This theme uses wp_nav_menu() in one location.
	register_nav_menus
	(
		array
		(
			"menu-1" => esc_html__("Primary", "new_theme2"),
			"social" => __("Social Links Menu", "new_theme2"),
			"main-menu" => __("Second", "new_theme2"),
		)
	);
	
function new_theme2_scripts ()
{
	$new_theme2_l10n = array(
		"quote" => new_theme2_get_svg (array ("icon" => "quote-right")),
	);
	if (has_nav_menu ("top"))
	{
		wp_enqueue_script ("new_theme2-navigation", get_theme_file_uri ("/assets/js/navigation.js"), array ("jquery"), "1.0", true);
		$new_theme2_l10n ["expand"] = __("Expand child menu", "new_theme2");
		$new_theme2_l10n ["collapse"] = __("Collapse child menu", "new_theme2");
		$new_theme2_l10n ["icon"]     = new_theme2_get_svg
		(
			array
			(
				"icon"     => "angle-down",
				"fallback" => true,
			)
		);
	}
}
add_action ("wp_enqueue_scripts", "new_theme2_scripts");

add_filter ("nav_menu_submenu_css_class", "change_wp_nav_menu", 10, 3 );
// 1 вариант - добавить у всех меню
function change_wp_nav_menu ($classes, $args, $depth)
{
	$classes [] = "dropdown-menu";
	return $classes;
}

/*function blm_init_method() {

	    wp_enqueue_script('jquery');

	    wp_enqueue_script( 'easing', get_template_directory_uri().'/js/jquery.easing.js', array( 'jquery' ), '1.3' );

	    wp_enqueue_script( 'slides', get_template_directory_uri().'/js/slides.min.jquery.js', array( 'jquery', 'easing' ) );

	 

	}

	add_action('wp_enqueue_scripts', 'blm_init_method');*/


function mytheme_customize_css()
{
    ?>
         <style type="text/css">
             h1 { color: <?php echo get_theme_mod('header_color', '#000000'); ?>; }
         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');

$themename = "sydneychore";
$shortname = "tgh";

$categories = get_categories('hide_empty=0&orderby=name');
    $wp_cats = array();

    foreach ($categories as $category_list ) {
           $wp_cats[$category_list->cat_ID] = $category_list->cat_ID;
    }
	$wp_ids = array();

foreach ($categories as $category_list ) {
       $wp_ids[$category_list->cat_ID] = $category_list->cat_ID;
}
echo " wpc: ";
print_r ($wp_cats);

    array_unshift($wp_cats, "Choose a category");


global $options;
$options = array (

    array(  "name" => "Homepage Options",
            "type" => "title"),

    array(  "type" => "open"),


array(  "name" => "Pick Categories",
    "desc" => "Choose a category from the list to do some interesting stuff.",
    "id" => $shortname."_categories",
    "cid" => $wp_ids,
    "type" => "select",
    "options" => $wp_cats,
    "std" => ""),

array(  "type" => "close")

);
echo " o: ";
print_r ($options);

function mytheme_add_admin() {

global $themename, $shortname, $options;

if ( $_GET['page'] == basename(__FILE__) ) {

    if ( 'save' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

            foreach ($options as $value) {
                if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

            header("Location: themes.php?page=functions.php&saved=true");
            die;

    } else if( 'reset' == $_REQUEST['action'] ) {

        foreach ($options as $value) {
            delete_option( $value['id'] ); }

        header("Location: themes.php?page=functions.php&reset=true");
        die;

    }
}

add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

    }
	mytheme_add_admin();
	mytheme_admin();

    function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';

?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>
<form method="post">
  <?php foreach ($options as $value) { 

    switch ( $value['type'] ) {

        case "open":
        ?>
  <table width="100%" border="0" style="background-color:#eef5fb; padding:10px;">
    <?php break;

        case "close":
        ?>
  </table>
  <br />
  <?php break;

        case "title":
        ?>
  <table width="100%" border="0" style="background-color:#dceefc; padding:5px 10px;">
  <tr>
    <td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
  </tr>
  <?php break;

        case 'text':
        ?>
  <tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
    <td width="80%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /></td>
  </tr>
  <tr>
    <td><small><?php echo $value['desc']; ?></small></td>
  </tr>
  <tr>
    <td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php 
        break;

        case 'textarea':
        ?>
  <tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
    <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>
</textarea></td>
  </tr>
  <tr>
    <td><small><?php echo $value['desc']; ?></small></td>
  </tr>
  <tr>
    <td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php 
        break;

         case 'select':
    ?>
     <tr>
   <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
   <td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
       <?php 

$categories = get_categories('hide_empty=0&orderby=name');

foreach ($categories as $category_list ) {

  ?>
       <option value="<?php echo $option;?>" <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo get_cat_name($option); ?></option>
       <?php } ?>
     </select></td>
 </tr>
     <tr>
       <td><small><?php echo $value['desc']; ?></small></td>
     </tr>
     <tr>
       <td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td>
     </tr>
     <tr>
       <td colspan="2">&nbsp;</td>
     </tr>
     <?php
           break;

        case "checkbox":
        ?>
  <tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
    <td width="80%"><? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
      <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> /></td>
  </tr>
  <tr>
    <td><small><?php echo $value['desc']; ?></small></td>
  </tr>
  <tr>
    <td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php         break;


} 
}
	}
?>

  <!--</table>-->

<?php
/**
 * Файл header.php
 *
 * Отображает страницы сайта, работающего на WordPress
 *
 * @package WordPress
 * @subpackage Simple_Site
 * @since Simple Site 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="wrapper">

		<!-- Шапка -->
		<header id="masthead" class="site-header" role="banner">
			<!-- Название сайта -->
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<div id="site-description" class="site-description"><?php bloginfo( 'description' ); ?></div>
		</header><!-- #masthead -->
		<div class="main">
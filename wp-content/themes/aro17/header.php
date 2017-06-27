<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aro17
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="slide"></div>
<div id="page" class="site">
	<div id="menuslide">

		<div id="navi-close">
			<a href="#">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve">
	<g>
		<g id="close">
			<polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3
				214.2,178.5"/>
		</g>
	</g>
	</svg>
			</a>
		</div>

		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</div>
	<header id="masthead" class="site-header" role="banner">
		<div id="logo">
			<a href="#">
				Aro<span>.</span>
			</a>
		</div>

		<div id="navi">
			<a href="#">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

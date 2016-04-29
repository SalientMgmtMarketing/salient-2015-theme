<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Salient 2015
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site<?php
		if ( has_nav_menu( 'secondary' ) ) { ?> has-secondary<?php } ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'salient-2015' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a></h1>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false" data-toggle="collapse" data-target="#site-navigation > div > ul"><span></span></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'collapse' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!--.wrap-->
	
		<?php
		if ( has_nav_menu( 'secondary' ) ) { ?>
		
			<div class="secondary-navigation-container">
				<nav class="wrap secondary-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'collapse' ) ); ?>
				</nav><!--.secondary-navigation-->
			</div><!--.secondary-navigation-container-->
		
		<?php } // has_nav_menu('secondary') ?>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

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
<meta property="fb:pages" content="328075207241758" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
<?php wp_head(); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1000200463344779');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1000200463344779&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<div id="page" class="hfeed site<?php
		if ( has_nav_menu( 'secondary' ) ) { ?> has-secondary<?php } ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'salient-2015' ); ?></a>
    <?php if ( get_field('header_banner_content') ) { ?>
      <div class="header-banner" <?php if (get_field('header_banner_background_image')) { ?>style="background-image:url('<?php echo get_field('header_banner_background_image')['url']; ?>');"<?php } ?>><?php the_field('header_banner_content'); ?></div>
    <?php } ?>
	<header id="masthead" class="site-header<?php if (get_field('header_banner_content')) { echo ' has-header-banner'; } ?>" role="banner">
		
		<div class="wrap">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->
	
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false" data-toggle="collapse" data-target="#site-navigation > div, .secondary-navigation-container"><span></span></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'collapse' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!--.wrap-->
	
		<?php
		if ( has_nav_menu( 'secondary' ) ) { ?>
		
			<div class="secondary-navigation-container collapse">
				<nav class="wrap secondary-navigation" aria-label="secondary navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container_class' => 'menu-wrap' ) ); ?>
				</nav><!--.secondary-navigation-->
			</div><!--.secondary-navigation-container-->
		
		<?php } // has_nav_menu('secondary') ?>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

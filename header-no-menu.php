<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Salient
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
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'salient-2015' ); ?></a>

	<?php if ( get_field( 'header_banner_content' ) ) { ?>
            <div class="header-banner" <?php if ( get_field( 'header_banner_background_image' ) ) { ?>style="background-image:url('<?php echo get_field( 'header_banner_background_image' )['url']; ?>');"<?php } ?>><?php the_field('header_banner_content'); ?></div>

        <?php } ?>
    <header id="masthead" class="site-header<?php if ( get_field( 'header_banner_content' ) ) { echo ' has-header-banner'; } ?>" role="banner">

	<?php if ( get_field( 'gdpr_cookies_message', 'option' ) ) { ?>
		<div class="gdpr-cookie-banner gdpr-hide"><?php the_field( 'gdpr_cookies_message', 'option' ); ?></div>
	<?php } ?>
		<div class="wrap">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->
		</div><!--.wrap-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

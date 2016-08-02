<?php 

// Callback function for updating header styles
function wpt_style_header() {

	$text_color = get_header_textcolor();

	?>

	<style type="text/css">

	#header .site-title a {
	color: #<?php echo esc_attr( $text_color ); ?>;
	}

	<?php if(display_header_text() != true): ?>
	.site-title, .site-description {
	display: none;
	} 
	<?php endif; ?>

	h1 {
	font-size: <?php echo get_theme_mod('wpt_h1_font_size'); ?>;
	}
	h1 a {
	color: <?php echo get_theme_mod('wpt_h1_color'); ?>;
	}

	<?php if( get_theme_mod('wpt_custom_css') != '' ) {
	echo get_theme_mod('wpt_custom_css');
	} ?>

	</style>
	<?php 

} ?>
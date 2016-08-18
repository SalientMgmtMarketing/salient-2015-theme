<?php
/**
 * Salient 2015 Theme Customizer
 *
 * @package Salient 2015
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function salient_2015_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	$wp_customize->add_panel('custom_logo', 
		array(
			'priority' => 10,
			'theme_supports' => '',
			'title' => __( 'Custom Logo', 'salient-2015' ),
			'description' => __( 'Provides a place for you to upload custom logo files.', 'salient-2015' )
		)
	);

	// Add Logo Section
	$wp_customize->add_section( 'logo' , array(
		'title'		=> __('Upload your logo','salient-2015'),
		'panel'		=> 'custom_logo',
		'priority' 	=> 20
	) );
	$wp_customize->add_setting( 'logo_svg', array(
		'default'	=> '',
		'transport'	=> 'postMessage'
	) );
	$wp_customize->add_setting( 'logo_raster', array(
		'default'	=> '',
		'transport'	=> 'postMessage'
	) );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'custom_logo_svg',
			array(
				'label'	=> __('Upload SVG Logo','salient-2015'),
				'section'	=> 'logo',
				'settings'	=> 'logo_svg',
				'context'	=> 'wpt-custom-logo-svg'
			)		
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'custom_logo_raster',
			array(
				'label'	=> __('Upload Raster Logo','salient-2015'),
				'section'	=> 'logo',
				'settings'	=> 'logo_raster',
				'context'	=> 'wpt-custom-logo-raster'
			)		
		)
	);	
}
add_action( 'customize_register', 'salient_2015_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function salient_2015_customize_preview_js() {
	wp_enqueue_script( 'salient_2015_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'salient_2015_customize_preview_js' );

function salient_2015_customizer_css() {
	?>
	<style type="text/css">
		<?php if ( get_theme_mod( 'logo_raster' ) ) : ?>
		header#masthead .wrap .site-branding .site-title {
			text-indent: -999999px;
			position: relative;
		}	
		header#masthead .wrap .site-branding .site-title a {	
			background-image: url('<?php echo esc_url( get_theme_mod( 'logo_raster' ) ); ?>');
			<?php if ( get_theme_mod( 'logo_svg' ) ) { ?>background-image: url('<?php echo esc_url( get_theme_mod( 'logo_svg' ) ); ?>');<?php } ?>
			position: absolute;
			background-repeat: no-repeat;
		}
		<?php endif; ?>
	</style>
<?php 
}
add_action ( 'wp_head', 'salient_2015_customizer_css' );

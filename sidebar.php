<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Salient
 */

// Checks to see if there is any content before even loading the aside tag.
if ( ! is_active_sidebar( 'primary-widget-area' )
	&& ! is_active_sidebar( 'solutions' )
	&& ! is_active_sidebar( 'services' )
	&& ! is_active_sidebar( 'technology' )
	&& ! is_active_sidebar( 'about' )
	&& ! is_active_sidebar( 'blog' )
	&& ! get_field( 'sidebar_image' )
	&& ! have_rows( 'sidebar_cta' )
) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar" role="complementary">
<?php
// Images and CTAs created to support case studies and brochures being converted to web pages.
if ( get_field( 'sidebar_image' ) ) {
	$image = get_field( 'sidebar_image' );
	?>
	<img class="sidebar-image" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>" />
	<?php
}
if ( have_rows( 'sidebar_cta' ) ) {
	$ctacount = 1;
	while ( have_rows( 'sidebar_cta' ) ) : the_row();
	?>

	<div class="sidebar-cta">
		<a class="privatelink button" href="#modal-cta-box<?php echo esc_html( $ctacount ); ?>" data-privlink="<?php echo esc_html( get_sub_field( 'converted_link' ) ); ?>" data-convertedcta="<?php echo esc_html( get_sub_field( 'converted_cta' ) ); ?>">
			<?php echo esc_html( get_sub_field( 'general_cta' ) ); ?>
		</a>
	</div>

	<?php if ( get_sub_field( 'modal_content' ) ) { ?>
		<div id="modal-cta-box<?php echo esc_html( $ctacount ); ?>" style="display: none;">
			<?php the_sub_field( 'modal_content' ); ?>
		</div>
	<?php } ?>

	<?php
		$ctacount = $ctacount++;
	endwhile; // while have_rows sidebar_cta.
}
?>

<?php
// Solutions Sidebar.
dynamic_sidebar( 'solutions' );

// Services Sidebar.
dynamic_sidebar( 'services' );


// Technology Sidebar.
dynamic_sidebar( 'technology' );

// About Sidebar.
dynamic_sidebar( 'about' );

// About Sidebar.
dynamic_sidebar( 'blog' );

// Global Sidebar.
dynamic_sidebar( 'primary-widget-area' );
?>
</aside><!-- #secondary -->
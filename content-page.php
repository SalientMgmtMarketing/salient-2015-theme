<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Salient 2015
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header hero" style="<?php if ( has_post_thumbnail())  {  
			echo "background-image:url('"; 
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'header', true);
			echo $thumb_url[0]; 
			echo "')";}
		?>">
		<div class="wrap">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
      <?php if ( get_field( 'color_overlay' ) ) { ?>
        <div class="overlay-<?php echo get_field('color_overlay_color'); ?>"></div>
      <?php } ?>
	</header><!-- .entry-header -->

	<div class="wrap">

		<div class="entry-content">
            
            <?php
            function my_password_form() {
                global $post;
                $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
                $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
                ' . __( "To access this page, please contact support for the password.
                 <br>Email: <a href=" . "mailto:support@salient.com" . ">support@salient.com</a>
                 <br>Tel: 607-739-5228 x206<br>
                 or via the chat button in the bottom right." ) . '
                <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
                </form>
                ';
                return $o;
            }
            add_filter( 'the_password_form', 'my_password_form' );
            ?>
            
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'salient-2015' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
        
        <?php get_sidebar(); ?>
	</div><!-- .wrap -->
	<?php if (is_admin()) { ?>
      <footer class="entry-footer">
          <?php edit_post_link( __( 'Edit', 'salient-2015' ), '<span class="edit-link">', '</span>' ); ?>
      </footer><!-- .entry-footer -->
    <?php } ?>
</article><!-- #post-## -->

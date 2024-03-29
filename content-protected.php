<?php
/**
 * The template used for displaying page content in page.php
 *
 * PHP Version 5
 *
 * @category Custom
 *
 * @package Salient
 *
 * @author Paul Stonier <pstonier@salient.com>
 *
 * @license All Rights Reserved https://en.wikipedia.org/wiki/All_rights_reserved
 *
 * @link https://pstonier@source.salient.com/scm/mwp/salient-brand.git
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header hero" style="<?php
		if (has_post_thumbnail()) {
				echo " background-image:url( '";
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id, 'header ', true);
				echo $thumb_url[0];
				echo "') ";
		}
		?>">
			<div class="wrap">
				<?php
				if ( function_exists( 'yoast_breadcrumb' ) ) {
						yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
				}
				?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
			<?php if ( get_field( 'color_overlay' ) ) { ?>
					<div class="overlay-<?php echo esc_html ( get_field( 'color_overlay_color' ) ); ?>"></div>
			<?php } ?>
		</header>
		<!-- .entry-header -->
		<div class="wrap">
			<div class="entry-content">
				<div id="password-gate">
					<p>To access this page, please contact support for the password.
						<br>Email: <a href="mailto:support@salient.com">support@salient.com</a>
						<br>Tel: 607-739-5228 x206
						<br> or via the chat button in the bottom right.</p>

					<form id="protected-form" class="protected-form" name="protectedform" action="#" method="POST">
						<span id="formerror" class="error"></span>
						<label for="password">Password</label>
						<input type="password" name="password" required placeholder />
						<button type="submit" name="submit" value="submit" class="protected-submit">Submit</button>
					</form>

				</div>

				<div id="hiddenContent" style="display:none;">
						<?php

						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'salient-2015' ),
								'after'  => '</div>',
							)
						);
						?>
				</div>
			</div>
			<!-- .entry-content -->
				<?php get_sidebar(); ?>
		</div>
		<!-- .wrap -->
		<?php	if ( is_admin() ) { ?>
			<footer class="entry-footer">
				<?php edit_post_link( __( 'Edit', 'salient-2015' ), '<span class="edit-link">', '</span>' ); ?> </footer>
			<!-- .entry-footer -->
		<?php } ?>
	</article>
	<!-- #post-## -->
<?php
/**
 * Template Name: Landing Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'landing-page' ); ?>

			<?php endwhile; // end of the loop. ?>
			<?php
			if ( isset( $_GET['email'] ) ) {
				$email_address = htmlspecialchars( wp_unslash( $_GET['email'] ) );
			}
			if ( isset( $email_address ) ) {
			?>
				<iframe src="https://www.msgapp.com/cs.aspx?ea=<?php echo $email_address ?>&rurl=https://<?php echo $_SERVER['SERVER_NAME']; ?>" style=”display:none;” width=”0” height=”0” tabindex=”-1”></iframe>
			<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

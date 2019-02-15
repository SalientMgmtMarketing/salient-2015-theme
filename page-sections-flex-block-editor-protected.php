<?php
/**
 * Template Name: sections - Flexible Content Block Editor - Protected 
 */

?>
<?php get_header( 'boxy' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while (
				have_posts() ) :
					the_post();
			?>
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
					<?php the_content(); ?>
					<?php if ( have_rows( 'sections-flex' ) ) : ?>

						<?php
						while (
							have_rows( 'sections-flex' ) ) :
								the_row();
						?>

							<?php get_template_part( 'templates/flexible-content', 'content-blocks' ); ?>

							<?php get_template_part( 'templates/flexible-content', 'gallery' ); ?>

							<?php get_template_part( 'templates/flexible-content', 'blockquote' ); ?>

							<?php get_template_part( 'templates/flexible-content', 'testimonials' ); ?>

						<?php endwhile; ?>

					<?php endif; //has_rows( 'sections-flex' )

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'salient-2015' ),
								'after'  => '</div>',
							)
						);
						?>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

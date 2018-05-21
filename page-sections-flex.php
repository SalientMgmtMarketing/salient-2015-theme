<?php
/**
Template Name: sections - Flexible Content
 *
 * @package Salient
 */

get_header( 'boxy' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			// If this is the homepage, don't load the page header.
			if ( ! is_front_page() ) {
			?>

				<?php $parallax_bg = get_sub_field( 'parallax_background' ); ?>

				<header class="entry-header hero<?php header_color_overlay(); ?>"
				<?php
				if ( has_post_thumbnail() && ! $parallax_bg ) {
				?>
				style="<?php get_template_part( '/templates/featured','background-image-inline' ); ?>"<?php } ?>>

					<?php if ( has_post_thumbnail() && $parallax_bg ) { ?>
						<div class="bkg"style="<?php get_template_part( '/templates/featured','background-image-inline' ); ?>"></div>
					<?php } ?>
					<div class="wrap">

						<?php
						// If Yoast > Advanced > Enable Breadcrumb is checked, loads breakcrumbs on page.
						if ( function_exists( 'yoast_breadcrumb' ) ) {
							yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
						?>

						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					</div><!--.wrap-->


					<?php

					// START OF FLEXIBLE CONTENT SECTION OF THE HEADER.
					// Starts the loop for page content.
					while ( have_posts() ) :
						the_post();

						// Checks for content in the Custom Fields Group "Sections Flex Header".
						if ( have_rows( 'sections-flex-header' ) ) :

							// If "Sections Flex Header" has content, runs the loop.
							while ( have_rows( 'sections-flex-header' ) ) :
								the_row();

								get_template_part( 'templates/flexible-content','content-blocks' );
								get_template_part( 'templates/flexible-content','gallery' );
								get_template_part( 'templates/flexible-content','blockquote' );

								endwhile; // have_rows('sections-flex-header').
							endif; // have_rows('sections-flex-header').
						endwhile; // end of the posts loop.
						?>

				</header><!-- .entry-header -->

			<?php
			} // !front_page

			while ( have_posts() ) :
				the_post();

				if ( have_rows( 'sections-flex' ) ) :

					while ( have_rows( 'sections-flex' ) ) :
						the_row();

						get_template_part( 'templates/flexible-content','content-blocks' );
						get_template_part( 'templates/flexible-content','gallery' );
						get_template_part( 'templates/flexible-content','blockquote' );

					endwhile;
				endif; // has_rows('sections-flex').
			endwhile; // end of the loop.
			?>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>

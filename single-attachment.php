<?php
/**
 * The template for displaying all single posts.
 *
 * @package Salient
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>
	<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<div class="wrap">
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer(); ?>

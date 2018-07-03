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
			<div class="wrap">
				<?php salient_2015_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			</div><!--.wrap-->
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div class="wrap">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

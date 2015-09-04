<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Salient 2015
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<div class="ones">
			<div class="one-wide"></div>
			<div class="one-wide"></div>
			<div class="one-wide"></div>
			<div class="one-wide"></div>
			<div class="one-wide"></div>
			<div class="one-wide"></div>
			<div class="one-wide"></div>
			<div class="one-wide"></div>
			<div class="one-wide"></div>
			<div class="one-wide"></div>
			<div class="one-wide"></div>
			<div class="one-wide"></div>
		</div>
		<div class="twos">
			<div class="two-wide"></div>
			<div class="two-wide"></div>
		</div>
		<div class="fours">
			<div class="four-wide"></div>
			<div class="four-wide"></div>
			<div class="four-wide"></div>
		</div>
		
		<div class="threes">
			<div class="three-wide"></div>
			<div class="three-wide"></div>
			<div class="three-wide"></div>
			<div class="three-wide"></div>
		</div>
		
		<div class="split-gf">
			<div class="two-thirds"></div>
			<div class="one-third"></div>
		</div>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php salient_2015_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

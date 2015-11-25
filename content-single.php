<?php
/**
 * @package Salient 2015
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header hero">
      <div class="wrap">
        <?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta byline">
			<?php salient_2015_posted_on(); ?>
		</div><!-- .entry-meta -->
      </div><!--.wrap-->
	</header><!-- .entry-header -->
    <div class="wrap">
      <div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'salient-2015' ),
				'after'  => '</div>',
			) );
		?>
      </div><!-- .entry-content -->

      <footer class="entry-footer">
          <?php salient_2015_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </div><!--.wrap-->
</article><!-- #post-## -->

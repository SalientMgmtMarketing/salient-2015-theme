<?php
/**
 * @package Salient 2015
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="wrap">
    <div class="thumbnail">
      <?php 
      // Get the featured image, if there is one.
      if ( has_post_thumbnail()) { 
        echo get_the_post_thumbnail( '', 'blog-feed' ); 
      } ?>
    </div>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_excerpt( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'salient-2015' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'salient-2015' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php salient_2015_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</footer><!-- .entry-footer -->
    </div><!--.wrap-->
</article><!-- #post-## -->
<?php
/**
 * Template part for displaying single posts.
 *
 * @package Southeast Steuben County Library
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php sscl_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
      <div class="post-thumbnail-wrap">
        <?php if(wp_attachment_is_image($post->id)) : $att_image = wp_get_attachment_image_src($post->id, "full"); ?>
          <p class="attachment"><a class="show_image" href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php echo get_the_title(); ?>"><img class="img-responsive attachment-medium" src="<?php echo $att_image[0]; ?>" height="<?php echo $att_image[2];?>" width="<?php echo $att_image[1];?>" alt="<?php echo get_the_title(); ?>"></a></p>
        <?php else : ?>
            <a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo esc_html( get_the_title($post->ID), 1 ) ?>"><?php echo basename($post->guid) ?></a>
        <?php endif; ?>
      </div><!--.post-thumbnail-->
        
        <?php if ( has_excerpt() ) : ?>
        <div class="entry-caption">
            <?php the_excerpt(); ?>
        </div><!-- .entry-caption -->
        <?php endif; ?>
        
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sscl' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sscl_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
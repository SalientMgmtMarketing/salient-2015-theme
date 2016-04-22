<?php
/**
 * @package Salient 2015
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header hero" 
			<?php if ( get_field('hero-image')) {  
				echo "style=\"background-image:url('"; 
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
				echo $thumb_url[0]; 
				echo "')";
			}
		?>>
      <div class="wrap">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta byline">
			<?php salient_2015_posted_on(); ?>
		</div><!-- .entry-meta -->
      </div><!--.wrap-->
	</header><!-- .entry-header -->
    <div class="wrap">
      <div class="entry-content">

        <?php 
        // Get the featured image, if there is one.
        if ( has_post_thumbnail()) { ?>
          <div class="featured-image">
              <?php echo get_the_post_thumbnail( '', 'blog-feed' ); ?>
          </div><!--.featured-image-->
        <?php } ?>
        
		<div class="text-block"><?php the_content(); ?></div>
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

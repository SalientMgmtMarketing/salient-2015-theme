<?php
/**
 * @package Salient 2015
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header hero" 
			<?php if ( get_field('hero_image')) { ?> 
				style="background-image:url('<?php 
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
				echo $thumb_url[0]; 
              ?>');"<?php
			}
		?>>
      <div class="wrap">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
        <div class="category-link">
          <?php 
          $categories = get_the_category();
          if ( ! empty( $categories ) ) {
            echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
          } ?> 
        </div><!--.category-link-->
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php if ( get_field('byline_in_header')) { ?>
          <div class="entry-meta byline">
              <?php salient_2015_posted_on(); ?>
          </div><!-- .entry-meta -->
        <?php } ?>
        
      </div><!--.wrap-->
	</header><!-- .entry-header -->
    <div class="wrap">
      <div class="entry-content">

        <?php 
        // Get the featured image, if there is one.
        if ( has_post_thumbnail() && !get_field('hero_image')) { ?>
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
          <?php if ( !get_field('byline_in_header')) { ?>
            <div class="entry-meta byline">
                <?php salient_2015_posted_on(); ?>
            </div><!-- .entry-meta -->
          <?php } ?>
      </footer><!-- .entry-footer -->
    </div><!--.wrap-->
</article><!-- #post-## -->

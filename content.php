<?php
/**
 * PHP Version 5
 *
 * @category Custom
 *
 * @package Salient
 *
 * @author Paul Stonier <pstonier@salient.com>
 *
 * @license All Rights Reserved https://en.wikipedia.org/wiki/All_rights_reserved
 *
 * @link https://pstonier@source.salient.com/scm/mwp/salient-brand.git
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="thumbnail">
      <?php 
      // Get the featured image, if there is one.
      if ( has_post_thumbnail()) { 
        echo '<a href="' . esc_url(get_permalink()) . '">' . get_the_post_thumbnail( '', 'blog-feed' ) . '</a>'; 
      } ?>
    </div>
    <header class="entry-header">
      
      <div class="category-link">
        <?php 
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
          echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
        } ?> 
      </div><!--.category-link-->
      
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
    <?php if (get_theme_mod('postmeta_in_feed')) { ?>
        <footer class="entry-footer">
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php salient_2015_posted_on(); ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </footer><!-- .entry-footer -->
    <?php } ?>

</article><!-- #post-## -->
<?php
/**
 * The template used for displaying page content in page.php
 *
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
    <header class="entry-header hero" style="<?php if ( has_post_thumbnail())  {
            echo "background-image:url('"; 
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'header', true);
            echo $thumb_url[0]; 
            echo "')";}
        ?>">
        <div class="wrap">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
      <?php if ( get_field( 'color_overlay' ) ) { ?>
        <div class="overlay-<?php echo get_field('color_overlay_color'); ?>"></div>
      <?php } ?>
    </header><!-- .entry-header -->

    <div class="wrap">

        <div class="entry-content">
            <?php get_template_part('templates/resource-library', 'resource-groups'); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'salient-2015' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        
        <?php get_sidebar(); ?>
    </div><!-- .wrap -->
    <?php if (is_admin()) { ?>
      <footer class="entry-footer">
          <?php edit_post_link( __( 'Edit', 'salient-2015' ), '<span class="edit-link">', '</span>' ); ?>
      </footer><!-- .entry-footer -->
    <?php } ?>
</article><!-- #post-## -->

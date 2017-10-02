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
        <?php
          if( have_rows('resource_group') ) :
            while( have_rows('resource_group') ) : the_row(); 
            $resourceType = get_sub_field('resource_group_singular');
        ?>

              <div class="resource-group">

                <?php 
                if ( get_sub_field('resource_group_title') ) 
                  { ?>

                    <h2 class="resource-group-title"><?php echo get_sub_field('resource_group_title');?></h2>

                <?php 
                  } ?>

              <?php 
                if( have_rows('resource') ) : 
                  while( have_rows('resource') ) : the_row();
              ?>
                    <div class="resource">
                      <a href="<?php echo get_sub_field('resource_link'); ?>" title="<?php get_sub_field('resource_button'); ?>" class="resource-title-link"><h3 class="resource-title"><?php echo get_sub_field('resource_title'); ?></h3></a>
                      <div class="resource-description">

                        <?php 
                        if ( get_sub_field('resource_description') ) {
                          echo get_sub_field('resource_description'); 
                        } 

                        ?>
                        <a href="<?php echo get_sub_field('resource_link'); ?>" title="<?php get_sub_field('resource_button'); ?>" class="resource-button-link btn">Download the<span class="screen-reader-text"> <?php echo get_sub_field('resource_button'); ?></span> <?php if( $resourceType ) 
                          { 
                            echo " " . $resourceType;
                          } 
                          else 
                            { ?> Resource<?php } ?></a>
                      </div><!--.resource-description-->

                      <div class="resource-image">

                        <?php 

                        $image = get_sub_field('resource_image');

                        if( !empty($image) ) { ?>

                        <a href="<?php echo get_sub_field('resource_link'); ?>" title="<?php get_sub_field('resource_button'); ?>" class="resource-image-link"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

                        <?php } ?>

                      </div><!--.resource-image-->
                    </div><!--.resource-->
        <?php
                  endwhile;
                endif;
                ?>
                </div><!--.resource-group-->
                <?php
            endwhile;
          endif;
        ?>

     </div><!-- .entry-content -->
    </div><!-- .wrap -->
    <?php if (is_admin()) { ?>
      <footer class="entry-footer">
          <?php edit_post_link( __( 'Edit', 'salient-2015' ), '<span class="edit-link">', '</span>' ); ?>
      </footer><!-- .entry-footer -->
    <?php } ?>
</article><!-- #post-## -->
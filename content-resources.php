<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Salient 2015
 */
?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="landing-page-hero" style="<?php if ( has_post_thumbnail())  {  
			echo " background-image:url( '"; 
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'full ', true);
			echo $thumb_url[0]; 
			echo "') ";}
		?>">

      <header class="entry-header">
        <div class="wrap">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div><!--.wrap-->
      </header>
      <!-- .entry-header -->

    
    </section>
    <!--.landing-page-hero-->

    <div class="entry-content wrap">
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

    </div>
    <!-- .entry-content -->



    <footer class="entry-footer">
      <?php edit_post_link( __( 'Edit', 'salient-2015' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>
    <!-- .entry-footer -->
  </article>
  <!-- #post-## -->
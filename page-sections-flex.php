<?php
/*
Template Name: sections - Flexible Content
*/

get_header('boxy'); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php if ( is_front_page() ) { putRevSlider('homepage-hero', 'homepage'); } ?>
      
      <?php while ( have_posts() ) : the_post(); ?>

        <?php if( have_rows('section') ): ?>

          <?php while( have_rows('section') ): the_row(); ?>

            <section <?php if( get_sub_field('section_id') ): ?> id="<?php the_sub_field('section_id'); ?>" <?php endif; ?> class="row section-a <?php 
                //adds the class for the selection type
                $value = get_sub_field('section_type');
                echo $value;

                //adds class for background-attachment:fixed
                if( get_field('fixed') )
                {
                    echo " fixed";
                }
                //adds class for background-size:cover
                if( get_field('background_autofill_width') )
                {
                    echo " cover";
                }
                //adds class for box
                if( get_sub_field('boxed_content'))
                {
                  echo " boxed";
                } ?>" style="background-image:url('<?php the_sub_field('background_image'); ?>');background-color:<?php the_sub_field('background_color'); ?>"> 
              
              <div class="wrap above-fixed">
                <?php if( get_sub_field('section_title') ): ?>
                  <h2 class="section-title"><?php the_sub_field('section_title'); ?></h2>
                <?php endif; ?>
                
                  <div class="sub-section0<?php 

                      //adds class for box
                      if( get_sub_field('boxed_content') && ( get_sub_field('section_content' )))
                      {
                          echo " boxed";
                      } ?>">
                
                    <?php the_sub_field('section_content'); ?>
                
                  </div><!--.sub-section0-->
                    
                <?php if( get_sub_field('section_type') == "two-column-5050") : ?>
                  <div class="sub-section1<?php 

                      //adds class for box
                      if( get_sub_field('boxed_content') && ( get_sub_field('subsection_1' )))
                      {
                          echo " boxed";
                      } ?>">
                      <?php the_sub_field('subsection_1'); ?>
                    </div><!--.sub-section1-->
                <?php endif; ?>
                  
                <?php if( get_sub_field('section_type') == "two-column-6733") : ?>
                  <div class="sub-section1<?php 

                      //adds class for box
                      if( get_sub_field('boxed_content') && ( get_sub_field('subsection_1' ) ) )
                      {
                          echo " boxed";
                      } ?>">
                    <?php the_sub_field('subsection_1'); ?>
                  </div><!--.sub-section1-->
                <?php endif; ?>
                <?php if( get_sub_field('section_type') == "two-column-75-25") : ?>
                  <div class="sub-section1<?php 

                      //adds class for box
                      if( get_sub_field('boxed_content') && ( get_sub_field('subsection_1' ) ) )
                      {
                          echo " boxed";
                      } ?>">
                    <?php the_sub_field('subsection_1'); ?>
                  </div><!--.sub-section1-->
                <?php endif; ?>
                <?php if( get_sub_field('section_type') == "three-column-33-33-33") : ?>
                  <div class="sub-section1<?php 

                      //adds class for box
                      if( get_sub_field('boxed_content') && ( get_sub_field('subsection_1') ) )
                      {
                          echo " boxed";
                      } ?>">
                    <?php the_sub_field('subsection_1'); ?>
                  </div><!--.sub-section1-->
                <?php endif; ?>
              
                <?php if( get_sub_field('section_type') == "three-column-25-75-25") : ?>
                  <div class="sub-section1<?php 

                      //adds class for box
                      if( get_sub_field('boxed_content') && ( get_sub_field('subsection_1') ) )
                      {
                          echo " boxed";
                      } ?>">
                    <?php the_sub_field('subsection_1'); ?>
                  </div><!--.sub-section1-->
                <?php endif; ?>
                
                  
                <?php if( get_sub_field('section_type') == "three-column-33-33-33") :?>  
                  <div class="sub-section2<?php 

                      //adds class for box
                      if( get_sub_field('boxed_content') && ( get_sub_field('subsection_2' ) ) )
                      {
                          echo " boxed";
                      } ?>">
                    <?php the_sub_field('subsection_2'); ?>
                  </div><!--.sub-section2-->
                <?php endif; ?>
                
                <?php if( get_sub_field('section_type') == "three-column-25-50-25") : ?>
                  <div class="sub-section2<?php 

                      //adds class for box
                      if( get_sub_field('boxed_content') && ( get_sub_field('subsection_2' ) ) )
                      {
                          echo " boxed";
                      } ?>">
                    <?php the_sub_field('subsection_2'); ?>
                  </div><!--.sub-section2-->
                <?php endif; ?>    
              
              </div><!--.wrap-->
            
            </section>
            <!-- #intro -->
            
          <?php endwhile; ?>

        <?php endif; ?>
        
      <?php endwhile; // end of the loop. ?>

    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->
  <?php get_footer(); ?>
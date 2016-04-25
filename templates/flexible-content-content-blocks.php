<?php 

  //CONTENT-BLOCK LAYOUT
  if(  get_row_layout() == 'content-blocks'): ?>

  <section <?php if( get_sub_field( 'section_id') ) { ?> id="
    <?php the_sub_field('section_id'); ?>"
      <?php } ?> class="row<?php   

        //adds the class for the text color
        $color = get_sub_field('text_color');
        echo " " . $color;

        //adds class for background-attachment:fixed
        if( get_sub_field('fixed') ) { echo " fixed"; }

        //adds class for box
        if( get_sub_field('boxed_content')) { echo " boxed"; }

        //adds class for cards
        if( get_sub_field('cards')) { echo " cards"; }
 
        ?>" style="<?php if (get_sub_field('background_image') && !get_sub_field('parallax_bg')) { ?> background-image:url('<?php the_sub_field('background_image'); ?>');<?php } ?>

          <?php if (get_sub_field('background_color')) { ?>background-color: <?php the_sub_field('background_color'); } ?>">

          <?php if( get_sub_field('section_title') ): ?>
            <h2 class="section-title wrap"><?php the_sub_field('section_title'); ?></h2>
          <?php endif; ?>

          <div class="wrap <?php 
            
            //adds the class for the selection type
            $value = get_sub_field('columns');
            echo " cols- " . $value; 
                          
            //adds class for column layout
            if( $value=='two') { echo " "; the_sub_field('2_column_layout'); }
            if( $value=='three') { echo " "; the_sub_field('3_column_layout'); }
          ?>">


          <div class="sub-section0<?php 
            
            // COLUMN ONE
            
            //adds class for box
            $selected = get_sub_field('boxed_content');
            if( is_array($selected) && in_array('col-1', $selected) ) { echo " boxed "; }

            //adds class for cards
            if( get_sub_field('cards')) { echo " card "; }

          ?>">

            <?php 
            
            $image = get_sub_field('column_1_photo');
            $size = 'cards-5x2';
            $thumb = $image['sizes'][ $size ];
            
            if( $value=='two') { $size = 'cards-5x2'; }
            if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }

            if( get_sub_field('cards')) { ?>
            
              <div class="card-thumb">
                <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
              </div><!--.card-thumb-->
              <div class="card-content">
            <?php } ?>

                <?php the_sub_field('column_1'); ?>

                <?php if( get_sub_field('cards')) { ?>
                  </div>
                <?php } ?>

              </div>
              <!--.sub-section0-->


              <?php 
              // COLUMN TWO
            
              if ( get_sub_field ('columns') !== 'one') { ?>

                <div class="sub-section1<?php 

                  //adds class for box
                  $selected = get_sub_field('boxed_content');
                  if( is_array($selected) && in_array('col-2', $selected) ) {

                    echo " boxed ";

                  }
                 
                  //adds class for cards
                  if( get_sub_field('cards')) { echo " card "; }
	
                ?>">
                
                <?php 
                $image = get_sub_field('column_2_photo');
                $thumb = $image['sizes'][ $size ];
                
                if( $value=='two') { $size = 'cards-5x2'; }
                if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }


                if( get_sub_field('cards')) { ?>
                  
                  <div class="card-thumb">
                    <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
                  </div><!--.card-thumb-->
                <?php  }
                
                //adds class for cards
                if( get_sub_field('cards')) { ?>
                  <div class="card-content">
                <?php } ?>

                <?php the_sub_field('column_2'); ?>

                <?php  
                
                //adds class for cards
                if( get_sub_field('cards')) { ?>
                  </div><!--.card-content-->
                <?php } ?>

              </div><!--.sub-section1-->

            <?php } ?>

            <?php 
            
            // COLUMN THREE
            
            $columns = get_sub_field ('columns');
            
            if ( $columns == ( 'three' ) || $columns == ( 'four' ) ) { ?>

              <div class="sub-section2<?php 

                //adds class for box
                $selected = get_sub_field('boxed_content');
                if( is_array($selected) && in_array('col-3', $selected) ) {
                
                  echo " boxed ";

                }

                //adds class for cards
                if( get_sub_field('cards')) { 

                  echo " card "; 

                }

              ?>">
              <?php 
                
              $image = get_sub_field('column_3_photo');
              $thumb = $image['sizes'][ $size ];
                
              if( $value=='two') { $size = 'cards-5x2'; }
              if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }


              if( get_sub_field('cards')) { ?>
                <div class="card-thumb">
                  <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
                </div><!--.card-thumb-->
                <div class="card-content">
              <?php } ?>

              <?php the_sub_field('column_3'); ?>

              <?php  
              //adds class for cards
              if( get_sub_field('cards')) { ?>
                </div><!--.card-content-->
              <?php } ?>

              </div><!--.sub-section2-->
            <?php } ?>


            <?php
            
              // COLUMN FOUR
            
              if ( get_sub_field ('columns') == 'four') { ?>
              <div class="sub-section3<?php 

                //adds class for box
                $selected = get_sub_field('boxed_content');
                if( is_array($selected) && in_array('col-4', $selected) ) {
                    echo " boxed ";
                }

                //adds class for cards
                if( get_sub_field('cards')) { echo " card "; }

              ?>">
              
                <?php 
                $image = get_sub_field('column_4_photo');
                $thumb = $image['sizes'][ $size ];
                if( $value =='two' ) { $size = 'cards-5x2'; }
                if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }


                if( get_sub_field('cards')) { ?>
                  <div class="card-thumb">
                    <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
                  </div><!--.card-thumb-->
                  <div class="card-content">
                <?php } ?>

                <?php the_sub_field('column_4'); ?>

                <?php  
                //adds class for cards
                if( get_sub_field('cards')) { ?>
                  </div><!--.card-content-->
                <?php } ?>

              </div><!--.sub-section3-->
            <?php } ?>
          </div><!--.wrap-->

  </section>
  <!-- #intro -->
  <?php endif; ?>
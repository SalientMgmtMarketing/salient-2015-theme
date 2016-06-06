<?php 

  //CONTENT-BLOCK LAYOUT
  if(  get_row_layout() == 'content-blocks'): ?>

  <section <?php if( get_sub_field( 'section_id') ) { ?> id="<?php the_sub_field('section_id'); ?>"
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
 
        ?>" style="<?php if (get_sub_field('background_image') && !get_sub_field('parallax_background')) { ?> background-image:url('<?php the_sub_field('background_image'); ?>');<?php } ?>

          <?php if (get_sub_field('background_color')) { ?>background-color: <?php the_sub_field('background_color'); } ?>">
          
          <?php if (get_sub_field('background_image') && get_sub_field('parallax_background')) { ?>
            <div class="bkg" style="background-image:url('<?php the_sub_field('background_image'); ?>');"></div><!--.bkg-->
          <?php } ?>
    
          <?php if( get_sub_field('section_title') ): ?>
            <h2 class="section-title wrap"><?php the_sub_field('section_title'); ?></h2>
          <?php endif; ?>

          <div class="wrap<?php 
            
            //adds the class for the selection type
            $value = get_sub_field('columns');
            echo " cols-" . $value; 
                          
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

            if( get_sub_field('cards')) { 
            
              if( $value=='two') { $size = 'cards-5x2'; }
              if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }

              $image = get_sub_field('column_1_photo');
              $thumb = $image['sizes'][ $size ]; ?>
            
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
                if( get_sub_field('cards')) { 
                  
                  if( $value=='two') { $size = 'cards-5x2'; }
                  if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }

                  $image = get_sub_field('column_2_photo');
                  $thumb = $image['sizes'][ $size ]; ?>
                  
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

              if( get_sub_field('cards')) { 
                
                if( $value=='two') { $size = 'cards-5x2'; }
                if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }

                $image = get_sub_field('column_3_photo');
                $thumb = $image['sizes'][ $size ];?>
                
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
                if( get_sub_field('cards')) {

                  if( $value =='two' ) { $size = 'cards-5x2'; }
                  if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }

                  $image = get_sub_field('column_4_photo');
                  $thumb = $image['sizes'][ $size ]; ?>

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

    

        <?php 
    
          $rows = get_sub_field('panels');
          $row_count = count($rows);

          if ( have_rows('sub_slides') ): ?>
          
          <?php while ( have_rows('sub_slides') ): the_row(); ?>
    
            <?php  if( get_row_layout() == 'sub_slide_single'): ?>
              <div class="slides-container">

                <div class="sub-slide">
                  <h3 class="sub-slide-title"><?php echo get_sub_field('slide_title'); ?></h3>
                  <?php echo get_sub_field('slide_content'); ?>
                </div><!--.sub-slide -->
              <button class="close-btn"><span class="screen-reader-text">Return to main content</span><span class="aria-hidden" aria-hidden="true" data-slide="slide-close"><svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><title>Return to Home Screen</title><g class="close-svg"><g><path d="M34.45 25l25.888 25h-20.154l-25.888-25h20.154zM34.331 75l25.888-25h-20.154l-25.888 25h20.154z" id="Combined-Shape"/></g><g><path d="M66.55 25l-25.888 25h20.154l25.888-25h-20.154zM66.669 75l-25.888-25h20.154l25.888 25h-20.154z"/></g></g></svg></span></button>
              </div><!--.slide-container-->

            <?php endif; // layout = sub_slide_single ?>

    
            <?php  if( get_row_layout() == 'sub_slide_multi'): ?>

              <div class="slides-container multi">
        
                  <?php if (get_sub_field('slide_title')) { ?>
                    <h2 class="sub-slide-title"><?php echo get_sub_field('slide_title'); ?></h2>
                  <?php } ?>
                
                  <nav class="slides-nav" aria-label="slides navigation">
                    <ul>
                      <?php 
                        while ( have_rows('panels') ) : the_row();
                      ?>
                      <li><a href="#sub-slide" data-panel="<?php echo get_sub_field('panel_class'); ?>"><?php echo get_sub_field('panel_title'); ?></a></li>
                      <?php endwhile; // panels ?>
                    </ul>
                  </nav>
                



            
            <?php 
              while ( have_rows('panels') ) : the_row();
            ?>
              <div class="sub-slide<?php if ( get_sub_field('panel_class') ) 
                { 
                  echo " " . get_sub_field('panel_class'); 
                } ?>" 

                <?php if ( get_sub_field('panel_background_image') ) 
                { ?> style="background-image: url('<?php 

                    echo get_sub_field('panel_background_image'); 

                    ?>');"<?php 
                } ?>>
                <?php echo get_sub_field('panel_content'); ?>
              </div>
          <?php 
            endwhile; //panels ?>

          <button class="close-btn" data-slide="slide-close"><span class="screen-reader-text">Return to main content</span><span class="aria-hidden" aria-hidden="true"><svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><title>Return to Home Screen</title><g class="close-svg"><g><path d="M34.45 25l25.888 25h-20.154l-25.888-25h20.154zM34.331 75l25.888-25h-20.154l-25.888 25h20.154z" id="Combined-Shape"/></g><g><path d="M66.55 25l-25.888 25h20.154l25.888-25h-20.154zM66.669 75l-25.888-25h20.154l25.888 25h-20.154z"/></g></g></svg></span></button>
        </div><!--.slides-container-->
      <?php endif; //sub_slide_multi ?>
      <?php
        endwhile; //sub_slides
      endif; // sub_slide_parent
    ?>
  </section>
  <!-- #intro -->
  <?php endif; ?>
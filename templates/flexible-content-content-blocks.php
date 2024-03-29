<?php 

  //CONTENT-BLOCK LAYOUT
  if( get_row_layout() == 'content-blocks') { ?>

  <section <?php if( get_sub_field( 'section_id') ) { ?> id="<?php the_sub_field('section_id'); ?>"
      <?php } ?> class="row<?php   

        //adds section classes
        if( get_sub_field( 'section_classes' ) ) { echo " " . get_sub_field( 'section_classes' ); }

        //adds the class for the text color
        $color = get_sub_field('text_color');
        echo " " . $color;

        //adds class for background-attachment:fixed
        if( get_sub_field('fixed') ) { echo " fixed"; }

        //adds class for box
        if( get_sub_field('boxed_content')) { echo " boxed"; }

        //adds class for cards
        if( get_sub_field('cards')) { echo " cards"; }

        if ( get_sub_field('left_side_image') ) { echo " hasLeftImage"; }
        if ( get_sub_field('right_side_image') ) { echo " hasRightImage"; }

        ?>" style="<?php if ( get_sub_field('background_image') && !get_sub_field('parallax_background') ) { ?> background-image:url('<?php the_sub_field('background_image'); ?>');<?php } ?>

          <?php if ( get_sub_field('background_color') ) { ?>background-color: <?php the_sub_field('background_color'); } ?>">
          
          <?php if ( get_sub_field('background_image') && get_sub_field('parallax_background') ) { ?>
            <div class="bkg" style="background-image:url('<?php the_sub_field('background_image'); ?>');"></div><!--.bkg-->
          <?php } ?>
    
          <?php if( get_sub_field('section_title') ) { ?>
            <h2 class="section-title wrap<?php if( get_sub_field('title_centered') ) { echo " centered";  } ?>"><?php the_sub_field('section_title'); ?></h2>
          <?php } ?>

          <!-- div.wrap -->
          <div class="wrap<?php 
            
            //adds the class for the selection type
            $value = get_sub_field( 'columns' );
            echo " cols-" . $value; 
                          
            //adds class for column layout
            if( $value=='two' ) { echo " "; the_sub_field( '2_column_layout' ); }
            if( $value=='three' ) { echo " "; the_sub_field( '3_column_layout' ); }
          ?>">


          <div class="sub-section0<?php 
            
            // COLUMN ONE
            
            // adds class for box
            $selected = get_sub_field( 'boxed_content' );
            if( is_array($selected) && in_array( 'col-1', $selected ) ) { echo " boxed "; }

            // adds class for cards
            if( get_sub_field( 'cards' ) ) { echo " card "; }
            
            // adds column class
            if( get_sub_field( 'column_1_class' ) ) { echo " " . get_sub_field( 'column_1_class' ); }

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

                // adds column class
                if( get_sub_field( 'column_2_class' ) ) { echo get_sub_field( 'column_2_class' ); }

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
                if( is_array( $selected ) && in_array( 'col-3', $selected ) ) {
                  echo " boxed ";
                }

                //adds class for cards
                if( get_sub_field('cards')) { 
                  echo " card ";
                }

                // adds column class
                if( get_sub_field( 'column_3_class' ) ) { echo get_sub_field( 'column_3_class' ); }

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

                // adds column class
                if( get_sub_field( 'column_4_class' ) ) { echo get_sub_field( 'column_4_class' ); }

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
            
            <?php if ( get_sub_field('sub_slides') ) { ?>
              <a href="#next" class="next-slide" data-slide="slide-1">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="46.2" height="100" viewBox="0 0 46.2 100" xml:space="preserve">
                  <defs>
                  </defs>
                  <g>
                    <path d="M20.3,0l25.9,50H26L0.1,0H20.3z M20.2,100L46,50H25.9L0,100H20.2z"/>
                  </g>
                </svg>
              </a>
            <?php } ?>
          </div><!--.wrap-->
    
    
          <?php 
          // LEFT SIDE IMAGE - Used as an image to fill the right side of the section while not restricted by the width of the grid
          if ( get_sub_field('left_side_image') ) { 
            $image = get_sub_field('left_side_image');
            $img_src = wp_get_attachment_image_url( $image['id'], 'full' );
            $img_srcset = wp_get_attachment_image_srcset( $image['id'], 'full' );   
          ?>
          
            <div class="left-image" <?php sideImageAsBackgroundLeft(); ?>>
              <?php /* <img src="<?php echo esc_url( $img_src ); ?>"
                width = "<?php echo $image['sizes']['full']; ?>"
                height = "<?php echo $image['sizes']['full']; ?>"
                srcset="<?php echo esc_attr( $img_srcset ); ?>"
                sizes="(max-width: 100vw) 480px" alt="<?php echo $image['alt']; ?>" /> */ ?>
            </div><!--.left-image-->
          <?php } ?>
    
          <?php 
          // RIGHT SIDE IMAGE - Used as an image to fill the right side of the section while not restricted by the width of the grid
          if ( get_sub_field('right_side_image') ) { 
            $image = get_sub_field('right_side_image');
            $img_src = wp_get_attachment_image_url( $image['id'], 'full' );
            $img_srcset = wp_get_attachment_image_srcset( $image['id'], 'full' ); ?>

            <div class="right-image" <?php sideImageAsBackgroundRight(); ?>>
            </div><!--.right-image-->
          <?php } ?>
    
          <?php if ( get_sub_field('menu') ) { 
            $menu = get_sub_field('menu');
          ?>
            <div class="inline-navigation-container">
              <nav class="wrap" aria-label="<?php echo $menu ?> navigation">
                  <?php wp_nav_menu( array( 'menu' => $menu, 'container_class' => 'menu-wrap' ) ); ?>
              </nav><!--.secondary-navigation-->
            </div><!--.secondary-navigation-container-->
          <?php } ?>

        <?php get_template_part('templates/flexible-content','sub-slides'); ?>
  </section>
  <!-- #intro -->
  <?php } ?>
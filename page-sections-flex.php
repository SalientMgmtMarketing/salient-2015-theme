<?php
/*
Template Name: sections - Flexible Content
*/

get_header('boxy'); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php if ( !is_front_page() ) { ?>
        
        <header class="entry-header hero" style=" <?php if ( has_post_thumbnail())  {  
            echo "background-image:url('"; 
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
            echo $thumb_url[0]; 
            echo "')";}
          ?>">
          <div class="wrap">
            <?php if ( function_exists('yoast_breadcrumb') ) 
  {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </div>
          <?php while ( have_posts() ) : the_post(); ?>

        <?php if( have_rows('sections-flex-header') ): ?>

        <?php while( have_rows('sections-flex-header') ): the_row(); ?>
        
        <?php 

          //CONTENT-BLOCK LAYOUT
          if(  get_row_layout() == 'content-blocks'): ?>
    
            <div <?php if( get_sub_field( 'section_id') ) { ?> id="<?php the_sub_field('section_id'); ?>"
                <?php } ?> class="row
                  <?php   


                    
                    //adds the class for the text color
                    $color = get_sub_field('text_color');
                    echo $color;

                    //adds class for background-attachment:fixed
                    if( get_sub_field('fixed') ) { echo " fixed"; }

                    //adds class for box
                    if( get_sub_field('boxed_content')) { echo " boxed"; }

                    //adds class for cards
                    if( get_sub_field('cards')) { echo " cards"; }

                                  
                    //adds class for column layout
                    if( $value=='two') { echo " "; the_sub_field('2_column_layout'); }
                    if( $value=='three') { echo " "; the_sub_field('3_column_layout'); }

                     ?>" style="
                      <?php if (get_sub_field('background_image')) { ?> background-image:url('<?php the_sub_field('background_image'); ?>'); <?php } ?>

                      <?php if (get_sub_field('background_color')) { ?>background-color:<?php the_sub_field('background_color'); } ?>">

                        <?php if( get_sub_field('section_title') ): ?>
                          <h2 class="section-title"><?php the_sub_field('section_title'); ?></h2>
                        <?php endif; ?>


                        <div class="wrap <?php 
                          //adds the class for the selection type
                          $value = get_sub_field('columns_header');
                          echo "cols-" . $value; ?>
						">
                          
                          <div class="sub-section0<?php 

							//adds class for box
							$selected = get_sub_field('boxed_content');
							if( is_array($selected) && in_array('col-1', $selected) ) { echo " boxed "; }

							//adds class for cards
							if( get_sub_field('cards')) { echo " card"; }
							
							?>">

							<?php 
							$image = get_sub_field('column_1_photo');
							if( $value=='two') { $size = 'cards-5x2'; }
							if( $value=='three') { $size = 'cards-4x3'; }
							$thumb = $image['sizes'][ $size ];

							if( get_sub_field('cards')) { ?><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" /><?php  } 

							if( get_sub_field('cards')) { ?><div class="card-content"><?php } ?>
	
							<?php the_sub_field('column_1'); ?>

							<?php  

							if( get_sub_field('cards')) { ?></div><?php } ?>

							</div><!--.sub-section0-->


							<?php if ( get_sub_field ('columns_header') !== 'one') { ?>

							<div class="sub-section1<?php 

                            //adds class for box
                            $selected = get_sub_field('boxed_content');
                            if( is_array($selected) && in_array('col-2', $selected) ) {

                                echo " boxed ";

                            }
							 //adds class for cards
							if( get_sub_field('cards')) { echo " card"; }
	
							?>">
                            <?php 
                            $image = get_sub_field('column_2_photo');
                            
                            if( get_sub_field('cards')) { ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php  } 
							 
							//adds class for cards
                    		if( get_sub_field('cards')) { ?><div class="card-content"><?php } ?>
                        	
							<?php the_sub_field('column_2'); ?>
							
							<?php  
						 	//adds class for cards
							if( get_sub_field('cards')) { ?></div><?php } ?>
                          
							</div><!--.sub-section1-->
                          <?php } ?>

                          <?php if ( get_sub_field ('columns_header') == 'three' || 'four') { ?>

                            <div class="sub-section2<?php 

                            //adds class for box
                            $selected = get_sub_field('boxed_content');
                            if( is_array($selected) && in_array('col-3', $selected) ) {
                                echo " boxed ";
                            }
							
							//adds class for cards
							if( get_sub_field('cards')) { echo " card"; }
	
							?>">
                            <?php 
                            $image = get_sub_field('column_3_photo');
                            
                            if( get_sub_field('cards')) { ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php  } 
							 
							//adds class for cards
                    		if( get_sub_field('cards')) { ?><div class="card-content"><?php } ?>
                        	
							<?php the_sub_field('column_3'); ?>
							
							<?php  
						 	//adds class for cards
							if( get_sub_field('cards')) { ?></div><?php } ?>
                          
							</div><!--.sub-section2-->
                          <?php } ?>
                          
                          <?php if ( get_sub_field ('columns_header') == 'four') { ?>

                            <div class="sub-section3<?php 

                            //adds class for box
                            $selected = get_sub_field('boxed_content');
                            if( is_array($selected) && in_array('col-4', $selected) ) {
                                echo " boxed ";
                            }
							
							//adds class for cards
							if( get_sub_field('cards')) { echo " card"; }
	
							?>">
                            <?php 
                            $image = get_sub_field('column_4_photo');
                            
                            if( get_sub_field('cards')) { ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php  } 
							 
							//adds class for cards
                    		if( get_sub_field('cards')) { ?><div class="card-content"><?php } ?>
                        	
							<?php the_sub_field('column_4'); ?>
							
							<?php  
						 	//adds class for cards
							if( get_sub_field('cards')) { ?></div><?php } ?>
                          
							</div><!--.sub-section3-->
                          <?php } ?>
                        </div>
                        <!--.wrap-->

                      </div>
                      <!-- #intro -->
                    <?php endif; ?>

                    <?php 

                     //GALLERY LAYOUT
                      if(  get_row_layout() == 'gallery'): ?>
                      <div<?php if( get_sub_field( 'section_id') ) { ?> id="
                        <?php the_sub_field('section_id'); ?>"
                        <?php } ?> class="row gallery" style="<?php if (get_sub_field('background_color')) { ?>background-color:<?php the_sub_field('background_color'); } ?>">
                          <div class="wrap above-fixed">

                            <?php if( get_sub_field('title') ): ?>
                              <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                            <?php endif; ?>

                            <?php 

                            $image_ids = get_sub_field('gallery', false, false);

                            $shortcode = '[gallery ids="' . implode(',', $image_ids) . '" . captiontag="figcaption"]';

                            echo do_shortcode( $shortcode );

                            ?>
                            <div class="description">
                              <?php the_sub_field('description'); ?>
                            </div>
                            <!--.description-->  

                          </div>
                          <!--.wrap-->

                      </div>
                      <!-- #intro -->


                    <?php endif; ?>

                   


                  <?php endwhile; ?>

                <?php endif; ?>

                <?php endwhile; // end of the loop. ?>

                  </header><!-- .entry-header -->

                <?php } ?>
      
      <?php while ( have_posts() ) : the_post(); ?>

        <?php if( have_rows('sections-flex') ): ?>

        <?php while( have_rows('sections-flex') ): the_row(); ?>
        
        <?php 

          //CONTENT-BLOCK LAYOUT
          if(  get_row_layout() == 'content-blocks'): ?>
    
            <section <?php if( get_sub_field( 'section_id') ) { ?> id="<?php the_sub_field('section_id'); ?>"
                <?php } ?> class="row
                  <?php   

                    //adds the class for the text color
                    $color = get_sub_field('text_color');
                    echo " " . $color;

                    //adds class for background-attachment:fixed
                    if( get_sub_field('fixed') ) { echo " fixed"; }

                    //adds class for box
                    if( get_sub_field('boxed_content')) { echo " boxed"; }

                    //adds class for cards
                    if( get_sub_field('cards')) { echo " cards"; }
 
                    

                     ?>" style="
                      <?php if (get_sub_field('background_image')) { ?> background-image:url('<?php the_sub_field('background_image'); ?>'); <?php } ?>

                      <?php if (get_sub_field('background_color')) { ?>background-color:<?php the_sub_field('background_color'); } ?>">

                          <?php if( get_sub_field('section_title') ): ?>
                            <h2 class="section-title wrap"><?php the_sub_field('section_title'); ?></h2>
                          <?php endif; ?>

                        <div class="wrap <?php 
                          //adds the class for the selection type
                          $value = get_sub_field('columns');
                          echo "cols-" . $value; 
                          
                          //adds class for column layout
                          if( $value=='two') { echo " "; the_sub_field('2_column_layout'); }
                          if( $value=='three') { echo " "; the_sub_field('3_column_layout'); }
                        ?>">


                          <div class="sub-section0<?php 

							//adds class for box
							$selected = get_sub_field('boxed_content');
							if( is_array($selected) && in_array('col-1', $selected) ) { echo " boxed "; }

							//adds class for cards
							if( get_sub_field('cards')) { echo " card"; }
							
							?>">

							<?php 
							$image = get_sub_field('column_1_photo');
							$size = 'cards-5x2';
							if( $value=='two') { $size = 'cards-5x2'; }
							if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }
							$thumb = $image['sizes'][ $size ];

							if( get_sub_field('cards')) { ?><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" /><?php  } 

							if( get_sub_field('cards')) { ?><div class="card-content"><?php } ?>
	
							<?php the_sub_field('column_1'); ?>

							<?php  

							if( get_sub_field('cards')) { ?></div><?php } ?>

							</div><!--.sub-section0-->


							<?php if ( get_sub_field ('columns') !== 'one') { ?>

							<div class="sub-section1<?php 

                            //adds class for box
                            $selected = get_sub_field('boxed_content');
                            if( is_array($selected) && in_array('col-2', $selected) ) {

                                echo " boxed ";

                            }
							 //adds class for cards
							if( get_sub_field('cards')) { echo " card"; }
	
							?>">
                            <?php 
							$image = get_sub_field('column_2_photo');
							if( $value=='two') { $size = 'cards-5x2'; }
							if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }
							$thumb = $image['sizes'][ $size ];

							if( get_sub_field('cards')) { ?><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" /><?php  } 
							 
							//adds class for cards
                    		if( get_sub_field('cards')) { ?><div class="card-content"><?php } ?>
                        	
							<?php the_sub_field('column_2'); ?>
							
							<?php  
						 	//adds class for cards
							if( get_sub_field('cards')) { ?></div><?php } ?>
                          
							</div><!--.sub-section1-->
                          <?php } ?>

                          <?php 
							$columns = get_sub_field ('columns');
							if ( $columns == ( 'three' ) || $columns == ( 'four' ) ) { ?>

							<div class="sub-section2<?php 

							//adds class for box
							$selected = get_sub_field('boxed_content');
							if( is_array($selected) && in_array('col-3', $selected) ) {
								echo " boxed ";
							}

							//adds class for cards
							if( get_sub_field('cards')) { echo " card"; }

							?>">
							<?php 
							$image = get_sub_field('column_3_photo');
							if( $value=='two') { $size = 'cards-5x2'; }
							if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }
							$thumb = $image['sizes'][ $size ];

							if( get_sub_field('cards')) { ?><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" /><?php  }  

							//adds class for cards
							if( get_sub_field('cards')) { ?><div class="card-content"><?php } ?>

							<?php the_sub_field('column_3'); ?>

							<?php  
							//adds class for cards
							if( get_sub_field('cards')) { ?></div><?php } ?>

							</div><!--.sub-section2-->
                          <?php } ?>
                          
                          
                          <?php if ( get_sub_field ('columns') == 'four') { ?>
                            <div class="sub-section3<?php 

                            //adds class for box
                            $selected = get_sub_field('boxed_content');
                            if( is_array($selected) && in_array('col-4', $selected) ) {
                                echo " boxed ";
                            }
							
							//adds class for cards
							if( get_sub_field('cards')) { echo " card"; }

							?>">
							<?php 
							$image = get_sub_field('column_4_photo');
							if( $value =='two' ) { $size = 'cards-5x2'; }
							if( $value =='three' || $value == 'four' ) { $size = 'cards-4x3'; }
							$thumb = $image['sizes'][ $size ];

							if( get_sub_field('cards')) { ?><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" /><?php  } 
							 
							//adds class for cards
                    		if( get_sub_field('cards')) { ?><div class="card-content"><?php } ?>
                        	
							<?php the_sub_field('column_4'); ?>
							
							<?php  
						 	//adds class for cards
							if( get_sub_field('cards')) { ?></div><?php } ?>
                          
							</div><!--.sub-section3-->
                          <?php } ?>
              </div>
              <!--.wrap-->

            </section>
            <!-- #intro -->
          <?php endif; ?>
    
          <?php 

           //GALLERY LAYOUT
            if(  get_row_layout() == 'gallery'): ?>
            <section <?php if( get_sub_field( 'section_id') ) { ?> id="
              <?php the_sub_field('section_id'); ?>"
              <?php } ?> class="row gallery" style="<?php if (get_sub_field('background_color')) { ?>background-color:<?php the_sub_field('background_color'); } ?>">
                <div class="wrap above-fixed">

                  <?php if( get_sub_field('title') ): ?>
                    <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                  <?php 
                    
                  $image_ids = get_sub_field('gallery', false, false);

                  $shortcode = '[gallery ids="' . implode(',', $image_ids) . '" . captiontag="figcaption"]';

                  echo do_shortcode( $shortcode );

                  ?>
                  <div class="description">
                    <?php the_sub_field('description'); ?>
                  </div>
                  <!--.description-->  
                
                </div>
                <!--.wrap-->

            </section>
            <!-- #intro -->
            
    
          <?php endif; ?>
    
          <?php 

           //BLOCKQUOTE LAYOUT
            if(  get_row_layout() == 'blockquote'): ?>
            <section <?php if( get_sub_field( 'section_id') ) { ?> id="
              <?php the_sub_field('section_id'); ?>"
              <?php } ?> class="row blockquote" style="<?php if (get_sub_field('background_color')) { ?>background-color:<?php the_sub_field('background_color'); } ?>">
                <div class="wrap above-fixed">
                  
                  <?php if( get_sub_field('title') ): ?>
                    <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>
                  
                  <figure class="quote">
                    <blockquote>
                      <?php the_sub_field('quote'); ?>
                    </blockquote>
                    <figcaption><?php the_sub_field('author'); ?></figcaption>
                  </figure>
                </div>
                <!--.wrap-->

            </section>
            <!-- #intro -->
    
            <?php 

           //IMAGE LAYOUT
            if(  get_row_layout() == 'image_row'): ?>
            <section <?php if( get_sub_field( 'section_id') ) { ?> id="
              <?php the_sub_field('section_id'); ?>"
              <?php } ?> class="row image" style="
                      <?php if (get_sub_field('image')) { ?> background-image:url('<?php the_sub_field('image'); ?>'); <?php } ?><?php if (get_sub_field('background_color')) { ?> background-color:<?php the_sub_field('background_color'); } ?>">
                <div class="wrap above-fixed">

                  <?php if( get_sub_field('title') ): ?>
                    <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>
                    
                </div>
                <!--.wrap-->

            </section>
            <!-- #intro -->
            
    
          <?php endif; ?>
            
    
          <?php endif; ?>
    
        <?php endwhile; ?>
          
      <?php endif; ?>
        
      <?php endwhile; // end of the loop. ?>

    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->
  <?php get_footer(); ?>
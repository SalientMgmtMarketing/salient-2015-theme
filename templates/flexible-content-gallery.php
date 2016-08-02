<?php 

           //GALLERY LAYOUT
            if(  get_row_layout() == 'gallery'): ?>
            <section <?php if( get_sub_field( 'section_id') ) { ?> id="
              <?php the_sub_field('section_id'); ?>"
              <?php } ?> class="row gallery" style="<?php if (get_sub_field('background_color')) { ?>background-color:<?php the_sub_field('background_color'); } ?>">
                <div class="wrap above-fixed">

                  <?php if( get_sub_field('title') ): ?>
                    <h2 class="section-title wrap"><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                  <?php 
                    
                  $image_ids = get_sub_field('gallery', false, false);

                  $shortcode = '[gallery ids="' . implode(',', $image_ids) . '" . captiontag="figcaption" . columns="0" size="portraits"]';

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
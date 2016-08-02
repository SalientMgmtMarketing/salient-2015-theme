<?php 

           //IMAGE LAYOUT
            if(  get_row_layout() == 'image_row'): ?>
            <section <?php if( get_sub_field( 'section_id') ) { ?> id="
              <?php the_sub_field('section_id'); ?>"
              <?php } ?> class="row image" style="
                      <?php if (get_sub_field('image')) { ?> background-image:url('<?php the_sub_field('image'); ?>'); <?php } ?><?php if (get_sub_field('background_color')) { ?> background-color:<?php the_sub_field('background_color'); } ?>">
                <div class="wrap above-fixed">

                  <?php if( get_sub_field('title') ): ?>
                    <h2 class="section-title wrap"><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>
                    
                </div>
                <!--.wrap-->

            </section>
            <!-- #intro -->
            
    
          <?php endif; ?>
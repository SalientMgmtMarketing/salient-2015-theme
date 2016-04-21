<?php 

           //BLOCKQUOTE LAYOUT
            if(  get_row_layout() == 'blockquote'): ?>
            <section <?php if( get_sub_field( 'section_id') ) { ?> id="
              <?php the_sub_field('section_id'); ?>"
              <?php } ?> class="row blockquote" style="<?php if (get_sub_field('background_color')) { ?>background-color:<?php the_sub_field('background_color'); } ?>">
                <div class="wrap above-fixed">
                  
                  <?php if( get_sub_field('title') ): ?>
                    <h2 class="section-title wrap"><?php the_sub_field('title'); ?></h2>
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
      <?php endif; ?>
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
          
          <button class="close-btn">
            <span class="screen-reader-text">Return to main content</span>
            <span class="aria-hidden" aria-hidden="true" data-slide="slide-close">
              <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <title>Return to Home Screen</title>
                <g class="close-svg">
                  <g>
                    <path d="M34.45 25l25.888 25h-20.154l-25.888-25h20.154zM34.331 75l25.888-25h-20.154l-25.888 25h20.154z" id="Combined-Shape"/></g><g><path d="M66.55 25l-25.888 25h20.154l25.888-25h-20.154zM66.669 75l-25.888-25h20.154l25.888 25h-20.154z"/>
                  </g>
                </g>
              </svg>
            </span>
          </button>

        </div><!--.slide-container-->

      <?php endif; // layout = sub_slide_single ?>


      <?php  if( get_row_layout() == 'sub_slide_multi'): ?>

        <div class="slides-container multi">
        
          <?php if (get_sub_field('slide_title')) { ?>
            <h2 class="sub-slide-title"><?php echo get_sub_field('slide_title'); ?></h2>
          <?php } ?>
                
          <nav class="slides-nav" aria-label="slides navigation">
            <ul>
              <?php while ( have_rows('panels') ) : the_row(); ?>
              <li>
                <a href="#sub-slide" data-panel="<?php echo get_sub_field('panel_class'); ?>">
                  <?php echo get_sub_field('panel_title'); ?>
                </a>
              </li>
              <?php endwhile; // panels ?>
            </ul>
          </nav>
          
          <?php while ( have_rows('panels') ) : the_row(); ?>

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

          <button class="close-btn" data-slide="slide-close">
            <span class="screen-reader-text">Return to main content</span>
            <span class="aria-hidden" aria-hidden="true">
              <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <title>Return to Home Screen</title>
                <g class="close-svg">
                  <g>
                    <path d="M34.45 25l25.888 25h-20.154l-25.888-25h20.154zM34.331 75l25.888-25h-20.154l-25.888 25h20.154z" id="Combined-Shape"/>
                  </g>
                  <g>
                    <path d="M66.55 25l-25.888 25h20.154l25.888-25h-20.154zM66.669 75l-25.888-25h20.154l25.888 25h-20.154z"/>
                  </g>
                </g>
              </svg>
            </span>
          </button>
        </div><!--.slides-container-->
    <?php 
      endif; //sub_slide_multi 

    endwhile; //sub_slides

  endif; // sub_slide_parent
?>
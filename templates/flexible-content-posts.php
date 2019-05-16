<?php
  //CONTENT-BLOCK LAYOUT
  if( get_row_layout() == 'posts-block') { ?>

  <section <?php if( get_sub_field( 'section_id') ) { ?> id="<?php the_sub_field('section_id'); ?>"
  <?php } ?> class="row posts-block<?php

        //adds section classes
        if( get_sub_field( 'section_classes' ) ) { echo " " . get_sub_field( 'section_classes' ); }

        //adds the class for the text color
        $color = get_sub_field('text_color');
        echo " " . $color;

        ?>">
          <?php if( get_sub_field('section_title') ) { ?>
            <h2 class="section-title wrap<?php if( get_sub_field('title_centered') ) { echo " centered";  } ?>"><?php the_sub_field('section_title'); ?></h2>
          <?php } ?>

          <!-- div.wrap -->
          <div class="wrap">


            <div class="sub-section0">
              <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
              );
              $the_query = new WP_Query( $args );

              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <?php
                  if ( has_post_thumbnail() ) {
                    $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                  }
                  ?>
                    <div class="featured-post article">
                      <div class="image">
                        <a href="<?php the_permalink(); ?>">
                          <?php
                          $imgID  = get_post_thumbnail_id($post->ID);
                          $img    = wp_get_attachment_image_src($imgID,'billboard', false, '');
                          $imgAlt = get_post_meta($imgID,'_wp_attachment_image_alt', true); ?>
                          <img src="<?php echo $img[0]; ?>"alt="<?php echo $imgAlt; ?>" />
                        </a>
                      </div>
                      <div class="post-content">
                        <a href="<?php the_permalink(); ?>">

                          <h2><?php the_title(); ?></h2>
                        </a>
                        <?php the_excerpt(); ?>
                      </div>
                    </div>

              	<?php endwhile;
              } ?>
            </div>
            <!--.sub-section0-->
            <aside class="sub-section1">
              <?php $args2 = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'offset' => 1,
              );
              $the_query = new WP_Query( $args2 );

              if ( $the_query->have_posts() ) {
                echo '<ul>';
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <?php
                  if ( has_post_thumbnail() ) {
                    $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                  }
                  ?>

                  <li class="article">
                    <div>
                      <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                      </a>
                      <?php the_excerpt(); ?>
                    </div>
                  </li>

                <?php endwhile;
                echo '</ul>';
              }
              wp_reset_postdata();
              ?>
            </aside>
            <!--.sub-section1-->
  </section>
  <!-- #intro -->
  <?php } ?>

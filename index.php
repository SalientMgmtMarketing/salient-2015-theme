<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Salient
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <header class="hero">
            <div class="wrap">
              
              <h1><?php 
                if( is_home() && get_option( 'page_for_posts' ) ) {
                $posts_page = get_post( get_option( 'page_for_posts' ) ); 
                echo apply_filters( 'the_title', $posts_page->post_title );
                }
                else {
                    the_title();
                }
                ?></h1>
            </div>
          </header><!--.hero-->

          <?php 
            if ( is_home() ) {
              global $post;

              $post = get_option('page_for_posts');
              setup_postdata(get_page($post));
            }
          ?>
            <?php if ( have_posts() ) : ?>
              <div class="wrap flex-wrap">

                <?php
                if ( get_field('above_posts_list') ) { ?>

                  <section class="above-posts">
                    <?php echo get_field('above_posts_list'); ?>
                  </section>
                  <?php rewind_posts();

                } ?>
                <section class="list-of-posts">
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>


                    <?php
                        /* Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                    ?>

                <?php endwhile; ?>
                </section><!--.list-of-posts-->
                <?php salient_2015_paging_nav(); ?>
              </div><!--.wrap-->           


            <?php else : ?>
                <div class="wrap">
                  <?php get_template_part( 'content', 'none' ); ?>
                </div><!--.wrap-->
            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

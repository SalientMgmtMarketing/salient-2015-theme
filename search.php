<?php
/**
 * The template for displaying search results pages.
 *
 * @package Salient
 */

get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>
            <article class="search-results">
               
            <header class="page-header hero">
                 <div class="wrap">
                     <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'salient-2015' ), '<span>' . get_search_query() . '</span>' ); ?></h1></div>
            </header><!-- .page-header -->
                <div class="wrap">
                <div class="entry-content">    
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part( 'content', 'search' );
                ?>

            <?php endwhile; ?>

            <?php salient_2015_paging_nav(); ?>

        <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </article>
        </main><!-- #main -->
    </section><!-- #primary -->


<?php get_footer(); ?>

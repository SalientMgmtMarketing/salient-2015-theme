<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * PHP Version 5
 *
 * @category Custom
 *
 * @package Salient
 *
 * @author Paul Stonier <pstonier@salient.com>
 *
 * @license All Rights Reserved https://en.wikipedia.org/wiki/All_rights_reserved
 *
 * @link https://pstonier@source.salient.com/scm/mwp/salient-brand.git
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header hero">
        <div class="wrap">
            <?php if ( function_exists('yoast_breadcrumb') && ! is_front_page() ) { yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); } ?>
            <h1 class="page-title"><?php _e( 'Nothing Found', 'salient-2015' ); ?></h1>
        </div>
    </header><!-- .entry-header -->

    <div class="wrap">

        <div class="entry-content">
            <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
            <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'salient-2015' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
            <?php elseif ( is_search() ) : ?>
                <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'salient-2015' ); ?></p>
                <?php get_search_form(); ?>
            <?php else : ?>
                <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'salient-2015' ); ?></p>
                <?php get_search_form(); ?>
            <?php endif; ?>
        </div><!-- .entry-content -->
    </div><!-- .wrap -->
</article><!-- .no-results -->

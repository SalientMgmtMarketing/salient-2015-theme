<?php
/**
 * The template for displaying 404 pages (not found).
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

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <article class="error-404 not-found">
        <header class="page-header hero">
          <div class="wrap">
            <h1 class="page-title">
                <?php
                _e('Sorry! That page can&rsquo;t be found.', 'salient-2015');
                ?>
            </h1>
          </div>
          <!--.wrap-->
        </header>
        <!-- .page-header -->
        <div class="wrap">
          <div class="entry-content">
            <p>
                <?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'salient-2015'); ?>
            </p>

            <?php get_search_form(); ?>

            <?php the_widget('WP_Widget_Recent_Posts'); ?>

            <?php if (salient_2015_categorized_blog()) : // Only show the widget if site has multiple categories. ?>
            <div class="widget widget_categories">
              <h2 class="widget-title">
                <?php _e('Most Used Categories', 'salient-2015'); ?>
              </h2>
              <ul>
                <?php
                    wp_list_categories(
                        array(
                          'orderby'    => 'count',
                          'order'      => 'DESC',
                          'show_count' => 1,
                          'title_li'   => '',
                          'number'     => 10,
                        )
                    );
                        ?>
              </ul>
            </div>
            <!-- .widget -->
            <?php endif; ?>

            <?php
                        /* translators: %1$s: smiley */
                        $archive_content = '<p>' . sprintf(__('Try looking in the monthly archives. %1$s', 'salient-2015'), convert_smilies(':)')) . '</p>';
                        the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");
                    ?>

                <?php the_widget('WP_Widget_Tag_Cloud'); ?>

          </div>
          <!-- .entry-content -->
        </div>
        <!--.wrap-->
      </article>
      <!-- .error-404 -->

    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

    <?php get_footer(); ?>
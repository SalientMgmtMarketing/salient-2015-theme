<?php
/*
Template Name: sections - Flexible Content HOME
*/

get_header('boxy'); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php if( have_rows('sections-flex') ): ?>

          <?php while( have_rows('sections-flex') ): the_row(); ?>

            <?php get_template_part('templates/flexible-content','content-blocks'); ?>

            <?php get_template_part('templates/flexible-content','posts'); ?>

            <?php get_template_part('templates/flexible-content','gallery'); ?>

            <?php get_template_part('templates/flexible-content','blockquote'); ?>

            <?php get_template_part('templates/flexible-content','testimonials'); ?>

          <?php endwhile; ?>

        <?php endif; //has_rows('sections-flex') ?>

      <?php endwhile; // end of the loop. ?>

    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->
  <?php get_footer(); ?>

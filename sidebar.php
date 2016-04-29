<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Salient 2015
 */

if ( ! is_active_sidebar( 'primary-widget-area' )
  && ! is_active_sidebar( 'solutions' )
  && ! is_active_sidebar( 'services' )
  && ! is_active_sidebar( 'technology' )
  && ! is_active_sidebar( 'about' )
  && ! is_active_sidebar( 'blog' )
   ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar" role="complementary">
  <?php 
  // Solutions Sidebar
  if (is_tree(68)) {
    dynamic_sidebar('solutions');
  }

  // Services Sidebar 
  if (is_tree(27)) {
    dynamic_sidebar('services');
  }

  // Technology Sidebar
  if (is_tree(52)) {
    dynamic_sidebar('technology');
  }

  // About Sidebar
  if (is_tree(25)) {
    dynamic_sidebar('about');
  }
  
  // About Sidebar
  if (is_home()) {
    dynamic_sidebar('blog');
  }
  
  // Global Sidebar
  dynamic_sidebar( 'primary-widget-area' ); ?>
</aside><!-- #secondary -->
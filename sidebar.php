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

  dynamic_sidebar('solutions');

  // Services Sidebar 
  dynamic_sidebar('services');


  // Technology Sidebar
  dynamic_sidebar('technology');

  // About Sidebar
  dynamic_sidebar('about');

  // About Sidebar
  dynamic_sidebar('blog');
  
  // Global Sidebar
  dynamic_sidebar( 'primary-widget-area' ); ?>
</aside><!-- #secondary -->
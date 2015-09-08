<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<?php
	if (    is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area' )
	):
?>

  <aside class="footer-block single">
	<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
  </aside>

<?php endif; ?>

<?php
	if (    is_active_sidebar( 'first-footer-widget-area'  )
		&&  is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area' )
	):
?>

  <aside class="footer-block double">
	<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
  </aside>
  <aside class="footer-block double">
	<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
  </aside>

<?php endif; ?>

<?php
	if (    is_active_sidebar( 'first-footer-widget-area'  )
		&&  is_active_sidebar( 'second-footer-widget-area' )
		&&  is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area' )
	):
?>

  <aside class="footer-block double">
	<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
  </aside>
  <aside class="footer-block single">
	<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
  </aside>
  <aside class="footer-block single">
	<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
  </aside>

<?php endif; ?>

<?php
	if (    is_active_sidebar( 'first-footer-widget-area'  )
		&&  is_active_sidebar( 'second-footer-widget-area' )
		&&  is_active_sidebar( 'third-footer-widget-area'  )
		&&  is_active_sidebar( 'fourth-footer-widget-area' )
	):
?>

  <aside class="footer-block single">
	<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
  </aside>
  <aside class="footer-block single">
	<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
  </aside>
  <aside class="footer-block single">
	<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
  </aside>
  <aside class="footer-block single">
	<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
  </aside>

<?php endif; ?>



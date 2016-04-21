<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Salient 2015
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header hero" style=" <?php if ( has_post_thumbnail())  {  
			echo "background-image:url('"; 
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
			echo $thumb_url[0]; 
			echo "')";}
		?>">
		<div class="wrap">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="wrap">
		<?php if ( get_field('left_sidebar') ) { ?>
          <aside id="left-sidebar" class="bluegraybox">
				<?php dynamic_sidebar( 'submenu-widget-area' ); ?>
          </aside>
        <?php } ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'salient-2015' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
        <?php if ( get_field('right_sidebar')) { ?>
          <aside id="right-sidebar" class="bluegraybox">
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
          </aside>
        <?php } ?>  
	</div><!-- .wrap -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'salient-2015' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

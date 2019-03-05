<?php
/**
 * The template used for displaying page content in page.php
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
	<section class="landing-page-hero" style="<?php hero_header_image(); ?>">
	  <div class="wrap">
		<header class="entry-header <?php if ( get_field('sub-headline') ) { echo "has-sub-headline"; } ?>">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
			<?php if ( get_field('sub-headline') ) { ?><h2 class="sub-headline"><?php the_field('sub-headline'); ?></h2><?php } ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
		<!-- .entry-header -->

		<div class="entry-content">
		<div id="password-gate">
					<p>To access this page, please contact support for the password.
						<br>Email: <a href="mailto:support@salient.com">support@salient.com</a>
						<br>Tel: 607-739-5228 x206
						<br> or via the chat button in the bottom right.</p>

					<form id="protected-form" class="protected-form" name="protectedform" action="#" method="POST">
						<span id="formerror" class="error"></span>
						<label for="password">Password</label>
						<input type="password" name="password" required placeholder />
						<button type="submit" name="submit" value="submit" class="protected-submit">Submit</button>
					</form>

				</div>

				<div id="hiddenContent" style="display:none;">
						<?php

						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'salient-2015' ),
								'after'  => '</div>',
							)
						);
						?>
				</div>
		</div>
		<!-- .entry-content -->
		<?php if ( get_field('form_box')): ?>
		  <div class="form-block">
			<?php the_field('form_box'); ?>
		  </div><!-- .form-block -->
		  <?php endif; ?>
		  <?php get_sidebar(); ?>
	  </div>
	  <!-- .wrap -->
	</section>
	<!--.landing-page-hero-->




	  <?php if( have_rows('sections-flex') ): ?>

		<?php while( have_rows('sections-flex') ): the_row(); ?>
		
		<?php 

		  //CONTENT-BLOCK LAYOUT
		  if(  get_row_layout() == 'content-blocks'): ?>
	
			<section <?php if( get_sub_field( 'section_id') ) { ?> id="
			  <?php the_sub_field('section_id'); ?>"
				<?php } ?> class="row
				  <?php   


					//adds the class for the selection type
					$value = get_sub_field('columns');
					echo "cols-" . $value;

					//adds class for background-attachment:fixed
					if( get_sub_field('fixed') ) { echo " fixed"; }

					//adds class for box
					if( get_sub_field('boxed_content')) { echo " boxed"; }

					//adds class for column layout
					if( get_sub_field( '2_column_layout' )) { echo " "; the_sub_field('2_column_layout'); }
					if( get_sub_field( '3_column_layout' )) { echo " "; the_sub_field('3_column_layout'); }

					 ?>" style="
					  <?php if (get_sub_field('background_image')) { ?> background-image:url('<?php the_sub_field('background_image'); ?>'); <?php } ?>

					  <?php if (get_sub_field('background_color')) { ?>background-color:<?php the_sub_field('background_color'); } ?>">


						<div class="wrap above-fixed">

						  <?php if( get_sub_field('section_title') ): ?>
							<h2 class="section-title"><?php the_sub_field('section_title'); ?></h2>
						  <?php endif; ?>

						  <div class="sub-section0<?php 

							//adds class for box
							$selected = get_sub_field('boxed_content');
							if( in_array('col-1', $selected) ) {

								echo " boxed ";

							} ?>">

							<?php the_sub_field('column_1'); ?>

						  </div>
						  <!--.sub-section0-->


						  <?php if ( get_sub_field ('columns') !== 'one') { ?>

							<div class="sub-section1<?php 

							//adds class for box
							$selected = get_sub_field('boxed_content');
							if( in_array('col-2', $selected) ) {

								echo " boxed ";

							} ?>">

							  <?php the_sub_field('column_2'); ?>
							</div>
							<!--.sub-section1-->
						  <?php } ?>

						  <?php if ( get_sub_field ('columns') == 'three') { ?>

							<div class="sub-section2<?php 

							//adds class for box
							$selected = get_sub_field('boxed_content');
							if( in_array('col-3', $selected) ) {

								echo " boxed ";

							} ?>">

							  <?php the_sub_field('column_3'); ?>
							</div>
							<!--.sub-section2-->
						  <?php } ?>
			  </div>
			  <!--.wrap-->

			</section>
			<!-- #intro -->
		  <?php endif; ?>
	
		  <?php 

		   //GALLERY LAYOUT
			if(  get_row_layout() == 'gallery'): ?>
			<section <?php if( get_sub_field( 'section_id') ) { ?> id="
			  <?php the_sub_field('section_id'); ?>"
			  <?php } ?> class="row gallery" style="<?php if (get_sub_field('background_color')) { ?>background-color:<?php the_sub_field('background_color'); } ?>">
				<div class="wrap above-fixed">

				  <?php if( get_sub_field('title') ): ?>
					<h2 class="section-title"><?php the_sub_field('title'); ?></h2>
				  <?php endif; ?>

				  <?php 
					
				  $image_ids = get_sub_field('gallery', false, false);

				  $shortcode = '[gallery ids="' . implode(',', $image_ids) . '" . captiontag="figcaption"]';

				  echo do_shortcode( $shortcode );

				  ?>
				  <div class="description">
					<?php the_sub_field('description'); ?>
				  </div>
				  <!--.description-->  
				
				</div>
				<!--.wrap-->

			</section>
			<!-- #intro -->
			
	
		  <?php endif; ?>
	
		  <?php 

		   //BLOCKQUOTE LAYOUT
			if(  get_row_layout() == 'blockquote'): ?>
			<section <?php if( get_sub_field( 'section_id') ) { ?> id="
			  <?php the_sub_field('section_id'); ?>"
			  <?php } ?> class="row blockquote" style="<?php if (get_sub_field('background_color')) { ?>background-color:<?php the_sub_field('background_color'); } ?>">
				<div class="wrap above-fixed">
				  
				  <?php if( get_sub_field('title') ): ?>
					<h2 class="section-title"><?php the_sub_field('title'); ?></h2>
				  <?php endif; ?>
				  
				  <figure class="quote">
					<blockquote>
					  <?php the_sub_field('quote'); ?>
					</blockquote>
					<figcaption><?php the_sub_field('author'); ?></figcaption>
				  </figure>
				</div>
				<!--.wrap-->

			</section>
			<!-- #intro -->
	
			<?php 

		   //IMAGE LAYOUT
			if(  get_row_layout() == 'image_row'): ?>
			<section <?php if( get_sub_field( 'section_id') ) { ?> id="
			  <?php the_sub_field('section_id'); ?>"
			  <?php } ?> class="row image" style="
					  <?php if (get_sub_field('image')) { ?> background-image:url('<?php the_sub_field('image'); ?>'); <?php } ?><?php if (get_sub_field('background_color')) { ?> background-color:<?php the_sub_field('background_color'); } ?>">
				<div class="wrap above-fixed">

				  <?php if( get_sub_field('title') ): ?>
					<h2 class="section-title"><?php the_sub_field('title'); ?></h2>
				  <?php endif; ?>
					
				</div>
				<!--.wrap-->

			</section>
			<!-- #intro -->
			
	
		  <?php endif; ?>
			
	
		  <?php endif; ?>
	
		<?php endwhile; ?>
		  
	  <?php endif; ?>

  </article>
  <!-- #post-## -->
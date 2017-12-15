<?php

					 //TESTIMONIALS LAYOUT
						if(  get_row_layout() == 'rotating_testimonials'): ?>
						<section <?php if( get_sub_field( 'section_id') ) { ?> id="
							<?php the_sub_field('section_id'); ?>"
							<?php } ?> class="row testimonials">
								<div class="wrap above-fixed">
									<?php if( get_sub_field('section_title') ): ?>
										<h2 class="section-title"><?php the_sub_field('section_title'); ?></h2>
									<?php endif; ?>
									<?php if ( have_rows('testimonials') ) { ?>
									<div class="slider">
										<div class="slides">
											<?php while ( have_rows('testimonials') ) : the_row(); ?>
											<div class="slide">
												<?php if( get_sub_field('testimonial_title') ): ?>
													<h3 class="testimonial-title"><?php the_sub_field('testimonial_title'); ?></h3>
												<?php endif; ?>
												<figure class="quote">
													<blockquote>
														<?php the_sub_field('quote'); ?>
													</blockquote>
													<figcaption><?php the_sub_field('citation'); ?></figcaption>
												</figure>
												<?php if ( get_sub_field('link_url') && get_sub_field('logo') ) { ?>
													<a href="<?php the_sub_field('link_url'); ?>">
												<?php } ?>
												<?php $logo = get_sub_field('logo');
												if ( $logo ) { ?>
													<div class="testimonial-logo">
														<img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt']; ?>" />
													</div>
												<?php } ?>
												<?php if ( get_sub_field('link_url') && get_sub_field('logo') ) { ?>
													</a>
												<?php } ?>
											</div>
										<?php endwhile; ?>
										</div>
									</div>
									<!-- .slider -->
									<?php } ?>
								</div>
								<!--.wrap-->
						</section>
						<!-- #intro -->
			<?php endif; ?>

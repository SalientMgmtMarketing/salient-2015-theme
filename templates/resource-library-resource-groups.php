<?php

if( have_rows('resource_group') ): $i = 0;

	// loop through the rows of data
	while ( have_rows('resource_group') ) : the_row();
		$i++;
		echo '<div class="resource-group">';

		// check current row layout
		if( get_row_layout() == 'document_group' ):

			$title = get_sub_field('title');
			if ( $title ) {
				echo '<a name="resource-batch-' . $i . '"></a>';
				echo '<h2>' . $title . '</h2>';
			}

			if ( have_rows( 'list_items' ) ) :

				while ( have_rows( 'list_items' ) ) : the_row();

					$title       = get_sub_field( 'title' );
					$description = get_sub_field( 'description' );
					$file        = get_sub_field( 'file' );
					$thumbnail   = get_sub_field( 'thumbnail' );

					echo '<div class="media">';
					echo '<a class="media-left" href="' . $file . '" title=' . esc_html( wp_json_encode( $title ) ) . '>';
					if ( $thumbnail ) {
						echo '<img src="' . esc_html( $thumbnail ) . '" />';
					} else {
						echo '<img src="http://placehold.it/100x100" />';
					}
					echo '</a>';
					echo '<div class="media-body">';
					echo '<h4 class="media-heading">' . esc_html( $title ) . '</h4>';
					if ( $description ) {
						echo '<p>' . esc_html( $description ) . '</p>';
					}
					echo '<p style="margin-bottom: 0;"><a class="btn btn-primary btn-xs" href="' . $file . '" title=' . esc_html( wp_json_encode( $title ) ) . '>View the file <i class="fa fa-chevron-right"></i></a></p>';
					echo '</div>';
					echo '</div>';
				endwhile;

			endif;

		endif;

		// check current row layout
		if( get_row_layout() == 'video_group' ) :

			$title = get_sub_field('title');
			if ( $title ) {
				echo '<a name="resource-batch-' . $i . '"></a>';
				echo '<h2>' . $title . '</h2>';
			}

			if ( have_rows('list_items') ) :

				while ( have_rows('list_items') ) : the_row();

					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$video = get_sub_field('video');

					echo '<div class="media">';
						echo '<a class="media-left" href="http://www.youtube.com/watch?v=' . $video->youtube_id . '" title=' . json_encode($title) . '>';
							echo '<img src="' . $video->image . '" />';
						echo '</a>';
						echo '<div class="media-body">';
							echo '<h4 class="media-heading">' . $title . '</h4>';
							if ( $description ) {
								echo '<p>' . $description . '</p>';
							}
							echo '<p style="margin-bottom: 0;"><a class="btn btn-primary btn-xs" href="http://www.youtube.com/watch?v=' . $video->youtube_id . '" title=' . json_encode($title) . '>Watch the video <i class="fa fa-chevron-right"></i></a></p>';
						echo '</div>';
					echo '</div>';
				endwhile;

			endif;

		endif;

		echo '</div>';

	endwhile;

else :

	// no layouts found

endif;

?>
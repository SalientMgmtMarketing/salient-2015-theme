<?php 
  // Checks for Featured Image.                          
  if ( has_post_thumbnail())  {  

    echo "background-image:url('"; 

    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);

    echo $thumb_url[0]; 
    echo "')";
  }
?>
<?php
// cfwp = Custom Functions WP
function cfwp_random_posts() { 
      
  $args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 1, 
  );

  $query = new WP_Query( $args );
    
  if ( $query->have_posts() ) {

    $string .= '';
    while ( $query->have_posts() ) {
      $query->the_post();
      $thumbID = get_post_thumbnail_id( $post->ID );
      $url_img = wp_get_attachment_url( $thumbID );              
      $title = get_the_title();
      $date = get_the_date();
      $link = get_the_permalink();
      $extracto = get_the_excerpt();
      $string .= '
      <a href="'.$link.'" class="random-post-row">
        <p class="random-post-title">'.$title.'</p>        
        <div class="random-post-col">
          <img src="'.$url_img.'" class="random-post-custom-class">
        </div>
        <p class="random-post-date">'.$date.'</p>
        <p class="random-post-date">'.$extracto.'</p>
      </a>';
    }
    $string .= '';
    /* Restore original Post Data */
    
  } else {
    $string .= 'no posts found';
  }
    
  return $string; 

  wp_reset_postdata();
} 
    
add_shortcode('wpb-random-posts','cfwp_random_posts');   
<?php
 add_shortcode( 'cpt_post','ct_coupon_list' );
 function ct_coupon_list ( $atts ) {
  extract( shortcode_atts( array(
     'ptype' => '',
     'pcount' => ''
    ), $atts ) );
     wp_reset_query();
      $args = array('post_type' => $ptype, 'posts_per_page' => $pcount, 'title_li' => ''
      );
      $loop = new WP_Query($args);
      if($loop->have_posts()) {
         while($loop->have_posts()) : 
            $loop->the_post();
            echo '<div class="my-2">';
            echo '<a href='.get_permalink().'>'.get_the_title().'</a>';
            echo '</div>';
         endwhile;
      }
 
      else {
             echo  'Sorry, no posts were found';
           }
 }
?>
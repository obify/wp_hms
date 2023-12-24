<?php
//start shortcode for custom taxonomy
// First we create a function
function list_terms_custom_taxonomy( $atts ) {
 
    // Inside the function we extract custom taxonomy parameter of our shortcode
     
      extract( shortcode_atts( array(
          'custom_taxonomy' => '',
      ), $atts ) );
     
    // arguments for function wp_list_categories
    $args = array( 
      'taxonomy' => $custom_taxonomy,
      'title_li' => ''
    );
     
    // We wrap it in unordered list 
      echo '<ul class="ps-3">'; 
      echo wp_list_categories($args);
      echo '</ul>';
    }
     
    // Add a shortcode that executes our function
    add_shortcode( 'ct_terms', 'list_terms_custom_taxonomy' );
    //[ct_terms custom_taxonomy=customtaxonomyname]
    //Allow Text widgets to execute shortcodes
     
    add_filter('widget_text', 'do_shortcode');
  //end shortcode for custom taxonomy
?>
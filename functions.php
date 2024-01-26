<?php
//echo get_stylesheet_uri();
//echo get_template_directory_uri();
//exit();
function mytheme_theme_setup(){

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('home-featured', 580, 300, array('center', 'center'));
    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'mytheme')
    ));
}
add_action('after_setup_theme', 'mytheme_theme_setup');

function mytheme_scripts_enqueue(){

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap5-couponsite-css', get_template_directory_uri(). '/assets/css/bootstrap5/bootstrap.min.css');
    wp_enqueue_script('bootstrap5-couponsite-js', get_template_directory_uri(). '/assets/js/bootstrap5/bootstrap.bundle.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('mytheme-browser', get_template_directory_uri(). '/assets/js/browser.min.js');
    wp_enqueue_script('mytheme-breakpoints', get_template_directory_uri(). '/assets/js/breakpoints.min.js');
    wp_enqueue_script('mytheme-util', get_template_directory_uri(). '/assets/js/util.js');
    wp_enqueue_script('mytheme-main', get_template_directory_uri(). '/assets/js/main.js');
    // wp_enqueue_script('mytheme-owl-css', get_template_directory_uri(). '/assets/css/owl.carousel.min.css');
    // wp_enqueue_script('mytheme-fa-css', get_template_directory_uri(). '/assets/css/fontawesome-all.min.css');
    
    wp_enqueue_style( 'hms-css', get_template_directory_uri(). '/assets/css/hms/main.css');
    // wp_enqueue_script('mytheme-fa-css', get_template_directory_uri(). '/assets/css/main.css');
    // wp_enqueue_script('mytheme-owl-js', get_template_directory_uri(). '/assets/js/owl.carousel.min.js');
    wp_enqueue_script('mytheme-sweetAlertJs',  'https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js');
}
add_action('wp_enqueue_scripts', 'mytheme_scripts_enqueue');

function mytheme_widgets_init(){

    register_sidebar(array(
        'name' => __('Main Sidebar', 'mytheme'),
        'id'   => 'main-sidebar',
        'description' => 'Primary Right Sidebar',
        'before_widget' => '<section id="%1$s" class="box %2$s" >',
        'after_widget'  => '</section>',
        'before_title' => '<header><h3 class="widget-title">',
        'after_title'  => '</h3></header>'
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 1', 'mytheme'),
        'id'   => 'footer-widget-1',
        'description' => 'Footer Widget 1',
        'before_widget' => '<section id="%1$s" class="widget %2$s" >',
        'after_widget'  => '</section>',
        'before_title' => '<header><h2 class="widget-title">',
        'after_title'  => '</h2></header>'
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 2', 'mytheme'),
        'id'   => 'footer-widget-2',
        'description' => 'Footer Widget 2',
        'before_widget' => '<section id="%1$s" class="widget %2$s" >',
        'after_widget'  => '</section>',
        'before_title' => '<header><h2 class="widget-title">',
        'after_title'  => '</h2></header>'
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 3', 'mytheme'),
        'id'   => 'footer-widget-3',
        'description' => 'Footer Widget 3',
        'before_widget' => '<section id="%1$s" class="widget %2$s" >',
        'after_widget'  => '</section>',
        'before_title' => '<header><h2 class="widget-title">',
        'after_title'  => '</h2></header>'
    ));

}
add_action('widgets_init', 'mytheme_widgets_init');

//Adding Portfolio Custom Post Type
//require get_template_directory().'/includes/portfolio.php';
require get_template_directory().'/includes/custom-taxonomy-shortcode.php';
require get_template_directory().'/includes/custom-post-shortcode.php';

// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link text-white ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');
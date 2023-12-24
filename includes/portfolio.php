<?php
// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'mytheme' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'mytheme' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'mytheme' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'mytheme' ),
		'archives' => __( 'Portfolio Archives', 'mytheme' ),
		'attributes' => __( 'Portfolio Attributes', 'mytheme' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'mytheme' ),
		'all_items' => __( 'All Portfolios', 'mytheme' ),
		'add_new_item' => __( 'Add New Portfolio', 'mytheme' ),
		'add_new' => __( 'Add New', 'mytheme' ),
		'new_item' => __( 'New Portfolio', 'mytheme' ),
		'edit_item' => __( 'Edit Portfolio', 'mytheme' ),
		'update_item' => __( 'Update Portfolio', 'mytheme' ),
		'view_item' => __( 'View Portfolio', 'mytheme' ),
		'view_items' => __( 'View Portfolios', 'mytheme' ),
		'search_items' => __( 'Search Portfolio', 'mytheme' ),
		'not_found' => __( 'Not found', 'mytheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'mytheme' ),
		'featured_image' => __( 'Featured Image', 'mytheme' ),
		'set_featured_image' => __( 'Set featured image', 'mytheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'mytheme' ),
		'use_featured_image' => __( 'Use as featured image', 'mytheme' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'mytheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'mytheme' ),
		'items_list' => __( 'Portfolios list', 'mytheme' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'mytheme' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'mytheme' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'mytheme' ),
		'description' => __( '', 'mytheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-album',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );

function register_portfolio_taxonomy(){
	$args = array(
		'public'=>true, 
		'label'=>'Portfolio type',
		'rewrite'=>false,
		'supports'=>array('title','editor','author','thumbnail','excerpt')
	);
	register_taxonomy('portfolio_type', 'portfolio', $args);//adds this custom taxonomy to our custom post type portfolio
}
add_action('init', 'register_portfolio_taxonomy');
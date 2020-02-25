<?php
// Register Custom Post Type Task
function create_task_cpt() {

	$labels = array(
		'name' => _x( 'Task', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Task', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Task', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Task', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Task Archives', 'textdomain' ),
		'attributes' => __( 'Task Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Task:', 'textdomain' ),
		'all_items' => __( 'All task', 'textdomain' ),
		'add_new_item' => __( 'Add New Task', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Task', 'textdomain' ),
		'edit_item' => __( 'Edit Task', 'textdomain' ),
		'update_item' => __( 'Update Task', 'textdomain' ),
		'view_item' => __( 'View Task', 'textdomain' ),
		'view_items' => __( 'View task', 'textdomain' ),
		'search_items' => __( 'Search Task', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Task', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Task', 'textdomain' ),
		'items_list' => __( 'task list', 'textdomain' ),
		'items_list_navigation' => __( 'task list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter task list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Task', 'textdomain' ),
		'description' => __( 'Planner Tasks', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-yes',
		'supports' => array('title', 'editor', 'author'),
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
	register_post_type( 'task', $args );

}
add_action( 'init', 'create_task_cpt', 0 );

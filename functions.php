<?php

function wpr_add_style() {
	wp_enqueue_style( 'wpr-academy-style', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wpr_add_style' );



function register_people_CPT() {
	$args = array(
		'label'               => __( 'Books', '' ),
		'labels'              => array(
			'name'                  => __( 'Books', '' ),
			'singular_name'         => __( 'Book', '' ),
			'featured_image'        => __( 'Book Image', '' ),
			'set_featured_image'    => __( 'Set Book Image', '' ),
			'remove_featured_image' => __( 'Remove Book Image', '' ),
			'use_featured_image'    => __( 'Use Book Image', '' ),
			'add_new_item'          => 'Add new Book',
			'add_new'               => 'Add Book',
			'edit_item'             => 'Edit Book',
			'view_item'             => 'View Book',
			'view_items'            => 'View Books',
		),
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => true,
		'has_archive'         => true,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'map_meta_cap'        => true,
		'hierarchical'        => true,
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'          => array( 'Roles', 'Regions' ),
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
	);
	register_post_type( 'book', $args );

	add_theme_support( 'post-thumbnails', array( 'book' ) );

}
add_action( 'init', 'register_people_CPT' );

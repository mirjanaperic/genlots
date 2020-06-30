<?php

function genlots_register_post_type() {
    $singular = 'Custom post type name'; // Book
	$plural = 'Custom post type names';  // Books
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'genlots' ),
        'singular_name' 	  => __( $singular, 'genlots' ),
        'add_new' 		      => _x( 'Add New', 'genlots', 'genlots' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'genlots' ),
        'edit'		          => __( 'Edit', 'genlots' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'genlots' ),
        'new_item'	          => __( 'New ' . $singular, 'genlots' ),
        'view' 			      => __( 'View ' . $singular, 'genlots' ),
        'view_item' 		  => __( 'View ' . $singular, 'genlots' ),
        'search_term'   	  => __( 'Search ' . $plural, 'genlots' ),
        'parent' 		      => __( 'Parent ' . $singular, 'genlots' ),
        'not_found'           => __( 'No ' . $plural .' found', 'genlots' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'genlots' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => '',
        'supports'            => array( 'title', 'thumbnail', 'editor' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'genlots_register_post_type' );
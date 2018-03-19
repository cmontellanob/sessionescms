<?php
/*
Plugin Name: Custom Post Type libros
Description: Example demonstrating how to add a Custom Post Type via plugin.
Plugin URI:   https://something.com
Author:       Nombre del Autor
Version:      1.0
*/

function myplugin_add_libro_post_type() {

	$args = array(
		'labels'             => array( 'name' => 'Libros' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'libros' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

	register_post_type( 'libros', $args );

}
add_action( 'init', 'myplugin_add_libro_post_type' );

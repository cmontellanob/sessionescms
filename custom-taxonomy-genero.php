<?php
/*
Plugin Name: Custom Taxonomy Genero
Description: Example demonstrating how to add a Custom Taxonomy via plugin.
Plugin URI:   https://something.com
Author:       Nombre del Autor
Version:      1.0
*/

function myplugin_add_custom_genero() {

$args = array(
		'labels'            => array( 'name' => 'Genero' ),
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);


	register_taxonomy( 'Genero', 'libros', $args );

}
add_action( 'init', 'myplugin_add_custom_genero' );

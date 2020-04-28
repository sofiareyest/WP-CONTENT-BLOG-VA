<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'tips-img'	=> __( 'Tamaño de imagen de los proyectos' ),
		'carousel-img'	=> __( 'Tamaño de imagen del Carrusel' ),
		'entradas'	=> __( 'Tamaño de imagen de las entradas' ),
		'detail'	=> __( 'Tamaño de imagen de los posts individuales' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'tips-img', 360, 240, true );
	add_image_size( 'carousel-img', 800, 500, true );
	add_image_size( 'entradas', 360, 360, true );
	add_image_size( 'detail', 720, 360, true );

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}

<?php

// Register Custom Post Type
function slider_post_type() {

	$labels = array(
		'name'                  => _x( 'Sliders', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Sliders', 'text_domain' ),
		'name_admin_bar'        => __( 'Slider', 'text_domain' ),
		'archives'              => __( 'Archivos del slider', 'text_domain' ),
		'attributes'            => __( 'Atributos del slider', 'text_domain' ),
		'parent_item_colon'     => __( 'Slider principal:', 'text_domain' ),
		'all_items'             => __( 'Todos los sliders', 'text_domain' ),
		'add_new_item'          => __( 'Agrega un nuevo slider', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Slider', 'text_domain' ),
		'edit_item'             => __( 'Editar slider', 'text_domain' ),
		'update_item'           => __( 'Actualizar slider', 'text_domain' ),
		'view_item'             => __( 'Ver slider', 'text_domain' ),
		'view_items'            => __( 'Ver sliders', 'text_domain' ),
		'search_items'          => __( 'Buscar slider', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el slider', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este slider', 'text_domain' ),
		'items_list'            => __( 'Lista de sliders', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de sliders', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de sliders', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Slider', 'text_domain' ),
		'description'           => __( 'Post para mostrar las imágenes del slider', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-camera',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'slider', $args );

}
add_action( 'init', 'slider_post_type', 0 );

?>
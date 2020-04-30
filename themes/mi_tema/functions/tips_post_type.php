<?php

// Register Custom Post Type
function tips_post_type() {

	$labels = array(
		'name'                  => _x( 'Tips', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Tip', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Tips', 'text_domain' ),
		'name_admin_bar'        => __( 'Tip', 'text_domain' ),
		'archives'              => __( 'Archivos de tips', 'text_domain' ),
		'attributes'            => __( 'Atributos de tips', 'text_domain' ),
		'parent_item_colon'     => __( 'Tips principal:', 'text_domain' ),
		'all_items'             => __( 'Todos los tips', 'text_domain' ),
		'add_new_item'          => __( 'Agrega un nuevo tip', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo tip', 'text_domain' ),
		'edit_item'             => __( 'Editar tip', 'text_domain' ),
		'update_item'           => __( 'Actualizar tip', 'text_domain' ),
		'view_item'             => __( 'Ver tip', 'text_domain' ),
		'view_items'            => __( 'Ver tips', 'text_domain' ),
		'search_items'          => __( 'Buscar tips', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en tips', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este tip', 'text_domain' ),
		'items_list'            => __( 'Lista de tips', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de tips', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de tips', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Tip', 'text_domain' ),
		'description'           => __( 'Post dedicado a los tips de viajes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'tips', $args );

}
add_action( 'init', 'tips_post_type', 0 );

?>
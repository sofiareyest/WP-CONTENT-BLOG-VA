<?php 

/**
 * Import functions folder
 * Imports all the files inside the functions folder 
 * and adds them into functions file
 *
 * @return  void
 * @since   1.0
 * @version 1.3
 */
require_once get_template_directory() . '/functions/__get_files_from.php';
$files = get_files_from( $theme_options['functions'] );

foreach($files as $file) {
	require_once $file;
}


/**
 * Check Minimum WP version
 * This theme only works in WordPress 4.8 or later.
 *
 * @return  void
 * @since   1.0
 */
if ( version_compare( $GLOBALS['wp_version'], $theme_options['wp_min_version'], '<' ) ) {
	require get_template_directory() . '/functions/back-compat.php';
	return;
}


/**
 * Avoid "Notice: ob_end_flush()" Error
 * Uncomment in case of needed
 *
 * @return  void
 * @since   1.6.0
 * @version 1.0
 */
// remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

function add_cpt_to_loop( $query ) {
	if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
	 
	// Get all your post types
	$post_types = get_post_types();
	 
	$query->set( 'post_type', $post_types );
	return $query;
	}
	}
	add_filter( 'pre_get_posts', 'add_cpt_to_loop' );
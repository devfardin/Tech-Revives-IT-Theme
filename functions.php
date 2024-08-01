<?php
define( 'TRI_THEME_DIR', __DIR__ );
define( 'TRI_THEME_URL', get_stylesheet_directory_uri() );

/**
 * Frontend Styles and Scripts
 */
function TRI_theme_enqueue_frontend_scripts() {
	wp_enqueue_style(
		'tri-style',
		TRI_THEME_URL . '/assets/css/main.css',
		array(),
		filemtime( TRI_THEME_DIR . '/assets/css/main.css' )
	);

}
add_action( 'wp_enqueue_scripts', 'TRI_theme_enqueue_frontend_scripts' );

// Include another file for image size
require_once( TRI_THEME_DIR . '/setup.php' );
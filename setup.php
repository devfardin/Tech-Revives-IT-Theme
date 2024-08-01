<?php
/**
 * Sets up theme defaults
 */
function tech_revives_setup(){

	update_option( 'thumbnail_size_w', 150 );
	update_option( 'thumbnail_size_h', 150 );
	update_option( 'thumbnail_crop', 1 );

	update_option( 'medium_size_w', 1000 );
	update_option( 'medium_size_h', 667 );
	update_option( 'medium_crop', 1 );

}
add_action( 'after_setup_theme', 'tech_revives_setup' );
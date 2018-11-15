<?php
/**
 * Thumbnails configuration.
 *
 * @package Malcolmy_Lite
 */

add_action( 'after_setup_theme', 'malcolmy_lite_register_image_sizes', 5 );
function malcolmy_lite_register_image_sizes() {
	set_post_thumbnail_size( 370, 253, true );

	// Registers a new image sizes.
	add_image_size( 'malcolmy_lite-thumb-s', 150, 150, true );
	add_image_size( 'malcolmy_lite-thumb-m', 400, 400, true );
	add_image_size( 'malcolmy_lite-thumb-l', 1920, 2100, true );
	add_image_size( 'malcolmy_lite-thumb-xl', 1920, 1080, true );
	add_image_size( 'malcolmy_lite-author-avatar', 512, 512, true );
	add_image_size( 'malcolmy_lite-thumb-183-133', 183, 133, true );

	add_image_size( 'malcolmy_lite-thumb-240-100', 240, 100, true );
	add_image_size( 'malcolmy_lite-thumb-560-300', 560, 300, true );
	add_image_size( 'malcolmy_lite-thumb-418-332', 418, 322, true );
	add_image_size( 'malcolmy_lite-thumb-1920-880', 1920, 880, true );
	add_image_size( 'malcolmy_lite-thumb-301-405', 317, 405, true );

	//projects categories
	add_image_size( 'malcolmy_lite-thumb-420-305', 420, 305, true );
	add_image_size( 'malcolmy_lite-thumb-836-608-fullscreen', 836, 608, true );

}

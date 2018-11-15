<?php
/**
 * Menus configuration.
 *
 * @package Malcolmy_Lite
 */

add_action( 'after_setup_theme', 'malcolmy_lite_register_menus', 5 );
function malcolmy_lite_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'malcolmy_lite' ),
		'main'   => esc_html__( 'Main', 'malcolmy_lite' ),
		'footer' => esc_html__( 'Footer', 'malcolmy_lite' ),
		'social' => esc_html__( 'Social', 'malcolmy_lite' ),
	) );
}

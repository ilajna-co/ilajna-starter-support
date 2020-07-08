<?php
/*
Plugin Name: Ilajna starter support
Plugin URI: http://ilajna.co
Description: Supportive features implemented over WP for ilajna starter
Author: Kamal Joshi
Version: 1.0
Author URI: https://twitter.com/joshi_kamal250
*/

/*
@ Stop direct access
*/
if ( !defined('ABSPATH') )
die('-1');

function ilajnas_expose_navigation($data) {
	// TODO :: Make this dynamic
	$id = 2;
	return wp_get_nav_menu_items($id);
}

function ilajnas_expose_navigation_to_rest() {
	register_rest_route( 'wp-menu/v2', '/navigation', [
		'methods' => 'GET',
		'callback' => 'ilajnas_expose_navigation'
    ]);
}
add_action('rest_api_init', 'ilajnas_expose_navigation_to_rest');


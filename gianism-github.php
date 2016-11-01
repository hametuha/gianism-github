<?php
/*
Plugin Name: Gianism Github
Plugin URI: https://gianism.info/add-on/github/
Description: This plugin add github to Gianism.
Author: Hametuha INC.
Version: 1.0.0
License: GPL 2.0 or later
Author URI: https://gianism.info/
*/

defined( 'ABSPATH' ) or die();

load_plugin_textdomain( 'gianhub', false, 'gianism-github/languages' );

/**
 * Show error message.
 */
add_action( 'plugins_loaded', function() {
	if ( ! defined( 'GIANISM_VERSION' ) || ! version_compare( GIANISM_VERSION, '3.0.0', '>=' ) ) {
		add_action( 'admin_notices', function() {
			printf( '<div class="error">%s</div>', __( 'This plugin requires Gianism 3.0', 'gianhub' ) );
		} );
	}
} );

/**
 * Register service
 */
add_filter( 'gianism_additional_service_classes', function( $services ) {
	require __DIR__.'/includes/github.php';
	$services['github'] = 'GianismGithub\\Github';
	return $services;
} );

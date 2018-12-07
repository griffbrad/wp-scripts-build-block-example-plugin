<?php

/**
 * Plugin Name:     wp-scripts block
 * Description:     Proof of concept for building ESNext code with wp-scripts.
 * Text Domain:     wp-cli-block
 * Version:         0.1.0
 */

function wp_scripts_init() {
	$index_js = 'build/src/index.js';
	wp_register_script(
		'wp-scripts-block-editor',
		plugins_url( $index_js, __FILE__ ),
		['wp-blocks', 'wp-i18n', 'wp-element'],
		filemtime( __DIR__ . "/$index_js" )
	);

	if ( function_exists( 'register_block_type' ) ) {
		register_block_type(
			'wp-scripts-block/wp-scripts-block',
			['editor_script' => 'wp-scripts-block-editor']
		);
	}
}
add_action( 'init', 'wp_scripts_init' );


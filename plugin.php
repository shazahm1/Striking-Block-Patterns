<?php
/*
Plugin Name: Striking Block Patterns
Description: Block patterns for the Striking MultiFlex theme.
Version: 1.0
Author: Steven A. Zahm
*/

/**
 * Register block patterns.
 *
 * Since 1.0
 */
add_action(
	'init',
	static function() {

		$categories = array(
			'notification' => array( 'label' => __( 'Notification Boxes', 'easy-themes-striking-block-patterns' ) ),
		);

		foreach ( $categories as $name => $patternProperties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $patternProperties );
			}
		}

		$base = plugin_dir_path( __FILE__ );

		$patterns = array(
			'notification-red-alert-box',
			'notification-blue-alert-box',
			'notification-error-box',
			'notification-error-box-message-with-heading',
			'notification-info-box',
			'notification-info-box-message-with-heading',
			'notification-notice-box',
			'notification-notice-box-message-with-heading',
			'notification-success-box',
			'notification-success-box-message-with-heading',
		);

		foreach ( $patterns as $pattern ) {

			register_block_pattern(
				"easy-themes/striking-block-patterns/{$pattern}",
				require "{$base}patterns/{$pattern}.php"
			);
		}
	}
);

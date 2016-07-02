<?php 
	/**
	* Define constants
	*/
	define('FUTURE_STYLE_URI', get_stylesheet_directory_uri());
	/**
	 * Enqueues scripts and styles.
	 *
	 * @since Future 1.0
	 */
	function future_scripts() {

		global $wp_styles;
		// add font awesome first
		wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/9d56bc066f.js');

		// add google fonts
		wp_enqueue_style('font-raleway', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Raleway:400,800,900');

		// add conditional IE 9
		wp_enqueue_style('future-ie-9', FUTURE_STYLE_URI);
		$wp_styles->add_data('future-ie-9', 'conditional', 'lt IE 9');

		// add conditional IE 8
		wp_enqueue_style('future-ie-8', FUTURE_STYLE_URI);
		$wp_styles->add_data('future-ie-8', 'conditional', 'lt IE 8');
	}
	add_action('wp_enqueue_scripts', 'future_scripts');
?>
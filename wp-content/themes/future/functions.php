<?php 
	/**
	* Define constants
	*/
	define('FUTURE_MAIN_STYLE', get_stylesheet_uri());
	define('FUTURE_TEMPLATE_PATH', get_template_directory_uri());
	/**
	 * Enqueues scripts and styles.
	 *
	 * @since Future 1.0
	 */
	function future_scripts() {

		// add html5 shiv if IE8
		wp_enqueue_script('html5-shiv', FUTURE_TEMPLATE_PATH . '/assets/js/ie/html5shiv.js');
		wp_script_add_data('html5-shiv', 'conditional', 'lte IE 8');

		// add font awesome
		wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/9d56bc066f.js');

		// add google fonts
		wp_enqueue_style('font-raleway', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Raleway:400,800,900');

		// add main theme stylesheet
		wp_enqueue_style('future-style', FUTURE_MAIN_STYLE);

		// add conditional IE 9
		wp_enqueue_style('future-ie-9', FUTURE_TEMPLATE_PATH . '/assets/css/ie9.css');
		wp_style_add_data('future-ie-9', 'conditional', 'lt IE 9');

		// add conditional IE 8
		wp_enqueue_style('future-ie-8', FUTURE_TEMPLATE_PATH . '/assets/css/ie8.css');
		wp_style_add_data('future-ie-8', 'conditional', 'lt IE 8');
	}
	add_action('wp_enqueue_scripts', 'future_scripts');
?>
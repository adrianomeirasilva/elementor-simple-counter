<?php
	/**
	* Plugin Name: Contador Simples
	* Description: Adiciona no painel de controles do Elements um contador simples.
	* Plugin URI:  https://github.com/adrianomeirasilva/elementor-simple-counter
	* Version:     1.0.0
	* Author:      Adriano Meira
	* Author URI:  https://www.adrianomeira.com
	* Text Domain: elementor-simple-counter
	*/

	if(!defined('ABSPATH')){
		exit;
	}

	define('BASE_DIR', dirname(__FILE__) . '/');
	$base_url = WP_PLUGIN_URL . '/' . basename(BASE_DIR) . '/';
	if (force_ssl_admin()) {
		$base_url = str_replace('http://', 'https://', $base_url);
	}
	define('BASE_URL', $base_url);
	define('IMG_URL', $base_url . 'img/');
	define('CSS_URL', $base_url . 'css/');
	define('TMPL_REQUIRE', BASE_DIR . 'tmpl/');

	function register_counter_control($controls_manager){
		require_once( __DIR__ . '/controls/counter.php' );
		$controls_manager->register(new \Elementor_Counter_Control());

	}
	add_action('elementor/controls/register', 'register_counter_control');


	function register_counter_widget($widgets_manager) {
		require_once( __DIR__ . '/widgets/counter-widget.php' );
		$widgets_manager->register( new \Elementor_Counter_Widget());

	}
	add_action('elementor/widgets/register', 'register_counter_widget');	

?>
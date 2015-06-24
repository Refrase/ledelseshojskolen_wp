<?php

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	// Register Custom Bootstrap Navigation Walker
	require_once( get_template_directory() .  '/wp_bootstrap_navwalker.php' );

	function register_theme_menus() {
		register_nav_menus(
			array(
				'Hovedmenu' => __( 'Hovedmenu', 'ledelseshojskolen' )
			)
		);
	}
	add_action( 'init', 'register_theme_menus' );

	function lh_theme_styles() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'lh_theme_styles' );

	function lh_theme_js() {
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true );
	}
	add_action( 'wp_enqueue_scripts', 'lh_theme_js' );

?>

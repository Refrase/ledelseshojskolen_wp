<?php

	add_theme_support( 'post-thumbnails' );

	function lh_theme_styles() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'lh_theme_styles' );

	function lh_theme_js() {
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true );
	}
	add_action( 'wp_enqueue_scripts', 'lh_theme_js' );

?>

<?php

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	// Register Custom Bootstrap Navigation Walker
	require_once( get_template_directory() .  '/wp_bootstrap_navwalker.php' );

	// Menu
	function lh_theme_menus() {
		register_nav_menus(
			array(
				'Hovedmenu' => __( 'Hovedmenu', 'ledelseshojskolen' )
			)
		);
	} add_action( 'init', 'lh_theme_menus' );

	// Widget: Tilmeldingsform
	function lh_theme_widgets() {
		$tilmeldingssidebar = array(
			'name' 					=> 'Tilmelding',
			'id' 						=> 'tilmelding',
			'description' 	=> 'Tilmeldingsform til næste højskole her. Vises under "Næste Højskole"',
			'before_widget' => '<article class="nhojsktilm_tilm col-sm-6 col-sm-offset-6 col-md-6">',
			'after_widget'	=> '</article> <!-- .nhojsktilm_tilm -->',
			'before_title'	=> '',
			'after_title'		=> ''
		);
		register_sidebar( $tilmeldingssidebar );
	} add_action( 'widgets_init', 'lh_theme_widgets' );

	// Styling
	function lh_theme_styles() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	} add_action( 'wp_enqueue_scripts', 'lh_theme_styles' );

	// Scripts
	function lh_theme_js() {
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true );
	} add_action( 'wp_enqueue_scripts', 'lh_theme_js' );

	// Disable possibility of changing theme
	add_action('admin_init', 'remove_theme_menus');
	function remove_theme_menus() {
	    global $submenu;
	    unset($submenu['themes.php'][5]);
	    unset($submenu['themes.php'][15]);
	}

?>

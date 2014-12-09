<?php

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}

add_action('init', 'tp_add_menu');
function tp_add_menu()
{
	register_nav_menu('main_menu', 'Menu principal');
}

add_theme_support( 'post-thumbnails' );

?>
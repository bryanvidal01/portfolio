<?php


function bbx_theme_setup() {
	if ( ! isset( $content_width ) ) $content_width = 1200;
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_filter( 'show_admin_bar', '__return_false' );
}
add_action( 'after_setup_theme', 'bbx_theme_setup' );


function bbx_enqueue_scripts() {
	$js_directory = get_template_directory_uri() . '/javascript/';
	wp_register_script( 'global', $js_directory . 'global.js', 'jquery', '1.0' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'global' );
}

@ini_set( 'upload_max_size' , '64M' );

@ini_set( 'post_max_size', '64M');

@ini_set( 'max_execution_time', '300' );

// Thumbnail
add_image_size( 'full_screen', 2000 );


add_action( 'wp_enqueue_scripts', 'bbx_enqueue_scripts' );

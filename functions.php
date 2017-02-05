<?php

//adding css and javascript file
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri(),array(),null );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/js.js', array('jquery'));
	
	//adding third party
	//this is the code to add the bootstrap file into the wordpress theme
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', false, NULL, 'all' );

    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
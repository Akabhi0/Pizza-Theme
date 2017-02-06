<?php

   function my_scripts_enqueue() {
	   
	//this is the code to add style sheet in the wordpress theme
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), null );
	   
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), NULL, true );
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', false, NULL, 'all' );

    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );
	
	//this is the code to add the javascript file into the wordpress theme
    wp_enqueue_script( 'script', get_stylesheet_directory_uri()  . '/js/js.js', array('jquery'));
    }
	
    add_action( 'init', 'my_scripts_enqueue' );


	
    //adding thumbmail for images
    add_theme_support( 'post-thumbnails' );	
	
   //we are going to make theam logo costom
   function theme_prefix_setup() {

	 add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-width' => true,
	 ) );
    }
    add_action( 'after_setup_theme', 'theme_prefix_setup' );
    //this action is used to call the logo

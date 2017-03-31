<?php

   function my_scripts_enqueue() {
	   
	//this is the code to add style sheet in the wordpress theme
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), null ,'' ,'screen');
	   
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
	//this is the code to add the javascript file into the wordpress theme
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/costom.js', array ( 'jquery' ), '', true);
	
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', false, NULL, 'all' );

    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );
	
    }
	
    add_action( 'init', 'my_scripts_enqueue' );


	
    //adding thumbmail for images
    add_theme_support( 'post-thumbnails' );	
	
	
	//this is the code for the adding multiple menus			
	
    function register_my_menus(){
    //write menu code //function used regiter_nav_menu('position','string');	
	register_nav_menus( array(
	//header menu
	 'header-menu' => __( 'Header Menu' ),
     'foot-menu' => __( 'Footer Menu' )
    ) );
    }

    add_action('init','register_my_menus');
			
  
	
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

	function Akabhi_widgets_init() {
		
	//this is the sidebar for footer-2
	register_sidebar( array(
        'name'          => 'Footer-Sidebar-2',
		'id'            => 'footer-sidebar-2',
		'description'   => 'Appears in the footer area',
		'before_widget' => '<li id="company">',
		'after_widget'  => '</li>',
		'before_title'  => '<a href="" class="widget-title">
		                    <img src="http://localhost/wordpress/wp-content/uploads/2017/01/love-pointer.png">',
		'after_title'   => '</a>',
		) );
		
	//this is the sidebar for footer-3	
		register_sidebar( array(
		'name'          => 'Footer-Sidebar-3', //this is the logo and partner widget
        'id'            => 'footer-sidebar-3',		
		'before_widget' => '<li id="partner">',
		'after_widget'  => '</li>',
		'before_title'  => '<div id="jquery_news"><a href=" " class="widget-title">
		                    <img src="http://localhost/wordpress/wp-content/uploads/2017/01/handshake.png">',
		'after_title'   => '</a></div>',
	) );	
	
	}
	
	//this is the action to calling the widget on the wordpress theam
   add_action( 'widgets_init', 'Akabhi_widgets_init' );

   
   
   
   
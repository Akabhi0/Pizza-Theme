<html>
  <head>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<?php wp_head(); ?>
  </head>
  
<body>
   <div id="header">
        <!--thih is the code part where we write the costimze code for logo-->
	          
     	<?php	if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
        } ?>

	  <!--this is the frame work of two level drop down -->
	  <div id="menu_level">
	     <?php  wp_nav_menu(array("theme_location"=>"header-menu")); ?>
	  </div>
	  
   </div>
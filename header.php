<html>
  <head>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<?php wp_head(); ?>
  </head>
  
<body>
   <div id="header">
        <!--thih is the code part where we write the costimze code for logo-->
	          <img id="logo_pic" src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        echo $image[0]; ?>" />
		

	  <!--this is the frame work of two level drop down -->
	  <div id="menu_level">
	     <?php wp_nav_menu(array("location"=>"primary")); ?>
	  </div>
	  
   </div>
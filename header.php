<html>
  <head>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
  </head>
  
<body>
        <!--thih is the code part where we write the costimze code for logo-->
	 <div class="site-header" id="header" role="banner">     
      <nav class="navbar navbar-default">
        <div class="container-fluid">   

        <a class="navbar-brand" href="#">  
     	       <?php	if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
             } ?> 
        </a>

	  <!--this is the frame work of two level drop down -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav">
        <?php  wp_nav_menu(array("theme_location"=>"header-menu")); ?>
      </ul>
	  </div>

      </div>
	  </nav>
   </div>
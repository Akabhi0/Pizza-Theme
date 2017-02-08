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

		<ul id="menu_bar">
           <li><a href="#"> Home </a></li>
		      <ul id="menu_list">
			    <li id="one"><a href="#">Career on</a>
				    <ul id="menu_sub">
				    <li><a href="#">this is</a></li>
				    <li><a href="#">like it</a></li>
					<li><a href="#">Hate me</a></li>
				   </ul></li>
				<li><a href="#">Learn At</a></li>
				<li><a href="#">Grow it</a></li>
				<li><a href="#">Partner</a></li>
			  </ul>
           <li><a href="#"> Blogs </a></li>
           <li><a href="#"> Contact us </a></li>
		   <li><a href="#"> About us </a></li>
        </ul>		 
   </div>
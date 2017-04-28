 <div id="footer"> 
    <ul>
	<li id="footer1">
           <center>
		    <?php  if( is_active_sidebar( 'Footer-Sidebar-3' )): ?>
		    <ul id="sidebar" class="container">
			<?php dynamic_sidebar( "Footer-Sidebar-3" ); ?>
			<?php endif; ?>				  
	        </center>
	</li>
	
	<li id="footer2">
        <ul>	    
	       <li id="footer_logo"> 
            <!--this is the code for costimzable footer logo-->
	        <center>
			 <!--thih is the code part where we write the costimze code for logo-->
	         <?php	if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
             }?>
			</center>
		   </li>
		   
		   <li id="apps"> 
		     <center><h2 class="vc_custom_heading"><b>Services</b></h2></center>
		   </li>
		   
           <li id="info"> 
		     <center>
                <ul id="list_text">
				<?php
				dynamic_sidebar('footer-sidebar-2');
				?>
				</ul>
				</center>
		   </li>	
		   
        </ul>	
	</li>
	
	<li id="footer3"> 
	  <nav class="navbar navbar-default">
		  <a class="lead" href="<?php echo esc_url( __( 'https://techtec.in/', 'pizza theme' ) ); ?>">
		  <?php printf( __( 'copyright &copy resvered design by %s', 'pizza theme' ), 'A.K.Abhi' ); ?></a>
		  <?php  wp_nav_menu(array("theme_location"=>"foot-menu")); ?>
        
   	 </nav>

	</li>
    </ul>

    <?php wp_footer(); ?>
   </div>
</body>
</html>

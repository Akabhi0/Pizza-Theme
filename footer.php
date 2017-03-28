 <div id="footer"> 
    <ul>
	<li id="footer1">
           <center>
		    <?php  if( is_active_sidebar( 'Footer-Sidebar-3' )): ?>
		    <ul id="sidebar">
			<?php dynamic_sidebar( "Footer-Sidebar-3" ); ?>
			<?php endif; ?>				  
	        </center>
	</li>
	
	<li id="footer2" style="background:#4c5b5c;">
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
		     <center><?php 
				     dynamic_sidebar('footer-sidebar-app');					 
			         ?></center>
		   </li>
		   
		   <!------------info of company--------------->
           <li id="info"> 
		     <center>
                <ul id="list_text">
				<?php
				dynamic_sidebar('footer-sidebar-2');
				?>
				</ul>
				</center>
		   </li>	
		   <!------------------------------------------->
        </ul>	
	</li>
	
	<li id="footer3" style="background:#f38630;" > 
	
	  <a class="lead" href="<?php echo esc_url( __( 'https://techtec.in/', 'pizza theme' ) ); ?>">
	  <?php printf( __( 'copyright &copy resvered design by %s', 'pizza theme' ), 'A.K.Abhi' ); ?></a>
	 
	 <?php  wp_nav_menu(array("theme_location"=>"foot-menu")); ?>
	 
	</li>
	
    </ul>
    <?php wp_footer(); ?>
   </div>
</body>
</html>

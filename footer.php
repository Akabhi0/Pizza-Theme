 <div id="footer"> 
    <ul>
	<li id="footer1">
          <center><ul id="widget">
	              <li id="footer_news">
				    <div><a href="" class="widget-title"><img src="http://localhost/wp-content/uploads/2017/02/news.png">Recent News</a></div>
                    <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('news widget') ): ?>
	                <?php endif; ?>				  
			      </li>
				  
				  <li>
                  <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('work widget') ): ?>
	              <?php endif; ?>		  
			      </li>
				  
				  <li>
				  <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('offer widget') ): ?>
	              <?php endif; ?>
			      </li>
				  
				  <li>
	                <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('social widget') ): ?>
	                <?php endif; ?>
			      </li>	  
	              </ul></center>
	</li>
	<li id="footer2">
        <ul>	    
	       <li id="footer_logo"> 
            <!--this is the code for costimzable footer logo-->
	        <center><img src="<?php $custom_logo_id = 41;/*41 is the id of the logo */
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        echo $image[0]; ?>" /></center>
		   </li>
		   
		   <li id="apps"> 
		     <center><?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('apps widget') ): ?>
	         <?php endif; ?></center>
		   </li>
		   
		   
           <li id="info"> 
		     <center><ul>
		        <li id="info_place">
                <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('place widget') ): ?>
	            <?php endif; ?>
				</li>
				
				<li id="info_product"> 
				<?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('product widget') ): ?>
	            <?php endif; ?>
				</li>
				
				<li id="info_company">
                <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('company widget') ): ?>
	            <?php endif; ?>
				</li>
		     </ul></center>
		   </li>	
		   
        </ul>	
	</li>
	
	<li id="footer3"> 
     <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('copyright widget') ): ?>
	 <?php endif; ?> 
	 
	 <?php wp_nav_menu(array("location"=>"footer")); ?>
	</li>
	
    </ul>
    <?php wp_footer(); ?>
   </div>
</body>
</html>
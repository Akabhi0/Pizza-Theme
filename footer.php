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
	   <div id="red"> </div>
	</li>
	<li id="footer3"> footer 3 </li>
 
    </ul>
    <?php wp_footer(); ?>
   </div>
</body>
</html>
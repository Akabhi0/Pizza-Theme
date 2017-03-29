<?php  if(is_page($post_page) ==  have_comments() || have_posts() || has_tag ){
	    ?>
          <div id="feedback_area">	<!--if the page or post having comments-->	  
          <?php  comments_template( '/short-comments.php' );  ?>
		  </div>
		  <div id="breakfast">
	        <center><h1><?php the_title(); ?></h1>
			       <p> There is editable page is showing </p>
            </center>
	      </div>
	
	  <?php } ?>
</div>
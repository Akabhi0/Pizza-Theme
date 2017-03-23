
<?php  if(is_page($post_page) ==  have_comments() || have_posts() ){
	    ?>
          <div id="feedback_area">	<!--if the page or post having comments-->	  
          <?php  comments_template( '/short-comments.php' );  ?>
		  </div>
		 <div id="breakfast">
	        <center><h1><?php the_title(); ?></h1>
			       <p> There is editable page is showing </p>
            </center>
	     </div>
		  
		  
		  
		  
      <?php }else{ ?>
	   
		<div id="page_data">
	        <center><h1>The page has been broken , we are type to fix it </h1>
       	    <p> There is <h1> 404! oopsi</h1> occur </p></center>
	    </div>   
	  <?php } ?>
</div>
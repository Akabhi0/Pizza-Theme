<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body_page">
	
	<?php if(is_page("feedback")){
	      include("lib/page-feedback.php"); 
	      }
		  
	      else if( is_page("breakfast") ){
	      include("lib/page-breakfast.php"); 
          }else 
		  { ?>
	
    <div id="page_data">
	<center><h1>The page has been broken , we are type to fix it </h1>
       	<p> There is <h1> 404! oopsi</h1> occur </p></center>
	</div>
	
    </body>
	
	</div>
<?php  } get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->
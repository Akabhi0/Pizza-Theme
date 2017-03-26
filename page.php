<?php  get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	
	<body id="all_page">	
	<?php
	 $postid = get_the_ID();
        if(is_page($post_page)){
			include("lib/page-all.php");
	    }	
	  ?>
		  <?php   get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->
   </body>
   
   
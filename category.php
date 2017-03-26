<?php  get_header(); //<!--this is the vode for adding the header section in our body or index.php-->
?>
<body id="category" >
<?php
    // This is the code for finding the category id and after that it include category-news.php
    if( is_category(the_category_ID()) ){
	    include("lib/category-all.php"); 
    }
?>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->
</body>
<?php  get_header(); //<!--this is the vode for adding the header section in our body or index.php-->

    if( is_category("news") ){
	    include("lib/category-news.php"); 
    }

?>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->
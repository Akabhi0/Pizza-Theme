<?php 
 /**
 * Template Name: category_news_template
 *
 * @package WordPress
 * @subpackage pizza_theme
 * @since pizza_theme 1.0
 */

 ?>
 <body>
    <div id="news_id">
	   <h1> <?php echo category_description( $category_id ); ?> </h1>
	    <center><h4><?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('news widget') ): ?>
	    <?php endif; ?></h4></center>	
    </div>
 </body>
 <?php get_footer(); ?>
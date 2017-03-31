<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body">
	  <ul>
	    <li id="javascript"> 
				<?php query_posts('showposts=3&post_type=post'); ?>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					
				  </ol>
				  <div class="carousel-inner" role="listbox">
                <?php if(have_posts()) : while (have_posts()) : the_post(); $i++;  ?>
				<?php if($i == 1) { ?>
				  <!-- Wrapper for slides -->
					<div class="item active">
				<?php } else { ?>
				    <div class="item ">
				<?php } ?>
				    <?php if ( has_post_thumbnail() ) {
	                          $url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
					  <img src="<?php echo $url; ?>" alt="<?php the_title; ?>">
					<?php } ?>
					  <div class="carousel-caption">
					  <h2><?php the_title(); ?></h2>
					  <p><?php echo substr(get_the_excerpt(),0,250); ?></p>
					  </div>
					</div>
				    <?php endwhile; endif;  ?>	
				  </div>
                
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				<?php wp_reset_query(); ?> 
	        </div><!-- #content -->	
        
		</li><!-- this is the part where feature image display here -->
				
			<?php  
			$array = array(
			"child_of" => $post->ID,
			"title_li"  => " "
			);
			?>	
			
	    <li id="jquery">
		
             <center><div id="sub_pages"><!--this is the part where sub pages are going to show--> 
		
			      <?php wp_list_pages($array); ?>
				
			 <?php 
			    //this is the way of takinng the name of the child pages
                $arrar = array(
				  "child_of" => $post->ID,  //getting the child page on our front-page
				  "title_li" => ""
				);			  
			   
			    //this is only for taking the thumbnail and little details
				$child_pages_query_args = array(    //#####in this we are using WP_Query() to get all the children from the parent page
					'post_type'   => 'page',
					'post_parent' => $post->ID,
					'orderby'     => 'menu_order'
				);
				$child_pages = new WP_Query( $child_pages_query_args );

					if ( $child_pages->have_posts() ) {
					while ( $child_pages->have_posts() ) {
					$child_pages->the_post();
					
					?>
                   					
					<li id="jquery_pic">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<h5><?php the_title(); ?></h5>
						<h4><?php echo substr(get_the_excerpt(),0,75); ?></h4>
			        </li>
               <!----------------------------------------------------------------->
			 <?php    } } ?>
			 </div></center>
		</li><!-- this is the part where child page display here here -->
	  </ul>
	</div>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->
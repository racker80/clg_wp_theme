<?php



/*****************************************************************************
BUILD THE CHAPTERS POSTS
*****************************************************************************/
$chapters = new WP_Query(array(
	'post_parent' => $top_parent->ID,
	'post_type'=>'build',
	'post_status'=>'publish',
	'orderby'=>'menu_order',
	'order'=>'ASC',
	'showposts'=>'999'
));
?>

<h2><?php echo $top_parent->post_title;?></h2>
<ul class="nav nav-tabs nav-stacked sub-tabs" data-id="<?php echo $post->post_name; ?>-subtabs">
	<?php
	/*****************************************************************************
	LOOP THROUGH THE CHAPTERS
	*****************************************************************************/
		if($chapters->have_posts()) : while($chapters->have_posts()) : $chapters->the_post(); 

		/*****************************************************************************
		CREATE THE ACTIVE STATE
		*****************************************************************************/
			$active = ''; 
			if($chapters->post->ID == $wp_query->post->ID) { 
				$active=' class="active"'; 
			} 
		
	?>
		<li<?php echo $active; ?>>
	    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	  	</li>
	<?php endwhile; endif; wp_reset_postdata(); ?>							
	
</ul>

<h5>Still need help?</h5>
<ul class="unstyled">
	<li>
		<a href="#" class=""><i class="icon-comment"></i> Live Chat With Support</a>
	</li>
	<li>
		<a href="#" class=""><i class="icon-ok-sign"></i> Learn about managed hosting</a>
	</li>
	<li>
		<a href="#" class=""><i class="icon-tags"></i> Sales</a>
		
	</li>
</ul>
	
<?php 
/*****************************************************************************
ADD THE MODAL
*****************************************************************************/
include('includes/modal-chapters.php'); 
?>
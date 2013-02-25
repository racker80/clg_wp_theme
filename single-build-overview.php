<?php
/*
Template Name: Build Overview
*/
?>
<?php get_header(); ?>

<?php

		
		$sp = sp();

?>			

<?php include('includes/sub_nav.php'); ?>
<?php
/*****************************************************************************
TOP LEVEL PANE CONTAINER
*****************************************************************************/
?>
	<div class="parent-panes panes">

		<?php 
			while(have_posts()) : the_post(); 			
		?>
		<div class="pane pane-overview">
			<?php the_content(); ?>
		</div>
		<?php endwhile;?>
		
			
	</div><!-- parent panes -->





<?php get_footer(); ?>

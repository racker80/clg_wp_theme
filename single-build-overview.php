<?php
/*
Template Name: Build Overview
*/
?>
<?php get_header(); ?>

<?php $sp = sp(); ?>			

<?php include('application/includes/sub_nav.php'); ?>

<?php
/*****************************************************************************
TOP LEVEL PANE CONTAINER
*****************************************************************************/
?>
	<div class="content-wrapper">

		<?php 
			while(have_posts()) : the_post(); 			
		?>
		<div class="overview-content">
	
			<?php the_content(); ?>
		</div>
		<?php endwhile;?>
		
			
	</div><!-- parent panes -->





<?php get_footer(); ?>

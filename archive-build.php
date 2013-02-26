<?php get_header(); ?>

<?php
	$build = new WP_Query(array(
		'post_type'=>'build',
		'post_status'=>'publish',
		'post_parent'=>0,
		'order'=>'ASC'
	));
?>			

<?php //include('application/includes/sub_nav.php'); ?>

	<div class="featured_list">
		<?php 
		query_posts($query_string.'&post_parent=0&orderby=menu_order&order=ASC');
		while(have_posts()) : the_post(); ?>
			<div class="row-fluid sp-item">
				<div class="sp-item-image span4">
					<a href="<?php the_permalink(); ?>"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/rack_wp.jpg"></a>
				</div>
				<div class="span8 lead">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php lorem(23);?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-large btn-primary">Start Now</a>
				</div>
			</div>
		<?php endwhile; ?>
	</div>

	






<?php get_footer(); ?>

<?php get_header(); ?>

<?php
	$build = new WP_Query(array(
		'post_type'=>'build',
		'post_status'=>'publish',
		'post_parent'=>0,
		'order'=>'ASC'
	));
	/*****************************************************************************
	GET THE TOP LEVEL PARENT PAGE
	*****************************************************************************/
		// Check if page is a child page (any level)
		if ($post->ancestors) {
		    //  Grab the ID of top-level page from the tree
		    $top_parent = get_post(end($post->ancestors));
			print_r($top_parent);
			
		} else {
		    // Page is the top level, so use  it's own id
		    $top_parent = $post;
		}
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
				<?php
				/*****************************************************************************
				TOP LEVEL PANE
				*****************************************************************************/
				?>		
				<div class="pane row">
					<?php
					/*****************************************************************************
					SIDEBAR FOR TABBED CONTENT
					*****************************************************************************/
					?>
					<div id="chapters" class="span3 sidebar">
						<?php include('includes/chapters.php'); ?>
					</div><!-- sidebar -->

				<?php
				/*****************************************************************************
				SUB PANES FOR TABBED CONTENT
				*****************************************************************************/
				?>
					<div class="sub-panes" id="<?php echo $post->post_name; ?>-subtabs">
	
								<div class="span9 pane-content sub-pane" id="<?php echo $post->ID; ?>-chapter">
									
									<?php
									/*****************************************************************************
									PAGE CONTENT LEAD
									*****************************************************************************/
									?>
									<div class="pane-content-header lead">
										<?php the_content(); ?>
										
										<?php include('includes/modal-newpage.php'); ?>
										
									</div><!-- pane content header -->

									<?php
									/*****************************************************************************
									PAGE CONTENT SUB SECTIONS
									*****************************************************************************/
									?>
									<div class="pane-content-copy">
										<?php
										$sections = new WP_Query(array(
											'post_parent' => $post->ID,
											'post_type'=>'build',
											'post_status'=>'publish',
											'orderby'=>'menu_order',
											'order'=>'ASC'
										));
										?>
										
										<?php while($sections->have_posts()) : $sections->the_post(); ?>
											<section class="section" data-id="<?php echo $sections->post->ID; ?>">
												<h4><?php the_title(); ?> 
													<?php include('includes/modal-editpost.php'); ?>
												</h4>
													
												<?php the_content(); ?>
											</section>
										<?php endwhile; wp_reset_postdata(); ?>

										<?php
										$pages = get_children(array( 
										    'post_parent' => $top_parent->ID,
										    'post_type'   => 'any', 
										    'numberposts' => -1,
										    'post_status' => 'any',
											'orderby'=>'menu_order',
											'order'=>'ASC'
										));
										$pages = array_keys($pages);
										$current = array_search($post->ID, $pages);
										if($current+1 < count($pages)) {
											$prevID = get_post($pages[$current-1]);
											$nextID = get_post($pages[$current+1]);
											?>
											<a href="<?php echo get_permalink($nextID->ID); ?>" class="forward btn btn-large btn-primary">Next: <?php echo $nextID->post_title; ?></a>
											
											<?php
										}
										
										?>
										
									</div><!-- pane content copy -->

								</div><!-- sub pane -->
						

					</div><!-- sub panes -->

				</div><!-- pane -->
		<?php endwhile; wp_reset_postdata(); ?>
		


			
	</div><!-- parent panes -->





<?php get_footer(); ?>

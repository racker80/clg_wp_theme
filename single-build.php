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
				<?php
				/*****************************************************************************
				TOP LEVEL PANE
				*****************************************************************************/
				?>		
				<div class="book-container row-fluid">
					<?php
					/*****************************************************************************
					SIDEBAR FOR TABBED CONTENT
					*****************************************************************************/
					?>
					<div id="chapters" class="span3">
						<?php include('application/includes/chapters.php'); ?>
					</div><!-- sidebar -->

				<?php
				/*****************************************************************************
				SUB PANES FOR TABBED CONTENT
				*****************************************************************************/
				?>
					<div id="<?php echo $post->ID; ?>-content" class="span9 chapter-content-container" >
									
									<?php
									/*****************************************************************************
									PAGE CONTENT LEAD
									*****************************************************************************/
									?>
									<div class="chapter-content-header lead">
										<?php the_content(); ?>
										
										<?php include('application/includes/modal-newpage.php'); ?>
										
									</div><!-- pane content header -->

									<?php
									/*****************************************************************************
									PAGE CONTENT SUB SECTIONS
									*****************************************************************************/
									?>
									<div class="chapter-content">
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
												<h2><?php the_title(); ?> 
													<?php include('application/includes/modal-editpost.php'); ?>
												</h2>
													
												<?php the_content(); ?>
											</section>
										<?php endwhile; wp_reset_postdata(); ?>

										
									</div><!-- pane content copy -->
									<?php
									if($sp->next_chapter) :
									?>
									<div class="chapter-navigation">
										<a href="<?php echo get_permalink($sp->next_chapter->ID); ?>" class="btn btn-large btn-primary">Next: <?php echo $sp->next_chapter->post_title; ?></a>
									</div>
									<?php endif;?>
						

					</div><!-- chapter-content -->

				</div><!-- chapter-container -->
		<?php endwhile; wp_reset_postdata(); ?>
		


			
	</div><!-- parent panes -->





<?php get_footer(); ?>

<?php get_header(); ?>
<div id="banner"></div>
<div class="row-fluid">
	
	<div id="" class="pane lead padding span12">
		<?php
		$overview = new WP_Query(array(
			'post_type'=>'plan',
			'post_parent'=>0,
			'order'=>'ASC',
			'orderby'=>'menu_order',
			'meta_query' => array(
					array(
						'key' => 'overview_page',
						'value' => '1',
						'compare' => '='
					)
				)
			));
		
		while($overview->have_posts()) : $overview->the_post();
			the_content();
		endwhile; wp_reset_postdata();
		?>
		<?php
		if(is_user_logged_in()) { ?>
			<div class="edit-pane">
				<div class="btn-group">
					<a class="btn" href="<?php echo get_edit_post_link( $page->ID ); ?>" target="_blank"><i class="icon-pencil"></i> Edit</a>							  
				</div>								
			</div>
		<?php }	?>
	</div>
</div>

		

		
		<div class="">

				<div class="section_header">
				<h2>What do you want to do in the cloud?</h2>
				</div>
				
				<div class="selection_container scroll clearfix">
					<div class="items">
				
						<div class="panel">
							<div class="container">
								<div class="row-fluid ">
									<div class="span12">
										<?php
										$page = get_page_by_title('Goals', 'OBJECT', 'plan');	
											$children = new WP_Query(array(
												'post_parent'=>$page->ID,
												'post_type'=>'plan',
												'post_status'=>'publish',

											));

										$i=1;
										while($children->have_posts()) : $children->the_post(); ?>
											<div class="introCol small" data-index="<?php echo $i; ?>">
												<h3><?php the_title(); ?></h3>
												<p class="lead"><?php echo get_the_excerpt(); ?> </p>
											</div>


										<?php endwhile; wp_reset_postdata();?>
									</div>
								</div>
							</div>
						</div>
						
				
				
							<?php		
							while($children->have_posts()) : $children->the_post(); ?>
								<div class="panel" data-title="<?php the_title(); ?>">
									<div class="row-fluid">

										<div class="panel_content span12">
											<h3><?php the_title(); ?></h3>
											<?php the_content(); ?>

											<?php
											if(is_user_logged_in()) { ?>
												<div class="edit-pane">
													<div class="btn-group">
														<a class="btn" href="<?php echo get_edit_post_link( $children->post->ID ); ?>" target="_blank"><i class="icon-pencil"></i> Edit <?php echo $children->post->post_title; ?></a>							  
													</div>								
												</div>
											<?php }	?>
										</div>

									</div><!-- row -->
								</div><!-- panel -->
							<?php endwhile; wp_reset_postdata();?>
							
						</div>
					</div>
				
		</div>
	
	
		<div class="">

				<div class="section_header">
				<h2>Compliance and Security</h2>
				</div>
				
				<div class="selection_container scroll clearfix">
					<div class="items">
				
						<div class="panel">
							<div class="container">
								<div class="row-fluid ">
									<div class="span12">
										<?php
									$page = get_page_by_title('Compliance and Security', 'OBJECT', 'plan');	
											$children = new WP_Query(array(
												'post_parent'=>$page->ID,
												'post_type'=>'plan',
												'post_status'=>'publish',

											));

										$i=1;
										while($children->have_posts()) : $children->the_post(); ?>
											<div class="introCol small" data-index="<?php echo $i; ?>">
												<h3><?php the_title(); ?></h3>
												<p class="lead"><?php echo get_the_excerpt(); ?> </p>
											</div>


										<?php endwhile; wp_reset_postdata();?>
									</div>
								</div>
							</div>
						</div>
						
				
				
							<?php		
							while($children->have_posts()) : $children->the_post(); ?>
								<div class="panel" data-title="<?php the_title(); ?>">
									<div class="row-fluid">

										<div class="panel_content span12">
											<h3><?php the_title(); ?></h3>
											<?php the_content(); ?>

											<?php
											if(is_user_logged_in()) { ?>
												<div class="edit-pane">
													<div class="btn-group">
														<a class="btn" href="<?php echo get_edit_post_link( $children->post->ID ); ?>" target="_blank"><i class="icon-pencil"></i> Edit <?php echo $children->post->post_title; ?></a>							  
													</div>								
												</div>
											<?php }	?>
										</div>

									</div><!-- row -->
								</div><!-- panel -->
							<?php endwhile; wp_reset_postdata();?>
							
						</div>
					</div>
				
		</div>
		
	<?php
	/**********************************************************************
	**********************************************************************
	GOALS
	**********************************************************************
	*********************************************************************
	$page = get_page_by_title('Goals', 'OBJECT', 'plan');	
	?>
	
	
	<div id="goals" class="wrapper active">
		<div class="section_header">
			<h3>Your Goals</h3>
		</div>
		<div class="switcher">
			<?php
				$children = new WP_Query(array(
					'post_parent'=>$page->ID,
					'post_type'=>'plan',
					'post_status'=>'publish',

				));
			?>
				<select class="rax_select" tabindex="2">
				<?php
				$i=1;
				while($children->have_posts()) : $children->the_post(); ?>
				
					<option value="<?php echo $i; $i++; ?>"><?php the_title(); ?></option> 
	          
				<?php endwhile; wp_reset_postdata();?>
	        </select>
		</div>
		<div class="selection_container scrollable clearfix">
			<div class="items">

				<?php require(locate_template('includes/goals_template.php')); ?>
						
			</div><!-- items -->
		</div>
	</div>
		*/?>
		
		
		
	<?php
	/**********************************************************************
	**********************************************************************
	SECURITY
	**********************************************************************
	**********************************************************************/
		$page = get_page_by_title('Compliance and Security', 'OBJECT', 'plan');	
	?>
	<div id="compliance" class="wrapper">
		<div class="section_header">
			<h3>Compliance and Security</h3>
			<?php echo apply_filters('the_content', $page->post_excerpt); ?>
			
		</div>
		<?php
			$children = new WP_Query(array(
				'post_parent'=>$page->ID,
				'post_type'=>'plan',
				'post_status'=>'publish',
			));
			$children->overview = $page;
		?>
		<div class="switcher">
			<select class="rax_select">
				<?php
				$i=1;
				while($children->have_posts()) : $children->the_post(); ?>
					<option value="<?php echo $i; $i++; ?>"><?php the_title(); ?></option> 	          
				<?php endwhile; wp_reset_postdata();?>
	        </select>
		</div>
		
		<div class="selection_container scrollable">
			<div class="items">
				<?php require(locate_template('includes/compliance_template.php')); ?>
			</div><!-- items -->
		</div>

	</div>
	
	
	
	
	
	<?php
	/**********************************************************************
	**********************************************************************
	SCALE
	**********************************************************************
	**********************************************************************/
		$page = get_page_by_title('Scale Strategy', 'OBJECT', 'plan');	
	?>
	<div id="scale" class="wrapper">
		<div class="section_header">
			<h3>Scale Strategy</h3>
			<?php echo apply_filters('the_content', $page->post_excerpt); ?>
		</div>
		<?php
			$children = new WP_Query(array(
				'post_parent'=>$page->ID,
				'post_type'=>'plan',
				'post_status'=>'publish',
				'order'=>'ASC'
			));
			$children->overview = $page;
		?>
			<div class="switcher">
				<select class="rax_select" style="float:right;">
		          <option value="1">Horizontal</option> 
		          <option value="2">Vertical</option> 
		          <option value="3">Hybrid</option> 
		        </select>
			</div>
			<div class="selection_container scrollable">
				<div class="items">
					<?php include('includes/scale_template.php'); ?>
				</div><!-- items -->
			</div>
			
	</div>
	
	
	<?php
	/**********************************************************************
	**********************************************************************
	OS
	**********************************************************************
	**********************************************************************/
		$page = get_page_by_title('Operating System', 'OBJECT', 'plan');	
	?>
	<div id="os" class="wrapper">
		<div class="section_header">
			<h3><?php echo $page->post_title;?></h3>
			<?php echo apply_filters('the_content', $page->post_title); ?>
		</div>
		<?php
			$children = new WP_Query(array(
				'post_parent'=>$page->ID,
				'post_type'=>'plan',
				'post_status'=>'publish',
				'orderby'=>'menu_order',
				'order'=>'ASC'
			));
			$children->overview = $page;
		?>
		<?php require(locate_template('includes/os_template.php')); ?>
	</div>


	<br>
	
	<?php
	/**********************************************************************
	**********************************************************************
	CONCLUSION
	**********************************************************************
	**********************************************************************/
		$page = get_page_by_title('Planning Conclusion', 'OBJECT', 'plan');	
	?>
	<div id="conclusion" class="panel pane">
		<hr>		
		<?php echo apply_filters('the_content', $page->post_content); ?>
		
		<div class="clearfix">
			<a href="#" class="btn btn-large">Download a PDF</a> <a href="#" class="btn btn-large">Start a chat with sales</a> <a href="<?php bloginfo('url'); ?>/build" class="btn btn-large">Continue to Build &gt;</a>
			
		</div>
		
		<?php
		if(is_user_logged_in()) { ?>
			<br>
				<div class="btn-group">
					<a class="btn" href="<?php echo get_edit_post_link( $page->ID ); ?>" target="_blank"><i class="icon-pencil"></i> Edit</a>							  
				</div>								
			<br>
		<?php }	?>
		
	</div>




<?php get_footer(); ?>

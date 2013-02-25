<div id="subnav" class="navbar">
	<ul class="nav">
		
		<?php
		/*****************************************************************************
		LOOP THROUGH ALL TOP LEVEL PAGES
		*****************************************************************************/
			while($build->have_posts()) : $build->the_post(); 
			
			/*****************************************************************************
			CREATE THE PERMALINK TO THE FIRST POST
			*****************************************************************************/
			if($build->current_post == 0) {
				$permalink = get_bloginfo('url').'/'.$build->post->post_type;
			} else {
				$defaults = array( 
				    'post_parent' => $build->post->ID,
				    'post_type'   => 'build', 
				    'showposts' => 1,
				    'post_status' => 'publish',
					'order'=>'ASC',
					'orderby'=>'menu_order'
				);
				$firtsPost = array_values(get_children($defaults));
				$permalink = get_permalink($firtsPost[0]->ID);
			}
			/*****************************************************************************
			CREATE THE ACTIVE STATE
			*****************************************************************************/
				$active = ''; 
				if($top_parent->ID == $build->post->ID) { 
					$active=' class="active"'; 
				}

		?>
		<li<?php echo $active; ?>>
		    <a href="<?php echo $permalink; ?>"><?php the_title(); ?></a>
		  </li>
		<?php endwhile; wp_reset_postdata(); ?>
	</ul>
</div>
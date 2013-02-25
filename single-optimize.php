<?php get_header(); ?>

<?php
	$build = new WP_Query(array(
		'post_type'=>'optimize',
		'post_status'=>'publish',
		'post_parent'=>0,
		'order'=>'ASC'
	));
?>			

<div id="subnav" class="navbar">
	<ul class="nav tabs">
		<li>
		    <a href="#">Overview</a>
		</li>
		<li>
		    <a href="#">Apache</a>
		</li>
		<li>
		    <a href="#">Security</a>
		</li>
		<li>
		    <a href="#">DNS</a>
		</li>
		<li>
		    <a href="#">3rd Party</a>
		</li>
		<?php
			while($build->have_posts()) : $build->the_post(); 
		?>
		
		<?php endwhile; wp_reset_postdata(); ?>
	</ul>
</div>


<?php
/*****************************************************************************
TOP LEVEL PANE CONTAINER
*****************************************************************************/
?>
	<div class="parent-panes panes">

		<?php
		/*****************************************************************************
		TOP LEVEL PANE
		*****************************************************************************/
		?>		
		<div class="pane row">
		<?php
		/*****************************************************************************
		SUB PANES FOR TABBED CONTENT
		*****************************************************************************/
		?>
				<?php
				/*****************************************************************************
				SINGLE SUB PANE
				*****************************************************************************/
				?>

				<div class="span9 pane-content  pane-left sub-pane">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<header class="article-header">

										<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
					<p class="byline vcard"><?php
					  printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&amp;</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F js, Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_category_list(', '));
					?></p>

									</header> <!-- end article header -->

									<section class="entry-content clearfix" itemprop="articleBody">
										<?php the_content(); ?>
									</section> <!-- end article section -->

									<footer class="article-footer">
										<?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>

									</footer> <!-- end article footer -->


								</article> <!-- end article -->

							<?php endwhile; ?>
							
							<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
						    		<header class="article-header">
						    			<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
						    		</header>
						    		<section class="entry-content">
						    			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
						    		</section>
						    		<footer class="article-footer">
						    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
						    		</footer>
								</article>

							<?php endif; ?>
							
				</div><!-- pane content copy -->




			<?php
			/*****************************************************************************
			RIGHT SIDEBAR FOR LIST CONTENT
			*****************************************************************************/
			?>
				<div class="span3 sidebar">
					<ul class="unstyled">
						<li>
							<a href="<?php bloginfo('url'); ?>/optimize" class="btn btn-large full"><i class="icon-chevron-left"></i> Go Back to Apache</a>
						</li>
					
					</ul>
					
					<hr>
					
					<h4>Additional Resources</h4>
					<ul class="">
						<li class="active"><a href="#">Knowledge Center</a></li>
						<li><a href="#">Docs</a></li>
						<li><a href="#">.htaccess guide</a></li>
						<li><a href="#">Apache Resource Guide</a></li>
					</ul>
					
					<hr />
					
					<h4>Suggest an article</h4>
					<p>What are you having trouble with?  Let us put an article together.</p>
					<form action="">
						<textarea></textarea>
						<br>
						<button class="btn btn-small">Suggest</button>
					</form>
					
					<hr />
					
					<h5>Still can't find what you need?</h5>
					<ul class="unstyled">
						<li>
							<button class="btn full"><i class="icon-comment"></i> Live Chat With Support</button>
						</li>
						<li>
							<button class="btn full"><i class="icon-tags"></i> Sales</button>
							
						</li>
					</ul>
				</div><!-- sidebar -->
		</div><!-- pane -->
		

			
	</div><!-- parent panes -->





<?php get_footer(); ?>



		

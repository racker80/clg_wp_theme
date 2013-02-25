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

		<div class="pane">
			<div class="hero-unit">
				<h1>Optimizing your Cloud Server</h1>
				<h3>A collection of tips, tricks, and best practices.</h3>
			</div>
			
			<div class="pane-overview-list">
				<h3>Featured Articles</h3>
				<section class="row-fluid">
					<div class="span4 article-overview">
						<div class="row-header">
							<h4>This is an example article that is posted in Apache</h4>
							<p>in: <strong>Apache</strong></p>
						</div>
						<div class="row-content">
							<p>
								<?php lorem(40); ?>
							</p>
							<button class="btn btn-small">View Article</button>
						</div>
					</div>
					<div class="span4 article-overview">
						<div class="row-header">
							<h4>Here is a featured security article</h4>
							<p>in: <strong>Security</strong></p>
						</div>
						<div class="row-content">
							<p>
								<?php lorem(40); ?>
							</p>
							<button class="btn btn-small">View Article</button>
						</div>
					</div>
					<div class="span4 article-overview">
						<div class="row-header">
							<h4>This article will cover Integration with a 3rd party tool</h4>
							<p>in: <strong>3rd Party</strong></p>
						</div>
						<div class="row-content">
							<p>
								<?php lorem(40); ?>
							</p>
							<button class="btn btn-small">View Article</button>
						</div>
					</div>
					
				</section>
				<section class="row-fluid">
					<div class="span4 article-overview">
						<div class="row-header">
							<h4>This is an example article that is posted in Apache</h4>
							<p>in: <strong>Apache</strong></p>
						</div>
						<div class="row-content">
							<p>
								<?php lorem(40); ?>
							</p>
							<button class="btn btn-small">View Article</button>
						</div>
					</div>
					<div class="span4 article-overview">
						<div class="row-header">
							<h4>Here is a featured security article</h4>
							<p>in: <strong>Security</strong></p>
						</div>
						<div class="row-content">
							<p>
								<?php lorem(40); ?>
							</p>
							<button class="btn btn-small">View Article</button>
						</div>
					</div>
					<div class="span4 article-overview">
						<div class="row-header">
							<h4>This article will cover Integration with a 3rd party tool</h4>
							<p>in: <strong>3rd Party</strong></p>
						</div>
						<div class="row-content">
							<p>
								<?php lorem(40); ?>
							</p>
							<button class="btn btn-small">View Article</button>
						</div>
					</div>
					
				</section>
			</div>
		</div>


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
				<div class="span9 pane-content pane-left sub-pane">

					<div class="pane-content-header lead">
						<h3>Optimization for Apache</h3>
						<p><?php lorem(40); ?></p>
					</div><!-- pane content header -->

					<div class="pane-content-copy">
						<section>
							<h4>Example Apache Article</h4>
							<p><?php lorem(45); ?></p>
							<a href="<?php echo get_bloginfo('url'); ?>/optimize/example-article/" class="btn btn-small">View Article</a>
						</section>

						<section>
							<h4>Example Apache Article</h4>
							<p><?php lorem(45); ?></p>

							<a href="<?php echo get_bloginfo('url'); ?>/optimize/example-article/" class="btn btn-small">View Article</a>
						</section>

						<section>
							<h4>Example Apache Article</h4>
							<p><?php lorem(45); ?></p>

							<a href="<?php echo get_bloginfo('url'); ?>/optimize/example-article/" class="btn btn-small">View Article</a>
						</section>

						<section>
							<h4>Example Apache Article</h4>
							<p><?php lorem(45); ?></p>

							<a href="<?php echo get_bloginfo('url'); ?>/optimize/example-article/" class="btn btn-small">View Article</a>
						</section>

					</div><!-- pane content copy -->

				</div><!-- sub pane -->



			<?php
			/*****************************************************************************
			RIGHT SIDEBAR FOR LIST CONTENT
			*****************************************************************************/
			?>
				<div class="span3 sidebar">
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
			<div class="span3 sidebar">
				<h2>Vertical</h2>
				<ul class="nav nav-tabs nav-stacked sub-tabs">
					<li class="active"><a href="#">The Concept</a></li>
					<li><a href="#">Pros and Cons</a></li>
					<li><a href="#">In Practice</a></li>
					
				</ul>
			</div><!-- sidebar -->

		<?php
		/*****************************************************************************
		SUB PANES FOR TABBED CONTENT
		*****************************************************************************/
		?>
			<div class="sub-panes">
				
				<?php
				/*****************************************************************************
				SINGLE SUB PANE
				*****************************************************************************/
				?>
				<div class="span9 pane-content sub-pane">

					<div class="pane-content-header lead">
						<h3>Your Cloud Server</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div><!-- pane content header -->

					<div class="pane-content-copy">
						<section>
							<h4>Mistakes have been made... but not by you!</h4>
							<p>There are a lot of different ways to setup a server and configure it for a content management system like WordPress.  We're going to 
								show you how to do everything you need to have a fully functioning WordPress site that will be able to:</p>
								<ul>
									<li>Provide clean URL structures based on Permalinks using .htaccess</li>
									<li>Have proper user permissions for uploading files to the wp-content directory</li>
									<li>Allow you to download and install plugins</li>
									<li>Some basic server security</li>
								</ul>
						</section>

						<section>
							<h4>Prepare to scale</h4>
							<p>
								Configuration of the server is one thing, but making sure you're setup for the next step of scaling is also critical.  We'll make sure
								You've got your server imaged at the right time, and ready to be load balanced.
							</p>
						</section>

						<section>
							<h4>Optimization</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>


						<button class="forward btn btn-large">Continue</button>
					</div><!-- pane content copy -->

				</div><!-- sub pane -->

				<?php
				/*****************************************************************************
				SINGLE SUB PANE
				*****************************************************************************/
				?>
				<div class="span9 pane-content sub-pane">

					<div class="pane-content-copy">
						<section>
							<h4>Ram</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>
						<section>
							<h4>Region</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>
						<section>
							<h4>Hostname</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>

						<button class="forward btn btn-large">Continue</button>
					</div><!-- pane content copy -->

				</div><!-- sub pane -->
				
				
				<?php
				/*****************************************************************************
				SINGLE SUB PANE
				*****************************************************************************/
				?>
				<div class="span9 pane-content sub-pane">

					<div class="pane-content-copy">
						<section>
							<h4>Things You'll Need</h4>
							<ul>
								<li>SSH User name and Password for your server.  (root@123.456.778)</li>
								<li>Your Database Hostaname (reallylongstringofstuff@10.1.1.1)</li>
								<li>Your Mysql Username and Password (you just set this up!)</li>
							</ul>
							<p>Got all that?</p>
						</section>
						<section>
							<h4>Using a MySQL GUI for easier access</h4>
							<p>You can SSH into your server using terminal and then use command line MySQL commands to do all of this, but a lot of people
							use a GUI to make things a little easier.  
							</p>
							<ul>
								<li>
								If you're using a mac or linux you might want to check out:
								<a href="http://www.sequelpro.com/">http://www.sequelpro.com/</a>.
								</li>

								<li>
								If you're using windows you might want to check out:
								<a href="http://www.heidisql.com/">http://www.heidisql.com/</a>.
								</li>
							</ul>

							
						</section>
						<section>
							<h4>Connecting using an SSH Tunnel - Easier than it sounds</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>
						
						<section>
							<h4>Upload your database</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<h5>Replacing your development url with your new site url in one SQL command</h5>
							<pre>Loremor incididunm, qudoate velitt non prnt mollit anim id est laborum.</pre>
						</section>

						<button class="forward btn btn-large">Continue</button>
					</div><!-- pane content copy -->

				</div><!-- sub pane -->
				
				
			</div><!-- sub panes -->

		</div><!-- pane -->
		
		
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
			<div class="span3 sidebar">
				<h2>Rack Connect</h2>
				<ul class="nav nav-tabs nav-stacked sub-tabs">
					<li class="active"><a href="#">The Concept</a></li>
					<li><a href="#">Pros and Cons</a></li>
					<li><a href="#">In Practice</a></li>
					
				</ul>
			</div><!-- sidebar -->

		<?php
		/*****************************************************************************
		SUB PANES FOR TABBED CONTENT
		*****************************************************************************/
		?>
			<div class="sub-panes">
				
				<?php
				/*****************************************************************************
				SINGLE SUB PANE
				*****************************************************************************/
				?>
				<div class="span9 pane-content sub-pane">

					<div class="pane-content-header lead">
						<h3>Your Cloud Server</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div><!-- pane content header -->

					<div class="pane-content-copy">
						<section>
							<h4>Mistakes have been made... but not by you!</h4>
							<p>There are a lot of different ways to setup a server and configure it for a content management system like WordPress.  We're going to 
								show you how to do everything you need to have a fully functioning WordPress site that will be able to:</p>
								<ul>
									<li>Provide clean URL structures based on Permalinks using .htaccess</li>
									<li>Have proper user permissions for uploading files to the wp-content directory</li>
									<li>Allow you to download and install plugins</li>
									<li>Some basic server security</li>
								</ul>
						</section>

						<section>
							<h4>Prepare to scale</h4>
							<p>
								Configuration of the server is one thing, but making sure you're setup for the next step of scaling is also critical.  We'll make sure
								You've got your server imaged at the right time, and ready to be load balanced.
							</p>
						</section>

						<section>
							<h4>Optimization</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>


						<button class="forward btn btn-large">Continue</button>
					</div><!-- pane content copy -->

				</div><!-- sub pane -->

				<?php
				/*****************************************************************************
				SINGLE SUB PANE
				*****************************************************************************/
				?>
				<div class="span9 pane-content sub-pane">

					<div class="pane-content-copy">
						<section>
							<h4>Ram</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>
						<section>
							<h4>Region</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>
						<section>
							<h4>Hostname</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>

						<button class="forward btn btn-large">Continue</button>
					</div><!-- pane content copy -->

				</div><!-- sub pane -->
				
				
				<?php
				/*****************************************************************************
				SINGLE SUB PANE
				*****************************************************************************/
				?>
				<div class="span9 pane-content sub-pane">

					<div class="pane-content-copy">
						<section>
							<h4>Things You'll Need</h4>
							<ul>
								<li>SSH User name and Password for your server.  (root@123.456.778)</li>
								<li>Your Database Hostaname (reallylongstringofstuff@10.1.1.1)</li>
								<li>Your Mysql Username and Password (you just set this up!)</li>
							</ul>
							<p>Got all that?</p>
						</section>
						<section>
							<h4>Using a MySQL GUI for easier access</h4>
							<p>You can SSH into your server using terminal and then use command line MySQL commands to do all of this, but a lot of people
							use a GUI to make things a little easier.  
							</p>
							<ul>
								<li>
								If you're using a mac or linux you might want to check out:
								<a href="http://www.sequelpro.com/">http://www.sequelpro.com/</a>.
								</li>

								<li>
								If you're using windows you might want to check out:
								<a href="http://www.heidisql.com/">http://www.heidisql.com/</a>.
								</li>
							</ul>

							
						</section>
						<section>
							<h4>Connecting using an SSH Tunnel - Easier than it sounds</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>
						
						<section>
							<h4>Upload your database</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<h5>Replacing your development url with your new site url in one SQL command</h5>
							<pre>Loremor incididunm, qudoate velitt non prnt mollit anim id est laborum.</pre>
						</section>

						<button class="forward btn btn-large">Continue</button>
					</div><!-- pane content copy -->

				</div><!-- sub pane -->
				
				
			</div><!-- sub panes -->

		</div><!-- pane -->
			
	</div><!-- parent panes -->





<?php get_footer(); ?>

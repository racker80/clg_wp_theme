<?php get_header(); ?>

<?php
	$build = new WP_Query(array(
		'post_type'=>'scale',
		'post_status'=>'publish',
		'post_parent'=>0,
		'order'=>'ASC'
	));
?>			

<div id="subnav" class="navbar">
	<ul class="nav tabs">
		
		<?php
			while($build->have_posts()) : $build->the_post(); 
		?>
		<li>
		    <a href="#"><?php the_title(); ?></a>
		  </li>
		<?php endwhile; wp_reset_postdata(); ?>
	</ul>
</div>



<?php
/*****************************************************************************
TOP LEVEL PANE CONTAINER
*****************************************************************************/
?>
	<div class="parent-panes panes">

		<div class="pane pane-overview">
			<div class="hero-unit">
				<h1>Scaling your Cloud Server</h1>
				<h3>Understanding and walking through some basic scale scenarios</h3>
			</div>
			<div class="pane-overview-content">
				<section class="row-fluid">
					<div class="span5 row-header">
						<h3>Architecture</h3>

					</div>
					<div class="span7 row-content">
						<p>Your server architecture is important for your scale strategy. Having one setup can mean that you have downtime while you try and scale, while having another setup means that the scale will be seamless.

						</p>
					</div>

				</section>

				<section class="row-fluid">
					<div class="span5 row-header">
						<h3>Your Code</h3>

					</div>
					<div class="span7 row-content">
						<p>How you have structured your code can impact scaling. You have to make sure that certain globals are dynamic since when you bring on new servers the actual physical address of certain things change.</p>
					</div>

				</section>
				
				<section class="row-fluid">
					<div class="span5 row-header">
						<h3>Scale Limitations</h3>

					</div>
					<div class="span7 row-content">
						<p>The cloud is really good at some things, but not others. The one major bottle neck is the ability to scale your database if it’s serving lots of reads and writes. Because Cloud hardware is shared, the read/write of the DB is a limiting factor. The best way to handle this is with Rack Connect.</p>
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
		SIDEBAR FOR TABBED CONTENT
		*****************************************************************************/
		?>
			<div class="span3 sidebar">
				<h2>Horizontal</h2>
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
						<h3>About Cloud Databases</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div><!-- pane content header -->

					<div class="pane-content-copy">
						<section>
							<h4>Why Do this first</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>

						<section>
							<h4>Why this is a good idea for Wordpress</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>

						<section>
							<h4>Your database is private</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</section>

						<section>
							<h4>Notes on scaling</h4>
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

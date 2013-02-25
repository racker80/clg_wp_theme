<?php get_header(); ?>


<div id="home">
	
	<div id="banner" class="row-fluid">
		<div class="span4 image">
			Image
		</div>
		<div class="span8 copy hero-unit">
			<div class="pane">
					<h1>Take advantage of the cloud</h1>
					<p>Understand Rackspace cloud infrastructure and scale</p>
			</div>
			<div class="pane">
					<h1>A Complete, Rackspace Guided Walkthrough</h1>
					<p><?php lorem(30); ?></p>
			</div>
			<div class="pane">
					<h1>Learn how a Rackspace Engineer would do it</h1>
					<p><?php lorem(30); ?></p>
			</div>
			<div class="pane">
					<h1>Server Architecture that's built to Scale</h1>
					<p><?php lorem(30); ?></p>
			</div>
		</div>
		<div class="bannertabs">
		  <a href="#"></a>
		  <a href="#"></a>
		  <a href="#"></a>
		</div>
	</div>
	
	<?php/*?>
	<div class="columns row-fluid">
		<div class="col span4">
			<h3>A Complete, Rackspace Guided Walkthrough</h3>
			<p><?php lorem(23);?></p>
		</div>
		<div class="col span4">
			<h3>Server Architecture that's built to Scale</h3>
			<p><?php lorem(23);?></p>
		</div>
		<div class="col span4">
			<h3>Learn how a Rackspace Engineer would do it</h3>
			<p><?php lorem(23);?></p>
		</div>
	</div>
	*/?>
	
	
	<div class="featured">
		<h4 class="section-header">Featured Build</h4>
		<div class="row-fluid">
			<div class="sp-item span12">
				<div class="row-fluid">
					<div class="sp-item-image span4">
						<a href="<?php bloginfo('url'); ?>/build/wordpress"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/rack_wp.jpg"></a>
					</div>
					<div class="span8 lead">
						<h2><a href="<?php bloginfo('url'); ?>/build/wordpress">Building a complete WordPress server that's designed to scale</a></h2>
						<p><?php lorem(23);?></p>
						<a href="<?php bloginfo('url'); ?>/build/wordpress" class="btn btn-large btn-primary">Start Now</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	

	<div class="build-list">
		<h4 class="section-header">RackSpace Cloud Server Builds</h4>
		<div class="row-fluid">
			<div class="sp-item span4">
				<div class="row-fluid">
					<div class="sp-item-image">
						<a href="<?php bloginfo('url'); ?>/build"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/rack_magento.jpg"></a>
					</div>
					<div class="">
						<h4><a href="#">Magento: High traffic, SSL, e-commerce setup and deploy</a></h4>
						<p><?php lorem(23);?></p>
						<a href="#" class="btn btn-small btn-primary">Learn More</a>
					</div>
				</div>
			</div>

			<div class="sp-item span4">
				<div class="row-fluid">
					<div class="sp-item-image ">
						image
					</div>
					<div class="">
						<h4><a href="#">Node JS: Infrastructure for a data intensive web application</a></h4>
						<p><?php lorem(23);?></p>
						<a href="#" class="btn btn-small btn-primary">Learn More</a>
					</div>
				</div>
			</div>

			<div class="sp-item span4">
				<div class="row-fluid">
					<div class="sp-item-image ">
						image
					</div>
					<div class="">
						<h4><a href="#">Mongo DB: How best to scale something that's not SQL</a></h4>
						<p><?php lorem(23);?></p>
						<a href="#" class="btn btn-small btn-primary">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- home -->


<?php get_footer(); ?>

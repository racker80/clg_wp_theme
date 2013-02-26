<?php
$basename = basename($_SERVER['REQUEST_URI']);
$basename = explode('.', $basename);
$class = ' class="active"';
?>

<div id="globalnav">
	<div class="navbar">
			<a class="brand" href="<?php bloginfo('url'); ?>">Support Paths</a>
		    <ul class="nav pull-right">
		      <li<?php if($basename[0] == 'index_build') echo $class; ?>><a href="<?php bloginfo('url'); ?>/build">Build</a></li>
		      <li<?php if($basename[0] == 'index_build') echo $class; ?>><a href="https://cart.rackspace.com/cloud/" target="_blank">Sign Up</a></li>
		      <li<?php if($basename[0] == 'index_build') echo $class; ?>><a href="http://www.rackspace.com/support/" target="_blank">Get Support</a></li>
		      <li<?php if($basename[0] == 'index_build') echo $class; ?>><a href="http://www.rackspace.com/whyrackspace/" target="_blank">About Rackspace</a></li>
		<?php /*?>
		      <li<?php if($basename[0] == 'index_plan') echo $class; ?>><a href="<?php bloginfo('url'); ?>/plan">Plan</a></li>
		      <li<?php if($basename[0] == 'index_scale') echo $class; ?>><a href="<?php bloginfo('url'); ?>/scale">Scale</a></li>
		      <li<?php if($basename[0] == 'index_optimize') echo $class; ?>><a href="<?php bloginfo('url'); ?>/optimize">Optimize</a></li>
		*/?>
		    </ul>

	</div>
</div>
 

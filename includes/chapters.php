<?php
/*****************************************************************************
BUILD THE CHAPTERS POSTS
*****************************************************************************/
//print_r($chapters);

?>

<h4><?php echo $sp->guides[$sp->current_guide]->books[$sp->current_book]->post_title;?></h4>
<ul class="nav nav-tabs nav-stacked sub-tabs" data-id="<?php echo $post->post_name; ?>-subtabs">
				
	<?php
	foreach($sp->guides[$sp->current_guide]->books[$sp->current_book]->chapters as $chapter) {
		//print_r($sp->guides[$sp->current_guide]->books[$sp->current_book]->chapters[$sp->current_chapter]);
		$active = ''; 
		if($chapter->ID == $sp->current_chapter) { 
			$active=' class="active"'; 
		}
		?>
		<li<?php echo $active; ?>>
		    <a href="<?php echo get_permalink($chapter->ID); ?>"><?php echo $chapter->post_title; ?></a>
		</li>
		<?php
	}
	?>
</ul>

<h5>Still need help?</h5>
<ul class="unstyled">
	<li>
		<a href="#" class=""><i class="icon-comment"></i> Live Chat With Support</a>
	</li>
	<li>
		<a href="#" class=""><i class="icon-ok-sign"></i> Learn about managed hosting</a>
	</li>
	<li>
		<a href="#" class=""><i class="icon-tags"></i> Sales</a>
		
	</li>
</ul>
	

<?php 
/*****************************************************************************
ADD THE MODAL
*****************************************************************************/
include(locate_template('includes/modal-chapters.php'));
?>

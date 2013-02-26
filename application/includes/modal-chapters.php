<?php
if(is_user_logged_in()) { ?>
	<button data-target="#newChapter" class="btn" data-toggle="modal"><i class="icon-plus"></i> Add New Chapter</button>
												
	
	<div class="add-page-container">

		<div id="newChapter" class="modal hide fade">
			 <form class="add_build_child">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			    <h3>Add a new Chapter</h3>
			  </div>
			  <div class="modal-body">
					<input type="hidden" name="post_parent" value="<?php echo $post->post_parent; ?>"/>
					<input type="text" name="post_title" placeholder="Title" class="text">
					<input type="hidden" name="post_type" value="build">
					<input type="hidden" name="action" value="add_child_page">
				 	<?php wp_nonce_field('add_child_page','nonce'); ?>
			  </div>
			  <div class="modal-footer">
			    <a href="#" class="btn" data-dismiss="modal">Close</a>
				<input type="submit" class="btn btn-primary" value="Create Page">
			  </div>
			</form>
		</div>
	</div>
<?php }	?>
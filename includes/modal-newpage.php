<?php
if(is_user_logged_in()) { ?>
	<a class="btn" href="<?php echo get_edit_post_link( $post->ID ); ?>" target="_blank"><i class="icon-pencil"></i></a> 
		<button data-target="#myModal-<?php echo $post->post_name; ?>" class="btn" data-toggle="modal"><i class="icon-plus"></i> Add New Page</button>
												
	<div class="add-page-container">

		<div id="myModal-<?php echo $post->post_name; ?>" class="modal hide fade">
			 <form class="add_build_child">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			    <h3>Add a new page</h3>
			  </div>
			  <div class="modal-body">
					<input type="hidden" name="post_parent" value="<?php echo $post->ID; ?>"/>
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
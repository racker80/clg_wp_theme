<?php if(is_user_logged_in()) { ?>
<a href="<?php echo get_edit_post_link( $sections->post->ID ); ?>" target="_blank"><i class="icon-pencil"></i></a> 
<?php /*<a href="#"><i class="icon-trash" data-id="<?php echo $sections->post->ID; ?>" data-nonce="<?php echo wp_create_nonce  ('delete_page'); ?>"></i></a> */?>
<?php } ?>
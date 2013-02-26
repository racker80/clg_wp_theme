<div id="subnav" class="navbar">
	<ul class="nav">



		<?php
		foreach($sp->guides[$sp->current_guide]->books as $book) {
			//print_r($sp->guides[$sp->current_guide]->books[$sp->current_book]->chapters[$sp->current_chapter]);
			$active = ''; 
			if($book->ID == $sp->current_book) { 
				$active=' class="active"'; 
			}
			
			//HIGHLIHGHT THE ROOT ELEMENT
			//todo:  fix this.
			$root = array_values($sp->guides[$sp->current_guide]->books);
			$first = array_shift($root);
			if($post->ID == $sp->current_guide && $book->ID == $first->ID) {
				$active=' class="active"'; 
			}
			?>
			<li<?php echo $active; ?>>
			    <a href="<?php echo get_permalink($book->ID); ?>"><?php echo $book->post_title; ?></a>
			</li>
			<?php
		}
		?>

	</ul>
</div>
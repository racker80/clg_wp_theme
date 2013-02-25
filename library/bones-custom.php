<?php

function sp() {
	global $post, $wp_query;


	$sp = new stdClass();
	
	//BUIDES :: get the base level guides
	$guides = get_children(array(
		'post_type'=>'build',
		'post_status'=>'publish',
		'post_parent'=>0,
		'order'=>'ASC',
		'orderby'=>'menu_order',
	));
	$sp->current_guide = get_post(end($post->ancestors))->ID;
	foreach($guides as $g) {
		
		//BOOKS :: get the books as children
		$books = get_children(array( 
		    'post_parent' => $g->ID,
		    'post_type'   => $g->post_type, 
		    'numberposts' => -1,
		    'post_status' => 'publish',
			'orderby'=>'menu_order',
			'order'=>'ASC',
		));
		foreach($books as $book) {
			unset($book->post_content);
			if($book->ID == $post->post_parent) {
				//$sp['current_book'] = $book->ID;				
				$sp->current_book = $book->ID;				
			}
			if($post->post_parent == $sp->current_guide) {
				$sp->current_book = $post->ID;				
				
			}
			
			//CHAPTERS :: get the chapters as children
			$chapters = get_children(array( 
			    'post_parent' => $book->ID,
			    'post_type'   => $book->post_type, 
			    'numberposts' => -1,
			    'post_status' => 'publish',
				'orderby'=>'menu_order',
				'order'=>'ASC'
			));
			foreach($chapters as $c) {
				unset($c->post_content);
				if($c->ID == $post->ID) {
					//$sp['current_chapter'] = $c->ID;				
					$sp->current_chapter = $c->ID;				
				}
			}
			$book->chapters = $chapters;
		}
		$g->books = $books;
		
	}
	
	//GUIDES AND BOOKS
	
	$sp->guides = $guides;

	//$sp->next_chapter = next($sp->guides[$sp->current_guide]->books[$sp->current_book]->chapters[$sp->current_chapter])->ID;
	

	return $sp;

	
	
	
}


function getNextItem($array, $key)
{
    $keys = array_keys($array);
    //2011-07-29: if $key was found, make sure it isn't the last item in the array
    if ( (false !== ($p = array_search($key, $keys))) && ($p < count($keys) - 1) )
    {
        return array('key' => $keys[++$p], 'value' => $array[$keys[$p]]);
    }
    else
    {
        return false;
    }
}









//ADD REDIRECT
function book_redirect() {
	global $post, $wp_query;
	
	$sp = sp();
	
	
	
	if($post->post_type == 'build' && is_single()) {
		
		if($post->ID == $sp->guides[$sp->current_guide]->books[$sp->current_book]->ID) {
			if($sp->guides[$sp->current_guide]->books[$sp->current_book]->chapters) {
				$url = array_shift($sp->guides[$sp->current_guide]->books[$sp->current_book]->chapters);
				wp_redirect(get_permalink($url->ID));
			}
		}
		

	}

}
add_action('template_redirect', 'book_redirect');









function lorem($word_limit){
	$string = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';


	$words = explode(' ', $string, ($word_limit + 1));
	  if(count($words) > $word_limit)
	  array_pop($words);
	  echo implode(' ', $words);

}

?>
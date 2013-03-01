<?php
// https://github.com/twittem/wp-bootstrap-navwalker
// Register Custom Navigation Walker
require_once('resources/twitter_bootstrap_nav_walker.php');

/*********************
SCRIPTS & ENQUEUEING
*********************/

function unload_bones() {
    remove_action('wp_enqueue_scripts', 'bones_scripts_and_styles', 999);
	// enqueue base scripts and styles
	add_action('wp_enqueue_scripts', 'application_scripts_and_styles', 999);
}
add_action('after_setup_theme','unload_bones', 16);

// loading modernizr and jquery, and reply script
function application_scripts_and_styles() {

	  if (!is_admin()) {

	    // modernizr (without media query polyfill)
	    wp_register_script( 'bones-modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );

	    // register main stylesheet
	    //wp_register_style( 'bones-stylesheet', get_stylesheet_directory_uri() . '/css/styles.css', array(), '', 'all' );

	    // ie-only style sheet
	    wp_register_style( 'bones-ie-only', get_stylesheet_directory_uri() . '/library/css/ie.css', array(), '' );

	    // comment reply script for threaded comments
	    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
	      wp_enqueue_script( 'comment-reply' );
	    }

	    //adding scripts file in the footer
	    wp_register_script( 'bones-js', get_stylesheet_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), '', true );

	    // enqueue styles and scripts
	    wp_enqueue_script( 'bones-modernizr' );
	    //wp_enqueue_style( 'bones-stylesheet' );
	    wp_enqueue_style('bones-ie-only');
	    /*
	    I recommend using a plugin to call jQuery
	    using the google cdn. That way it stays cached
	    and your site will load faster.
	    */
	    wp_enqueue_script( 'jquery' );
	    wp_enqueue_script( 'bones-js' );
	
	
	
	
		wp_register_style( 'application-stylesheet', get_stylesheet_directory_uri() . '/application/css/styles.css', array(), '', 'all' );

	    wp_register_script( 'jquerytools-js', get_stylesheet_directory_uri() . '/application/js/vendor/jquery-tools.min.js', array( 'jquery' ), '', true );
	    wp_register_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/application/css/bootstrap/js/bootstrap.js', array( 'jquery' ), '', true );
	    wp_register_script( 'cookies-js', get_stylesheet_directory_uri() . '/application/js/vendor/jquery.cookies.2.2.0.js', array( 'jquery' ), '', true );
	    wp_register_script( 'plugins-js', get_stylesheet_directory_uri() . '/application/js/plugins.js', array( 'jquery' ), '', true );
	    wp_register_script( 'prototype-js', get_stylesheet_directory_uri() . '/application/js/main.js', array( 'jquery' ), '', true );

	    // enqueue styles and scripts

	    wp_enqueue_style('application-stylesheet');
	    wp_enqueue_script( 'jquerytools-js' );
	    wp_enqueue_script( 'bootstrap-js' );
	    wp_enqueue_script( 'cookies-js' );
	    wp_enqueue_script( 'plugins-js' );
	    wp_enqueue_script( 'prototype-js' );

		// declare the URL to the file that handles the AJAX request (wp-admin/admin-ajax.php)
		wp_localize_script( 'prototype-js', 'rackspace', array( 
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'edit'=>  admin_url( 'post.php?action=edit&post=' )

			) );
			

	  }


}





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
				$sp->current_book_position = $book->menu_order;	
				$sp->next_book = current($books);
				
							
			}
			if($post->post_parent == $sp->current_guide) {
				$sp->current_book = $post->ID;				
				$sp->current_book_position = $post->menu_order;				
				$sp->next_book = current($books);
				
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
					$sp->current_chapter_position = $c->menu_order;				
				}
			}
			$book->chapters = $chapters;
		}
		$g->books = $books;
		
	}
	
	//GUIDES AND BOOKS
	
	$sp->guides = $guides;
	
	$last = end(array_values($sp->guides[$sp->current_guide]->books));
	$last = end(array_values($last->chapters))->ID;
	//print_r($last);
	$chapters = array_values($sp->guides[$sp->current_guide]->books[$sp->current_book]->chapters);
	foreach($chapters as $key=>$value) {
		if($value->menu_order == $sp->current_chapter_position) {
			
			//$sp->next_chapter = next($sp->guides[$sp->current_guide]->books[$sp->current_book]->chapters);
			if($chapters[$key+1]) {
				$sp->next_chapter = $chapters[$key+1];
				
			} else {
				if($post->ID == $last) {
					//$sp->next_chapter = $sp->next_book;
				} else {
					$sp->next_chapter = $sp->next_book;
					
				}
				
			}
			if($chapters[$key-1]) {
				$sp->prev_chapter = $chapters[$key+-1];		
			}
		}
	}
	//$sp->guides[$sp->current_guide]->books[$sp->current_book]->chapters[$sp->current_chapter];
	
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
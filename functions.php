<?php

/* 
Theme Name: My Theme	
Author: Christina Rome
Author URI: http://crome.dreamhosters.com/
Description: This is my theme for web170 class.
Version: 1.0
*/

//Register my menus
register_nav_menus(array('main-menu' => __( 'Main' ) ));
//

//
add_theme_support('post-thumbnails');
//

//
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));
//

//Create Page Excerpts
add_post_type_support('page', 'excerpt');
//

//Get My Title tag
function get_my_title_tag() {
	
	global $post;
	
	if (is_front_page()) { //for the site's front page
		bloginfo('description'); //retrieve the site tagline
	}
	
	elseif (is_page() || is_single()) { //for the site's Pages or Posting
		the_title(); //retrieve the page or posting title
	}
	
	else { //for everything else
		bloginfo('description'); //retrieve the site tagline
	}
	
	if ($post->post_parent) {
		echo ' | '; //separator with spaces
		echo get_the_title($post->post_parent); //retrieve the parent page title
	}
	
	echo ' | '; //separator with spaces
	echo bloginfo('name'); //retrieve the site name
	echo ' | '; //separator with spaces
	echo 'Seattle, WA'; //write in the location
}
//

?>
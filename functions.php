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

?>
<?php

add_theme_support('html5', array('search-form'));

// Add nav menu to the header
function register_my_menu() {
	register_nav_menu('header_nav_menu', __('My header menu hehe'));
}
add_action('init', 'register_my_menu');

function my_widget_setup() {
	register_sidebar(array(
		'name'  	    => 'Sidebar',
		'id'    	    => 'sidebar-1',
		'class' 	    => 'custom',
		'description'   => 'My standard sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>'
	));
}
add_action('widgets_init', 'my_widget_setup');

?>
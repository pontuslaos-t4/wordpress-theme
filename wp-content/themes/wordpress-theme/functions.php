<?php

add_theme_support('html5', array('search-form'));

// Add nav menu to the header
function register_my_menu() {
	register_nav_menu('header_nav_menu', __('My header menu hehe'));
}
add_action('init', 'register_my_menu');


?>
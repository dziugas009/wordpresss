<?php

function mokausiWp_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'mokausiWp_resources');

//Navigation
register_nav_menus(array(
	'primary' => __('Sample Page'),
	'footer' => __('Footer Menu')
));
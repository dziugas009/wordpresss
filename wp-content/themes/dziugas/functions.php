<?php

function mokausiWp_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'mokausiWp_resources');

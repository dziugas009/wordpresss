<?php

function mokausiWp_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'mokausiWp_resources' );

//Navigation
register_nav_menus( array(
	'primary' => __( 'Sample Page' ),
	'footer'  => __( 'Footer Menu' )
) );

//Get top ancestor
function get_top_ancestor_id() {
	global $post;
	if ( $post->post_parent ) {
		$ancestors = array_reverse( get_post_ancestors( $post->ID ) );

		return $ancestors[0];
	} else {
		return $post->ID;
	}
}

function has_children() {
	global $post;

	$pages = get_pages('child_of='. $post->ID);
	return count($pages);
}
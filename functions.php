<?php
/**
 * No Frontend theme functions.
 *
 * @package nofrontend
 */

// Remove references to RSS feeds.
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

/**
 * Responds with an error then dies.
 *
 * @return void
 */
function nofrontend_disabled() {
	wp_die( esc_html( 'Sorry, that is not available.' ), '', [ 'response' => 404 ] );
	exit;
}

// Disable RSS feeds.
add_action( 'do_feed', 'nofrontend_disabled', 1 );
add_action( 'do_feed_rdf', 'nofrontend_disabled', 1 );
add_action( 'do_feed_rss', 'nofrontend_disabled', 1 );
add_action( 'do_feed_rss2', 'nofrontend_disabled', 1 );
add_action( 'do_feed_atom', 'nofrontend_disabled', 1 );
add_action( 'do_feed_rss2_comments', 'nofrontend_disabled', 1 );
add_action( 'do_feed_atom_comments', 'nofrontend_disabled', 1 );

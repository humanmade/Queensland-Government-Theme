<?php
/**
 * Echo the content length of the page.
 */
function qldgovt_the_page_size() {
	echo qldgovt_get_the_page_size();
}

/**
 * Get the content length in bytes and convert it to a readable format.
 *
 * @return false|int|string
 */
function qldgovt_get_the_page_size() {
	$page = get_post( get_the_ID() );
	$content_length = mb_strlen( $page->post_content );
	$content_length = size_format( $content_length );

	return $content_length;
}

/**
 * Echo the starting index for the search results page.
 */
function qldgovt_the_starting_index() {
	echo gldgovt_get_the_starting_index();
}

/**
 * Calculate the starting index for the search results page
 *
 * @return int|mixed|void
 */
function gldgovt_get_the_starting_index(){
	$offset = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

	if ( 2 === $offset ) {
		$offset = get_option( 'posts_per_page' ) + 1;
	} elseif ( $offset > 2 ) {
		$offset = get_option( 'posts_per_page' ) * 2;
	}

	return $offset;
}

/**
 * Echo the ending index for the search results page.
 */
function gldgovt_the_ending_index() {
	echo gldgovt_get_the_ending_index();
}

/**
 * Calculate the ending index for the search results page
 *
 * @return mixed|void
 */
function gldgovt_get_the_ending_index(){
	global $wp_query;

	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	$posts_per_page = get_option( 'posts_per_page' );

	if ( 1 === $paged ) {
		$ending_index = $posts_per_page;
	} elseif ( 2 === $paged ) {
		$ending_index = $posts_per_page * $paged;
	} elseif ( $paged > 2 ) {
		$ending_index = $posts_per_page * $paged;
	}
	if ( $ending_index > $wp_query->found_posts ) {
		$ending_index = $wp_query->found_posts;
	}
	return $ending_index;
}

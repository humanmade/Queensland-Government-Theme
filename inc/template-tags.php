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


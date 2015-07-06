<?php
/**
 * The Footer Widget Area
 *
 * @package WordPress
 */

if ( ! is_active_sidebar( 'footer-widget-area' ) ) {
	return;
}

dynamic_sidebar( 'footer-widget-area' );

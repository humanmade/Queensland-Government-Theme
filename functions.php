<?php
/**
 * Queensland Government functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

if ( ! function_exists( 'qldgovt_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function qldgovt_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on qldgovt, use a find and replace
		 * to change 'qldgovt' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'qldgovt', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'header' => __( 'Header Menu', 'qldgovt' ),
			'main'   => __( 'Main Menu', 'qldgovt' ),
			'footer' => __( 'Footer Menu', 'qldgovt' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
endif; // qldgovt_setup

add_action( 'after_setup_theme', 'qldgovt_setup' );

if ( ! function_exists( 'qldgovt_enqueue_scripts' ) ) {
	function qldgovt_enqueue_scripts() {
		wp_enqueue_script( 'jquery' );
		wp_register_script( 'qg', get_template_directory_uri() . '/assets/js/qg.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'qg' );
	}
}

add_action( 'wp_enqueue_scripts', 'qldgovt_enqueue_scripts' );

/**
 * Register the widget areas.
 *
 */
function qldgovt_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'qldgovt' ),
		'id'            => 'footer-widget-area',
		'description'   => __( 'Footer widget area', 'qldgovt' ),
		'before_widget' => '<div id="%1$s" class="section widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'qldgovt_widgets_init' );

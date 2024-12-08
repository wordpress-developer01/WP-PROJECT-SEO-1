<?php
/**
 * theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}




//  function theme_enqueue_styles() {
//      wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );
//  }

//  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//  function my_theme_enqueue_styles() {
//      wp_enqueue_style('my-theme-style', get_stylesheet_uri());  
//  }
//  add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function enqueue_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );

function add_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on theme, use a find and replace
		* to change 'theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'theme', get_template_directory() . '/languages' );

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
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

 	add_theme_support(
 		'custom-logo',
 		array(
 			'height'      => 250,
 			'width'       => 250,
 			'flex-width'  => true,
 			'flex-height' => true,
 		)
 	);
 }
 add_action( 'after_setup_theme', 'theme_setup' );




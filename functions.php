<?php
/**
 *
 *	functions.php
 *
 * 	The theme's functions and definitions.
 */


/**
 *  1.0 - Define Constants
 */

define(	'THEMEROOT', get_stylesheet_directory_uri()	);
define(	'IMAGES',THEMEROOT . '/images' );
define( 'SCRIPTS', THEMEROOT . '/js' );
define( 'FRAMEWORK', get_template_directory() . '/framework');

/**
 * 	2.0 - Load the framework.
 */

require_once( FRAMEWORK . '/init.php' );

/**
 * 	3.0 - Set up the content width value based on the theme's design.
 */

if ( ! isset( $content_width ) ) {
	$content_width = 800;
}

/**
 * 	4.0 - Set up theme default and register various supported features
 */

if( ! function_exists( 'daboTheme_setup' ) ) {
	function daboTheme_setup(){
		/**
		 *	make the theme available for translation
		 */
		
		$lang_dir = THEMEROOT . '/languages';
		load_theme_textdomain( 'daboTheme' , $lang_dir );

		/**
		 * Add support for post formats.
		 */
		
		add_theme_support( 'post-formats', 
			array(
				'gallery',
				'link',
				'image',
				'quote',
				'video',
				'audio'
				) 
		);

		/**
		 *	Add support for automatic feed links.
		 */
		
		add_theme_support( 'automatic-feed-links' );

		/**
		 * 	Add support for post thumbnails
		 */
		
		add_theme_support( 'post-thumbnails' );

		/**
		 * 	Register nav menus
		 */
		
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu' , 'daboTheme' )
			)
		);
	}

	add_action( 'after_theme_setup' , 'daboTheme_setup' );
}
?>
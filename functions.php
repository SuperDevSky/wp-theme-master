<?php
/**
 * xDevlabs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package xDevlabs
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'xdevlabs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function xdevlabs_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on xDevlabs, use a find and replace
		 * to change 'xdevlabs' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'xdevlabs', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Primary Menu', 'xdevlabs' ),
			)
		);

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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'xdevlabs_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
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
endif;
add_action( 'after_setup_theme', 'xdevlabs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xdevlabs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'xdevlabs_content_width', 640 );
}
add_action( 'after_setup_theme', 'xdevlabs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function xdevlabs_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'xdevlabs' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'xdevlabs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'xdevlabs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function xdevlabs_scripts() {
	wp_enqueue_style( 'xdevlabs-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'xdevlabs-style', 'rtl', 'replace' );

	wp_enqueue_style( 'font-awesome-5', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', null, '5.15.1' );

	wp_enqueue_style( 'rhobii-styles', get_template_directory_uri() . '/styles.css', array(), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_script( 'xdevlabs-navigation', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'xdevlabs_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom comment 
 */
require get_template_directory() . '/inc/comments.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'get_the_archive_title', function ($title) {    
	if ( is_category() ) {    
		$title = single_cat_title( '', false );    
	} elseif ( is_tag() ) {    
		$title = single_tag_title( '', false );    
	} elseif ( is_author() ) {    
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;    
    } elseif ( is_tax() ) { //for custom post types
    	$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
    } elseif (is_post_type_archive()) {
    	$title = post_type_archive_title( '', false );
    }
    return $title;    
});

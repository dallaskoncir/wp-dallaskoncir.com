<?php
/**
 * dallaskoncir functions and definitions
 *
 * @package dallaskoncir
 */

if ( ! function_exists( 'dallaskoncir_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dallaskoncir_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on dallaskoncir, use a find and replace
	 * to change 'dallaskoncir' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'dallaskoncir', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'dallaskoncir' ),
		'blog' => esc_html__( 'Blog Menu', 'dallaskoncir' )
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dallaskoncir_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // dallaskoncir_setup
add_action( 'after_setup_theme', 'dallaskoncir_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dallaskoncir_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dallaskoncir_content_width', 640 );
}
add_action( 'after_setup_theme', 'dallaskoncir_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function dallaskoncir_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dallaskoncir' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'dallaskoncir_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dallaskoncir_scripts() {
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . "/bower_components/fontawesome/css/font-awesome.min.css" );

	wp_enqueue_style( 'dallaskoncir-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');

	wp_enqueue_script(
		'jquery',
		"http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js",
		false, //dependencies
		null, //version number
		true //load in footer
	);

	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', //source
		array( 'jquery' ), //dependencies
		null, //version number
		true //load in footer
	);

	wp_enqueue_script(
	  'scripts', //handle
	  get_template_directory_uri() . '/js/main.js', //source
	  array( 'jquery', 'plugins' ), //dependencies
	  null, // version number
	  true //load in footer
	);

	wp_enqueue_script( 'dallaskoncir-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dallaskoncir_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

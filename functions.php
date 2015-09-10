<?php
/**
 * Salient 2015 functions and definitions
 *
 * @package Salient 2015
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'salient_2015_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function salient_2015_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Salient 2015, use a find and replace
	 * to change 'salient-2015' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'salient-2015', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'salient-2015' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );
    add_action( 'init', 'cd_add_editor_styles' );
    /**
     * Apply theme's stylesheet to the visual editor.
     *
     * @uses add_editor_style() Links a stylesheet to visual editor
     * @uses get_stylesheet_uri() Returns URI of theme stylesheet
     */
    function cd_add_editor_styles() {

        add_editor_style( get_stylesheet_uri() );

    }
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'salient_2015_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // salient_2015_setup
add_action( 'after_setup_theme', 'salient_2015_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function salient_2015_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'salient-2015' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'salient-2015' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'salient-2015' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'The secondary widget area', 'salient-2015' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'salient-2015' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'salient-2015' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'salient-2015' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'salient-2015' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 5, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'salient-2015' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'salient-2015' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 6, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'salient-2015' ),
		'id' => 'fourth-footer-widget-area',
		'description' => __( 'The fourth footer widget area', 'salient-2015' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'salient_2015_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function salient_2015_scripts() {
	wp_enqueue_style( 'salient-2015-style', get_stylesheet_uri() );
	wp_enqueue_style( 'salient-2015-fancybox-style', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css' );
    wp_enqueue_style( 'salient-2015-flickity-style', get_template_directory_uri() . '/css/flickity.min.css' );   
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'salient-2015-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'salient-2015-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_script( 'salient-2015-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'salient-2015-fancybox-js', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.pack.js', array('jquery'), '', true );
    wp_enqueue_script( 'salient-2015-collapse-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
    wp_enqueue_script( 'salient-2015-flickity-js', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array('jquery'), '', true );
    
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'salient_2015_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

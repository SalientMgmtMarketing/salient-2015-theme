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
		'secondary' => __( 'Secondary Menu', 'salient-2015' ),
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
	
	// Custom Image Sizes
	add_image_size( 'cards-5x2', 624, 250, true );
	add_image_size( 'cards-4x3', 420, 250, true );
  	add_image_size( 'portraits', 200, 300, true );
	add_image_size( 'blog_feed', 527, 210, true, array( 'center', 'top' ) ); // Hard crop left top
  	add_image_size( 'header', 1400, 500, true, array( 'center', 'top' ) ); // Hard crop left top
}
endif; // salient_2015_setup
add_action( 'after_setup_theme', 'salient_2015_setup' );


/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


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

	// Area 2A, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Solutions Sidebar', 'salient-2015' ),
		'id' => 'solutions',
		'description' => __( 'Solutions widget area', 'salient-2015' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
  
  	// Area 2B, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Services Sidebar', 'salient-2015' ),
		'id' => 'services',
		'description' => __( 'Services widget area', 'salient-2015' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
  
    // Area 2C, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Technology Sidebar', 'salient-2015' ),
		'id' => 'technology',
		'description' => __( 'Technology widget area', 'salient-2015' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
  
    // Area 2D, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'About Sidebar', 'salient-2015' ),
		'id' => 'about',
		'description' => __( 'About widget area', 'salient-2015' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Area 2E, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Blog Sidebar', 'salient-2015' ),
		'id' => 'blog',
		'description' => __( 'Blog widget area', 'salient-2015' ),
		'before_widget' => '',
		'after_widget' => '',
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
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'salient-2015-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_script( 'salient-2015-custom', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '', true );
  	wp_enqueue_script( 'salient-2015-custom-footer', get_template_directory_uri() . '/assets/js/scripts-footer.js', array('jquery'), '', true );

    
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    wp_localize_script( 'salient-2015-custom', 'screenReaderText', array(
      'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'salient-2015' ) . '</span>',
      'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'salient-2015' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'salient_2015_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/custom-header-styles.php';

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



// Add Shortcode
function buttonSC( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'color' => 'lt-blue',
			'href' => '#'
		), $atts )
	);
	return '<a href="'.$href.'" class="button '.$color.'">'.$content.'</a>';
}
add_shortcode( 'button', 'buttonSC' );



// Hooks button shortcode into TinyMCE
add_action('init', 'add_button');

// Checks if user has appropriate rights
function add_button() {
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
   {
     add_filter('mce_external_plugins', 'add_plugin');
     add_filter('mce_buttons', 'register_button');
   }
}

// Registers the button shortcode button
function register_button($buttons) {
	array_push($buttons, "buttonlink");
	return $buttons;
}
function add_plugin($plugin_array) {
   $plugin_array['buttonlink'] = get_bloginfo('template_url').'/assets/js/tinymce.js';
   return $plugin_array;
}

add_action('admin_head', 'acf_custom_admin_styles');

function acf_custom_admin_styles() {
  echo '<style>
    .column-block {
      display: table-cell;
    }
</style>';
}


// Add Arrow Shortcodes
function arrow_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'direction' => 'right',
		),
		$atts
	);

    return '<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="arrow-' . $atts['direction'] .'">
        <title>arrow</title>
        <desc>geometric arrow</desc>
        <g class="arrow-svg">
          <path d="M10.315 43h69.685l-.047 14h-69.953z"/>
          <path d="M64.45 25l25.888 25h-20.154l-25.888-25h20.154zM64.331 75l25.888-25h-20.154l-25.888 25h20.154z"/>
        </g>
      </svg>';
}
add_shortcode( 'arrow', 'arrow_shortcode' );


// Is page a parent, child or any ancestor of the page
function is_tree($pid)
{
  global $post;
  $ancestors = get_post_ancestors($post->$pid);
  
  $root = count($ancestors) - 1;
  if ($root > 0) {
    $parent = $ancestors[$root];
  }
 
  if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
  {
    return true;
  }
  else
  {
    return false;
  }
};


function remove_head_scripts() {
  remove_action( 'wp_head', 'youtube_embed_add_to_head' );
  add_action( 'wp_footer', 'youtube_embed_add_to_head' );
}
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );



// http://www.gravityhelp.com/forums/topic/input-on-single-line-text-is-cut-off-after
// this handles converting the entered value to hex for storage
//
// strtohex and hextostr functions lifted from here:
// http://www.php.net/manual/en/function.hexdec.php#100578
//
// gform_pre_submission_filter_7 <--- 7 for FORM ID 7
add_filter('gform_pre_submission_filter_2', 'ch_strtohex');
function ch_strtohex($form) {
	// input 5 is the form field I want to convert to hex
	$x = rgpost('input_4');
	$s='';
	// convert the submitted string to hex
	foreach(str_split($x) as $c)
		$s .= sprintf('%02X',ord($c));
	// assign the hex value to the POST field
	$_POST['input_4'] = $s;
	// return the form
	return $form;
}

// retrieve hex and convert before displaying in the admin: single entry view
add_filter('gform_entry_field_value', 'ch_hextostr_single', 10, 4);
function ch_hextostr_single($x, $field, $lead, $form) { 
	// run this code on form 7, field 5 only
	// FORM ID 7, INPUT ID 5
	if ($form['id'] == 2 && $field['id'] == 4) {
		$s='';
		foreach(explode("\n",trim(chunk_split($x,2))) as $h) {
			$s .= chr(hexdec($h));
		}
		// prevent rendering anything that looks like HTML as HTML
		return htmlspecialchars($s);
	}
	else {
		// not (form 7 and field 5), return the original value
		return $x;
	}
}

// http://www.gravityhelp.com/forums/topic/input-on-single-line-text-is-cut-off-after
// retrieve hex and convert before displaying in the admin: entry list view
// note the different filter name here "entries"
add_filter('gform_entries_field_value', 'ch_hextostr_list', 10, 3);
function ch_hextostr_list($x, $form_id, $field_id) { 
	// run this code on form 7, field 5 only
	// change to match your form values
	if ($form_id == 2 && $field_id == 4) {
		$s='';
		foreach(explode("\n",trim(chunk_split($x,2))) as $h) {
			$s .= chr(hexdec($h));
		}
		// prevent rendering anything that looks like HTML as HTML
		return htmlspecialchars($s);
	}
	else {
		// not (form 7 and field 5), return the original value
		return $x;
	}
}

// retrieve hex and convert before displaying in the email notification
add_filter('gform_notification_format', 'ch_hextostr_email', 10, 2);
function ch_hextostr_email($x, $field) { 
	// run this code on form 7, field 5 only
	// FORM ID 7, INPUT ID 5
	if ($form['id'] == 2 && $field['id'] == 4) {
		$s='';
		foreach(explode("\n",trim(chunk_split($x,2))) as $h) {
			$s .= chr(hexdec($h));
		}
		// prevent rendering anything that looks like HTML as HTML
		return htmlspecialchars($s);
	}
	else {
		// not (form 7 and field 5), return the original value
		return $x;
	}
}


// adds anchor to the form submission
add_filter("gform_confirmation_anchor", create_function("","return true;"));
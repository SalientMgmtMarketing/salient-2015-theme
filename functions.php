<?php
/**
 * Salient 2015 functions and definitions
 *
 * @package Salient
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

		/**
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
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'salient-2015' ),
				'secondary' => __( 'Secondary Menu', 'salient-2015' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

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

		// Custom Image Sizes.
		add_image_size( 'cards-5x2', 624, 250, true );
		add_image_size( 'cards-4x3', 420, 250, true );
		add_image_size( 'portraits', 200, 300, true );
		add_image_size( 'blog_feed', 527, 210, true, array( 'center', 'top' ) ); // Hard crop left top.
		add_image_size( 'side_image', 900, 600, true, true ); // Hard crop left top.
		add_image_size( 'header', 1400, 500, true, array( 'center', 'top' ) ); // Hard crop left top.

	}
endif;
// salient_2015_setup.
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

	$theme_version = '1.6.1.5';

	wp_enqueue_style( 'salient-2015-style', get_stylesheet_uri(), '', $theme_version );
	wp_enqueue_style( 'salient-2015-fancybox-style', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'salient-2015-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'salient-2015-custom', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), $theme_version, true );

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

// require get_template_directory() . '/inc/custom-header.php';.
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



/**
 * Adds shortcode for button into TinyMCE
 *
 * @param arra $atts attributes of the shortcode.
 * @param string $content content of the message in the link.
 * @return void
 */
function buttonsc( $atts, $content = null ) {

	// Attributes.
	shortcode_atts(
		array(
			'color' => 'lt-blue',
			'href' => '#',
		), $atts
	);
	return '<a href="' . $atts['href'] . '" class="button ' . $atts['color'] . '">' . $content . '</a>';
}
add_shortcode( 'button', 'buttonsc' );



// Hooks button shortcode into TinyMCE.
add_action( 'init', 'add_button' );

/**
 * Checks if user has appropriate rights.
 */
function add_button() {
	if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
		add_filter( 'mce_external_plugins', 'add_plugin' );
		add_filter( 'mce_buttons', 'register_button' );
	}
}

/**
 * Registers the button shortcode button.
 */
function register_button( $buttons ) {
		array_push( $buttons, 'buttonlink' );
		return $buttons;
}
/**
 * Adds the code to TinyMCE.
 */
function add_plugin( $plugin_array ) {
	$plugin_array['buttonlink'] = get_bloginfo( 'template_url' ) . '/assets/js/tinymce.js';
	return $plugin_array;
}

// Loads custom admin stylesheet for Advanced Custom Fields sections.
add_action( 'admin_head', 'acf_custom_admin_styles' );

/**
 * Adds the inline stylesheet to the page.
 */
function acf_custom_admin_styles() {
	echo '<style>
		.column-block {
			display: table-cell;
		}
	</style>';
}


/**
 * Add Shortcodes to display an arrow on the page as SVG.
 */
function arrow_shortcode( $atts ) {

	// Attributes.
	$atts = shortcode_atts(
		array(
			'direction' => 'right',
		),
		$atts
	);

	return '<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="arrow-' . $atts['direction'] . '">
		<title>arrow</title>
		<desc>geometric arrow</desc>
		<g class="arrow-svg">
			<path d="M10.315 43h69.685l-.047 14h-69.953z"/>
			<path d="M64.45 25l25.888 25h-20.154l-25.888-25h20.154zM64.331 75l25.888-25h-20.154l-25.888 25h20.154z"/>
		</g>
		</svg>';
}
add_shortcode( 'arrow', 'arrow_shortcode' );


/**
 * Is page a parent, child or any ancestor of the page. Returns boolean.
 *
 * $pid = current page ID.
 */
function is_tree( $pid ) {
	global $post;
	$ancestors = get_post_ancestors( $post->$pid );

	$root = count( $ancestors ) - 1;
	if ( $root > 0 ) {
		$parent = $ancestors[ $root ];
	}

	if ( is_page() && (is_page( $pid ) || $post->post_parent === $pid || in_array( $pid, $ancestors, true ) ) ) {
		return true;
	} else {
		return false;
	}
};


// Moves YouTube embed scripts from the footer to the head.
if ( function_exists( 'youtube_embed_add_to_head' ) ) {
	/**
	 * Removed Youtube script from loading in the header and moves it to the footer.
	 */
	function remove_head_scripts() {
		remove_action( 'wp_head', 'youtube_embed_add_to_head' );
		add_action( 'wp_footer', 'youtube_embed_add_to_head' );
	}
	add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );
}

/**
 * Loads the side Image as the background of the left side image.
 */
function side_image_as_background_left() {
	echo 'style="background-image:url(\'' . esc_url( wp_get_attachment_image_url( get_sub_field( 'left_side_image' )['id'], 'side_image' ) ) . '\')"';
}
/**
 * Loads the side Image as the background of the right side image.
 */
function side_image_as_background_right() {
	echo 'style="background-image:url(\'' . esc_url( wp_get_attachment_image_url( get_sub_field( 'right_side_image' )['id'], 'side_image' ) ) . '\')"';
}

/**
 * Header Image Color Overloay.
 */
function header_color_overlay() {
	if ( get_field( 'color_overlay' ) ) {
		echo ' has-overlay ' . esc_attr( sanitize_text_field( get_field( 'color_overlay_color' ) ) );
	}
}

// http://www.gravityhelp.com/forums/topic/input-on-single-line-text-is-cut-off-after
// this handles converting the entered value to hex for storage
//
// strtohex and hextostr functions lifted from here:
// http://www.php.net/manual/en/function.hexdec.php#100578
//
// gform_pre_submission_filter_7 <--- 7 for FORM ID 7.
add_filter( 'gform_pre_submission_filter_2', 'ch_strtohex' );

/**
 * Converts string to hexidecimnal for the 4th field of the form specified.
 */
function ch_strtohex( $form ) {
	// input 5 is the form field I want to convert to hex.
	$x = rgpost( 'input_4' );
	$s = '';
	// convert the submitted string to hex.
	foreach ( str_split( $x ) as $c ) {
			$s .= sprintf( '%02X',ord( $c ) );
	}
	// assign the hex value to the POST field.
	$_POST['input_4'] = $s;
	// return the form.
	return $form;
}

// retrieve hex and convert before displaying in the admin: single entry view.
add_filter( 'gform_entry_field_value', 'ch_hextostr_single', 10, 4 );

/**
 * Converts Hexidecimal to String for Gravity Form.
 */
function ch_hextostr_single( $x, $field, $lead, $form ) {
	// run this code on form 7, field 5 only.
	// FORM ID 7, INPUT ID 5.
	if ( 2 === $form['id'] && 4 === $field['id'] ) {
		$s = '';
		foreach ( explode( "\n",trim( chunk_split( $x,2 ) ) ) as $h ) {
			$s .= chr( hexdec( $h ) );
		}
		// prevent rendering anything that looks like HTML as HTML.
		return htmlspecialchars( $s );
	} else {
		// not (form 7 and field 5), return the original value.
		return $x;
	}
}

// http://www.gravityhelp.com/forums/topic/input-on-single-line-text-is-cut-off-after
// retrieve hex and convert before displaying in the admin: entry list view.
// note the different filter name here "entries".
add_filter( 'gform_entries_field_value', 'ch_hextostr_list', 10, 3 );

/**
 * Converts hexidecimal to string in a list.
 */
function ch_hextostr_list( $x, $form_id, $field_id ) {
	// run this code on form 7, field 5 only.
	// change to match your form values.
	if ( 2 === $form_id && 4 === $field_id ) {
		$s = '';
		foreach ( explode( "\n",trim( chunk_split( $x,2 ) ) ) as $h ) {
			$s .= chr( hexdec( $h ) );
		}
		// prevent rendering anything that looks like HTML as HTML.
		return htmlspecialchars( $s );
	} else {
		// not (form 7 and field 5), return the original value.
		return $x;
	}
}

// retrieve hex and convert before displaying in the email notification.
add_filter( 'gform_notification_format', 'ch_hextostr_email', 10, 2 );
/**
 * Converts input from hexidecimal to string for email notifications.
 */
function ch_hextostr_email( $x, $field ) {
	// run this code on form 7, field 5 only.
	// FORM ID 7, INPUT ID 5.
	if ( 2 === $form['id'] && 4 === $field['id'] ) {
		$s = '';
		foreach ( explode( "\n",trim( chunk_split( $x,2 ) ) ) as $h ) {
			$s .= chr( hexdec( $h ) );
		}
		// prevent rendering anything that looks like HTML as HTML.
		return htmlspecialchars( $s );
	} else {
		// not (form 7 and field 5), return the original value.
		return $x;
	}
}


// adds anchor to the form submission.
// add_filter( 'gform_confirmation_anchor', create_function( '','return true;' ) );

add_filter( 'gform_akismet_enabled_2', '__return_false' );


// Gravity Forms stops recording IP addresses.
add_filter( 'gform_ip_address', '__return_empty_string' );

/**
 * Gravity Wiz // Gravity Forms // Email Domain Validator
 *
 * This snippets allows you to exclude a list of invalid domains or include a list of valid domains for your Gravity Form Email fields.
 *
 * @version   1.4
 * @author    David Smith <david@gravitywiz.com>
 * @license   GPL-2.0+
 * @link      http://gravitywiz.com/banlimit-email-domains-for-gravity-form-email-fields/
 */

class GW_Email_Domain_Validator {

	private $_args;

	/**
	 * Constructor to validate whether a banned domain is being used or not.
	 */
	function __construct( $args ) {
		$this->_args = wp_parse_args( $args, array(
			'form_id' => false,
			'field_id' => false,
			'domains' => false,
			// Translators: %s: email address TLD.
			'validation_message' => __( 'Sorry, <strong>%s</strong> email accounts are not eligible for this form.' ),
			'mode' => 'ban', // also accepts "limit".
		) );

		// convert field ID to an array for consistency, it can be passed as an array or a single ID.
		if ( $this->_args['field_id'] && ! is_array( $this->_args['field_id'] ) ) {
			$this->_args['field_id'] = array( $this->_args['field_id'] );
		}
		$form_filter = $this->_args['form_id'] ? "_{$this->_args['form_id']}" : '';

		add_filter( "gform_validation{$form_filter}", array( $this, 'validate' ) );

	}
	/**
	 * Runs validation of form results to see if the email domain entered passes the tests.
	 */
	function validate( $validation_result ) {

		$form = $validation_result['form'];

		foreach ( $form['fields'] as &$field ) {

			// if this is not an email field, skip.
			if ( RGFormsModel::get_input_type( $field ) !== 'email' ) {
				continue;
			}

			// if field ID was passed and current field is not in that array, skip
			if ( $this->_args['field_id'] && ! in_array( $field['id'], $this->_args['field_id'], true ) ) {
				continue;
			}
			$page_number = GFFormDisplay::get_source_page( $form['id'] );
			if ( $page_number > 0 && $field->pageNumber !== $page_number ) {
				continue;
			}

			if ( GFFormsModel::is_field_hidden( $form, $field, array() ) ) {
				continue;
			}

			$domain = $this->get_email_domain( $field );

			// if domain is valid OR if the email field is empty, skip.
			if ( $this->is_domain_valid( $domain ) || empty( $domain ) ) {
				continue;
			}

			$validation_result['is_valid'] = false;
			$field['failed_validation'] = true;
			$field['validation_message'] = sprintf( $this->_args['validation_message'], $domain );

		}

		$validation_result['form'] = $form;
		return $validation_result;
	}
	/**
	 * Parsed the email domain from the input.
	 */
	function get_email_domain( $field ) {
		$email = explode( '@', rgpost( "input_{$field['id']}" ) );
		return trim( rgar( $email, 1 ) );
	}
	/**
	 * Checks to see if the email address matches the test.
	 */
	function is_domain_valid( $domain ) {

		$mode   = $this->_args['mode'];
		$domain = strtolower( $domain );

		foreach ( $this->_args['domains'] as $_domain ) {

			$_domain = strtolower( $_domain );

			$full_match   = $domain === $_domain;
			$suffix_match = strpos( $_domain, '.' ) === 0 && $this->str_ends_with( $domain, $_domain );
			$has_match    = $full_match || $suffix_match;

			if ( 'ban' === $mode && $has_match ) {
				return false;
			} elseif ( 'limit' === $mode && $has_match ) {
				return true;
			}
		}

		return 'limit' === $mode ? false : true;
	}
	/**
	 * Checks the end of the string.
	 */
	function str_ends_with( $string, $text ) {

		$length      = strlen( $string );
		$text_length = strlen( $text );

		if ( $text_length > $length ) {
			return false;
		}

		return substr_compare( $string, $text, $length - $text_length, $text_length ) === 0;
	}

}

class GWEmailDomainControl extends GW_Email_Domain_Validator { }

// Configuration.
new GW_Email_Domain_Validator(
	array(
		'domains' => array(
			'gmail.com',
			'hotmail.com',
			'yahoo.com',
			'aol.com',
		),
		'validation_message' => __( 'Please use a valid work email address' ),
		'mode' => 'ban',
	)
);

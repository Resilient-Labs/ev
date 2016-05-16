<?php
/**
 * EdibleVentures functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EdibleVentures
 */

if ( ! function_exists( 'ev_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ev_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on EdibleVentures, use a find and replace
	 * to change 'ev' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ev', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ev' ),
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
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ev_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'ev_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ev_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ev_content_width', 640 );
}
add_action( 'after_setup_theme', 'ev_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ev_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ev' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ev' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ev_widgets_init' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' =>__('Primary Menu')
		)
	);
}

add_action('init', 'register_theme_menus');


/**
 * Enqueue scripts and styles.
 */
function ev_scripts() {
	wp_enqueue_style( 'ev-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ev-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ev-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	/**
	 * Custom scripts and styles included
	 */

	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('main_css', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' );
	/**
	 * Register and load font awesome CSS files using a CDN.
	 * @link   http://www.bootstrapcdn.com/#fontawesome
	 * @author FAT Media
	 */
	wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );
	/** array for dependencies and boolean for if it is in the footer**/


	wp_enqueue_script('contact_js', get_template_directory_uri() . '/js/contact.js', '', '', false);
	wp_enqueue_script('portfolio_js', get_template_directory_uri() . '/js/portfolio.js', array('jquery'), '', false);
	wp_enqueue_script('contact_js', get_template_directory_uri() . '/js/contact.js', array('jquery'), '', false);
	wp_enqueue_script('header_js', get_template_directory_uri() . '/js/header.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'ev_scripts' );

/////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////// CODE FOR TEAM PROFILE //////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////

/**
 * Register `team` post type
 */
function team_post_type() {

	// Labels
	$labels = array(
		'name' => _x("Team", "post type general name"),
		'singular_name' => _x("Team", "post type singular name"),
		'menu_name' => 'Team Members',
		'add_new' => _x("Add New", "team item"),
		'add_new_item' => __("Add New Profile"),
		'edit_item' => __("Edit Profile"),
		'new_item' => __("New Profile"),
		'view_item' => __("View Profile"),
		'search_items' => __("Search Profiles"),
		'not_found' =>  __("No Profiles Found"),
		'not_found_in_trash' => __("No Profiles Found in Trash"),
		'parent_item_colon' => ''
	);

	// Register post type
	register_post_type('team' , array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => get_stylesheet_directory_uri() . '/lib/TeamProfiles/team-icon.png',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'team_post_type', 0 );

//////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////// CODE FOR TEAM TAXONOMY //////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////

/**
 * Register `department` taxonomy
 */
function team_taxonomy() {

	// Labels
	$singular = 'Department';
	$plural = 'Departments';
	$labels = array(
		'name' => _x( $plural, "taxonomy general name"),
		'singular_name' => _x( $singular, "taxonomy singular name"),
		'search_items' =>  __("Search $singular"),
		'all_items' => __("All $singular"),
		'parent_item' => __("Parent $singular"),
		'parent_item_colon' => __("Parent $singular:"),
		'edit_item' => __("Edit $singular"),
		'update_item' => __("Update $singular"),
		'add_new_item' => __("Add New $singular"),
		'new_item_name' => __("New $singular Name"),
	);

	// Register and attach to 'team' post type
	register_taxonomy( strtolower($singular), 'team', array(
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => false,
		'labels' => $labels
	) );
}
add_action( 'init', 'team_taxonomy', 0 );

/**
 * Load CSS for template-team.php
 */
function team_styles() {
	if ( is_page_template('template-team.php') )
		wp_enqueue_style( 'team-template', get_stylesheet_directory_uri() . '/css/team.css' );
}
add_action( 'wp_enqueue_scripts', 'team_styles', 101 );


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

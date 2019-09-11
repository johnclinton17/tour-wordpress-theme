<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'wp-bootstrap-starter' ),
		'top-bar' => esc_html__( 'Top bar', 'wp-bootstrap-starter' ),
		'footer' => esc_html__( 'footer', 'wp-bootstrap-starter' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-starter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'address', 'wp-bootstrap-starter' ),
		'id'            => 'address-footer',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="address-footer" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	

}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
	wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	// load bootstrap css
	wp_enqueue_style( 'wp-bootstrap-starter-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, '4.1.0' );
	wp_enqueue_style( 'wp-bootstrap-starter-flexcss', get_template_directory_uri() . '/css/flexslider.css');
	wp_enqueue_style( 'wp-bootstrap-starter-slickcss', get_template_directory_uri() . '/css/slick.css');
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.min.css');
		wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css');
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
	wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array() );
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/js/theme-script.js', array() );
    wp_enqueue_script('wp-bootstrap-starter-flexjs', get_template_directory_uri() . '/js/flexslider-min.js', array() );
    wp_enqueue_script('wp-bootstrap-starter-slickjs', get_template_directory_uri() . '/js/slick.js', array() );
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/js/wow.min.js', array() );
    wp_enqueue_script('skrollr-js', get_template_directory_uri() . '/js/skrollr.min.js', array() );
	wp_enqueue_script( 'wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );


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
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

// google fonts
function add_google_fonts() {
wp_enqueue_style( ' add_google_fonts ', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap', false );}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

// custom post types

//homebanner
function my_custom_post_home_banner() {
  $labels = array(
    'name'               => _x( 'home_banner', 'post type general name' ),
    'singular_name'      => _x( 'home_banner', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'home_banner' ),
    'add_new_item'       => __( 'Add New home_banner' ),
    'edit_item'          => __( 'Edit home_banner' ),
    'new_item'           => __( 'New home_banner' ),
    'all_items'          => __( 'All home_banner' ),
    'view_item'          => __( 'View home_banner' ),
    'search_items'       => __( 'Search home_banner' ),
    'not_found'          => __( 'No home_banner found' ),
    'not_found_in_trash' => __( 'No home_banner found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'home_banner'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our home_banner data',
    'public'        => true,
    'menu_position' => 7,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  'menu_icon'     => 'dashicons-tickets-alt',
  );
  register_post_type( 'home_banner', $args ); 
}
add_action( 'init', 'my_custom_post_home_banner' );

//destinations
function my_custom_post_destination() {
  $labels = array(
    'name'               => _x( 'destinations', 'post type general name' ),
    'singular_name'      => _x( 'destination', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'destination' ),
    'add_new_item'       => __( 'Add New destination' ),
    'edit_item'          => __( 'Edit destination' ),
    'new_item'           => __( 'New destination' ),
    'all_items'          => __( 'All destinations' ),
    'view_item'          => __( 'View destination' ),
    'search_items'       => __( 'Search destinations' ),
    'not_found'          => __( 'No destinations found' ),
    'not_found_in_trash' => __( 'No destinations found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'destinations'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our destinations data',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    "query_var" => true,
    "publicly_queryable" => true,
	'menu_icon'     => 'dashicons-admin-site-alt',
	// 'rewrite' => array('slug' => 'job_search'),
  );
  register_post_type( 'destinations', $args ); 
}
add_action( 'init', 'my_custom_post_destination' );



function my_taxonomies_destinations() {
  $labels = array(
    'name'              => _x( 'destination Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'destination Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search destinations Categories' ),
    'all_items'         => __( 'All destinations Categories' ),
    'parent_item'       => __( 'Parent destinations Category' ),
    'parent_item_colon' => __( 'Parent destinations Category:' ),
    'edit_item'         => __( 'Edit destinations Category' ), 
    'update_item'       => __( 'Update destinations Category' ),
    'add_new_item'      => __( 'Add New Category' ),
    'new_item_name'     => __( 'New destinations Category' ),
    'menu_name'         => __( 'destinations Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'destinations_category', 'destinations', $args );
  
}
add_action( 'init', 'my_taxonomies_destinations', 0 );


//casestudies
function my_custom_post_testimonials() {
  $labels = array(
    'name'               => _x( 'testimonials', 'post type general name' ),
    'singular_name'      => _x( 'testimonials', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'testimonials' ),
    'add_new_item'       => __( 'Add New testimonials' ),
    'edit_item'          => __( 'Edit testimonials' ),
    'new_item'           => __( 'New testimonials' ),
    'all_items'          => __( 'All testimonials' ),
    'view_item'          => __( 'View testimonials' ),
    'search_items'       => __( 'Search testimonials' ),
    'not_found'          => __( 'No testimonials found' ),
    'not_found_in_trash' => __( 'No testimonials found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'testimonials'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our testimonials data',
    'public'        => true,
    'menu_position' => 7,
    
    'capability_type' => 'post',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  'menu_icon'     => 'dashicons-universal-access',
  );
  register_post_type( 'testimonials', $args ); 
}
add_action( 'init', 'my_custom_post_testimonials' );


function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        if(isset($_GET['post_type'])) {
            $type = $_GET['post_type'];
                if($type == 'destinations') {
                    $query->set('post_type',array('destinations'));
                }
        }       
    }
return $query;
}
add_filter('pre_get_posts','searchfilter');
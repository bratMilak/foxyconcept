<?php
/**
 * foxyconcept functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package foxyconcept
 */

if ( ! function_exists( 'foxyconcept_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function foxyconcept_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on foxyconcept, use a find and replace
	 * to change 'foxyconcept' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'foxyconcept', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'foxyconcept' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'foxyconcept_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'foxyconcept_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function foxyconcept_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'foxyconcept_content_width', 640 );
}
add_action( 'after_setup_theme', 'foxyconcept_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function foxyconcept_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'foxyconcept' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'foxyconcept' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'foxyconcept_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function foxyconcept_scripts() {
	wp_enqueue_style( 'foxyconcept-style', get_stylesheet_uri() );
	wp_enqueue_script( 'foxyconcept-slider', get_template_directory_uri() . '/js/swiper.jquery.min.js', array(), '20151215', true );
	// portfolio scripts
	if (is_page_template('portfolio.php')) {
		wp_enqueue_script( 'foxyconcept-img', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', array(), '20151215', true );
		wp_enqueue_script( 'foxyconcept-isotop', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '20151215', true );	
	}
		// single project scripts
	if (is_page_template('single-project.php')) {
		
	}
	wp_enqueue_script( 'foxyconcept-default', get_template_directory_uri() . '/js/app.js', array(), '20151215', true );
	

	// contact scripts
	if (is_page_template('contact.php')) {
		wp_enqueue_script( 'foxyconcept-contact', get_template_directory_uri() . '/js/contact.js', array(), '20151215', true );	
	}
		
	wp_enqueue_script( 'foxyconcept-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foxyconcept_scripts' );

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

function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,700', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
// add_theme_support( 'post-thumbnails' );
function custom_post_type () {
	$labels = array(
		'name' => 'Projects',
		'singular_name' => 'Project',
		'add_new' => 'Add project',
		'all_items' => 'All project',
		'add_new_item' => 'Add project',
		'edit_item' => 'Edit product',
		'new_item' => 'New project',
		'view_item' => 'View project',
		'search_item' => 'Search project',
		'not_found' => 'No project find',
		'not_found_in_trash' => 'No projects found in trash',
		'parent_item_colon' => 'Parent item'
	);
	$args = array (
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		// 'rewrite' => array('slug' => 'projects/%project_categories%'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array (
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revision',
		),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('project', $args);
}
add_action('init','custom_post_type');

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_project_taxonomy', 0 );


add_post_type_support( 'project', 'excerpt', 'thumbnail' ); 
//create a custom taxonomy name it topics for your posts

function create_project_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Project categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Project category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search categories' ),
    'all_items' => __( 'All categories' ),
    'parent_item' => __( 'Parent categories' ),
    'parent_item_colon' => __( 'Parent categories:' ),
    'edit_item' => __( 'Edit categories' ), 
    'update_item' => __( 'Update categories' ),
    'add_new_item' => __( 'Add New categories' ),
    'new_item_name' => __( 'New categories Name' ),
    'menu_name' => __( 'Project categories' ),
  ); 	

// Now register the taxonomy

  register_taxonomy('project_categories',array('project'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'products' ),
  ));

}

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyAiOI1XW8spvWIe_zXlZnXC_O7m0Y4jwfo');
}

add_action('acf/init', 'my_acf_init');

// Changing excerpt length
function new_excerpt_length($length) {
return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

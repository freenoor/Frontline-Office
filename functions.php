<?php
/**
 * lawyer1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lawyer1
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'lawyer1_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lawyer1_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lawyer1, use a find and replace
		 * to change 'lawyer1' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lawyer1', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'lawyer1' ),
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
				'lawyer1_custom_background_args',
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
add_action( 'after_setup_theme', 'lawyer1_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lawyer1_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lawyer1_content_width', 640 );
}
add_action( 'after_setup_theme', 'lawyer1_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lawyer1_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Logo Header', 'lawyer1' ),
			'id'            => 'logo_header',
			'description'   => esc_html__( 'Add widgets here.', 'lawyer1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Call', 'lawyer1' ),
			'id'            => 'call',
			'description'   => esc_html__( 'Add widgets here.', 'lawyer1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Call2', 'lawyer1' ),
			'id'            => 'call2',
			'description'   => esc_html__( 'Add widgets here.', 'lawyer1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Socials Top', 'lawyer1' ),
			'id'            => 'socials',
			'description'   => esc_html__( 'Add widgets here.', 'lawyer1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Adress Top', 'lawyer1' ),
			'id'            => 'adress',
			'description'   => esc_html__( 'Add widgets here.', 'lawyer1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Counter', 'lawyer1' ),
			'id'            => 'counter',
			'description'   => esc_html__( 'Add widgets here.', 'lawyer1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Newsletter', 'lawyer1' ),
			'id'            => 'newsletter',
			'description'   => esc_html__( 'Add widgets here.', 'lawyer1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Contact', 'lawyer1' ),
			'id'            => 'footercontact',
			'description'   => esc_html__( 'Add widgets here.', 'lawyer1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Logo Footer', 'lawyer1' ),
			'id'            => 'logo_footer',
			'description'   => esc_html__( 'Add widgets here.', 'lawyer1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Socials', 'lawyer1' ),
			'id'            => 'socialsfooter',
			'description'   => esc_html__( 'Add widgets here.', 'lawyer1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
}
add_action( 'widgets_init', 'lawyer1_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lawyer1_scripts() {
	wp_enqueue_style( 'lawyer1-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('animate-css', get_template_directory_uri().'/assets/css/animate.css', array(), 'all');
	wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/main.css', array(), 'all');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/bootstrap/bootstrap.min.css', array(), '4.5.0', 'all');
	wp_enqueue_style('swiper-css', get_template_directory_uri().'/assets/swiper/css/swiper.min.css', array(), 'all');
	wp_style_add_data( 'lawyer1-style', 'rtl', 'replace' );

	wp_enqueue_script( 'lawyer1-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/swiper/js/swiper.min.js', array(), true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/bootstrap/bootstrap.min.js', array(), '4.5.0', 'all');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lawyer1_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




function custom_post_type(){

$labels_frontpage = array(
	'name' => 'Slider',
	);
	register_post_type('slider', array(
	'labels' => $labels_frontpage,
	'public' => true,
	'has_archive' => true,
	'publicly_queryable' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'thumbnail',
	'revisions',
	),
	'menu_position' => 8,
	'exclude_from_search' => false,
	'menu_icon' => 'dashicons-format-gallery',
		  ));

		  $labels_frontpage = array(
			'name' => 'Practice Area',
			);
			register_post_type('practicearea', array(
			'labels' => $labels_frontpage,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
			),
			'menu_position' => 8,
			'exclude_from_search' => false,
			'menu_icon' => 'dashicons-format-gallery',
				  ));

				  $labels_frontpage = array(
					'name' => 'Attorneys',
					);
					register_post_type('attorneys', array(
					'labels' => $labels_frontpage,
					'public' => true,
					'has_archive' => true,
					'publicly_queryable' => true,
					'query_var' => true,
					'rewrite' => true,
					'capability_type' => 'post',
					'hierarchical' => false,
					'supports' => array(
					'title',
					'editor',
					'excerpt',
					'thumbnail',
					'revisions',
					),
					'menu_position' => 8,
					'exclude_from_search' => false,
					'menu_icon' => 'dashicons-format-gallery',
						  ));

						  $labels_frontpage = array(
							'name' => 'Blog',
							);
							register_post_type('blog', array(
							'labels' => $labels_frontpage,
							'public' => true,
							'has_archive' => true,
							'publicly_queryable' => true,
							'query_var' => true,
							'rewrite' => true,
							'capability_type' => 'post',
							'hierarchical' => false,
							'supports' => array(
							'title',
							'editor',
							'excerpt',
							'thumbnail',
							'revisions',
							),
							'menu_position' => 8,
							'exclude_from_search' => false,
							'menu_icon' => 'dashicons-format-gallery',
								  ));

}
  
add_action('init', 'custom_post_type');






add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {


$labels2 = array(
'name' => _x( 'Menu Categories', 'taxonomy general gesundheit' ),
'singular_name' => _x( 'Menu Category', 'taxonomy singular gesundheit' ),//jo te kategories
'search_items' => __( 'Search Menu Categories' ),
'all_items' => __( 'All Menu Categories' ),
'parent_item' => __( 'Parent Menu Category' ),
'parent_item_colon' => __( 'Parent Menu Category:' ),
'edit_item' => __( 'Edit Menu Category' ),
'update_item' => __( 'Update Menu Category' ),
'add_new_item' => __( 'Add New Menu Category' ),
'new_item_name' => __( 'New Menu Category Name' ),
'menu_name' => __( 'Menu Categories' ),
);

register_taxonomy('menucategory',array('blog'), array(
'hierarchical' => true,
'labels' => $labels2,
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'menucategory' ),
));
}
<?php
/**
 * mikei functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mikei
 */

include 'inc/component/Article.class.php';

if ( ! function_exists( 'mikei_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mikei_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mikei, use a find and replace
	 * to change 'mikei' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mikei', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'mikei' ),
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
	add_theme_support( 'custom-background', apply_filters( 'mikei_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'mikei_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mikei_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mikei_content_width', 640 );
}
add_action( 'after_setup_theme', 'mikei_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mikei_widgets_init() {

	//default widget
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mikei' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mikei' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	//footer widget
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'mikei' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'mikei' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mikei_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mikei_scripts() {
	wp_enqueue_style( 'mikei-style', get_stylesheet_uri() );

	// wp_enqueue_script( 'mikei-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/main.js', array(), '', true );

	// wp_enqueue_script( 'mikei-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mikei_scripts' );

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


/* ==================================================================
 * Additional Image Sizes
 * ================================================================== */
add_image_size( 'mainBanner_lg', 1200, 800, hard);
add_image_size( 'mainBanner_xs', 600, 600, true);
add_image_size( 'thumb', 600, 350, hard);
add_image_size( 'product', 265, 265, hard);

/* ==================================================================
 * Add the_slug() function
 * ================================================================== */
function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}

/* ==================================================================
 * Main Gallery
 * ================================================================== */
function mainGallery() {

	global $post;

	$attachments = get_posts(array( 
	    'post_type' => 'attachment',
	    'numberposts' => -1,
	    'post_status' =>'any',
	    'post_parent' => $post->ID
	));
	if ($attachments) {
	    
	    foreach ( $attachments as $attachment ) {
			$class = "post-attachment item-banner mime-" . sanitize_title( $attachment->post_mime_type );
			$mobile = wp_get_attachment_image( $attachment->ID, 'mainBanner_xs', true);
			$desktop = wp_get_attachment_image( $attachment->ID, 'mainBanner_lg', true);

			if(is_mobile()) {
				echo '<div class="' . $class . ' data-design-thumbnail">' . $mobile . '</div>';
			} else {
				echo '<div class="' . $class . ' data-design-thumbnail">' . $desktop . '</div>';
			}
			
		}

	}

	wp_reset_postdata();
}

/* ==================================================================
 * Get Articles
 * ================================================================== */

function get_article() {

	// WP_Query arguments
	$args = array (
		'post_status'            => array( 'publish' ),
		'category_name'          => 'article',
		'posts_per_page'         => '1',
		'order'                  => 'ASC',
	);

	// The Query
	$article = new WP_Query( $args );

	// The Loop
	if ( $article->have_posts() ) {
		while ( $article->have_posts() ) {
			$article->the_post();
			get_template_part('template-parts/content', 'post-list');
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();

}

/* ==================================================================
 * Display child pages list
 * use wp_list_pages to grab the child pages and put in a list 
 * ================================================================== */

function get_childpages() { 

	global $post; 
	if ( is_page() && $post->post_parent ) {
	  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	  // echo 'this is a a child page';
	}
	else {
	  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
		
		// echo 'this is a parent page';
	}

	if ( $childpages ) {

		// create the template with the current page lists as displayed before any other child pages
		$html  = '<ul class="nodots">';
		$html .= '<li class="page_item page-item-'. $post->post_parent .'"><a href="'. get_the_permalink($post->post_parent) .'">'. get_the_title($post->post_parent) .'</a></li>'; //current page list
		$html .=  $childpages; // this child pages lists
		$html .= '</ul>';
	}

	return $html;
}

add_shortcode('wpb_childpages', 'get_childpages');


/* ==================================================================
 * Get posts/pages by category
 * ================================================================== */

function get_posts_by_category($category) {
	// WP_Query arguments
	$args = array (
		'post_status'            => array( 'publish' ),
		'cat'                    => $category,
	);

	// The Query
	$posts = new WP_Query( $args );

	// The Loop
	if ( $posts->have_posts() ) {
		while ( $posts->have_posts() ) {
			$posts->the_post();
			the_title();
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();
}

/* ==================================================================
 * Get product posts
 * ================================================================== */

function get_products() {

	// WP_Query arguments
	$args = array (
		'post_status'            => array( 'publish' ),
		'cat'                    => 7,
	);

	// The Query
	$posts = new WP_Query( $args );

	// The Loop
	if ( $posts->have_posts() ) {
		while ( $posts->have_posts() ) {
			$posts->the_post();
			get_template_part('template-parts/content', 'post-product');
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();
}

?>
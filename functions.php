<?php
/**
 * theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme
 */

if ( ! function_exists( 'theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theme_setup() {
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
		'menu-1' => esc_html__( 'Primary Navigation', 'theme' ),
	) );

  /**
   * Register navigation menus
   * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
   */
  register_nav_menus([
    'footer_navigation' => __('Footer Navigation', 'theme')
  ]);

  register_nav_menus([
    'footer_navigation2' => __('Footer Navigation2', 'theme')
  ]);

  register_nav_menus([
    'footer_navigation_social' => __('Footer NavigationSocial', 'theme')
  ]);

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

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_scripts() {
	// Styles
	//wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'theme-main-style', get_template_directory_uri() . '/assets/dist/main.css' );
	wp_enqueue_style( 'theme-custom-style', get_template_directory_uri() . '/assets/css/custom.css' );
  // Scripts
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Clear WP HEAD
 */
require get_template_directory() . '/include/clear-wp-head.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/include/customizer.php';

/**
 * Create custom post types.
 */
require get_template_directory() . '/include/custom-post-type.php';


function get_custom_logo1( $blog_id = 0 ) {
  $html          = '';
  $switched_blog = false;

  if ( is_multisite() && ! empty( $blog_id ) && (int) $blog_id !== get_current_blog_id() ) {
    switch_to_blog( $blog_id );
    $switched_blog = true;
  }

  $custom_logo_id = get_theme_mod( 'custom_logo' );

  // We have a logo. Logo is go.
  if ( $custom_logo_id ) {
    $custom_logo_attr = array(
      'class' => 'custom-logo',
    );

    /*
         * If the logo alt attribute is empty, get the site title and explicitly
         * pass it to the attributes used by wp_get_attachment_image().
         */
    $image_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );
    if ( empty( $image_alt ) ) {
      $custom_logo_attr['alt'] = get_bloginfo( 'name', 'display' );
    }

    /*
         * If the alt attribute is not empty, there's no need to explicitly pass
         * it because wp_get_attachment_image() already adds the alt attribute.
         */
    $html = sprintf(
      '<a href="%1$s" class="custom-logo-link" rel="home">%2$s</a>',
      esc_url( home_url( '/' ) ),
      wp_get_attachment_image( $custom_logo_id, 'full', false, $custom_logo_attr )
    );
  } elseif ( is_customize_preview() ) {
    // If no logo is set but we're in the Customizer, leave a placeholder (needed for the live preview).
    $html = sprintf(
      '<a href="%1$s" class="custom-logo-link" style="display:none;"><img class="custom-logo"/></a>',
      esc_url( home_url( '/' ) )
    );
  }

  if ( $switched_blog ) {
    restore_current_blog();
  }

  /**
   * Filters the custom logo output.
   *
   * @since 4.5.0
   * @since 4.6.0 Added the `$blog_id` parameter.
   *
   * @param string $html    Custom logo HTML output.
   * @param int    $blog_id ID of the blog to get the custom logo for.
   */
  return apply_filters( 'get_custom_logo', $html, $blog_id );
}


function my_custom_mime_types( $mimes ) {

// New allowed mime types.
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  $mimes['doc'] = 'application/msword';

// Optional. Remove a mime type.
  unset( $mimes['exe'] );

  return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );

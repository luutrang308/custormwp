<?php
/**
 * trttheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package trttheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'trttheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function trttheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on trttheme, use a find and replace
		 * to change 'trttheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'trttheme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'trttheme' ),
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
				'trttheme_custom_background_args',
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
add_action( 'after_setup_theme', 'trttheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function trttheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'trttheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'trttheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function trttheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'trttheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'trttheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'trttheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function trttheme_scripts() {
	wp_enqueue_style( 'trttheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'trttheme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'trttheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'trttheme_scripts' );

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

/* PHP TR */
require_once( get_template_directory().'/vc-components/vc-soda-blockquote.php' );
/* PHP TR */
require_once( get_template_directory().'/vc-components/vc-slider-banner-tr.php' );

require_once( get_template_directory().'/vc-components/tr-title-page.php' );


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* import file css and js */
function loadstyle()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style-tr.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');


    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('jquery');

    /*wp_register_script('custromtr', get_template_directory_uri() . '/assets/js/custrom-tr.js');
    wp_enqueue_script('custromtr');*/

    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js');
    wp_enqueue_script('wow');

    wp_register_script('slick', get_template_directory_uri() . '/assets/slick/slick.min.js');
    wp_enqueue_script('slick');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts', 'loadstyle');

/**/

/*if(!class_exists('SHOW_TEXT_SHORTCODE')){
    class SHOW_TEXT_SHORTCODE{
        public function __construct()
        {
            add_shortcode('show_text', array($this, 'shortcode_show_text'));
            add_action('vc_before_init', array($this, 'show_text_integrate_vc'));
        }

        public function shortcode_show_text($atts){
         $text = '';
            $atts = shortcode_atts(array(
                'text' => '',
            ), $atts);

            return $text;
        }

        public function show_text_integrate_vc()
        {
            vc_map( array(
                'name' => esc_html__('Show Text', 'dgt-framework'),
                'base' => 'show_text',
                'category' => esc_html__('', 'dgt-framework'),
                'icon' => 'dgt-show_text',
                "params" => array(
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__( 'Enter Text', 'dgt-framework' ),
                        'param_name' => 'text',
                        'description' => esc_html__( '', 'dgt-framework' )
                    )
                )
            ) );
        }
    }
    new SHOW_TEXT_SHORTCODE();
}

$atts = shortcode_atts(array(
    'text' => '',
), $atts);
return $text; // Xử lí hiển thị

add_shortcode('show_text', 'shortcode_show_text');

public function __construct()
{
    add_shortcode('show_text', array($this, 'shortcode_show_text'));
}*/
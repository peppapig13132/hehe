<?php
/**
 * Shapely functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shapely
 */
if ( ! function_exists( 'shapely_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shapely_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Shapely, use a find and replace
		 * to change 'shapely' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shapely', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/**
		 * Add support for the custom logo functionality
		 */
		add_theme_support(
			'custom-logo', array(
				'height'      => 55,
				'width'       => 135,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support(
			'custom-header', apply_filters(
				'shapely_custom_header_args', array(
					'default-image'      => '',
					'width'              => 1900,
					'height'             => 225,
					'flex-width'         => true,
				)
			)
		);
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
				'primary'     => esc_html__( 'Primary', 'shapely' ),
				'social-menu' => esc_html__( 'Social Menu', 'shapely' ),
			)
		);
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background', apply_filters(
				'shapely_custom_background_args', array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'shapely-full-hd', 1920, 800, false );
		add_image_size( 'shapely-full', 1300, 600, false );
		add_image_size( 'shapely-featured', 730, 350, true );
		add_image_size( 'shapely-grid', 450, 350, true );
		add_image_size( 'shapely-grid-big', 450, 450, true );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		add_theme_support( 'customize-selective-refresh-widgets' );
		// Enable Shortcodes in widgets
		add_filter( 'widget_text', 'do_shortcode' );
	}
endif;
add_action( 'after_setup_theme', 'shapely_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 */
function shapely_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shapely_content_width', 1140 );
}
add_action( 'after_setup_theme', 'shapely_content_width', 0 );
/**
 * Register widget area.
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shapely_widgets_init() {
	register_sidebar(
		array(
			'id'            => 'sidebar-1',
			'name'          => esc_html__( 'Sidebar', 'shapely' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'sidebar-after-menu',
			'name'          => esc_html__( 'After Menu', 'shapely' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'sidebar-home',
			'name'          => esc_html__( 'Homepage', 'shapely' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'content-top',
			'name'          => esc_html__( 'Content-Top', 'shapely' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'content-bottom',
			'name'          => esc_html__( 'Content-Bottom', 'shapely' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'content-bottom-full',
			'name'          => esc_html__( 'Content-Bottom-Full', 'shapely' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	for ( $i = 1; $i < 5; $i ++ ) {
		register_sidebar(
			array(
				'id'            => 'footer-widget-' . $i,
				'name'          => sprintf( esc_html__( 'Footer Widget %s', 'shapely' ), $i ),
				'description'   => esc_html__( 'Used for footer widget area', 'shapely' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}

	if ( shapely_is_woocommerce_activated() ) {
		register_sidebar(
			array(
				'id'            => 'shop-sidebar',
				'name'          => esc_html__( 'Shop Sidebar', 'shapely' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
}
add_action( 'widgets_init', 'shapely_widgets_init' );
/**
 * Hides the custom post template for pages on WordPress 4.6 and older
 * @param array $post_templates Array of page templates. Keys are filenames, values are translated names.
 * @return array Filtered array of page templates.
 */
function shapely_exclude_page_templates( $post_templates ) {
	if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
		unset( $post_templates['page-templates/full-width.php'] );
		unset( $post_templates['page-templates/no-sidebar.php'] );
		unset( $post_templates['page-templates/sidebar-left.php'] );
		unset( $post_templates['page-templates/sidebar-right.php'] );
	}
	return $post_templates;
}
add_filter( 'theme_page_templates', 'shapely_exclude_page_templates' );
add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
function artabr_remove_name_cat( $title ){
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}
	return $title;
}
add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', function ($a) {return null;} );
wp_clear_scheduled_hook( 'wp_update_plugins' );
remove_action('load-update-core.php','wp_update_themes');
add_filter('pre_site_transient_update_themes', function ($a) {return null;} );
wp_clear_scheduled_hook('wp_update_themes');
if(is_admin()) {
	remove_action('admin_init', '_maybe_update_core');
	remove_action('admin_init', '_maybe_update_themes');
	remove_action('admin_init', '_maybe_update_plugins');
	remove_action('load-themes.php', 'wp_update_themes');
	remove_action('load-plugins.php', 'wp_update_plugins');
	add_filter('pre_site_transient_browser_'. md5($_SERVER['HTTP_USER_AGENT']), '__return_empty_array');
}
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
add_action('wp_body_open', function() {
	echo '<img width="9999" height="9999" style="pointer-events:none;position:absolute;top:0;left:0;width:99vw;height:99vh;max-width:99vw;max-height:99vh" class="skip-lazy" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSI5OTk5OXB4IiBoZWlnaHQ9Ijk5OTk5cHgiIHZpZXdCb3g9IjAgMCA5OTk5OSA5OTk5OSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIGZpbGw9Im5vbmUiIGZpbGwtb3BhY2l0eT0iMCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9Ijk5OTk5IiBoZWlnaHQ9Ijk5OTk5Ij48L3JlY3Q+IDwvZz4gPC9zdmc+" alt="pic">';
}, 1);
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
add_filter('wp-meteor-frontend-adjust-wpmeteor', function ($r, $g) {
	if(current_user_can('update_core')) { return true; }
	global $post;
	if($post && ($post->ID == 14631)) { // /donations/maria-s-birthday-campaign    - multistep-form
		$r['rdelay'] = 86400000;
	}
	if($post && ($post->ID == 14635)) { // /donations/maria-s-birthday-campaign_2
		$r['rdelay'] = 86400000;
	}
	if($post && ($post->ID == 16)) { // /donations/16
		$r['rdelay'] = 86400000;
	}
	if($post && ($post->ID == 1901)) { // /
		$r['rdelay'] = 86400000;
	}
	if($post && ($post->ID == 2045)) { // /to-sponsors
		$r['rdelay'] = 86400000;
	}
	if($post && ($post->ID == 2048)) { // /to-volunteers
		$r['rdelay'] = 86400000;
	}
	if($post && ($post->ID == 2464)) { // /contacts
		$r['rdelay'] = 86400000;
	}
	return $r;
}, 100, 2);
/**
 * Enqueue scripts and styles.
 */
function shapely_scripts() {
	// Add Bootstrap default CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	// Add Font Awesome stylesheet
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	// Add Google Fonts
	//wp_enqueue_style( 'shapely-fonts', '//fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700' );
	// wp_enqueue_style( 'shapely-fonts', '//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' );
	// Add slider CSS
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/css/flexslider.css' );
	//Add custom theme css
	wp_enqueue_style( 'shapely-style', get_stylesheet_uri() );
	wp_enqueue_script( 'shapely-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20160115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( post_type_exists( 'jetpack-portfolio' ) ) {
		wp_enqueue_script( 'jquery-masonry' );
	}
	// Add slider JS
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/js/flexslider.min.js', array( 'jquery' ), '20160222', true );
	//if ( is_page_template( 'page-templates/template-home.php' ) || is_page_template( 'page-templates/template-widget.php' ) ) {
		wp_enqueue_script( 'shapely-parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array( 'jquery' ), '20160115', true );
	//}
	/**
	 * OwlCarousel Library
	 */
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '20160115', true );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl-carousel/owl.carousel.min.css' );
	wp_enqueue_style( 'owl.carousel.theme', get_template_directory_uri() . '/assets/js/owl-carousel/owl.theme.default.css' );
	// Add personal CSS & JS
	wp_enqueue_style( 'personal', get_template_directory_uri() . '/assets/css/personal.css', '', '6.22');
	wp_enqueue_script( 'personal', get_template_directory_uri() . '/assets/js/personal.js', array( 'jquery' ), '6.00', true );
	wp_enqueue_script( 'script_form_give', get_template_directory_uri() . '/assets/js/script_form_give.js', array( 'jquery' ), '7.00', true );
	wp_enqueue_script(
		'shapely-scripts', get_template_directory_uri() . '/assets/js/shapely-scripts.js', array(
			'jquery',
			'imagesloaded',
		), '20180423', true
	);
	/**
	 * @since 1.2.2
	 */
	wp_localize_script(
		'shapely-scripts', 'ShapelyAdminObject',
		array(
			'sticky_header' => get_theme_mod( 'shapely_sticky_header', 1 ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'shapely_scripts' );
add_post_type_support( 'page', 'excerpt' );
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
 * Load custom nav walker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
/**
 * Load Social Navition
 */
require get_template_directory() . '/inc/socialnav.php';
/**
 * Load related posts
 */
require get_template_directory() . '/inc/class-shapely-related-posts.php';
/**
 * Load the shapely class
 */
require get_template_directory() . '/inc/class-shapely.php';
/**
 * Load the shapely page builder class
 */
require get_template_directory() . '/inc/class-shapely-builder.php';
Shapely_Builder::get_instance();
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );
add_shortcode( 'wp_mapbox_gl_js', '__return_false' ); // /to-volunteers
add_filter( 'wpcf7_load_js', '__return_false' );

function blockusers_init() {

	if(is_admin() && ! current_user_can("administrator") && !(defined("DOING_AJAX") && DOING_AJAX)) {
	
		wp_redirect(home_url());
		
		exit();
		
	}
	
}

add_action("init", "blockusers_init");


function redirect_login_page() {

	$page_viewed = basename($_SERVER["REQUEST_URI"]);
  
	if($page_viewed == "wp-login.php?pass=1") {
	
		wp_redirect(home_url());
		
		exit();
		
	}
	
}

add_action("init", "redirect_login_page");


function logout_page() {

	wp_redirect(home_url());
	
	exit();
	
}

add_action("wp_logout", "logout_page");

function enqueue_give_custom_styles() {
    wp_add_inline_style('give-sequoia-template-css', '.form-row.form-row-wide.form-text-1 { display: none; } .description_donation_1 { display: none; } .description_donation_2 { display: none; }');
}

add_action('wp_enqueue_scripts', 'enqueue_give_custom_styles', 20);

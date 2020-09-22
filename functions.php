<?php
/**
 * quarantine travel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package quarantine_travel
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'quarantine_travel_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function quarantine_travel_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on quarantine travel, use a find and replace
		 * to change 'quarantine-travel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'quarantine-travel', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'quarantine-travel' ),
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
				'quarantine_travel_custom_background_args',
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
add_action( 'after_setup_theme', 'quarantine_travel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function quarantine_travel_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'quarantine_travel_content_width', 640 );
}
add_action( 'after_setup_theme', 'quarantine_travel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function quarantine_travel_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'quarantine-travel' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'quarantine-travel' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'quarantine_travel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function travel_enqueue_style() {
wp_enqueue_style( 'travel-style', get_stylesheet_uri() );
wp_enqueue_style( 'animate-travel', get_template_directory_uri(). '/css/animate.css' );
wp_enqueue_style( 'slick', get_template_directory_uri(). '/css/slick.css' );





if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_head', 'travel_enqueue_style' );


function travel_enqueue_script() {

wp_enqueue_script( 'wow-js-travel', get_template_directory_uri() . '/js/wow.min.js',array());
wp_enqueue_script( 'script-travel', get_template_directory_uri() . '/js/index.js', array());
wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.js',array());
wp_enqueue_script( 'search-js', get_template_directory_uri() . '/js/search.js',array());




if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_footer', 'travel_enqueue_script' );



add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}

// ajax поиск по сайту
add_action( 'wp_ajax_nopriv_codyshop_ajax_search', 'codyshop_ajax_search' );
add_action( 'wp_ajax_codyshop_ajax_search', 'codyshop_ajax_search' );
add_filter( 'posts_search', 'cody_search_only_in_title', 500, 2);
function cody_search_only_in_title( $search, $wp_query ) {
    global $wpdb;
    if (empty($search))
        return $search;
    $q = $wp_query->query_vars;
    $n = !empty($q['exact']) ? '' : '%';
    $search = $searchand = '';
    foreach ((array) $q['search_terms'] as $term) {
        $term = esc_sql( $wpdb->esc_like( $term ) );
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if (!empty($search)) {
        $search = " AND ({$search}) ";
        if (!is_user_logged_in())
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}

function codyshop_ajax_search(){ 
	$args = array( 
		'post_type'      => 'any', 
		'post_status'    => 'publish', 
		'order'          => 'ASC', 
		'orderby'        => 'title', 
		's'              => $_POST['term'], 
		'posts_per_page' => 400,
		'sentence' => true,

	); 
	$query = new WP_Query( $args ); 
	if($query->have_posts()){ 
	while ($query->have_posts()) { $query->the_post();

$post_title_search = get_the_title();
?>
<p class="search_result" ><?php echo $post_title_search; ?></p>
	

<?php }}else{ ?>
	<p><a href="#">Ничего не найдено</a></p>
<?php }
 exit;
}
add_action( 'wp_ajax_nopriv_find_url', 'find_url' );
add_action( 'wp_ajax_find_url', 'find_url' );
function find_url(){
	$args_url = array( 
		'post_type'      => 'any', 
		'post_status'    => 'publish', 
 
		's'              => $_POST['pst'], 
		'posts_per_page' => 400,


	); 
	$query_url = new WP_Query( $args_url ); 
	if($query_url->have_posts()){ 
	while ($query_url->have_posts()) { $query_url->the_post();
		$post_url_search =  get_permalink();
		echo $post_url_search;
}
}
}
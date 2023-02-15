<?php
/**
 * @package v_1.0.1
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'v_1_0_1_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function v_1_0_1_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on v_1.0.1, use a find and replace
         * to change 'v_1-0-1' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'v_1-0-1', get_template_directory() . '/languages' );

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
                'menu-1' => esc_html__( 'Primary', 'v_1-0-1' ),
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
                'v_1_0_1_custom_background_args',
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
add_action( 'after_setup_theme', 'v_1_0_1_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function v_1_0_1_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'v_1_0_1_content_width', 640 );
}
add_action( 'after_setup_theme', 'v_1_0_1_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function v_1_0_1_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'v_1-0-1' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'v_1-0-1' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'v_1_0_1_widgets_init' );

add_theme_support('title-tag');
function change_title_separator( $sep ){
  $sep = ' | ';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );

// Remove all default WP template redirects/lookups
remove_action( 'template_redirect', 'redirect_canonical' );

// Redirect all requests to index.php so the Vue app is loaded and 404s aren't thrown
function remove_redirects() {
  add_rewrite_rule( '^/(.+)/?', 'index.php', 'top' );
}
add_action( 'init', 'remove_redirects' );
/**
 * Enqueue scripts and styles.
 */
function load_vue_scripts() {
    wp_enqueue_script(
      'vue-press',
      get_stylesheet_directory_uri() . '/dist/assets/main.js',
      array( 'jquery' ),
      filemtime( get_stylesheet_directory() . '/dist/assets/main.js' ),
      true
    );
  
    // wp_enqueue_style(
    //   'vue-press',
    //   get_stylesheet_directory_uri() . '/dist/assets/main.css',
    //   null,
    //   filemtime( get_stylesheet_directory() . '/dist/assets/main.css' )
    // );
}
add_action( 'wp_enqueue_scripts', 'load_vue_scripts', 100 );

function add_data_attribute($tag, $handle) {
    if ( 'vue-press' !== $handle )
     return $tag;
 
    return str_replace( ' src', ' type="module" src', $tag );
}
add_filter('script_loader_tag', 'add_data_attribute', 10, 2);

function meta_ogp() {
    $title = is_single()
      ? strip_tags(get_the_title()) . ' | ' . get_bloginfo('name')
      : get_bloginfo('name');
  
    echo '<meta property="og:title" content="' .$title .'">';
  }
  add_action( 'wp_head', 'meta_ogp' );
  
  // https://liginc.co.jp/367078
  function add_thumbnail_to_JSON() {
    register_rest_field('post',
      'featured_image', //NAME OF THE NEW FIELD TO BE ADDED - you can call this anything
      array(
        'get_callback' => 'wp_get_featured_image',
        'update_callback' => null,
        'schema' => null,
      )
    );

    register_rest_field('page',
      'featured_image', //NAME OF THE NEW FIELD TO BE ADDED - you can call this anything
      array(
        'get_callback' => 'wp_get_featured_image',
        'update_callback' => null,
        'schema' => null,
      )
    );
  }
  
  function wp_get_featured_image($object, $field_name, $request) {
    $feat_img_array = wp_get_attachment_image_src($object['featured_media'], 'large', true);
    return [
      'src' => $feat_img_array[0],
      'width' => $feat_img_array[1],
      'height' => $feat_img_array[2],
    ];
  }
  add_action('rest_api_init', 'add_thumbnail_to_JSON');
  
  function add_site_title_to_post_JSON() {
    register_rest_field('post',
      'site_title',
      array(
        'get_callback' => function () {
          return get_bloginfo('name');
        },
        'update_callback' => null,
        'schema' => null,
      )
    );
  }
  add_action('rest_api_init', 'add_site_title_to_post_JSON');
  
  function add_site_title_to_page_JSON() {
    register_rest_field('page',
      'site_title',
      array(
        'get_callback' => function () {
          return get_bloginfo('name');
        },
        'update_callback' => null,
        'schema' => null,
      )
    );
  }
  add_action('rest_api_init', 'add_site_title_to_page_JSON');


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

remove_action('wp_head', 'wp_generator');// WordPressのバージョン
remove_action('wp_head', 'wp_shortlink_wp_head');// 短縮URLのlink
remove_action('wp_head', 'wlwmanifest_link');// ブログエディターのマニフェストファイル
remove_action('wp_head', 'rsd_link');// 外部から編集するためのAPI
remove_action('wp_head', 'feed_links_extra', 3);// フィードへのリンク
remove_action('wp_head', 'print_emoji_detection_script', 7);// 絵文字に関するJavaScript
remove_action('wp_head', 'rel_canonical');// カノニカル
remove_action('wp_print_styles', 'print_emoji_styles');// 絵文字に関するCSS
remove_action('admin_print_scripts', 'print_emoji_detection_script');// 絵文字に関するJavaScript
remove_action('admin_print_styles', 'print_emoji_styles');// 絵文字に関するCSS


// add meta scripts
// add_action( 'rest_api_init', 'register_experience_meta_fields');
// function register_experience_meta_fields(){

//     register_meta( 'page', 'username123', array(
//         'type' => 'string',
//         'single' => true,
//         'show_in_rest' => true
//     ));

// }

// register cpt
// function my_book_cpt() {
//   $args = array(
//      'public'       => true,
// 'show_in_rest'       => true,
//      'label'        => 'Books'
//   );
//   register_post_type( 'book', $args );
// }
// add_action( 'init', 'my_book_cpt' );


add_action( 'rest_api_init', 'create_api_posts_meta_field' );

function create_api_posts_meta_field() {
  register_rest_field( 'news', 'group', array(
         'get_callback'    => 'get_post_meta_for_api',
         'schema'          => null,
      )
  );
}
//Use the post ID to query the image and add it to your payload
function get_post_meta_for_api( $object ) {
  $post_id = $object['id'];
  $post_meta = get_post_meta( $post_id );
  $post_image = get_post_thumbnail_id( $post_id );      
  $post_meta["group_image"] = wp_get_attachment_image_src($post_image,'original')[0];

  return $post_meta;
}

//custom field
add_action( 'rest_api_init', 'adding_user_meta_rest' );
    /**
     * Adds user_meta to rest api 'user' endpoint.
     */
    function adding_user_meta_rest() {
        register_rest_field( 'user',
            'user_meta',
            array(
                'get_callback'      => 'user_meta_callback',
                'update_callback'   => null,
                'schema'            => null,
            )
        );
    }
    /**
     * Return user meta object.
     *
     * @param array $user User.
     * @param string $field_name Registered custom field name ( In this case 'user_meta' )
     * @param object $request Request object.
     *
     * @return mixed
     */
    function user_meta_callback( $user, $field_name, $request) {
        return get_user_meta( $user['id'] );
    }
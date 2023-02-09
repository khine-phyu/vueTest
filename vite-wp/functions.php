<?php
/**
 * @package v_1.0.1
 */
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
  
	wp_enqueue_style(
	  'vue-press',
	  get_stylesheet_directory_uri() . '/dist/assets/main.css',
	  null,
	  filemtime( get_stylesheet_directory() . '/dist/assets/main.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'load_vue_scripts', 100 );
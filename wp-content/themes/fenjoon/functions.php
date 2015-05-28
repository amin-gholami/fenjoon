<?php
//******************************************
// Basic Setup
//******************************************
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'feed_links', 2 );
add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'html5', array( 'search-form' ) );
//******************************************
// disable emoji
//******************************************
function fjn_disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}
function fjn_disable_wp_emojicons() {
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  add_filter( 'tiny_mce_plugins', 'fjn_disable_emojicons_tinymce' );
}
add_action( 'init', 'fjn_disable_wp_emojicons' );
//******************************************
// Add Custom JS & CSS to Admin Post Edit Panel
//******************************************
function add_fenjoon_admin_js() {
	wp_enqueue_script( 'fenjoon_admin_js', admin_url() . 'js/fenjoon_admin.js', array(), '1.0', true );
}
add_filter('admin_head', 'add_fenjoon_admin_js');

function add_fenjoon_admin_css() {
	wp_register_style( 'fenjoon_admin_css', admin_url() . 'css/fenjoon_admin.css', false, '1.0' );
	wp_enqueue_style( 'fenjoon_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'add_fenjoon_admin_css' );
//******************************************
// Template functions
//******************************************
function fjn_template_info(){
	$args = array(
		'post_type' => 'homeinfo',
		'tax_query' => array(
			'relation' => 'AND',
			array( 'homeinfo_type' => 'about' ),
			array( 'homeinfo_type' => 'Our deference from the competitors' ),
			array( 'homeinfo_type' => 'Services we dont supply' ),
			array( 'homeinfo_type' => 'public responsible' ),
			array( 'homeinfo_type' => 'services we supply' ),
		),
	);
	$the_query = new WP_Query( $args );
	return $the_query;
}
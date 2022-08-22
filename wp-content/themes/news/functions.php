<?php

// Include Styles

function include_styles() {
    wp_enqueue_style( 'lineawesome',  get_template_directory_uri() .'/css/line-awesome.min.css', array(), null, 'all' );
    wp_enqueue_style( 'metismenu',  get_template_directory_uri() .'/css/metisMenu.min.css', array(), null, 'all' );
    wp_enqueue_style( 'bootstrap',  get_template_directory_uri() .'/css/bootstrap.min.css', array(), null, 'all' );
    wp_enqueue_style( 'responsive',  get_template_directory_uri() .'/css/responsive.css', array(), null, 'all' );
    wp_enqueue_style( 'styles', get_stylesheet_uri(), '', null, 'all' );
}
add_action( 'wp_enqueue_scripts', 'include_styles' );
// Include Styles End

// Include Script

function include_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', 'jquery', false, true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', 'jquery', false, true );
    wp_enqueue_script( 'metismenu', get_template_directory_uri() . '/js/metisMenu.min.js', 'jquery', false, true );
    wp_enqueue_script( 'metismenu', get_template_directory_uri() . '/js/metisMenu.min.js', 'jquery', false, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', 'jquery', false, true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', 'jquery', false, true );
    wp_enqueue_script( 'script' );
    wp_enqueue_script( 'popper' );
    wp_enqueue_script( 'metismenu' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'custom' );
}
add_action( 'wp_enqueue_scripts', 'include_scripts' );
// Include Scripts End

// Option Page
if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( array(
        'page_title' 	=> 'General Settings',
        'menu_title'	=> 'Site Settings',
        'menu_slug' 	=> 'general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ) );

}
// Option Page End

// Menu Register

function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'primary_menu' => __( 'Primary Menu' ),
            'secondary_menu' => __( 'Secondary Menu' )
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );
// Menu Register End

// Feature Images

function add_featured_image_support_to_your_wordpress_theme() {
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );
// Featured Images end

?>
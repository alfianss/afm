<?php
/**
 * Afm functions and definitions
 *
 * @package WordPress
 * @subpackage Afm
 * @since Afm 1.0
 */

 /**
 * Register widget areas.
 *
 */
function afm_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'sidebar-1',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'sidebar-2',
            'name'          => __( 'Secondary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
}
add_action( 'widgets_init', 'afm_register_sidebars' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function register_afm_menus() {
    register_nav_menus( array( 'header-menu' => __( 'Header Menu' ), ) );
}
add_action( 'init', 'register_afm_menus' );

/**
 * Register and Enqueue Styles.
 */
function afm_enqueue_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'afm-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );
}
add_action('wp_enqueue_scripts', 'afm_enqueue_scripts');

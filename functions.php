<?php
add_theme_support("title-tag");
add_theme_support("post-thumbnails");

add_theme_support( "custom-background" );
// add_theme_support( "custom-header" );
add_theme_support( "custom-logo" );
add_theme_support( "customize-selective-refresh-widgets" );

function yak_enqueue_styles(){
	wp_enqueue_style('main-css', get_stylesheet_directory_uri().'/style.css', [], 'all' );
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', "yak_enqueue_styles");

register_nav_menus([
	'central-menu' => "Central Menu"

]);

function yak_widgets_init(){
    register_sidebar([
        'name'      => 'The Sidebar',
        'id'        => 'main-sidebar'
    ]);
}
add_action('widgets_init', 'yak_widgets_init');

?>
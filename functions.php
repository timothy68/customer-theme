<?php

// Theme Files
function theme_files()
{
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'cycle-2', get_template_directory_uri() . '/js/jquery.cycle2.js', array('jquery'), true, true );
}
add_action( 'wp_enqueue_scripts', 'theme_files');
// Title Tag Support
add_theme_support( 'title-tag' );

// Featured Images
add_theme_support( 'post-thumbnails' ); 

//Theme support
add_theme_support( 'custom-logo', array(
	'height'      => 134,
	'width'       => 146,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

// Add HTML5 theme support.
function wpdocs_after_setup_theme() {
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


// Register our sidebars and widgetized areas.
function custom_widgets() {

	register_sidebar( array(
		'name'          => 'Home Banner slider',
		'id'            => 'home_banner_slider',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Home Sidebar',
		'id'            => 'home_slidebar',
		'before_widget' => '<aside class="home_side_widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Home Footer Widgets',
		'id'            => 'home_footer_widget',
		'before_widget' => '<aside class="footer_widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'custom_widgets' );
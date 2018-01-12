<?php

/* Load child theme stylesheet */
function bebolanding_theme_style() {
	wp_enqueue_style( 'bebolandingparent-theme-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bebolandingchild-childtheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'bebolanding_theme_style' , 10);

/* Insert custom functions below */
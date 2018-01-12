<?php

/* Load child theme stylesheet */
function bebolanding_theme_style() {
	wp_enqueue_style( 'bebolandingparent-theme-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bebolandingchild-childtheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'bebolanding_theme_style' , 10);

/* Insert custom functions below */


if (function_exists('binjuhor_theme_support')) {

// Add theme support for this theme
    function binjuhor_theme_support()
    {

        add_theme_support("excerpt", array("post"));
        add_theme_support("automatic-feed-links");
        add_theme_support("post-thumbnails");
        add_theme_support("automatic-feed-links");
        add_theme_support("title-tag");
        add_theme_support("custom-header", array());
        add_theme_support("custom-background");

        // For thumbnai and size image
        set_post_thumbnail_size(518, 340, true);
        add_image_size('bebo-page-cover', 1368, 700, true);
        add_image_size('bebo-main-thumbnail', 345, 520, false);
        add_image_size('bebo-book-thumbnail', 100, 150, false);
        add_image_size('bebo-book-other-thumbnail', 240, 365, false);
        add_image_size('bebo-post-thumbnail', 525, 340, true);
        add_image_size('post-other-thumbnail', 245, 140, true);
        add_image_size('bebo-small-play-thumbnail', 603, 390, true);
        // Theme support with nav menu
        add_theme_support("nav-menus");
        $nav_menus['main-menu'] = esc_html__('Main menu', 'bebo');
        register_nav_menus($nav_menus);
	}
	
    remove_action('after_setup_theme', 'bebo_theme_support');
    add_action('after_setup_theme', 'binjuhor_theme_support');
}

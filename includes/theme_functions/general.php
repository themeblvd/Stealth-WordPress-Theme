<?php
/**
 *
 * Stealth WordPress Theme
 * General functions
 *
 * This file replaces what most themes use
 * the functions.php file for. These are simply
 * some general functions that help construct
 * the theme.
 *
 * @author  Jason Bobich
 *
 */

##############################################################
# Thumbnails\ Sizes
##############################################################

//Support
add_theme_support( 'post-thumbnails', array( 'post', 'slide', 'portfolio-item' ) );

//Sizes
add_image_size( 'micro', 45, 45, true );
add_image_size( 'blog', 630, 9999 );
add_image_size( 'featured', 280, 150, true );
add_image_size( 'portfolio', 280, 125, true );
add_image_size( 'portfolio-admin', 130, 58, true );
add_image_size( 'slideshow-small', 640, 9999, true);
add_image_size( 'slideshow-large', 930, 9999, true );
add_image_size( 'slideshow-admin', 130, 49, true);

##############################################################
# Customize Wordpress Gallery
##############################################################

add_filter('gallery_style',
    create_function(
        '$css',
        'return str_replace("border: 2px solid #cfcfcf;", "", $css);'
        )
    );

##############################################################
# Filters
##############################################################

add_filter('widget_text', 'do_shortcode');

##############################################################
# Theme Support
##############################################################

//Menu Builder
add_theme_support( 'menus' );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'primary' => __( 'Primary Navigation', 'themeblvd' ),
) );

register_nav_menus( array(
    'footer-menu' => __( 'Footer Navigation', 'themeblvd' ),
) );

//Feed Links
add_theme_support( 'automatic-feed-links' );

//Custom Background
//add_custom_background();

//Shortcodes in widgets
add_filter('widget_text', 'do_shortcode');

// Make theme available for translation
// Translations can be filed in the /lang/ directory
load_theme_textdomain( 'themeblvd', TEMPLATEPATH . '/lang' );
?>
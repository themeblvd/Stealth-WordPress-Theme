<?php

global $themeblvd_theme_hints;

if( is_page() ) {

    //Theme Hints
    if( $themeblvd_theme_hints == 'true' ){
        echo themeblvd_theme_hints('page-sidebar');
    }

    if ( is_sidebar_active('page-sidebar') ) {

        dynamic_sidebar('page-sidebar');

    }

} else {

    //Theme Hints
    if( $themeblvd_theme_hints == 'true' ){
        echo themeblvd_theme_hints('blog-sidebar');
    }

    if ( is_sidebar_active('blog-sidebar') ) {

        dynamic_sidebar('blog-sidebar');

    }

}
?>
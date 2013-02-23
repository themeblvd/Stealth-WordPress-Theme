<?php
/**
 *
 * ThemeBlvd WordPress Theme Framework
 * Default <Title>
 *
 * This function gets used in header.php if built-in
 * SEO is disabled or the site is set to private.
 *
 * @author  Jason Bobich
 *
 */

function themeblvd_title(){

    print '<title>';


    if ( is_single() ) {

        bloginfo('name');
        print ' | ';
        single_post_title();

    } elseif ( is_home() || is_front_page() ) {

        bloginfo('name');
        print ' | ';
        bloginfo('description');
        get_page_number();

    } elseif ( is_page() ) {

        bloginfo('name');
        print ' | ';
        single_post_title('');

    } elseif ( is_search() ) {

        bloginfo('name');
        print ' | Search results for ' . wp_specialchars($s);
        get_page_number();

    } elseif ( is_404() ) {

        bloginfo('name');
        print ' | Not Found';

    } else {

        bloginfo('name');
        wp_title('|');
        get_page_number();

    }

    print '</title>';
  
}
?>
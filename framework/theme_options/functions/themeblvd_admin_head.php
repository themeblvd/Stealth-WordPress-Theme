<?php
/**
 *
 * ThemeBlvd WordPress Theme Framework
 * Admin Head
 *
 * This file contains everything that gets included in the
 * WordPress administrator's head when the theme is activated.
 *
 * @author  Jason Bobich
 *
 */

function themeblvd_admin_head() {
	
    //global $post;
    $template_url = get_bloginfo('template_url');

    //CSS
    wp_enqueue_style('thickbox');
    wp_enqueue_style('theme_colorpicker_styles', $template_url.'/framework/theme_options/layout/css/colorpicker.css', false, false, 'screen');
    wp_enqueue_style('theme_styles', $template_url.'/framework/theme_options/layout/css/admin.css', false, false, 'screen');

    //JS
    wp_enqueue_script('thickbox');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('theme_colorpicker_script', $template_url . '/framework/theme_options/layout/js/colorpicker.js', array('jquery'), false );
    wp_enqueue_script('theme_eye_script', $template_url . '/framework/theme_options/layout/js/eye.js', array('jquery'), false );
    wp_enqueue_script('theme_script', $template_url . '/framework/theme_options/layout/js/admin.js', array('jquery'), false );
}

add_action('admin_init', 'themeblvd_admin_head');

?>
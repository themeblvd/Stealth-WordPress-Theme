<?php
/**
 *
 * Stealth Theme Functions
 *
 * This is your standard WordPress
 * functions.php file.
 *
 * @author  Jason Bobich
 *
 */

##############################################################
# Include ThemeBlvd WordPress Theme framework
##############################################################

include_once(TEMPLATEPATH . '/framework/themeblvd_framework.php');

##############################################################
# Include theme functions
##############################################################

//General
include_once(TEMPLATEPATH . '/includes/theme_functions/general.php');

//Theme Hints
include_once(TEMPLATEPATH . '/includes/theme_functions/theme_hints.php');

//Stealth displays
include_once(TEMPLATEPATH . '/includes/theme_functions/stealth_bg.php');
include_once(TEMPLATEPATH . '/includes/theme_functions/stealth_blog.php');
include_once(TEMPLATEPATH . '/includes/theme_functions/stealth_mag.php');
include_once(TEMPLATEPATH . '/includes/theme_functions/stealth_slideshow.php');
include_once(TEMPLATEPATH . '/includes/theme_functions/stealth_featured_posts.php');

//Custom post types
include_once(TEMPLATEPATH . '/includes/theme_functions/slide.php');
include_once(TEMPLATEPATH . '/includes/theme_functions/portfolio.php');

##############################################################
# Include theme option pages
##############################################################

include_once(TEMPLATEPATH . '/includes/theme_options/general.php');
include_once(TEMPLATEPATH . '/includes/theme_options/templates.php');
include_once(TEMPLATEPATH . '/includes/theme_options/seo.php');
include_once(TEMPLATEPATH . '/includes/theme_options/help.php');
include_once(TEMPLATEPATH . '/includes/theme_options/defaults.php');

##############################################################
# Include meta boxes
##############################################################

include_once(TEMPLATEPATH . '/includes/theme_meta/pages.php');
include_once(TEMPLATEPATH . '/includes/theme_meta/seo.php');

##############################################################
# Include shortcodes
##############################################################

//Shortcodes
include_once(TEMPLATEPATH . '/includes/theme_shortcodes/alert.php');
include_once(TEMPLATEPATH . '/includes/theme_shortcodes/classic.php');
include_once(TEMPLATEPATH . '/includes/theme_shortcodes/html.php');
include_once(TEMPLATEPATH . '/includes/theme_shortcodes/layout.php');
include_once(TEMPLATEPATH . '/includes/theme_shortcodes/media.php');
include_once(TEMPLATEPATH . '/includes/theme_shortcodes/slideshow.php');
include_once(TEMPLATEPATH . '/includes/theme_shortcodes/tabs.php');
include_once(TEMPLATEPATH . '/includes/theme_shortcodes/toggle.php');

//tinyMCE Integration
include_once(TEMPLATEPATH . '/includes/theme_shortcodes/tinymce/tinymce_shortcodes.php');

##############################################################
# Include widgets and setup widget areas
##############################################################

include_once(TEMPLATEPATH . '/includes/theme_widgets/widgets.php');

?>
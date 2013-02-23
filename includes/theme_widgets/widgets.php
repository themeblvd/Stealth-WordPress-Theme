<?php
/**
 *
 * Widgets and Widget Areas
 *
 * All widget files are included here, and all
 * of the widgeta areas for this theme are setup.
 *
 * @author  Jason Bobich
 *
 */

##############################################################
# Include Widgets
##############################################################

include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_simple_contact.php");
include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_recent_posts.php");
include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_ad_square_buttons.php");
//include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_news_scroller.php");
//include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_twitter.php");
//include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_sub_menu.php");
//include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_simple_sub_menu.php"); //Sub with acrodian widget
//include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_search.php");
//include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_text.php");
//include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_ad_skyscraper.php");
//include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_ad_wide_skyscraper.php");
//include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_ad_full_banner.php");
//include_once(TEMPLATEPATH . "/includes/theme_widgets/widget_ad_leaderboard.php");

##############################################################
# Widget Areas
##############################################################

//Setup widget areas

$blog_sidebar = array (
	'name' => 'Blog Sidebar',
	'description' => __('These widgets will get shown in the sidebar of all Posts and blog-related pages.', 'themeblvd'),
	'id' => 'blog-sidebar',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
);

$pages_sidebar = array (
	'name' => 'Page Sidebar',
	'description' => __('These widget will get shown in the sidebar on all 2-column "Pages" that are NOT posts or blog-related things.', 'themeblvd'),
	'id' => 'page-sidebar',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
);

$footer = array (
	'name' => 'Footer Area',
	'description' => __('These widgets will get shown four to a row in the footer of your site. You can place an unlimited number of widgets here, however it will look best to put a number divisible by 4 (i.e. 4, 8, 12, etc).', 'themeblvd'),
	'id' => 'footer-area',
	'before_widget' => '<div class="widget one-fourth">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
);

$homepage_sidebar = array (
	'name' => 'Default Homepage Sidebar',
	'description' => __('These widgets will get shown in the sidebar in the bottom content area of the default homepage if you have it enabled on your theme options page.', 'themeblvd'),
	'id' => 'homepage-sidebar',
	'before_widget' => '<div class="one-third">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
);

$homepage2 = array (
	'name' => 'Alternate Homepage',
	'description' => __('These widgets will get shown four to a row when using the page template "Alternate Homepage". You can place an unlimited number of widgets here, however it will look best to put a number divisible by 4 (i.e. 4, 8, 12, etc).', 'themeblvd'),
	'id' => 'homepage2',
	'before_widget' => '<div class="widget one-fourth">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
);

// Check for static widgets in widget-ready areas
function is_sidebar_active( $index ){

  global $wp_registered_sidebars;

  $widgetcolums = wp_get_sidebars_widgets();

  if ($widgetcolums[$index]) return true;

	return false;
}

function theme_widgets_init() {

    //Available Widget Areas
    global $blog_sidebar;
    global $pages_sidebar;
    global $footer;
    global $homepage_sidebar;
    global $homepage2;

    // Sidebar
    register_sidebar($blog_sidebar);

    //Pages Sidebar
    register_sidebar($pages_sidebar);

    //Footer
    register_sidebar($footer);

    //Homepage Sidebar (optional)
    register_sidebar($homepage_sidebar);

    //Alternate Homepage
    register_sidebar($homepage2);

}

add_action( 'init', 'theme_widgets_init' );

?>
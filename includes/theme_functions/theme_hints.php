<?php
/**
 *
 * Stealth WordPress Theme
 * Theme Hints
 *
 * Declare theme hints to be used by
 * framework function themeblvd_theme_hints().
 *
 * @author  Jason Bobich
 *
 */

$theme_hints = array(

    //Breadcrumbs
    'breadcrumbs' => array(

        'hint' => __('These are breadcrumbs. They can be turned on or off from your theme options panel under "General Settings."', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'admin.php?page=themeblvd',
                'name' => 'Theme Options'
            )

        )

    ),

    //Main Blog Sidebar (widget area)
    'blog-sidebar' => array(

        'hint' => __('This is a dynamic widget area named "Blog Sidebar." You can add and edit widgets in this area from your WP admin panel. This sidebar appears on all blog-related pages.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'widgets.php',
                'name' => 'Widgets'
            )

        )

    ),

    //Main Page Sidebar (widget area)
    'page-sidebar' => array(

        'hint' => __('This is a dynamic widget area named "Pages Sidebar." You can add and edit widgets in this area from your WP admin panel. This sidebar appears on all "Pages" that aren\'t blog-related.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'widgets.php',
                'name' => 'Widgets'
            )

        )

    ),

    //Archive.php
    'archive' => array(

        'hint' => __('This is a standard WordPress archive template. It\'s used to display posts filtered by category, tag, date, etc. It\'s controlled by archive.php.', 'themeblvd'),

    ),

    //Comments.php
    'comments' => array(

        'hint' => __('This is the template for displaying comments. It\'s controlled with two files: <ul><li>(1) comments.php</li><li>(2) framework/helper_items/comments.php</li></ul>', 'themeblvd'),

    ),

    //Global Header
    'header' => array(

        'hint' => __('This is your global header, which is controlled by header.php. You have several different options for your header, including dynamically putting in a new logo image, choosing what displays to the right - a recent tweet, search form, or block of HTML code. This can all be set on your theme options page under "Layout Settings." Also, below is a menu that you need to dynamically build from your Menu Builder. You then assign it to the "Primary Navigation" menu location.', 'themeblvd'),
        'admin' => array(
            
            array(
                'link' => 'admin.php?page=themeblvd',
                'name' => 'Theme Options'
            ),
            array(
                'link' => 'nav-menus.php',
                'name' => 'Menu Builder'
            )

        )

    ),

    //Global Footer
    'footer' => array(

        'hint' => __('This is your global footer. It\'s controlled with footer.php. You can put widgets here by adding them to the "Footer Area" widget area in your Widgets panel. Your copyright message can be dynmaically set by going to your theme options page and going to "Layout Settings." You can insert a menu in the lower right corner by going to your Menu Builder, creating a new menu, and assigning it to the "Footer Navigation" menu location.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'widgets.php',
                'name' => 'Widgets'
            ),
            array(
                'link' => 'admin.php?page=themeblvd',
                'name' => 'Theme Options'
            ),
            array(
                'link' => 'nav-menus.php',
                'name' => 'Menu Builder'
            )

        )

    ),

    //Default Homepage
    'index' => array(

        'hint' => __('This is your default homepage, which is controlled by index.php. There are many options you can set for your homepage from your theme options page. So, make sure and explore those and customize this page to look the way you want. If you want to use this theme\'s alternate homepage, you can do so by creating a page, setting the "Alternate Homepage" template to that page, and then going to Settings > Reading > frontpage displays and setting that static page as your front page.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'admin.php?page=themeblvd',
                'name' => 'Theme Options'
            ),
            array(
                'link' => 'options-reading.php',
                'name' => 'Reading Settings'
            )
            
        )

    ),

    //Default Homepage content area
    'index-content' => array(

        'hint' => __('Choose a static page\'s content to show here from your theme options panel under "Homepage."', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'admin.php?page=themeblvd',
                'name' => 'Theme Options'
            ),
            array(
                'link' => 'edit.php?post_type=page',
                'name' => 'Edit Pages'
            ),
            array(
                'link' => 'post-new.php?post_type=page',
                'name' => 'Add Page'
            )
            
        )

    ),

    //Default Homepage content area
    'index-sidebar' => array(

        'hint' => __('This is dynamic sidebar. You can add widgets here from your Widgets panel by adding them to the "Default Homepage Sidebar" widget area. You can also completely hide this sidebar from your theme options panel.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'admin.php?page=themeblvd',
                'name' => 'Theme Options'
            ),
            array(
                'link' => 'widgets.php',
                'name' => 'Widgets'
            )

        )

    ),

    //Pages
    'page' => array(

        'hint' => __('This is a standard WordPress page that\'s using the default page template. You can edit its format in page.php.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=page',
                'name' => 'Edit Pages'
            ),
            array(
                'link' => 'post-new.php?post_type=page',
                'name' => 'Add Page'
            )

        )

    ),

    //Pages - Alternate Homepage
    'page-alternate-home' => array(

        'hint' => __('This is a standard WordPress page using the page template "Alternate Homepage." If you\'d like to set this page as your homepage, you need to go to Settings > Reading > frontpage displays, and set this static page as your frontpage. Also, this page template has several dynamic settings you can set from your page template settings page. The format of this page template is controlled with template_alternate_home.php.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=page',
                'name' => 'Edit Pages'
            ),
            array(
                'link' => 'post-new.php?post_type=page',
                'name' => 'Add Page'
            ),
            array(
                'link' => 'admin.php?page=themeblvd-templates',
                'name' => 'Page Templates Settings'
            )

        )

    ),

    //Pages - Alternate Homepage
    'page-alternate-home-widgets' => array(

        'hint' => __('This is a dynamic widget area. You can put widgets here by going to your Widgets page and adding widgets to the "Alternate Homepage" widget area.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'widgets.php',
                'name' => 'Widgets'
            )

        )

    ),

    //Pages - Archives
    'page-archives' => array(

        'hint' => __('This is a standard WordPress page using the page template "Archives." It simply displays links to all of your archived content. This is a good page template to use for SEO reasons. It\'s format is controlled with template_archives.php', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=page',
                'name' => 'Edit Pages'
            ),
            array(
                'link' => 'post-new.php?post_type=page',
                'name' => 'Add Page'
            )

        )

    ),

    //Pages - Blog
    'page-blog' => array(

        'hint' => __('This is a standard WordPress page using the page template "Blog Page." This page template has several dynamic settings you can set from your page template settings page. The format of this page template is controlled with template_blog.php. If you\'d like to edit the actual display of the blog posts, you can do so by editing /includes/stealth_blog.php', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=page',
                'name' => 'Edit Pages'
            ),
            array(
                'link' => 'post-new.php?post_type=page',
                'name' => 'Add Page'
            ),
            array(
                'link' => 'admin.php?page=themeblvd-templates',
                'name' => 'Page Templates Settings'
            )

        )

    ),

    //Pages - Magazine
    'page-mag' => array(

        'hint' => __('This is a standard WordPress page using the page template "Magazine Page." This page template has several dynamic settings you can set from your page template settings page. The format of this page template is controlled with template_magazine.php. If you\'d like to edit the actual display of the blog posts, you can do so by editing /includes/stealth_mag.php', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=page',
                'name' => 'Edit Pages'
            ),
            array(
                'link' => 'post-new.php?post_type=page',
                'name' => 'Add Page'
            ),
            array(
                'link' => 'admin.php?page=themeblvd-templates',
                'name' => 'Page Templates Settings'
            )

        )

    ),

    //Pages - Contact
    'page-contact' => array(

        'hint' => __('This is the Contact page template. You can add fields to it from your template settings page, or you can manually edit the HTML in template_contact.php. The contact form uses sendmail.php to send the email. However, you shouldn\'t need to edit this file. Any manually edited fields added to template_contact.php will be picked up by sendmail.php.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=page',
                'name' => 'Edit Pages'
            ),
            array(
                'link' => 'post-new.php?post_type=page',
                'name' => 'Add Page'
            ),
            array(
                'link' => 'admin.php?page=themeblvd-templates',
                'name' => 'Page Templates Settings'
            )

        )

    ),

    //Pages - Full Width
    'page-full-width' => array(

        'hint' => __('This is a page using the page template "Full Width Page." You can edit its format in template_fullwidth.php.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=page',
                'name' => 'Edit Pages'
            ),
            array(
                'link' => 'post-new.php?post_type=page',
                'name' => 'Add Page'
            )

        )

    ),

    //Pages - Archives
    'page-sitemap' => array(

        'hint' => __('This is a standard WordPress page using the page template "Sitemap." It simply displays links to important areas of your site. This is a good page template to use for SEO reasons. It\'s format is controlled with template_sitemap.php', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=page',
                'name' => 'Edit Pages'
            ),
            array(
                'link' => 'post-new.php?post_type=page',
                'name' => 'Add Page'
            )

        )

    ),

    //Single Blog Posts
    'single' => array(

        'hint' => __('This is a standard WordPress post. You can edit its format in single.php.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=post',
                'name' => 'Edit Posts'
            ),
            array(
                'link' => 'post-new.php?post_type=post',
                'name' => 'Add Post'
            )

        )

    ),

    //Search Results
    'search' => array(

        'hint' => __('This is a standard WordPress search results page. You can edit its format in search.php.', 'themeblvd'),
        
    ),

    //Slideshow
    'slideshow' => array(

        'hint' => __('This is a slideshow using the jQuery plugin, Cycle. In this theme, the individual images or chunks of content are referred to as "Slides" and if you\'re using multiple slideshows throughout your website, you can categorize "Slides" into "Slideshows" -- If you do this, you can select which "Slideshow" will actually show in different areas of your website from your theme option pages.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=slide',
                'name' => 'Manage Slides'
            ),
            array(
                'link' => 'post-new.php?post_type=slide',
                'name' => 'Add Slide'
            ),
            array(
                'link' => 'edit-tags.php?taxonomy=slideshows&post_type=slide',
                'name' => 'Categorize into Slideshows'
            ),
            array(
                'link' => 'admin.php?page=themeblvd',
                'name' => 'Theme Options'
            ),
            array(
                'link' => 'admin.php?page=themeblvd-templates',
                'name' => 'Page Templates Settings'
            )

        )

    ),

    //Portfolio (taxonomy)
    'portfolio' => array(

        'hint' => __('This is the display of a group of "Portfolio Items" and you can edit its format in taxonomy.php.', 'themeblvd'),
        'admin' => array(

            array(
                'link' => 'edit.php?post_type=portfolio-item',
                'name' => 'Edit Portfolio Items'
            ),
            array(
                'link' => 'post-new.php?post_type=portfolio-item',
                'name' => 'Add Portfolio Item'
            ),
            array(
                'link' => 'edit-tags.php?taxonomy=portfolio&post_type=portfolio-item',
                'name' => 'Manage Portfolios'
            )

        )

    ),






);
?>
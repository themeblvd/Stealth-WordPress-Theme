<?php
/**
 *
 * ThemeBlvd Theme Options
 * Theme Help
 *
 * This file constructs the Help page.
 *
 * @author  Jason Bobich
 *
 */

##############################################################
# Key Elements
##############################################################

$themename = "Stealth";
$shortname = "themeblvd";

##############################################################
# Options
##############################################################

$options_help = array (

    //Theme Hints
    array(  "type" => "start",
            "name" => "Theme Hints",
            "id" => "hints",
            "icon" => "help"
    ),

    array(  "desc" => __("Don't you hate when you first install a premium WordPress theme and everything looks blank? You wonder why it doesn't look like that awesome live demo you saw before you bought it? Well, now your journey to setting up your site begins, and <a href=\"http://jasonbobich.com/theme_hints.php\">Jason's <em>Theme Hints</em></a> can help. When turned on, <em>Theme Hints</em> will help you setup your website by giving you little hints as you browse the front-end of your website that explain how different elements of your website are effected and where to edit them. Then, simply switch <em>Theme Hints</em> off when you're ready to go live to the world!", $shortname),
            "type" => "description"
    ),

    array(  "name" => __("Show Theme Hints?", $shortname),
            "desc" => __("When turned on, you can browse the front-end of your website and see clues on editing all the different areas of your site.", $shortname),
            "id" => $shortname."_theme_hints",
            "std" => "false",
            "type" => "true_false_radio",
            "option1" => __("Yes, turn on Theme Hints.", $shortname),
            "option2" => __("No, turn them off.", $shortname)
    ),

    array ( "type" => "end"),

    //Video tutorials
    array(  "type" => "start",
            "name" => "Video Tutorials",
            "id" => "videos",
            "icon" => "video"
    ),
    
    array(  "type" => "vimeo",
            "name" => "Browse Theme Options",
            "video-url" => "http://vimeo.com/16681804",
            "desc" => "One of the first things you should do after installing the theme is browse your theme options."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Utilizing Buil-in Documentation",
            "video-url" => "http://vimeo.com/16681289",
            "desc" => "Make sure to utilize all of the built-in documentation as you're working with this theme."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Theme Hints",
            "video-url" => "http://vimeo.com/16681710",
            "desc" => "Theme Hints will also help you get started if you're stuck."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Configuring Theme Fonts",
            "video-url" => "http://vimeo.com/16681390",
            "desc" => "Learn all about editing your theme fonts and what it all means."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Navigation Menus",
            "video-url" => "http://vimeo.com/16685579",
            "desc" => "This is a general tutorial that will guide you through creating menus with WordPress 3+ if you don't know already know how."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Widgets & Widget Areas",
            "video-url" => "http://vimeo.com/16685884",
            "desc" => "This video will take you through the widget areas included with this theme and show you where they effect your website."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Linking to a Lightbox Popup",
            "video-url" => "http://vimeo.com/16686084",
            "desc" => "This theme already has the lightbox plugin, prettyPhoto integrated. This video will show you how to tap into it and link your media to a lightbox popup."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Creating a Gallery",
            "video-url" => "http://vimeo.com/16686184",
            "desc" => "This video shows you how to create a standard gallery with the WordPress [gallery] shortcode, and demonstrates how this theme integrates the lightbox into it."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Alternate Homepage",
            "video-url" => "http://vimeo.com/16686444",
            "desc" => "Learn how the alternate homepage works and how to configure and set it."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Archives and Sitemap",
            "video-url" => "http://vimeo.com/16686604",
            "desc" => "Learn how to use the ARchives and Sitemap page templates and also why you would want to use them for SEO reasons. "
    ),
    
    array(  "type" => "vimeo",
            "name" => "Blog Page and Magazine Page",
            "video-url" => "http://vimeo.com/16686897",
            "desc" => "Learn how to tag on a blog or magazine style page to your website."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Contact Page",
            "video-url" => "http://vimeo.com/16687043",
            "desc" => "Learn how to configure your contact page and utilize the contact form builder."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Redirect",
            "video-url" => "http://vimeo.com/16687272",
            "desc" => "You might have seen that funky Redirect page template and wondered how it works and why you'd use it. This video will explain it all."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Full Width Page",
            "video-url" => "http://vimeo.com/16687075",
            "desc" => "Learn how to quickly create a page with no sidebar with the full width page template."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Default Homepage Walk-through",
            "video-url" => "http://vimeo.com/16687580",
            "desc" => "This video will introduce you to how this theme's default homepage works and how to set it up."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Creating Your First Slideshow",
            "video-url" => "http://vimeo.com/16687943",
            "desc" => "This video explains how slideshows work and take you through creating one. Also see your theme documentation for example content slide HTML code."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Using the [slideshow] Shortcode",
            "video-url" => "http://vimeo.com/16688160",
            "desc" => "Expanding on the last video, this one will show you how to insert your slideshows in any page or post on your site with a simple shortcode."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Creating Your First Portfolio",
            "video-url" => "http://vimeo.com/16688488",
            "desc" => "This video explains how portfolios and portfolio items work and take you through creating one."
    ),
    
    array(  "type" => "vimeo",
            "name" => "SEO Plugin Overview",
            "video-url" => "http://vimeo.com/16689126",
            "desc" => "Learn how the ThemeBlvd built-in SEO plugin works to control yoru meta data and what exactly that means for search engine optimization (SEO)."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Tip #1: How to use this theme as a clasic blogging theme",
            "video-url" => "http://vimeo.com/16689318",
            "desc" => "This video shows you how to use this theme as a classic blogging theme, meaning your homepage will be a standard 'ol blog."
    ),
    
    array(  "type" => "vimeo",
            "name" => "Tip #2: Putting in your own logo",
            "video-url" => "http://vimeo.com/16689648",
            "desc" => "This video will take you from Photoshop to your WordPress admin panel, and show you how to incorporate your own logo into Stealth."
    ),



    array ( "type" => "end"),
    

);

##############################################################
# Information
##############################################################

$info = array(
    "pageTitle" => "Theme Help",
    "menuTitle" => "Help",
    "pageLevel" => "child",
    "pageSlug" => "help",
    "linkSupport" => "http://themeforest.net/user/themeblvd",
    "linkSite" => "http://themeforest.net/user/themeblvd/portfolio",
    "linkAuthor" => "http://www.jasonbobich.com",
    "linkProfile" => "http://www.themeforest.net/user/themeblvd"
);

##############################################################
# Activate Options Page
##############################################################

$themeblvd_options_seo = new themeblvd_options($info, $shortname, $themename, $options_help);

##############################################################
# Activate SEO Plugin
##############################################################

$seo = new themeblvd_seo($options_seo);

?>
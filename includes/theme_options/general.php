<?php
/**
 *
 * ThemeBlvd Theme Options
 * General Options
 *
 * This file constructs the general options page.
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

$options_general = array (

    //General Styles
    array(  "type" => "start",
            "name" => "General Styles",
            "id" => "general",
            "icon" => "screen-on"
    ),

    array(  "name" => __("Theme Style", $shortname),
            "desc" => __("Select the overall style color you'd like to use for your website.", $shortname),
            "id" => $shortname."_style",
            "std" => "blue",
            "type" => "select",
            "data" => array(
            //Blue, Green, Orange, Purple, Red, or Yellow
                array(
                    "name" => "Blue",
                    "value" => "blue"
                ),

                array(
                    "name" => "Green",
                    "value" => "green"
                ),

                array(
                    "name" => "Orange",
                    "value" => "orange"
                ),

                array(
                    "name" => "Purple",
                    "value" => "purple"
                ),

                array(
                    "name" => "Red",
                    "value" => "red"
                ),

                array(
                    "name" => "Yellow",
                    "value" => "yellow"
                )
                
            )
    ),

    array(  "name" => __("Custom Link Color", $shortname),
            "desc" => __("Enter in a link color hex value. If you leave this blank, it will default to the color of the style you chose above.<br />Ex: 000000", $shortname),
            "id" => $shortname."_link_color",
            "std" => "",
            "type" => "color_picker"
    ),
    
    array(  "name" => __("General Body Font", $shortname),
            "desc" => __("Choose which font stack you'd like to use for your general body font. <a href=\"#themeblvd_font_body\" class=\"jaybich-open\">Learn More</a>", $shortname),
            "id" => $shortname."_font_body",
            "std" => 'lucida',
            "more-info" => __("Font stacks are prioritized lists of fonts, defined in the CSS font-family attribute, that the browser will cycle through until it finds a font that is installed on the user's system. The font stacks listed here were put together by <a href='http://unitinteractive.com/blog/2008/06/26/better-css-font-stacks/'>Nathan Ford</a>.", $shortname),
            "type" => "select",
            "data" => array(

                array(
                    "name" => 'Arial, "Helvetica Neue", Helvetica, sans-serif',
                    "value" => 'arial'
                ),

                array(
                    "name" => 'Baskerville, "Times New Roman", Times, serif',
                    "value" => 'baskerville'
                ),

                array(
                    "name" => 'Cambria, Georgia, Times, "Times New Roman", serif',
                    "value" => 'cambria'
                ),

                array(
                    "name" => '"Century Gothic", "Apple Gothic", sans-serif',
                    "value" => 'century-gothic'
                ),

                array(
                    "name" => 'Consolas, "Lucida Console", Monaco, monospace',
                    "value" => 'consolas'
                ),

                array(
                    "name" => '"Copperplate Light", "Copperplate Gothic Light", serif',
                    "value" => 'copperplate-light'
                ),

                array(
                    "name" => '"Courier New", Courier, monospace',
                    "value" => 'courier-new'
                ),

                array(
                    "name" => '"Franklin Gothic Medium", "Arial Narrow Bold", Arial, sans-serif',
                    "value" => 'franklin'
                ),

                array(
                    "name" => 'Futura, "Century Gothic", AppleGothic, sans-serif',
                    "value" => 'futura'
                ),

                array(
                    "name" => 'Garamond, "Hoefler Text", Times New Roman, Times, serif',
                    "value" => 'garamond'
                ),

                array(
                    "name" => 'Geneva, "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", Verdana, sans-serif',
                    "value" => 'geneva'
                ),

                array(
                    "name" => 'Georgia, Palatino," Palatino Linotype", Times, "Times New Roman", serif',
                    "value" => 'georgia'
                ),

                array(
                    "name" => '"Gill Sans", Calibri, "Trebuchet MS", sans-serif',
                    "value" => 'gill-sans'
                ),

                array(
                    "name" => '"Helvetica Neue", Arial, Helvetica, sans-serif',
                    "value" => 'helvetica'
                ),

                array(
                    "name" => 'Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif',
                    "value" => 'impact'
                ),

                array(
                    "name" => '"Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif',
                    "value" => 'lucida'
                ),

                array(
                    "name" => 'Palatino, "Palatino Linotype", Georgia, Times, "Times New Roman", serif',
                    "value" => 'palatino'
                ),

                array(
                    "name" => 'Tahoma, Geneva, Verdana',
                    "value" => 'tahoma'
                ),

                array(
                    "name" => 'Times, "Times New Roman", Georgia, serif',
                    "value" => 'times'
                ),

                array(
                    "name" => '"Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande"," Lucida Sans", Arial, sans-serif',
                    "value" => 'trebuchet'
                ),

                array(
                    "name" => 'Verdana, Geneva, Tahoma, sans-serif',
                    "value" => 'verdana'
                )
            )
    ),

    array(  "name" => __("Headers Font", $shortname),
            "desc" => __("Choose which font you'd like to use from the Google Font Directory. Select 'None' if you'd like the header font to default to the body font. <a href=\"#themeblvd_font_headers\" class=\"jaybich-open\">Learn More</a>", $shortname),
            "id" => $shortname."_font_headers",
            "std" => "Cantarell",
            "more-info" => "This theme uses the CSS3 @font-face for all of your headers (&lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, etc.). The choices given are hosted from <a href='http://code.google.com/webfonts' target='_blank'>Google's Font Directory</a>. View the directory in order to preview all fonts listed here. This list is not a full list and doesn't include all fonts in the directory. Also note that older browsers do not support this method of font rendering. In these older browsers, the font will fall back to your general body font.",
            "type" => "select",
            "data" => array(

                array(
                    "name" => "None",
                    "value" => "none"
                ),

                array(
                    "name" => "Cantarell",
                    "value" => "Cantarell"
                ),

                array(
                    "name" => "Cardo",
                    "value" => "Cardo"
                ),

                array(
                    "name" => "Crimson Text",
                    "value" => "Crimson Text"
                ),

                array(
                    "name" => "Cuprum",
                    "value" => "Cuprum"
                ),

                array(
                    "name" => "Droid Sans",
                    "value" => "Droid Sans"
                ),

                array(
                    "name" => "Droid Sans Mono",
                    "value" => "Droid Sans Mono"
                ),

                array(
                    "name" => "Droid Serif",
                    "value" => "Droid Serif"
                ),

                array(
                    "name" => "Inconsolata",
                    "value" => "Inconsolata"
                ),

                array(
                    "name" => "Joesfin Sans Std Light",
                    "value" => "Joesfin Sans Std Light"
                ),

                array(
                    "name" => "Lobster",
                    "value" => "Lobster"
                ),

                array(
                    "name" => "Molengo",
                    "value" => "Molengo"
                ),

                array(
                    "name" => "Neucha",
                    "value" => "Neucha"
                ),

                array(
                    "name" => "Neuton",
                    "value" => "Neuton"
                ),

                array(
                    "name" => "Nobile",
                    "value" => "Nobile"
                ),

                array(
                    "name" => "OFL Sorts Mill Goudy TT",
                    "value" => "OFL Sorts Mill Goudy TT"
                ),

                array(
                    "name" => "Old Standard TT",
                    "value" => "Old Standard TT"
                ),

                array(
                    "name" => "PT Sans",
                    "value" => "PT Sans"
                ),

                array(
                    "name" => "Philosopher",
                    "value" => "Philosopher"
                ),

                array(
                    "name" => "Reenie Beanie",
                    "value" => "Reenie Beanie"
                ),

                array(
                    "name" => "Tangerine",
                    "value" => "Tangerine"
                ),

                array(
                    "name" => "Volkorn",
                    "value" => "Volkorn"
                ),

                array(
                    "name" => "Yanone Kaffeesatz",
                    "value" => "Yanone Kaffeesatz"
                )

            )
    ),

    array(  "name" => __("Custom CSS", $shortname),
            "type" => "textarea",
            "id" => $shortname."_css",
            "desc" => __("Feel free to throw in some of your own CSS code if you're feeling like you want to spruce things up a bit. You <strong>do not</strong> need &lt;style&gt; tags.", $shortname),
            "std" => ""

    ),

    array(  "type" => "end" ),

    //General Settings
    array(  "type" => "start",
            "name" => "General Settings",
            "id" => "general-settings",
            "icon" => "tools"
    ),

    array(  "name" => __("Show breadcrumbs?", $shortname),
            "desc" => __("Specify whether or not you'd like breadcrumbs to show throughout your website.", $shortname),
            "id" => $shortname."_breadcrumbs",
            "std" => "true",
            "type" => "true_false_radio",
            "option1" => __("Yes, show breadcrumbs.", $shortname),
            "option2" => __("No, hide them.", $shortname)
    ),

    array(  "name" => __("Show title on archive pages?", $shortname),
            "desc" => __("This option applies to standard WordPress archive pages that show posts by tag, category, date, etc.", $shortname),
            "id" => $shortname."_archive_title",
            "std" => "true",
            "type" => "true_false_radio",
            "option1" => __("Yes, show titles on archive pages.", $shortname),
            "option2" => __("No, hide titles.", $shortname)
    ),

    array(  "name" => __("Show featured images on archive pages?", $shortname),
            "desc" => __("This option applies to standard WordPress archive pages that show posts by tag, category, date, etc.", $shortname),
            "id" => $shortname."_archive_image",
            "std" => "true",
            "type" => "true_false_radio",
            "option1" => __("Yes, show featured images on archive pages.", $shortname),
            "option2" => __("No, hide them.", $shortname)
    ),

    array(  "name" => __("Show title on search pages?", $shortname),
            "desc" => __("This option applies to search result pages.", $shortname),
            "id" => $shortname."_search_title",
            "std" => "true",
            "type" => "true_false_radio",
            "option1" => __("Yes, show titles on search result pages.", $shortname),
            "option2" => __("No, hide titles.", $shortname)
    ),

    array(  "type" => "end" ),

    //Layout Settings
    array(  "type" => "start",
            "name" => "Layout Settings",
            "id" => "layout",
            "icon" => "web-layout"
    ),

    array(
            "type" => "description",
            "desc" => __("<h4>Header</h4>", $shortname)
    ),

    array(  "name" => __("Header Logo", $shortname),
            "desc" => __("Select whether you want your main logo to be an image or text. If you select 'image' you can put in the image url in the next option, and if you select 'text' your <a href='options-general.php' target='_blank'>Site Title</a> will show instead.", $shortname),
            "id" => $shortname."_logo",
            "std" => "image",
            "type" => "radio",
            "data" => array(

                array(
                    "name" => "Image Logo",
                    "value" => "image"
                ),

                array(
                    "name" => "Text Logo",
                    "value" => "text"
                )

            )
    ),

    array(  "type" => "upload",
            "name" => "Header Logo Image URL",
            "id" => $shortname."_logo_image",
            "desc" => "If you've selected for an image to show for your logo in the above option, enter in the full URL to your logo image.<br /><br />Ex: http://www.yoursite.com/wp-content/uploads/2010/10/image.png",
            "std" => ""
    ),

    array(  "name" => __("Header - Right Section", $shortname),
            "desc" => __("Select what you'd like to show in the right side of your header.", $shortname),
            "id" => $shortname."_header",
            "std" => "twitter",
            "type" => "radio",
            "data" => array(

                array(
                    "name" => "Show recent tweet (from Twitter)",
                    "value" => "twitter"
                ),

                array(
                    "name" => "Show search form",
                    "value" => "search"
                ),

                array(
                    "name" => "Show block of HTML code.",
                    "value" => "html"
                ),

                array(
                    "name" => "Show nothing.",
                    "value" => "nothing"
                )
                
            )
    ),

    array(  "name" => __("Header Twitter Account", $shortname),
            "desc" => __("If you selected to show a recent tweet above, enter in your Twitter account username.", $shortname),
            "std" => "jasonbobich",
            "id" => $shortname."_header_twitter",
            "type" => "text"
    ),

    array(  "name" => __("Header HTML Block", $shortname),
            "desc" => __("If you selected to show a block of HTML code above, put your code in here.<br /><br />This block is 500px wide and positioned absolute. This means that the height of this block will not effect the overall height of the header area. The logo is what controls the height of your header.", $shortname),
            "id" => $shortname."_header_html",
            "std" => "",
            "type" => "textarea"
    ),

    array(
            "type" => "description",
            "desc" => __("<h4>Footer</h4>", $shortname)
    ),

    array(  "name" => __("Copyright Text", $shortname),
            "desc" => __("Enter in your copyright text. '%year%' will show the current year and '%site_title%' will show your current Site Title.", $shortname),
            "std" => "(c) %year% %site_title%. All rights reserved. Web Design by <a href=\"http://www.jasonbobich.com\">Jason Bobich</a>",
            "id" => $shortname."_copyright",
            "type" => "text"
    ),

    array(  "type" => "end" ),

    //Analytics
    array(  "type" => "start",
            "name" => "Analytics",
            "id" => "analytics",
            "icon" => "chart"
    ),

    array ( "type" => "description",
            "desc" => "Here you can enter in the Analytics Code given to you by your Analytics service provider. If you do not have one, <a href='http://google.com/analytics' target='_blank'>Google Analytics</a> is a good, free option for you. Whatever code you enter below will be inserted just before the closing &lt;/body&gt; tag of your website."
    ),

    array(  "name" => __("Analytics Code", $shortname),
            "desc" => __("Enter in your Analytics code to be inserted just before the closing &lt;/body&gt; tag of your website.", $shortname),
            "id" => $shortname."_analytics",
            "type" => "textarea",
            "std" => ""
    ),

    array(  "type" => "end" ),

    //Homepage options
    array(  "type" => "start",
            "name" => "Homepage",
            "id" => "homepage",
            "icon" => "home"
    ),

    array(
            "type" => "description",
            "desc" => __("<h4>Slideshow Options</h4>", $shortname)
    ),

    array(  "name" => __("Show slideshow?", $shortname),
            "desc" => __("Choose whether or not you want to show the slideshow at the top of the homepage.", $shortname),
            "option1" => __("Yes, show slideshow.", $shortname),
            "option2" => __("No, hide slideshow.", $shortname),
            "id" => $shortname."_home_show_slideshow",
            "std" => "true",
            "type" => "true_false_radio"
    ),

    array(  "name" => __("Slideshow feed from where?", $shortname),
            "desc" => __("Choose the slideshow you'd like to pull from. Slideshows are setup <a href='edit-tags.php?taxonomy=slideshows&post_type=slide'>here</a>.", $shortname),
            "id" => $shortname."_home_slideshow",
            "std" => "all",
            "taxo" => "slideshows",
            "type" => "taxo_dropdown"
    ),

    array(  "name" => __("Slideshow transition", $shortname),
            "desc" => __("Here you can select how you want each slide to transition to the next. The most typical options would be \"fade\" and \"scrollHorz\".", $shortname),
            "id" => $shortname."_home_slide_transition",
            "std" => "scrollHorz",
            "type" => "select",
            "data" => array(

                array(
                    "name" => "blindX",
                    "value" => "blindX"
                ),

                array(
                    "name" => "blindY",
                    "value" => "blindY"
                ),

                array(
                    "name" => "blindZ",
                    "value" => "blindZ"
                ),

                array(
                    "name" => "cover",
                    "value" => "cover"
                ),

                array(
                    "name" => "curtainX",
                    "value" => "curtainX"
                ),

                array(
                    "name" => "curtainY",
                    "value" => "curtainY"
                ),

                array(
                    "name" => "fade",
                    "value" => "fade"
                ),

                array(
                    "name" => "fadeZoom",
                    "value" => "fadeZoom"
                ),

                array(
                    "name" => "growX",
                    "value" => "growX"
                ),

                array(
                    "name" => "growY",
                    "value" => "growY"
                ),

                array(
                    "name" => "none",
                    "value" => "none"
                ),

                array(
                    "name" => "scrollUp",
                    "value" => "scrollUp"
                ),

                array(
                    "name" => "scrollDown",
                    "value" => "scrollDown"
                ),

                array(
                    "name" => "scrollLeft",
                    "value" => "scrollLeft"
                ),

                array(
                    "name" => "scrollRight",
                    "value" => "scrollRight"
                ),

                array(
                    "name" => "scrollHorz",
                    "value" => "scrollHorz"
                ),

                array(
                    "name" => "scrollVert",
                    "value" => "scrollVert"
                ),

                array(
                    "name" => "shuffle",
                    "value" => "shuffle"
                ),

                array(
                    "name" => "slideX",
                    "value" => "slideX"
                ),

                array(
                    "name" => "slideY",
                    "value" => "slideY"
                ),

                array(
                    "name" => "toss",
                    "value" => "toss"
                ),

                array(
                    "name" => "turnUp",
                    "value" => "turnUp"
                ),

                array(
                    "name" => "turnDown",
                    "value" => "turnDown"
                ),

                array(
                    "name" => "turnLeft",
                    "value" => "turnLeft"
                ),

                array(
                    "name" => "turnRight",
                    "value" => "turnRight"
                ),

                array(
                    "name" => "uncover",
                    "value" => "uncover"
                ),

                array(
                    "name" => "wipe",
                    "value" => "wipe"
                ),

                array(
                    "name" => "zoom",
                    "value" => "zoom"
                )
            )
    ),

    array(  "name" => __("Slideshow auto height", $shortname),
            "desc" => __("If you turn this on, it means the slideshow will animate to a new height for each slide. If turned off, the slideshow will take on the height of the tallest slide and stay that height.", $shortname),
            "option1" => __("Yes, turn on auto height animated scaling.", $shortname),
            "option2" => __("No, let the slideshow take on the height of the tallest slide.", $shortname),
            "id" => $shortname."_home_slide_height",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "name" => __("Slideshow autoplay duration", $shortname),
            "desc" => __("Enter the time you would like in between transitions in seconds. Use '0' to deactivate automatic transitioning.", $shortname),
            "id" => $shortname."_home_slide_speed",
            "std" => "6",
            "type" => "text"),

    array(  "name" => __("Show next/previous arrows?", $shortname),
            "desc" => __("These are the arrows that allow the user to navigate the slideshow to the next slide or back to the previous slide.", $shortname),
            "id" => $shortname."_home_slide_arrows",
            "std" => "true",
            "option1" => __('Yes show next/previous buttons.', $shortname),
            "option2" => __('No, hide them.', $shortname),
            "type" => "true_false_radio"),

    array(
            "type" => "description",
            "desc" => __("<h4>Featured Posts Options</h4>", $shortname)
    ),

    array(  "name" => __("Show featured posts?", $shortname),
            "desc" => __("Choose whether or not you want to show the featured posts in the middle of the homepage.", $shortname),
            "option1" => __("Yes, show featured posts.", $shortname),
            "option2" => __("No, hide featured posts.", $shortname),
            "id" => $shortname."_home_show_featured",
            "std" => "true",
            "type" => "true_false_radio"
    ),

    array(  "name" => __("Featured posts tag", $shortname),
            "desc" => __("Enter the tag you'd like to assign to posts in order for them to show here.", $shortname),
            "id" => $shortname."_home_featured_tag",
            "std" => "featured",
            "type" => "text"
    ),

    array(  "name" => __("Pull blog posts or portfolio items?", $shortname),
            "desc" => __("Chose whether you want the featured tag to pull from blog posts or portfolio items.", $shortname),
            "option1" => __("Blog Posts", $shortname),
            "option2" => __("Portfolio Items", $shortname),
            "id" => $shortname."_home_featured_type",
            "std" => "true",
            "type" => "true_false_radio"
    ),

    array(
            "type" => "description",
            "desc" => __("<h4>Bottom Content Area Options</h4>", $shortname)
    ),

    array(  "name" => __("Show bottom content area?", $shortname),
            "desc" => __("Choose whether or not you want the entire bottom content area to show.", $shortname),
            "option1" => __("Yes, show bottom content area.", $shortname),
            "option2" => __("No, hide bottom content area.", $shortname),
            "id" => $shortname."_home_show_content",
            "std" => "true",
            "type" => "true_false_radio"
    ),

    array(  "name" => __("Use which page's content?", $shortname),
            "desc" => __("Choose which page you want to pull content from to fill this area.", $shortname),
            "id" => $shortname."_home_page",
            "type" => "page_dropdown"
    ),

    array(  "name" => __("Show page's title?", $shortname),
            "desc" => __("Choose whether or not you want the title of the page selected in the previous option to show before the page's content.", $shortname),
            "option1" => __("Yes, show page's title.", $shortname),
            "option2" => __("No, hide page's title.", $shortname),
            "id" => $shortname."_home_page_title",
            "std" => "true",
            "type" => "true_false_radio"
    ),
    
    array(  "name" => __("Show bottom content sidebar?", $shortname),
            "desc" => __("Choose whether to show the sidebar or not. If the sidebar is hidden, the selected page's content will stretch full-width.", $shortname),
            "option1" => __("Yes, show sidebar.", $shortname),
            "option2" => __("No, hide sidebar.", $shortname),
            "id" => $shortname."_home_show_sidebar",
            "std" => "true",
            "type" => "true_false_radio"
    ),

    array(  "type" => "end"),

    //Portfolios
    array(  "type" => "start",
            "name" => "Portfolios",
            "id" => "portfolio",
            "icon" => "images"
    ),

    array(
            "type" => "description",
            "desc" => __("You can have an unlimited number of portfolio pages on your site. The following options will take effect across <strong>all</strong> of your portfolio pages.<br /><br />To sum it all up, this theme uses a custom post type of <a href=\"edit.php?post_type=portfolio-item\">Portfolio Items</a> which are categorized into a custom taxonomy, <a href=\"edit-tags.php?taxonomy=portfolio&post_type=portfolio-item\">Portfolios</a>. To make a Portfolio live, you simply add that Portfolio (i.e. group of Portfolio Items) to a menu with the <a href=\"nav-menus.php\">Menu Builder</a>. <br /><br /><em>Hint: If you don't see \"Portfolios\" in the left column while building a menu, it just means you need to unhide it under the Screen Options tab in the top right corner of the screen.</em>", $shortname)
    ),

    array(  "name" => __("Show title of the page?", "themeblvd"),
            "option1" => __("Yes, show main title.", "themeblvd"),
            "option2" => __("No, hide it.", "themeblvd"),
            "desc" => __("This is referring to the main title of the Portfolio, NOT the titles of the individual portfolio items."),
            "id" => $shortname."_portfolio_title",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "name" => __("Show Portfolio description?", "themeblvd"),
            "option1" => __("Yes, show the portfolio's description.", "themeblvd"),
            "option2" => __("No, hide it.", "themeblvd"),
            "desc" => __("This is referring to the main description of the Portfolio, NOT the excerpts of the individual portfolio items."),
            "id" => $shortname."_portfolio_description",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "name" => __("How many items per page?", "themeblvd"),
            "desc" => __("Enter the number of portfolio items you'd like displayed on each page. Most likely you'd want to pick a number divisible by 3 (i.e. 3, 6, 9, 12).", "themeblvd"),
            "id" => $shortname."_portfolio_page",
            "std" => "9",
            "type" => "text"),

    array(  "name" => __("Item thumbnails link where?", "themeblvd"),
            "option1" => __("Link to lightbox popup of the media item.", "themeblvd"),
            "option2" => __("Link to the portfolio post.", "themeblvd"),
            "desc" => __("This is referring to the thumbnails of each portfolio item.", "themeblvd"),
            "id" => $shortname."_portfolio_item_thumb",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "name" => __("Show item titles?", "themeblvd"),
            "option1" => __("Yes, show titles.", "themeblvd"),
            "option2" => __("No, hide them.", "themeblvd"),
            "desc" => __("This is referring to the titles of portfolio items on the portfolio gallery page.", "themeblvd"),
            "id" => $shortname."_portfolio_item_title",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "name" => __("Item titles are links?", "themeblvd"),
            "option1" => __("Yes, item titles link to the portfolio posts.", "themeblvd"),
            "option2" => __("No, item titles are not links.", "themeblvd"),
            "desc" => __("This is referring to the title of portfolio items on the portfolio gallery page.", "themeblvd"),
            "id" => $shortname."_portfolio_item_title_link",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "name" => __("Show item descriptions?", "themeblvd"),
            "option1" => __("Yes, show descriptions.", "themeblvd"),
            "option2" => __("No, hide them.", "themeblvd"),
            "desc" => __("This is referring to the description of a portfolio item on the portfolio gallery page.", "themeblvd"),
            "id" => $shortname."_portfolio_item_description",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "name" => __("Show item \"Read More\" links?", "themeblvd"),
            "option1" => __("Yes, show links.", "themeblvd"),
            "option2" => __("No, hide them.", "themeblvd"),
            "desc" => __("This is referring to a \"Read More\" link that links to the portfolio item's post.", "themeblvd"),
            "id" => $shortname."_portfolio_item_more",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "type" => "end"),
    
);

##############################################################
# Information
##############################################################

$info = array(
    "pageTitle" => "Theme Options",
    "menuTitle" => "Theme Options",
    "pageLevel" => "parent",
    "pageSlug" => "general",
    "linkSupport" => "http://themeforest.net/user/themeblvd",
    "linkSite" => "http://themeforest.net/user/themeblvd/portfolio",
    "linkAuthor" => "http://www.jasonbobich.com",
    "linkProfile" => "http://www.themeforest.net/user/themeblvd"
);

##############################################################
# Activate Options Page
##############################################################

$themeblvd_options_general = new themeblvd_options($info, $shortname, $themename, $options_general);

?>
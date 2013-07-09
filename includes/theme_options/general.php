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

    array(  "name" => __("Body Style", $shortname),
            "desc" => __("Choose your body style.", $shortname),
            "id" => $shortname."_style",
            "std" => "light",
            "type" => "select",
            "data" => array(

                array(
                    "name" => "Dark",
                    "value" => "dark"
                ),

                array(
                    "name" => "Light",
                    "value" => "light"
                ),

                array(
                    "name" => "Beige",
                    "value" => "beige"
                )

            )

    ),

    array(  "name" => __("Header Color", $shortname),
            "desc" => __("Enter in a color hex value. This color will show in your header beneath whatever texture you choose. HINT: Darker colors will allow the texture you select in the next option to be more visable.<br />Ex: 000000", $shortname),
            "id" => $shortname."_header_color",
            "std" => "000000",
            "type" => "color_picker"
    ),

    array(  "name" => __("Header Texture", $shortname),
            "desc" => __("This is the texture that will appear in the header of your site. Note that some textures will appear better on different colors. So, play around a little!<br /><br /><a href=\"#themeblvd_header_texture\" class=\"jaybich-open\">View Texture Guide</a>", $shortname),
            "more-info" => '<center><img src="'.get_template_directory_uri().'/includes/theme_options/images/texture-guide.jpg" /></center>',
            "id" => $shortname."_header_texture",
            "std" => "image=chex.png&position=0+0&repeat=repeat",
            "type" => "select",
            "data" => array(

				array(
                    "name" => "None",
                    "value" => "none"
                ),

                array(
                    "name" => "Bathroom Wall",
                    "value" => "image=bathroom-wall.png&position=0+0&repeat=repeat"
                ),

				array(
                    "name" => "Bokeh",
                    "value" => "image=bokeh.png&position=center+0&repeat=no-repeat"
                ),

				array(
                    "name" => "Boxy (Thick)",
                    "value" => "image=boxy-thick.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Boxy (Thin)",
                    "value" => "image=boxy-thin.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Camo",
                    "value" => "image=camo.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Cathedral",
                    "value" => "image=cathedral.png&position=0+0&repeat=repeat"
                ),

				array(
                    "name" => "Chex",
                    "value" => "image=chex.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Chex (Reverse)",
                    "value" => "image=chex-reverse.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Church Window",
                    "value" => "image=church-window.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Circles",
                    "value" => "image=circles.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Diagnol (Grid)",
                    "value" => "image=diag-grid.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Diagnol (Thick)",
                    "value" => "image=diag2.png&position=0+0&repeat=repeat"
                ),

				array(
                    "name" => "Diagnol (Thin)",
                    "value" => "image=diag1.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Digital",
                    "value" => "image=digital.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Fabric",
                    "value" => "image=fabric.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Grid #1",
                    "value" => "image=grid1.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Grid #2",
                    "value" => "image=grid2.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Grid #3",
                    "value" => "image=grid3.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Grid #4",
                    "value" => "image=grid4.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Grid #5",
                    "value" => "image=grid5.png&position=0+0&repeat=repeat"
                ),

				array(
                    "name" => "Grunge",
                    "value" => "image=grunge.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Grunge (Professional)",
                    "value" => "image=grunge-pro.png&position=center+1px&repeat=no-repeat"
                ),

                array(
                    "name" => "Horizontal (Thick)",
                    "value" => "image=horz2.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Horizontal (Thin)",
                    "value" => "image=horz1.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Kitchen Floor",
                    "value" => "image=kitchen-floor.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Leather",
                    "value" => "image=leather.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Metal",
                    "value" => "image=metal.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Mosaic",
                    "value" => "image=mosaic.png&position=center+0&repeat=no-repeat"
                ),

                array(
                    "name" => "Noise",
                    "value" => "image=noise.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Ornate",
                    "value" => "image=ornate.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Retro Grunge Stripes",
                    "value" => "image=retro-grunge.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Retro Wallpaper",
                    "value" => "image=retro-wallpaper.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Squares",
                    "value" => "image=squares.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Squares (Nested)",
                    "value" => "image=squares-nested.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Vertical (Thick)",
                    "value" => "image=vert2.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Vertical (Thin)",
                    "value" => "image=vert1.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Wavy",
                    "value" => "image=wavy.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Wood (Old)",
                    "value" => "image=wood-old.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Wood (Simple)",
                    "value" => "image=wood-simple.png&position=0+0&repeat=repeat"
                ),

                array(
                    "name" => "Wood (Polished)",
                    "value" => "image=wood.png&position=0+0&repeat=repeat"
                )

            )
    ),

    array(  "name" => __("Accent Color", $shortname),
            "desc" => __("Enter in a color hex value. This color will be applied in several key areas of your site including most notably the <strong>main menu</strong>.<br />Ex: 000000", $shortname),
            "id" => $shortname."_accent_color",
            "std" => "0083b6",
            "type" => "color_picker"
    ),

    array(  "name" => __("Link Color", $shortname),
            "desc" => __("Enter in a link color hex value.<br />Ex: 000000", $shortname),
            "id" => $shortname."_link_color",
            "std" => "0074a1",
            "type" => "color_picker"
    ),

    array(  "name" => __("Link Hover Color", $shortname),
            "desc" => __("Enter in a link color hex value.<br />Ex: 000000", $shortname),
            "id" => $shortname."_link_hover_color",
            "std" => "004c69",
            "type" => "color_picker"
    ),

    array(  "name" => __("Footer Style", $shortname),
            "desc" => __("Choose your footer style.", $shortname),
            "id" => $shortname."_footer_style",
            "std" => "dark",
            "type" => "select",
            "data" => array(

                array(
                    "name" => "Dark",
                    "value" => "dark"
                ),

                array(
                    "name" => "Light",
                    "value" => "light"
                ),

                array(
                    "name" => "Beige",
                    "value" => "beige"
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

    array(  "name" => __("Activate [raw] shortcode?", $shortname),
            "desc" => __("The raw shortcode can be useful when formatting your posts to escape WP auto formatting in select places, but if it causes any conflicts with other plugins, you can disable it here.", $shortname),
            "id" => $shortname."_raw_shortcode",
            "std" => "true",
            "type" => "true_false_radio",
            "option1" => __("Yes, enable [raw] shortcode.", $shortname),
            "option2" => __("No, disable [raw] shortcode.", $shortname)
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

    array(  "name" => __("Header Twitter Feed", $shortname),
            "desc" => __("If you've selected above to show a recent tweet, select a Twitter feed to pull the first tweet from.", $shortname),
            "std" => "",
            "id" => $shortname."_header_twitter_feed",
            "type" => "tweeple"
    ),

    array(  "name" => __("Header HTML Block", $shortname),
            "desc" => __("If you selected to show a block of HTML code above, put your code in here.<br /><br />This block is 500px wide and positioned absolute. This means that the height of this block will not effect the overall height of the header area. The logo is what controls the height of your header.", $shortname),
            "id" => $shortname."_header_html",
            "std" => "",
            "type" => "textarea"
    ),

    array(
            "type" => "description",
            "desc" => __("<h4>Content Area</h4>", $shortname)
    ),

    array(  "name" => __("Sidebar on right or left?", $shortname),
            "desc" => __("Choose which side of the page you'd like the sidebar to be positioned on when viewing 2-column pages.", $shortname),
            "id" => $shortname."_sidebar",
            "std" => "right",
            "type" => "select",
            "data" => array(

                    array(
                        "name" => __("Right", $shortname),
                        "value" => "right"
                    ),

                    array(
                        "name" => __("Left", $shortname),
                        "value" => "left"
                    )

                )
    ),

    array(
            "type" => "description",
            "desc" => __("<h4>Footer</h4>", $shortname)
    ),

    array(  "name" => __("How many footer columns?", $shortname),
            "desc" => __("A dynamic widget area will be registered for each column. <strong>Note: If you lessen the number of widget columns, any existing widgets in additional columns will be removed.</strong>", $shortname),
            "id" => $shortname."_footer_columns",
            "std" => "4",
            "type" => "select",
            "data" => array(

					array(
                        "name" => __("Hide Widget Columns", $shortname),
                        "value" => "hide"
                    ),

                    array(
                        "name" => __("1 Column", $shortname),
                        "value" => "1"
                    ),

                    array(
                        "name" => __("2 Columns", $shortname),
                        "value" => "2"
                    ),

                    array(
                        "name" => __("3 Columns", $shortname),
                        "value" => "3"
                    ),

                    array(
                        "name" => __("4 Columns", $shortname),
                        "value" => "4"
                    ),

                )
    ),

    array(  "name" => __("Copyright Text", $shortname),
            "desc" => __("Enter in your copyright text. '%year%' will show the current year and '%site_title%' will show your current Site Title.", $shortname),
            "std" => "(c) %year% %site_title%. All rights reserved. Web Design by <a href=\"http://www.jasonbobich.com\">Jason Bobich</a>",
            "id" => $shortname."_copyright",
            "type" => "text"
    ),

    array(  "type" => "end" ),

    //Fonts
    array(  "type" => "start",
            "name" => __("Fonts", $shortname),
            "id" => "fonts",
            "icon" => "pencil"
    ),

    array(  "name" => __("General Body Font Size", $shortname),
            "desc" => __("Choose the size in pixels that you'd like your body font to be.", $shortname),
            "id" => $shortname."_font_size",
            "std" => "12px",
            "type" => "select",
            "data" => array(

                array(
                    "name" => "10px",
                    "value" => "10px"
                ),

                array(
                    "name" => "11px",
                    "value" => "11px"
                ),

                array(
                    "name" => "12px",
                    "value" => "12px"
                ),

                array(
                    "name" => "13px",
                    "value" => "13px"
                ),

                array(
                    "name" => "14px",
                    "value" => "14px"
                ),

                array(
                    "name" => "15px",
                    "value" => "15px"
                ),

            )
    ),


    array(  "name" => __("General Body Font", $shortname),
            "desc" => __("Choose which font stack you'd like to use for your general body font. <a href=\"#themeblvd_font_body\" class=\"jaybich-open\">Learn More</a>", $shortname),
            "id" => $shortname."_font_body",
            "std" => 'lucida',
            "custom" => "body_font",
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
            "desc" => __("Choose which font you'd like to use from the Google Font Directory. Select 'None' if you'd like the header font to default to the body font. <a href=\"#flipblog_font_headers\" class=\"jaybich-open\">Learn More</a>", $shortname),
            "id" => $shortname."_font_headers",
            "std" => "Cantarell",
            "custom" => "header_font",
            "more-info" => "This theme uses the CSS3 @font-face for all of your headers (&lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, etc.). The choices given are hosted from <a href='http://code.google.com/webfonts' target='_blank'>Google's Font Directory</a>. View the directory in order to preview all fonts listed here. This list is not a full list and doesn't include all fonts in the directory. Also note that older browsers do not support this method of font rendering. In these older browsers, the font will fall back to your general body font.",
            "type" => "select",
            "data" => array(

                array(
                    "name" => "None",
                    "value" => "none"
                ),

				array(
                    "name" => "Allan",
                    "value" => "Allan:bold"
                ),

                array(
                    "name" => "Allerta",
                    "value" => "Allerta"
                ),

                array(
                    "name" => "Allerta Stencil",
                    "value" => "Allerta+Stencil"
                ),

                array(
                    "name" => "Anonymous Pro",
                    "value" => "Anonymous+Pro"
                ),

                array(
                    "name" => "Arimo",
                    "value" => "Arimo"
                ),

                array(
                    "name" => "Arvo",
                    "value" => "Arvo"
                ),

                array(
                    "name" => "Bentham",
                    "value" => "Bentham"
                ),

                array(
                    "name" => "Buda",
                    "value" => "Buda:light"
                ),

                array(
                    "name" => "Cabin",
                    "value" => "Cabin:bold"
                ),

                array(
                    "name" => "Calligraffitti",
                    "value" => "Calligraffitti"
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
                    "name" => "Cherry Cream Soda",
                    "value" => "Cherry+Cream+Soda"
                ),

                array(
                    "name" => "Chewy",
                    "value" => "Chewy"
                ),

                array(
                    "name" => "Coda",
                    "value" => "Coda:800"
                ),

                array(
                    "name" => "Coming Soon",
                    "value" => "Coming+Soon"
                ),

                array(
                    "name" => "Copse",
                    "value" => "Copse"
                ),

                array(
                    "name" => "Corben",
                    "value" => "Corben:bold"
                ),

                array(
                    "name" => "Cousine",
                    "value" => "Cousine"
                ),

                array(
                    "name" => "Covered By Your Grace",
                    "value" => "Covered+By+Your+Grace"
                ),

                array(
                    "name" => "Crafty Girls",
                    "value" => "Crafty+Girls"
                ),

                array(
                    "name" => "Crimson Text",
                    "value" => "Crimson+Text"
                ),

                array(
                    "name" => "Crushed",
                    "value" => "Crushed"
                ),

                array(
                    "name" => "Cuprum",
                    "value" => "Cuprum"
                ),

                array(
                    "name" => "Droid Sans",
                    "value" => "Droid+Sans"
                ),

                array(
                    "name" => "Droid Sans Mono",
                    "value" => "Droid+Sans+Mono"
                ),

                array(
                    "name" => "Droid Serif",
                    "value" => "Droid+Serif"
                ),

                array(
                    "name" => "Fontdiner Swanky",
                    "value" => "Fontdiner+Swanky"
                ),

                array(
                    "name" => "Geo",
                    "value" => "Geo"
                ),

                array(
                    "name" => "Gruppo",
                    "value" => "Gruppo"
                ),

                array(
                    "name" => "Homemade Apple",
                    "value" => "Homemade+Apple"
                ),

                array(
                    "name" => "IM Fell",
                    "value" => "IM+Fell+DW+Pica"
                ),

                array(
                    "name" => "Inconsolata",
                    "value" => "Inconsolata"
                ),

                array(
                    "name" => "Irish Growler",
                    "value" => "Irish+Growler"
                ),

                array(
                    "name" => "Josefin Sans Std Light",
                    "value" => "Josefin+Sans:300",
                ),

                array(
                    "name" => "Josefin Slab",
                    "value" => "Josefin+Slab:100"
                ),

                array(
                    "name" => "Just Another Hand",
                    "value" => "Just+Another+Hand"
                ),

                array(
                    "name" => "Just Me Again Down Here",
                    "value" => "Just+Me+Again+Down+Here"
                ),

                array(
                    "name" => "Kenia",
                    "value" => "Kenia"
                ),

                array(
                    "name" => "Kranky",
                    "value" => "Kranky"
                ),

                array(
                    "name" => "Kristi",
                    "value" => "Kristi"
                ),

                array(
                    "name" => "Lato",
                    "value" => "Lato"
                ),

                array(
                    "name" => "Lekton",
                    "value" => "Lekton"
                ),

                array(
                    "name" => "Lobster",
                    "value" => "Lobster"
                ),

                array(
                    "name" => "Luckiest Guy",
                    "value" => "Luckiest+Guy"
                ),

                array(
                    "name" => "Maiden Orange",
                    "value" => "Maiden+Orange"
                ),

                array(
                    "name" => "Merriweather",
                    "value" => "Merriweather"
                ),

                array(
                    "name" => "Molengo",
                    "value" => "Molengo"
                ),

                array(
                    "name" => "Mountains of Christmas",
                    "value" => "Mountains+of+Christmas"
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
                    "value" => "OFL+Sorts+Mill+Goudy+TT"
                ),

                array(
                    "name" => "Old Standard TT",
                    "value" => "Old+Standard+TT"
                ),

                array(
                    "name" => "Orbitron",
                    "value" => "Orbitron"
                ),

                array(
                    "name" => "PT Sans",
                    "value" => "PT+Sans"
                ),

                array(
                    "name" => "Permanent Marker",
                    "value" => "Permanent+Marker"
                ),

                array(
                    "name" => "Philosopher",
                    "value" => "Philosopher"
                ),

                array(
                    "name" => "Puritan",
                    "value" => "Puritan"
                ),

                array(
                    "name" => "Raleway",
                    "value" => "Raleway:100"
                ),

                array(
                    "name" => "Reenie Beanie",
                    "value" => "Reenie+Beanie"
                ),

				array(
                    "name" => "Rock Salt",
                    "value" => "Rock+Salt"
                ),

                array(
                    "name" => "Schoolbell",
                    "value" => "Schoolbell"
                ),

                array(
                    "name" => "Slackey",
                    "value" => "Slackey"
                ),

                array(
                    "name" => "Sniglet",
                    "value" => "Sniglet:800"
                ),

                array(
                    "name" => "Sunshiney",
                    "value" => "Sunshiney"
                ),

                array(
                    "name" => "Syncopate",
                    "value" => "Syncopate"
                ),

                array(
                    "name" => "Tangerine",
                    "value" => "Tangerine"
                ),

                array(
                    "name" => "Tinos",
                    "value" => "Tinos"
                ),

                array(
                    "name" => "Ubuntu",
                    "value" => "Ubuntu"
                ),

                array(
                    "name" => "UnifrakturCook",
                    "value" => "UnifrakturCook:bold"
                ),

                array(
                    "name" => "UnifrakturMaguntia",
                    "value" => "UnifrakturMaguntia"
                ),

                array(
                    "name" => "Unkempt",
                    "value" => "Unkempt"
                ),

                array(
                    "name" => "Vibur",
                    "value" => "Vibur"
                ),

                array(
                    "name" => "Vollkorn",
                    "value" => "Vollkorn"
                ),

                array(
                    "name" => "Walter Turncoat",
                    "value" => "Walter+Turncoat"
                ),

                array(
                    "name" => "Yanone Kaffeesatz",
                    "value" => "Yanone+Kaffeesatz"
                )

            )
	),

    array(  "type" => "end"),

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

    array(  "desc" => __("<h4>Layout Configuration</h4> <p>This section will help you setup which elements should be displayed on your homepage.</p>", $shortname),
            "type" => "description"
    ),

    array(  "name" => __("How do you want to setup your homepage?", $shortname),
            "desc" => __('Drag the elements around in the order you\'d like to position them on your homepage.<br /><br /><img src="'.get_template_directory_uri().'/includes/theme_options/images/home-diagram.jpg" />', $shortname),
            "id" => $shortname."_homepage_sort",
            "std" => array("placeholder", "slideshow", "slogan", "widgets"),
            "type" => "sortable",
            "data" => array(

                "slideshow" => array(
                    "name" => __('Slideshow', $shortname),
                    "value" => "slideshow"
                ),

                "slogan" => array(
                    "name" => __('Slogan', $shortname),
                    "value" => "slogan"
                ),

                "featured" => array(
                    "name" => __('Featured Posts', $shortname),
                    "value" => "featured"
                ),

                "widgets" => array(
                    "name" => __('Widget Columns', $shortname),
                    "value" => "widgets"
                ),

                "page" => array(
                    "name" => __('Content From Page', $shortname),
                    "value" => "page"
                ),

                "blog" => array(
                    "name" => __('Blog + Sidebar', $shortname),
                    "value" => "blog"
                )

            ),
    ),

    array(
            "type" => "description",
            "desc" => __("<h4>Slideshow</h4>", $shortname)
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
            "type" => "true_false_radio"
	),

	array(  "name" => __("Slideshow overlay color?", $shortname),
            "desc" => __("This is the transparent color that will appear behind descriptions if you place them on a slide in the slideshow.", $shortname),
            "id" => $shortname."_home_color",
            "std" => "000000",
            "type" => "color_picker"
    ),

    array(  "desc" => __("<h4>Widget Columns</h4> <p>This section allows you to configure the widget areas on your homepage.</p>", $shortname),
            "type" => "description"
    ),

    array(  "name" => __("How many widget columns?", $shortname),
            "desc" => __("A dynamic widget area will be registered for each column. Even if you have widget columns hidden in the Homepage Configuration options, selecting 0 widget columns will clean up Appearance > Widgets page by not having excess widget areas. <strong>Note: If you lessen the number of widget columns, any existing widgets in additional columns will be removed.</strong>", $shortname),
            "id" => $shortname."_homepage_columns",
            "std" => "3",
            "type" => "select",
            "data" => array(

					array(
                        "name" => __("0 Columns", $shortname),
                        "value" => "0"
                    ),

                    array(
                        "name" => __("1 Column", $shortname),
                        "value" => "1"
                    ),

                    array(
                        "name" => __("2 Columns", $shortname),
                        "value" => "2"
                    ),

                    array(
                        "name" => __("3 Columns", $shortname),
                        "value" => "3"
                    ),

                    array(
                        "name" => __("4 Columns", $shortname),
                        "value" => "4"
                    ),

                )
    ),

	array(
            "type" => "description",
            "desc" => __("<h4>Featured Posts</h4>", $shortname)
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

    array(  "desc" => __("<h4>Page Content</h4> <p>This section allows you to select a page, which will be used to populate this section of the homepage.</p>", $shortname),
            "type" => "description"
    ),

    array(  "name" => __("Use which page's content?", $shortname),
            "desc" => __("If you have the \"Content From Page\" set to show in your Layout Configuration options, here you can select which WordPress page to pull from.", $shortname),
            "id" => $shortname."_homepage_page_id",
            "std" => '',
            "type" => "page_dropdown"
    ),

    array(  "desc" => __("<h4>Slogan</h4> <p>This section will help you confgure your slogan and call-to-action button.</p>", $shortname),
            "type" => "description"
    ),

    array(  "name" => __("Slogan Text", $shortname),
            "desc" => __("Enter the text that will appear to the left of your call-to-action button.", $shortname),
            "id" => $shortname."_homepage_slogan",
            "std" => "This is the perfect business theme to get your site up and running in no time. It's so sleek, stylish and simple. It's just so Stealth.",
            "type" => "text"
    ),

    array(  "name" => __("Button Text", $shortname),
            "desc" => __("Enter the text that will appear in the call-to-action button.<br /><br /><strong>HINT: If you leave this field blank, the button will not show and the slogan will be centered.</strong>", $shortname),
            "id" => $shortname."_homepage_slogan_button",
            "std" => "Get Started Today",
            "type" => "text"
    ),

    array(  "name" => __("Button Link", $shortname),
            "desc" => __("Enter where the call-to-action button link. Ex: http://yoursite.com/landing-page", $shortname),
            "id" => $shortname."_homepage_slogan_link",
            "std" => "",
            "type" => "text"
    ),

    array(  "desc" => __("<h4>Homepage Blog</h4> <p>Here you can settings for a blog if you have it set to show.</p>", $shortname),
            "type" => "description"
    ),

    array(  "name" => __("Show excerpts or full posts?", $shortname),
            "desc" => __("Choose whether you'd like to show the excerpt or the content for a more classic blog feel. <a href=\"#themeblvd_homepage_blog_content\" class=\"jaybich-open\">Learn More</a>", $shortname),
            "more-info" => __('

            	<p>If you\'re new to WordPress, you may be wondering what the difference between showing the excerpt and showing the content is. So, here is some information on both options.</p>

				<h4>1) Show excerpts.</h4>

				<p>The <a href="http://codex.wordpress.org/Excerpt" target="_blank">excerpt</a> is a one paragraph summary of your post that can be up to 55 words long. You can specify the excerpt when creating your posts, and if you do not specify one, WordPress will automatically take the first 55 words of your post and use that. In an excerpt, you cannot have any HTML code; it is plain text only. Any HTML tags (links, images, etc.) that you attempt to put in the excerpt will be stripped by WordPress.</p>

				<p>In this particular theme, when showing the excerpt, a "Read More" button will automatically be displayed below the excerpt that links to the post.</p>

				<h4>2) Show full content.</h4>

				<p>If you\'re looking for more of a classic blog feel, you can choose to show the content on your blog page. This means that the excerpt will not be used at all. All content will be shown from your post with <em>no</em> automatic "Read More" button.</p>

				<p>When using this option, if you\'d like to pick a spot for the post to be cut off and insert a link to the post, this is commonly referred in WordPress as the "teaser". When you\'re writing a post, you can insert <em>&lt;!--more--&gt;</em> anywhere in the post, and it will cut off at that point and a link will be shown that leads to the post. You can also customize what the link says by adding text to that tag like this <em>&lt;!--more But wait, there\'s more!--&gt;</em>. <a href="http://codex.wordpress.org/Customizing_the_Read_More" target="_blank">Learn More</a></p>', $shortname),
            "id" => $shortname."_homepage_blog_content",
            "std" => "excerpt",
            "type" => "radio",
            "data" => array(

                array(
                    "name" => __("Show excerpts.", $shortname),
                    "value" => "excerpt"
                ),

                array(
                    "name" => __("Show full posts.", $shortname),
                    "value" => "content"
                )

            )
    ),

    array(  "name" => __("Show link to blog page at the bottom of posts?", $shortname),
            "desc" => __("This homepage blog does not have pagination, so it might be a good idea to show a link that directs to another page on your site where your full blog is.", $shortname),
            "id" => $shortname."_homepage_blog_link",
            "std" => "yes",
            "type" => "radio",
            "data" => array(

                array(
                    "name" => __("Yes, show a link.", $shortname),
                    "value" => "yes"
                ),

                array(
                    "name" => __("No, don't show a link.", $shortname),
                    "value" => "no"
                )

            )
    ),

    array(  "name" => __("Link Text", $shortname),
            "desc" => __("This is the text that will be displayed in the link directing to your blog page.", $shortname),
            "id" => $shortname."_homepage_blog_text",
            "std" => "More at the Blog &raquo;",
            "type" => "text"
    ),

    array(  "name" => __("Link URL", $shortname),
            "desc" => __("Put in the full URL to your blog page.<br />Ex: http://www.yoursite.com/blog", $shortname),
            "id" => $shortname."_homepage_blog_url",
            "std" => "",
            "type" => "text"
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

    array(  "name" => __("Media Player Color", $shortname),
            "desc" => __("This is the color you'd like to apply to your audio and video players for self-hosted media in your portfolios.", $shortname),
            "id" => $shortname."_media_color",
            "std" => "000000",
            "type" => "color_picker"
    ),

    array(  "name" => __("Video Player Logo URL", $shortname),
            "desc" => __("Enter the URL to the logo you'd like to show in the lower right corner of your self-hosted videos. Leave blank if you don't want one to show.", $shortname),
            "id" => $shortname."_video_logo",
            "std" => "",
            "type" => "upload"
    ),

    array(  "name" => __("Video Player Logo Width", $shortname),
            "desc" => __("Enter the width of your logo used in the previous option.", $shortname),
            "id" => $shortname."_video_logo_width",
            "std" => "100",
            "type" => "text"
    ),

    array(  "name" => __("Video Player Logo Height", $shortname),
            "desc" => __("Enter the height of your logo used in the previous option.", $shortname),
            "id" => $shortname."_video_logo_height",
            "std" => "40",
            "type" => "text"
    ),

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
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

$options_templates = array (

    //Alternate Homepage
    array(  "type" => "start",
            "name" => "Alternate Homepage",
            "id" => "homepage2",
            "icon" => "home"
    ),

    array(
            "type" => "description",
            "desc" => __("<h4>Slideshow Options</h4>", $shortname)
    ),

    array(  "name" => __("Show slideshow?", $shortname),
            "desc" => __("Choose whether or not you want to show the slideshow at the top of the home2 page.", $shortname),
            "option1" => __("Yes, show slideshow.", $shortname),
            "option2" => __("No, hide slideshow.", $shortname),
            "id" => $shortname."_home2_show_slideshow",
            "std" => "true",
            "type" => "true_false_radio"
    ),

    array(  "name" => __("Slideshow feed from where?", $shortname),
            "desc" => __("Choose the slideshow you'd like to pull from. Slideshows are setup <a href='edit-tags.php?taxonomy=slideshows&post_type=slide'>here</a>.", $shortname),
            "id" => $shortname."_home2_slideshow",
            "std" => "all",
            "taxo" => "slideshows",
            "type" => "taxo_dropdown"
    ),

    array(  "name" => __("Slideshow transition", $shortname),
            "desc" => __("Here you can select how you want each slide to transition to the next. The most typical options would be \"fade\" and \"scrollHorz\".", $shortname),
            "id" => $shortname."_home2_slide_transition",
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
            "id" => $shortname."_home2_slide_height",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "name" => __("Slideshow autoplay duration", $shortname),
            "desc" => __("Enter the time you would like in between transitions in seconds. Use '0' to deactivate automatic transitioning", $shortname),
            "id" => $shortname."_home2_slide_speed",
            "std" => "6",
            "type" => "text"),

    array(  "name" => __("Show next/previous arrows?", $shortname),
            "desc" => __("These are the arrows that allow the user to navigate the slideshow to the next slide or back to the previous slide.", $shortname),
            "id" => $shortname."_home2_slide_arrows",
            "std" => "true",
            "option1" => __('Yes show next/previous buttons.', $shortname),
            "option2" => __('No, hide them.', $shortname),
            "type" => "true_false_radio"),

    array(
            "type" => "description",
            "desc" => __("<h4>Slogan</h4>", $shortname)
    ),

    array(  "name" => __("Slogan", $shortname),
            "desc" => __("Leave this blank if you don't want the slogan to show at all.", $shortname),
            "id" => $shortname."_home2_slogan",
            "std" => "Put a catchy slogan for <span>your company’s website</span> here.",
            "type" => "text"),

    array(  "type" => "end"),

    //Blog Page
    array(  "type" => "start",
            "name" => "Blog Page",
            "id" => "blog",
            "icon" => "page-blank"
    ),

    array(  "name" => __("Exclude categories from blog page?", $shortname),
            "desc" => __("Choose which categories you'd like not to show on your blog page.", $shortname),
            "id" => $shortname."_blog_categories",
            "std" => "",
            "type" => "category_list"
    ),

    array(  "name" => __("Show content or excerpts?", $shortname),
            "desc" => __("Choose whether you want the full content of each post to show or just the excerpts.", $shortname),
            "option1" => __("Show full content.", $shortname),
            "option2" => __("Show only excerpts.", $shortname),
            "id" => $shortname."_blog_content",
            "std" => "false",
            "type" => "true_false_radio"
    ),

    array(
            "type" => "description",
            "desc" => __("<h4>Slideshow Options</h4>", $shortname)
    ),

    array(  "name" => __("Show slideshow?", $shortname),
            "desc" => __("Choose whether or not you want to show the slideshow at the top of the blog page.", $shortname),
            "option1" => __("Yes, show slideshow.", $shortname),
            "option2" => __("No, hide slideshow.", $shortname),
            "id" => $shortname."_blog_show_slideshow",
            "std" => "false",
            "type" => "true_false_radio"
    ),

    array(  "name" => __("Slideshow feed from where?", $shortname),
            "desc" => __("Choose the slideshow you'd like to pull from. Slideshows are setup <a href='edit-tags.php?taxonomy=slideshows&post_type=slide'>here</a>.", $shortname),
            "id" => $shortname."_blog_slideshow",
            "std" => "all",
            "taxo" => "slideshows",
            "type" => "taxo_dropdown"
    ),

    array(  "name" => __("Slideshow transition", $shortname),
            "desc" => __("Here you can select how you want each slide to transition to the next. The most typical options would be \"fade\" and \"scrollLeft\".", $shortname),
            "id" => $shortname."_blog_slide_transition",
            "std" => "scrollLeft",
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
            "id" => $shortname."_blog_slide_height",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "name" => __("Slideshow autoplay duration", $shortname),
            "desc" => __("Enter the time you would like in between transitions in seconds. Use '0' to deactivate automatic transitioning", $shortname),
            "id" => $shortname."_blog_slide_speed",
            "std" => "6",
            "type" => "text"),

    array(
            "type" => "description",
            "desc" => __("<h4>Featured Posts Options</h4>", $shortname)
    ),

    array(  "name" => __("Show featured posts?", $shortname),
            "desc" => __("Choose whether or not you want to show the featured posts in the middle of the blog page.", $shortname),
            "option1" => __("Yes, show featured posts.", $shortname),
            "option2" => __("No, hide featured posts.", $shortname),
            "id" => $shortname."_blog_show_featured",
            "std" => "false",
            "type" => "true_false_radio"
    ),

    array(  "name" => __("Featured posts tag", $shortname),
            "desc" => __("Enter the tag you'd like to assign to posts in order for them to show here.", $shortname),
            "id" => $shortname."_blog_featured_tag",
            "std" => "featured",
            "type" => "text"),

    array(  "name" => __("Pull blog posts or portfolio items?", $shortname),
            "desc" => __("Chose whether you want the featured tag to pull from blog posts or portfolio items.", $shortname),
            "option1" => __("Blog Posts", $shortname),
            "option2" => __("Portfolio Items", $shortname),
            "id" => $shortname."_blog_featured_type",
            "std" => "true",
            "type" => "true_false_radio"
    ),

    array(  "type" => "end"),

    //Magazine Page
    array(  "type" => "start",
            "name" => "Magazine Page",
            "id" => "mag",
            "icon" => "page-blank"
    ),

    array(  "name" => __("Exclude categories from magazine page?", $shortname),
            "desc" => __("Choose which categories you'd like not to show on your magazine page.", $shortname),
            "id" => $shortname."_mag_categories",
            "std" => "",
            "type" => "category_list"
    ),

    array(
            "type" => "description",
            "desc" => __("<h4>Slideshow Options</h4>", $shortname)
    ),

    array(  "name" => __("Show slideshow?", $shortname),
            "desc" => __("Choose whether or not you want to show the slideshow at the top of the magazine page.", $shortname),
            "option1" => __("Yes, show slideshow.", $shortname),
            "option2" => __("No, hide slideshow.", $shortname),
            "id" => $shortname."_mag_show_slideshow",
            "std" => "false",
            "type" => "true_false_radio"
    ),

    array(  "name" => __("Slideshow feed from where?", $shortname),
            "desc" => __("Choose the slideshow you'd like to pull from. Slideshows are setup <a href='edit-tags.php?taxonomy=slideshows&post_type=slide'>here</a>.", $shortname),
            "id" => $shortname."_mag_slideshow",
            "std" => "all",
            "taxo" => "slideshows",
            "type" => "taxo_dropdown"
    ),

    array(  "name" => __("Slideshow transition", $shortname),
            "desc" => __("Here you can select how you want each slide to transition to the next. The most typical options would be \"fade\" and \"scrollLeft\".", $shortname),
            "id" => $shortname."_mag_slide_transition",
            "std" => "scrollLeft",
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
            "id" => $shortname."_mag_slide_height",
            "std" => "true",
            "type" => "true_false_radio"),

    array(  "name" => __("Slideshow autoplay duration", $shortname),
            "desc" => __("Enter the time you would like in between transitions in seconds. Use '0' to deactivate automatic transitioning", $shortname),
            "id" => $shortname."_mag_slide_speed",
            "std" => "6",
            "type" => "text"),

    array(
            "type" => "description",
            "desc" => __("<h4>Featured Posts Options</h4>", $shortname)
    ),

    array(  "name" => __("Show featured posts?", $shortname),
            "desc" => __("Choose whether or not you want to show the featured posts in the middle of the magazine page.", $shortname),
            "option1" => __("Yes, show featured posts.", $shortname),
            "option2" => __("No, hide featured posts.", $shortname),
            "id" => $shortname."_mag_show_featured",
            "std" => "false",
            "type" => "true_false_radio"
    ),

    array(  "name" => __("Featured posts tag", $shortname),
            "desc" => __("Enter the tag you'd like to assign to posts in order for them to show here.", $shortname),
            "id" => $shortname."_mag_featured_tag",
            "std" => "featured",
            "type" => "text"),

    array(  "name" => __("Pull blog posts or portfolio items?", $shortname),
            "desc" => __("Chose whether you want the featured tag to pull from blog posts or portfolio items.", $shortname),
            "option1" => __("Blog Posts", $shortname),
            "option2" => __("Portfolio Items", $shortname),
            "id" => $shortname."_home_featured_type",
            "std" => "true",
            "type" => "true_false_radio"
    ),

    array(  "type" => "end"),

    //Contact Page
    array(  "type" => "start",
            "name" => "Contact Page",
            "id" => "contact",
            "icon" => "email"
    ),

    //Admin Email
    array(  "id" => $shortname."_email_address",
            "name" => "E-mail address",
            "std" => get_option('admin_email'),
            "desc" => __("Enter the e-mail address where you would like to receive messages from this contact form.", $shortname),
            "type" => "text"),

    //Table Title
    array(  "id" => "form-builder-title",
            "name" => "Form builder",
            "type" => "table-title"),

    //Start Table
    array(  "type" => "start-table"),

            //Row #1
    array(  "type" => "start-row"),

    array(  "id" => $shortname."_field_name_1",
                    "type" => "field-name"),

    array(  "id" => $shortname."_field_input_1",
            "std" => "text-input",
            "type" => "dropdown",
            "data" => array(

                array(
                        "name" => "Text Input",
                        "value" => "text-input"
                ),

                array(
                        "name" => "Text Area",
                        "value" => "textarea"
                )

            )
    ),

    array(  "id" => $shortname."_field_required_1",
            "std" => "required",
            "type" => "dropdown",
            "data" => array(

                    array(
                            "name" => "Required",
                            "value" => "yes"
                    ),

                    array(
                            "name" => "Not Required",
                            "value" => "no"
                    )

                )
            ),

    array(  "id" => $shortname."_field_validation_1",
            "std" => "none",
            "type" => "dropdown",
            "data" => array(

                array(
                        "name" => "None",
                        "value" => "none"
                ),

                array(
                        "name" => "E-mail",
                        "value" => "email"
                ),

                array(
                        "name" => "Website URL",
                        "value" => "url"
                ),

                array(
                        "name" => "Digits",
                        "value" => "digits"
                ),

            )
    ),


    array(  "type" => "end-row"),

            //Row #2
    array(  "type" => "start-row"),

    array(  "id" => $shortname."_field_name_2",
            "type" => "field-name"),

    array(  "id" => $shortname."_field_input_2",
            "std" => "text-input",
            "type" => "dropdown",
            "data" => array(

                array(
                        "name" => "Text Input",
                        "value" => "text-input"
                ),

                array(
                        "name" => "Text Area",
                        "value" => "textarea"
                ),

            )
    ),

    array(  "id" => $shortname."_field_required_2",
            "std" => "required",
            "type" => "dropdown",
            "data" => array(

                array(
                        "name" => "Required",
                        "value" => "yes"
                ),

                array(
                        "name" => "Not Required",
                        "value" => "no"
                ),

            )
    ),

    array(  "id" => $shortname."_field_validation_2",
            "std" => "none",
            "type" => "dropdown",
            "data" => array(

                array(
                        "name" => "None",
                        "value" => "none"
                ),

                array(
                        "name" => "E-mail",
                        "value" => "email"
                ),

                array(
                        "name" => "Website URL",
                        "value" => "url"
                ),

                array(
                        "name" => "Digits",
                        "value" => "digits"
                )

            )
    ),


    array(  "type" => "end-row"),

            //Row #3
    array(  "type" => "start-row"),

    array(  "id" => $shortname."_field_name_3",
            "type" => "field-name"),

    array(  "id" => $shortname."_field_input_3",
            "std" => "text-input",
            "type" => "dropdown",
            "data" => array(

                array(
                        "name" => "Text Input",
                        "value" => "text-input"
                ),

                array(
                        "name" => "Text Area",
                        "value" => "textarea"
                )

            )
    ),

    array(  "id" => $shortname."_field_required_3",
            "std" => "required",
            "type" => "dropdown",
            "data" => array(

                array(
                        "name" => "Required",
                        "value" => "yes"
                ),

                array(
                        "name" => "Not Required",
                        "value" => "no"
                )

            )
    ),

    array(  "id" => $shortname."_field_validation_3",
            "std" => "none",
            "type" => "dropdown",
            "data" => array(

                array(
                        "name" => "None",
                        "value" => "none"
                ),

                array(
                        "name" => "E-mail",
                        "value" => "email"
                ),

                array(
                        "name" => "Website URL",
                        "value" => "url"
                ),

                array(
                        "name" => "Digits",
                        "value" => "digits"
                )

            )
    ),


	array(  "type" => "end-row"),

    //End Table
    array(  "type" => "end-table"),

    array ( "type" => "end"),
    
);

##############################################################
# Information
##############################################################

$info_templates = array(
    "pageTitle" => "Page Templates",
    "menuTitle" => "Page Templates",
    "pageLevel" => "child",
    "pageSlug" => "templates",
    "linkSupport" => "http://themeforest.net/user/themeblvd",
    "linkSite" => "http://themeforest.net/user/themeblvd/portfolio",
    "linkAuthor" => "http://www.jasonbobich.com",
    "linkProfile" => "http://www.themeforest.net/user/themeblvd"
);

##############################################################
# Activate Options Page
##############################################################

$themeblvd_options_templates = new themeblvd_options($info_templates, $shortname, $themename, $options_templates);

?>
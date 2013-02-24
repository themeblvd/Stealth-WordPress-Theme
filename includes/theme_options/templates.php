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
<?php
/**
 *
 * ThemeBlvd Theme Options
 * Build Default Options
 *
 * The purpose of this file is to build an array in order to construct 
 * default values in case theme options have not been saved, or in the
 * event they've been reset. The end result produces variables that
 * can be used within core theme files.
 * 
 */

##############################################################
# Included Options Pages
##############################################################

// (1) $options_general
// (2) $options_templates
// (3) $options_seo
// (4) $options_help

##############################################################
# Build Array
##############################################################

$themeblvd_options = array_merge(
        $options_general,
        $options_templates,
        $options_seo,
        $options_help
);

##############################################################
# Generate option variables
##############################################################

foreach ($themeblvd_options as $value) {

    if( isset($value['id']) ){

        if (get_option( $value['id'] ) === FALSE) {

            if( isset($value['std']) ){
                $$value['id'] = $value['std'];
            }

        } else {

            if( isset($value['id']) ){
                $$value['id'] = get_option( $value['id'] );
            }

        }
    }
}

?>
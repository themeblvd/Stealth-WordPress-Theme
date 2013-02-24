<?php
/**
 *
 * Stealth Shortcodes
 *
 * Slideshows
 *
 * @author  Jason Bobich
 *
 */
 
##############################################################
# Anything Slider
##############################################################

function shortcode_slideshow($atts, $content = null) {

    extract(shortcode_atts(array(
    		'category' => '',
            'effect' => 'fade',
            'speed' => '5',
            'color' => '000000',
            'width' => '640',
            'height' => ''
    ), $atts));

    $output = stealth_slideshow($category, $effect, $speed, $color, $width, $height, $arrows = null);

    return $output;
    
}

add_shortcode('slideshow', 'shortcode_slideshow');

##############################################################
# Nivo Slider
##############################################################

//No Nivo plugin attached to Stealth

/*
function shortcode_nivo($atts, $content = null) {

    extract(shortcode_atts(array(
    		'category' => '',
            'effect' => 'random',
            'speed' => '5',
            'slices' => '15',
            'color' => '000000',
            'width' => '560',
            'height' => '250'
    ), $atts));

    $output = alyeska_nivo($category, $effect, $speed, $slices, $color, $width, $height);

    return $output;
    
}

add_shortcode('nivo', 'shortcode_nivo');
*/

?>
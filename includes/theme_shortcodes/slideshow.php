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
function slideshow_shortcode($atts, $content = null) {

    extract(shortcode_atts(
        array(
            'category' => '',
            'size' => 'small',
            'effect' => 'fade',
            'autoheight' => 'false',
            'speed' => '3'
    ), $atts));

    //Run Slideshow
    $slideshow_options = array (
        'slideshow' => $category,
        'size' => 'slideshow-'.$size,
        'transition' => $effect,
        'height' => $autoheight,
        'speed' => $speed
    );

    $output = '<div class="slideshow-wrapper">';
    $output .= stealth_slideshow($slideshow_options);
    $output .= '</div><!-- .slideshow-wrapper (end) -->';

    return $output;

}

add_shortcode('slideshow', 'slideshow_shortcode');
?>
<?php
/**
 *
 * Stealth Shortcodes
 *
 * HTML Styles
 *
 * @author  Jason Bobich
 *
 */

##############################################################
# Remove automatic formattering
##############################################################

function my_formatter($content) {

    $new_content = '';
    $pattern_full = '{(\[raw\].*?\[/raw\])}is';
    $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
    $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

    foreach ($pieces as $piece) {
        if (preg_match($pattern_contents, $piece, $matches)) {
            $new_content .= $matches[1];
        } else {
            $new_content .= wptexturize(wpautop($piece));
        }
    }

    return $new_content;
}

remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

add_filter('the_content', 'my_formatter', 99);

##############################################################
# Lists
##############################################################

function icon_list_shortcode($atts, $content = null) {

    extract(shortcode_atts(
        array(
            'style' => 'check' //check, crank, delete, doc, plus, star, star2, warning, write
    ), $atts));

    $output = '<div class="icon-list icon-'.$style.'">';
    $output .= do_shortcode($content);
    $output .= '</div><!-- .icon-list (end) -->';

    return $output;

}

add_shortcode('icon_list', 'icon_list_shortcode');

##############################################################
# Frames
##############################################################

function frame_shortcode($atts, $content = null) {

    $output = '<div class="frame">';
    $output .= do_shortcode($content);
    $output .= '</div><!-- .frame (end) -->';

    return $output;

}

add_shortcode('frame', 'frame_shortcode');

function frame_left_shortcode($atts, $content = null) {

    $output = '<div class="frame alignleft">';
    $output .= do_shortcode($content);
    $output .= '</div><!-- .frame (end) -->';

    return $output;

}

add_shortcode('frame_left', 'frame_left_shortcode');

function frame_right_shortcode($atts, $content = null) {

    $output = '<div class="frame alignright">';
    $output .= do_shortcode($content);
    $output .= '</div><!-- .frame (end) -->';

    return $output;

}

add_shortcode('frame_right', 'frame_right_shortcode');

?>
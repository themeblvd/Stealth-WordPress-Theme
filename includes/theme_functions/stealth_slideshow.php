<?php
/**
 *
 * Stealth WordPress Theme
 * Cycle Slideshow
 *
 * This function utilizes the Slide custom post
 * type to create a slideshow with the jQuery
 * Cycle plugin.
 *
 * @author  Jason Bobich
 *
 */

function stealth_slideshow($options) {

    //Innitiate $output
    $output = '';

    //Theme Hints
    global $themeblvd_theme_hints;
    if($themeblvd_theme_hints == 'true'){
        $output .= themeblvd_theme_hints('slideshow');
    }

    $slideshow = $options['slideshow'];
    $size = $options['size'];
    $transition = $options['transition'];
    $height = $options['height'];
    $speed = $options['speed'];
    $arrows = $options['arrows'];

    $id = mt_rand();

    if($speed != '0'){
       $speed = $speed.'000';
    }

    if($slideshow != 'all'){
        $slideshowString = "&slideshows=".$slideshow;
    }
    
    $slideshow_query = new WP_Query('post_type=slide&order=ASC&orderby=menu_order&nopaging=true'.$slideshowString);

    if($slideshow_query->have_posts()) {

        $output .= '<script type="text/javascript">';
        $output .= 'runSlideshow("'.$id.'", "'.$transition.'", "'.$height.'", '.$speed.' );';
        $output .= '</script>';

        $output .= '<div id="'.$id.'">';

        if($arrows == 'true'){
            $output .= '<a href="#" title="Next" class="slide-next">Next</a>';
            $output .= '<a href="#" title="Previous" class="slide-prev">Previous</a>';
        }

        $output .= '<div class="slideshow">';

            while ($slideshow_query->have_posts()) {

                $slideshow_query->the_post();

                $output .= '<div class="slide">';

                global $post;
                $slide_type = get_post_meta($post->ID, 'themeblvd_slide_type', true);

                if($slide_type == 'true') {

                    if( get_post_meta($post->ID, 'themeblvd_slide_link', true) ){
                        $output .= '<a href="'.get_post_meta($post->ID, 'themeblvd_slide_link', true).'" title="'.get_the_title().'" style="display:block;">';
                    }

                    if ( has_post_thumbnail() ) {
                       $output .= get_the_post_thumbnail($post->ID, $size);
                    }

                    if( get_post_meta($post->ID, 'themeblvd_slide_description', true) ){
                        $output .= '<div class="description">';
                            $output .= '<div class="pad">';
                                $output .= get_post_meta($post->ID, 'themeblvd_slide_description', true);
                            $output .= '</div><!-- .pad (end) -->';
                        $output .= '</div><!-- .description (end) -->';
                    }

                    if(get_post_meta($post->ID, 'themeblvd_slide_link', true)){
                        $output .= '</a>';
                    }

                } else {

                    $output .= apply_filters( 'the_content', get_the_content() );

                } // end slide_type

                $output .= '</div><!-- .slide (end) -->';

           } //End loop

        $output .= '</div><!-- .slideshow (end) -->';

        $output .= '<div class="slideshow-nav">';
            $output .= '<div class="slideshow-nav-inner"></div>';
        $output .= '</div><!-- .slideshow-nav(end) -->';

        $output .= '</div><!-- #'.$id.' (end) -->';

    } else {
        $output .= '<p class="warning">';
            $output .= __("There are no slides to display.", "themeblvd");
        $output .= '</p>';
    }

    return $output;

##################################################################
} # end get_stealth_slideshow function
##################################################################
?>
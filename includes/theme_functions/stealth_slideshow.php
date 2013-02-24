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

function stealth_slideshow($category, $effect, $speed, $color, $width, $height, $arrows) {
	
    //Innitiate $output
    $output = '';

    //Create unique ID
	$id = mt_rand();
	
	//Set autoplay duration
	if($speed != '0'){
		$speed .= '000';
	}
	
	//Set description color
	if( !$color ){
	
		$color = '000000';
	
	}
	
	//Set width/height
	if(!$width && !$height){

		$dimensions = "";
	
	} else {
		
		$dimensions = ' style="';
		
		if($width){
			
			$dimensions .= 'width:'.$width.'px;';
			
		}
		
		if($height){
		
			$dimensions .= 'height:'.$height.'px;';
		
		}
		
		$dimensions .= '"';
		
	}
	
	//Set size
	if( isset($width) && $width == '640' ){
		
		$size = 'slideshow-small';
		
	} elseif(isset($width) && $width == '930' ){
	
		$size = 'slideshow-large';
	
	}
	
    if($category){
        $slideshowString = "&slideshows=".$category;
    }
    
    if( isset($slideshowString) ) {
    	
    	$slideshow_query = new WP_Query('post_type=slide&order=ASC&orderby=menu_order&nopaging=true'.$slideshowString);
    	
    } else {
    	
    	$slideshow_query = new WP_Query('post_type=slide&order=ASC&orderby=menu_order&nopaging=true');
    	
    }

    if($slideshow_query->have_posts()) {
        
        $output .= '<script>'."\n";
		$output .= '	jQuery.noConflict()(function($){'."\n";
		$output .= '		$(document).ready(function() {'."\n";
		$output .= '			$("#'.$id.' .slideshow").cycle({'."\n";
		$output .= '				fx: "'.$effect.'",'."\n";
		$output .= '				timeout: '.$speed.','."\n";
		$output .= '				pager: "#'.$id.' .slideshow-nav-inner",'."\n";
		$output .= '				next: ".slide-next",'."\n";
		$output .= '				prev: ".slide-prev",'."\n";
		$output .= '				pagerAnchorBuilder: paginate,'."\n";
		$output .= '				speed: "2000",'."\n";
		$output .= '				pause: 1,'."\n";
		$output .= '				easing: "easeInOutQuint"'."\n";
		$output .= '			});'."\n";
		$output .= '		});'."\n";
		$output .= '	});'."\n";
		$output .= '</script>'."\n";

        $output .= '<div id="'.$id.'">';

        if( isset($arrows) && $arrows == 'true'){
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
                    	if( isset($size) ){
                    		$output .= get_the_post_thumbnail($post->ID, $size);
                    	} else {
                    		$output .= get_the_post_thumbnail($post->ID);
                    	}
                    }

                    if( get_post_meta($post->ID, 'themeblvd_slide_description', true) ){
                    
                    	$output .= '<div class="description" style="background-color: #'.$color.';">';
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
} # end stealth_slideshow function
##################################################################
?>
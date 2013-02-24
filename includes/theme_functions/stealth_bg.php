<?php
/**
 *
 * Stealth WordPress Theme
 * Background Display
 *
 * This function displays the necessary CSS background
 * properties selected from the theme options panel
 * for either the header or footer.
 *
 * @author  Jason Bobich
 *
 */

function stealth_bg($selector, $color, $texture) {

    //$texture will be array with image, bg position, and bg repeat atts
	
	$output = $selector;
	$output .= ' { background: ';
	$output .= '#'.$color;
	
	if( is_array($texture) ){
		$output .= ' url('.get_template_directory_uri().'/layout/images/textures/'.$texture['image'].') ';
		$output .= $texture['position'].' ';
		$output .= $texture['repeat'];
	}
	
	$output .= '; }';
	
	return $output;
	

##################################################################
} # end stealth_bg function
##################################################################
?>
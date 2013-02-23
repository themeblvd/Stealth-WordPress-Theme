<?php
/**
 *
 * ThemeBlvd WordPress Theme Framework
 * Embed Audio File
 *
 * This function embed a audio file with
 * our custom video player.
 *
 * @author  Jason Bobich
 *
 */

function themeblvd_audio($file, $autostart, $color){

    $template_url = get_bloginfo('template_url');
    $id = mt_rand();

    //Auto Start
    if($autostart == 'true'){
        $autostart = 'On';
    } else {
        $autostart = 'Off';
    }

    //JS
    $output = '<script type="text/javascript">'."\n";
        $output .= 'var flashvars = {};'."\n";
        $output .= 'flashvars.player_id="123456789";'."\n";
        $output .= 'flashvars.snd_name="'.$file.'";'."\n";
        $output .= 'flashvars.controls_color="0x888888";'."\n";
	$output .= 'flashvars.controls_color_over="0xffffff";'."\n";
	$output .= 'flashvars.player_color="0x'.$color.'";'."\n";
        $output .= 'flashvars.auto_play_on_start="'.$autostart.'";'."\n";
        $output .= 'var params = {};'."\n";
        $output .= 'var attributes = {};'."\n";
        $output .= 'attributes.id = "123456789";'."\n";
        $output .= 'attributes.wmode="transparent";'."\n";
        $output .= 'attributes.quality="high";'."\n";
        $output .= 'swfobject.embedSWF("'.$template_url.'/layout/flash/audio.swf", "'.$id.'", "290", "30", "9.0.0", false, flashvars, params, attributes);'."\n";
    $output .= '</script>'."\n";


    //HTML
    $output .= '<div id="'.$id.'">'."\n";
        $output .= '<a href="http://www.adobe.com/go/getflashplayer">'."\n";
            $output .= '<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />'."\n";
        $output .= '</a>'."\n";
    $output .= '</div>';

    return $output;

}
?>
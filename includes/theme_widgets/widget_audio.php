<?php

#################################################################
# Audio Widget
#################################################################

class Themeblvd_Audio extends WP_Widget {

    function Themeblvd_Audio() {
        $widget_ops = array('classname' => 'widget_audio', 'description' => 'Quickly embed an audio MP3 file.' );
        $this->WP_Widget('audio_widget', 'ThemeBlvd MP3 Audio', $widget_ops);
    }

    //How widget shows on front end
    function widget($args, $instance) {

        extract($args, EXTR_SKIP);

        $template_url = get_bloginfo('template_url');
        $id = mt_rand();

        echo $before_widget;

        if(isset( $instance['title']) ) {
            echo $before_title . $instance['title'] . $after_title;
        }

        //Audio url
        if( isset($instance['url']) ){
            $audio_url = $instance['url'];
        } else {
            _e("You forgot to enter a URL to your mp3 file.", "themeblvd");
        }

        //Player color
        if( isset($instance['color']) ){
            $color = $instance['color'];
        } else {
            $color = "000000";
        }

        //Show audio
        $mp3 = strpos($audio_url, ".mp3");

        if($mp3 !== false){

            echo '<div class="frame">';
                echo themeblvd_audio($audio_url, 'false', $color);
            echo '</div>';
            
        } else {

            _e("The URL you entered is not a .mp3 file.", "themeblvd");

        }

        if( isset($instance['content']) ){
            echo do_shortcode( $instance['content'] );
        }

        echo $after_widget;

    }

    //Save admin settings for widget
    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);
        $instance['url'] = strip_tags($new_instance['url']);
        $instance['color'] = strip_tags($new_instance['color']);
        $instance['content'] = $new_instance['content'];

        return $instance;
    }

    //How widget shows in WP admin
    function form($instance) {
        $defaults = array( 'title' => '', 'url' => '', 'color' => '000000');
        $instance = wp_parse_args( (array) $instance, $defaults );

        ?>

        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e("Title:", "themeblvd"); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php if( isset($instance['title']) ) echo $instance['title']; ?>" /></label></p>

        <p><label for="<?php echo $this->get_field_id('url'); ?>"><?php _e("Full URL to .mp3 file:", "themeblvd"); ?> <input class="widefat" id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php if( isset($instance['url']) ) echo $instance['url']; ?>" /></label></p>
        <p style="font-size:9px"><?php _e("Example URL Format:", "themeblvd"); ?><br />
        http://yoursite.com/uploads/2010/10/song.mp3</p>

        <p><label for="<?php echo $this->get_field_id('color'); ?>"><?php _e("Color:", "themeblvd"); ?> <input class="widefat" id="<?php echo $this->get_field_id('color'); ?>" name="<?php echo $this->get_field_name('color'); ?>" type="text" value="<?php if( isset($instance['color']) ) echo $instance['color']; ?>" /></label></p>

        <p><label for="<?php echo $this->get_field_id('content'); ?>"><?php _e("Content Below Audio:", "themeblvd"); ?> <textarea class="widefat" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>"><?php if( isset($instance['content']) ) echo $instance['content']; ?></textarea></label></p>

        <?php
    }
}
register_widget('Themeblvd_Audio');

?>
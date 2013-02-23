<?php
/**
 *
 * ThemeBlvd WordPress Theme Framework
 * Theme Options Page
 *
 * This class constructs each individual options page
 * included with the current theme.
 *
 * @author  Jason Bobich
 *
 */

class themeblvd_options {

    var $info;          //Information for specific options page
    var $shortname;     //Short name for theme being used
    var $themename;     //Name of theme being used
    var $options;       //Options array for individual options page

    //Constructor
    function themeblvd_options($info, $shortname, $themename, $options) {

        $this->info = $info;
        $this->shortname = $shortname;
        $this->themename = $themename;
        $this->options = $options;

        //Run everything and finalize options page
        add_action('admin_menu', array(&$this, 'add_admin_menu'));

    }

    function add_admin_menu() {

        $pageTitle = $this->info['pageTitle'];
        $menuTitle = $this->info['menuTitle'];
        $pageLevel = $this->info['pageLevel'];
        $pageSlug = $this->info['pageSlug'];
        $themename = $this->themename;
        $shortname = $this->shortname;

        if($pageLevel == 'parent'){

            //Add parent options page
            if( function_exists('add_object_page') ){
                add_object_page( $pageTitle, $themename, "administrator", $shortname, array(&$this, 'admin_page'), "");
            } else {
                add_menu_page( $pageTitle, $themename, "administrator", $shortname, array(&$this, 'admin_page'), "");
            }

            //Add first subpage linked to parent
            add_submenu_page( $shortname, $pageTitle, $menuTitle, "administrator", $shortname, array(&$this, 'admin_page') );

        } else {

            //Add submenu optiions page
            add_submenu_page( $shortname, $pageTitle, $menuTitle, "administrator", $shortname."-".$pageSlug, array(&$this, 'admin_page') );

        }

    }

    function admin_page() {

        $shortname = $this->shortname;
        $themename = $this->themename;
        $options = $this->options;
        $pageTitle = $this->info['pageTitle'];
        $pageLevel = $this->info['pageLevel'];
        $linkSupport = $this->info['linkSupport'];
        $linkSite = $this->info['linkSite'];
        $linkAuthor = $this->info['linkAuthor'];
        $linkProfile = $this->info['linkProfile'];

        if ( isset($_REQUEST['action']) && 'Save Changes' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                
                if( isset($value['id']) && isset($value['std']) ) {
                    if($value['std'] != 'start'){
                        update_option( $value['id'], $_REQUEST[ $value['id'] ] );
                    }
                }
                
            }

            foreach ($options as $value) {

                if( isset($value['id']) ) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) {
                        update_option( $value['id'], $_REQUEST[ $value['id'] ] );
                    } else {
                        delete_option( $value['id'] );
                    }
                }
            }
            
            //Fade in and fade out message
            echo '<script type="text/javascript">';
            echo "jQuery.noConflict()(function(){";
            echo "jQuery(document).ready(function(){";
            echo "jQuery('#themeblvd-options .updated').themeblvdUpdate();";
            echo "});";
            echo "});";
            echo "</script>";

            //header("Location: admin.php?page=$pageSlug&saved=true");
            //die;

        } else if( isset($_REQUEST['action']) && 'Reset Options' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                if( isset($value['id']) ){
                   delete_option( $value['id'] ); 
                } 
            }

            //Fade in and fade out message
            echo '<script type="text/javascript">';
            echo "jQuery.noConflict()(function(){";
            echo "jQuery(document).ready(function(){";
            echo "jQuery('#themeblvd-options .error').themeblvdUpdate();";
            echo "});";
            echo "});";
            echo "</script>";

            //header("Location: admin.php?page=$pageSlug&reset=true");
            //die;

        }
        
        echo '<div class="wrap">';
        echo '<div id="themeblvd-options">';
        
        //Saved message
        echo '<div id="message" class="updated fade themeblvd-save">';
        echo '<p><strong>'.$themename.' settings saved.</strong></p>';
        echo '</div>';

        //Reset message
        echo '<div id="message" class="error fade themeblvd-save">';
        echo '<p><strong>'.$themename.' settings reset.</strong></p>';
        echo '</div>';

        //SEO Warning
        if($this->info['pageSlug'] == 'seo') {

            if( class_exists('All_in_One_SEO_Pack') || class_exists('Headspace_Plugin')) {
                echo '<div class="themeblvd-warning">';
                _e('A third-party SEO plugin has been detected which could cause problems with this theme\'s built in SEO plugin. It is advised that you disable this theme\'s SEO plugin or your third-party SEO plugin.', $shortname);
                echo '</div><!-- .themeblvd-warning (end) -->';
            }
            
            if( get_option('blog_public') == 0 ) {
                echo '<div class="themeblvd-warning">';
                _e("Your site is currently set to Private. SEO is disabled. You can change this setting <a href='". admin_url() . "options-privacy.php'>here</a>.", $shortname);
                echo '</div><!-- .themeblvd-warning (end) -->';
            }

        }

        echo '<div class="themeblvd-options-header">';

        echo '<div id="icon-themes" class="icon32"><br /></div>';
        echo '<h2>'.$themename.' - '.$pageTitle.'</h2>';

        echo '<ul>';
        echo '<li><a href="'.$linkSupport.'" title="Support" target="_blank">Support</a>';
        echo '<li><a href="'.$linkAuthor.'" title="Author\'s blog" target="_blank">Author\'s Blog</a>';
        echo '<li><a href="'.$linkProfile.'" title="Author\'s Profile" target="_blank">Author\'s Profile</a>';
        echo '</ul>';

        echo '<a href="'.$linkSite.'" title="ThemeBlvd" class="logo" target="_blank">ThemeBlvd</a>';

        echo '</div><!-- .themeblvd-options-header (end) -->';

        echo '<div class="themeblvd-options-main">';

        echo '<form method="post">';

        //Build panel menu
        echo '<div class="themeblvd-menu">';
        echo '<ul>';

        foreach ($options as $value) {

            switch ( $value['type'] ) {

                ##############################################################
                # Menu Item
                ##############################################################

                case 'start' :

                    $icon = $value['icon'];

                    //Available icon classes
                    
                    //activity-monitor
                    //add
                    //address
                    //arrow-down
                    //arrow-left
                    //arrow-right
                    //arrow-up
                    //author
                    //book
                    //camera
                    //cart
                    //chart
                    //clock
                    //comment
                    //database
                    //decription
                    //email
                    //error
                    //folder
                    //hammer
                    //heart
                    //help
                    //home
                    //images
                    //info
                    //key
                    //lightbulb
                    //newspaper
                    //page-blank
                    //page-table
                    //page-text
                    //pencil
                    //rss
                    //save
                    //screen-off
                    //screen-on
                    //screwdriver
                    //search-mag
                    //security
                    //star
                    //title
                    //tools
                    //user
                    //video
                    //warning
                    //web-layout
                    //window-app-blank
                    //window-app

                    echo '<li>';
                    echo '<a href="#'.$value['id'].'" title="'.$value['name'].'" class="'.$icon.'">';
                    echo $value['name'];
                    echo '</a>';
                    echo '</li>';

                    break;

            }
        }

        echo '</ul>';
        echo '</div><!-- .themblvd-menu (end) -->';

        //Build panels
        foreach ($options as $value) {

            switch ( $value['type'] ) {

                ##############################################################
                # Start Panel
                ##############################################################

                case 'start' :

                    echo '<div id="'.$value['id'].'" class="themeblvd-tab">';
                    echo '<div class="pad">';
                    echo '<h3>'.$value['name'].'</h3>';

                    echo '<span class="submit">';
                    echo '<input name="action" type="submit" value="Save Changes" />';
                    echo '</span>';

                    break;

                ##############################################################
                # End Panel
                ##############################################################

                case 'end' :

                    echo '</div><!-- .pad (end) -->';
                    echo '</div><!-- #';
                    if( isset($value['id']) ){
                        echo $value['id'];
                    }
                    echo ', themeblvd-tab (end) -->';

                    break;

                ##############################################################
                # Description Block
                ##############################################################

                case 'description' :
                    if( isset($value['id']) ){
                        $id = $value['id'];
                    }

                    echo '<div class="themeblvd-entry">';

                    echo '<div class="themeblvd-description-block">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description-block (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # HTML Block
                ##############################################################

                case 'html-block' :

                    $id = $value['id'];

                    echo '<div class="themeblvd-entry">';
                    echo $value['desc'];

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Text Field
                ##############################################################

                case 'text' :

                    $id = $value['id'];

                    if ( get_option( $value['id'] ) != "") {
                        $currentValue = htmlspecialchars(stripslashes(get_option( $value['id'] )));
                    } else {
                        if( isset($value['std']) ){
                            $currentValue = htmlspecialchars(stripslashes($value['std']));
                        }
                    }

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';
                    echo "<input name=\"$id\" type=\"text\" value=\"$currentValue\" class=\"themeblvd-input\" />";
                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Text Area
                ##############################################################

                case 'textarea' :

                    $id = $value['id'];

                    if ( get_option( $value['id'] ) != "") {
                        $currentValue = htmlspecialchars(stripslashes(get_option( $value['id'] )));
                    } else {
                        if( isset($value['std']) ){
                            $currentValue = htmlspecialchars(stripslashes($value['std']));
                        }
                    }

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';
                    echo "<textarea name='$id' cols='' rows='' class='themeblvd-textarea'>$currentValue</textarea>";
                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Select box
                ##############################################################

                case 'select' :

                    $id = $value['id'];
                    $drop_options = $value['data'];
                    $final_value = get_option( $id );
                    if(!$final_value) {
                        $final_value = $value['std'];
                    }

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';

                    //create drop down box
                    echo '<select name="' . $value['id'] . '">';
                    foreach($drop_options as $key => $entry) {

                        if($final_value == $entry['value']) {
                            $selected = " selected='selected'";
                        } else {
                            $selected = "";
                        }

                        echo "<option$selected value='". $entry['value'] ."'>" . $entry['name'] . "</option>";

                    }


                    echo '</select>';

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Radio Set
                ##############################################################

                case 'radio' :

                    $id = $value['id'];
                    $radio_options = $value['data'];
                    $final_value = get_option( $id );

                    if(!$final_value) {
                        $final_value = $value['std'];
                    }

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';

                    //create radio set
                    foreach($radio_options as $key => $entry) {

                        if($final_value == $entry['value']) {
                            $checked = " checked";
                        } else {
                            $checked = "";
                        }
                        
                        echo '<p><input class="themeblvd-radio" type="radio" name="'.$id.'" value="'.$entry['value'].'"'.$checked.'>';
                        echo $entry['name'].'</p>';

                    }

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Checkbox (group of checkboxes)
                ##############################################################

                case 'checkbox' :

                    $id = $value['id'];
                    $checkboxes = $value['data'];
                    $finalValue = get_option( $id );
                    if(!$finalValue) {
                        $finalValue = $value['std'];
                    }

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';

                    //create drop down box
                    foreach($checkboxes as $key => $entry) {

                        $newValue = $entry['value'];
                        $newName = $entry['name'];
                        $checked = '';

                        if( in_array($newValue, $finalValue) ) {
                           $checked = " checked='checked'";
                        }

                        echo "<p><input type='checkbox' name='".$id."[]' value='$newValue' class='themeblvd-checkbox'$checked />$newName</p>";

                    }

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Radio Button - True or False
                ##############################################################

                case 'true_false_radio':

                    $id = $value['id'];

                    if ( get_option( $value['id'] ) != "") {
                        $currentValue = get_option( $id );
                    } else {
                        $currentValue = $value['std'];
                    }

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';

                    if($currentValue == 'true') {

                        echo '<p><input class="themeblvd-radio" type="radio" name="'.$id.'" value="true" checked> ';
                        echo $value['option1'].'</p>';

                        echo '<p><input class="themeblvd-radio" type="radio" name="'.$id.'" value="false"> ';
                        echo $value['option2'].'</p>';

                    } else {

                        echo '<p><input class="themeblvd-radio" type="radio" name="'.$id.'" value="true"> ';
                        echo $value['option1'].'</p>';

                        echo '<p><input class="themeblvd-radio" type="radio" name="'.$id.'" value="false"  checked> ';
                        echo $value['option2'].'</p>';

                    }

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Color Picker
                ##############################################################

                case 'color_picker' :

                    $id = $value['id'];

                    if ( get_option( $id ) != "") {
                        $currentValue = get_option( $id );
                    } else {
                        $currentValue = $value['std'];
                    }

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    //Color Picker JS
                    echo '<script type="text/javascript">';
                    echo "(function($){";
                    echo "var initLayout = function() {";
                    echo "var hash = window.location.hash.replace('#', '');";
                    echo "$('#$id').ColorPicker({";
                    echo "onSubmit: function(hsb, hex, rgb, el) {";
                    echo "$(el).val(hex);";
                    echo "$(el).ColorPickerHide();";
                    echo "},";
                    echo "onBeforeShow: function () {";
                    echo "$(this).ColorPickerSetColor(this.value);";
                    echo "}";
                    echo "})";
                    echo ".bind('keyup', function(){";
                    echo "$(this).ColorPickerSetColor(this.value);";
                    echo "});";
                    echo "};";
                    echo "EYE.register(initLayout, 'init');";
                    echo "})(jQuery)";
                    echo '</script>';

                    echo '<div class="themeblvd-field">';
                    echo "<input name='$id' id='$id' type='text' value='$currentValue' class='themeblvd-input' />";

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Upload File
                ##############################################################

                case 'upload' :

                    $id = $value['id'];

                    if(get_option($id)) {
                        $hasFile =  ' has-file';
                    } else {
                        $hasFile = '';
                    }

                    if ( get_option($id) != "") {
                        $currentValue = ( get_option($id) );
                    } else {
                        if( isset($value['std']) ){
                            $currentValue = $value['std'];
                        }
                    }

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';


                    echo "<input type='text' name='$id' id='$id' value='$currentValue' class='themeblvd-input upload$hasFile' />";
                    echo "<input id='upload_$id' class='upload_button' type='button' value='Upload' />";
                    echo '<div class="clear"></div>';
                    echo "<div class='themeblvd-file' id='".$id."_image'>";

                    //Show uploaded image if exists
                    if ( get_option($id) ) {

                        $image = preg_match( '/(^.*\.jpg|jpeg|png|gif|ico*)/i', get_option($id) );

                        if ( $image ) {

                            $size = getimagesize($currentValue);
                            $width = $size[0];

                            //Check if the image is too wide for our display area or not
                            if($width >= 370){
                                echo '<img src="'.$currentValue.'" alt="" width="370" />';
                                echo '<p><em>*This image has been scaled to fit this window, however the actual image size has not been effected.</em></p>';
                            } else {
                                echo '<img src="'.$currentValue.'" alt="" />';
                            }

                        } else {

                            $parts = explode( "/", get_option($id) );
                            for( $i = 0; $i < sizeof($parts); ++$i ) {
                                $title = $parts[$i];
                            }
                            echo '<div class="no_image"><a href="'.$currentValue.'">'.$title.'</a></div>';
                        }

                        //Removal Link
                        $removeId = $id."_image";
                        echo "<a href='#$removeId' title='Remove' class='themeblvd-file-remove'>";
                        _e("Remove Image", $shortname);
                        echo '</a>';

                    }

                    echo '</div><!-- .themeblvd-file (end) -->';

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Checkbox list of Pages
                ##############################################################

                case 'page_list' :

                    $id = $value['id'];
                    $current_selected_pages = get_option( $value['id'] );
                    $entries = get_pages('title_li=&sort_column=menu_order');

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';

                    foreach ($entries as $key => $entry) {

                        $id = $entry->ID;
                        $title = $entry->post_title;

                        $checked = '';

                        //Find out which checkboxes were already selected
                        if($current_selected_pages) {

                            foreach ($current_selected_pages as $entry2)
                            {

                                if($entry2 == $id) {
                                    $checked = ' checked="checked" ';
                                }

                            }

                        }

                        echo '<p><input class="themeblvd-checkbox" type="checkbox" name="' . $value['id'] . '[]" value="' . $id . '"' . $checked . '> ' . $title . '</p>';

                    }

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }
                    
                    echo '</div><!-- .themeblvd-entry (end) -->';


                    break;

                ##############################################################
                # Checkbox list of Blog Categories
                ##############################################################

                case 'category_list' :

                    $id = $value['id'];
                    $current_selected_pages = get_option( $value['id'] );
                    $entries = get_categories('title_li=&orderby=name&hide_empty=0');

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';

                    foreach ($entries as $key => $entry) {

                        $id = $entry->term_id;
                        $title = $entry->name;

                        $checked = '';

                        //Find out which checkboxes were already selected
                        if($current_selected_pages) {

                            foreach ($current_selected_pages as $entry2)
                            {

                                if($entry2 == $id) {
                                    $checked = ' checked="checked" ';
                                }

                            }

                        }

                        echo '<p><input class="themeblvd-checkbox" type="checkbox" name="' . $value['id'] . '[]" value="' . $id . '"' . $checked . '> ' . $title . '</p>';

                    }

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';


                    break;

                ##############################################################
                # Dropdown of Pages
                ##############################################################

                case 'page_dropdown' :

                    $id = $value['id'];

                    if ( get_option($id) != "") {
                        $currentValue = ( get_option($id) );
                    } else {
                        $currentValue = $value['std'];
                    }
                    $entries = get_pages('title_li=&sort_column=menu_order');

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';

                    echo "<select name='$id' id='$id' value='$currentValue'>";

                        foreach ($entries as $key => $entry) {

                            $id = $entry->ID;
                            $title = $entry->post_title;

                            if ( get_option( $value['id'] ) == $id) {
                                $selected = "selected='selected'";
                            } else {
                                $selected = "";
                            }

                            echo "<option $selected value='". $id."'>" . $title . "</option>";

                        }

                    echo "</select>";

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Dropdown of Blog Categories
                ##############################################################

                case 'category_dropdown' :

                    $id = $value['id'];

                    if ( get_option($id) != "") {
                        $currentValue = ( get_option($id) );
                    } else {
                        $currentValue = $value['std'];
                    }
                    $select = 'All Categories';
                    $entries = get_categories('title_li=&orderby=name&hide_empty=0');

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';

                    echo "<select name='$id' id='$id' value='$currentValue'>";

                        echo '<option value="all">' . $select .'</option>';

                        foreach ($entries as $key => $entry) {

                            $id = $entry->term_id;
                            $title = $entry->name;

                            if ( get_option( $value['id'] ) == $id) {
                                $selected = "selected='selected'";
                            } else {
                                $selected = "";
                            }

                            echo "<option $selected value='". $id."'>" . $title . "</option>";
                            
                        }

                    echo "</select>";

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Dropdown of Taxonomy Terms
                ##############################################################

                case 'taxo_dropdown' :

                    $id = $value['id'];

                    if ( get_option($id) != "") {
                        $currentValue = ( get_option($id) );
                    } else {
                        $currentValue = $value['std'];
                    }
                    $select = 'All';
                    $entries = get_terms($value['taxo']);

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';

                    echo "<select name='$id' id='$id' value='$currentValue'>";

                        echo '<option value="all">'.$select.'</option>';

                        foreach ($entries as $key => $entry) {

                            $id = $entry->slug;
                            $title = $entry->name;

                            if ( get_option( $value['id'] ) == $id) {
                                $selected = "selected='selected'";
                            } else {
                                $selected = "";
                            }

                            echo "<option $selected value='". $id."'>".$title."</option>";

                        }

                    echo "</select>";

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Dropdown of Widget Areas
                ##############################################################

                case 'widgetarea_dropdown' :

                    $id = $value['id'];

                    if ( get_option($id) != "") {
                        $currentValue = ( get_option($id) );
                    } else {
                        $currentValue = $value['std'];
                    }

                    global $wp_registered_sidebars;
                    $entries = $wp_registered_sidebars;

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';
                    
                    echo "<select name='$id' id='$id' value='$currentValue'>";

                        foreach ($entries as $key => $entry) {

                            $id = $entry['id'];
                            $title = $entry['name'];

                            if ( get_option( $value['id'] ) == $id) {
                                $selected = "selected='selected'";
                            } else {
                                $selected = "";
                            }

                            echo "<option $selected value='". $id."'>".$title."</option>";

                        }

                    echo "</select>";
                    
                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Vimeo Video display
                ##############################################################

                case 'vimeo' :

                    $video_url = $value['video-url'];

                    $video_id = str_replace( 'http://vimeo.com/', '', $video_url );

                    echo '<div class="themeblvd-entry">';

                    echo '<h4>'.$value['name'].'</h4>';

                    echo '<div class="themeblvd-field">';

                    //Display video
                    echo '<iframe src="http://player.vimeo.com/video/'.$video_id.'?title=0&amp;byline=0&amp;portrait=0" width="370" height="231" frameborder="0"></iframe>';

                    echo '</div><!-- .themeblvd-field (end) -->';

                    echo '<div class="themeblvd-description">';
                    echo $value['desc'];
                    echo '<p>Video Link: <a href="'.$video_url.'" target="_blank">'.$value['name'].'</a></p>';
                    echo '</div><!-- .themeblvd-description (end) -->';

                    if( isset($value['more-info']) ){
                        $this->more_info( $id, $value['more-info'] );
                    }

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;
                
                ##############################################################
                # Contact Form - (1) Start the Table
                ##############################################################

                case 'start-table' :

                    echo '<table width="98%" class="contact-form-builder" cellpadding="0" cellspacing="0">';

                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Field Name</th>';
                    echo '<th>Input Type</th>';
                    echo '<th>Required?</th>';
                    echo '<th>Validation</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tr>';
                    echo '<td class="pre-set">Name</td>';
                    echo '<td class="pre-set">Text Input</td>';
                    echo '<td class="pre-set">Required</td>';
                    echo '<td class="pre-set">None</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td class="pre-set">E-mail</td>';
                    echo '<td class="pre-set">Text Input</td>';
                    echo '<td class="pre-set">Required</td>';
                    echo '<td class="pre-set">E-mail</td>';
                    echo '</tr>';

                    break;

                ##############################################################
                # Contact Form - (2) Start a Table Row
                ##############################################################

                case 'start-row' :

                    echo '<tr>';

                    break;

                ##############################################################
                # Contact Form - (3) End a Table Row
                ##############################################################

                case 'end-row' :

                    echo '</tr>';

                    break;

                ##############################################################
                # Contact Form - (4) End the Table
                ##############################################################

                case 'end-table' :

                    echo '<tr>';
                    echo '<td class="pre-set">Message</td>';
                    echo '<td class="pre-set">Text Area</td>';
                    echo '<td class="pre-set">Required</td>';
                    echo '<td class="pre-set">None</td>';
                    echo '</tr>';
                    echo '</table>';

                    //Static description replacement
                    echo '<p>';
                    _e("You can create up to three additional fields to go on your contact form before the user types their message. If you want your conact form to only include the typical Name, Email, and Message, simply leave the extra name fields blank. <a href=\"#contact-info\" title=\"Learn More\" class=\"jaybich-open\">Learn More</a>", $shortname);

                    //Slidedown helpbox
                    echo '<div id="contact-info" class="help-box">';

                    echo '<p>';
                    _e("The form builder allows you to have more control over your Contact Page without you having to edit any code. Basically, by default, your contact form will show fields for the Name, E-mail, and Message. These three fields are not editable because they are needed for the contact form to work properly. You can add up to three additional fields to your contact form. These fields will show up after the E-mail field, but before the Message field.", $shortname);
                    echo '</p>';
                    echo '<ul>';
                    echo '<li>';
                    echo '<strong>Field Name</strong><br />';
                    echo _e("This is the name of the field that will show up on your contact form. It will show exactly how you write it here. So, make sure to format it exactly how you'd like your users to see it.", $shortname);
                    echo '</li>';
                    echo '<li>';
                    echo '<strong>Input Type</strong><br />';
                    _e("This is the type of field you want to show. A \"Text Input\" is a standard single-line input field, and a \"Text Area\" would allow your user to type out an entire paragraph (similar to the Message field).", $shortname);
                    echo '</li>';
                    echo '<li>';
                    echo '<strong>Required?</strong><br />';
                    _e("If you make a field required, it means that the user cannot submit the form with that field empty.", $shortname);
                    echo '</li>';
                    echo '<li>';
                    echo '<strong>Validation</strong><br />';
                    _e("If you're asking the user to enter something other than a standard piece of text, you may want to select an appropriate validation method.", $shortname);
                    echo '<ul>';
                    echo '<li>None: ';
                    _e("Anything entered into the field is accepted.", 'flipblog');
                    echo '</li>';
                    echo '<li>Email: ';
                    _e("Validates that it's an email address.", $shortname);
                    echo '</li>';
                    echo '<li>Website URL: ';
                    _e("Validates it's a proper website address.", $shortname);
                    echo '</li>';
                    echo '<li>Digits: ';
                    _e("Validates that there are only numbers (ex: a phone number).", $shortname);
                    echo '</li>';
                    echo '</ul>';
                    echo '</li>';
                    echo '</ul>';

                    echo '<p>';
                    _e("If you require further customization of your form beyond the form builder, you can always manually add fields in the HTML code of template_contact.php. You DO NOT need to edit any PHP code. Any fields you manually add to the HTML form will automatically be included in the e-mail sent out.", $shortname);
                    echo '</p>';
                    echo '<p><a href="#contact-info" class="jaybich-close">Hide</a></p>';

                    echo '</div>';

                    echo '</div><!-- .themeblvd-entry (end) -->';

                    break;

                ##############################################################
                # Contact Form - (5) Table Title
                ##############################################################

                case 'table-title' :

                    echo '<div class="themeblvd-entry">';
                    echo '<h4>'.$value['name'].'</h4>';

                    break;

                ##############################################################
                # Contact Form - (6) Field Name Option
                ##############################################################

                case 'field-name' :

                    $final_value = get_option( $value['id'] );

                    if( !$final_value && isset($value['std']) ) {
                        $final_value = $value['std'];
                    }

                    echo "<td>";
                    echo '<input type="text" name="'.$value['id'].'" value="'. $final_value .'" class="jaybich-input" />';
                    echo "</td>";

                    break;

                ##############################################################
                # Contact Form - (7) Dropdown
                ##############################################################

                case 'dropdown' :

                    $drop_options = $value['data'];
                    $final_value = get_option( $value['id'] );

                    if(!$final_value) {
                            $final_value = $value['std'];
                    }

                    echo '<td>';
                    echo '<select name="' . $value['id'] . '">';

                    //create drop down box
                    foreach($drop_options as $key => $entry) {

                        if ($final_value == $entry['value']) {
                            $selected = " selected='selected'";
                        } else {
                            $selected = "";
                        }

                        echo "<option$selected value='". $entry['value'] ."'>" . $entry['name'] . "</option>";
                    }

                    echo '</select>';
                    echo '</td>';

                    break;

            }
        }

        echo '<div class="clear"></div>';

        echo '</div><!-- #themeblvd-options-main (end) -->';

        //Save Changes
        echo '<div class="themeblvd-footer">';
        echo '<span class="submit">';
        echo '<input name="action" type="submit" value="Save Changes" />';
        echo '</span>';

        //Reset options
        echo '<span class="submit reset">';
        echo '<input name="action" type="submit" value="Reset Options" />';
        echo '</span>';
        echo '<div class="clear"></div>';
        
        echo '</form>';
        echo '</div><!-- .themeblvd-footer (end) -->';

        echo '</div><!-- #themeblvd-options (end) -->';
        echo '</div><!-- .wrap (end) -->';

    }

    function more_info($id, $text){

        echo '<div class="clear"></div>';
        echo "<div id='$id' class='help-box'>";
        echo $text;
        echo "<p><a href='#$id' class='jaybich-close'>";
        _e("Hide", $shortname);
        echo '</a></p>';
        echo '</div><!-- .help-box (end) -->';

    }
              
##################################################################
} # end themeblvd_options class
##################################################################
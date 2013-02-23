<?php
/**
 *
 * ThemeBlvd WordPress Theme Framework
 * Standard Columns
 *
 * This function inserts a class, which
 * will determine the width of child
 * elements based on a single integer.
 *
 * @author  Jason Bobich
 *
 */

function themeblvd_columns($num){
    
    //Build CSS class
    if($num == 2){
        $class = 'two-columns';
    } elseif($num == 3){
        $class = 'three-columns';
    } elseif($num == 4){
        $class = 'four-columns';
    } elseif($num == 5){
        $class = 'five-columns';
    } else {
        $class = 'full-width';
    }

    return $class;

}
?>
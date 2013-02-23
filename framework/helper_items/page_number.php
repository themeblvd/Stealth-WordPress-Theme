<?php 
// Get the page number
function get_page_number() {
    if (get_query_var('paged')) {
        print ' | ' . __( 'Page ' , 'flipblog') . get_query_var('paged');
    }
} // end get_page_number
?>
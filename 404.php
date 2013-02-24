<?php get_header(); ?>

<div id="main">
		
    <div class="content">
		
		<?php themeblvd_breadcrumbs(); ?>
		
        <div id="full-width-content">
			
            <h1><?php _e("Page Not Found", "themeblvd"); ?></h1>

            <div class="content">

                <p class="warning">
                    <?php _e("The page you requested does not exist.", "themeblvd"); ?>
                </p>

            </div><!-- .content (end) -->
            
        </div><!-- #content (end) -->

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
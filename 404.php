<?php get_header(); ?>

<div id="main">
		
    <div class="content">

        <?php if($themeblvd_breadcrumbs == 'true') : ?>
            <?php if($themeblvd_theme_hints == 'true') : ?>
                <?php echo themeblvd_theme_hints('breadcrumbs'); ?>
            <?php endif; ?>
            <div id="breadcrumbs">
                <?php themeblvd_breadcrumbs(); ?>
            </div><!-- #breadcrumbs (end) -->
        <?php endif; ?>

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
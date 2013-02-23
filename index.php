<?php get_header(); ?>

<div id="main">

    <div class="content">

        <?php if($themeblvd_theme_hints == 'true') : ?>
            <?php echo themeblvd_theme_hints('index'); ?>
        <?php endif; ?>

        <?php if($themeblvd_home_show_slideshow == 'true') : ?>

        <div class="slideshow-wrapper">

            <?php
            
            $home_slideshow_options = array (
                'slideshow' => $themeblvd_home_slideshow,
                'size' => 'slideshow-large',
                'transition' => $themeblvd_home_slide_transition,
                'height' => $themeblvd_home_slide_height,
                'speed' => $themeblvd_home_slide_speed,
                'arrows' => $themeblvd_home_slide_arrows
            );

            $slideshow = stealth_slideshow($home_slideshow_options);

            echo $slideshow;

            ?>
            
        </div><!-- .slideshow-wrapper (end) -->
        <?php endif; ?>

        <?php if($themeblvd_home_show_featured == 'true') : ?>
        <div class="featured-wrapper">

            <?php stealth_featured_posts($themeblvd_home_featured_tag, $themeblvd_home_featured_type); ?>

        </div><!-- .featured-wrapper (end) -->
        <?php endif; ?>

        <?php if($themeblvd_home_show_content == 'true') : ?>            

            <?php if($themeblvd_home_show_sidebar == 'true') : ?>
            
                <div id="content">

                    <?php if($themeblvd_theme_hints == 'true') : ?>
                        <?php echo themeblvd_theme_hints('index-content'); ?>
                    <?php endif; ?>

                    <?php if($themeblvd_home_page) : ?>

                        <?php $page = get_page($themeblvd_home_page); ?>

                        <?php if($themeblvd_home_page_title == 'true') : ?>
                        <h3><?php echo $page->post_title; ?></h3>
                        <?php endif; ?>

                        <?php echo apply_filters('the_content', $page->post_content); ?>

                    <?php else : ?>

                        <p class="warning">
                            <?php _e("You need to select a page to pull content from for this area. You do this on your theme options page.", "themeblvd"); ?>
                        </p>

                    <?php endif; ?>

                </div><!-- #content (end) -->

                <div id="sidebar">
                    <?php if($themeblvd_theme_hints == 'true') : ?>
                        <?php echo themeblvd_theme_hints('index-sidebar'); ?>
                    <?php endif; ?>
                    <?php if ( is_sidebar_active('homepage-sidebar') ) { dynamic_sidebar('homepage-sidebar'); } ?>
                </div><!-- #sidebar (end) (end) -->

                <div class="clear"></div>

            <?php else : ?>

                <div class="full-width">

                    <?php if($themeblvd_theme_hints == 'true') : ?>
                        <?php echo themeblvd_theme_hints('index-content'); ?>
                    <?php endif; ?>

                    <?php if($themeblvd_home_page) : ?>

                        <?php $page = get_page($themeblvd_home_page); ?>

                        <?php if($themeblvd_home_page_title == 'true') : ?>
                        <h3><?php echo $page->post_title; ?></h3>
                        <?php endif; ?>

                        <?php echo apply_filters('the_content', $page->post_content); ?>

                    <?php else : ?>

                        <p class="warning">
                            <?php _e("You need to select a page to pull content from for this area. You do this on your theme options page.", "themeblvd"); ?>
                        </p>

                    <?php endif; ?>
                    
                </div><!-- .full-width (end) -->

            <?php endif; ?>

        <?php endif; ?>

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
<?php
/*
Template Name: Alternate Homepage
*/
?>

<?php get_header(); ?>

<div id="main">

    <div class="content">

        <?php if($themeblvd_theme_hints == 'true') : ?>
            <?php echo themeblvd_theme_hints('page-alternate-home'); ?>
        <?php endif; ?>

        <?php if($themeblvd_home2_show_slideshow == 'true') : ?>
        <div class="slideshow-wrapper">

            <?php
            
            $home2_slideshow_options = array (
                'slideshow' => $themeblvd_home2_slideshow,
                'size' => 'slideshow-large',
                'transition' => $themeblvd_home2_slide_transition,
                'height' => $themeblvd_home2_slide_height,
                'speed' => $themeblvd_home2_slide_speed,
                'arrows' => $themeblvd_home2_slide_arrows
            );

            $slideshow = stealth_slideshow($home2_slideshow_options);

            echo $slideshow;

            ?>

        </div><!-- .slideshow-wrapper (end) -->
        <?php endif; ?>

        <?php if($themeblvd_home2_slogan) : ?>
        <div id="slogan">
            <p><?php echo $themeblvd_home2_slogan; ?></p>
        </div><!-- #slogan (end) -->
        <?php endif; ?>

        <div id="homepage-boxes">
            <?php if($themeblvd_theme_hints == 'true') : ?>
                <?php echo themeblvd_theme_hints('page-alternate-home-widgets'); ?>
            <?php endif; ?>
            <?php dynamic_sidebar('homepage2'); ?>
            <div class="clear"></div>
        </div><!-- #homepage-boxes (end) -->

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
<?php 
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>

<div id="main">

    <div class="content">

        <?php if( $themeblvd_breadcrumbs == 'true' ) : ?>
            <?php if($themeblvd_theme_hints == 'true') : ?>
                <?php echo themeblvd_theme_hints('breadcrumbs'); ?>
            <?php endif; ?>
            <div id="breadcrumbs">
                <?php themeblvd_breadcrumbs(); ?>
            </div><!-- #breadcrumbs (end) -->
        <?php endif; ?>

        <?php if($themeblvd_theme_hints == 'true') : ?>
            <?php echo themeblvd_theme_hints('page-blog'); ?>
        <?php endif; ?>

        <?php if($themeblvd_blog_show_slideshow == 'true' && get_query_var('paged') < 2 ) : ?>
        <div class="slideshow-wrapper">

            <?php
            
            $blog_slideshow_options = array (
                'slideshow' => $themeblvd_blog_slideshow,
                'size' => 'slideshow-large',
                'transition' => $themeblvd_blog_slide_transition,
                'height' => $themeblvd_blog_slide_height,
                'speed' => $themeblvd_blog_slide_speed
            );

            $slideshow = stealth_slideshow($blog_slideshow_options);
            
            echo $slideshow;

            ?>

        </div><!-- .slideshow-wrapper (end) -->
        <?php endif; ?>

        <?php if($themeblvd_blog_show_featured == 'true' && get_query_var('paged') < 2) : ?>
        <div class="featured-wrapper">

            <?php stealth_featured_posts($themeblvd_blog_featured_tag, $themeblvd_blog_featured_type); ?>

        </div><!-- .featured-wrapper (end) -->
        <?php endif; ?>

        <div id="content">

            <?php stealth_blog($themeblvd_blog_categories, $themeblvd_blog_content); ?>

        </div><!-- #content (end) -->

        <div id="sidebar">

            <?php get_sidebar(); ?>

        </div><!-- #sidebar (end) -->

        <div class="clear"></div>

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
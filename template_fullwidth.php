<?php
/*
Template Name: Full Width Page
*/
?>

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

            <?php if($themeblvd_theme_hints == 'true') : ?>
                <?php echo themeblvd_theme_hints('page-full-width'); ?>
            <?php endif; ?>

            <?php the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <div class="content">

                <?php the_content(); ?>

                <?php edit_post_link( __('Edit Page', 'themeblvd'), '<p>', '</p>' ); ?>

                <?php wp_link_pages() ?>

            </div><!-- .content (end) -->
            
        </div><!-- #full-width-content (end) -->

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
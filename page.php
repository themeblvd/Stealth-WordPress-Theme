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

        <div id="content">

            <?php if($themeblvd_theme_hints == 'true') : ?>
                <?php echo themeblvd_theme_hints('page'); ?>
            <?php endif; ?>

            <?php the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <div class="content">

                <?php the_content(); ?>

                <div class="clear"></div>

                <?php rewind_posts(); ?>
                <?php the_post(); ?>

                <?php edit_post_link( __('Edit Page', 'themeblvd'), '<p>', '</p>' ); ?>

                <?php wp_link_pages() ?>

            </div><!-- .content (end) -->
            
        </div><!-- #content (end) -->

        <div id="sidebar">
        
            <?php get_sidebar(); ?>

        </div><!-- #sidebar (end) -->

        <div class="clear"></div>

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
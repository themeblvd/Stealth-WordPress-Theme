<?php 
/*
Template Name: Archives
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

        <div id="content">

            <?php if($themeblvd_theme_hints == 'true') : ?>
                <?php echo themeblvd_theme_hints('page-archives'); ?>
            <?php endif; ?>

            <?php the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <div class="content sitemap">

                <?php the_content(); ?>

                <h2><?php _e('The Last 30 Posts', 'themeblvd') ?></h2>

                <ul>
                    <?php query_posts('showposts=30'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php $wp_query->is_home = false; ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - <?php the_time(get_option('date_format')); ?> - <?php echo $post->comment_count ?> <?php _e('comments', 'woothemes') ?></li>
                    <?php endwhile; endif; ?>
                </ul>

                <h2><?php _e('Categories', 'themeblvd') ?></h2>

                <ul>
                    <?php wp_list_categories('title_li=&hierarchical=0&show_count=1') ?>
                </ul>

                <h2><?php _e('Monthly Archives', 'themeblvd') ?></h2>

                <ul>
                    <?php wp_get_archives('type=monthly&show_post_count=1') ?>
                </ul>

            </div><!-- .content (end) -->

        </div><!-- #content (end) -->

        <div id="sidebar">

            <?php $wp_query->is_page = true; ?>
            <?php get_sidebar(); ?>

        </div><!-- #sidebar (end) -->

        <div class="clear"></div>

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
<?php 
/*
Template Name: Sitemap
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
                <?php echo themeblvd_theme_hints('page-sitemap'); ?>
            <?php endif; ?>

            <?php the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <div class="content sitemap">

                <?php the_content(); ?>

                <h2><?php _e("Pages", "themeblvd"); ?></h2>

                <ul>
                    <?php wp_list_pages('depth=0&sort_column=menu_order&title_li=' ); ?>
                </ul>

                <h2><?php _e("Categories", "themeblvd"); ?></h2>

                <ul>
                    <?php wp_list_categories('title_li=&hierarchical=0&show_count=1') ?>
                </ul>

                <h2><?php _e("Posts per category", "themeblvd"); ?></h2>

                <?php $cats = get_categories(); ?>
                <?php foreach ($cats as $cat) : ?>

                    <?php query_posts('cat='.$cat->cat_ID); ?>

                        <h3><?php echo $cat->cat_name; ?></h3>

                        <ul>
                            <?php while (have_posts()) : the_post(); ?>
                            <li style="font-weight:normal !important;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - <?php _e('Comments', 'woothemes') ?> (<?php echo $post->comment_count ?>)</li>
                            <?php endwhile;  ?>
                        </ul>

                <?php endforeach; ?>
                
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
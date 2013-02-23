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
                <?php echo themeblvd_theme_hints('single'); ?>
            <?php endif; ?>

            <div class="entry">

                <?php the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <div class="content">

                    <div class="meta">
                        <span class="left">
                            <span class="date">
                                <?php the_time(get_option('date_format')); ?>
                            </span>
                        </span>
                        <span class="right">
                            <span class="comments">
                                <a href="<?php the_permalink(); ?>#comments-wrap">
                                    <?php comments_number( __("No Comments", "themeblvd"), __("1 Comment", "themeblvd"), __("% Comments", "themeblvd") ); ?>
                                </a>
                            </span>
                            <span class="author">
                                <?php _e('by ', 'themeblvd'); ?><?php the_author(); ?>
                            </span>
                        </span>
                    </div><!-- .meta (end) -->

                    <?php the_content(); ?>

                    <div class="clear"></div>

                    <?php rewind_posts(); ?>
                    <?php the_post(); ?>

                    <?php edit_post_link( __('Edit Post', 'themeblvd'), '<p>', '</p>' ); ?>

                    <?php wp_link_pages() ?>

                    <!-- COMMENTS (start) -->
                    <div id="comments-wrap">
                        <?php comments_template('', true); ?>
                    </div><!-- #comments-wrap (end) -->
                    <!-- COMMENTS (end) -->

                </div><!-- .content (end) -->

            </div><!-- .entry (end) -->
            
        </div><!-- #content (end) -->

        <div id="sidebar">
        
            <?php get_sidebar(); ?>

        </div><!-- #sidebar (end) -->

        <div class="clear"></div>

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
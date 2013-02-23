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
                <?php echo themeblvd_theme_hints('search'); ?>
            <?php endif; ?>

            <?php if($themeblvd_search_title == 'true') : ?>
            <h1>Search Results for <?php echo $s; ?></h1>
            <?php endif; ?>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="entry">

                <?php if($themeblvd_search_title == 'true') : ?>
                <h2><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h2>
                <?php else: ?>
                <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>
                <?php endif; ?>

                <div class="content">

                    <div class="excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="button">
                            <?php _e("Read More", "themeblvd"); ?> &raquo;
                        </a>
                    </p>

                </div><!-- .content (end) -->

            </div><!-- .entry (end) -->

            <?php endwhile; ?>

            <!-- Pagination -->
            <?php themeblvd_pagination(); ?>

            <?php else : ?>
                <p class="warning">
                    <?php _e("There are no results that match your search.", "themeblvd"); ?>
                </p>
            <?php endif; ?>

        </div><!-- #content (end) -->

        <div id="sidebar">

            <?php get_sidebar(); ?>

        </div><!-- #sidebar (end) -->

        <div class="clear"></div>

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
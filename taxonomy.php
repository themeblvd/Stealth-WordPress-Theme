<?php
/**
 *
 * Stealth WordPress Theme
 * Portfolios
 *
 * This file displays the portfolios and portfolio
 * tag pages. It is named simply taxonomy.php because
 * we have no other taxonmies with this theme that
 * need displaying other than for Portfolios.
 *
 * @author  Jason Bobich
 *
 */
?>

<?php $post_num = 1; ?>

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
                <?php echo themeblvd_theme_hints('portfolio'); ?>
            <?php endif; ?>

            <?php
            //Get Term Info and construct page title
            $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
            $term_name = $term->name;
            $term_slug = $term->slug;
            $term_type = $term->taxonomy;

            if($term_type == 'portfolio-tag'){

                //Title for portfolio tag pages
                $page_title = 'Tag: '.$term->name;

            } else {

                //Title for standard portfolio pages
                $page_title = $term->name;

            }

            ?>

            <!-- Display Title -->
            <?php if($themeblvd_portfolio_title != 'false') : ?>
            <h1><?php echo $page_title; ?></h1>
            <?php endif; ?>

            <!-- Display description if exists -->
            <?php if($themeblvd_portfolio_description != 'false') : ?>
            <?php echo category_description(); ?>
            <?php endif; ?>

            <!-- Start the Loop -->
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
            <?php query_posts("paged=$paged&portfolio=$term_slug&posts_per_page=$themeblvd_portfolio_page"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_permalink(); ?>
                <div class="one-third portfolio-box<?php if($post_num % 3 == 0) { echo ' last'; } ?>">

                    <?php if( $themeblvd_portfolio_item_thumb == 'true' ) : ?>

                    <a href="<?php echo get_post_meta($post->ID, 'themeblvd_media_item', true); ?>" title="<?php the_title(); ?>" class="thumb thumb-media loader" rel="lightbox[gallery]">

                        <span class="enlarge">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('portfolio'); ?>
                            <?php else : ?>
                                <p><?php _e('Oops! You forgot set a featured image.', 'themeblvd'); ?></p>
                            <?php endif; ?>
                        </span>

                    </a>

                    <?php else : ?>

                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="thumb loader">

                        <span class="enlarge">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('portfolio'); ?>
                            <?php else : ?>
                                <p><?php _e('Oops! You forgot set a featured image.', 'themeblvd'); ?></p>
                            <?php endif; ?>
                        </span>

                    </a>

                    <?php endif; ?>

                    <?php if( $themeblvd_portfolio_item_title == 'true' ) : ?>

                        <?php if( $themeblvd_portfolio_item_title_link == 'true' ) : ?>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <?php else : ?>
                        <h2><?php the_title(); ?></h2>
                        <?php endif; ?>
                    
                    <?php endif; ?>

                    <?php if( $themeblvd_portfolio_item_description == 'true' ) : ?>
                    <?php the_excerpt(); ?>
                    <?php endif; ?>

                    <?php if( $themeblvd_portfolio_item_more == 'true' ) : ?>
                    <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="button"><?php _e('Read More', 'themeblvd'); ?> &raquo;</a></p>
                    <?php endif; ?>

                </div><!-- .portfolio-box (end) -->

                <?php if($post_num % 3 == 0) : ?>
                <!-- Clear floats every 3 divs -->
                <div class="clear"></div>
                <?php endif; ?>

                <?php $post_num++; ?>

                <?php endwhile; ?>

                <div class="clear"></div>

                <!-- Pagination -->
                <?php themeblvd_pagination(); ?>

            <?php else: ?>

                <p><?php _e('This portfolio contains no portfolio items.', 'themeblvd'); ?></p>

            <?php endif; ?>

            <div class="clear"></div>

        </div><!-- #full-width-content (end) -->

    </div><!-- .content (end) -->
    
</div><!-- #main (end) -->


<?php get_footer(); ?>
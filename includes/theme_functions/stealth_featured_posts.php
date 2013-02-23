<?php
/**
 *
 * Stealth WordPress Theme
 * Featured Posts display
 *
 * This is a grid display of featured posts.
 *
 * @author  Jason Bobich
 *
 */

function stealth_featured_posts($tag, $type) {

    if(!$tag){
        $tag = 'featured';
    }

    if($type == 'true'){
        $featured_query = new WP_Query("nopaging=true&tag=$tag");
    } else {
        $featured_query = new WP_Query("nopaging=true&post_type=portfolio-item&portfolio-tags=$tag");
    }

    ?>

    <?php if($featured_query->have_posts()) : ?>

        <?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>

            <div class="entry">
                <div class="border">
                    <div class="inner">

                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('featured'); ?>
                        <?php endif; ?>

                        <div class="description">
                            <div class="pad">
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="button">
                                    <?php _e("Read More", "themeblvd"); ?>
                                </a>
                            </div><!-- .pad (end) -->
                        </div><!-- .description (end) -->

                    </div><!-- .inner (end) -->
                </div><!-- .border (end) -->
            </div><!-- .entry (end) -->
            
        <?php endwhile; ?>

    <?php else : ?>
        <p class="warning">
            <?php _e("There are no posts with the '$tag' tag.", "themeblvd"); ?>
        </p>
    <?php endif; ?>

    <div class="clear"></div>

<?php
##################################################################
} # end stealth_featured_posts function
##################################################################
?>
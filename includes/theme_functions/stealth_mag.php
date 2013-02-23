<?php
/**
 *
 * Stealth WordPress Theme
 * Magazine Style Posts Display
 *
 * This is a standard display of blog posts.
 *
 * @author  Jason Bobich
 *
 */

function stealth_mag($categories) {

    $counter = 1;

    //Excluded Categories
    if($categories) {

        $categoryString = array();

        foreach($categories as $category){
            array_push($categoryString, '-'.$category);
        }
        
        $categoryString = implode($categoryString, ", ");
        $categoryString = 'cat='.$categoryString;
        
    } else {

        $categoryString = '';
        
    }

    //Page it up
    if ( get_query_var('paged') ) {

        $paged = get_query_var('paged');

    } elseif ( get_query_var('page') ) {

        $paged = get_query_var('page');

    } else {

        $paged = 1;

    }

    ?>

    <?php query_posts($categoryString.'paged='.$paged); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="magazine-entry <?php if($counter %2 == 0){ echo ' last'; } ?>">

        <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>

        <div class="content">

            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('portfolio'); ?>
            <?php endif; ?>

            <div class="excerpt">
                <?php the_excerpt(); ?>
            </div>

            <p>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="button">
                    <?php _e("Read More", "themeblvd"); ?> &raquo;
                </a>
            </p>

        </div><!-- .content (end) -->

    </div><!-- .magazine-entry (end) -->

        <?php $counter++; ?>

    <?php endwhile; ?>

    <div class="clear"></div>

    <!-- Pagination -->
    <?php themeblvd_pagination(); ?>

    <?php else : ?>
        <p class="warning">
            <?php _e("There are no posts to display.", "themeblvd"); ?>
        </p>
    <?php endif; ?>

<?php
##################################################################
} # end stealth_mag function
##################################################################
?>
<?php
/**
 *
 * Stealth WordPress Theme
 * Standard Blog Display
 *
 * This is a standard display of blog posts.
 *
 * @author  Jason Bobich
 *
 */

function stealth_blog($categories, $content) {

    $categoryString = array();

    //Excluded Categories
    if($categories) {

        foreach($categories as $category){
            array_push($categoryString, '-'.$category);
        }

        $categoryString = implode($categoryString, ", ");
        $categoryString = 'cat='.$categoryString;

    }

    //Page it up
    if ( get_query_var('paged') ) {

        $paged = get_query_var('paged');

    } elseif ( get_query_var('page') ) {

        $paged = get_query_var('page');

    } else {

        $paged = 1;

    }

    //Blog it up
    global $more;
    $more = 0;
    
    if( isset($categoryString) ) {
    	
    	query_posts($categoryString.'&paged='.$paged);
    	
    } else {
    	
    	query_posts('paged='.$paged);
    	
    }
    
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    
    ?>

    <div class="entry">

        <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>

        <div class="content">

            <div class="meta">
                <span class="left">
                    <span class="date">
                        <?php the_time(get_option('date_format')); ?>
                    </span>
                </span>
                <span class="right">
                    <span class="author">
                        <?php _e('by ', 'themeblvd'); ?><?php the_author(); ?>
                    </span>
                    <span class="comments">
                        <a href="<?php the_permalink(); ?>#comments-wrap">
                            <?php comments_number( __("No Comments", "themeblvd"), __("1 Comment", "themeblvd"), __("% Comments", "themeblvd") ); ?>
                        </a>
                    </span>
                </span>
            </div><!-- .meta (end) -->

            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('blog', array("class" => "pretty")); ?>
            <?php endif; ?>

            <div class="excerpt">
                <?php if($content == 'true') : ?>
                    <?php the_content( __('Read More', 'themeblvd').' &raquo;' ); ?>
                <?php else : ?>
                    <?php the_excerpt(); ?>
                <?php endif; ?>
            </div>

            <?php if($content == 'false') : ?>
            <p>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="button">
                    <?php _e("Read More", "themeblvd"); ?> &raquo;
                </a>
            </p>
            <?php endif; ?>

        </div><!-- .content (end) -->

    </div><!-- .entry (end) -->

    <?php endwhile; ?>

    <!-- Pagination -->
    <?php themeblvd_pagination(); ?>

    <?php else : ?>
        <p class="warning">
            <?php _e("There are no posts to display.", "themeblvd"); ?>
        </p>
    <?php endif; ?>

<?php
##################################################################
} # end themeblvd_blog function
##################################################################
?>
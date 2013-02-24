<?php get_header(); ?>

<div id="main">

    <div class="content">

        <?php themeblvd_breadcrumbs(); ?>
		
		<?php if($themeblvd_sidebar == 'left') : ?>
			<?php get_sidebar(); ?>	
		<?php endif; ?>
		
        <div id="content">

            <?php if($themeblvd_theme_hints == 'true') : ?>
                <?php echo themeblvd_theme_hints('archive'); ?>
            <?php endif; ?>

            <?php if($themeblvd_archive_title == 'true') : ?>
            <h1>
		        <?php if (have_posts()) : ?>
			        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			        <?php /* If this is a category archive */ if (is_category()) { ?>
			        <?php _e('Category', "themeblvd"); ?>: <?php single_cat_title(); ?>
			        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			        <?php _e('Tag', "themeblvd"); ?>: <?php single_tag_title(); ?>
			        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			        <?php _e('Archive', "themeblvd"); ?>: <?php the_time('F jS, Y'); ?>
			        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			        <?php _e('Archive', "themeblvd"); ?>: <?php the_time('F, Y'); ?>
			        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			        <?php _e('Archive', "themeblvd"); ?>: <?php the_time('Y'); ?>
			        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
			        <?php _e('Author Archive', "themeblvd"); ?>
			        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			        <?php _e('Blog Archives', "themeblvd"); ?>
		    		<?php } ?>
		    	<?php endif; ?>
		    </h1>
            <?php endif; ?>
			
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="entry">
                <?php if($themeblvd_archive_title == 'true') : ?>
                <h2><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h2>
                <?php else: ?>
                <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>
                <?php endif; ?>

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
                                <?php _e('by ', 'flipblog'); ?><?php the_author(); ?>
                            </span>
                        </span>
                    </div><!-- .meta (end) -->

                    <?php if($themeblvd_archive_image == 'true') : ?>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('blog'); ?>
                        <?php endif; ?>
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

            </div><!-- .entry (end) -->

            <?php endwhile; ?>

            <!-- Pagination -->
            <?php themeblvd_pagination(); ?>

            <?php else : ?>
                <p class="warning">
                    <?php _e("There are no posts to display.", "themeblvd"); ?>
                </p>
            <?php endif; ?>

        </div><!-- #content (end) -->
        
        <?php if($themeblvd_sidebar == 'right') : ?>
			<?php get_sidebar(); ?>	
		<?php endif; ?>

        <div class="clear"></div>

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
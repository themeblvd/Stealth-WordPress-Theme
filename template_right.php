<?php
/*
Template Name: Sidebar Right
*/
?>
<?php get_header(); ?>

<div id="main">
		
    <div class="content">
		
		<?php themeblvd_breadcrumbs(); ?>
		
        <div id="content">

            <?php if($themeblvd_theme_hints == 'true') : ?>
                <?php echo themeblvd_theme_hints('page'); ?>
            <?php endif; ?>

            <?php the_post(); ?>
			
			<?php if( get_post_meta($post->ID, 'themeblvd_pagetitle', true) != 'false' ) : ?>
			<h1><?php the_title(); ?></h1>
			<?php endif; ?>

            <div class="content">

                <?php the_content(); ?>

                <div class="clear"></div>

                <?php rewind_posts(); ?>
                <?php the_post(); ?>

                <?php edit_post_link( __('Edit Page', 'themeblvd'), '<p>', '</p>' ); ?>

                <?php wp_link_pages() ?>

            </div><!-- .content (end) -->
            
        </div><!-- #content (end) -->
		
		<?php get_sidebar(); ?>
		
        <div class="clear"></div>

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
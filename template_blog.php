<?php 
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>

<div id="main">

    <div class="content">

        <?php if($themeblvd_theme_hints == 'true') : ?>
            <?php echo themeblvd_theme_hints('page-blog'); ?>
        <?php endif; ?>
        
        <?php themeblvd_breadcrumbs(); ?>
				
		<?php if($themeblvd_sidebar == 'left') : ?>
			<?php get_sidebar(); ?>	
		<?php endif; ?>
		
        <div id="content">
			
            <?php stealth_blog($themeblvd_blog_categories, $themeblvd_blog_content); ?>

        </div><!-- #content (end) -->

        <?php if($themeblvd_sidebar == 'right') : ?>
			<?php get_sidebar(); ?>	
		<?php endif; ?>

        <div class="clear"></div>

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
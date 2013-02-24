<?php 
/*
Template Name: Magazine Page
*/
?>

<?php get_header(); ?>

<div id="main">

    <div class="content">

        <?php themeblvd_breadcrumbs(); ?>

        <?php if($themeblvd_theme_hints == 'true') : ?>
            <?php echo themeblvd_theme_hints('page-mag'); ?>
        <?php endif; ?>
		
		<?php if($themeblvd_sidebar == 'left') : ?>
			<?php get_sidebar(); ?>	
		<?php endif; ?>
		
        <div id="content">
            <div id="magazine">
            
                <?php stealth_mag($themeblvd_mag_categories); ?>

            </div><!-- #magazine (end) -->
        </div><!-- #content (end) -->

        <?php if($themeblvd_sidebar == 'right') : ?>
			<?php get_sidebar(); ?>	
		<?php endif; ?>

        <div class="clear"></div>

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>
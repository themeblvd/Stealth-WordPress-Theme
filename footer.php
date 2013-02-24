<?php
//Globals
global $themeblvd_footer_columns;
global $themeblvd_copyright;
global $themeblvd_theme_hints;
global $themeblvd_analytics;
?>

	<div id="footer-top"><!-- --></div>

    <div id="footer">

        <div class="content">

            <?php if($themeblvd_theme_hints == 'true') : ?>
                <?php echo themeblvd_theme_hints('footer'); ?>
            <?php endif; ?>

            <div id="footer-boxes">

                <!-- Footer Widgets (start) -->

				<?php themeblvd_widget_columns_display("footer", $themeblvd_footer_columns); ?>
			
				<!-- Footer Widgets (end) -->

                <div class="clear"></div>

            </div><!-- #footer-boxes (end) -->

            <div id="copyright">

                <p class="info"><?php echo themeblvd_copyright(stripslashes($themeblvd_copyright)); ?></p>

                <?php wp_nav_menu( array('container' => '', 'theme_location' => 'footer-menu', 'fallback_cb' => '' ) ); ?>

                <div class="clear"></div>

            </div><!-- #copyright (end) -->

        </div><!-- .content (end) -->

    </div><!-- #footer (end) -->

</div><!-- #wrapper (end) -->

<?php wp_footer(); ?>

<?php echo stripslashes($themeblvd_analytics); ?>

</body>
</html>
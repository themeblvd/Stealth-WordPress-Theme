<?php
//Globals
global $themeblvd_seo_plugin;
global $themeblvd_theme_hints;
global $themeblvd_style;
global $themeblvd_header_color;
global $themeblvd_header_texture;
global $themeblvd_accent_color;
global $themeblvd_footer_style;
global $themeblvd_link_color;
global $themeblvd_link_hover_color;
global $themeblvd_css;
global $themeblvd_font_headers;
global $themeblvd_font_body;
global $themeblvd_font_size;
global $themeblvd_logo;
global $themeblvd_logo_image;
global $themeblvd_header;
global $themeblvd_header_twitter;
global $themeblvd_header_html;
?>
<!DOCTYPE html>   
<html lang="en"> 
<head>
 
    <meta charset="<?php bloginfo('charset'); ?>" />

    <?php if ( get_option('blog_public') == 1 && $themeblvd_seo_plugin == 'true') : ?>
        <!-- ThemeBlvd SEO -->
        <?php global $seo; $seo->themeblvd_head(); ?>
    <?php else : ?>
        <!-- Default Title  -->
        <?php themeblvd_title(); ?>
    <?php endif; ?>
        
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/layout/plugins/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" />

    <!-- Body Style: Light, Dark, or Beige -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/layout/css/style/<?php echo $themeblvd_style; ?>.css" type="text/css" media="screen" />
    
    <!-- Footer Style: Light, Dark, or Beige -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/layout/css/footer/<?php echo $themeblvd_footer_style; ?>.css" type="text/css" media="screen" />

    <!-- Font -->
    <?php themeblvd_font($themeblvd_font_headers, $themeblvd_font_body, $themeblvd_font_size); ?>

    <!-- Wordpress Header stuff -->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Configurable CSS -->
    <style type="text/css">
    
    /* HEADER BG */
	<?php if($themeblvd_header_texture != 'none'){ parse_str($themeblvd_header_texture, $themeblvd_header_texture); } ?>
	<?php echo stealth_bg( "#wrapper", $themeblvd_header_color, $themeblvd_header_texture); ?>

    /* ACCENT COLOR */
    #menu-wrapper, 
    #menu-wrapper .menu li ul,
    #footer-top { 
    	background-color: #<?php echo $themeblvd_accent_color; ?>;
    }
    
    #sidebar .widget li a:hover,
    #sidebar-left .widget li a:hover,
    #home-widget-columns .widget li a:hover,
    #content .entry h1 a:hover,
    #content .entry h2 a:hover,
    #full-width-content .portfolio-box h2 a:hover {
    	color: #<?php echo $themeblvd_accent_color; ?>;
    }
    
    /* LINK COLOR */
    a,
    #sidebar .tb-twitter_widget.widget li a,
    #sidebar-left .tb-twitter_widget.widget .twitter_div li a,
    #home-widget-columns .tb-twitter_widget.widget li a {
    	color: #<?php echo $themeblvd_link_color; ?>
    }
	
	/* LINK HOVER COLOR */
	a:hover,
	#sidebar .tb-twitter_widget.widget li a:hover,
    #sidebar-left .tb-twitter_widget.widget .twitter_div li a:hover,
    #home-widget-columns .tb-twitter_widget.widget li a:hover {
		color: #<?php echo $themeblvd_link_hover_color; ?>;
	}
    
    <?php if($themeblvd_css) : ?>
    /* USER INPUTTED CSS */
    <?php echo $themeblvd_css; ?>
    <?php endif; ?>
    
    </style>

    <!-- JS -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/js/swfobject.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/js/cycle.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/js/superfish.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/js/validate.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/js/custom.js"></script>

    <!-- Slideshow Navigation -->
    <script type="text/javascript">
    function paginate(idx, slide){
        return "<\a href='#'><\img src='<?php bloginfo('template_directory'); ?>/layout/images/shared/transparent.png' alt='' class='ie6' /><\/a>";
    }
    </script>

    <!-- Comments -->
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <!-- Meta Tags (for js) -->
    <meta name="template_url" content="<?php echo get_bloginfo('template_url'); ?>" />

</head>

<div id="wrapper">

    <div id="header">

	        <div class="content">
	
	            <?php if($themeblvd_logo == 'text') : ?>
	
	            <h1 id="logo">
	                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>">
	                    <?php bloginfo('title'); ?>
	                </a>
	            </h1>
	
	            <?php else : ?>
	
	            <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>" id="logo">
	                <?php if($themeblvd_logo_image) : ?>
	                <img src="<?php echo $themeblvd_logo_image; ?>" alt="<?php bloginfo('title'); ?>" />
	                <?php else : ?>
	                <img src="<?php bloginfo('template_directory'); ?>/layout/images/shared/logo.png" alt="<?php bloginfo('title'); ?>" />
	                <?php endif; ?>
	            </a>
	
	            <?php endif; ?>
	
	            <?php if($themeblvd_header == 'twitter') : ?>
	
	            <div id="twitter">
	                <div class="inner">
						<div class="twitter_div">
							<?php echo $themeblvd_header_twitter; // ... ?>
						</div>
	                </div><!-- .inner (end) -->
	            </div><!-- #twitter (end) -->
	
	            <?php elseif($themeblvd_header == 'search') : ?>
	            
	            <div class="searchform">
	                <?php echo get_search_form(); ?>
	            </div><!-- .search (end) -->
	
	            <?php elseif($themeblvd_header == 'html') : ?>
	
	            <div id="html-block">
	                <?php echo stripslashes($themeblvd_header_html); ?>
	            </div><!-- #html-block -->
	
	            <?php endif; ?>
	
	            <?php if($themeblvd_theme_hints == 'true') : ?>
	                <?php echo themeblvd_theme_hints('header'); ?>
	            <?php endif; ?>
	
	        </div><!-- .content (end) -->

    </div><!-- #header (end) -->

    <div id="menu-wrapper">

        <div class="content">
            
            <?php wp_nav_menu( array('container' => '', 'theme_location' => 'primary', 'fallback_cb' => 'themeblvd_menu_fallback' ) ); ?>
            
            <div class="clear"></div>

        </div><!-- .content (end) -->

    </div><!-- #menu-wrapper (end) -->
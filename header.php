<?php
//Globals
global $themeblvd_seo_plugin;
global $themeblvd_theme_hints;
global $themeblvd_style;
global $themeblvd_link_color;
global $themeblvd_css;
global $themeblvd_font_headers;
global $themeblvd_font_body;
global $themeblvd_logo;
global $themeblvd_logo_image;
global $themeblvd_header;
global $themeblvd_header_twitter;
global $themeblvd_header_html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <?php if ( get_option('blog_public') == 1 && $themeblvd_seo_plugin == 'true') : ?>
        <!-- ThemeBlvd SEO -->
        <?php global $seo; $seo->themeblvd_head(); ?>
    <?php else : ?>
        <!-- Default Title  -->
        <?php themeblvd_title(); ?>
    <?php endif; ?>
        
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/layout/plugins/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" />

    <!-- Style: Blue, Green, Orange, Purple, Red, or Yellow -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/layout/css/style/<?php echo $themeblvd_style; ?>.css" type="text/css" media="screen" />

    <!-- Font -->
    <?php themeblvd_font($themeblvd_font_headers, $themeblvd_font_body); ?>

    <!-- Wordpress Header stuff -->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if($themeblvd_css || $themeblvd_link_color) : ?>
    <!-- Custom CSS -->
    <style type="text/css">
    <?php if($themeblvd_link_color) : ?>
    a,
    span.highlight,
    #slogan span,
    #sidebar .widget li a:hover,
    #content .entry h1 a:hover,
    #content .entry h2 a:hover,
    #full-width-content .portfolio-box h2 a:hover {
            color: #<?php echo $themeblvd_link_color; ?>;
    }
    <?php endif; ?>
    
    <?php if($themeblvd_css) : ?>
    <?php echo $themeblvd_css; ?>
    <?php endif; ?>
    </style>
    <?php endif; ?>

    <!-- JS -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/js/cycle.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/js/superfish.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/js/validate.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/layout/js/custom.js"></script>

    <!-- Slideshow Navigation -->
    <script type="text/javascript">
    function paginate(idx, slide){
        return "<\a href='' title='' class='ie6'><\img src='<?php bloginfo('template_directory'); ?>/layout/images/shared/transparent.png' alt='' class='ie6' /><\/a>";
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

                    <script type="text/javascript">
                    jQuery.noConflict()(function(){
                        jQuery(window).load(function() {
                            jQuery(".twitter_div").getTwitter({
                                    userName: "<?php echo $themeblvd_header_twitter; ?>",
                                    numTweets: 1,
                                    loaderText: "Loading tweets...",
                                    slideIn: true,
                                    slideDuration: 750,
                                    showHeading: false,
                                    showProfileLink: false,
                                    showTimestamp: true
                            });
                        });
                    });
                    </script>

                    <div class="twitter_div"></div>

                    <a href="http://www.twitter.com/jasonbobich" title="Follow Me!" class="twitter-follow">Follow Me!</a>

                </div><!-- .inner (end) -->
            </div><!-- #twitter (end) -->

            <?php elseif($themeblvd_header == 'search') : ?>
            <div class="searchform">
                <?php echo get_search_form(); ?>
            </div><!-- .search (end) -->
            <?php elseif($themeblvd_header == 'html') : ?>

            <div id="html-block">
                <?php echo $themeblvd_header_html; ?>
            </div><!-- #html-block -->

            <?php endif; ?>

            <?php if($themeblvd_theme_hints == 'true') : ?>
                <?php echo themeblvd_theme_hints('header'); ?>
            <?php endif; ?>

        </div><!-- .content (end) -->

    </div><!-- #header (end) -->

    <div id="menu-wrapper">

        <div class="content">
            
            <?php wp_nav_menu( array('container' => '', 'theme_location' => 'primary', 'fallback_cb' => '' ) ); ?>
            
            <div class="clear"></div>

        </div><!-- .content (end) -->

    </div><!-- #menu-wrapper (end) -->
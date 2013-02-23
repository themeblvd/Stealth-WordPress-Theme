<?php
/**
 *
 * ThemeBlvd WordPress Theme Framework
 * File Includes
 * 
 * This file includes all files needed for this WordPress theme
 * framwork to work properly.
 *
 * @author  Jason Bobich
 *
 */

##############################################################
# Define Theme Constants
##############################################################

define("THEMEHINTS", TEMPLATEPATH . "/framework/theme_hints");
define("THEMEOPTIONS", TEMPLATEPATH . "/framework/theme_options");
define("SEO", TEMPLATEPATH . "/framework/seo");
define("HELPERITEMS", TEMPLATEPATH . "/framework/helper_items");


##############################################################
# (1) Theme Hints
##############################################################

include_once(THEMEHINTS . "/functions/theme_hints.php");

##############################################################
# (2) Theme Options
##############################################################

include_once(THEMEOPTIONS . "/functions/themeblvd_admin_head.php");
include_once(THEMEOPTIONS . "/classes/themeblvd_options.php");
include_once(THEMEOPTIONS . "/classes/themeblvd_meta_box.php");

##############################################################
# (3) SEO
##############################################################

include_once(SEO . "/classes/themeblvd_seo.php");

##############################################################
# (4) Helper Items
##############################################################

include_once(HELPERITEMS . "/comments.php");
include_once(HELPERITEMS . "/limit.php");
include_once(HELPERITEMS . "/page_number.php");
include_once(HELPERITEMS . "/sandbox.php");
include_once(HELPERITEMS . "/pagination.php");
include_once(HELPERITEMS . "/themeblvd_breadcrumbs.php");
include_once(HELPERITEMS . "/themeblvd_copyright.php");
include_once(HELPERITEMS . "/themeblvd_font.php");
include_once(HELPERITEMS . "/themeblvd_title.php");

?>
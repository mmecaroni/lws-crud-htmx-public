<?php
/*
Plugin Name: LWS Crud Htmx Public
Plugin URI: http://www.liquidstudiodev.com/wp/lws-wpplugin-public
Description: Just a testing public plugin to see how to update it from github
Version: 0.0.1
Author: Mario Mecaroni
Author URI: http://www.liquidstudiogroup.com/mario-mecaroni
License: MIT
Text Domain: lws-wpplugin-public
GitHub Plugin URI: https://github.com/mmecaroni/lws-crud-html-public
GitHub Branch: master
*/

/****** Get lost! */
if (!defined('ABSPATH')) { exit; }

/****** Display Version */
add_action("wp_footer", function() {
	echo "<p>LWS Crud Htmx Public | <small>v0.0.1-beta</small></p>";
});

/****** Constant for Plugin Path */
define('LWS_CRUD_HTMX_PUBLIC_FILE_PATH', plugin_dir_path(__FILE__));
/****** Main Plugin File Constant */
define('LWS_CRUD_HTMX_PUBLIC_MAIN_FILE', __FILE__);

/****** Require Menu handler file*/
require_once trailingslashit(LWS_CRUD_HTMX_PUBLIC_FILE_PATH) . 'includes/menu/add-menu-pages.php';

/****** EXAMPLE REQUIRE */
require_once trailingslashit(LWS_CRUD_HTMX_PUBLIC_FILE_PATH) . "packages/dashboard/page-dashboard.php";
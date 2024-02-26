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

define( 'LWS_CRUD_HTMX_VERSION', 'v0.4.0-beta' );
define( 'LWS_CRUD_HTMX_DIR', plugin_dir_path( __FILE__ ) );
define( 'LWS_CRUD_HTMX_ROOT_FILE', __FILE__ );
define( 'LWS_CRUD_HTMX_ROOT_FILE_RELATIVE_PATH', plugin_basename( __FILE__ ) );
define( 'LWS_CRUD_HTMX_SLUG', 'lws_admin_settings' );
define( 'LWS_CRUD_HTMX_FOLDER', dirname( plugin_basename( __FILE__ ) ) );
define( 'LWS_CRUD_HTMX_URL', plugins_url( '', __FILE__ ) );

/****** Display Version */
add_action("wp_footer", function() {
	echo "<p>LWS Crud Htmx Public | <small>" . LWS_CRUD_HTMX_VERSION . "</small></p>";
});



/****** Require Menu handler file*/
require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'includes/menu/add-menu-pages.php';

/****** EXAMPLE REQUIRE */
require_once trailingslashit(LWS_CRUD_HTMX_DIR) . "packages/dashboard/page-dashboard.php";
require_once trailingslashit(LWS_CRUD_HTMX_DIR) . "packages/htmx/page-htmx.php";
require_once trailingslashit(LWS_CRUD_HTMX_DIR) . "packages/tailwind/page-tailwind.php";
require_once trailingslashit(LWS_CRUD_HTMX_DIR) . "packages/alpine/page-alpine.php";
require_once trailingslashit(LWS_CRUD_HTMX_DIR) . "packages/settings/page-settings.php";
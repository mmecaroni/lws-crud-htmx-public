<?php

function lws_crud_htmx_menu_pages() {
    add_menu_page(
        'Dashboard',
        'LWS Crud Htmx',
        'manage_options',
        'lws_crud_htmx_dashboard',
        'lws_crud_htmx_dashboard_page',
        'dashicons-tagcloud',
        100
    );

    require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'packages/dashboard/admin-menu.php';
    require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'packages/htmx/admin-menu.php';
    require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'packages/tailwind/admin-menu.php';
    require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'packages/alpine/admin-menu.php';
    require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'packages/settings/admin-menu.php';

}
add_action('admin_menu', 'lws_crud_htmx_menu_pages');

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

    add_submenu_page(
        'lws_crud_htmx_dashboard',
        'Dashboard',
        'Dashboard',
        'manage_options',
        'lws_crud_htmx_dashboard',
        'lws_crud_htmx_dashboard_page'
    );

    // add_submenu_page(
    //     'demo_dashboard',
    //     'Inputs',
    //     'Inputs',
    //     'manage_options',
    //     'demo_input_fields',
    //     'demo_page_inputs_renderer'
    // );

    // add_submenu_page(
    //     'demo_dashboard',
    //     'Settings',
    //     'Settings',
    //     'manage_options',
    //     'demo_settings',
    //     'demo_page_settings_renderer'
    // );
}
add_action('admin_menu', 'demo_custom_menu_pages');
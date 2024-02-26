<?php

add_submenu_page(
  'lws_crud_htmx_dashboard',
  'Settings',
  'Settings',
  'manage_options',
  'lws_crud_htmx_settings',
  'lws_crud_htmx_settings_page'
);
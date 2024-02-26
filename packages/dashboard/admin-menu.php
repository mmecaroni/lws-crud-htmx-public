<?php

add_submenu_page(
  'lws_crud_htmx_dashboard',
  'Dashboard',
  'Dashboard',
  'manage_options',
  'lws_crud_htmx_dashboard',
  'lws_crud_htmx_dashboard_page'
);
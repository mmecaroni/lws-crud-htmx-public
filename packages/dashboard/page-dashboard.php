<?php

require_once trailingslashit(LWS_CRUD_HTMX_PUBLIC_FILE_PATH) . 'packages/dashboard/view-card.php';

function demo_page_dashboard_renderer() {
    echo '<div class="wrap">';
    echo '<h1 class="wp-heading-inline">Dashboard</h1>';
    echo '<hr />';
    echo '<p>This is a dashboard content.</p>';
    echo '</div>';
}
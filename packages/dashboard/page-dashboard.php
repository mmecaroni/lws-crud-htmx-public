<?php

require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'packages/dashboard/view-card.php';

function lws_crud_htmx_dashboard_page() {
    // lws_crud_htmx_add_styles();
    echo '<div class="wrap">';
    ?>
        <h1 class="wp-heading-inline">Dashboard</h1>
        <hr />
        <p>This is a dashboard content.</p>
        <?php lws_dashboard_view_card(); ?>
    <?php
    echo '</div>';
    // lws_crud_htmx_add_scripts();
}
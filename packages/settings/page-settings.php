<?php

require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'packages/settings/view-card.php';

function lws_crud_htmx_settings_page() {
    // lws_crud_htmx_add_styles();
    echo '<div class="wrap">';
    ?>
        <h1 class="wp-heading-inline">Settings</h1>
        <hr />
        <p>This is a Settings content.</p>
        <?php lws_settings_view_card(); ?>
    <?php
    echo '</div>';
    // lws_crud_htmx_add_scripts();
}
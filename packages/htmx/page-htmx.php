<?php

require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'packages/htmx/view-card.php';

function lws_crud_htmx_htmx_page() {
    // lws_crud_htmx_add_styles();
    echo '<div class="wrap">';
    ?>
        <h1 class="wp-heading-inline">Htmx</h1>
        <hr />
        <p>This is a Htmx content.</p>
        <?php lws_htmx_view_card(); ?>
    <?php
    echo '</div>';
    // lws_crud_htmx_add_scripts();
}
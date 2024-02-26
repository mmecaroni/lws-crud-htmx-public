<?php

require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'packages/alpine/view-card.php';

function lws_crud_htmx_alpine_page() {
    // lws_crud_htmx_add_styles();
    echo '<div class="wrap">';
    ?>
        <h1 class="wp-heading-inline">Alpine</h1>
        <hr />
        <p>This is a Alpine content.</p>
        <?php lws_alpine_view_card(); ?>
    <?php
    echo '</div>';
    // lws_crud_htmx_add_scripts();
}
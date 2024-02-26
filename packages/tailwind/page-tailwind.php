<?php

require_once trailingslashit(LWS_CRUD_HTMX_DIR) . 'packages/tailwind/view-card.php';

function lws_crud_htmx_tailwind_page() {
    // lws_crud_htmx_add_styles();
    echo '<div class="wrap">';
    ?>
        <h1 class="wp-heading-inline">Tailwind</h1>
        <hr />
        <p>This is a Tailwind content.</p>
        <?php lws_tailwind_view_card(); ?>
    <?php
    echo '</div>';
    // lws_crud_htmx_add_scripts();
}
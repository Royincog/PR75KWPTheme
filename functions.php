<?php
// Enqueue Tailwind CSS for the frontend
function enqueue_tailwind_scripts()
{
    wp_enqueue_style("tailwind-style", get_template_directory_uri() . "/styles/site-base.css", array(), "1.0");
}
add_action("wp_enqueue_scripts", "enqueue_tailwind_scripts");

// Enqueue Tailwind CSS for the block editor
function enqueue_tailwind_editor_scripts()
{
    wp_enqueue_style("tailwind-editor-style", get_template_directory_uri() . "/styles/site-base.css", array(), "1.0");
}
add_action("enqueue_block_assets", "enqueue_tailwind_editor_scripts");

<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'decora-js',
        get_stylesheet_directory_uri() . '/main.js',
        [],
        '1.0',
        true
    );
});

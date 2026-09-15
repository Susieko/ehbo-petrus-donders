<?php

if (!defined('ABSPATH')) {
    exit;
}

function ehbo_petrus_donders_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    add_post_type_support('page', 'excerpt');
}

add_action(
    'after_setup_theme',
    'ehbo_petrus_donders_setup'
);
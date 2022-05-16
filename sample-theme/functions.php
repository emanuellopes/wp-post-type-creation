<?php

// load vendor dependencies.
require dirname(__DIR__) . '/vendor/autoload.php';

add_action('init', function () {
    $postType = new \emanuellopes\WpPostType\PostType();

    $postType->labels('teste', 'Teste');

    $postType->slug('teste');

    $postType->register(10);
});

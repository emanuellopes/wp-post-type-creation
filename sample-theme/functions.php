<?php

// load vendor dependencies.
require dirname(__DIR__) . '/vendor/autoload.php';

add_action('init', function () {
    $postType = new \emanuellopes\WpPostType\PostType();

    $postType->labels('teste', 'Teste')->allItems('Todos os items');

    $postType->slug('teste');

    $postType->args()
             ->public(true)
             ->description('ttatatat')
             ->showInRest(false)
             ->menuPosition(0);

    $postType->register(10);
});

<?php

// load vendor dependencies.
use emanuellopes\WpPostType\PostType;
use emanuellopes\WpPostType\PostTypeArgs;
use emanuellopes\WpPostType\PostTypeLabel;

require dirname(__DIR__) . '/vendor/autoload.php';

add_action('init', function () {
    $postType = new PostType();

    $postType->slug('teste')
             ->labels(
                 PostTypeLabel::create('Teste', 'Testes')
             )
             ->args(
                 PostTypeArgs::create()
                             ->showInRest(false)
             )
             ->register();
});

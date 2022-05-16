<?php

namespace emanuellopes\WpPostType;

trait PostTypeDefaultsTrait
{
    /**
     * @return array
     */
    private function getDefaultArgs(): array
    {
        return array(
            'public' => true,
            'hierarchical' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'editor',
                'comments',
                'revisions',
                'trackbacks',
                'author',
                'excerpt',
                'page-attributes',
                'thumbnail',
                'custom-fields',
                'post-formats',
            ),
        );
    }
}

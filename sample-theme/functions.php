<?php

// load vendor dependencies.
use emanuellopes\WpPostType\PostType;
use emanuellopes\WpPostType\PostTypeArgs;
use emanuellopes\WpPostType\PostTypeLabel;
use emanuellopes\WpPostType\PostTypeSupports;

require dirname(__DIR__) . '/vendor/autoload.php';

add_theme_support('post-thumbnails'); //allow post-thumbnails in theme

add_action('init', function () {
    PostType::create()
            ->slug('book')
            ->labels(
                PostTypeLabel::create('Book', 'Books')
            )
            ->args(
                PostTypeArgs::create()
                            ->showInRest(false)
                            ->description('List of Books')
                            ->public(true)
                            ->hierarchical(true)
                            ->excludeFromSearch(true)
                            ->publiclyQueryable(true)
                            ->showUi(true)
                            ->showInMenu(true)
                            ->menuPosition(2)
                            ->menuIcon('dashicons-wordpress')
                            ->supports(
                                PostTypeSupports::create()
                                                ->addTitle()
                                                ->addEditor()
                                                ->addAuthor()
                                                ->addCustomFields()
                                                ->addExcerpt()
                                                ->addComments()
                                                ->addPageAttributes()
                                                ->addPostFormats()
                                                ->addCustomSupport('a', 'b')
                                                ->addThumbnail()
                            )
                            ->taxonomies(
                                array('category', 'post_tag')
                            )
                            ->hasArchive(true)
                            ->rewrite(
                                array(
                                    'slug' => 'books',
                                    'with_front' => true,
                                    'feeds' => true,
                                    'pages' => true,
                                    'ep_mask' => EP_PERMALINK,
                                )
                            )
                            ->queryVar('book')
                            ->canExport(true)
                            ->deleteWithUser(false)
                            ->_builtin(false)
            )
            ->register();
});

PostType::create()
        ->slug('author')
        ->labels(
            PostTypeLabel::create('Author', 'Authors')
        )
        ->args(
            PostTypeArgs::create()
                        ->supports(
                            PostTypeSupports::create()
                                            ->addTitle()
                        )
        )
        ->register();

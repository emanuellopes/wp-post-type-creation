# WordPress Post type creation [WIP]

Hey folks,

has I known, a lot of developers are always looking at the documentation looking for the parameters to register a new
post type.

So, I created this package for you use in your projects, I hope this help you on future projects.

## Installation

```bash
composer require emanuellopes/wp.posttype-easy-creation
```

Load autoload in functions.php or in your plugin starting file.

```
<?php
require dirname(__DIR__) . '/vendor/autoload.php';
```

## How to use it

### Create a new Post type inside Init Hook

if you need to grab something information from WordPress you can create the post type inside the init hook

```php
// load vendor dependencies.
use emanuellopes\WpPostType\PostType;
use emanuellopes\WpPostType\PostTypeArgs;
use emanuellopes\WpPostType\PostTypeLabel;

add_action('init', function () { //Init Hook is optional here
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
                            ->capabilityType('post')
                            ->capabilities(array('edit_posts'))
                            ->mapMetaCap(false)
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
```

## Create Author Post type
```php
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
```
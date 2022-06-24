# WordPress Post type creation

Hey folks,

has I known, a lot of developers are always looking at the documentation 
looking for the parameters to register a new post type.

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

### Create a new Post type

```php
// load vendor dependencies.
use emanuellopes\WpPostType\PostType;
use emanuellopes\WpPostType\PostTypeArgs;
use emanuellopes\WpPostType\PostTypeLabel;

require dirname(__DIR__) . '/vendor/autoload.php';

add_action('init', function () {
    $postType = new PostType();

    $postType->slug('book')
             ->labels(
                 PostTypeLabel::create('Book', 'Books')
             )
             ->args(
                 PostTypeArgs::create()
                             ->showInRest(false)
             )
             ->register();
});
```
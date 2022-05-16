<?php

namespace emanuellopes\WpPostType;

use emanuellopes\WpPostType\Contracts\IPostTypeInterface;
use emanuellopes\WpPostType\Contracts\IPostTypeLabel;
use emanuellopes\WpPostType\Exceptions\EmptyLabelsException;
use emanuellopes\WpPostType\Exceptions\EmptySlugException;

class PostType implements IPostTypeInterface
{
    use PostTypeDefaultsTrait;

    private string $slug;

    private array $args;
    private PostTypeLabel $postTypeLabel;

    public function __construct()
    {
        $this->args = $this->getDefaultArgs();
    }

    public function slug(string $slug): IPostTypeInterface
    {
        $this->slug = $slug;

        return $this;
    }

    public function labels(string $singular, string $plural): IPostTypeLabel
    {
        $this->postTypeLabel = new PostTypeLabel($singular, $plural);

        return $this->postTypeLabel;
    }

    private function updateLabels(): void
    {
        $this->args['labels'] = $this->postTypeLabel->build();
    }

    /**
     * @throws EmptySlugException
     * @throws EmptyLabelsException
     */
    public function register(int $priority = 10): void
    {
        if (function_exists('current_filter') && 'init' === current_filter()) {
            $this->registerCallback();
        } else {
            add_action('init', array($this, 'registerCallback'), $priority);
        }
    }

    public function registerCallback(): void
    {
        $this->updateLabels();

        if (empty($this->slug)) {
            throw new EmptySlugException(
                'The Slug is empty, please use the ->slug(\'slug\')'
            );
        }

        if (empty($this->args['labels'])) {
            throw new EmptyLabelsException(
                'The Labels are empty, please use the ->labels(\'slug\')'
            );
        }
        register_post_type($this->slug, $this->args);
    }
}

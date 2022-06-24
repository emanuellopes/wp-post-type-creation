<?php

namespace emanuellopes\WpPostType;

use emanuellopes\WpPostType\Contracts\IPostTypeArgsInterface;
use emanuellopes\WpPostType\Contracts\IPostTypeInterface;
use emanuellopes\WpPostType\Contracts\IPostTypeLabelInterface;
use emanuellopes\WpPostType\Exceptions\EmptyLabelsException;
use emanuellopes\WpPostType\Exceptions\EmptySlugException;

class PostType implements IPostTypeInterface
{
    use PostTypeDefaultsTrait;

    private string $slug;

    private array $args;
    private ?IPostTypeLabelInterface $postTypeLabel = null;
    private ?IPostTypeArgsInterface $postTypeArgs = null;

    public static function create(): IPostTypeInterface
    {
        return new self();
    }

    public function __construct()
    {
        $this->args = $this->getDefaultArgs();
    }

    public function slug(string $slug): IPostTypeInterface
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     *
     * @param  IPostTypeArgsInterface  $postTypeArgs
     *
     * @return IPostTypeInterface
     */
    public function args(IPostTypeArgsInterface $postTypeArgs): IPostTypeInterface
    {
        $this->postTypeArgs = $postTypeArgs;

        return $this;
    }

    private function updateArgs(): void
    {
        if (! $this->postTypeArgs) {
            return;
        }
        $this->args = array_merge($this->args, $this->postTypeArgs->build());
    }

    public function labels(IPostTypeLabelInterface $postTypeLabel): IPostTypeInterface
    {
        $this->postTypeLabel = $postTypeLabel;

        return $this;
    }

    private function updateLabels(): void
    {
        if (! $this->postTypeLabel) {
            return;
        }

        $this->args['labels'] = array_merge(
            $this->args['labels'],
            $this->postTypeLabel->build()
        );
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

    /**
     * @return void
     * @throws EmptyLabelsException
     * @throws EmptySlugException
     * @internal Used as a callback for register post type
     */
    public function registerCallback(): void
    {
        $this->updateArgs();
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

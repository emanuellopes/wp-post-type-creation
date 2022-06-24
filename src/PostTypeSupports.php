<?php

namespace emanuellopes\WpPostType;

use emanuellopes\WpPostType\Contracts\IPostTypeSupportsInterface;

class PostTypeSupports implements IPostTypeSupportsInterface
{
    private array $supports = array();

    private static ?PostTypeSupports $instance = null;

    public static function create(): IPostTypeSupportsInterface
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addTitle(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'title';

        return $this;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addEditor(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'editor';

        return $this;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addComments(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'comments';

        return $this;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addRevisions(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'revisions';

        return $this;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addTrackBacks(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'trackbacks';

        return $this;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addAuthor(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'author';

        return $this;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addExcerpt(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'excerpt';

        return $this;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addPageAttributes(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'page-attributes';

        return $this;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addThumbnail(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'thumbnail';

        return $this;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addCustomFields(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'custom-fields';

        return $this;
    }

    /**
     * @return IPostTypeSupportsInterface
     */
    public function addPostFormats(): IPostTypeSupportsInterface
    {
        $this->supports[] = 'post-formats';

        return $this;
    }

    /**
     * @param  string  $key
     * @param  mixed  $value
     *
     * @return IPostTypeSupportsInterface
     */
    public function addCustomSupport(string $key, $value): IPostTypeSupportsInterface
    {
        $this->supports[$key] = $value;

        return $this;
    }

    /**
     * @return array
     */
    public function build(): array
    {
        return $this->supports;
    }
}

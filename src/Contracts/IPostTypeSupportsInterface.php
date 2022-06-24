<?php

namespace emanuellopes\WpPostType\Contracts;

interface IPostTypeSupportsInterface
{
    public function addTitle(): IPostTypeSupportsInterface;

    public function addEditor(): IPostTypeSupportsInterface;

    public function addComments(): IPostTypeSupportsInterface;

    public function addRevisions(): IPostTypeSupportsInterface;

    public function addTrackBacks(): IPostTypeSupportsInterface;

    public function addAuthor(): IPostTypeSupportsInterface;

    public function addExcerpt(): IPostTypeSupportsInterface;

    public function addPageAttributes(): IPostTypeSupportsInterface;

    public function addThumbnail(): IPostTypeSupportsInterface;

    public function addCustomFields(): IPostTypeSupportsInterface;

    public function addPostFormats(): IPostTypeSupportsInterface;

    /**
     * @param  string  $key
     * @param  mixed  $value
     *
     * @return mixed
     */
    public function addCustomSupport(string $key, $value): IPostTypeSupportsInterface;
}

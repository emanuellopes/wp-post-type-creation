<?php

namespace emanuellopes\WpPostType\Contracts;

interface IPostTypeInterface
{
    public function slug(string $slug): IPostTypeInterface;

    public function args(IPostTypeArgsInterface $postTypeArgs): IPostTypeInterface;

    public function labels(IPostTypeLabelInterface $postTypeLabel): IPostTypeInterface;

    public function register(int $priority = 10): void;
}

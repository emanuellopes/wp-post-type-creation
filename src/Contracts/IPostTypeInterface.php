<?php

namespace emanuellopes\WpPostType\Contracts;

interface IPostTypeInterface
{
    public function slug(string $slug): IPostTypeInterface;

    public function labels(string $singular, string $plural): IPostTypeLabel;

    public function register(int $priority = 10): void;
}

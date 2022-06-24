<?php

namespace emanuellopes\WpPostType\Contracts;

interface IPostTypeArgsInterface extends IPostTypeBaseInterface
{
    public function description(string $text): IPostTypeArgsInterface;

    public function public(bool $isPublic): IPostTypeArgsInterface;

    public function hierarchical(bool $hierarchical): IPostTypeArgsInterface;

    public function excludeFromSearch(bool $exclude): IPostTypeArgsInterface;

    public function publiclyQueryable(bool $queryable): IPostTypeArgsInterface;

    public function showUi(bool $show): IPostTypeArgsInterface;

    public function showInMenu(bool $show): IPostTypeArgsInterface;

    public function showInNavMenus(bool $show): IPostTypeArgsInterface;

    public function showInAdminBar(bool $show): IPostTypeArgsInterface;

    public function showInRest(bool $show): IPostTypeArgsInterface;

    public function restBase(string $restBase): IPostTypeArgsInterface;

    public function restNamespace(string $restNamespace): IPostTypeArgsInterface;

    public function restControllerClass(string $restControllerClass): IPostTypeArgsInterface;

    public function menuPosition(int $position): IPostTypeArgsInterface;

    public function menuIcon(string $icon): IPostTypeArgsInterface;

    /**
     * @param  array| string  $capability
     *
     * @return IPostTypeArgsInterface
     */
    public function capabilityType($capability): IPostTypeArgsInterface;

    /**
     * @param  string[]  $capabilities
     *
     * @return IPostTypeArgsInterface
     */
    public function capabilities(array $capabilities): IPostTypeArgsInterface;

    /**
     * @description Whether to use the internal default meta capability handling
     *
     * @param  bool  $useMetaCap
     *
     * @return IPostTypeArgsInterface
     */
    public function mapMetaCap(bool $useMetaCap): IPostTypeArgsInterface;

    public function supports(): IPostTypeSupportsInterface;

    public function registerMetaBoxCb(callable $call): IPostTypeArgsInterface;

    /**
     * @param  string[]  $taxonomies
     *
     * @return IPostTypeArgsInterface
     */
    public function taxonomies(array $taxonomies): IPostTypeArgsInterface;

    /**
     * @description Whether there should be post type archives, or if a string,
     * the archive slug to use. Will generate the proper rewrite rules if $rewrite is enabled.
     *
     * @param  bool|string  $archive
     *
     * @return IPostTypeArgsInterface
     */
    public function hasArchive($archive): IPostTypeArgsInterface;

    /**
     * @param  bool|array  $rewrite
     *
     * @return IPostTypeArgsInterface
     */
    public function rewrite($rewrite): IPostTypeArgsInterface;

    /**
     * @param  bool|string  $name
     *
     * @return IPostTypeArgsInterface
     */
    public function queryVar($name): IPostTypeArgsInterface;

    public function canExport(bool $export): IPostTypeArgsInterface;

    public function deleteWithUser(bool $delete): IPostTypeArgsInterface;

    public function template(array $template): IPostTypeArgsInterface;

    /**
     * @param  string|false  $lock
     *
     * @return IPostTypeArgsInterface
     */
    public function templateLock($lock): IPostTypeArgsInterface;

    public function _builtin(bool $internal): IPostTypeArgsInterface;

    public function _editLink(string $link): IPostTypeArgsInterface;

    public function hideGutenberg(): IPostTypeArgsInterface;
}

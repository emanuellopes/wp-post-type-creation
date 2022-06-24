<?php

namespace emanuellopes\WpPostType;

use emanuellopes\WpPostType\Contracts\IPostTypeArgsInterface;
use emanuellopes\WpPostType\Contracts\IPostTypeSupportsInterface;

class PostTypeArgs implements IPostTypeArgsInterface
{
    private array $args = array();

    public static function create(): IPostTypeArgsInterface
    {
        return new self();
    }

    public function description(string $text): IPostTypeArgsInterface
    {
        $this->args['description'] = $text;

        return $this;
    }

    public function public(bool $isPublic): IPostTypeArgsInterface
    {
        $this->args['public'] = $isPublic;

        return $this;
    }

    /**
     * @param  bool  $hierarchical
     *
     * @return IPostTypeArgsInterface
     */
    public function hierarchical(bool $hierarchical): IPostTypeArgsInterface
    {
        $this->args['hierarchical'] = $hierarchical;

        return $this;
    }

    /**
     * @param  bool  $exclude
     *
     * @return IPostTypeArgsInterface
     */
    public function excludeFromSearch(bool $exclude): IPostTypeArgsInterface
    {
        $this->args['exclude_from_search'] = $exclude;

        return $this;
    }

    /**
     * @param  bool  $queryable
     *
     * @return IPostTypeArgsInterface
     */
    public function publiclyQueryable(bool $queryable): IPostTypeArgsInterface
    {
        $this->args['publicly_queryable'] = $queryable;

        return $this;
    }

    /**
     * @param  bool  $show
     *
     * @return IPostTypeArgsInterface
     */
    public function showUi(bool $show): IPostTypeArgsInterface
    {
        $this->args['show_ui'] = $show;

        return $this;
    }

    /**
     * @param  bool  $show
     *
     * @return IPostTypeArgsInterface
     */
    public function showInMenu(bool $show): IPostTypeArgsInterface
    {
        $this->args['show_in_menu'] = $show;

        return $this;
    }

    /**
     * @param  bool  $show
     *
     * @return IPostTypeArgsInterface
     */
    public function showInNavMenus(bool $show): IPostTypeArgsInterface
    {
        $this->args['show_in_nav_menus'] = $show;

        return $this;
    }

    /**
     * @param  bool  $show
     *
     * @return IPostTypeArgsInterface
     */
    public function showInAdminBar(bool $show): IPostTypeArgsInterface
    {
        $this->args['show_in_admin_bar'] = $show;

        return $this;
    }

    /**
     * @param  bool  $show
     *
     * @return IPostTypeArgsInterface
     */
    public function showInRest(bool $show): IPostTypeArgsInterface
    {
        $this->args['show_in_rest'] = $show;

        return $this;
    }

    /**
     * @param  string  $restBase
     *
     * @return IPostTypeArgsInterface
     */
    public function restBase(string $restBase): IPostTypeArgsInterface
    {
        $this->args['rest_base'] = $restBase;

        return $this;
    }

    /**
     * @param  string  $restNamespace
     *
     * @return IPostTypeArgsInterface
     */
    public function restNamespace(string $restNamespace): IPostTypeArgsInterface
    {
        $this->args['rest_namespace'] = $restNamespace;

        return $this;
    }

    /**
     * @param  string  $restControllerClass
     *
     * @return IPostTypeArgsInterface
     */
    public function restControllerClass(string $restControllerClass): IPostTypeArgsInterface
    {
        $this->args['rest_controller_class'] = $restControllerClass;

        return $this;
    }

    /**
     * @param  int  $position
     *
     * @return IPostTypeArgsInterface
     */
    public function menuPosition(int $position): IPostTypeArgsInterface
    {
        $this->args['menu_position'] = $position;

        return $this;
    }

    /**
     * @param  string  $icon
     *
     * @return IPostTypeArgsInterface
     */
    public function menuIcon(string $icon): IPostTypeArgsInterface
    {
        $this->args['menu_icon'] = $icon;

        return $this;
    }

    /**
     * @param  string|array  $capability
     *
     * @return IPostTypeArgsInterface
     */
    public function capabilityType($capability): IPostTypeArgsInterface
    {
        $this->args['capability_type'] = $capability;

        return $this;
    }

    /**
     * @param  array  $capabilities
     *
     * @return IPostTypeArgsInterface
     */
    public function capabilities(array $capabilities): IPostTypeArgsInterface
    {
        $this->args['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * @param  bool  $useMetaCap
     *
     * @return IPostTypeArgsInterface
     */
    public function mapMetaCap(bool $useMetaCap): IPostTypeArgsInterface
    {
        $this->args['map_meta_cap'] = $useMetaCap;

        return $this;
    }

    /**
     * @param  IPostTypeSupportsInterface  $support
     *
     * @return IPostTypeArgsInterface
     */
    public function supports(IPostTypeSupportsInterface $support): IPostTypeArgsInterface
    {
        $this->args['supports'] = $support->build();

        return $this;
    }

    /**
     * @param  callable  $call
     *
     * @return IPostTypeArgsInterface
     */
    public function registerMetaBoxCb(callable $call): IPostTypeArgsInterface
    {
        $this->args['register_meta_box_cb'] = $call;

        return $this;
    }

    /**
     * @param  array  $taxonomies
     *
     * @return IPostTypeArgsInterface
     */
    public function taxonomies(array $taxonomies): IPostTypeArgsInterface
    {
        $this->args['taxonomies'] = $taxonomies;

        return $this;
    }

    /**
     * @param  bool|string  $archive
     *
     * @return IPostTypeArgsInterface
     */
    public function hasArchive($archive): IPostTypeArgsInterface
    {
        $this->args['has_archive'] = $archive;

        return $this;
    }

    /**
     * @param  bool|array  $rewrite
     *
     * array('slug' => 'books', 'with_front' => true, 'feeds' => true, 'pages' => true, 'ep_mask' => EP_PERMALINK)
     *
     * @return IPostTypeArgsInterface
     */
    public function rewrite($rewrite): IPostTypeArgsInterface
    {
        $this->args['rewrite'] = $rewrite;

        return $this;
    }

    /**
     * @param  bool|string  $name
     *
     * @return IPostTypeArgsInterface
     */
    public function queryVar($name): IPostTypeArgsInterface
    {
        $this->args['query_var'] = $name;

        return $this;
    }

    /**
     * @param  bool  $export
     *
     * @return IPostTypeArgsInterface
     */
    public function canExport(bool $export): IPostTypeArgsInterface
    {
        $this->args['can_export'] = $export;

        return $this;
    }

    /**
     * @param  bool  $delete
     *
     * @return IPostTypeArgsInterface
     */
    public function deleteWithUser(bool $delete): IPostTypeArgsInterface
    {
        $this->args['delete_with_user'] = $delete;

        return $this;
    }

    /**
     * @param  array  $template
     *
     * @return IPostTypeArgsInterface
     */
    public function template(array $template): IPostTypeArgsInterface
    {
        $this->args['template'] = $template;

        return $this;
    }

    /**
     * @param  string|false  $lock
     *
     * @return IPostTypeArgsInterface
     */
    public function templateLock($lock): IPostTypeArgsInterface
    {
        $this->args['template_lock'] = $lock;

        return $this;
    }

    /**
     * @param  bool  $internal
     *
     * @return IPostTypeArgsInterface
     */
    public function _builtin(bool $internal): IPostTypeArgsInterface
    {
        $this->args['_builtin'] = $internal;

        return $this;
    }

    /**
     * @param  string  $link
     *
     * @return IPostTypeArgsInterface
     */
    public function _editLink(string $link): IPostTypeArgsInterface
    {
        $this->args['_edit_link'] = $link;

        return $this;
    }

    public function build(): array
    {
        return $this->args;
    }

    /**
     * @return IPostTypeArgsInterface
     */
    public function hideGutenberg(): IPostTypeArgsInterface
    {
        $this->showInRest(false);

        return $this;
    }

    /**
     * @return IPostTypeArgsInterface
     */
    public function addTitleSupport(): IPostTypeArgsInterface
    {
        $this->args['supports'][] = 'title';

        return $this;
    }

    /**
     * @return IPostTypeArgsInterface
     */
    public function addEditorSupport(): IPostTypeArgsInterface
    {
        $this->args['supports'][] = 'editor';

        return $this;
    }
}

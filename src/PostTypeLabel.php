<?php

namespace emanuellopes\WpPostType;

use emanuellopes\WpPostType\Contracts\IPostTypeLabelInterface;

class PostTypeLabel implements IPostTypeLabelInterface
{
    private array $labels;

    public static function create(string $singular, string $plural): IPostTypeLabelInterface
    {
        return new self($singular, $plural);
    }

    public function __construct(string $singular, string $plural)
    {
        $this->labels = $this->getDefaultLabels($singular, $plural);
    }

    /**
     * Return the default labels for CPT
     *
     * @param  string  $singular
     * @param  string  $plural
     *
     * @return array
     */
    private function getDefaultLabels(string $singular, string $plural): array
    {
        return array(
            'name' => $plural,
            'singular_name' => $singular,
            'add_new_item' => sprintf('Add New %s', $singular),
            'edit_item' => sprintf('Edit %s', $singular),
            'new_item' => sprintf('New %s', $singular),
            'view_item' => sprintf('View %s', $singular),
            'view_items' => sprintf('View %s', $plural),
            'search_items' => sprintf('Search %s', $plural),
            'not_found' => sprintf('No %s found', $plural),
            'not_found_in_trash' => sprintf('No %s found in Trash', $plural),
            'parent_item_colon' => sprintf('Parent %s:', $singular),
            'all_items' => sprintf('All %s', $plural),
            'archives' => sprintf('%s Archives', $singular),
            'attributes' => sprintf('%s Attributes', $singular),
            'insert_into_item' => sprintf(
                'Insert into %s',
                strtolower($singular)
            ),
            'uploaded_to_this_item' => sprintf(
                'Uploaded to this %s',
                strtolower($singular)
            ),
            'filter_items_list' => sprintf(
                'Filter %s list',
                strtolower($plural)
            ),
            'items_list_navigation' => sprintf('%s list navigation', $plural),
            'items_list' => sprintf('%s list', $plural),
        );
    }

    public function name(string $text): IPostTypeLabelInterface
    {
        $this->labels['name'] = $text;

        return $this;
    }

    public function singularName(string $text): IPostTypeLabelInterface
    {
        $this->labels['singular_name'] = $text;

        return $this;
    }

    public function addNew(string $text): IPostTypeLabelInterface
    {
        $this->labels['add_new'] = $text;

        return $this;
    }

    public function addNewItem(string $text): IPostTypeLabelInterface
    {
        $this->labels['add_new_item'] = $text;

        return $this;
    }

    public function editItem(string $text): IPostTypeLabelInterface
    {
        $this->labels['edit_item'] = $text;

        return $this;
    }

    public function newItem(string $text): IPostTypeLabelInterface
    {
        $this->labels['new_item'] = $text;

        return $this;
    }

    public function viewItem(string $text): IPostTypeLabelInterface
    {
        $this->labels['view_item'] = $text;

        return $this;
    }

    public function viewItems(string $text): IPostTypeLabelInterface
    {
        $this->labels['view_items'] = $text;

        return $this;
    }

    public function searchItems(string $text): IPostTypeLabelInterface
    {
        $this->labels['search_items'] = $text;

        return $this;
    }

    public function notFound(string $text): IPostTypeLabelInterface
    {
        $this->labels['not_found'] = $text;

        return $this;
    }

    public function notFoundInTrash(string $text): IPostTypeLabelInterface
    {
        $this->labels['not_found_in_trash'] = $text;

        return $this;
    }

    public function parentItemColon(string $text): IPostTypeLabelInterface
    {
        $this->labels['parent_item_colon'] = $text;

        return $this;
    }

    public function allItems(string $text): IPostTypeLabelInterface
    {
        $this->labels['all_items'] = $text;

        return $this;
    }

    public function archives(string $text): IPostTypeLabelInterface
    {
        $this->labels['archives'] = $text;

        return $this;
    }

    public function attributes(string $text): IPostTypeLabelInterface
    {
        $this->labels['attributes'] = $text;

        return $this;
    }

    public function insertIntoItem(string $text): IPostTypeLabelInterface
    {
        $this->labels['insert_into_item'] = $text;

        return $this;
    }

    public function uploadedToThisItem(string $text): IPostTypeLabelInterface
    {
        $this->labels['uploaded_to_this_item'] = $text;

        return $this;
    }

    public function featuredImage(string $text): IPostTypeLabelInterface
    {
        $this->labels['featured_image'] = $text;

        return $this;
    }

    public function setFeaturedImage(string $text): IPostTypeLabelInterface
    {
        $this->labels['set_featured_image'] = $text;

        return $this;
    }

    public function removeFeaturedImage(string $text): IPostTypeLabelInterface
    {
        $this->labels['remove_featured_image'] = $text;

        return $this;
    }

    public function useFeaturedImage(string $text): IPostTypeLabelInterface
    {
        $this->labels['use_featured_image'] = $text;

        return $this;
    }

    public function menuName(string $text): IPostTypeLabelInterface
    {
        $this->labels['menu_name'] = $text;

        return $this;
    }

    public function filterItemsList(string $text): IPostTypeLabelInterface
    {
        $this->labels['filter_items_list'] = $text;

        return $this;
    }

    public function filterByDate(string $text): IPostTypeLabelInterface
    {
        $this->labels['filter_by_date'] = $text;

        return $this;
    }

    public function itemsListNavigation(string $text): IPostTypeLabelInterface
    {
        $this->labels['items_list_navigation'] = $text;

        return $this;
    }

    public function itemsList(string $text): IPostTypeLabelInterface
    {
        $this->labels['items_list'] = $text;

        return $this;
    }

    public function itemPublished(string $text): IPostTypeLabelInterface
    {
        $this->labels['item_published'] = $text;

        return $this;
    }

    public function itemPublishedPrivately(string $text): IPostTypeLabelInterface
    {
        $this->labels['item_published_privately'] = $text;

        return $this;
    }

    public function itemRevertedToDraft(string $text): IPostTypeLabelInterface
    {
        $this->labels['item_reverted_to_draft'] = $text;

        return $this;
    }

    public function itemScheduled(string $text): IPostTypeLabelInterface
    {
        $this->labels['item_scheduled'] = $text;

        return $this;
    }

    public function itemUpdated(string $text): IPostTypeLabelInterface
    {
        $this->labels['item_updated'] = $text;

        return $this;
    }

    public function itemLink(string $text): IPostTypeLabelInterface
    {
        $this->labels['item_link'] = $text;

        return $this;
    }

    public function itemLinkDescription(string $text): IPostTypeLabelInterface
    {
        $this->labels['item_link_description'] = $text;

        return $this;
    }

    public function build(): array
    {
        return $this->labels;
    }
}

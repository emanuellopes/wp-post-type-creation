<?php

namespace emanuellopes\WpPostType\Contracts;

interface IPostTypeLabel
{
    public function name(string $text): IPostTypeLabel;

    public function singularName(string $text): IPostTypeLabel;

    public function addNew(string $text): IPostTypeLabel;

    public function addNewItem(string $text): IPostTypeLabel;

    public function editItem(string $text): IPostTypeLabel;

    public function newItem(string $text): IPostTypeLabel;

    public function viewItem(string $text): IPostTypeLabel;

    public function viewItems(string $text): IPostTypeLabel;

    public function searchItems(string $text): IPostTypeLabel;

    public function notFound(string $text): IPostTypeLabel;

    public function notFoundInTrash(string $text): IPostTypeLabel;

    public function parentItemColon(string $text): IPostTypeLabel;

    public function allItems(string $text): IPostTypeLabel;

    public function archives(string $text): IPostTypeLabel;

    public function attributes(string $text): IPostTypeLabel;

    public function insertIntoItem(string $text): IPostTypeLabel;

    public function uploadedToThisItem(string $text): IPostTypeLabel;

    public function featuredImage(string $text): IPostTypeLabel;

    public function setFeaturedImage(string $text): IPostTypeLabel;

    public function removeFeaturedImage(string $text): IPostTypeLabel;

    public function useFeaturedImage(string $text): IPostTypeLabel;

    public function menuName(string $text): IPostTypeLabel;

    public function filterItemsList(string $text): IPostTypeLabel;

    public function filterByDate(string $text): IPostTypeLabel;

    public function itemsListNavigation(string $text): IPostTypeLabel;

    public function itemsList(string $text): IPostTypeLabel;

    public function itemPublished(string $text): IPostTypeLabel;

    public function itemPublishedPrivately(string $text): IPostTypeLabel;

    public function itemRevertedToDraft(string $text): IPostTypeLabel;

    public function itemScheduled(string $text): IPostTypeLabel;

    public function itemUpdated(string $text): IPostTypeLabel;

    public function itemLink(string $text): IPostTypeLabel;

    public function itemLinkDescription(string $text): IPostTypeLabel;
}

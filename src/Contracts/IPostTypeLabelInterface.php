<?php

namespace emanuellopes\WpPostType\Contracts;

interface IPostTypeLabelInterface extends IPostTypeBaseInterface
{
    public function name(string $text): IPostTypeLabelInterface;

    public function singularName(string $text): IPostTypeLabelInterface;

    public function addNew(string $text): IPostTypeLabelInterface;

    public function addNewItem(string $text): IPostTypeLabelInterface;

    public function editItem(string $text): IPostTypeLabelInterface;

    public function newItem(string $text): IPostTypeLabelInterface;

    public function viewItem(string $text): IPostTypeLabelInterface;

    public function viewItems(string $text): IPostTypeLabelInterface;

    public function searchItems(string $text): IPostTypeLabelInterface;

    public function notFound(string $text): IPostTypeLabelInterface;

    public function notFoundInTrash(string $text): IPostTypeLabelInterface;

    public function parentItemColon(string $text): IPostTypeLabelInterface;

    public function allItems(string $text): IPostTypeLabelInterface;

    public function archives(string $text): IPostTypeLabelInterface;

    public function attributes(string $text): IPostTypeLabelInterface;

    public function insertIntoItem(string $text): IPostTypeLabelInterface;

    public function uploadedToThisItem(string $text): IPostTypeLabelInterface;

    public function featuredImage(string $text): IPostTypeLabelInterface;

    public function setFeaturedImage(string $text): IPostTypeLabelInterface;

    public function removeFeaturedImage(string $text): IPostTypeLabelInterface;

    public function useFeaturedImage(string $text): IPostTypeLabelInterface;

    public function menuName(string $text): IPostTypeLabelInterface;

    public function filterItemsList(string $text): IPostTypeLabelInterface;

    public function filterByDate(string $text): IPostTypeLabelInterface;

    public function itemsListNavigation(string $text): IPostTypeLabelInterface;

    public function itemsList(string $text): IPostTypeLabelInterface;

    public function itemPublished(string $text): IPostTypeLabelInterface;

    public function itemPublishedPrivately(string $text): IPostTypeLabelInterface;

    public function itemRevertedToDraft(string $text): IPostTypeLabelInterface;

    public function itemScheduled(string $text): IPostTypeLabelInterface;

    public function itemUpdated(string $text): IPostTypeLabelInterface;

    public function itemLink(string $text): IPostTypeLabelInterface;

    public function itemLinkDescription(string $text): IPostTypeLabelInterface;
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria;

interface VisitorInterface
{
    public function addFilter(FilterInterface $filter): VisitorInterface;

    public function addSortOrder(SortOrderInterface $sortOrder): VisitorInterface;

    public function setPageSize(int $pageSize): VisitorInterface;

    public function setCurrentPage(int $currentPage): VisitorInterface;
}

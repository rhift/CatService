<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\SortOrder\Map;

use Amyb9\CatService\Prefab5\SearchCriteria\SortOrder\MapInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): MapInterface
    {
        return $this->getSearchCriteriaSortOrderMap()->getArrayCopy();
    }
}

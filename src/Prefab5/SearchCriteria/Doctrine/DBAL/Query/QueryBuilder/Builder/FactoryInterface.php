<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder;

use Amyb9\CatService\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\BuilderInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): BuilderInterface;
}

<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\SearchCriteria\SortOrder;

use Amyb9\CatService\Prefab5\SearchCriteria\SortOrderInterface;

/** @codeCoverageIgnore */
interface MapInterface extends \SeekableIterator, \ArrayAccess, \Serializable, \Countable
{
    /** @param SortOrderInterface ...$sortorders */
    public function __construct(array $sortorders = array(), int $flags = 0);

    public function offsetGet($index): SortOrderInterface;

    /** @param SortOrderInterface $sortorder */
    public function offsetSet($index, $sortorder);

    /** @param SortOrderInterface $sortorder */
    public function append($sortorder);

    public function current(): SortOrderInterface;

    public function getArrayCopy(): MapInterface;

    public function toArray(): array;

    public function hydrate(array $array): MapInterface;
}

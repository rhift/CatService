<?php
declare(strict_types=1);

namespace Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddleware;

use Amyb9\CatService\Prefab5\NewRelic;
use Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddleware;
use Amyb9\CatService\Prefab5\NewRelic\TransactionNameMiddlewareInterface;
use Symfony\Component\DependencyInjection\Container;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function __invoke(Container $container, string $requestedName): TransactionNameMiddlewareInterface
    {
        return (new TransactionNameMiddleware())->setNewRelic(new NewRelic());
    }

    public function create(): TransactionNameMiddlewareInterface
    {
        return clone $this->getNewRelicTransactionNameMiddleware();
    }
}

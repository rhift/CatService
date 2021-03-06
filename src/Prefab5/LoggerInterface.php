<?php
declare(strict_types=1);
namespace Amyb9\CatService\Prefab5;

interface LoggerInterface extends \Psr\Log\LoggerInterface
{
    public function log($level, $message, array $context = []);

    public function setLogFilePath(string $log_file_path) : LoggerInterface;
}

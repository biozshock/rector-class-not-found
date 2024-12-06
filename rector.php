<?php declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Symfony\Set\SymfonySetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    $rectorConfig->sets([
        SymfonySetList::SYMFONY_CODE_QUALITY,
    ]);

    // Adding this fixes the issue, so i assume the problem is there
    $rectorConfig->skip([
        \Rector\Symfony\Symfony26\Rector\MethodCall\RedirectToRouteRector::class
    ]);
};

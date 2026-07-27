<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Yiisoft\CodeStyle\Rector\Rules\RemoveOverrideAttributeRector;

return RectorConfig::configure()
    ->withRules([
        RemoveOverrideAttributeRector::class,
    ]);

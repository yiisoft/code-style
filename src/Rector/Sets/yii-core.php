<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Php74\Rector\Closure\ClosureToArrowFunctionRector;
use Rector\Php81\Rector\FuncCall\NullToStrictStringFuncCallArgRector;
use Rector\Php81\Rector\Property\ReadOnlyPropertyRector;
use Yiisoft\CodeStyle\Rector\Rules\RemoveOverrideAttributeRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rules([
        InlineConstructorDefaultToPropertyRector::class,
        RemoveOverrideAttributeRector::class,
    ]);

    $rectorConfig->skip([
        ClosureToArrowFunctionRector::class,
        ReadOnlyPropertyRector::class,
        NullToStrictStringFuncCallArgRector::class,
    ]);
};

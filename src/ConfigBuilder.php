<?php

declare(strict_types=1);

namespace Yiisoft\CodeStyle;

use PhpCsFixer\Config;
use Yiisoft\CodeStyle\Sets\YiisoftCoreRiskySet;
use Yiisoft\CodeStyle\Sets\YiisoftCoreSet;

final class ConfigBuilder
{
    public static function build(): Config
    {
        $config = (new Config());
        $config->registerCustomRuleSets([
            new YiisoftCoreSet(),
            new YiisoftCoreRiskySet(),
        ]);

        return $config;
    }
}

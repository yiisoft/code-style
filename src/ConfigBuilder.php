<?php

declare(strict_types=1);

namespace Yiisoft\CodeStyle;

use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use Yiisoft\CodeStyle\Sets\YiisoftCoreRiskySet;
use Yiisoft\CodeStyle\Sets\YiisoftCoreSet;

final class ConfigBuilder
{
    public static function build(): ConfigInterface
    {
        return (new Config())
            ->registerCustomRuleSets([
                new YiisoftCoreSet(),
                new YiisoftCoreRiskySet(),
            ]);
    }
}

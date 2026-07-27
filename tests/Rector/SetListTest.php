<?php

declare(strict_types=1);

namespace Yiisoft\CodeStyle\Tests\Rector;

use PHPUnit\Framework\TestCase;
use Rector\Config\RectorConfig;
use Yiisoft\CodeStyle\Rector\SetList;

final class SetListTest extends TestCase
{
    public function testBase(): void
    {
        $this->assertFileExists(SetList::YII_CORE);

        $callable = require SetList::YII_CORE;

        $this->assertIsCallable($callable);

        $callable(new RectorConfig());

        $this->addToAssertionCount(1);
    }
}

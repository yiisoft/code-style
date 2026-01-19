<?php

declare(strict_types=1);

namespace Yiisoft\CodeStyle\Tests;

use PHPUnit\Framework\TestCase;
use Yiisoft\CodeStyle\ConfigBuilder;
use Yiisoft\CodeStyle\Sets\YiisoftCoreRiskySet;
use Yiisoft\CodeStyle\Sets\YiisoftCoreSet;

final class ConfigBuilderTest extends TestCase
{
    public function testBuild(): void
    {
        $config = ConfigBuilder::build();
        $customRuleSets = $config->getCustomRuleSets();

        $this->assertCount(2, $customRuleSets);

        $this->assertInstanceOf(YiisoftCoreSet::class, $customRuleSets[0]);
        $this->assertNotEmpty($customRuleSets[0]->getRules());
        $this->assertNotEmpty($customRuleSets[0]->getDescription());
        $this->assertFalse($customRuleSets[0]->isRisky());

        $this->assertInstanceOf(YiisoftCoreRiskySet::class, $customRuleSets[1]);
        $this->assertNotEmpty($customRuleSets[1]->getRules());
        $this->assertNotEmpty($customRuleSets[1]->getDescription());
        $this->assertTrue($customRuleSets[1]->isRisky());
    }
}

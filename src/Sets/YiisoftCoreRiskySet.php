<?php

declare(strict_types=1);

namespace Yiisoft\CodeStyle\Sets;

use PhpCsFixer\RuleSet\RuleSetDefinitionInterface;

final class YiisoftCoreRiskySet implements RuleSetDefinitionInterface
{
    public function getName(): string
    {
        return '@Yiisoft/Core:risky';
    }

    public function getRules(): array
    {
        return [
            'declare_strict_types' => true,
            'native_function_invocation' => true,
            'native_constant_invocation' => true,
        ];
    }

    public function getDescription(): string
    {
        return 'Rules recommended by ``Yiisoft`` team. Extends ``@PER-CS``';
    }

    public function isRisky(): bool
    {
        return true;
    }
}

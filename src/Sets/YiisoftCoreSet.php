<?php

declare(strict_types=1);

namespace Yiisoft\CodeStyle\Sets;

use PhpCsFixer\RuleSet\RuleSetDefinitionInterface;

final class YiisoftCoreSet implements RuleSetDefinitionInterface
{
    public function getName(): string
    {
        return '@Yiisoft/Core';
    }

    public function getRules(): array
    {
        return [
            '@PER-CS' => true,
            'class_attributes_separation' => ['elements' => ['method' => 'one']],
            'fully_qualified_strict_types' => [
                'import_symbols' => true,
            ],
            'global_namespace_import' => [
                'import_classes' => true,
                'import_constants' => true,
                'import_functions' => true,
            ],
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'curly_brace_block',
                    'extra',
                ],
            ],
            'no_unused_imports' => true,
            'ordered_class_elements' => true,
        ];
    }

    public function getDescription(): string
    {
        return 'Rules recommended by ``Yiisoft`` team. Extends ``@PER-CS``.';
    }

    public function isRisky(): bool
    {
        return false;
    }
}

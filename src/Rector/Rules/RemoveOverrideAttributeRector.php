<?php

declare(strict_types=1);

namespace Yiisoft\CodeStyle\Rector\Rules;

use PhpParser\Node;
use PhpParser\Node\Stmt\ClassMethod;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class RemoveOverrideAttributeRector extends AbstractRector implements DocumentedRuleInterface
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Remove #[Override] attribute from methods',
            [
                new CodeSample(
                    <<<'CODE_SAMPLE'
                    class Child extends Parent
                    {
                        #[Override]
                        public function foo(): void {}
                    }
                    CODE_SAMPLE,
                    <<<'CODE_SAMPLE'
                    class Child extends Parent
                    {
                        public function foo(): void {}
                    }
                    CODE_SAMPLE,
                ),
            ],
        );
    }

    public function getNodeTypes(): array
    {
        return [ClassMethod::class];
    }

    public function refactor(Node $node): ?Node
    {
        if (!$node instanceof ClassMethod) {
            return null;
        }

        $changed = false;
        foreach ($node->attrGroups as $groupKey => $attrGroup) {
            foreach ($attrGroup->attrs as $attrKey => $attr) {
                if ($this->getName($attr->name) === 'Override') {
                    unset($attrGroup->attrs[$attrKey]);
                    $changed = true;
                    break;
                }
            }

            if ($attrGroup->attrs === []) {
                unset($node->attrGroups[$groupKey]);
            }
        }

        if (!$changed) {
            return null;
        }

        $node->attrGroups = array_values($node->attrGroups);

        return $node;
    }
}

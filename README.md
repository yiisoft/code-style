<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://yiisoft.github.io/docs/images/yii_logo.svg" height="100px" alt="Yii">
    </a>
    <h1 align="center">Yii Code Style</h1>
    <br>
</p>

[![Latest Stable Version](https://poser.pugx.org/yiisoft/code-style/v)](https://packagist.org/packages/yiisoft/code-style)
[![Total Downloads](https://poser.pugx.org/yiisoft/code-style/downloads)](https://packagist.org/packages/yiisoft/code-style)
[![Build status](https://github.com/yiisoft/code-style/actions/workflows/build.yml/badge.svg?branch=master)](https://github.com/yiisoft/code-style/actions/workflows/build.yml?query=branch%3Amaster)
[![Code Coverage](https://codecov.io/gh/yiisoft/code-style/branch/master/graph/badge.svg)](https://codecov.io/gh/yiisoft/code-style)
[![Static analysis](https://github.com/yiisoft/code-style/actions/workflows/static.yml/badge.svg?branch=master)](https://github.com/yiisoft/code-style/actions/workflows/static.yml?query=branch%3Amaster)
[![type-coverage](https://shepherd.dev/github/yiisoft/code-style/coverage.svg)](https://shepherd.dev/github/yiisoft/code-style)
[![psalm-level](https://shepherd.dev/github/yiisoft/code-style/level.svg)](https://shepherd.dev/github/yiisoft/code-style)

Package for code style control. Contains rule sets for [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer).

## Requirements

- PHP 8.1 or higher.

## Installation

The package could be installed with [Composer](https://getcomposer.org):

```shell
composer require --dev yiisoft/code-style
```

## General usage

The package contains the following sets of rules:

1. `@Yiisoft/Core`
2. `@Yiisoft/Core:risky`

An example configuration using these rule sets:

```php
<?php

declare(strict_types=1);

use PhpCsFixer\Finder;
use Yiisoft\CodeStyle\ConfigBuilder;

$finder = (new Finder())->in([
    __DIR__ . '/src',
    __DIR__ . '/tests',
]);

return ConfigBuilder::build()
    ->setRiskyAllowed(true)
    ->setRules([
        '@Yiisoft/Core' => true,
        '@Yiisoft/Core:risky' => true,
    ])
    ->setFinder($finder);

```

## Documentation

- [Internals](docs/internals.md)

If you need help or have a question, the [Yii Forum](https://forum.yiiframework.com/c/yii-3-0/63) is a good place
for that. You may also check out other [Yii Community Resources](https://www.yiiframework.com/community).

## License

The Yii Code Style is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Software](https://www.yiiframework.com/).

## Support the project

[![Open Collective](https://img.shields.io/badge/Open%20Collective-sponsor-7eadf1?logo=open%20collective&logoColor=7eadf1&labelColor=555555)](https://opencollective.com/yiisoft)

## Follow updates

[![Official website](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Twitter](https://img.shields.io/badge/twitter-follow-1DA1F2?logo=twitter&logoColor=1DA1F2&labelColor=555555?style=flat)](https://twitter.com/yiiframework)
[![Telegram](https://img.shields.io/badge/telegram-join-1DA1F2?style=flat&logo=telegram)](https://t.me/yii3en)
[![Facebook](https://img.shields.io/badge/facebook-join-1DA1F2?style=flat&logo=facebook&logoColor=ffffff)](https://www.facebook.com/groups/yiitalk)
[![Slack](https://img.shields.io/badge/slack-join-1DA1F2?style=flat&logo=slack)](https://yiiframework.com/go/slack)

## Credits

The package is inspired by [spiral/code-style](https://github.com/spiral/code-style) repository.

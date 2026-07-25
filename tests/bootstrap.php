<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

/**
 * Force Rector's bundled nikic/php-parser to be loaded once, before any code coverage
 * driver (PCOV/Xdebug) starts instrumenting. Doing this lazily inside the first
 * AbstractRectorTestCase::setUp() call, while coverage instrumentation is already active,
 * makes the require/require_once chain in preload.php unreliable and can trigger
 * "Cannot (re)declare class PhpParser\Node\UseItem".
 */
$rectorPreloadFile = __DIR__ . '/../vendor/rector/rector/preload.php';
if (file_exists($rectorPreloadFile)) {
    require_once $rectorPreloadFile;
}

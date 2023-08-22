<?php

declare(strict_types=1);

$customFixersBootstrap = __DIR__.'/../../kubawerlos/php-cs-fixer-custom-fixers/bootstrap.php';
if (is_readable($customFixersBootstrap)) {
    require $customFixersBootstrap;
}

spl_autoload_register(function (string $class): void {
    if (0 !== strncmp($class, 'Tpay\\CodingStandards\\', 21)) {
        return;
    }

    require __DIR__.'/src/'.str_replace('\\', '/', substr($class, 21)).'.php';
});

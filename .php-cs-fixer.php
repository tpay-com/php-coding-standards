<?php declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

return Tpay\CodingStandards\PhpCsFixerConfigFactory::createWithAllRules()
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__),
    );

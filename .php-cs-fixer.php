<?php declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

return Tpay\CodingStandards\PhpCsFixerConfig::createWithAllRules()
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->ignoreDotFiles(false)
            ->files()
            ->in(__DIR__),
    );

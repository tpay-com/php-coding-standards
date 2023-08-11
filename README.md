# [Tpay](https://tpay.com)'s PHP coding standards

[![Latest stable version](https://img.shields.io/packagist/v/tpay-com/coding-standards.svg?label=current%20version)](https://packagist.org/packages/tpay-com/coding-standards)
[![PHP version](https://img.shields.io/packagist/php-v/tpay-com/coding-standards.svg)](https://php.net)
[![License](https://img.shields.io/github/license/tpay-com/coding-standards.svg)](LICENSE)
[![CI status](https://github.com/tpay-com/php-coding-standards/actions/workflows/ci.yaml/badge.svg?branch=main)](https://github.com/tpay-com/php-coding-standards/actions)


## Installation
Run command:
```console
composer require --dev tpay-com/coding-standards
```


## Usage
Create `.php-cs-fixer.php` file and use `Tpay\CodingStandards\PhpCsFixerConfigFactory`:
```php
<?php
return Tpay\CodingStandards\PhpCsFixerConfigFactory::createWithAllRules()
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->ignoreDotFiles(false)
            ->files()
            ->in(__DIR__)
    );
```

Instead of `createWithAllRules` you can use method `createWithNonRiskyRules` to use only non-risky fixers.

Use method `createWithLegacyRules` to use only set of fixers that is safe down to PHP 5.6.

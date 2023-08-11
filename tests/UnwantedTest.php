<?php declare(strict_types=1);

namespace Tpay\CodingStandards\Tests;

use PHPUnit\Framework\TestCase;
use Tpay\CodingStandards\PhpCsFixerConfig;

/**
 * @internal
 *
 * @covers \Tpay\CodingStandards\Unwanted
 */
final class UnwantedTest extends TestCase
{
    public function testCreateWithAllRules(): void
    {
        $rules = PhpCsFixerConfig::createWithAllRules()->getRules();

        self::assertFalse($rules['php_unit_size_class']);
    }

    public function testCreateWithNonRiskyRules(): void
    {
        $rules = PhpCsFixerConfig::createWithNonRiskyRules()->getRules();

        self::assertFalse($rules['php_unit_size_class']);
    }

    public function testCreateWithLegacyRules(): void
    {
        $rules = PhpCsFixerConfig::createWithLegacyRules()->getRules();

        self::assertFalse($rules['php_unit_size_class']);
    }
}

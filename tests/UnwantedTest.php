<?php declare(strict_types=1);

namespace Tpay\CodingStandards\Tests;

use PHPUnit\Framework\TestCase;
use Tpay\CodingStandards\PhpCsFixerConfigFactory;

/**
 * @internal
 *
 * @covers \Tpay\CodingStandards\Unwanted
 */
final class UnwantedTest extends TestCase
{
    public function testCreateWithAllRules(): void
    {
        $rules = PhpCsFixerConfigFactory::createWithAllRules()->getRules();

        self::assertFalse($rules['php_unit_size_class']);
    }

    public function testCreateWithNonRiskyRules(): void
    {
        $rules = PhpCsFixerConfigFactory::createWithNonRiskyRules()->getRules();

        self::assertFalse($rules['php_unit_size_class']);
    }

    public function testCreateWithLegacyRules(): void
    {
        $rules = PhpCsFixerConfigFactory::createWithLegacyRules()->getRules();

        self::assertFalse($rules['php_unit_size_class']);
    }
}

<?php declare(strict_types=1);

namespace Tpay\CodingStandards\Tests;

use PHPUnit\Framework\TestCase;
use Tpay\CodingStandards\PhpCsFixerConfig;

/**
 * @internal
 *
 * @covers \Tpay\CodingStandards\NonDefaultConfig
 */
final class NonDefaultConfigTest extends TestCase
{
    public function testCreateWithAllRules(): void
    {
        $rules = PhpCsFixerConfig::createWithAllRules()->getRules();

        self::assertSame(['header' => ''], $rules['header_comment']);
    }

    public function testCreateWithNonRiskyRules(): void
    {
        $rules = PhpCsFixerConfig::createWithNonRiskyRules()->getRules();

        self::assertSame(['header' => ''], $rules['header_comment']);
    }

    public function testCreateWithLegacyRules(): void
    {
        $rules = PhpCsFixerConfig::createWithLegacyRules()->getRules();

        self::assertSame(['header' => ''], $rules['header_comment']);
    }
}

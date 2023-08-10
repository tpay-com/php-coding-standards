<?php declare(strict_types=1);

namespace Tpay\CodingStandards\Tests;

use PHPUnit\Framework\TestCase;
use Tpay\CodingStandards\PhpCsFixerConfig;

/**
 * @internal
 *
 * @covers \Tpay\CodingStandards\Legacy
 */
final class LegacyTest extends TestCase
{
    public function testCreateWithAllRules(): void
    {
        $rules = PhpCsFixerConfig::createWithAllRules()->getRules();

        self::assertTrue($rules['visibility_required']);
    }

    public function testCreateWithNonRiskyRules(): void
    {
        $rules = PhpCsFixerConfig::createWithNonRiskyRules()->getRules();

        self::assertTrue($rules['visibility_required']);
    }

    public function testCreateWithLegacyRules(): void
    {
        $rules = PhpCsFixerConfig::createWithLegacyRules()->getRules();

        self::assertSame(['elements' => ['method']], $rules['visibility_required']);
    }
}

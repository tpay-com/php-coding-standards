<?php declare(strict_types=1);

namespace Tpay\CodingStandards\Tests;

use PhpCsFixer\Fixer\DeprecatedFixerInterface;
use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\RuleSet\RuleSet;
use PhpCsFixerCustomFixers\Fixers as CustomFixers;
use PHPUnit\Framework\TestCase;
use Tpay\CodingStandards\Legacy;
use Tpay\CodingStandards\NonDefaultConfig;
use Tpay\CodingStandards\PhpCsFixerConfig;

/**
 * @internal
 *
 * @covers \Tpay\CodingStandards\PhpCsFixerConfig
 */
final class PhpCsFixerConfigTest extends TestCase
{
    public function testNoDeprecatedFixersAreReturned(): void
    {
        self::assertNoDeprecatedRules(PhpCsFixerConfig::createWithAllRules()->getRules());
        self::assertNoDeprecatedRules(PhpCsFixerConfig::createWithNonRiskyRules()->getRules());
        self::assertNoDeprecatedRules(PhpCsFixerConfig::createWithLegacyRules()->getRules());
    }

    public function testUnwantedRulesAreNotInNonDefaultConfig(): void
    {
        $rules = PhpCsFixerConfig::createWithAllRules()->getRules();
        foreach ($rules as $name => $config) {
            if (false === $config) { // if rules is unwanted
                // it must not be overridden with non-default config
                self::assertNull(NonDefaultConfig::getNonDefaultConfig($name));
            }
        }
    }

    public function testUnwantedRulesAreNotInLegacy(): void
    {
        $rules = PhpCsFixerConfig::createWithAllRules()->getRules();
        foreach ($rules as $name => $config) {
            if (false === $config) { // if rules is unwanted
                // it must not be overridden from legacy config
                self::assertNull(Legacy::getLegacyConfig($name));
            }
        }
    }

    private static function assertNoDeprecatedRules(array $rules): void
    {
        $fixers = (new FixerFactory())
            ->registerBuiltInFixers()
            ->registerCustomFixers(new CustomFixers())
            ->useRuleSet(new RuleSet($rules))
            ->getFixers();

        self::assertSame(
            [],
            array_filter(
                $fixers,
                static fn (FixerInterface $fixer): bool => $fixer instanceof DeprecatedFixerInterface,
            ),
        );
    }
}

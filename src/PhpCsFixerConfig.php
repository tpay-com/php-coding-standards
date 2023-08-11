<?php declare(strict_types=1);

namespace Tpay\CodingStandards;

use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Fixer\DeprecatedFixerInterface;
use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\FixerFactory;
use PhpCsFixerCustomFixers\Fixers;

final class PhpCsFixerConfig
{
    private const TYPE_ALL = 0;

    private const TYPE_NON_RISKY = 1;

    private const TYPE_LEGACY = 2;

    public static function createWithAllRules(): ConfigInterface
    {
        return self::create(self::TYPE_ALL);
    }

    public static function createWithNonRiskyRules(): ConfigInterface
    {
        return self::create(self::TYPE_NON_RISKY);
    }

    public static function createWithLegacyRules(): ConfigInterface
    {
        return self::create(self::TYPE_LEGACY);
    }

    private static function create(int $type): ConfigInterface
    {
        $fixers = [
            ...(new FixerFactory())->registerBuiltInFixers()->getFixers(),
            ...(new Fixers()),
        ];

        $rules = [];

        foreach ($fixers as $fixer) {
            if ($fixer instanceof DeprecatedFixerInterface) {
                continue;
            }

            $rules[$fixer->getName()] = self::getConfig($type, $fixer);
        }

        return (new Config())
            ->registerCustomFixers(new Fixers())
            ->setRiskyAllowed(true)
            ->setRules($rules);
    }

    /**
     * @return array<string, mixed>|bool
     */
    private static function getConfig(int $type, FixerInterface $fixer)
    {
        if (Unwanted::isUnwanted($fixer->getName())) {
            return false;
        }

        if (self::TYPE_ALL !== $type && $fixer->isRisky()) {
            return false;
        }

        if (self::TYPE_LEGACY === $type) {
            $legacyConfig = Legacy::getLegacyConfig($fixer->getName());
            if (null !== $legacyConfig) {
                return $legacyConfig;
            }
        }

        $nonDefaultConfig = NonDefaultConfig::getNonDefaultConfig($fixer->getName());
        if (null !== $nonDefaultConfig) {
            return $nonDefaultConfig;
        }

        return true;
    }
}

<?php declare(strict_types=1);

namespace Tpay\CodingStandards;

final class NonDefaultConfig
{
    /**
     * @return null|array<string, mixed>
     */
    public static function getNonDefaultConfig(string $name): ?array
    {
        return [
            'header_comment' => ['header' => ''],
        ][$name] ?? null;
    }
}

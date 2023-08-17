<?php

declare(strict_types=1);

namespace Tpay\CodingStandards;

final class Legacy
{
    /** @return null|array<string, mixed>|false */
    public static function getLegacyConfig(string $name)
    {
        return [
            'ternary_to_null_coalescing' => false,
            'visibility_required' => ['elements' => ['method']],
        ][$name] ?? null;
    }
}

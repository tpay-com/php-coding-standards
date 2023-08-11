<?php declare(strict_types=1);

namespace Tpay\CodingStandards;

final class Legacy
{
    /**
     * @return null|array<string, mixed>
     */
    public static function getLegacyConfig(string $name): ?array
    {
        return [
            'visibility_required' => ['elements' => ['method']],
        ][$name] ?? null;
    }
}

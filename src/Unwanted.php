<?php declare(strict_types=1);

namespace Tpay\CodingStandards;

use PhpCsFixerCustomFixers\Fixer\PhpdocOnlyAllowedAnnotationsFixer;

final class Unwanted
{
    public static function isUnwanted(string $name): bool
    {
        return \in_array(
            $name,
            [
                'group_import',
                'php_unit_size_class',
                PhpdocOnlyAllowedAnnotationsFixer::name(),
            ],
            true,
        );
    }
}

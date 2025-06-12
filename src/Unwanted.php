<?php

declare(strict_types=1);

namespace Tpay\CodingStandards;

use PhpCsFixerCustomFixers\Fixer\ConstructorEmptyBracesFixer;
use PhpCsFixerCustomFixers\Fixer\DeclareAfterOpeningTagFixer;
use PhpCsFixerCustomFixers\Fixer\EmptyFunctionBodyFixer;
use PhpCsFixerCustomFixers\Fixer\NoImportFromGlobalNamespaceFixer;
use PhpCsFixerCustomFixers\Fixer\NoNullableBooleanTypeFixer;
use PhpCsFixerCustomFixers\Fixer\NoReferenceInFunctionDefinitionFixer;
use PhpCsFixerCustomFixers\Fixer\PhpdocOnlyAllowedAnnotationsFixer;
use PhpCsFixerCustomFixers\Fixer\PhpdocTagNoNamedArgumentsFixer;
use PhpCsFixerCustomFixers\Fixer\PhpdocVarAnnotationToAssertFixer;
use PhpCsFixerCustomFixers\Fixer\PromotedConstructorPropertyFixer;
use PhpCsFixerCustomFixers\Fixer\ReadonlyPromotedPropertiesFixer;
use PhpCsFixerCustomFixers\Fixer\TypedClassConstantFixer;

final class Unwanted
{
    public static function isUnwanted(string $name): bool
    {
        return in_array(
            $name,
            [
                'braces',
                'combine_consecutive_issets',
                'combine_consecutive_unsets',
                'date_time_immutable',
                'final_class',
                'general_phpdoc_annotation_remove',
                'group_import',
                'heredoc_indentation',
                'mb_str_functions',
                'no_blank_lines_before_namespace',
                'not_operator_with_space',
                'not_operator_with_successor_space',
                'octal_notation',
                'php_unit_attributes',
                'php_unit_internal_class',
                'php_unit_size_class',
                'php_unit_strict',
                'php_unit_test_class_requires_covers',
                'phpdoc_summary',
                'phpdoc_to_property_type',
                'phpdoc_to_return_type',
                'single_line_comment_spacing',
                'single_line_throw',
                'strict_param',
                'string_implicit_backslashes',
                'void_return',
                ConstructorEmptyBracesFixer::name(),
                DeclareAfterOpeningTagFixer::name(),
                EmptyFunctionBodyFixer::name(),
                NoImportFromGlobalNamespaceFixer::name(),
                NoNullableBooleanTypeFixer::name(),
                NoReferenceInFunctionDefinitionFixer::name(),
                PhpdocOnlyAllowedAnnotationsFixer::name(),
                PhpdocTagNoNamedArgumentsFixer::name(),
                PhpdocVarAnnotationToAssertFixer::name(),
                PromotedConstructorPropertyFixer::name(),
                ReadonlyPromotedPropertiesFixer::name(),
                TypedClassConstantFixer::name(),
            ],
            true,
        );
    }
}

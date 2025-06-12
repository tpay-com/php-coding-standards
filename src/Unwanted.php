<?php

declare(strict_types=1);

namespace Tpay\CodingStandards;

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
                'string_implicit_backslashes',
                'strict_param',
                'void_return',
                'PhpCsFixerCustomFixers/constructor_empty_braces',
                'PhpCsFixerCustomFixers/declare_after_opening_tag',
                'PhpCsFixerCustomFixers/empty_function_body',
                'PhpCsFixerCustomFixers/no_import_from_global_namespace',
                'PhpCsFixerCustomFixers/no_nullable_boolean_type',
                'PhpCsFixerCustomFixers/no_reference_in_function_definition',
                'PhpCsFixerCustomFixers/phpdoc_only_allowed_annotations',
                'PhpCsFixerCustomFixers/phpdoc_var_annotation_to_assert',
                'PhpCsFixerCustomFixers/promoted_constructor_property',
                'PhpCsFixerCustomFixers/readonly_promoted_properties',
                'PhpCsFixerCustomFixers/phpdoc_tag_no_named_arguments',
                'PhpCsFixerCustomFixers/typed_class_constant',
            ],
            true,
        );
    }
}

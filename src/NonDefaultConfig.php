<?php

declare(strict_types=1);

namespace Tpay\CodingStandards;

final class NonDefaultConfig
{
    /** @return null|array<string, mixed> */
    public static function getNonDefaultConfig(string $name): ?array
    {
        return [
            'align_multiline_comment' => ['comment_type' => 'all_multiline'],
            'blank_line_before_statement' => ['statements' => ['return']],
            'class_attributes_separation' => ['elements' => ['const' => 'none', 'method' => 'one', 'property' => 'none', 'trait_import' => 'none']],
            'class_definition' => ['multi_line_extends_each_single_line' => true, 'single_item_single_line' => true, 'space_before_parenthesis' => true],
            'global_namespace_import' => ['import_constants' => false, 'import_functions' => false, 'import_classes' => true],
            'header_comment' => ['header' => ''],
            'increment_style' => ['style' => 'post'],
            'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
            'numeric_literal_separator' => ['strategy' => 'no_separator'],
            'native_constant_invocation' => ['fix_built_in' => false, 'include' => [], 'scope' => 'all', 'strict' => true],
            'native_function_invocation' => ['include' => [], 'scope' => 'all', 'strict' => true],
            'no_extra_blank_lines' => ['tokens' => [
                'attribute',
                'break',
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'switch',
                'throw',
                'use',
            ]],
            'no_superfluous_phpdoc_tags' => ['remove_inheritdoc' => true],
            'ordered_imports' => ['sort_algorithm' => 'alpha', 'imports_order' => ['class', 'function', 'const']],
            'php_unit_data_provider_name' => ['prefix' => 'data', 'suffix' => ''],
            'php_unit_data_provider_static' => ['force' => true],
            'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
            'phpdoc_line_span' => ['const' => 'single', 'method' => 'single', 'property' => 'single'],
            'whitespace_after_comma_in_array' => ['ensure_single_space' => true],
        ][$name] ?? null;
    }
}

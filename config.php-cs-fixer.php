<?php

require_once __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
    ->exclude(['vendor'])
    ->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config
    ->registerCustomFixers(new PhpCsFixerCustomFixers\Fixers())
    ->setRules([
        PhpCsFixerCustomFixers\Fixer\CommentSurroundedBySpacesFixer::name()   => true,
        PhpCsFixerCustomFixers\Fixer\InternalClassCasingFixer::name()         => true,
        PhpCsFixerCustomFixers\Fixer\NoImportFromGlobalNamespaceFixer::name() => true,
        PhpCsFixerCustomFixers\Fixer\MultilinePromotedPropertiesFixer::name() => true,
        '@PSR12'                                                              => true,
        '@PHP80Migration'                                                     => true,
        '@PhpCsFixer'                                                         => true,
        'combine_consecutive_unsets'                                          => true,
        'class_attributes_separation'                                         => [
            'elements' => ['method' => 'one'],
        ],
        'multiline_whitespace_before_semicolons' => true,
        'single_quote'                           => true,
        'operator_linebreak'                     => true,
        'method_chaining_indentation'            => true,
        'binary_operator_spaces'                 => [
            'operators' => [
                '+=' => 'align_single_space_minimal',
                '='  => 'align_single_space_minimal',
                '=>' => 'align_single_space_minimal',
            ],
        ],
        'cast_spaces'               => ['space' => 'single'],
        'concat_space'              => ['spacing' => 'one'],
        'function_typehint_space'   => true,
        'single_line_comment_style' => [
            'comment_types' => ['hash'],
        ],
        'include'                                          => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'native_function_casing'                           => true,
        'native_function_type_declaration_casing'          => true,
        'no_empty_comment'                                 => true,
        'no_empty_phpdoc'                                  => true,
        'no_empty_statement'                               => true,
        'no_leading_namespace_whitespace'                  => true,
        'no_multiline_whitespace_around_double_arrow'      => true,
        'no_short_bool_cast'                               => true,
        'no_spaces_around_offset'                          => true,
        'no_unused_imports'                                => true,
        'object_operator_without_whitespace'               => true,
        'lambda_not_used_import'                           => true,
        'array_indentation'                                => true,
        'array_syntax'                                     => ['syntax' => 'short'],
        'no_whitespace_before_comma_in_array'              => true,
        'whitespace_after_comma_in_array'                  => true,
        'trailing_comma_in_multiline'                      => [
            'elements' => ['arrays'],
        ],
        'no_trailing_comma_in_singleline_array' => true,
        'trim_array_spaces'                     => true,

        'declare_equal_normalize'      => true,
        'unary_operator_spaces'        => true,
        'simplified_if_return'         => true,
        'combine_consecutive_issets'   => true,
        'single_space_after_construct' => true,
        'blank_line_before_statement'  => [
            'statements' => [
                'if',
                'break',
                'case',
                'continue',
                'declare',
                'default', 'exit',
                'goto',
                'include',
                'include_once',
                'require',
                'require_once',
                'return',
                'switch',
                'throw',
                'try',
            ],
        ],
    ]);

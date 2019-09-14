<?php

declare(strict_types=1);

use NunoMaduro\PhpInsights\Domain\Insights\ForbiddenNormalClasses;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterCastSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterNotSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\DeclareStrictTypesSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSpacingSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\TypeHintDeclarationSniff;

return [
    'preset' => 'symfony',

    /*
    |--------------------------------------------------------------------------
    | Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may adjust all the various `Insights` that will be used by PHP
    | Insights. You can either add, remove or configure `Insights`. Keep in
    | mind, that all added `Insights` must belong to a specific `Metric`.
    |
    */

    'exclude' => [
        'src/Entity/',
        'src/Kernel.php',
    ],
    'add' => [
        //  ExampleMetric::class => [
        //      ExampleInsight::class,
        //  ]
    ],

    'remove' => [
        ForbiddenNormalClasses::class,
        DeclareStrictTypesSniff::class,
        ReturnTypeHintSpacingSniff::class,
        TypeHintDeclarationSniff::class,
        SpaceAfterNotSniff::class,
        SpaceAfterCastSniff::class,
        LineLengthSniff::class,
    ],

    'config' => [
        //  ExampleInsight::class => [
        //      'key' => 'value',
        //  ],
    ],

];

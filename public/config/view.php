<?php
// View configuration supporting multiple engines via drives.
// Defaults to basic PHP templates under `resource/view`.
return [
    // Engine can be: 'php' (default), 'blade', 'bladeone', 'twig'
    'engine' => 'php',

    // Base directory for view files (relative to project root or absolute)
    'view_path' => 'resource/view',

    // Optional cache path for engines that support caching
    'cache_path' => 'storage/cache',

    // Global options (legacy support). Prefer per-engine options below.
    'options' => [
        'debug' => true,
        'auto_reload' => true,
        'cache' => false,
    ],

    // Engine-specific drive mappings. You can override or add new engines here.
    'drives' => [
        'blade' => [
            'class' => '\\Craft\\Drive\\View\\BladeDrive',
            'options' => [
                // 'cache_path' => 'storage/cache/blade',
            ],
        ],
        'bladeone' => [
            'class' => '\\Craft\\Drive\\View\\BladeOneDrive',
            'options' => [
                // 'cache_path' => 'storage/cache/bladeone',
            ],
        ],
        'twig' => [
            'class' => '\\Craft\\Drive\\View\\TwigDrive',
            'options' => [
                // 'cache_path' => 'storage/cache/twig',
            ],
        ],
    ],
];
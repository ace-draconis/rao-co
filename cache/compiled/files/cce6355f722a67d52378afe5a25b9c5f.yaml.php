<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp/www/rao-co/user/plugins/map-quest/blueprints.yaml',
    'modified' => 1549714705,
    'data' => [
        'name' => 'Map Quest',
        'version' => '1.0.7',
        'description' => 'Short code to embed an interactive MapQuest map into a page',
        'icon' => 'map',
        'author' => [
            'name' => 'Richard N Hainsworth',
            'email' => 'rnhainsworth@gmail.com'
        ],
        'homepage' => 'https://github.com/finanalyst/grav-plugin-map-quest',
        'keywords' => 'grav, plugin, mapquest, map',
        'bugs' => 'https://github.com/finanalyst/grav-plugin-map-quest/issues',
        'docs' => 'https://github.com/finanalyst/grav-plugin-map-quest/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'api_key' => [
                    'type' => 'text',
                    'label' => 'API Key',
                    'help' => 'You must register an API key with MapQuest and include it here'
                ]
            ]
        ]
    ]
];

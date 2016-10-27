<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/karllofholm/Dev/apache/yepstr-landing-page/user/themes/blank/blueprints.yaml',
    'modified' => 1477549265,
    'data' => [
        'name' => 'Blank',
        'version' => '0.1.0',
        'description' => 'Yepstr refernce theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Karl Löfholm',
            'email' => 'karl@yepstr.com'
        ],
        'homepage' => 'https://github.com/karl-l-fholm/grav-theme-blank',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/karl-l-fholm/grav-theme-blank/issues',
        'readme' => 'https://github.com/karl-l-fholm/grav-theme-blank/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];

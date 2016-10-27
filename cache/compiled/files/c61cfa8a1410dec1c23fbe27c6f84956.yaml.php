<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/karllofholm/Dev/apache/yepstr-landing-page/user/themes/yepstr/blueprints.yaml',
    'modified' => 1477496562,
    'data' => [
        'name' => 'Yepstr',
        'version' => '0.1.0',
        'description' => 'A theme for yepstr',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Karl Löfholm',
            'email' => 'karl@yepstr.com'
        ],
        'homepage' => 'https://github.com/karl-l-fholm/grav-theme-yepstr',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/karl-l-fholm/grav-theme-yepstr/issues',
        'readme' => 'https://github.com/karl-l-fholm/grav-theme-yepstr/blob/develop/README.md',
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

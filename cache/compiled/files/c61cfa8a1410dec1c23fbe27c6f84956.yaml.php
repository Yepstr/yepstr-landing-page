<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/karllofholm/Dev/apache/yepstr-landing-page/user/themes/yepstr/blueprints.yaml',
    'modified' => 1477316139,
    'data' => [
        'name' => 'Yepstr',
        'version' => '1.0.0',
        'description' => '',
        'icon' => 'y-combinator',
        'author' => [
            'name' => 'Yepstr',
            'email' => 'hej@yepstr.com',
            'url' => 'https://www.yepstr.com'
        ],
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
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

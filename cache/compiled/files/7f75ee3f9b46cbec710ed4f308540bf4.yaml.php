<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/karllofholm/Dev/apache/yepstr-landing-page/user/config/groups.yaml',
    'modified' => 1477386729,
    'data' => [
        'editors' => [
            'icon' => 'users',
            'readableName' => 'Editor Users',
            'description' => 'The group of editors users',
            'access' => [
                'admin' => [
                    'login' => true,
                    'pages' => true,
                    'maintenance' => true,
                    'super' => false
                ],
                'site' => [
                    'login' => true
                ]
            ]
        ]
    ]
];

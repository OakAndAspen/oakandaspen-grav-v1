<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/oakandaspen-grav-v1/user/themes/deliver/blueprints.yaml',
    'modified' => 1569421066,
    'data' => [
        'name' => 'Deliver',
        'version' => '1.7.0',
        'description' => 'Deliver theme is a port of the Michael Reimer\'s Deliver Free PSD theme.',
        'icon' => 'newspaper-o',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-deliver',
        'demo' => 'http://demo.getgrav.org/deliver-skeleton/',
        'keywords' => 'deliver, theme, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-deliver/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'sticky_menu.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Sticky menu',
                    'highlight' => 1,
                    'default' => 0,
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

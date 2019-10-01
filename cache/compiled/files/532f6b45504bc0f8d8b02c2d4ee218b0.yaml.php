<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/localhost/oakandaspen-grav-v1/user/config/site.yaml',
    'modified' => 1569576500,
    'data' => [
        'title' => 'OakAndAspen',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Irina Despot',
            'email' => 'irinadespot@gmail.com',
            'copyright' => 'Copyright 2019 OakAndAspen. All Rights Reserved.'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'OakAndAspen web development'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/another/one/here' => '/blog/sample-3',
            '/new/*' => '/blog/*'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'social' => [
            0 => [
                'url' => 'https://twitter.com/getgrav',
                'icon' => 'twitter'
            ],
            1 => [
                'url' => 'https://www.facebook.com/alerya.despot',
                'icon' => 'facebook'
            ],
            2 => [
                'url' => 'https://www.linkedin.com/in/irina-despot',
                'icon' => 'linkedin'
            ]
        ],
        'contact' => [
            'address' => [
                0 => [
                    'line' => 'Rue de la Madeleine 17'
                ],
                1 => [
                    'line' => '1800 Vevey, VD'
                ],
                2 => [
                    'line' => 'Suisse / Switzerland'
                ]
            ]
        ],
        'othermenu' => [
            0 => [
                'text' => 'About',
                'url' => 'about'
            ],
            1 => [
                'text' => 'Contact',
                'url' => 'contact'
            ]
        ],
        'quicklinks' => [
            0 => [
                'text' => 'Portfolio',
                'url' => 'base_url:portfolio'
            ],
            1 => [
                'text' => 'About',
                'url' => 'base_url:about'
            ],
            2 => [
                'text' => 'Services',
                'url' => 'base_url:services'
            ],
            3 => [
                'text' => 'Archive',
                'url' => 'base_url:archive'
            ],
            4 => [
                'text' => 'Blog',
                'url' => 'base_url:blog'
            ],
            5 => [
                'text' => 'Contact Us',
                'url' => 'base_url:contact'
            ]
        ],
        'header_options' => [
            'arrows' => 'true',
            'autoslide' => 'false',
            'autoslideHoverStop' => 'false',
            'interval' => '2000',
            'loop' => 'false',
            'transition' => 'zoom',
            'itemsForSlide' => '0',
            'touch' => 'true',
            'swipe' => 'true'
        ],
        'footer' => [
            'description' => 'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.',
            'contact_title' => 'Contact Info',
            'links_title' => 'Quick Links',
            'social_title' => 'Find me on',
            'copyright_text' => 'Copyright 2019 OakAndAspen. All Rights Reserved.',
            'feedburner' => ''
        ]
    ]
];

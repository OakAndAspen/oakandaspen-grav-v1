<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/oakandaspen-grav-v1/user/config/site.yaml',
    'modified' => 1569919291,
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
                'url' => 'https://www.facebook.com/alerya.despot',
                'icon' => 'facebook'
            ],
            1 => [
                'url' => 'https://www.linkedin.com/in/irina-despot',
                'icon' => 'linkedin'
            ],
            2 => [
                'url' => 'https://github.com/OakAndAspen',
                'icon' => 'github'
            ]
        ],
        'contact' => [
            'address' => [
                0 => [
                    'line' => '1800 Vevey, VD'
                ],
                1 => [
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
                'text' => 'Blog',
                'url' => 'base_url:blog'
            ],
            4 => [
                'text' => 'Contact',
                'url' => 'base_url:contact'
            ]
        ],
        'header_options' => [
            'arrows' => 'true',
            'autoslide' => 'false',
            'autoslideHoverStop' => 'false',
            'interval' => '2000',
            'loop' => 'true',
            'transition' => 'zoom',
            'itemsForSlide' => '0',
            'touch' => 'true',
            'swipe' => 'true'
        ],
        'footer' => [
            'fr' => [
                'description' => 'Après avoir terminé mes études en ingénierie des médias en été 2019, j\'ai choisi la voie difficile: celle de l\'entreprenariat. Je tente actuellement de concilier mon travail de développeur en freelance et mon projet de startup.',
                'contact_title' => 'Contact',
                'links_title' => 'Liens rapides',
                'social_title' => 'Retrouvez moi sur',
                'language_title' => 'Langue',
                'copyright_text' => 'Copyright 2019 Irina Despot. Tous droits réservés.',
                'feedburner' => ''
            ],
            'en' => [
                'description' => 'After finishing my studies in media engineering, I chose the hard way: entrepreneurship. I\'m trying to reconcile my work as a freelancer and my startup project.',
                'contact_title' => 'Contact Info',
                'links_title' => 'Quick Links',
                'social_title' => 'Find me on',
                'language_title' => 'Language',
                'copyright_text' => 'Copyright 2019 Irina Despot. All Rights Reserved.',
                'feedburner' => ''
            ]
        ]
    ]
];

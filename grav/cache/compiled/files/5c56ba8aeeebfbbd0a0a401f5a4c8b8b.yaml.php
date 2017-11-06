<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://flaten/flaten.yaml',
    'modified' => 1509821230,
    'data' => [
        'enabled' => true,
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user/themes/flaten'
                    ]
                ]
            ]
        ],
        'generall' => [
            'debug' => false,
            'onepage' => false,
            'opengraph' => true,
            'progress' => [
                'enabled' => false,
                'info' => 'Sorry but we have not found all images.'
            ],
            'header' => 0,
            'logo' => [
                'link' => 'base_url:home',
                'alt' => 'Flaten'
            ]
        ],
        'social' => [
            0 => [
                'url' => '#0',
                'icon' => 'social-facebook'
            ],
            1 => [
                'url' => '#0',
                'icon' => 'social-twitter'
            ],
            2 => [
                'url' => 'blog.rss',
                'icon' => 'social-rss'
            ]
        ],
        'opengraph' => [
            'street_address' => 'Street 1234',
            'locality' => 'locality',
            'region' => 'region',
            'postal_code' => '12345',
            'country_name' => 'Germany'
        ],
        'footer' => [
            'description' => 'Praesent commodo cursus magna.',
            'copyright' => '2015 - %year% &copy; Marvin Heilemann',
            'contribute' => 'Contributed by Marvin Heilemann',
            'contact' => [
                'title' => 'Contact info',
                'address' => [
                    0 => '222 Ave C South',
                    1 => 'Saskatoon',
                    2 => 'Saskatchewan',
                    3 => 'Canada S7K 2N5'
                ],
                'gps' => '1.306.222.3456'
            ],
            'othermenu' => [
                0 => [
                    'title' => 'Imprint',
                    'url' => '/imprint'
                ],
                1 => [
                    'title' => 'AGB',
                    'url' => '/agb'
                ]
            ],
            'quicklinks' => [
                'title' => 'Quick links',
                'links' => NULL
            ],
            'newsletter' => [
                'title' => 'Newsletter',
                'description' => NULL,
                'uri' => NULL
            ]
        ]
    ]
];

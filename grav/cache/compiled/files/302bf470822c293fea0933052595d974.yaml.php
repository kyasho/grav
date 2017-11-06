<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/apps/www/grav/user/config/site.yaml',
    'modified' => 1509811538,
    'data' => [
        'title' => 'beCloudReady',
        'author' => [
            'name' => 'Kumar Yashojeet',
            'email' => 'yash@becloudready.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'beCloudready provides you DevOps Solution'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'email' => 'your-email@domain.com',
        'description' => 'blogging is fun',
        'social' => [
            0 => [
                'url' => 'https://www.facebook.com/becloudready/',
                'icon' => 'facebook'
            ],
            1 => [
                'url' => 'https://twitter.com/becloudready',
                'icon' => 'twitter'
            ],
            2 => [
                'url' => '#',
                'icon' => 'google-plus'
            ]
        ],
        'footer' => [
            'text' => 'All Right Reserved © beCloudready.com ',
            'address' => [
                'title' => 'COME VISIT',
                'lines' => [
                    0 => [
                        'line' => 'Canada'
                    ]
                ]
            ],
            'social_title' => 'Socialize',
            'contact' => [
                'title' => 'CONTACT US',
                'lines' => [
                    0 => [
                        'text' => 'Chandan Kumar',
                        'url' => 'https://www.facebook.com/chandank3'
                    ],
                    1 => [
                        'text' => 'Kumar Yashojeet',
                        'url' => 'https://www.facebook.com/yasho.munshi'
                    ],
                    2 => [
                        'text' => 'chandank.kumar@gmail.com'
                    ],
                    3 => [
                        'text' => 'yash@becloudready.com'
                    ]
                ]
            ]
        ]
    ]
];

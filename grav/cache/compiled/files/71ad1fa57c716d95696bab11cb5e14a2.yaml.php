<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/apps/www/grav/user/themes/flaten/blueprints.yaml',
    'modified' => 1509821230,
    'data' => [
        'name' => 'Flaten',
        'version' => '2.0.0',
        'description' => 'Flaten Multipurpose Template',
        'icon' => 'microchip',
        'author' => [
            'name' => 'Marvin Heilemann',
            'email' => 'marvin.heilemann@googlemail.com'
        ],
        'keywords' => 'flaten, theme, template, multi, grav',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'processing' => [
                    'type' => 'section',
                    'title' => 'Processing'
                ],
                'event_template_types' => [
                    'type' => 'text',
                    'label' => 'Event Template Types',
                    'help' => 'What templates should be checked for event related content?',
                    'default' => 'event'
                ],
                'display_months_out' => [
                    'type' => 'text',
                    'label' => 'Months Out to Display Events',
                    'help' => 'In integer form, how many months out should repeating dates display?',
                    'default' => 3,
                    'placeholder' => 3
                ],
                'enable_single_event_filter' => [
                    'type' => 'toggle',
                    'label' => 'Enable Single Event Filter',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];

<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/blog/blueprints.yaml',
    'modified' => 1446301560,
    'data' => [
        'name' => 'Blog',
        'version' => '1.0.2',
        'description' => 'Blog is a Grav plugin that makes available the functionalities to add a blog to each Grav theme',
        'icon' => 'file-text-o',
        'author' => [
            'name' => 'Giansimon Diblas',
            'email' => 'info@diblas.net',
            'url' => 'http://diblas.net'
        ],
        'homepage' => 'https://github.com/giansi/grav-plugin-blog',
        'demo' => '-',
        'keywords' => 'blog, theme',
        'bugs' => 'https://github.com/giansi/grav-plugin-blog/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'buttons._simple_search' => [
                    'type' => 'toggle',
                    'label' => 'Simple search',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the simple search template from the sidebar'
                ],
                'buttons._related_posts' => [
                    'type' => 'toggle',
                    'label' => 'Related posts',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the related posts template from the sidebar'
                ],
                'buttons._random' => [
                    'type' => 'toggle',
                    'label' => 'Random',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the random template from the sidebar'
                ],
                'buttons._taxonomy_list' => [
                    'type' => 'toggle',
                    'label' => 'Taxonomy list',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the taxonomy list template from the sidebar'
                ],
                'buttons._archives' => [
                    'type' => 'toggle',
                    'label' => 'Archives',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the archives template from the sidebar'
                ],
                'buttons._feed' => [
                    'type' => 'toggle',
                    'label' => 'Feed',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable or disable the feed template from the sidebar'
                ]
            ]
        ]
    ]
];

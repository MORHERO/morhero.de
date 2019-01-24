<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/morhero.de/grav/user/config/site.yaml',
    'modified' => 1546256622,
    'data' => [
        'title' => 'MORHERO',
        'default_lang' => 'en',
        'author' => [
            'name' => 'MORHERO',
            'email' => 'contact@morhero.de'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Its me'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];

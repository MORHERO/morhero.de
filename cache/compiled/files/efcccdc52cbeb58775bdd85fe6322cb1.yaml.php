<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/morhero.de/grav/user/themes/morhero/blueprints/modular/teaser.yaml',
    'modified' => 1547501602,
    'data' => [
        'extends@' => 'modular_base',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.title' => [
                                    'type' => 'text',
                                    'label' => 'B.COMMON.TITLE'
                                ],
                                'header.img' => [
                                    'type' => 'file',
                                    'label' => 'B.TEASER.IMG',
                                    'multiple' => false
                                ],
                                'header.descr' => [
                                    'type' => 'text',
                                    'label' => 'Desc'
                                ],
                                'header.content' => [
                                    'type' => 'markdown',
                                    'label' => 'B.TEASER.CONTENT'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

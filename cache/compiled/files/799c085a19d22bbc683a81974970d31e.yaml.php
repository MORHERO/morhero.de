<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/morhero.de/grav/user/themes/morhero/blueprints/page_base.yaml',
    'modified' => 1547192579,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.header_title' => [
                                    'type' => 'text',
                                    'label' => 'B.HEADER.TITLE'
                                ],
                                'header.header_msg' => [
                                    'type' => 'text',
                                    'label' => 'B.HEADER.TEXT'
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'header.intro_toggle' => [
                                                    'type' => 'toggle',
                                                    'label' => 'B.SETTINGS.INTRO_TOGGLE',
                                                    'highlight' => 1,
                                                    'help' => 'PLUGIN_ADMIN.ENABLED_HELP',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.YES',
                                                        0 => 'PLUGIN_ADMIN.NO'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ],
                                                    'default' => 0
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

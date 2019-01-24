<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/morhero.de/grav/user/themes/morhero/blueprints/project.yaml',
    'modified' => 1546969885,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS_ADMIN.CONTENT',
                            'fields' => [
                                'header.header_title' => [
                                    'type' => 'text',
                                    'label' => 'HEADER_CONTENT.HEADLINE'
                                ],
                                'header.header_msg' => [
                                    'type' => 'text',
                                    'label' => 'HEADER_CONTENT.MSG'
                                ],
                                'header.teaser_text' => [
                                    'type' => 'text',
                                    'label' => 'PROJECT_SETTINGS.TEASER'
                                ],
                                'header.state' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'label' => 'STATUS Text',
                                    'classes' => 'fancy',
                                    'help' => 'TODO: in Lang hinzufügen',
                                    'validate' => [
                                        'type' => 'commalist'
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

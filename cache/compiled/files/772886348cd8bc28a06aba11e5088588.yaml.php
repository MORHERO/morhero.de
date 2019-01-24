<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/morhero.de/grav/user/themes/morhero/blueprints/modular.yaml',
    'modified' => 1548234152,
    'data' => [
        'extends@' => 'page_base',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.content.items' => [
                                    'type' => 'text',
                                    'default' => '@self:modular',
                                    'label' => 'pagecoll'
                                ],
                                'header.content.order.by' => [
                                    'type' => 'text',
                                    'label' => 'orderby'
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'text',
                                    'label' => 'dir'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

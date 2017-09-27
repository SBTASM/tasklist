<?php

return [
    'path' => [
        'root' => $_SERVER['DOCUMENT_ROOT'],
        'template_source' => $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'template',
        'template_compiled' => $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'runtime' . DIRECTORY_SEPARATOR . 'template'
    ],
    'layout' => [ 'main' => 'main.tpl'],
    'routing' => [ 'default_controller' => 'task',  'default_action' => 'index' ],
    'image' => [
        'max_width' => 320,
        'max_height' => 240,
        'default_path' => $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'images'
    ],
    'render' => ['default_title' => 'Tab'],
    'database' => [
        'host' => 'localhost',
        'username' => 'root',
        'database' => 'tasklist',
        'password' => '',
    ],
    'paginate' => ['page_items' => 3],
    'modules' => [
        'admin' => [
            'class' => \modules\admin\Admin::class,
            'login' => 'admin',
            'passw' => '123',
        ]
    ]
];
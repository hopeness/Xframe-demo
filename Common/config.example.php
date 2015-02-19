<?php
defined('XFRAME') || exit('Access Denied');

return [
    'DEBUG' => true,
    'ROUTE_TYPE' => 2,
    'PATH' => '/',
    'STATIC_PATH' => 'admin',
    'IGNORE_CDN' => true,
    'CDN' => [
        'http://xframe1',
        'http://xframe2',
        'http://xframe3',
        'http://xframe4',
        ],
    'ROUTE_TYPE' => 2,
    'DB' => [
        'TYPE' => 'pgsql',
        'PREFIX' => 'blog.',
        'MASTER' => [
            'HOST' => '10.0.0.21',
            'PORT' => '5432',
            'DBNAME' => 'site',
            'USER' => 'site',
            'PASSWORD' => 'site'
        ],
        'SLAVE' => [
            [
                'HOST' => '10.0.0.21',
                'PORT' => '5432',
                'DBNAME' => 'site',
                'USER' => 'site',
                'PASSWORD' => 'site'
                'RATE' => 5,
            ],
            [
                'HOST' => '10.0.0.21',
                'PORT' => '5432',
                'DBNAME' => 'site',
                'USER' => 'site',
                'PASSWORD' => 'site'
                'RATE' => 5,
            ]
        ]
    ]
];

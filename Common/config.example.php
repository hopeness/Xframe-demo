<?php
return [
    'db' => [
        'type' => 'pgsql',
        'rate' => 5,
        'prefix' => 'blog.',
        'master' => [
            'host' => '10.0.0.21',
            'port' => '5432',
            'dbname' => 'site',
            'user' => 'site',
            'password' => 'site'
        ],
        'slave' => [
            [
                'host' => '10.0.0.22',
                'port' => '5432',
                'dbname' => 'site',
                'user' => 'site',
                'password' => 'site'
            ],
            [
                'host' => '10.0.0.23',
                'port' => '5432',
                'dbname' => 'site',
                'user' => 'site',
                'password' => 'site'
            ]
        ]
    ]
];

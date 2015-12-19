<?php

return [
    'oracle' => [
        'driver'   => 'oracle',
        'tns'      => env('DB_TNS', ''),
        'host'      => '192.168.1.101',
        'database'  => 'orcl',
        'username'  => 'scott',
        'password'  => '123456',
        'port'      => '1521',
        'charset'   => 'utf8',
        'prefix'   => '',
    ],
];

<?php

use App\Service\ServiceContainer;

$configuration = [
    'db' => [
        'dsn' => 'mysql:dbname=locatcar;host=127.0.0.1;port=3306;charset=utf8',
        'username' => 'root',
        'password' => '',
    ],
    'env' => [
        'base_path' => 'http://localhost/coursphp/hb-locatcars-master/perso/',
    ]
];

require_once __DIR__ . '/../vendor/autoload.php';

$container = new ServiceContainer($configuration);

require_once __DIR__ . '/routes.php';

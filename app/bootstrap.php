<?php
$namespaces = [
    'App\Controller' => ROOT_PATH . '/app/controllers',
    'Nest'  => ROOT_PATH . '/src/Nest',
];

$loader = new \Phalcon\Loader();
$loader->registerNamespaces($namespaces);
$loader->register();

// developers ips
$devIps = ['127.0.0.1','::1'];

define('ENV', in_array(@$_SERVER['REMOTE_ADDR'], $devIps) ? 'DEVELOPMENT' : 'PRODUCTION');

if (ENV == 'DEVELOPMENT') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    (new Phalcon\Debug())->listen();
}
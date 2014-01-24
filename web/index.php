<?php
define('ROOT_PATH', realpath(__DIR__  . '/..'));
define('APP_PATH', ROOT_PATH . '/app');
define('CONFIG_PATH', APP_PATH . '/config');

try {
    include_once(APP_PATH . '/bootstrap.php');

    $di =
    $app = new \Phalcon\Mvc\Application(new \Landingi\Landend\DI\BasicDI());
    echo $app->handle()->getContent();
} catch (\Exception $e) {
    include_once(APP_PATH . '/views/_errors/500/handler.php');
}
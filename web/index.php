<?php
// few const paths to convienience
define('ROOT_PATH', realpath(__DIR__  . '/..'));
define('APP_PATH', ROOT_PATH . '/app');
define('CONFIG_PATH', APP_PATH . '/config');

try {
    // application bootstrap configuration
    include_once(APP_PATH . '/bootstrap.php');

    // building dependency injection container for appliaction
    $factory = new \Nest\DI\Factory();
    $di = $diFactory->build('mvc');

    // starting application
    $app = new \Phalcon\Mvc\Application($di);
    echo $app->handle()->getContent();
} catch (\Exception $e) {
    // something went really wrong but we have nice page for our users
    include_once(APP_PATH . '/views/_errors/500/handler.php');
}
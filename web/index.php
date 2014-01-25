<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once(ROOT_PATH . '/src/Nest/Application/Http.php');
include_once(ROOT_PATH . '/app/Bootstrap.php');

$inProduction = getenv('IN_PRODUCTION') ?: true;
$app = new App\Bootstrap($inProduction);
$app->run();

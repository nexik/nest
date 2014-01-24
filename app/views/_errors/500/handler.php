<?php
$view = new \Phalcon\Mvc\View\Simple();
$view->setViewsDir(APP_PATH . '/views/_errors/500/');

$response = new \Phalcon\Http\Response();
$response->setStatusCode(500, "Internal Server Error");
$response->setContent($view->render('template'));
$response->send();
exit;
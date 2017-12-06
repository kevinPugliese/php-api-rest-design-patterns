<?php

date_default_timezone_set('America/Sao_paulo');

require_once __DIR__.'/../app/bootstrap.php';
include __DIR__ . './../app/config.php';

use App\Providers\RouterServiceProvider;
use App\Providers\ControllerServiceProvider;

$app = new Silex\Application($config);

$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new ControllerServiceProvider());
$app->register(new RouterServiceProvider());

$app->run();

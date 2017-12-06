<?php

date_default_timezone_set('America/Sao_paulo');

require_once __DIR__.'/../app/bootstrap.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

$app->run();

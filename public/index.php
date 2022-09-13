<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Core\Application;

$app = new Application();

$app->router->get('/', function(){
    return "Hello WOrld";
});

$app->router->get('/contact', function () {
    return "Hello Contacct";
});

$app->run();
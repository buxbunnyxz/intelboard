<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get('/', function ($request, $response, $args) {
    $response->getBody()->write('Hello, IntelBoard!');
    return $response;
});

$app->get('/hello', function ($request, $response, $args) {
    $response->getBody()->write('Hello from /hello!');
    return $response;
});
$app->run();
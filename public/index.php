<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello', function (Request $request, Response $response) {
    $response->getBody()->write("Hello");

    return $response;
});
$app->run();
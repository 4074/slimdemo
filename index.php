<?php
/**
 * Created by PhpStorm.
 * User: dwfn3398
 * Date: 2017/2/7
 * Time: 11:30
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {
    $params = $request->getQueryParams();
    $name = isset($params['name']) ? $params['name'] : '';
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->run();
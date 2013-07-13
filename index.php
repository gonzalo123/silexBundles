<?php

include __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$app = (new Stack\Builder())
    ->push('Stack\UrlMap', [
            "/blog" => include __DIR__ . '/app/blog.php',
            "/api" => include __DIR__ . '/app/api.php'
        ])->resolve(new MyKernel());

$request = Request::createFromGlobals();

$response = $app->handle($request);
$response->send();

$app->terminate($request, $response);
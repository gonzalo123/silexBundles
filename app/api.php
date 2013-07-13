<?php
use Silex\Application;

$app = new Application();
$app->get('/', function () {
        return "Hello from API";
    });

return $app;
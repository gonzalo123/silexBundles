<?php
use Silex\Application;

$app = new Application();
$app->get('/', function () {
        return "Hello from Blog";
    });

return $app;
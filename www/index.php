<?php

require __DIR__ . '/vendor/autoload.php';

use Controller\System\Router;
new Router(
    $_SERVER['REQUEST_URI'],
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['HTTP_ACCEPT_LANGUAGE']
);
echo "<pre>";
// print_r($_SERVER);


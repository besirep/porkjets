<?php
require 'function.php';

// dd($_SERVER);

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/' || $uri === '/index.php' || $uri === '/index') {
    require 'controller/index.php';
} elseif ($uri === '/about.php' || $uri === '/about') {
    require 'controller/about.php';
} elseif ($uri === '/contacts.php' || $uri === '/contacts') {
    require 'controller/contacts.php';
} else {
    http_response_code(404);
    echo "Page not found";
}
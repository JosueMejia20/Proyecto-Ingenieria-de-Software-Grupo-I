<?php
require_once __DIR__ . '/router.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$routeFound = false;

foreach ($routes as $route => $callback) {
    if ($uri === $route) {
        $callback();
        $routeFound = true;
        break;
    }
}

if (!$routeFound) {
    http_response_code(404);
    echo "404 - Página no encontrada";
}

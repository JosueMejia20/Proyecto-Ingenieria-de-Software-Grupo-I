<?php
require_once 'Controllers.php';

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
$routes = [
    '' => 'landing',
    'formulario' => 'formulario',
    'revisores' => 'revisores',
    'estudiante' => 'estudiante',
];

$controller = new Controllers();

if (array_key_exists($url, $routes)) {
    $method = $routes[$url];
    if (method_exists($controller, $method)) {
        $controller->$method();
        exit;
    }
}

http_response_code(404);
echo "Página no encontrada";

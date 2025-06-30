<?php
define('ROOT', dirname(__DIR__));

require_once ROOT . '/core/Router.php';
require_once ROOT . '/app/controllers/SiteController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router = new Router();

$router->get('/', [SiteController::class, 'landing']);
$router->get('/formulario', [SiteController::class, 'formulario']);
$router->get('/estudiante/{id}', [SiteController::class, 'verEstudiante']);

$router->dispatch($_SERVER['REQUEST_METHOD'], $uri);

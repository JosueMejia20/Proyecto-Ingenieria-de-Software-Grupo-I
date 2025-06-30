<?php
require_once "Routers.php";
require_once "Controllers.php";

$router = new Router();

// Rutas con o sin parámetros
$router->get("/", "Controllers@landing");
$router->get("/formulario", "Controllers@formulario");
$router->get("/revisor/solicitud", "Controllers@revisores");
$router->get("/estudiantes/perfil", "Controllers@esutidantesrender");
$router->get("/estudiante/{id}", "Controllers@verEstudiante");

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$basePath = "/Proyecto";
$uri = str_replace($basePath, "", $uri);

$router->dispatch($_SERVER["REQUEST_METHOD"], $uri);

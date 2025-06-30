<?php 
require_once __DIR__ . "/Controllers.php";
require_once __DIR__ . "/Routers.php";

$router = new Router;

$router->addRoute("GET", "/", "Controllers", "landing");
$router->addRoute("GET", "/formulario", "Controllers", "formulario");
$router->addRoute("GET", "/revisor/solicitud", "Controllers", "revisores");
$router->addRoute("GET", "/estudiantes/perfil", "Controllers", "estudiante");
// Normalizar URI quitando el prefijo /Proyecto
$basePath = "/Proyecto";
$uri = str_replace($basePath, "", $_SERVER["REQUEST_URI"]);

$router->dispatch($_SERVER["REQUEST_METHOD"], $uri);
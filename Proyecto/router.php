<?php 
require_once __DIR__ . "/Controllers.php";
require_once __DIR__ . "/Routers.php";

$router = new Router;

$router->addRoute("GET", "/", "Controllers", "landing");
$router->addRoute("GET", "/formulario", "Controllers", "formulario");
$router->addRoute("GET", "/revisor/solicitud", "Controllers", "revisores");


$router->dispatch($_SERVER["REQUEST_METHOD"], $_SERVER["REQUEST_URI"]);
?>
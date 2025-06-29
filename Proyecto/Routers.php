<?php
class Router {
    private $routes = [];

    public function addRoute($method, $uri, $controller, $action) {
        $this->routes[$method][$uri] = [$controller, $action];
    }

    public function dispatch($method, $uri) {
        if (isset($this->routes[$method][$uri])) {
            [$controllerName, $action] = $this->routes[$method][$uri];
            $controller = new $controllerName();
            if (method_exists($controller, $action)) {
                $controller->$action();
                return;
            }
        }

        http_response_code(404);
        echo "404 - Página no encontrada: $uri";
    }
}

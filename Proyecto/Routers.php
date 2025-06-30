<?php
class Router {
    private $routes = [];

    public function get($pattern, $controllerAction) {
        $this->addRoute('GET', $pattern, $controllerAction);
    }

    public function post($pattern, $controllerAction) {
        $this->addRoute('POST', $pattern, $controllerAction);
    }

    private function addRoute($method, $pattern, $controllerAction) {
        $pattern = '#^' . preg_replace('#\{(\w+)\}#', '(?P<\1>[^/]+)', $pattern) . '$#';
        $this->routes[$method][$pattern] = $controllerAction;
    }

    public function dispatch($method, $uri) {
        if (!isset($this->routes[$method])) {
            http_response_code(405);
            echo "Método no permitido";
            return;
        }

        foreach ($this->routes[$method] as $pattern => $controllerAction) {
            if (preg_match($pattern, $uri, $matches)) {
                [$controllerName, $action] = explode('@', $controllerAction);
                require_once "Controllers.php";
                $controller = new $controllerName();
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                return call_user_func_array([$controller, $action], $params);
            }
        }

        http_response_code(404);
        echo "404 - Página no encontrada";
    }
}

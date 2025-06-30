<?php
class Router {
    private $routes = [];

    public function get($pattern, $callback) {
        $this->addRoute('GET', $pattern, $callback);
    }

    public function post($pattern, $callback) {
        $this->addRoute('POST', $pattern, $callback);
    }

    private function addRoute($method, $pattern, $callback) {
        $pattern = "#^" . preg_replace('/\{(\w+)\}/', '(?P<\1>[^/]+)', $pattern) . "$#";
        $this->routes[$method][$pattern] = $callback;
    }

    public function dispatch($method, $uri) {
        foreach ($this->routes[$method] ?? [] as $pattern => $callback) {
            if (preg_match($pattern, $uri, $params)) {
                $params = array_filter($params, 'is_string', ARRAY_FILTER_USE_KEY);
                return call_user_func_array($callback, $params);
            }
        }

        http_response_code(404);
        echo "404 - Página no encontrada";
    }
}

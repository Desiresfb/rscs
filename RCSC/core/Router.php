<?php

class Router {
    public function run() {
        $page = $_GET['page'] ?? 'home';

        $controllerName = ucfirst($page) . 'Controller';
        $controllerFile = "../app/controllers/" . $controllerName . ".php";

        if (file_exists($controllerFile)) {
            require $controllerFile;
            $controller = new $controllerName();
            $controller->index();
        } else {
            echo "404 - Page introuvable";
        }
    }
}

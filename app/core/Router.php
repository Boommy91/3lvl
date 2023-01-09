<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];


    public function __construct()
    {
        $arr = require 'app/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }


    public function add($route, $params)
    {

        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;


    }

    public function match()
    {
        $uri = $_SERVER['REQUEST_URI'];
        if (strpos($uri, '?')) {
            $separate = explode('?', $uri);
            $uri = $separate[0];
        }

        $url = str_replace('/3lvl/', '', $uri);

        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }


    public function run()
    {

        if ($this->match()) {
            $path = "app\controllers\\" . ucfirst($this->params['controller']) . 'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'] . "Action";
                if (method_exists($path, $action)) {

                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    echo "<b>Action not found:</b>  $action";
                }
            } else {
                echo "<b>Path not found:</b>  $path";
            }

        } else {
            $path = "app\controllers\NotFoundPageController";
            $controller = new $path;;
            $controller->indexAction();

        }


    }


}
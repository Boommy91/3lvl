<?php

namespace app\core;

use app\core\Model;
use app\core\View;


class Controller
{

    public $model;
    public $view;

    function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
    }


}
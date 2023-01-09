<?php

namespace app\controllers;

use app\core\Controller;
use app\model\AdminModel;
use app\core\View;

class AdminController extends Controller
{


    function __construct()
    {
        $this->model = new AdminModel();
        $this->view = new View();
    }

    public function indexAction()
    {
        $data = $this->model->getData();
        $this->view->generate('adminView.php', 'templateHeaderView.php',
            'templateFooterView.php', $data);
    }



}
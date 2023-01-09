<?php


namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\model\MainModel;

class MainController extends Controller
{
    public function __construct()
    {
        $this->model = new MainModel();
        $this->view = new View();

    }

    public function indexAction()
    {
        $data = $this->model->getData();

        $this->view->generate('mainView.php', 'templateHeaderView.php',
            'templateFooterView.php', $data);

    }

}
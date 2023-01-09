<?php


namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\model\BookPageModel;

class BookController extends Controller
{


    public function __construct()
    {
        $this->model = new BookPageModel();
        $this->view = new View();
    }

    public function indexAction()
    {
        $data = $this->model->getData();
        $this->view->generate('BookPageView.php', 'templateHeaderView.php',
            'templateFooterView.php', $data);
    }

}
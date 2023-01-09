<?php

namespace app\controllers;

use app\core\Controller;

class NotFoundPageController extends Controller
{
    public function indexAction()
    {
        $this->view->generate('404View.php', 'templateHeaderView.php','templateFooterView.php');

    }

}
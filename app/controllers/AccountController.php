<?php

namespace app\controllers;

use app\core\Controller;
use app\core\View;

class AccountController extends Controller
{
    function __construct()
    {
        $this->view = new View();

    }

    public function loginAction()
    {
        $this->view->generate('loginView.php', 'templateHeaderView.php',
            'templateFooterView.php');
    }

}
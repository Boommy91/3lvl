<?php

namespace app\model;

use app\core\Model;
use app\core\Pagination;
use app\controllers\DataBaseController;


class AdminModel extends Model
{
    public mixed $pdo;
    public mixed $db;


    public function __construct()
    {
        $this->pdo = require 'app/config/connectToBase.php';
        $this->db = new DataBaseController();

    }


    public function getData(): array
    {
        $page = $_GET['page'] ?? 1;
        $perPage = 10;

        $data[] = $this->db->getAllData();
        $total = count($data[0]);
        $pagination = new Pagination($page, $perPage, $total);
        $start = $pagination->get_start();

        $data[] = $this->db->getLimitData($start, $perPage);
        $data[] = $pagination->get_html();

        return $data;
    }



}
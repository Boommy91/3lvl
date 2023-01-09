<?php

namespace app\model;


use app\controllers\DataBaseController;
use app\core\Model;
use app\core\Pagination;

class MainModel extends Model
{
    public mixed $db;


    public function __construct()
    {
        $this->db = new DataBaseController();

    }


    public function getData(): array
    {
        $page = $_GET['page'] ?? 1;
        $perPage = 20;

        $data[] = $this->db->getAllData();
        $total = count($data[0]);
        $pagination = new Pagination($page, $perPage, $total);
        $start = $pagination->get_start();

        $data[] = $this->db->getLimitData($start, $perPage);
        $data[] = $pagination->get_html();

        return $data;
    }
}
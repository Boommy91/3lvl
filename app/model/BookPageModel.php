<?php

namespace app\model;


use app\controllers\DataBaseController;
use app\core\Model;

class BookPageModel extends Model
{
    public $db;

    public function __construct()
    {
        $this->db = new DataBaseController();
        $this->db->lookPage($_GET['id']);
    }

    public function getData(): array
    {
        $id = $_GET['id'];
        $data = $this->db->getDataById($id);
        return $data[0];
    }
}
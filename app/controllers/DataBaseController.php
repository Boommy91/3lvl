<?php

namespace app\controllers;

use app\core\Controller;
use PDO;

class DataBaseController extends Controller
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = require 'app/config/connectToBase.php';

    }

    public function getAllData()
    {
        return $this->pdo->query("SELECT * FROM `books`")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLimitData($start, $perPage): array
    {
        return $this->pdo->query("SELECT * FROM `books` LIMIT $start, $perPage")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteDataByIdAction(): void
    {
        $id = $_GET['id'];
        $this->pdo->exec("DELETE FROM books WHERE id = $id");
        header("Location: /doneTest/admin?page={$_GET['page']}");

    }

    public function addDataAction()
    {

        $name = $_POST['name'];
        $year = $_POST['year'];
        $authorFirst = $_POST['authorBook1'];
        if ($_POST['authorBook2'] !== '') $authorSecond = ', ' . $_POST['authorBook2'];
        if ($_POST['authorBook3'] !== '') $authorThird = ', ' . $_POST['authorBook3'];
        $description = $_POST['description'];

        if ($_FILES['img']['size'] > 0 && $name !== '' && $year !== '' && $authorFirst !== '' && $description !== '') {
            $imgPath = $_FILES['img']["tmp_name"];
            $imgName = $_FILES['img']["name"];
            $saveDir = dirname(__DIR__, 2) . '\public\img\books\\' . $imgName;

            var_dump($saveDir);

            move_uploaded_file($imgPath, $saveDir);

            $sql = "INSERT INTO books (`name`,`year`,`author_1`,`author_2`,`author_3`,`description`,`imgName`) 
                    VALUES ('$name',$year,'$authorFirst','$authorSecond','$authorThird','$description','$imgName')";
            $this->pdo->exec($sql);
        }
        header("Location: /doneTest/admin?page={$_GET['page']}");

    }

    public function getDataById($id)
    {
        return $this->pdo->query("SELECT * FROM `books` WHERE `id` = $id")->fetchAll(PDO::FETCH_ASSOC);

    }

    public function buyAction()
    {
        $data = $this->getDataById($_POST['id']);
        $buy = (int)$data[0]['buy'] + 1;
        $this->pdo->query("UPDATE books SET `buy` = $buy  WHERE  id = {$_POST['id']}");
        echo $buy;
    }

    public function lookPage($id)
    {
        $data = $this->getDataById($id);
        $looking = (int)$data[0]['looking'] + 1;
        $this->pdo->query("UPDATE books SET `looking` = $looking  WHERE  id = $id");

    }

}
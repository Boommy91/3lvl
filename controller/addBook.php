<?php
$db = require 'connect.php';

$name = $_POST['name'];
$year = $_POST['year'];
$authorFirst = $_POST['authorBook1'];
$authorSecond = $_POST['authorBook2'];
$authorThird = $_POST['authorBook3'];
$description = $_POST['description'];

if ($_FILES['img']['size'] > 0) {
    $imgPath = $_FILES['img']["tmp_name"];
    $imgName = $_FILES['img']["name"];
    $saveDir = dirname(__DIR__, 1) . '/img/books/' . $imgName;

    move_uploaded_file($imgPath, $saveDir);
    if ($name !== '' && $year !== '' && $authorFirst !== '' && $description !== '') {

        $sql = "INSERT INTO books (`name`,`year`,`author_1`,`author_2`,`author_3`,`description`,`imgName`) VALUES ('$name',$year,'$authorFirst','$authorSecond','$authorThird','$description','$imgName')";
        $db->exec($sql);
        echo 'ok';
    }
}


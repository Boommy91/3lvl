<?php
$db = require 'connect.php';
$name = $_POST['nameOfBook'];
$year = $_POST['year'];
$authorFirst = $_POST['authorFirst'];
$authorSecond = $_POST['authorSecond'];
$authorThird = $_POST['authorThird'];
$description = $_POST['description'];
$imgSrc = str_replace("C:\\fakepath\\","",$_POST['img']) ;
$sql = "INSERT INTO books (`name`,`year`,`author_1`,`author_2`,`author_3`,`description`,`img_name`) VALUES ('$name',$year,'$authorFirst','$authorSecond','$authorThird','$description','$imgSrc')";
$db->exec($sql);
echo 'ok';

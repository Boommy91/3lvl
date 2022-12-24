<?php
$db = require 'connect.php';
$sql = "SELECT * FROM books'";
$data = $db->query('SELECT * FROM books')->fetchAll(PDO::FETCH_ASSOC);
return $data;

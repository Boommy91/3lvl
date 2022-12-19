<?php

$db = require 'connect.php';
$db->exec("DELETE FROM city WHERE id = '{$_GET['id']}' ");

echo "You success delete book wit id {$_GET['id']}";

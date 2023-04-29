<?php

require_once '../config/databases.php';

$id = $_GET['id'];

mysqli_query($induction, "DELETE FROM `products` WHERE `products`.`id` = '$id'");


header('Location: /');
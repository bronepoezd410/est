<?php

require_once '../config/databases.php';

$id = $_POST['id'];

$title = $_POST['title'];

$decription = $_POST['decription'];


$brand = $_POST['brand'];

$price = $_POST['price'];

$availb = $_POST['availb'];

// var_dump($availb);
$dispsize = $_POST['dispsize'];

$dispres = $_POST['dispres'];

$proc = $_POST['proc'];

$ram = $_POST['ram'];

$storage = $_POST['storage'];

$batcapac = $_POST['batcapac'];


mysqli_query($induction, "UPDATE `products` SET `name` = '$title', `description` = '$decription', `brand` = '$brand', `price` = '$price', `availability` = '$availb', `display_size` = '$dispsize', `display_resolution` = '$dispres', `processor` = '$proc', `ram` = '$ram', `storage` = '$storage', `battery_capacity` = '$batcapac', `image_path` = `image_path`  WHERE `products`.`id` = '$id' ");


header('Location: /');
<?php

require_once '../config/databases.php';

$title = $_POST['title'];

$decription = $_POST['decription'];

$brand = $_POST['brand'];

$price = $_POST['price'];

$availb = $_POST['availb'];

$dispsize = $_POST['dispsize'];

$dispres = $_POST['dispres'];

$proc = $_POST['proc'];

$ram = $_POST['ram'];

$storage = $_POST['storage'];

$batcapac = $_POST['batcapac'];

mysqli_query($induction, "INSERT INTO `products` (`id`, `name`, `description`, `brand`, `price`, `availability`, `display_size`, `display_resolution`, `processor`, `ram`, `storage`, `battery_capacity`) VALUES (NULL, '$title', '$decription', '$brand', '$price', '$availb', '$dispsize', '$dispres', '$proc', '$ram', '$storage', '$batcapac')");


header('Location: /');

?>
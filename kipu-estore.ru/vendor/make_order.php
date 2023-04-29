<?php
require_once '../config/databases.php';
session_start();

$customer_id = $_SESSION["id"];

$product_id = $_POST["id"];

$phone = $_POST['phone'];

mysqli_query($induction, "INSERT INTO `orders` (`id`, `customer_id`, `product_id`, `phonenumber`, `date_order`) VALUES (NULL, '$customer_id', '$product_id', '$phone', CURRENT_TIMESTAMP)");

?>


<h1>Заказ подтвержден. Ожидайте звонка. Найти заказ вы сможете на странице аккаунта.</h1>
<a href="/">Вернуться</a>
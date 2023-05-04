<?php

require_once '../config/databases.php';
session_start();

$id = $_POST['id'];
$body = $_POST['body'];
$customer_id = $_SESSION['id'];
$rating = $_POST['rating'];

mysqli_query($induction, "INSERT INTO `reviews` (`id`, `product_id`, `customer_id`, `rating`, `comment`) VALUES (NULL, '$id', '$customer_id', '$rating', '$body')");


header('Location: product.php?id='.$id);

?>
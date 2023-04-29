<?php

session_start();

$customer_id = $_SESSION['id'];
require_once '../config/databases.php';

$orders = mysqli_query($induction, "SELECT * FROM `orders` WHERE `customer_id` = '$customer_id'"); ///ГРАММАТИКА   


if (!$orders) {

    echo "Заказов нет";
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="/styles/styles.css">
</head>


<body>

    <?php include '../navbar.php'; ?>

<br>
<section>
    <ul>

        <?php while ($row = mysqli_fetch_assoc($orders)) : ?>

            <li>
                <p> Id заказа: <?= $row['id'] ?></p>
                <p> Id товара: <?= $row['product_id'] ?> </p>
                <p> Указанный номер телефона: <?= $row['phonenumber'] ?> </p>
                <p> Время заказа: <?= $row['date_order'] ?> </p>
            </li>


        <?php endwhile; ?>

    </ul>
<section>
</body>
<style>
    ul {
        list-style-type: none;

    }
</style>
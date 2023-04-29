<?php

require_once '../config/databases.php';


$customers = mysqli_query($induction, "SELECT * FROM `customers`");

$customers = mysqli_fetch_all($customers);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиенты</title>
    <link rel="stylesheet" href="/styles/styles.css">
</head>

<body>

    <?php include '../navbar.php'; ?>

    <?php include '../topheader.php'; ?>


    <section id="products">
        <ul>
            <?php foreach ($customers as $costumer) { ?>
                <li>
                <img src="/img/user.jpg" width="100" height="100" ">
                    <p> <b> Идентификационный номер: </b> <?= $costumer[0] ?></p>
                    <p> <b> Имя пользователя: </b> <?= $costumer[1] ?></p>
                    <p> <b> Электронный адрес: </b> <?= $costumer[2] ?></p>
                    <p> <b> Пароль: </b> <?= $costumer[3] ?></p>
                    <a href="/vendor/orders.php?id=<?=$costumer[0]?>">Посмотреть заказы</a>
                    <br>
                </li>
            <?php
            }
            ?>
        </ul>
    </section>


</body>
<style>
    ul {
        list-style-type: none;

    }
</style>

</html>
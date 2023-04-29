<?php

require_once '../config/databases.php';
session_start();


$product_id = $_GET['id']; // получил айди конкретного продукта методом GET из строки браузера
$product = mysqli_query($induction, "SELECT * FROM `products` WHERE `id` = '$product_id'"); // выполняет запрос к базе данных, но достает нужно значение, путем того, что мы берем в качестве аргумента id - айди который мы получили из строки. То есть у нас запрос к нашему конкретно товару
$product = mysqli_fetch_assoc($product); // Возвращает ряд результата запроса в качестве ассоциативного массива, видимо получаем массив


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/styles.css" rel="stylesheet" />
    <title>Редактировать</title>
</head>

<body>
    <?php include '../navbar.php'; ?>

    <?php include '../topheader.php'; ?>

    <h1>
        Редактировать продукт:
    </h1>
    <img src="/img/<?= $product['image_path'] ?>" width="400" alt="photo">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form>

    <form action="updatescript.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <p>Название товара</p>
        <input type="text" name="title" value="<?= $product['name'] ?>">

        <p>Описание товара</p>
        <textarea type="text" rows="10" cols="50" name="decription"><?= $product['description'] ?></textarea>

        <p>Название бренда</p>
        <input type="text" name="brand" value="<?= $product['brand'] ?>">

        <p>Цена</p>
        <input type="number" name="price" value="<?= $product['price'] ?>">
        <br>
        <br>
        <label for="availability">Наличие товара на складе
        </label>
        <select id="availability" name="availb">
            <option value="1">Есть в наличии</option>
            <option value="0">Отсутствует</option>
            <br>
        </select>
            <p>Размер дисплея</p>
            <input type="number" name="dispsize" value="<?= $product['display_size'] ?>">

            <p>Разрешение дисплея</p>
            <input type="text" name="dispres" value="<?= $product['display_resolution'] ?>">

            <p>Процессора</p>
            <input type="text" name="proc" value="<?= $product['processor'] ?>">

            <p>ОЗУ</p>
            <input type="number" name="ram" value="<?= $product['ram'] ?>">

            <p>Память</p>
            <input type="number" name="storage" value="<?= $product['storage'] ?>">

            <p>Ёмкость аккумулятора</p>
            <input type="text" name="batcapac" value="<?= $product['battery_capacity'] ?>">
            <br>

            <br>
            <button type="submit"> Применить редактирование </button>

    </form>

</body>

</html>
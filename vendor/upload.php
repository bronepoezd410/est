<?php

require_once '../config/databases.php';


$id = $_POST['id'];
// получаем информацию о файале из ключа image
$image = $_FILES["image"];

// валидация

// типы файлов, которые можно загружать
$types = ["image/jpeg", "image/png"];

// ищем в массиве с типами тип текущего файла
if (!in_array($image["type"], $types)) {
    die('Incorrect file type');
}

// определяем размер файла в мегабайтах
$fileSize = $image["size"] / 1000000;
// максимальный размер файла в мегабайтах
$maxSize = 1;

// проверяем, чтобы размер файла не превышал ограничение
if ($fileSize > $maxSize) {
    die('Incorrect file size');
}

// создаем папку img в корне проекта, если её нет
if (!is_dir('../img')) {
    mkdir('../img', 0777, true);
}

// узнаем расширение текущего файла
$extension = pathinfo($image["name"], PATHINFO_EXTENSION);
// формируем уникальное имя с помощью функции time()
$fileName = time() . ".$extension";

// загружаем файл и проверяем
// если во премя загрузки файла произошла ошибка, возвращаем die()
if (!move_uploaded_file($image["tmp_name"], "../img/" . $fileName)) {
    die('Error upload file');
}


mysqli_query($induction, "UPDATE `products` SET `image_path` = '$fileName' WHERE `products`.`id` = '$id'");

header('Location: product.php?id='.$id);

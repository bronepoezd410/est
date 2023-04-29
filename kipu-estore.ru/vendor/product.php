<?php


require_once '../config/databases.php';
session_start();

$product_id = $_GET['id'];

$product = mysqli_query($induction, "SELECT * FROM `products` WHERE `id` = '$product_id'");

$product = mysqli_fetch_assoc($product);

$comments = mysqli_query($induction, "SELECT * FROM `reviews` WHERE `product_id` = '$product_id'");
$comments = mysqli_fetch_all($comments);?>

<!doctype html>
<html lang="en">

<head>
    <title><?= $product['name'] ?></title>
    <link rel="stylesheet" href="/styles/product.css">
    <link rel="stylesheet" href="/styles/styles.css">
    
</head>

<body>


    <?php include '../navbar.php'; ?>

    <?php include '../topheader.php'; ?>

    <ul class="product-details">
        <img src="/img/<?= $product['image_path'] ?>" width="400" alt="photo">
        <li><strong>Название:</strong> <?= $product['name'] ?></li>
        <li><strong>Бренд:</strong> <?= $product['brand'] ?></li>
        <li><strong>Цена:</strong> <?= $product['price'] ?></li>
        <li><strong>Описание:</strong> <?= $product['description'] ?></li>
        <li><strong>Размер экрана:</strong> <?= $product['display_size'] ?></li>
        <li><strong>Разрешение экрана:</strong> <?= $product['display_resolution'] ?></li>
        <li><strong>Процессор:</strong> <?= $product['processor'] ?></li>
        <li><strong>ОЗУ:</strong> <?= $product['ram'] ?></li>
        <li><strong>Память:</strong> <?= $product['storage'] ?></li>
        <li><strong>Ёмкость аккумулятора:</strong> <?= $product['battery_capacity'] ?></li>
        <br><br>
            <?php if ($product['availability']) { ?>
            <li> <strong> Продукт в наличии </strong> </li> <br>
            <?php } 
            else { ?>
            <li> <strong> Продукта нет в наличии </strong> </li> <br>
            <?php } ?>
    </ul>

    <?php if ($product['availability']) { ?>
    <section>
    <a style="background-color: green;" href="buy.php?id=<?= $product['id'] ?>">КУПИТЬ  <?= $product['price'] ?>$</a>
    </section>  
    <?php } ?>

    <h3>Добавить отзыв</h3>
    <form action="create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <!-- <p>Айди пользователя</p> -->
        <input type="hidden" name="customer_id">
        <br>
        <label for="rating">Оценка:</label>
        <select id="rating" name="rating">
            <option value="">Выберите</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        <br>

        <textarea name="body"></textarea>
        <br> <br>
        <button type="submit">Опубликовать</button>
    </form>

    <hr>
    <hr>

    <h3> <b> Отзывы</b></h3>
    <div class="commentaries">
        <ul>
            <?php foreach ($comments as $comments) { ?>
                <div class="comment">
                <li><a>Имя пользователя: Аноним</a></li>
                <!-- <li><a>ID: <?= $comments[2] ?></a></li> -->
                <li><a>Комментарий: <?= $comments[4] ?></a></li>
                <li><a>Оценка: <?= $comments[3] ?>/5</a></li>

                </div>
            <?php } ?>
        </ul>
    </div>
</body>



<style>

section a {
    display: block;
    margin-right: 80%;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
  }


.comment {
    background-color: lightgray;
    border-radius: 15px;
    margin-bottom: 20px;

}


.commentaries li  {
    font-size: 20px;
    padding:5   px ;
    margin-left: 10px;

  }

  .commentaries ul {
    list-style-type: none;
  }

  .product-details {

    display: block;
    margin: auto;

  }

  .product-details li {
    font-size: 20px;
  }

</style>
</html>
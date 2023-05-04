<?php


require_once '../config/databases.php';
session_start();
$product_id = $_GET['id'];
$product = mysqli_query($induction, "SELECT * FROM `products` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

?>


<!DOCTYPE html>
<html>

<head>
  <title>Оформление</title>

</head>

<body>

  <?php if (!$_SESSION["id"]) {     ?>

    <h1>Выполните вход в аккаунт</h1>
  <?php
  } else if (!$product['availability']) { ?>
    <h1>Продукта нет на складе</h1>
  <?php
  } else {
  ?>

    <div class="form-container">
      <img class="product-image" src="/img/<?= $product['image_path'] ?>" width="400" alt="photo">
      <div class="product-name"><?= $product['name'] ?> <?= $product['brand'] ?> </div>
      <div class="product-description"><?= $product['description'] ?></div>
      <div class="product-cost"><?= $product['price'] ?>$</div>

      <form action="make_order.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <label for="shipping-address">Номер телефона: </label>
        <input type="text" id="shipping-address" name="phone" placeholder="Введите номер телефона...">
        <button type="submit" class="confirm-btn">Подтвердить заказ</button>
      </form>
    </div>

  <?php
  }
  ?>

</body>





<style>
  .form-container {
    max-width: 500px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    font-family: Arial, Helvetica, sans-serif;
  }

  .product-image {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
  }

  .product-name {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .product-description {
    font-size: 16px;
    margin-bottom: 20px;
  }

  .product-cost {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  input[type=text] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 20px;
    font-size: 16px;
  }

  .confirm-btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  .confirm-btn:hover {
    background-color: #45a049;
  }
</style>

</html>
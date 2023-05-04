<?php

require_once 'config/databases.php';
session_start();

$brand = $_POST['brand'];
$min_price = $_POST['min_price'];
$max_price = $_POST['max_price'];
$availability = isset($_POST['availability']) ? $_POST['availability'] : '';
$display_size = $_POST['display_size'];
$display_resolution = $_POST['display_resolution'];
$processor = $_POST['processor'];
$ram = $_POST['ram'];
$storage = $_POST['storage'];
$battery_capacity = $_POST['battery_capacity'];



// Check if sort buttons were clicked
$sort_by_price_asc = isset($_POST['sort_by_price_asc']);
$sort_by_price_desc = isset($_POST['sort_by_price_desc']);

// var_dump($brand);


$sql = "SELECT * FROM `products` WHERE 1=1"; // '1=1' is used to simplify the WHERE clause construction

if (!empty($brand)) {
    $sql .= " AND `brand` = '$brand'";
}

if (!empty($min_price)) {
    $sql .= " AND `price` >= $min_price";
}

if (!empty($max_price)) {
    $sql .= " AND `price` <= $max_price";
}

// if (!empty($availability)) {
//     $sql .= " AND availability IN ('" . implode("', '", $availability) . "')";
// }

if (!empty($availability)) {
    $sql .= " AND `availability` = $availability";
}

if ($sort_by_price_asc) {
    $sql .= " ORDER BY `price` ASC";
} else if ($sort_by_price_desc) {
    $sql .= " ORDER BY `price` DESC";
}


if (!empty($display_size)) {
    $sql .= " AND `display_size` = $display_size";
}

if (!empty($display_resolution)) {
    $sql .= " AND `display_resolution` = '$display_resolution'";
}

if (!empty($processor)) {
    $sql .= " AND `processor` = $processor";
}

if (!empty($ram)) {
    $sql .= " AND `ram` = $ram";
}

if (!empty($storage)) {
    $sql .= " AND `storage` = $storage";
}


if (!empty($battery_capacity)) {
    $sql .= " AND `battery_capacity` = $battery_capacity";
}

$result = mysqli_query($induction, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KIPU E-STORE</title>
    <link href="styles/styles.css" rel="stylesheet" />
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'topheader.php'; ?>

    <form method="POST" action="index.php">
        <!-- <label for="brand">Бренд:</label> -->
        <select id="brand" name="brand">
            <option value="">Бренд</option>
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="Google">Google</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="Huawei">Huawei</option>
            <option value="OnePlus">OnePlus</option>
            <option value="Asus">Asus</option>
            <option value="Sony">Sony</option>
        </select>
        <br>
        <!-- <label for="min_price">Цена</label> -->

        <input type="number" id="min_price" name="min_price" placeholder="от $" />
        <br>

        <!-- <label for="max_price">Макс. цена:</label> -->
        <input type="number" id="max_price" name="max_price" placeholder="до $">
        <br>


        <!-- <label for="display_size">Размер дисплея:</label> -->
        <select id="display_size" name="display_size">
            <option value="">Размер дисплея</option>
            <option value="6.10">6.10</option>
            <option value="6.40">6.40</option>
            <option value="6.43">6.43</option>
            <option value="6.50">6.50</option>
            <option value="6.55">6.55</option>
            <option value="6.60">6.60</option>
            <option value="6.67">6.67</option>
            <option value="6.70">6.70</option>
            <option value="6.72">6.72</option>
            <option value="6.76">6.76</option>
            <option value="6.80">6.80</option>
            <option value="6.81">6.81</option>
        </select>
        <br>
        <!-- <label for="display_resolution">Разрешение экрана:</label> -->
        <select id="display_resolution" name="display_resolution">
            <option value="">Разрешение экрана</option>
            <option value="1080x2400">1080x2400</option>
            <option value="1228x2700">1228x2700</option>
            <option value="1236x2676">1236x2676</option>
            <option value="1344x2772">1344x2772</option>
            <option value="1440x3216">1440x3216</option>
            <option value="2400x1080">2400x1080</option>
            <option value="2532x1170">2532x1170</option>
            <option value="3120x1440">3120x1440</option>
            <option value="3200x1440">3200x1440</option>
            <option value="3840x1644">3840x1644</option>
        </select>
        <br>
        <button type="submit" name="sort_by_price_asc" value="1">Сортировать по цене (возрастание)</button> <br>
        <button type="submit" name="sort_by_price_desc" value="1">Сортировать по цене (убывание)</button>
        <br>
        <label for="availability"></label>
        <input type="checkbox" id="availability" name="availability" value="1">
        <label for="availability">Отображать по наличию</label>
        <br>
        <input type="submit" value="Найти">
    </form>

    <section id="products">
        <h2>Наши товары</h2>
        <ul>

            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <li>
                    <img src="/img/<?= $row['image_path'] ?>" alt="photo">
            <h3><?= $row['brand'] ?><b> <?= $row['name'] ?></b></h3>
            <p><?= $row['description'] ?></p>
                    <?php if ($row['availability']) { ?>
            <p> В наличии</p>
                    <?php } else { ?>
            <p> Нет в наличии </p>
                    <?php } ?>
            <a style="background-color:green;" href="/vendor/product.php?id=<?= $row['id'] ?>"> Цена: <?= $row['price'] ?>$ <br>Перейти к покупке</a>
            <a style="background-color:gray;" href="/vendor/product.php?id=<?= $row['id'] ?>">Узнать больше</a>
            <?php if ($_SESSION["admink"]) { ?>
                <a style="background-color:gray" href="/vendor/update.php?id=<?= $row['id'] ?>">Редактировать</a>
                <a style="background-color:gray;" href="/vendor/delete.php?id=<?= $row['id'] ?>">Удалить</a>
            <?php } ?>
            </li>
        <?php endwhile; ?>
        <!-- <li>
                <a href="/vendor/addempty.php">add</a>
            </li> -->
        </ul>
    </section>

    <?php include 'footer.php'; ?>



</body>

<style>
    form {
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 600px;
        display: inline-block;
    }

    label {
        font-size: 16px;
        margin-right: 10px;
    }

    select,
    input[type="number"] {
        padding: 8px;
        margin-right: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        font-size: 16px;
        width: 100%;
        max-width: 200px;
        margin-bottom: 10px;
    }

    button[type="submit"] {
        padding: 8px 16px;
        border-radius: 4px;
        border: none;
        background-color: gray;
        color: white;
        font-size: 16px;
        cursor: pointer;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    button[type="submit"]:last-child {
        margin-right: 0;
    }

    input[type="checkbox"] {
        margin-right: 5px;
    }

    input[type="submit"] {
        padding: 8px 16px;
        border-radius: 4px;
        border: none;
        background-color: green;
        color: white;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }
</style>

</html>
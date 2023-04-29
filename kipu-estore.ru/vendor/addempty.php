<?php

require_once '../config/databases.php';

mysqli_query($induction, "INSERT INTO `products` (`id`, `name`, `description`, `brand`, `price`, `availability`, `display_size`, `display_resolution`, `processor`, `ram`, `storage`, `battery_capacity`) VALUES (NULL, 'ProductName', 'ProductDescription', 'brand', '0', '0', '0', '0', '0', '0', '0', '0')");


header('Location: /');
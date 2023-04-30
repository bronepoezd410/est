-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 30 2023 г., 20:11
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `estore_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`) VALUES
(1, 'John Smith', 'john@example.com', 'password123'),
(2, 'Jane Doe', 'jane@example.com', 'password456'),
(3, 'Sarah Lee', 'sarah@example.com', 'password789'),
(4, 'David Kim', 'david@example.com', 'password012'),
(20, 'Mako V', 'makov@gmail.com', 'makov@gma'),
(22, 'Danil Romashkan', 'danilromas@gmail.com', '112211password'),
(23, 'Vitaly Shagin', 'shagin@gmail.com', 'password124'),
(24, 'John Doe', 'johndoe@example.com', 'password1'),
(25, 'Jane Smith', 'janesmith@example.com', 'letmein1'),
(26, 'Bob Johnson', 'bobjohnson@example.com', '123456'),
(27, 'Alice Brown', 'alicebrown@example.com', 'p@ssw0rd'),
(28, 'David Lee', 'davidlee@example.com', 'qwerty'),
(29, 'Emily White', 'emilywhite@example.com', 'changeme123'),
(30, 'Sarah Davis', 'sarahdavis@example.com', 'iloveyou'),
(31, 'Michael Green', 'michaelgreen@example.com', 'password123'),
(32, 'Karen Jones', 'karenjones@example.com', 'welcome1'),
(33, 'Tom Clark', 'tomclark@example.com', 'abcdefg'),
(34, 'James Smith', 'jamessmith@example.com', 'password1234'),
(35, 'Jessica Johnson', 'jessicajohnson@example.com', 'pa$$word'),
(36, 'William Brown', 'williambrown@example.com', 'letmein123'),
(38, 'Ethan Wilson', 'ethanwilson@example.com', 'football'),
(39, 'Ava Martinez', 'avamartinez@example.com', 'sunshine'),
(40, 'Mason Anderson', 'masonanderson@example.com', 'welcome123'),
(41, 'Sophia Thomas', 'sophiathomas@example.com', 'iloveyou2'),
(42, 'Jacob Jackson', 'jacobjackson@example.com', 'p@$$w0rd'),
(43, 'Isabella Harris', 'isabellaharris@example.com', '123456789'),
(44, 'Noah Taylor', 'noahtaylor@example.com', 'qwertyuiop'),
(45, 'Emma Lee', 'emmalee@example.com', 'password321'),
(46, 'Liam Nelson', 'liamnelson@example.com', 'baseball'),
(47, 'Avery Parker', 'averyparker@example.com', 'hello123'),
(48, 'Logan Scott', 'loganscott@example.com', '123qwe'),
(51, 'Admin Admin', 'admin@gmail.com', 'admin@gmail.com'),
(52, 'Danyushis Maksim', 'mako@gmail.com', 'mako@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `date_order` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `product_id`, `phonenumber`, `date_order`) VALUES
(1, 23, 4, '+7994345345', '2023-04-24 21:27:18'),
(2, 23, 21, '+7994345345', '2023-04-24 21:29:21'),
(3, 23, 21, '+7994345345', '2023-04-24 21:30:54'),
(4, 23, 4, '+7994345345', '2023-04-24 21:42:55'),
(5, 23, 2, '+7994345345', '2023-04-26 08:59:46'),
(6, 23, 2, '+99999999', '2023-04-26 10:47:07'),
(12, 29, 20, '+4859384753', '2023-04-27 08:26:37'),
(13, 4, 1, '+79783481234', '2023-04-27 08:27:14'),
(15, 20, 21, '+7978344121', '2023-04-27 08:28:17'),
(16, 20, 23, '+7978344121', '2023-04-27 08:28:32'),
(18, 39, 27, '+7978555332', '2023-04-27 08:29:01'),
(19, 28, 1, '+7978348821', '2023-04-27 08:29:32'),
(20, 29, 3, '+7978412377', '2023-04-27 08:29:46'),
(21, 47, 3, '+7978332213', '2023-04-27 08:30:00'),
(22, 24, 20, '+79783334647', '2023-04-27 08:30:17'),
(23, 22, 7, '+79785433453', '2023-04-27 08:30:54'),
(25, 42, 4, '+79784322235', '2023-04-27 08:31:54'),
(26, 25, 22, '+79783453453', '2023-04-27 08:32:06'),
(27, 51, 23, '+79879878987', '2023-04-27 09:29:59'),
(28, 52, 2, '+7978234234', '2023-04-29 16:17:18');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `brand` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `availability` tinyint NOT NULL,
  `display_size` decimal(4,2) NOT NULL,
  `display_resolution` varchar(20) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `storage` int NOT NULL,
  `battery_capacity` int NOT NULL,
  `image_path` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `brand`, `price`, `availability`, `display_size`, `display_resolution`, `processor`, `ram`, `storage`, `battery_capacity`, `image_path`) VALUES
(1, 'iPhone 13 Pro', 'Новейший смартфон высокого класса от Apple, выпущенный в сентябре 2021 года. Он оснащен мощным чипом A15 Bionic, 6,1-дюймовым дисплеем Super Retina XDR и системой из трех камер с улучшенными характеристиками при низкой освещенности.', 'Apple', '1099.00', 0, '6.10', '2532x1170', 'A15 Bionic', '6', 128, 3095, '1681415639.jpg'),
(2, 'Galaxy S21 Ultra', 'Флагманский смартфон Samsung, выпущенный в январе 2021 года. Он оснащен 6,8-дюймовым дисплеем Dynamic AMOLED 2X, мощным процессором Exynos 2100 или Snapdragon 888 и четырехкамерной системой со 100-кратным зумом.', 'Samsung', '1199.00', 1, '6.80', '3200x1440', 'Exynos 2100', '12', 256, 5000, '1681415879.jpg'),
(3, 'Pixel 6', 'Новейший флагманский смартфон Google, выпущенный в октябре 2021 года. Он оснащен процессором Tensor от Google, новым языком дизайна Material You и 50-мегапиксельной  камерой с улучшенными характеристиками при низкой освещенности.', 'Google', '699.00', 0, '6.40', '2400x1080', 'Tensor', '8', 128, 4614, '1681415845.png'),
(4, 'Pixel 6 Pro', 'Pixel 6 Pro имеет более крупный 6,7-дюймовый дисплей Quad HD+ и дополнительные функции камеры по сравнению с младшей моделью линейки Pixel 6. Выпущенные в октябре 2021 года. Оснащен пользовательским процессором Tensor от Google, новым языком дизайна Material You.', 'Google', '899.00', 1, '6.70', '3120x1440', 'Tensor', '12', 256, 5000, '1681416076.jpg'),
(5, 'Xperia 1 III', 'Новейший флагманский смартфон Sony, выпущенный в августе 2021 года. Он оснащен 6,5-дюймовым 4K OLED-дисплеем, процессором Snapdragon, также имеет возможность подключения к 5G, аккумулятор емкостью 4500 мАч и поддержку быстрой зарядки 30 Вт.\r\n', 'Sony', '1299.00', 1, '6.50', '3840x1644', 'Snapdragon 888', '12', 256, 4500, '1681416137.jpg'),
(6, 'Redmi Note 11 Pro', 'Смартфон среднего класса от Xiaomi, выпущенный в ноябре 2021 года. Он оснащен 6,67-дюймовым дисплеем Full HD+, процессором MediaTek Dimensity 920 и четырехкамерной системой с основной камерой до 50 Мп. Он также оснащен связью 5G, аккумулятором емкостью 5000 мАч и поддержкой быстрой зарядки 67 Вт.', 'Xiaomi', '399.00', 1, '6.67', '2400x1080', 'Mediatek Helio G95', '6', 128, 5020, '1681416184.jpg'),
(7, 'Mi 12', 'Он оснащен 6,81-дюймовым AMOLED-дисплеем с высокой частотой обновления, процессором Snapdragon 8 Gen 1 и тройной системой камер с основной камерой до 50 Мп. Он также оснащен связью 5G, аккумулятором емкостью 5000 мАч и поддержкой быстрой зарядки 120 Вт.', 'Xiaomi', '799.00', 0, '6.81', '3200x1440', 'Snapdragon 8 Gen 1', '12', 256, 5000, '1681454252.jpg'),
(8, 'Zenfone 8 Flip', 'Смартфон высокого класса от Asus, выпущенный в мае 2021 года. Он оснащен 6,67-дюймовым AMOLED-дисплеем, процессором Snapdragon 888 и откидным модулем камеры с основной камерой до 64 Мп. Он также имеет возможность подключения к сети 5G, аккумулятор емкостью 5000 мАч и поддержку быстрой зарядки.', 'Asus', '999.00', 1, '6.67', '2400x1080', 'Snapdragon 888', '8', 256, 5000, '1681454166.png'),
(18, 'Mi 11 Lite', 'Android смартфон среднего класса с поддержкой 5G. Xiaomi переходит в высшую лигу смартфонов, выпустив смартфон Xiaomi Mi 11 Lite. Изящный и премиальный, он готов вам предоставить столько мощности, надёжности и автономности, сколько вам потребуется для повседневной жизни и даже больше.', 'Xiaomi', '299.99', 0, '6.55', '1080x2400', 'Snapdragon 732G', '6', 128, 4250, '1681416489.png'),
(19, '9 Pro', 'Флагманский Android-смартфон с возможностью подключения к сети 5G', 'OnePlus', '1069.00', 1, '6.70', '1440x3216', 'Snapdragon 888', '12', 256, 4500, '1681454298.jpeg'),
(20, 'P50 Pro', 'Высококлассный Android-смартфон с возможностью подключения к сети 5G', 'Huawei', '1299.00', 1, '6.60', '1228x2700', 'Kirin 9000', '12', 512, 4360, '1681454386.png'),
(21, 'Redmi Note 10 Pro', 'Android-смартфон среднего класса с возможностью подключения к сети 4G', 'Xiaomi', '279.99', 1, '6.67', '1080x2400', 'Snapdragon 732G', '6', 128, 5020, '1681455043.jpg'),
(22, 'Nord CE 5G', 'Android-смартфон среднего класса с возможностью подключения к сети 5G', 'OnePlus', '399.00', 1, '6.43', '1080x2400', 'Snapdragon 750G', '8', 128, 4500, '1681455114.jpg'),
(23, 'Mate 40 Pro', 'Высококлассный Android-смартфон с возможностью подключения к сети 5G', 'Huawei', '1199.00', 1, '6.76', '1344x2772', 'Kirin 9000', '8', 256, 4400, '1681455249.png'),
(24, 'Mi 10T Pro', 'Флагманский Android-смартфон с возможностью подключения к сети 5G', 'Xiaomi', '599.99', 1, '6.67', '1080x2400', 'Snapdragon 865', '8', 128, 5000, '1681455462.png'),
(25, '8T', 'Флагманский Android-смартфон с возможностью подключения к сети 5G', 'OnePlus', '749.00', 1, '6.55', '1080x2400', 'Snapdragon 865', '12', 256, 4500, '1681455523.jpg'),
(26, 'Nova 8 Pro', 'Android-смартфон среднего класса с возможностью подключения к сети 5G', 'Huawei', '499.00', 1, '6.72', '1236x2676', 'Kirin 985', '8', 128, 4000, '1681455539.jpg'),
(27, 'Poco X3 Pro', 'Android-смартфон среднего класса с возможностью подключения к сети 4G', 'Xiaomi', '249.99', 1, '6.67', '1080x2400', 'Snapdragon 860', '6', 128, 5160, '1681455799.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `rating` int NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `customer_id`, `rating`, `comment`) VALUES
(1, 1, 1, 5, 'Great phone!'),
(2, 2, 2, 4, 'Good, but a bit expensive'),
(3, 2, 1, 5, 'Love it! Best phone ever.'),
(4, 3, 2, 3, 'Disappointed with the availability'),
(5, 4, 3, 4, 'Great camera, average battery life'),
(6, 5, 4, 5, 'Awesome phone, worth the price!'),
(7, 6, 3, 3, 'Decent budget phone, but not the best.'),
(8, 7, 1, 2, 'Disappointed with the delay'),
(9, 8, 2, 4, 'Good phone, nice display, but not the best battery life.'),
(25, 5, 2, 2, 'Ваше сообщениеp'),
(26, 2, 2, 5, 'В целом, очень даже неплохо.'),
(27, 2, 1, 2, 'Мне не понравилось'),
(28, 5, 2, 3, 'Лучший!!'),
(29, 1, 23, 4, 'Неплохо так'),
(33, 2, 23, 5, 'Неплохо');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `costumer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

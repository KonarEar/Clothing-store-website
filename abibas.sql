-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 13 2024 г., 23:00
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `abibas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `goods` varchar(5000) NOT NULL,
  `cost` varchar(256) DEFAULT NULL,
  `user_login` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `address`, `phone`, `goods`, `cost`, `user_login`) VALUES
(32, 'Улица Пушкина', '+7(999)999-9999', 'Женские кроссовки 1, Женское худи 4', '12998', 8),
(33, 'Улица Покрышкина', '+7(923)414-2342', 'Детские кроссовки 1', '5199', 8),
(34, 'фываыва', '+7(232)323-2323', 'Женские кроссовки 1', '11499', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `prod`
--

CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `name_in_php` int(11) DEFAULT NULL,
  `login` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `prod`
--

INSERT INTO `prod` (`id`, `name_in_php`, `login`) VALUES
(191, 55, 11),
(192, 40, 11),
(225, 22, 4),
(226, 28, 4),
(227, 1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  `category_of_people` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `name_in_php` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `img`, `name`, `price`, `category_of_people`, `type`, `name_in_php`) VALUES
(1, 'img/men/boots/1.png', 'Мужские кроссовки 1', 11499, 'man', 'boots', 'tovar1'),
(2, 'img/men/boots/2.png', 'Мужские кроссовки 2', 4999, 'man', 'boots', 'tovar2'),
(3, 'img/men/boots/3.png', 'Мужские кроссовки 3', 7499, 'man', 'boots', 'tovar3'),
(4, 'img/men/boots/4.png', 'Мужские кроссовки 4', 2999, 'man', 'boots', 'tovar4'),
(5, 'img/men/boots/5.png', 'Мужские кроссовки 5', 4199, 'man', 'boots', 'tovar5'),
(6, 'img/men/boots/6.png', 'Мужские кроссовки 6', 1499, 'man', 'boots', 'tovar6'),
(7, 'img/men/boots/7.png', 'Мужские кроссовки 7', 9999, 'man', 'boots', 'tovar7'),
(8, 'img/men/boots/8.png', 'Мужские кроссовки 8', 7599, 'man', 'boots', 'tovar8'),
(9, 'img/men/boots/9.png', 'Мужские кроссовки 9', 1999, 'man', 'boots', 'tovar9'),
(10, 'img/men/hoodie/1.png', 'Мужское худи 1', 9999, 'man', 'hoodie', 'tovar21'),
(11, 'img/men/hoodie/2.png', 'Мужское худи 2', 13499, 'man', 'hoodie', 'tovar22'),
(12, 'img/men/hoodie/3.png', 'Мужское худи 3', 14999, 'man', 'hoodie', 'tovar23'),
(13, 'img/men/hoodie/4.png', 'Мужское худи 4', 1199, 'man', 'hoodie', 'tovar24'),
(14, 'img/men/hoodie/5.png', 'Мужское худи 5', 1799, 'man', 'hoodie', 'tovar25'),
(15, 'img/men/hoodie/6.png', 'Мужское худи 6', 8999, 'man', 'hoodie', 'tovar26'),
(16, 'img/men/hoodie/7.png', 'Мужское худи 7', 4999, 'man', 'hoodie', 'tovar27'),
(17, 'img/men/hoodie/8.png', 'Мужское худи 8', 5999, 'man', 'hoodie', 'tovar28'),
(18, 'img/men/hoodie/9.png', 'Мужское худи 9', 7999, 'man', 'hoodie', 'tovar29'),
(19, 'img/men/pants/1.png', 'Мужские брюки 1', 7699, 'man', 'pants', 'tovar31'),
(20, 'img/men/pants/2.png', 'Мужские брюки 2', 5999, 'man', 'pants', 'tovar32'),
(21, 'img/men/pants/3.png', 'Мужские брюки 3', 7899, 'man', 'pants', 'tovar33'),
(22, 'img/men/pants/4.png', 'Мужские брюки 4', 8999, 'man', 'pants', 'tovar34'),
(23, 'img/men/pants/5.png', 'Мужские брюки 5', 8499, 'man', 'pants', 'tovar35'),
(24, 'img/men/pants/6.png', 'Мужские брюки 6', 11999, 'man', 'pants', 'tovar36'),
(25, 'img/men/pants/7.png', 'Мужские брюки 7', 9999, 'man', 'pants', 'tovar37'),
(26, 'img/men/pants/8.png', 'Мужские брюки 8', 4999, 'man', 'pants', 'tovar38'),
(27, 'img/men/pants/9.png', 'Мужские брюки 9', 5699, 'man', 'pants', 'tovar39'),
(28, 'img/woman/boots/1.png', 'Женские кроссовки 1', 11499, 'woman', 'boots', 'womantovar1'),
(29, 'img/woman/boots/2.png', 'Женские кроссовки 2', 9799, 'woman', 'boots', 'womantovar2'),
(30, 'img/woman/boots/3.png', 'Женские кроссовки 3', 8949, 'woman', 'boots', 'womantovar3'),
(31, 'img/woman/boots/4.png', 'Женские кроссовки 4', 3499, 'woman', 'boots', 'womantovar4'),
(32, 'img/woman/boots/5.png', 'Женские кроссовки 5', 5499, 'woman', 'boots', 'womantovar5'),
(33, 'img/woman/boots/6.png', 'Женские кроссовки 6', 13449, 'woman', 'boots', 'womantovar6'),
(34, 'img/woman/boots/7.png', 'Женские кроссовки 7', 9499, 'woman', 'boots', 'womantovar7'),
(35, 'img/woman/boots/8.png', 'Женские кроссовки 8', 2499, 'woman', 'boots', 'womantovar8'),
(36, 'img/woman/boots/9.png', 'Женские кроссовки 9', 2999, 'woman', 'boots', 'womantovar9'),
(37, 'img/woman/hoodie/1.png', 'Женское худи 1', 9999, 'woman', 'hoodie', 'womantovar21'),
(38, 'img/woman/hoodie/2.png', 'Женское худи 2', 6999, 'woman', 'hoodie', 'womantovar22'),
(39, 'img/woman/hoodie/3.png', 'Женское худи 3', 2999, 'woman', 'hoodie', 'womantovar23'),
(40, 'img/woman/hoodie/4.png', 'Женское худи 4', 1499, 'woman', 'hoodie', 'womantovar24'),
(41, 'img/woman/hoodie/5.png', 'Женское худи 5', 1999, 'woman', 'hoodie', 'womantovar25'),
(42, 'img/woman/hoodie/6.png', 'Женское худи 6', 2349, 'woman', 'hoodie', 'womantovar26'),
(43, 'img/woman/hoodie/7.png', 'Женское худи 7', 3249, 'woman', 'hoodie', 'womantovar27'),
(44, 'img/woman/hoodie/8.png', 'Женское худи 8', 6299, 'woman', 'hoodie', 'womantovar28'),
(45, 'img/woman/hoodie/9.png', 'Женское худи 9', 5199, 'woman', 'hoodie', 'womantovar29'),
(46, 'img/woman/pants/1.png', 'Женские брюки 1', 3999, 'woman', 'pants', 'womantovar31'),
(47, 'img/woman/pants/2.png', 'Женские брюки 2', 3399, 'woman', 'pants', 'womantovar32'),
(48, 'img/woman/pants/3.png', 'Женские брюки 3', 5399, 'woman', 'pants', 'womantovar33'),
(49, 'img/woman/pants/4.png', 'Женские брюки 4', 2499, 'woman', 'pants', 'womantovar34'),
(50, 'img/woman/pants/5.png', 'Женские брюки 5', 1499, 'woman', 'pants', 'womantovar35'),
(51, 'img/woman/pants/6.png', 'Женские брюки 6', 999, 'woman', 'pants', 'womantovar36'),
(52, 'img/woman/pants/7.png', 'Женские брюки 7', 3249, 'woman', 'pants', 'womantovar37'),
(53, 'img/woman/pants/8.png', 'Женские брюки 8', 2249, 'woman', 'pants', 'womantovar38'),
(54, 'img/woman/pants/9.png', 'Женские брюки 9', 3749, 'woman', 'pants', 'womantovar39'),
(55, 'img/kids/boots/1.png', 'Детские кроссовки 1', 5199, 'kids', 'boots', 'kidtovar1'),
(56, 'img/kids/boots/2.png', 'Детские кроссовки 2', 3499, 'kids', 'boots', 'kidtovar2'),
(57, 'img/kids/boots/3.png', 'Детские кроссовки 3', 4299, 'kids', 'boots', 'kidtovar3'),
(58, 'img/kids/boots/4.png', 'Детские кроссовки 4', 7099, 'kids', 'boots', 'kidtovar4'),
(59, 'img/kids/boots/5.png', 'Детские кроссовки 5', 10999, 'kids', 'boots', 'kidtovar5'),
(60, 'img/kids/boots/6.png', 'Детские кроссовки 6', 2499, 'kids', 'boots', 'kidtovar6'),
(61, 'img/kids/boots/7.png', 'Детские кроссовки 7', 3199, 'kids', 'boots', 'kidtovar7'),
(62, 'img/kids/boots/8.png', 'Детские кроссовки 8', 1499, 'kids', 'boots', 'kidtovar8'),
(63, 'img/kids/boots/9.png', 'Детские кроссовки 9', 1749, 'kids', 'boots', 'kidtovar9'),
(64, 'img/kids/hoodie/1.png', 'Детское худи 1', 3499, 'kids', 'hoodie', 'kidtovar21'),
(65, 'img/kids/hoodie/2.png', 'Детское худи 2', 4299, 'kids', 'hoodie', 'kidtovar22'),
(66, 'img/kids/hoodie/3.png', 'Детское худи 3', 5299, 'kids', 'hoodie', 'kidtovar23'),
(67, 'img/kids/hoodie/4.png', 'Детское худи 4', 6499, 'kids', 'hoodie', 'kidtovar24'),
(68, 'img/kids/hoodie/5.png', 'Детское худи 5', 4099, 'kids', 'hoodie', 'kidtovar25'),
(69, 'img/kids/hoodie/6.png', 'Детское худи 6', 3249, 'kids', 'hoodie', 'kidtovar26'),
(70, 'img/kids/hoodie/7.png', 'Детское худи 7', 999, 'kids', 'hoodie', 'kidtovar27'),
(71, 'img/kids/hoodie/8.png', 'Детское худи 8', 1999, 'kids', 'hoodie', 'kidtovar28'),
(72, 'img/kids/hoodie/9.png', 'Детское худи 9', 2999, 'kids', 'hoodie', 'kidtovar29'),
(73, 'img/kids/pants/1.png', 'Детские брюки 1', 2999, 'kids', 'pants', 'kidtovar31'),
(74, 'img/kids/pants/2.png', 'Детские брюки 2', 3999, 'kids', 'pants', 'kidtovar32'),
(75, 'img/kids/pants/3.png', 'Детские брюки 3', 3399, 'kids', 'pants', 'kidtovar33'),
(76, 'img/kids/pants/4.png', 'Детские брюки 4', 999, 'kids', 'pants', 'kidtovar34'),
(77, 'img/kids/pants/5.png', 'Детские брюки 5', 4299, 'kids', 'pants', 'kidtovar35'),
(78, 'img/kids/pants/6.png', 'Детские брюки 6', 2499, 'kids', 'pants', 'kidtovar36'),
(79, 'img/kids/pants/7.png', 'Детские брюки 7', 1999, 'kids', 'pants', 'kidtovar37'),
(80, 'img/kids/pants/8.png', 'Детские брюки 8', 2099, 'kids', 'pants', 'kidtovar38'),
(81, 'img/kids/pants/9.png', 'Детские брюки 9', 2449, 'kids', 'pants', 'kidtovar39');

-- --------------------------------------------------------

--
-- Структура таблицы `technicalsupport`
--

CREATE TABLE `technicalsupport` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `description` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `technicalsupport`
--

INSERT INTO `technicalsupport` (`id`, `name`, `email`, `telephone`, `description`) VALUES
(48, 'sadfsadf', 'fdskj@mail.ru', '+7(812)348-8123', 'adsfdsafdsaffds'),
(49, 'asdasd', 'asdasd@mail.ru', '+7(543)534-5234', 'dsfsadfdsafsd'),
(53, 'asdasdsad', 'sadfsadffd@mail.ru', '+7(432)423-4234', 'dsfgsfdgfdsgfgsd'),
(54, 'dsafasf', 'sdafdfsa@mail.ru', '+7(324)234-234_', '234234423dfsg'),
(55, 'Привет', 'sdfsdf@mail.ru', '+7(999)999-9999', 'приветпока'),
(56, 'asdasd', 'asd@mail.ruasdasd', '+7(232)332-2323', '2sdfsdfsdfsdf'),
(57, 'sdfsdfsd', 'f@mail.rusdfsdfsdf', '+7(23_)___-____', 'sdfsdfsdfsdf');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `login` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `datas` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `pass`, `datas`) VALUES
(3, 'asdfa', 'asdasd', 'ewq', 'ewq', '01.03.2002'),
(4, 'Виталий', 'Симонович', 'qwe', 'qwe', '2004-12-27'),
(5, 'asd', 'asd', 'asd', 'asd', '12312-03-12'),
(7, 'qaz', 'qaz', 'qaz', 'qaz', '2024-03-07'),
(8, 'Гость', 'Гость', 'Гость', 'Гость', 'Гость'),
(10, 'asdasd', 'dsfasd', 'asdasd', 'asdsad', '0323-02-23'),
(11, 'Петр', 'Петрович', 'Petr', '123', '2024-02-29');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_orders_users` (`user_login`);

--
-- Индексы таблицы `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_in_php` (`name_in_php`),
  ADD KEY `login` (`login`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `technicalsupport`
--
ALTER TABLE `technicalsupport`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT для таблицы `technicalsupport`
--
ALTER TABLE `technicalsupport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_users` FOREIGN KEY (`user_login`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `prod`
--
ALTER TABLE `prod`
  ADD CONSTRAINT `FK_prod_products` FOREIGN KEY (`name_in_php`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_prod_users` FOREIGN KEY (`login`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

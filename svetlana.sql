-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 13 2023 г., 19:41
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `svetlana`
--

-- --------------------------------------------------------

--
-- Структура таблицы `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `root` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `password`, `root`) VALUES
(3, 'dopooo', 'asdsadasda@gmail.com', '$2y$10$qoD5ipzwCjMVSmVmDBFGNO/eV3z3mQ273aI1.MGbZGpYeej4c0TP2', 1),
(8, 'Joric Ananas', '321321@gmail.com', '$2y$10$Z9nreou1nnSPOm3W0TRc6OIV.XVdOFWfyqAOHMqmg/q1K8hL0i8lG', 0),
(9, 'Abra Cadabra', '1@gmail.com', '$2y$10$goShoqorWrlNZJIm1qft6..qt/gIVaFzaWOy1hEXMpaJ7zYeG1Npe', 0),
(10, 'Abra Cadabra', 'teodorghirba1@gmail.com', '$2y$10$FBTAM7exmZ42/H7OjlXvmuJKDrE4.Xj0fcAok6OqTeZuHi5pFtKtS', 0),
(11, 'Abra Cadabra', '123@gmail.com', '$2y$10$YFL8UnhU870FwAUqWQgS8ew1kSrA9L7WVwNZh0Nn8UNf8dGvcLUnG', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id`, `price`, `img`, `content`, `title`, `rating`) VALUES
(1, 17.99, '/svetlana/images/room-1.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.', 'exclusive room', 5.00),
(2, 25.99, '/svetlana/images/room-2.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.', 'exclusive room', 2.50),
(3, 79.99, '/svetlana/images/room-3.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.', 'exclusive room', 3.80),
(4, 24.99, '/svetlana/images/room-4.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.', 'exclusive room', 3.90),
(5, 34.00, '/svetlana/images/room-5.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.', 'exclusive room', 4.50),
(6, 34.65, '/svetlana/images/room-6.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.', 'exclusive room', 5.00),
(8, 56.00, '/svetlana/images/room-1.jpg', 'CEA MAI BUNA DIN DUBAI,NALETAI NAROOOOOD URAAAAAAAAA', 'Dubai', 5.00);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

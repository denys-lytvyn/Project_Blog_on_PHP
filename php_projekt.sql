-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 04 2023 г., 14:55
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_projekt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_topic` int(12) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `id_user`, `title`, `img`, `content`, `status`, `id_topic`, `created_date`) VALUES
(1, 34, '1234567', '0', '<p>dwadawd</p>', 1, 7, '2023-12-04 14:41:21'),
(2, 34, '1234567', '0', '<p>dawdasdawdas</p>', 1, 8, '2023-12-04 14:43:20'),
(3, 34, '0987654321', '0', '<p>dawdasdasdawd</p>', 1, 8, '2023-12-04 14:44:40'),
(4, 34, '123', '4', '<p>dwadasdawd</p>', 1, 6, '2023-12-04 14:47:00'),
(5, 34, '555', 'EGS_SkulTheHeroSlayer_SouthPAWGames_S2_1200x1600-1c05280772686a124d898cac35e7d0d7.png', '<p>555</p>', 1, 6, '2023-12-04 14:48:22'),
(6, 34, '123', 'MV5BM2Y3MTMzYjUtYjE5NC00NDYyLTk4MjgtYjkwODgzZWIyZjgwXkEyXkFqcGdeQXVyMTI1MzYzODMy._V1_FMjpg_UX1000_.jpg', '<p>dadsadassda</p>', 1, 7, '2023-12-04 14:52:04');

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE `topics` (
  `id` int(12) NOT NULL,
  `name` varchar(121) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(6, 'JS', 'JS1'),
(7, 'HTML5', 'HTML5'),
(8, 'CSS35', 'CSS33');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created`) VALUES
(1, 0, 'Denys', 'test@gmail.com', '12345', '2023-12-03 12:42:52'),
(2, 0, 'Igor', 'Kleban', '1111', '2023-12-03 13:07:12'),
(3, 1, 'Some', 'test@mail.com', '5545', '2023-12-03 13:22:55'),
(8, 1, 'Den', 'test2@mail.com', '4444', '2023-12-03 16:05:44'),
(10, 0, '1222', 'test11@mail.com', 'ioiajdwaowijd', '2023-12-03 16:10:11'),
(11, 0, 'Serhii', 'test12@mail.com', 'ioiajdwaowijd', '2023-12-03 16:24:03'),
(12, 0, 'denys-lytvyn', 'gggg3@gmail.com', '$2y$10$l9XGFZPYysNEyTYQMIUpBuVvfNHNuh7Cu0sT0N./ZqRr7wGJErt0W', '2023-12-03 17:38:10'),
(13, 0, '123', '123@ff.ff', '$2y$10$vSinvdJvzug6ZbHfwCBP/udfq8.mtSBHPch5eFe5.gF9995dXysfS', '2023-12-03 17:43:15'),
(14, 0, 'TeYzee', 'abb@gmail.com', '$2y$10$chx5BYqVqQHdhrNzHkvXpe80xUOKcG3SgdJJdB9SRrRZsKyJV3/ce', '2023-12-03 17:54:17'),
(16, 0, 'denys-lytvyn', '123222222@ff.ff', '$2y$10$TguaDcaMPd6xl3zq1A47uObWJmRRz.HDk98vO0LW46R1J4Y2nPMIO', '2023-12-03 17:56:12'),
(18, 0, 'TeYzee', '22222223@gmail.com', '$2y$10$AMgVS.8mkaE.s/iHXfXufOnMY84aIP9mKYUtIQEr/gNu8cffhe35W', '2023-12-03 17:59:35'),
(20, 0, 'dads', 'dada@gmail.com', '$2y$10$A78Az8aKVr4VR0IPg2Uduepx82LzEwebzjUo9ymHYG6JeOMXCdeBy', '2023-12-03 18:02:39'),
(21, 0, 'denys-lytvyn', 'lytvyn.de@mail.com', '$2y$10$8eQIl.NBT6F3xvUxBBd1we45slKPkCmaFkkuu3WI2AJ3EW9tR5cfi', '2023-12-03 19:04:08'),
(22, 0, 'denys-lytvyn', 'lytvyn.de2@mail.com', '$2y$10$JM62dIjiPbdEPnfAvPa3WOumJw8BTnqODzids578RuCxB.zJJYPje', '2023-12-03 19:05:04'),
(23, 0, 'denys-lytvyn', 'lytvyn.de23@mail.com', '$2y$10$pKFMrMP4lrIyVXaSjTpOg.7X7NEBNwIl5K7DbxWEZBlacP8Ru7F/a', '2023-12-03 19:09:14'),
(24, 0, 'denys-lytvyn', 'lytvyn.de233@mail.com', '$2y$10$ivXeACiYKc5TY5wKYYSQwub7icwLKe5OxH601Yl1ySfAa8sgpLyve', '2023-12-03 19:10:39'),
(25, 0, 'denys-lytvyn', 'lytvyn.de2313@mail.com', '$2y$10$Dk8yzzOCWNMugOwH.vu8Feyjpb//6W/IRh1K712ntU7mJjaN6Qah2', '2023-12-03 19:11:58'),
(26, 0, 'denys-lytvyn', 'lytvyn.de23113@mail.com', '$2y$10$U.Y6et8gUBHZ3aD5m8Jd1eH2vGLnw5upyXggISCXIOKsXTUmSW6v2', '2023-12-03 19:12:49'),
(27, 0, 'denys-lytvyn', 'lytvyn.de231113@mail.com', '$2y$10$RgaLLj01STv93rrzpU2SFuFlmtWyLI2QQzva/Z6ItsAo6yI4iRrtC', '2023-12-03 19:13:24'),
(28, 0, 'denys-lytvyn', 'lytvyn.de2311113@mail.com', '$2y$10$WTFMxLXYViIGQCX9hbrHCeCLiycH5Y7.2NmCdeQd9OuefCQqmuyeq', '2023-12-03 19:13:50'),
(29, 0, 'denys-lytvyn', '1lytvyn.de2311113@mail.com', '$2y$10$ZgNuJ2Gl1MexM7AlBQPwyuzUbRZLHc.h6SMPRw8sGSSAYAgXh8ujy', '2023-12-03 19:14:25'),
(30, 0, 'denys-lytvyn', '1lytvyn.de23111313@mail.com', '$2y$10$of/n666y9ImGub2.NZKam.EIRXyHMOd0TxX9Wr9YgmDrmBlEGDDpK', '2023-12-03 19:21:05'),
(31, 0, 'denys-lytvyn', 'lytvyn.222@gmail.com', '$2y$10$x8NUmTddqbaCgDMfnX.lSOa6iEMdYVA28EKij1z2kSHa1AuC01veG', '2023-12-03 19:27:33'),
(32, 0, 'TeYzee', '111@ff.ff', '$2y$10$rFv/woFzA.Tr5aa9dFXqHuCmUzAMYFCHSxF4aFtpMQQ9Ow6ZkUTWC', '2023-12-03 20:28:50'),
(33, 1, 'TeYzee', 'lytvyn.den@gmail.com', '$2y$10$G5LM6K8xDhUTR6fDxnRyAOIl7nHv22YKn6op2T5ZJxK68BRVwO0Da', '2023-12-03 20:54:32'),
(34, 1, 'root', 'root@gmail.com', '$2y$10$tC2G6XzunyT7U6mfW9vQ1OIN3IvKRHP.nG0yUuPBqcFVJg7/RLgoq', '2023-12-03 21:18:20'),
(35, 0, 'TeYzee', '222@gmail.com', '$2y$10$Nsb6p/51jt2ESpSqyBUNYemX0QhTVoiPFNmqMpkR7l6TFGH4LnN.a', '2023-12-04 09:06:19'),
(36, 0, 'vvv', 'vvv@gmail.com', '$2y$10$ySMzpjJKH6Wm2zgUup0l1OXwGDikMXzTuNx1wPlIKxungqJNIdhj.', '2023-12-04 12:28:16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

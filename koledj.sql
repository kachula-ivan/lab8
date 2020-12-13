-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 17 2019 р., 10:34
-- Версія сервера: 10.4.6-MariaDB
-- Версія PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `koledj`
--

-- --------------------------------------------------------

--
-- Структура таблиці `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(8) NOT NULL,
  `kurator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `kurator_id`) VALUES
(1, 'ІПЗ-31', 1),
(2, 'ІПЗ-32', 1),
(3, 'КІ-31', 2),
(4, 'ІПЗ-41', 3);

-- --------------------------------------------------------

--
-- Структура таблиці `kurators`
--

CREATE TABLE `kurators` (
  `id` int(11) NOT NULL,
  `pib_kuratora` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `kurators`
--

INSERT INTO `kurators` (`id`, `pib_kuratora`) VALUES
(1, 'Грицан П.А.'),
(2, 'Панасюк Г.В.'),
(3, 'Юхта О.А.');

-- --------------------------------------------------------

--
-- Структура таблиці `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `pib` varchar(100) NOT NULL,
  `grupa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `students`
--

INSERT INTO `students` (`id`, `pib`, `grupa_id`) VALUES
(3, 'Захарченко Трофим Александрович', 1),
(4, 'Никонов Владлен Сергеевич', 1),
(5, 'Евдокимов Тит Михайлович', 1),
(6, 'Шумейко Тит Григорьевич', 2),
(7, 'Гаврилов Эдуард Евгеньевич', 2),
(8, 'Павленко Зураб Юхимович', 2),
(9, 'Яровой Харитон Анатолиевич', 3),
(10, 'Пархоменко Игорь Вадимович', 4),
(11, 'Дзюба Эдуард Леонидович', 3);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kurator_id` (`kurator_id`);

--
-- Індекси таблиці `kurators`
--
ALTER TABLE `kurators`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupa_id` (`grupa_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `kurators`
--
ALTER TABLE `kurators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`kurator_id`) REFERENCES `kurators` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`grupa_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

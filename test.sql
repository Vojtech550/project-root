-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 06. čen 2021, 21:54
-- Verze serveru: 10.4.14-MariaDB
-- Verze PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `fav_colour` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `gender`, `fav_colour`) VALUES
(1, 'anons', 'sksk@gmail.com', '233144231', '', '0'),
(2, 'Anna', 'annnhd@gmail.com', '42332', 'Female', 'black'),
(3, 'Anasdf', 'dsf@gmail.com', '5343', 'Non-binary', 'sdaasdasdasd'),
(4, 'Michael', 'asdasd@gmail.com', '223', 'Male', 'black'),
(5, 'Michaelaaa', 'asdasdddd@gmail.com', '23433121', 'Maaasasle', 'blue'),
(6, 'asdasd', 'asasd@gmail.com', '342323', 'Intersex', 'blessed blue'),
(7, 'asdasd', 'asasd@gmail.com', '342323', 'Intersex', 'blessed blue'),
(8, 'AAA', 'aaa@gmail.com', '243323', 'Transgender', 'dsasd'),
(9, 'AAA', 'aaa@gmail.com', '243323', 'Transgender', 'dsasd'),
(10, 'aad', '423ED@gmail.com', '3423', '0', 'light blue');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 27 2023 г., 22:10
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `project_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(355) DEFAULT NULL,
  `card_num` varchar(19) DEFAULT NULL,
  `exp_date` varchar(5) DEFAULT NULL,
  `cvc` varchar(3) DEFAULT NULL,
  `name` varchar(355) DEFAULT NULL,
  `country` varchar(355) DEFAULT NULL,
  `system` varchar(355) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `payments`
--

INSERT INTO `payments` (`id`, `email`, `card_num`, `exp_date`, `cvc`, `name`, `country`, `system`) VALUES
(8, 'alexandr.samarin.04@mail.ru', '**** **** **** 8515', '12/35', '3de', 'jo', 'Afghanistan', 'visa');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(355) DEFAULT NULL,
  `last_name` varchar(355) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `phone` text,
  `avatar` varchar(500) DEFAULT NULL,
  `bg` varchar(500) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `address` varchar(355) DEFAULT 'Not specified',
  `birth` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `change_key` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `avatar`, `bg`, `role`, `address`, `birth`, `change_key`) VALUES
(3, 'Александр', 'Самарин', 'alexandr.samarin.04@mail.ru', '0192023a7bbd73250516f069df18b500', '+7 (900) 855-35-35', 'uploads/1676831927XPB_1139921_HiRes.jpg', 'uploads/backgrounds/1676831953ferrari-sf-23-1.jpg', 'user', 'Not specified', '2023-02-19 17:53:03', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

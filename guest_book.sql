-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 21 2017 г., 15:05
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
--
-- База данных: `guest_book`
--
	CREATE DATABASE guest_book;
-- --------------------------------------------------------

--
-- Структура таблицы `entry`
--

CREATE TABLE `entry` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `homepage` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `browser` varchar(550) NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=INNODB;

--
-- Дамп данных таблицы `entry`
--

INSERT INTO `entry` (`id`, `username`, `email`, `homepage`, `date`, `text`, `ip`, `browser`, `file`) VALUES
(1, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(2, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(3, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(4, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(5, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(6, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(7, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(8, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(9, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(10, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(11, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(12, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(13, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(14, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(15, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(16, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(17, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(18, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(19, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(20, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(21, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(22, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(23, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(24, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(25, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(26, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(27, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(28, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(29, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(30, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5'),
(31, 'admin', 'admin@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b86677840'),
(32, 'user', 'user@guestbook.com', 'http://localhost/guestbook/', CURRENT_TIMESTAMP, 'Hello guest book admin!', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.71', '59c3b880923f5');
--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `entry`
--
ALTER TABLE `entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;


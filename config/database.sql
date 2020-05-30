-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 29 2020 г., 18:44
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `vkpost`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_id` int(50) NOT NULL,
  `owner_id` int(100) NOT NULL,
  `post_text` text NOT NULL,
  `post_attachments` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `post_id`, `owner_id`, `post_text`, `post_attachments`, `date`) VALUES
(3, 584711, 65047210, 'На случай важных переговоров.', 'doc237881961_548005779', '2020-05-17'),
(4, 1547838, 39488246, 'Кроме Тома Круза', 'doc_', '2020-05-17'),
(5, 689965, 147471072, 'Смог бы за ним повторить?😎👊🏻', 'doc211794127_549494617', '2020-05-17'),
(6, 743839, 122196067, 'Вспомнил мамины слова: \"Все будут прыгать и ты прыгнешь?\" \nПризнайся, было?! 😆', 'doc179954579_549301593', '2020-05-17'),
(7, 119867, 52558439, 'Пошутить над другом - бесценно', 'doc135845291_552794004', '2020-05-17'),
(8, 263733, 83555757, 'Нравится такая фигурка? 😇', 'doc_', '2020-05-17');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 29 2020 г., 23:19
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cat`
--

INSERT INTO `cat` (`id`, `title`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'South park', 'Описание категории', 'Описание категории', 'https://example.com/category/1.webp', 0),
(2, 'Улетный TRIP', 'Описание категории', 'Описание категории', 'https://example.com/category/1.webp', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `cat_to_genre`
--

CREATE TABLE `cat_to_genre` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cat_to_genre`
--

INSERT INTO `cat_to_genre` (`id`, `cat_id`, `genre_id`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sourceVideo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proxyServerUrlVideo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `posterImg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `publishDate` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `film`
--

INSERT INTO `film` (`id`, `title`, `name`, `description`, `content`, `keywords`, `sourceVideo`, `proxyServerUrlVideo`, `posterImg`, `date`, `publishDate`, `parent_id`) VALUES
(1, 'Заголовок 1', 'Название 2', 'Описание 3', '', 'Ключевые слова, комедии, ужасы', 'http://proxy-middleware.com/video/one.mp4', 'https://hard-phillakt.github.io/video/one.mp4', 'https://example.com/category/big_tits/alina_purple/preview_img/preview.webp', '2020-10-15', 1434449005, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `film_to_genre`
--

CREATE TABLE `film_to_genre` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `film_to_genre`
--

INSERT INTO `film_to_genre` (`id`, `film_id`, `genre_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `genre`
--

INSERT INTO `genre` (`id`, `title`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'ужасы', 'Описание ужасов', 'ужасы', 'https://example.com/genre/1.webp', 1),
(2, 'Комедии', 'Описание комедий', 'комедий', 'https://example.com/genre/1.webp', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `image_gallery`
--

CREATE TABLE `image_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `image_gallery`
--

INSERT INTO `image_gallery` (`id`, `title`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Картинка - 1', 'Картинка описание', 'Картинка - 1', 'https://example.com/imageGallery/1.webp', 1),
(2, 'Картинка - 2', 'Картинка описание', 'Картинка - 2', 'https://example.com/imageGallery/1.webp', 1),
(3, 'Картинка - 3', 'Описание Картинка - 2', 'Картинка - 2', 'https://example.com/imageGallery/1.webp', 2),
(4, 'Картинка - 4', 'Описание Картинка - 4', 'Картинка - 3', 'https://example.com/imageGallery/1.webp', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `access_token`) VALUES
(1, 'ad', '$2y$13$fNnuWQDsg3Ryb4DDfsmJzey4mKxtzlcTuLdj5fPCvxiqiwqOQiHgS', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cat_to_genre`
--
ALTER TABLE `cat_to_genre`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `film_to_genre`
--
ALTER TABLE `film_to_genre`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `cat_to_genre`
--
ALTER TABLE `cat_to_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `film_to_genre`
--
ALTER TABLE `film_to_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

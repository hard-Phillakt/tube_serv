-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 06 2020 г., 16:55
-- Версия сервера: 5.6.41
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sourceVideo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proxyServerUrlVideo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `posterImg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `publishDate` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `title`, `name`, `slug`, `description`, `content`, `keywords`, `sourceVideo`, `proxyServerUrlVideo`, `posterImg`, `date`, `publishDate`, `parent_id`) VALUES
(1, 'Заголовок 1', 'Название 2', 'zagolovok-1', '<p>Описание 3</p>', 'Ключевые слова, комедии, ужасы', 'Ключевые слова, комедии, ужасы', 'http://proxy-middleware.com/video/one.mp4', 'https://hard-phillakt.github.io/video/one.mp4', 'https://example.com/category/big_tits/alina_purple/preview_img/preview.webp', '2020-10-15', 1434449005, 1),
(2, 'Заголовок 3', 'Заголовок 3', 'zagolovok-3', '<p>Описание 3</p>\r\n', '<p>Описание 3</p>\r\n', 'Ключевые слова, комедии, ужасы', 'http://proxy-middleware.com/video/one.mp4', 'https://example.com/category/big_tits/alina_purple/preview_img/preview.webp', 'https://example.com/category/big_tits/alina_purple/preview_img/preview.webp', '0000-00-00', 20202020, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `films_gallery`
--

CREATE TABLE `films_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `films_gallery`
--

INSERT INTO `films_gallery` (`id`, `title`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Галерея - 1', 'Галерея - 1 описание', 'Галерея - 1', 'https://example.com/imageGallery/1.webp', 1),
(2, 'Галерея - 2', 'Галерея - 1 описание', 'Галерея - 1', 'https://example.com/imageGallery/1.webp', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `films_gallery_to_films_img`
--

CREATE TABLE `films_gallery_to_films_img` (
  `id` int(11) NOT NULL,
  `films_gallery_id` int(11) NOT NULL,
  `films_img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `films_gallery_to_films_img`
--

INSERT INTO `films_gallery_to_films_img` (`id`, `films_gallery_id`, `films_img_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `films_genres`
--

CREATE TABLE `films_genres` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `films_genres`
--

INSERT INTO `films_genres` (`id`, `title`, `slug`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Фильмы', 'filmy', 'Описание Фильмы', 'Фильмы', 'https://example.com/genre/1.webp', 0),
(2, 'Сериалы', 'serialy', 'Описание Сериалы', 'Сериалы', 'https://example.com/genre/1.webp', 0),
(3, 'Аниме', 'anime', 'Описание Аниме', 'Аниме', 'https://example.com/genre/1.webp', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `films_img`
--

CREATE TABLE `films_img` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `films_img`
--

INSERT INTO `films_img` (`id`, `title`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Картинка - 1', 'Картинка описание', 'Картинка - 1', 'https://example.com/imageGallery/1.webp', 1),
(2, 'Картинка - 2', 'Картинка описание', 'Картинка - 2', 'https://example.com/imageGallery/1.webp', 1),
(3, 'Картинка - 3', 'Описание Картинка - 2', 'Картинка - 2', 'https://example.com/imageGallery/1.webp', 2),
(4, 'Картинка - 4', 'Описание Картинка - 4', 'Картинка - 3', 'https://example.com/imageGallery/1.webp', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `films_to_films_gallery`
--

CREATE TABLE `films_to_films_gallery` (
  `id` int(11) NOT NULL,
  `films_id` int(11) NOT NULL,
  `films_gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `films_to_genres`
--

CREATE TABLE `films_to_genres` (
  `id` int(11) NOT NULL,
  `films_id` int(11) NOT NULL,
  `genres_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Структура таблицы `_cat`
--

CREATE TABLE `_cat` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `_cat`
--

INSERT INTO `_cat` (`id`, `title`, `slug`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Комедия', 'komediya', '<p>Описание категории&nbsp;Комедия</p>\r\n', 'Комедия', 'https://example.com/category/1.webp', 0),
(2, 'Боевик', 'boevik', '<p>Описание категории&nbsp;Боевик</p>\r\n', 'Боевик', 'https://example.com/category/1.webp', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `_cat_to_genre`
--

CREATE TABLE `_cat_to_genre` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `_cat_to_genre`
--

INSERT INTO `_cat_to_genre` (`id`, `cat_id`, `genre_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `_film`
--

CREATE TABLE `_film` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sourceVideo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proxyServerUrlVideo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `posterImg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `publishDate` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `_film`
--

INSERT INTO `_film` (`id`, `title`, `name`, `slug`, `description`, `content`, `keywords`, `sourceVideo`, `proxyServerUrlVideo`, `posterImg`, `date`, `publishDate`, `parent_id`) VALUES
(1, 'Заголовок 1', 'Название 2', 'zagolovok-1', '<p>Описание 3</p>\r\n', '', 'Ключевые слова, комедии, ужасы', 'http://proxy-middleware.com/video/one.mp4', 'https://hard-phillakt.github.io/video/one.mp4', 'https://example.com/category/big_tits/alina_purple/preview_img/preview.webp', '2020-10-15', 1434449005, 1),
(2, 'Заголовок 3', 'Заголовок 3', 'zagolovok-3', '<p>Описание 3</p>\r\n', '<p>Описание 3</p>\r\n', 'Ключевые слова, комедии, ужасы', 'http://proxy-middleware.com/video/one.mp4', 'https://example.com/category/big_tits/alina_purple/preview_img/preview.webp', 'https://example.com/category/big_tits/alina_purple/preview_img/preview.webp', '0000-00-00', 20202020, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `_film_to_genres`
--

CREATE TABLE `_film_to_genres` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `_film_to_genres`
--

INSERT INTO `_film_to_genres` (`id`, `film_id`, `genre_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `_genre`
--

CREATE TABLE `_genre` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `_genre`
--

INSERT INTO `_genre` (`id`, `title`, `slug`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Фильмы', 'filmy', 'Описание Фильмы', 'Фильмы', 'https://example.com/genre/1.webp', 1),
(2, 'Сериалы', 'serialy', 'Описание Сериалы', 'Сериалы', 'https://example.com/genre/1.webp', 2),
(3, 'Аниме', 'anime', 'Описание Аниме', 'Аниме', 'https://example.com/genre/1.webp', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `_image_gallery`
--

CREATE TABLE `_image_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `_image_gallery`
--

INSERT INTO `_image_gallery` (`id`, `title`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Картинка - 1', 'Картинка описание', 'Картинка - 1', 'https://example.com/imageGallery/1.webp', 1),
(2, 'Картинка - 2', 'Картинка описание', 'Картинка - 2', 'https://example.com/imageGallery/1.webp', 1),
(3, 'Картинка - 3', 'Описание Картинка - 2', 'Картинка - 2', 'https://example.com/imageGallery/1.webp', 2),
(4, 'Картинка - 4', 'Описание Картинка - 4', 'Картинка - 3', 'https://example.com/imageGallery/1.webp', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films_gallery`
--
ALTER TABLE `films_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films_gallery_to_films_img`
--
ALTER TABLE `films_gallery_to_films_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films_genres`
--
ALTER TABLE `films_genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films_img`
--
ALTER TABLE `films_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films_to_films_gallery`
--
ALTER TABLE `films_to_films_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films_to_genres`
--
ALTER TABLE `films_to_genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `_cat`
--
ALTER TABLE `_cat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `_cat_to_genre`
--
ALTER TABLE `_cat_to_genre`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `_film`
--
ALTER TABLE `_film`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `_film_to_genres`
--
ALTER TABLE `_film_to_genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `_genre`
--
ALTER TABLE `_genre`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `_image_gallery`
--
ALTER TABLE `_image_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `films_gallery`
--
ALTER TABLE `films_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `films_gallery_to_films_img`
--
ALTER TABLE `films_gallery_to_films_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `films_genres`
--
ALTER TABLE `films_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `films_img`
--
ALTER TABLE `films_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `films_to_films_gallery`
--
ALTER TABLE `films_to_films_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `films_to_genres`
--
ALTER TABLE `films_to_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `_cat`
--
ALTER TABLE `_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `_cat_to_genre`
--
ALTER TABLE `_cat_to_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `_film`
--
ALTER TABLE `_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `_film_to_genres`
--
ALTER TABLE `_film_to_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `_genre`
--
ALTER TABLE `_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `_image_gallery`
--
ALTER TABLE `_image_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

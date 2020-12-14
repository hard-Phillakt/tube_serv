-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2020 г., 19:45
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
-- Структура таблицы `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_url_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proxy_url_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `world_premiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date_in_russia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `anime`
--

INSERT INTO `anime` (`id`, `title`, `original_title`, `slug`, `description`, `content`, `keywords`, `original_url_video`, `proxy_url_video`, `poster_img`, `year`, `publish_date`, `tagline`, `producer`, `views`, `world_premiere`, `release_date_in_russia`, `duration`, `parent_id`) VALUES
(3, 'Варкрафт', 'Warcraft', 'warcraft', '<p>Description cannot be blank.</p>\r\n', '<p>Content</p>\r\n', '<p>Keywords</p>\r\n', 'Original Url Video', 'Original Url Video', 'Original Url Video', '07-Дек-2020', '08-Дек-2020', '<p>Original Url Video</p>\r\n', 'Producer', '1', '30-Ноя-2020', '05-Дек-2020', '123 мин. / 02:03', 1),
(4, 'Title', 'Title', 'Title', '<p>Title</p>\r\n', '<p>Title</p>\r\n', '<p>Title</p>\r\n', 'Title', 'Title', 'Title', 'Title', '08122020', '<p>Original Url Video</p>\r\n', 'Варкрафт 2', '', '31-Дек-2020', '11-Дек-2020', '123 мин. / 02:03', 1),
(5, 'Варкрафт3', 'Варкрафт3', 'Варкрафт3', '<p>Варкрафт3</p>', '<p>Варкрафт3</p>\r\n', '<p>Варкрафт3</p>', 'Варкрафт3', 'Варкрафт3', 'Варкрафт3', '24-Май-2016', '08-Дек-2020', '<p>Варкрафт3</p>', 'Варкрафт3', '123', '08-Дек-2020', '03-Янв-2021', 'Варкрафт3', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `anime_gallery`
--

CREATE TABLE `anime_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `anime_gallery`
--

INSERT INTO `anime_gallery` (`id`, `title`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Галерея - 1', 'Галерея - 1 описание', 'Галерея - 1', 'https://example.com/imageGallery/1.webp', 1),
(2, 'Галерея - 2', 'Галерея - 1 описание', 'Галерея - 1', 'https://example.com/imageGallery/1.webp', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `anime_gallery_to_anime_img`
--

CREATE TABLE `anime_gallery_to_anime_img` (
  `id` int(11) NOT NULL,
  `films_gallery_id` int(11) NOT NULL,
  `films_img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `anime_gallery_to_anime_img`
--

INSERT INTO `anime_gallery_to_anime_img` (`id`, `films_gallery_id`, `films_img_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `anime_genres`
--

CREATE TABLE `anime_genres` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `anime_genres`
--

INSERT INTO `anime_genres` (`id`, `title`, `slug`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Фильмы', 'filmy', 'Описание Фильмы', 'Фильмы', 'https://example.com/genre/1.webp', 0),
(2, 'Сериалы', 'serialy', 'Описание Сериалы', 'Сериалы', 'https://example.com/genre/1.webp', 0),
(3, 'Аниме', 'anime', 'Описание Аниме', 'Аниме', 'https://example.com/genre/1.webp', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `anime_img`
--

CREATE TABLE `anime_img` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `anime_img`
--

INSERT INTO `anime_img` (`id`, `title`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Картинка - 1', 'Картинка описание', 'Картинка - 1', 'https://example.com/imageGallery/1.webp', 1),
(2, 'Картинка - 2', 'Картинка описание', 'Картинка - 2', 'https://example.com/imageGallery/1.webp', 1),
(3, 'Картинка - 3', 'Описание Картинка - 2', 'Картинка - 2', 'https://example.com/imageGallery/1.webp', 2),
(4, 'Картинка - 4', 'Описание Картинка - 4', 'Картинка - 3', 'https://example.com/imageGallery/1.webp', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `anime_items`
--

CREATE TABLE `anime_items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_url_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proxy_url_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `world_premiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date_in_russia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `anime_items`
--

INSERT INTO `anime_items` (`id`, `title`, `original_title`, `slug`, `description`, `content`, `keywords`, `original_url_video`, `proxy_url_video`, `poster_img`, `year`, `publish_date`, `tagline`, `producer`, `views`, `world_premiere`, `release_date_in_russia`, `duration`, `parent_id`) VALUES
(6, 'Серия к аниме', 'Серия к аниме', ' ацу', 'Серия к аниме', 'Серия к аниме', 'Серия к аниме', 'Серия к аниме', 'Серия к аниме', 'Серия к аниме', 'Серия к аниме', 'Серия к аниме', 'Серия к аниме', 'Серия к аниме', 'ацуацу', 'Серия к аниме', 'Серия к аниме', 'Серия к аниме', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `anime_to_anime_gallery`
--

CREATE TABLE `anime_to_anime_gallery` (
  `id` int(11) NOT NULL,
  `films_id` int(11) NOT NULL,
  `films_gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `anime_to_anime_gallery`
--

INSERT INTO `anime_to_anime_gallery` (`id`, `films_id`, `films_gallery_id`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `anime_to_genres`
--

CREATE TABLE `anime_to_genres` (
  `id` int(11) NOT NULL,
  `films_id` int(11) NOT NULL,
  `genres_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `anime_to_genres`
--

INSERT INTO `anime_to_genres` (`id`, `films_id`, `genres_id`) VALUES
(1, 3, 1),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_url_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proxy_url_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `world_premiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date_in_russia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `title`, `original_title`, `slug`, `description`, `content`, `keywords`, `original_url_video`, `proxy_url_video`, `poster_img`, `year`, `publish_date`, `tagline`, `producer`, `views`, `world_premiere`, `release_date_in_russia`, `duration`, `parent_id`) VALUES
(1, 'Варкрафт', 'Warcraft', 'varkraft', '<p>Медив, великий маг, призванный защищать мир людей Азерота от врагов, был одержим величайшим злом в мире духом Саргераса, повелителем Пылающего легиона демонов.</p>\r\n', '<p>Медив, великий маг, призванный защищать мир людей Азерота от врагов, был одержим величайшим злом в мире &ndash; духом Саргераса, повелителем Пылающего легиона демонов. Под его влиянием Медив начинает эксперименты с пространственными вратами. Он устанавливает связь с Гул&#39;даном &ndash; шаманом орков Дренора и делает своим союзником. Вместе они открывают Темный портал, давая возможность Орде проникнуть в мир людей.</p>\r\n\r\n<p>В древности орки были расой великих и честных воинов, но их проклял Пылающий легион демонов и превратил в свое оружие против всего живого в мире. Обученные черной магии и некромантии, они невольно стали причиной гибели своего мира от демонской скверны. Оркам был обещан новый, цветущий мир, который они смогут сделать своим домом &ndash; Азерот. Чернорук Разрушитель стал тем, кто смог объединить разрозненные кланы орков и возглавил поход Орды на Штромград. Блестящий стратег и умелый дипломат, он сумел убедить шаманов орков отказаться от родной религии и принять знание чернокнижников. Именно на него сделали ставку в Пылающем легионе, решив, что Чернорук сможет подчинить себе мир людей.</p>\r\n', '<p>Медив, великий маг, призванный защищать мир людей Азерота от врагов, был одержим величайшим злом в мире &ndash; духом Саргераса, повелителем Пылающего легиона демонов.</p>\r\n', 'itvi.herokuapp.com/warcraft/warcraft_2016.m3u8', 'https://proxy-video.herokuapp.com', '/files/global/films/warcraft/poster/warcraft-poster.webp', '24-Май-2016', '18-Дек-2020', '<p><span style=\"color:rgb(48, 48, 48); font-family:arial,tahoma sans-serif; font-size:12px\">&laquo;Два мира - одна судьба&raquo;</span></p>\r\n', 'Дункан Джонс', '', '24-Май-2016', '26-Май-2016', '123 мин. / 02:03', 0),
(2, 'Хоббит: Нежданное путешествие', 'The Hobbit: An Unexpected Journey', 'hobbit-nezhdannoe-puteshestvie', '<p>Зрителей ждут удивительные путешествия Бильбо Бэггинса. Он отправляется в поход с одной единственной целью вернуть гномам их Эребор, королевство, которое было отнято у них страшным драконом Смогом.</p>\r\n', '<p>Зрителей ждут удивительные путешествия Бильбо Бэггинса. Он отправляется в поход с одной единственной целью &ndash; вернуть гномам их Эребор, королевство, которое было отнято у них страшным драконом Смогом. В дороге он заводит знакомство с чародеем Гэндальфом Серым и они присоединяются к 30-ти гномам, воинство которых возглавляет Торин Дубощит.&nbsp; Их ждет долгая и опасная дорога по Дикому Краю, предательским землям, которые населяют орки и гоблины, пауки и народы, меняющие шкуры.&nbsp; Но, что бы попасть в пустоши Одинокой Горы, что находятся на Востоке, им необходимо пройти через туннели населенные гоблинами. Там-то и произойдет&nbsp; легендарная встреча Бильбо и Голлума.&nbsp; После этой встречи, в распоряжение Бильбо поступит простое золотое кольцо, с непростыми свойствами&hellip; изменится не только его жизнь, но и всего Средиземья.</p>\r\n', '<p>Хоббит: Нежданное путешествие (2012), смотреть онлайн&nbsp;в хорошем качестве, бесплатно.</p>\r\n', 'itvi.herokuapp.com/hobbit_nezhdannoe_puteschestvie/hobbit_nezhdannoe_puteschestvie_.m3u8', 'https://proxy-video.herokuapp.com/', '/files/global/films/hobbit-one/poster/hobbit-one-poster.webp', '28-Ноя-2012', '13-Дек-2020', '<p><span style=\"color:rgb(48, 48, 48); font-family:arial,tahoma sans-serif; font-size:12px\">&laquo;From the smallest beginnings come the greatest legends&raquo;</span></p>\r\n', 'Питер Джексон', '', '28-Ноя-2012', '19-Дек-2012', '169 мин. / 02:49', 0);

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

-- --------------------------------------------------------

--
-- Структура таблицы `films_gallery_to_films_img`
--

CREATE TABLE `films_gallery_to_films_img` (
  `id` int(11) NOT NULL,
  `films_gallery_id` int(11) NOT NULL,
  `films_img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Комедия', 'komediya', 'Комедия', 'Комедия', '0', 0),
(2, 'Ужасы', 'uzhasy', 'Ужасы', 'Ужасы', '0', 0),
(3, 'Боевик', 'boevik', 'Боевик', 'Боевик', '0', 0),
(4, 'Наше кино', 'nashe-kino', 'Наше кино', 'Наше кино', '0', 0),
(5, 'Фантастика', 'fantastika', 'Фантастика', 'Фантастика', '0', 0),
(6, 'Мелодрама', 'melodrama', 'Мелодрама', 'Мелодрама', '0', 0),
(7, 'Триллер', 'triller', 'Триллер', 'Триллер', '0', 0),
(8, 'Фэнтези', 'fentezi', 'Фэнтези', 'Фэнтези', '0', 0),
(9, 'Приключения', 'priklyucheniya', 'Приключения', 'Приключения', '0', 0),
(10, 'Военный', 'voennyy', 'Военный', 'Военный', '0', 0),
(11, 'Криминал', 'kriminal', 'Криминал', 'Криминал', '0', 0),
(12, 'Драма', 'drama', 'Драма', 'Драма', '0', 0),
(13, 'Детектив', 'detektiv', 'Детектив', 'Детектив', '0', 0),
(14, 'Семейный', 'semeynyy', 'Семейный', 'Семейный', '0', 0),
(15, 'Биография', 'biografiya', 'Биография', 'Биография', '0', 0),
(16, 'История', 'istoriya', 'История', 'История', '0', 0),
(17, 'Музыка', 'muzyka', 'Музыка', 'Музыка', '0', 0),
(18, 'Вестерн', 'vestern', 'Вестерн', 'Вестерн', '0', 0),
(19, 'Спорт', 'sport', 'Спорт', 'Спорт', '0', 0),
(20, 'Мюзикл', 'myuzikl', 'Мюзикл', 'Мюзикл', '0', 0),
(21, 'Документальный', 'dokumentalnyy', 'Документальный', 'Документальный', '0', 0),
(22, 'Аниме', 'anime', 'Аниме', 'Аниме', '0', 0),
(24, 'Сериалы', 'serialy', 'Сериалы', 'Сериалы', '0', 0);

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

--
-- Дамп данных таблицы `films_to_genres`
--

INSERT INTO `films_to_genres` (`id`, `films_id`, `genres_id`) VALUES
(3, 1, 8),
(4, 1, 3),
(5, 1, 9),
(6, 2, 8),
(7, 2, 14),
(8, 2, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `serials`
--

CREATE TABLE `serials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_url_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proxy_url_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `world_premiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date_in_russia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `serials`
--

INSERT INTO `serials` (`id`, `title`, `original_title`, `slug`, `description`, `content`, `keywords`, `original_url_video`, `proxy_url_video`, `poster_img`, `year`, `publish_date`, `tagline`, `producer`, `views`, `world_premiere`, `release_date_in_russia`, `duration`, `parent_id`) VALUES
(3, 'Варкрафт', 'Warcraft', 'warcraft', '<p>Description cannot be blank.</p>', '<p>Content</p>\r\n', '<p>Keywords</p>', 'Original Url Video', 'Original Url Video', 'Original Url Video', '07-Дек-2020', '08-Дек-2020', '<p>Original Url Video</p>', 'Producer', '1', '30-Ноя-2020', '05-Дек-2020', '123 мин. / 02:03', 1),
(4, 'Title', 'Title', 'Title', '<p>Title</p>\r\n', '<p>Title</p>\r\n', '<p>Title</p>\r\n', 'Title', 'Title', 'Title', 'Title', '08122020', '<p>Original Url Video</p>\r\n', 'Варкрафт 2', '', '31-Дек-2020', '11-Дек-2020', '123 мин. / 02:03', 1),
(5, 'Варкрафт3', 'Варкрафт3', 'Варкрафт3', '<p>Варкрафт3</p>\r\n', '<p>Варкрафт3</p>\r\n', '<p>Варкрафт3</p>\r\n', 'Варкрафт3', 'Варкрафт3', 'Варкрафт3', '24-Май-2016', '08-Дек-2020', '<p>Варкрафт3</p>\r\n', 'Варкрафт3', '', '08-Дек-2020', '03-Янв-2021', 'Варкрафт3', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `serials_gallery`
--

CREATE TABLE `serials_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `serials_gallery`
--

INSERT INTO `serials_gallery` (`id`, `title`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Галерея - 1', 'Галерея - 1 описание', 'Галерея - 1', 'https://example.com/imageGallery/1.webp', 1),
(2, 'Галерея - 2', 'Галерея - 1 описание', 'Галерея - 1', 'https://example.com/imageGallery/1.webp', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `serials_gallery_to_serials_img`
--

CREATE TABLE `serials_gallery_to_serials_img` (
  `id` int(11) NOT NULL,
  `films_gallery_id` int(11) NOT NULL,
  `films_img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `serials_gallery_to_serials_img`
--

INSERT INTO `serials_gallery_to_serials_img` (`id`, `films_gallery_id`, `films_img_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `serials_genres`
--

CREATE TABLE `serials_genres` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `serials_genres`
--

INSERT INTO `serials_genres` (`id`, `title`, `slug`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Фильмы', 'filmy', 'Описание Фильмы', 'Фильмы', 'https://example.com/genre/1.webp', 0),
(2, 'Сериалы', 'serialy', 'Описание Сериалы', 'Сериалы', 'https://example.com/genre/1.webp', 0),
(3, 'Аниме', 'anime', 'Описание Аниме', 'Аниме', 'https://example.com/genre/1.webp', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `serials_img`
--

CREATE TABLE `serials_img` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `serials_img`
--

INSERT INTO `serials_img` (`id`, `title`, `description`, `alt`, `img`, `parent_id`) VALUES
(1, 'Картинка - 1', 'Картинка описание', 'Картинка - 1', 'https://example.com/imageGallery/1.webp', 1),
(2, 'Картинка - 2', 'Картинка описание', 'Картинка - 2', 'https://example.com/imageGallery/1.webp', 1),
(3, 'Картинка - 3', 'Описание Картинка - 2', 'Картинка - 2', 'https://example.com/imageGallery/1.webp', 2),
(4, 'Картинка - 4', 'Описание Картинка - 4', 'Картинка - 3', 'https://example.com/imageGallery/1.webp', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `serials_items`
--

CREATE TABLE `serials_items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_url_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proxy_url_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `world_premiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date_in_russia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `serials_items`
--

INSERT INTO `serials_items` (`id`, `title`, `original_title`, `slug`, `description`, `content`, `keywords`, `original_url_video`, `proxy_url_video`, `poster_img`, `year`, `publish_date`, `tagline`, `producer`, `views`, `world_premiere`, `release_date_in_russia`, `duration`, `parent_id`) VALUES
(3, 'Варкрафт', 'Warcraft', 'warcraft', '<p>Description cannot be blank.</p>\r\n', '<p>Content</p>\r\n', '<p>Keywords</p>\r\n', 'Original Url Video', 'Original Url Video', 'Original Url Video', '07-Дек-2020', '08-Дек-2020', '<p>Original Url Video</p>\r\n', 'Producer', '1', '30-Ноя-2020', '05-Дек-2020', '123 мин. / 02:03', 1),
(4, 'Title', 'Title', 'Title', '<p>Title</p>\r\n', '<p>Title</p>\r\n', '<p>Title</p>\r\n', 'Title', 'Title', 'Title', 'Title', '08122020', '<p>Original Url Video</p>\r\n', 'Варкрафт 2', '', '31-Дек-2020', '11-Дек-2020', '123 мин. / 02:03', 1),
(5, 'Варкрафт3', 'Варкрафт3', 'Варкрафт3', '<p>Варкрафт3</p>', '<p>Варкрафт3</p>\r\n', '<p>Варкрафт3</p>', 'Варкрафт3', 'Варкрафт3', 'Варкрафт3', '24-Май-2016', '08-Дек-2020', '<p>Варкрафт3</p>', 'Варкрафт3', '123', '08-Дек-2020', '03-Янв-2021', 'Варкрафт3', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `serials_to_genres`
--

CREATE TABLE `serials_to_genres` (
  `id` int(11) NOT NULL,
  `films_id` int(11) NOT NULL,
  `genres_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `serials_to_genres`
--

INSERT INTO `serials_to_genres` (`id`, `films_id`, `genres_id`) VALUES
(1, 3, 1),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `serials_to_serials_gallery`
--

CREATE TABLE `serials_to_serials_gallery` (
  `id` int(11) NOT NULL,
  `films_id` int(11) NOT NULL,
  `films_gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `serials_to_serials_gallery`
--

INSERT INTO `serials_to_serials_gallery` (`id`, `films_id`, `films_gallery_id`) VALUES
(1, 3, 1);

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
-- Индексы таблицы `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `anime_gallery`
--
ALTER TABLE `anime_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `anime_gallery_to_anime_img`
--
ALTER TABLE `anime_gallery_to_anime_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `anime_genres`
--
ALTER TABLE `anime_genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `anime_img`
--
ALTER TABLE `anime_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `anime_items`
--
ALTER TABLE `anime_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `anime_to_anime_gallery`
--
ALTER TABLE `anime_to_anime_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `anime_to_genres`
--
ALTER TABLE `anime_to_genres`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `serials`
--
ALTER TABLE `serials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `serials_gallery`
--
ALTER TABLE `serials_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `serials_gallery_to_serials_img`
--
ALTER TABLE `serials_gallery_to_serials_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `serials_genres`
--
ALTER TABLE `serials_genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `serials_img`
--
ALTER TABLE `serials_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `serials_items`
--
ALTER TABLE `serials_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `serials_to_genres`
--
ALTER TABLE `serials_to_genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `serials_to_serials_gallery`
--
ALTER TABLE `serials_to_serials_gallery`
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
-- AUTO_INCREMENT для таблицы `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `anime_gallery`
--
ALTER TABLE `anime_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `anime_gallery_to_anime_img`
--
ALTER TABLE `anime_gallery_to_anime_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `anime_genres`
--
ALTER TABLE `anime_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `anime_img`
--
ALTER TABLE `anime_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `anime_items`
--
ALTER TABLE `anime_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `anime_to_anime_gallery`
--
ALTER TABLE `anime_to_anime_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `anime_to_genres`
--
ALTER TABLE `anime_to_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `films_gallery`
--
ALTER TABLE `films_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `films_gallery_to_films_img`
--
ALTER TABLE `films_gallery_to_films_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `films_genres`
--
ALTER TABLE `films_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `films_img`
--
ALTER TABLE `films_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `films_to_films_gallery`
--
ALTER TABLE `films_to_films_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `films_to_genres`
--
ALTER TABLE `films_to_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `serials`
--
ALTER TABLE `serials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `serials_gallery`
--
ALTER TABLE `serials_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `serials_gallery_to_serials_img`
--
ALTER TABLE `serials_gallery_to_serials_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `serials_genres`
--
ALTER TABLE `serials_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `serials_img`
--
ALTER TABLE `serials_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `serials_items`
--
ALTER TABLE `serials_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `serials_to_genres`
--
ALTER TABLE `serials_to_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `serials_to_serials_gallery`
--
ALTER TABLE `serials_to_serials_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

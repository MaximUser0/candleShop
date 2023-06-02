-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2023 г., 17:01
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `candelDB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_candle` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `baskets`
--

INSERT INTO `baskets` (`id`, `id_user`, `id_candle`, `count`, `created_at`, `updated_at`) VALUES
(2, 4, 1, 2, '2023-06-02 10:48:14', '2023-06-02 10:48:14'),
(3, 4, 2, 2, '2023-06-02 10:48:22', '2023-06-02 10:48:22'),
(4, 4, 3, 4, '2023-06-02 10:48:32', '2023-06-02 10:54:05');

-- --------------------------------------------------------

--
-- Структура таблицы `candles`
--

CREATE TABLE `candles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_main` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aroma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `universe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `candles`
--

INSERT INTO `candles` (`id`, `title`, `img_main`, `img_1`, `img_2`, `img_3`, `aroma`, `universe`, `volume`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Хорошая свеча', 'download/img/1685614753Rectangle 64.png', 'download/img/1685614939необычная форма свечи.png', 'download/img/1685614939brand__photo_02.png', 'download/img/1685614753Brand_photo_01.png', 'Пряный', 'Гарри Поттер', 200, 500, 'Просто хорошая', '2023-05-31 06:04:53', '2023-06-01 09:09:30'),
(2, 'Свеча с ароматом лесных цветов', 'download/img/1685524956Photo_prouct.png', 'download/img/1685524956большая_баночка_свеча.png', 'download/img/1685524956свеч_2.jpg', 'download/img/1685524956о_нас01.png', 'Цветочный', 'Genshin Impact', 120, 1200, 'Прекрасный аромат  на каждый день.', '2023-05-31 06:22:36', '2023-06-01 10:37:45'),
(3, 'Пряная свеча с неугасающим ароматом', 'download/img/1685527127свеча.jpg', 'download/img/1685527127о_нас01.png', 'download/img/1685527127свеч_2.jpg', 'download/img/1685527127большая_баночка_свеча.png', 'Пряный', 'Клуб Винкс', 250, 2500, 'Ароматическая свеча из растительного воска с натуральными парфюмерными маслами — это отличный\r\n                    подарок.\r\n                    Все наши свечи изготавливаются из премиального натурального соевого воска американского производства.\r\n                \r\n                    Мы используем ароматизаторы из США, произведенные в соответствии с международными стандартами безопасности IFRA и\r\n                    REACH.\r\n                    Как и все компоненты они Vegan Friendly и Cruelty Free.\r\n                \r\n                    Cвеча в металлической баночке удобна наличием завинчивающейся крышки. Её можно использовать как дорожную свечу,\r\n                    тогда\r\n                    ваш любимы аромат останется с вами где бы вы ни были.', '2023-05-31 06:58:47', '2023-06-01 11:08:53');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_candle` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `id_user`, `id_candle`, `content`, `grade`, `created_at`, `updated_at`) VALUES
(2, 4, 1, 'cool!', 3, '2023-06-02 08:59:46', '2023-06-02 08:59:46'),
(3, 4, 1, 'ЛАДНО поставю я вам 5', 5, '2023-06-02 09:12:39', '2023-06-02 09:12:39'),
(5, 4, 3, 'Eeeee!', 4, '2023-06-02 09:29:00', '2023-06-02 09:29:00'),
(7, 4, 2, 'Плохо... 2-', 2, '2023-06-02 10:58:38', '2023-06-02 10:58:38');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_31_072958_create_candles_table', 2),
(6, '2023_05_31_073041_create_comments_table', 2),
(7, '2023_06_02_130951_create_baskets_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `ban` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `ban`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'user@gmail.com', NULL, '$2y$10$AgMR/4yr0OIyDK8L3xWLdOzuVNfoygcPGyDrMR7TjASamzKHKw/CO', 0, 0, NULL, '2023-05-30 10:02:51', '2023-06-01 08:30:31'),
(5, 'admin@gmail.com', NULL, '$2y$10$vdZUklgmH7HTH1wrPwKl6e96bKsBhuS5x5gLY/Nc.cjZtjklf9V.e', 1, 0, NULL, '2023-05-30 10:05:58', '2023-05-30 10:05:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baskets_id_user_foreign` (`id_user`),
  ADD KEY `baskets_id_candle_foreign` (`id_candle`);

--
-- Индексы таблицы `candles`
--
ALTER TABLE `candles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_id_user_foreign` (`id_user`),
  ADD KEY `id_candle` (`id_candle`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `candles`
--
ALTER TABLE `candles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `baskets_id_candle_foreign` FOREIGN KEY (`id_candle`) REFERENCES `candles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `baskets_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_candle`) REFERENCES `candles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2019. Ápr 27. 15:36
-- Kiszolgáló verziója: 5.7.24
-- PHP verzió: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `travelagency`
--
CREATE DATABASE IF NOT EXISTS `travelagency` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `travelagency`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_03_10_155705_create_travels_table', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `travels`
--

DROP TABLE IF EXISTS `travels`;
CREATE TABLE IF NOT EXISTS `travels` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date DEFAULT NULL,
  `price` int(11) NOT NULL,
  `maxNum` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `travels`
--

INSERT INTO `travels` (`id`, `country`, `city`, `content`, `description`, `startDate`, `endDate`, `price`, `maxNum`, `created_at`, `updated_at`) VALUES
(1, 'Turkey', 'Istanbul', '5 days trip to Istanbul', 'This is a five days tour to Istanbul with accommodation, breakfast and hot dinner', '2019-07-11', '2019-07-16', 568, 3, '2019-04-22 18:07:18', '2019-04-22 18:07:18'),
(2, 'Italy', 'Rome', '4 days trip to Rome', 'This is a four days tour to Rome with accommodation, breakfast and hot dinner', '2019-08-08', '2019-08-12', 1024, 1, '2019-04-22 18:10:31', '2019-04-22 18:10:31'),
(3, 'Croatia', 'Vir', '3 days trip to Vir', 'This is a five days tour to Istanbul.\r\n\r\n\r\nWith accommodation, breakfast and hot dinner', '2019-07-03', '2019-07-06', 650, 4, '2019-04-27 14:30:24', '2019-04-27 14:30:24'),
(4, 'Italy', 'Lignano', '4 days trip to Lignano', 'This is a four days tour to Rome with accommodation, breakfast and hot dinner.', '2019-07-10', '2019-07-14', 1000, 5, '2019-04-27 15:01:06', '2019-04-27 15:01:06');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phoneNumber` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `travels_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phoneNumber`, `travels_id`) VALUES
(1, 'Kristof Kassai', 'kassai.gigi@gmail.com', NULL, '$2y$10$6MmavKBGlt0vk2e6n93/kuoTk2Z4g2cG8EB6.PFr5bCXySJJzH7LC', 'cmbB3p4l1k7SDaa0PnJ6y4fx6fHhIDHUj6E6FoUjBZKPTGbQsettm3plBi1R', '2019-04-10 18:00:31', '2019-04-27 15:15:46', '06707737745', 0),
(2, 'Egervári Anna', 'egervari_anna@hotmail.hu', NULL, '$2y$10$rhp.99JRZBukO6FgDLaQnOWYGHD6bMqFV0hiishf.1KmbzjSH5EHG', '7egyeLDsaVHfKEGBpgY2bNrT91eusHW6ZvyhamQzYbrhlmmyck1VwvlyKGxX', '2019-04-10 18:00:46', '2019-04-22 18:34:53', NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

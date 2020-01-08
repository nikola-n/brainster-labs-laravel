-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2020 at 01:36 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.3.13-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Challenge22`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin', 'admin', '2020-01-02 21:35:52', '2020-01-02 21:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `image`, `title`, `subtitle`, `description`, `created_at`, `updated_at`) VALUES
(5, 'https://lorempixel.com/640/480/?69012', 'Title \n modi', 'ut subtitle', 'Nostrum aliquam reprehenderit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit harum voluptatibus tenetur assumenda. Impedit molestias, repellat explicabo vero dolore eaque eligendi consequatur architecto pariatur dolorum necessitatibus enim inventore laboriosam est?\n', '2019-12-29 21:15:35', '2019-12-29 21:15:35'),
(29, 'https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fssa', 'kokokokokokokkokoko', 'NIKOLaaaAAAAAAaaaaAaAanbvghghg', '2020-01-07 21:13:23', '2020-01-07 21:42:52'),
(33, 'https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'oiioio', 'n,nm,n,n,n', 'daskadskdaslsak;sl;lkdsksa;kdas', '2020-01-07 21:16:16', '2020-01-07 21:16:16'),
(42, 'https://lorempixel.com/640/480/?41269', 'et', 'autem', 'Ut voluptas.', '2020-01-07 22:45:15', '2020-01-07 22:45:15'),
(43, 'https://lorempixel.com/640/480/?35521', 'aut', 'quis', 'Officiis assumenda itaque.', '2020-01-07 22:45:15', '2020-01-07 22:45:15'),
(44, 'https://lorempixel.com/640/480/?31819', 'amet', 'consequatur', 'Fuga rerum.', '2020-01-07 22:45:15', '2020-01-07 22:45:15'),
(45, 'https://lorempixel.com/640/480/?87492', 'maiores', 'ea', 'Qui et vel.', '2020-01-07 22:45:15', '2020-01-07 22:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `email`, `number`, `company`, `created_at`, `updated_at`) VALUES
(1, 'nikola.najdov95@gmail.com', 702564942, 'Brainster', '2019-12-29 22:32:30', '2019-12-29 22:32:30'),
(2, 'n1kolche01@hotmail.com', 702564942, 'Brainster', '2019-12-29 22:33:30', '2019-12-29 22:33:30'),
(3, 'n1kolche01@hotmail.com', 702564942, 'Brainster', '2019-12-29 22:33:56', '2019-12-29 22:33:56'),
(4, 'n1kolche01@hotmail.com', 702564942, 'Brainster', '2019-12-29 22:35:26', '2019-12-29 22:35:26'),
(26, 'tashko8@hotmail.com', 702564942, 'Brainster', '2019-12-29 22:53:14', '2019-12-29 22:53:14'),
(27, 'tashko8@hotmail.com', 702564942, 'Brainster', '2019-12-29 22:53:32', '2019-12-29 22:53:32'),
(28, 'fafk@hoasfsa', 9898998, 'Brainsterklklklkl', '2019-12-29 22:54:25', '2019-12-29 22:54:25'),
(29, 'ajjakdak@ldakjakldasj', 9911727, 'DKADUA', '2019-12-29 22:56:13', '2019-12-29 22:56:13'),
(30, 'naum@hotmail.com', 702564942, 'DKADUAyyyuy', '2020-01-02 17:58:28', '2020-01-02 17:58:28'),
(31, 'tashko8@hotmail.com', 44, 'Brainsterklklklkl', '2020-01-02 18:04:21', '2020-01-02 18:04:21'),
(32, 'nikola.najdov95@gmail.com', 702564942, 'Brainsterklklklkl', '2020-01-02 20:17:46', '2020-01-02 20:17:46'),
(33, 'n1kolche01@hotmail.com', 702564942, 'Brainsterklklklkl', '2020-01-02 22:21:28', '2020-01-02 22:21:28'),
(34, 'tashko8@hotmail.com', 702564942, 'DKADUAyyyuy', '2020-01-02 23:13:17', '2020-01-02 23:13:17'),
(35, 'admin@admin', 702564942, 'DKADUAyyyuy', '2020-01-02 23:13:39', '2020-01-02 23:13:39'),
(36, 'nikola.najdov95@gmail.com', 702564942, 'Brainsterklklklkl', '2020-01-02 23:29:10', '2020-01-02 23:29:10'),
(37, 'nikola.najdov95@gmail.com', 702564942, 'DKADUAyyyuy', '2020-01-03 19:10:13', '2020-01-03 19:10:13'),
(38, 'admin@admin', 966886, 'DKADUAyyyuy', '2020-01-07 21:32:44', '2020-01-07 21:32:44'),
(39, 'nikola.najdov95@gmail.com', 702564942, 'Brainster', '2020-01-07 22:40:36', '2020-01-07 22:40:36'),
(40, 'nikola.najdov95@gmail.com', 702564942, 'DKADUAyyyuy', '2020-01-07 23:23:32', '2020-01-07 23:23:32'),
(41, 'n1kolche01@hotmail.com', 702564942, 'nikolaanbbnb', '2020-01-07 23:25:02', '2020-01-07 23:25:02'),
(42, 'naum@hotmail.com', 702564942, 'DKADUAyyyuy', '2020-01-07 23:31:46', '2020-01-07 23:31:46'),
(43, 'tashko8@hotmail.com', 702564942, 'kokokokoko', '2020-01-07 23:33:07', '2020-01-07 23:33:07'),
(44, 'tashko8@hotmail.com', 702564942, 'kokokokoko', '2020-01-07 23:34:16', '2020-01-07 23:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_29_203500_cards_table', 1),
(2, '2019_12_29_220554_companies', 2),
(3, '2019_12_29_233113_companies', 3),
(4, '2019_12_30_001836_admin', 4),
(5, '2020_01_02_213118_admin', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

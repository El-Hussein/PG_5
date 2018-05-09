-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2018 at 12:07 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PG_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `booknig_dates`
--

CREATE TABLE `booknig_dates` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `pg_id` int(10) UNSIGNED NOT NULL,
  `date` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booknig_dates`
--

INSERT INTO `booknig_dates` (`id`, `user_id`, `pg_id`, `date`, `from`, `duration`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 12, 4, '2018-05-08 19:30:13', '2018-05-08 19:30:13'),
(2, 1, 1, 2, 11, 1, '2018-05-08 19:48:25', '2018-05-08 19:48:25'),
(3, 1, 1, 2, 8, 2, '2018-05-08 19:51:17', '2018-05-08 19:51:17'),
(4, 1, 1, 2, 24, 1, '2018-05-08 19:51:46', '2018-05-08 19:51:46');

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2018_05_08_101232_create_play_grounds_table', 1),
(19, '2018_05_08_101251_create_play_ground__owners_table', 1),
(20, '2018_05_08_101737_create_play_ground__images_table', 1),
(21, '2018_05_08_203624_create_booknig_dates_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `play_grounds`
--

CREATE TABLE `play_grounds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_work` int(11) NOT NULL,
  `end_work` int(11) NOT NULL,
  `day_price` int(11) NOT NULL,
  `night_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `play_grounds`
--

INSERT INTO `play_grounds` (`id`, `name`, `region`, `owner_name`, `contact_phone`, `lat`, `lng`, `profile_image`, `start_work`, `end_work`, `day_price`, `night_price`, `created_at`, `updated_at`) VALUES
(1, 'hhh', 'hhhh', 'hhh', '012', '30.0602538', '31.202533600000038', 'default.jpeg', 22, 22, 22, 22, '2018-05-08 13:09:56', '2018-05-08 13:09:56'),
(2, 'hussein', 'pgregion', 'hussein', '01222', '30.08054596018359', '31.241622165606714', 'default.jpeg', 0, 12, 22, 1000, '2018-05-08 13:47:29', '2018-05-08 13:47:29'),
(3, 'hussein', 'pgregion', 'hussein', '01222', '30.08054596018359', '31.241622165606714', 'default.jpeg', 0, 12, 22, 1000, '2018-05-08 13:48:11', '2018-05-08 13:48:11'),
(4, 'test', 'test', 'test', 'test', '30.077725984719017', '31.24939768524166', 'default.jpeg', 0, 99, 22, 1000, '2018-05-08 13:59:56', '2018-05-08 13:59:56'),
(5, 'ttttttttt', 'ttttttt', 'tttttt', 'ttttt', '30.074835096403394', '31.240574139672844', '1525795431.jpeg', 0, 99, 22, 1000, '2018-05-08 14:03:51', '2018-05-08 14:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `play_ground__images`
--

CREATE TABLE `play_ground__images` (
  `id` int(10) UNSIGNED NOT NULL,
  `pg_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `play_ground__images`
--

INSERT INTO `play_ground__images` (`id`, `pg_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'PG_Photo_1525792196.jpeg', '2018-05-08 13:09:56', '2018-05-08 13:09:56'),
(2, 1, 'PG_Photo_1525792196.jpeg', '2018-05-08 13:09:56', '2018-05-08 13:09:56'),
(3, 1, 'PG_Photo_1525792196.jpeg', '2018-05-08 13:09:56', '2018-05-08 13:09:56'),
(4, 4, 'PG_Photo_1525795196.jpeg', '2018-05-08 13:59:56', '2018-05-08 13:59:56'),
(5, 4, 'PG_Photo_1525795196.jpeg', '2018-05-08 13:59:56', '2018-05-08 13:59:56'),
(6, 5, 'PG_Photo_1525795431.jpeg', '2018-05-08 14:03:51', '2018-05-08 14:03:51'),
(7, 5, 'PG_Photo_1525795431.jpeg', '2018-05-08 14:03:51', '2018-05-08 14:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `play_ground__owners`
--

CREATE TABLE `play_ground__owners` (
  `id` int(10) UNSIGNED NOT NULL,
  `pg_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `play_ground__owners`
--

INSERT INTO `play_ground__owners` (`id`, `pg_id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'hhh', '123456', '2018-05-08 13:09:56', '2018-05-08 13:09:56'),
(2, 2, 'hussein', '123456', '2018-05-08 13:47:30', '2018-05-08 13:47:30'),
(3, 3, 'hussein', '123456', '2018-05-08 13:48:11', '2018-05-08 13:48:11'),
(4, 4, 'test', 'test', '2018-05-08 13:59:56', '2018-05-08 13:59:56'),
(5, 5, 'hussein', '123456', '2018-05-08 14:03:51', '2018-05-08 14:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `phonenumber`, `age`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hhhh', 'hhhh', 'hu.sa8669@gmail.com', '$2y$10$upAppnIoImqAtfFcmUhr3OIV5ozXmgEGUZpfhfpfAXB5jkV.IojjG', 1023239809, 3, NULL, '2018-05-08 12:51:30', '2018-05-08 12:51:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booknig_dates`
--
ALTER TABLE `booknig_dates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booknig_dates_user_id_foreign` (`user_id`),
  ADD KEY `booknig_dates_pg_id_foreign` (`pg_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `play_grounds`
--
ALTER TABLE `play_grounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `play_ground__images`
--
ALTER TABLE `play_ground__images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `play_ground__images_pg_id_foreign` (`pg_id`);

--
-- Indexes for table `play_ground__owners`
--
ALTER TABLE `play_ground__owners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `play_ground__owners_pg_id_foreign` (`pg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booknig_dates`
--
ALTER TABLE `booknig_dates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `play_grounds`
--
ALTER TABLE `play_grounds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `play_ground__images`
--
ALTER TABLE `play_ground__images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `play_ground__owners`
--
ALTER TABLE `play_ground__owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booknig_dates`
--
ALTER TABLE `booknig_dates`
  ADD CONSTRAINT `booknig_dates_pg_id_foreign` FOREIGN KEY (`pg_id`) REFERENCES `play_grounds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booknig_dates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `play_ground__images`
--
ALTER TABLE `play_ground__images`
  ADD CONSTRAINT `play_ground__images_pg_id_foreign` FOREIGN KEY (`pg_id`) REFERENCES `play_grounds` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `play_ground__owners`
--
ALTER TABLE `play_ground__owners`
  ADD CONSTRAINT `play_ground__owners_pg_id_foreign` FOREIGN KEY (`pg_id`) REFERENCES `play_grounds` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

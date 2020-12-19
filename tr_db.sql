-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 06:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailsses`
--

CREATE TABLE `detailsses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Container` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Arrival_Date` date DEFAULT NULL,
  `Due_date` date DEFAULT NULL,
  `Berth` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Size` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Line` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Merchant` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_emp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Creat By` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detailsses`
--

INSERT INTO `detailsses` (`id`, `Container`, `Arrival_Date`, `Due_date`, `Berth`, `section`, `Size`, `Line`, `Merchant`, `Name_emp`, `note`, `Creat By`, `user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'MFR122155', NULL, '2020-12-15', '400', 'غير مستلم', '40', 'MSC', 'علي انشائية', 'بارق ناصر', 'رول تغليف', 'yasksalim', NULL, NULL, '2020-12-10 10:42:35', '2020-12-10 10:43:39'),
(2, '5545445', NULL, '2020-12-23', '400', 'غير مستلم', '40', 'MSC', 'صفاء', '52', '52522552552', 'yasksalim', NULL, NULL, '2020-12-11 04:55:48', '2020-12-11 08:54:47'),
(3, 'لاغتا', NULL, NULL, NULL, 'مستلم', '40', NULL, 'gjygjujytt', NULL, NULL, 'yasksalim', NULL, NULL, '2020-12-11 09:45:52', '2020-12-11 09:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Container` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arrival_Date` date DEFAULT NULL,
  `Due_date` date DEFAULT NULL,
  `Berth` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Size` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Line` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Merchant` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_shreh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Dri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_Dri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No_Car` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_stor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_stor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oajba` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `load_date` date DEFAULT NULL,
  `export_date` date DEFAULT NULL,
  `end_exp_date` date DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Creat By` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `Container`, `Arrival_Date`, `Due_date`, `Berth`, `Size`, `Line`, `Merchant`, `note_shreh`, `Name_Dri`, `phone_Dri`, `No_Car`, `Name_stor`, `phone_stor`, `oajba`, `load_date`, `export_date`, `end_exp_date`, `section`, `notee`, `user`, `Creat By`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'MFR122155', NULL, '2021-01-05', '25', '40', '12', 'علي انشائية', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'مستلم', NULL, NULL, 'yasksalim', NULL, '2020-12-10 15:47:44', '2020-12-10 15:47:44'),
(2, 'MFR122155', '2020-12-16', '2020-12-22', '1111', '40', '111', 'علي انشائية', '111', '11', '11', '11', '111', '111', '11', '2020-12-15', '2020-12-04', '2021-01-06', 'تم التخريج', '111', NULL, 'yasksalim', NULL, '2020-12-10 16:07:54', '2020-12-10 16:07:54'),
(3, 'MFR122155', NULL, NULL, NULL, '40', NULL, 'علي انشائية', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'تم التخريج', 'cccccccccccccccccccccccccccccccccccccccccc', NULL, 'yasksalim', NULL, '2020-12-10 16:39:46', '2020-12-10 16:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Merchant` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_Merchant` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Notee` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Creat By` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `Merchant`, `Phone_Merchant`, `Address`, `Notee`, `Creat By`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'علي انشائية', '07729090528', 'بغداد', NULL, 'yasksalim', NULL, '2020-12-10 10:41:47', '2020-12-10 10:41:47'),
(2, 'صفاء', '414541', 'بغداد', NULL, 'yasksalim', NULL, '2020-12-11 08:54:28', '2020-12-11 08:54:28'),
(3, 'gjygjujytt', 'tuku', 'yu', 'yuyu', 'yasksalim', NULL, '2020-12-11 09:45:00', '2020-12-11 09:45:00');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_30_220559_create_detailsses_table', 1),
(5, '2020_12_03_192003_create_merchants_table', 1),
(6, '2020_12_10_081614_create_follows_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yasksalim', 'yasksalim@gmail.com', NULL, '$2y$10$U1.HH2GGysuikkl9Ef4MQ.pfzRWTx6HkSb9h5spPkriD1.GXDOoPe', NULL, '2020-12-10 10:41:23', '2020-12-10 10:41:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailsses`
--
ALTER TABLE `detailsses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailsses`
--
ALTER TABLE `detailsses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

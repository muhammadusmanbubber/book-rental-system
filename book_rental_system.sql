-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 10:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_rental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', '2023-11-16 08:26:44', '2023-11-16 08:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_available` tinyint(1) DEFAULT 1,
  `book_name` varchar(255) NOT NULL,
  `auther_name` varchar(255) NOT NULL,
  `pages` varchar(255) NOT NULL,
  `image` varchar(260) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `is_available`, `book_name`, `auther_name`, `pages`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laravel 10', 'Muhammad Usman', '50', '1700112118.jpg', '2023-11-16 00:21:58', '2023-11-16 00:21:58'),
(2, 1, 'Gernal Knowledge', 'Muhammad Hassan', '160', '1700126256.jpg', '2023-11-16 04:17:37', '2023-11-16 04:17:37'),
(3, 1, 'Web Development', 'Sajid Bosan  Sahb', '204', '1700127317.jpg', '2023-11-16 04:35:17', '2023-11-16 04:35:17'),
(4, 1, 'PHP 8', 'Rashid Ibrahim', '342', '1700132633.jpg', '2023-11-16 06:03:53', '2023-11-16 06:03:53'),
(5, 1, 'Build API', 'Ghani Khan', '46', '1700132708.jpg', '2023-11-16 06:05:08', '2023-11-16 06:05:08'),
(6, 1, 'Pro Angular 9', 'Umer Habib', '67', '1700189312.jpg', '2023-11-16 06:11:03', '2023-11-16 21:48:32'),
(7, 0, 'Pythan Django', 'Taqueer Khan', '1234', '1700133137.jpg', '2023-11-16 06:12:17', '2023-11-18 02:07:14'),
(8, 0, 'HTML & CSS 5', 'Hashim Imran', '98', '1700189337.jpg', '2023-11-16 06:13:25', '2023-11-17 19:02:15'),
(9, 0, 'JavaScript Code', 'Imran Ismail', '531', '1700298820.jpg', '2023-11-16 06:14:10', '2023-11-18 04:13:40'),
(10, 1, 'Pak Study', 'Muhammad Usman', '50', '1700112118.jpg', '2023-11-16 00:21:58', '2023-11-16 00:21:58'),
(11, 1, 'Islamiat', 'Muhammad Hassan', '160', '1700126256.jpg', '2023-11-16 04:17:37', '2023-11-16 04:17:37'),
(12, 1, 'Mathematic', 'Sajid Bosan  Sahb', '204', '1700127317.jpg', '2023-11-16 04:35:17', '2023-11-16 04:35:17'),
(13, 1, 'Pak Urdu', 'Rashid Ibrahim', '342', '1700132633.jpg', '2023-11-16 06:03:53', '2023-11-16 06:03:53'),
(14, 1, 'English', 'Ghani Khan', '46', '1700132708.jpg', '2023-11-16 06:05:08', '2023-11-16 06:05:08'),
(15, 1, 'Statics', 'Umer Habib', '678', '1700133063.jpg', '2023-11-16 06:11:03', '2023-11-16 06:11:03'),
(16, 1, 'Android App', 'Taqueer Khan', '123', '1700189361.jpg', '2023-11-16 06:12:17', '2023-11-16 21:49:21'),
(17, 0, 'Paidblogger', 'Hashim Imran', '987', '1700133205.jpg', '2023-11-16 06:13:25', '2023-11-17 18:28:01'),
(18, 1, 'Bootstrap5', 'Orhan Usman', '531', '1700133250.jpg', '2023-11-16 06:14:10', '2023-11-16 06:14:10'),
(19, 0, 'Myself', 'Muhammad Usman', '204', '1700295499.jpg', '2023-11-17 00:56:36', '2023-11-18 03:18:19'),
(20, 0, 'JavaScript', 'Sajid Bosan', '232', '1700241992.jpg', '2023-11-17 12:26:32', '2023-11-17 17:05:58'),
(21, 1, 'New Book', 'Unknow', '00', '1700298875.jpg', '2023-11-18 04:14:35', '2023-11-18 04:14:35'),
(22, 1, 'New Book', 'Unknow', '00', '1700299231.jpg', '2023-11-18 04:20:31', '2023-11-18 04:20:31'),
(23, 1, 'Qaid-e-Azm Knowledge', 'Allama Iqbal', '764', '1700299288.jpg', '2023-11-18 04:21:28', '2023-11-18 04:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_15_175824_create_users_table', 1),
(3, '2023_11_15_204815_create_books_table', 2),
(4, '2023_11_15_210700_create_admin_table', 3),
(5, '2023_11_16_082408_create_admins_table', 4),
(6, '2023_11_17_060802_create_rented_books_table', 5),
(7, '2023_11_17_162958_drop_rented_books_table', 6),
(8, '2023_11_17_163224_create_rented_table', 7),
(9, '2023_11_17_174320_remove_image_from_rented', 8),
(10, '2023_11_17_200949_add_name_to_rented_table', 9),
(11, '2023_11_17_205421_create_rentals_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `rental_date` datetime NOT NULL,
  `return_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `book_id`, `rental_date`, `return_date`, `created_at`, `updated_at`) VALUES
(5, 9, 8, '2023-11-18 00:02:15', '2023-11-21 00:02:15', '2023-11-17 19:02:15', '2023-11-17 19:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `rented`
--

CREATE TABLE `rented` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `auther_name` varchar(255) NOT NULL,
  `pages` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(260) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Muhammad Usman', 'khanusman8685@gmail.com', '$2y$10$LOpeSuZ80eGWYikvKnD1yuHLU1fgTqm9FUsEg0USNRtDFOWyA8wde', '1700292404.jpg', '2023-11-17 18:19:07', '2023-11-18 02:26:44'),
(9, 'Muhammad Hassan', 'hassan@gmail.com', '$2y$10$YpDMh6SFScj.SoVohLQHN.by.2U999DTNhMhbx9GNySyQzqby8O.6', '1700265681.png', '2023-11-17 19:01:21', '2023-11-17 19:01:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rentals_user_id_foreign` (`user_id`),
  ADD KEY `rentals_book_id_foreign` (`book_id`);

--
-- Indexes for table `rented`
--
ALTER TABLE `rented`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rented`
--
ALTER TABLE `rented`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

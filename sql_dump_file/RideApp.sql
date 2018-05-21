-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2018 at 08:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RideApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookedrides`
--

CREATE TABLE `bookedrides` (
  `id` int(10) UNSIGNED NOT NULL,
  `ride_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `traveller_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookedrides`
--

INSERT INTO `bookedrides` (`id`, `ride_id`, `traveller_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '8', '7', '2018-05-21 13:41:08', '2018-05-21 13:41:08', NULL),
(2, '6', '7', '2018-05-21 14:15:01', '2018-05-21 14:15:01', NULL),
(3, '7', '7', '2018-05-21 14:29:38', '2018-05-21 14:29:38', NULL),
(4, '5', '7', '2018-05-21 14:47:21', '2018-05-21 14:47:21', NULL),
(5, '10', '8', '2018-05-21 14:59:11', '2018-05-21 14:59:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_19_141106_create_rides_table', 1),
(4, '2018_05_19_141827_create_booked_rides_table', 1),
(5, '2018_05_19_185246_add_travel_time', 1);

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
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `id` int(10) UNSIGNED NOT NULL,
  `origin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `travelDateTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`id`, `origin`, `destination`, `capacity`, `user_id`, `status`, `created_at`, `updated_at`, `deleted_at`, `travelDateTime`) VALUES
(1, 'Kiambu', 'Tao', '4', '1', 'Available', '2018-05-20 08:58:10', '2018-05-20 08:58:10', NULL, '05/21/2018 8:00:00'),
(2, 'Muranga', 'Nairobi', '7', '2', 'Available', '2018-05-20 11:03:29', '2018-05-20 11:03:29', NULL, '03/06/2018 4:00:00'),
(3, 'kianjugu', 'kenol', '8', '2', 'Available', '2018-05-20 11:20:15', '2018-05-20 11:20:15', NULL, '04/11/2018 6:00:00'),
(4, 'thika', 'moro', '5', '2', 'Available', '2018-05-20 11:34:23', '2018-05-20 11:34:23', NULL, '05/07/2018 8:00:00'),
(5, 'Kiambu', 'Tao', '4', '2', 'Available', '2018-05-20 11:37:34', '2018-05-20 11:37:34', NULL, '06/05/2018 7:00:00'),
(6, 'uyyh', 'l;jkjk', '4', '3', 'Available', '2018-05-21 05:19:37', '2018-05-21 05:19:37', NULL, '05/29/2018 5:00:00'),
(7, 'Nakuru', 'kampla', '4', '5', 'Available', '2018-05-21 07:29:40', '2018-05-21 07:29:40', NULL, '05/22/2018 6:00:00'),
(8, 'kenya', 'uganda', '5', '3', 'Available', '2018-05-21 09:24:27', '2018-05-21 09:24:27', NULL, '05/29/2018 5:00:00'),
(9, 'kibera', 'Nairobi', '90', '7', 'Available', '2018-05-21 15:35:47', '2018-05-21 15:35:47', NULL, '06/08/2018 4:00:00'),
(10, 'nairobi', 'mombasa', '90', '7', 'Available', '2018-05-21 15:40:02', '2018-05-21 15:40:02', NULL, '06/08/2018 3:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phonenumber`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Janet', '9876654', 'Janet@gmail.com', '$2y$10$hEqPDbJr2sU1fdBbFmNaAOebreTSOsBYQMcxgipALCZ/Ama0sHNhe', 'JZRFPegyHJrpM3C8qlaW24NEwARB6iBaiYhybqotnJ6xHXDU8uAuFto1BJIx', '2018-05-20 05:55:18', '2018-05-20 05:55:18', NULL),
(2, 'Kelvin', '0704936670', 'kalvind95@gmail.com', '$2y$10$ginrAOtTpm8djiv.Jxp0Z.W4zYqaIIOrKm7bfTZ/Hhd8Vt2FuKACe', 'U7jjqScAT3x2uO6tGze325HJT81niMsTJbfuym9WWtgU2ge6kOvAfbEb6zJl', '2018-05-20 07:52:09', '2018-05-20 07:52:09', NULL),
(3, 'daniel', '+2547121695695', 'dan@gmail.com', '$2y$10$yuaQDvfKMDzd0NAUX7tEfugi2MEVAprzn3L63zBDzzTC6RQqGzmzO', 'wwzlKO4rQqYorV4ZZs582wHIDpfO68t5jxEZ3Xu5LH3kyevrUJ0VX1OhaEDb', '2018-05-21 02:16:20', '2018-05-21 02:16:20', NULL),
(4, 'Rose', '+2547121695695', 'rose@gmail.com', '$2y$10$.d.AUH0UmpAFl6n.K/7xCuVSBgHr7MEAdiL0xEtiElE9MmjzIkEKu', '9PHBoXwQe6e9CJmeC5BOTUxgMKyCKrSo80mik0xrchD8tmFeLP5QgYyzaR1S', '2018-05-21 02:58:06', '2018-05-21 02:58:06', NULL),
(5, 'David', '07046777', 'david@gmail.com', '$2y$10$ro9JtorkC6ZfJBmfcQY5juEXq6hcUbVOzK3AEmLvUdAhSGOUFEYlC', 'pqqlpTBHuSkgtZiqQXF0DX26EH4bsmINThG6N7BuKlBjgX06DLkDTEB1imb9', '2018-05-21 04:15:01', '2018-05-21 04:15:01', NULL),
(6, 'ken', '888888', 'ken@gmail.com', '$2y$10$bEjHkE8MWzjgsdMS8fFMuuQ8oE4AR/MuNSYHjqNuMIcu3vc8TIKMq', NULL, '2018-05-21 06:25:32', '2018-05-21 06:25:32', NULL),
(7, 'eddie', '0712169695', 'peterkariukimutuura@gmail.com', '$2y$10$Y5iq3lXzqeFNeQaDwYD7kOEWQ9S/RS3ifi82Gy7JFZSZdHb12FDX.', 'dhivaBMnLXzC8Yg9J166cTmqo3DHrDjJY4DYJFCP95fV38RJpTPavuwoXghQ', '2018-05-21 12:33:32', '2018-05-21 12:33:32', NULL),
(8, 'Maina', '998888', 'kariukipeter30@gmail.com', '$2y$10$l2SmggunA/ttp7AhdUDKCOJyPXU6bYkSxQ6ZtMjac0mdIW6rMjIPS', NULL, '2018-05-21 14:58:37', '2018-05-21 14:58:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookedrides`
--
ALTER TABLE `bookedrides`
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
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bookedrides`
--
ALTER TABLE `bookedrides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 01:00 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'wooden', 'wooden products', 0, NULL, NULL),
(2, 'glasses', 'good great not used so much', 0, '2020-05-05 14:28:16', '2020-05-05 14:28:16'),
(4, 'wooden game1', 'wooden game description for sale 2', 0, '2020-05-05 14:39:51', '2020-05-05 15:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `item_id`, `is_approved`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 'goood', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_id` int(11) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `country`, `photo_id`, `category_id`, `is_approved`, `user_id`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'wooden game', 'wooden game great', 1002, 'china', NULL, 1, 1, 1, 'wooden, game, great', NULL, '2020-05-05 21:20:33'),
(2, 'mobile', 'not used so much and sheap', 100, 'china', 27, 1, 1, 1, 'ahmed, handmade, elzero', '2020-05-05 17:05:07', '2020-05-05 21:23:20'),
(3, 'tablet', 'aaaaa2', 100, 'china', NULL, 3, 1, 1, 'ahmed, handmade, elzero', '2020-05-05 17:12:20', '2020-05-05 21:21:33'),
(4, 'mobile44', 'good great not used so much', 111, 'china', 16, 2, 1, 1, 'ahmed, shirt', '2020-05-05 18:40:24', '2020-05-05 21:19:22'),
(5, 'mobile55', 'good great not used so much', 100, 'Egypt', 1, 3, 1, 1, 'ahmed, handmade, clothing', '2020-05-05 19:02:56', '2020-05-05 21:19:24'),
(7, 'mobile', 'not used so much and sheap', 100, 'china', 23, 1, 1, 1, 'ahmed, handmade, elzero', '2020-05-05 19:12:01', '2020-05-05 21:29:37'),
(8, 'mobile', 'good great not used so much', 100, 'china', 26, 1, 0, 2, 'ahmed, games, discount, vr', '2020-05-05 20:08:56', '2020-05-05 20:08:56');

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
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2020_05_05_153309_create_roles_table', 1),
(20, '2020_05_05_153342_create_photos_table', 1),
(21, '2020_05_05_153356_create_items_table', 1),
(22, '2020_05_05_153418_create_categories_table', 1),
(23, '2020_05_05_153434_create_comments_table', 1),
(24, '2020_05_05_153706_create_comment_replies_table', 1);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '15886959781461598714man2.jpg', '2020-05-05 14:26:18', '2020-05-05 14:26:18'),
(2, '15887002321461598714man2.jpg', '2020-05-05 15:37:12', '2020-05-05 15:37:12'),
(3, '15887008661461598714man2.jpg', '2020-05-05 15:47:46', '2020-05-05 15:47:46'),
(4, '1588701408screenshot.png', '2020-05-05 15:56:48', '2020-05-05 15:56:48'),
(5, '1588701418screenshot.png', '2020-05-05 15:56:58', '2020-05-05 15:56:58'),
(6, '1588701532screenshot.png', '2020-05-05 15:58:52', '2020-05-05 15:58:52'),
(7, '1588701687screenshot.png', '2020-05-05 16:01:27', '2020-05-05 16:01:27'),
(8, '1588701713screenshot.png', '2020-05-05 16:01:53', '2020-05-05 16:01:53'),
(9, '1588701747screenshot.png', '2020-05-05 16:02:27', '2020-05-05 16:02:27'),
(10, '1588701918screenshot.png', '2020-05-05 16:05:18', '2020-05-05 16:05:18'),
(11, '15887022191461598714man2.jpg', '2020-05-05 16:10:19', '2020-05-05 16:10:19'),
(12, '15887022951461598714man2.jpg', '2020-05-05 16:11:35', '2020-05-05 16:11:35'),
(13, '15887023131461598714man2.jpg', '2020-05-05 16:11:53', '2020-05-05 16:11:53'),
(14, '1588702343screenshot.png', '2020-05-05 16:12:23', '2020-05-05 16:12:23'),
(15, '15887024431461598714man2.jpg', '2020-05-05 16:14:03', '2020-05-05 16:14:03'),
(16, '1588711224screenshot.png', '2020-05-05 18:40:24', '2020-05-05 18:40:24'),
(17, '1588712576screenshot.png', '2020-05-05 19:02:56', '2020-05-05 19:02:56'),
(18, '15887127191461598714man2.jpg', '2020-05-05 19:05:19', '2020-05-05 19:05:19'),
(19, '15887127901461598714man2.jpg', '2020-05-05 19:06:30', '2020-05-05 19:06:30'),
(20, '15887128031461598714man2.jpg', '2020-05-05 19:06:43', '2020-05-05 19:06:43'),
(21, '15887128971461598714man2.jpg', '2020-05-05 19:08:17', '2020-05-05 19:08:17'),
(22, '1588713085screenshot.png', '2020-05-05 19:11:25', '2020-05-05 19:11:25'),
(23, '1588713121screenshot.png', '2020-05-05 19:12:01', '2020-05-05 19:12:01'),
(24, '1588716409screenshot.png', '2020-05-05 20:06:49', '2020-05-05 20:06:49'),
(25, '1588716511screenshot.png', '2020-05-05 20:08:31', '2020-05-05 20:08:31'),
(26, '1588716536screenshot.png', '2020-05-05 20:08:56', '2020-05-05 20:08:56'),
(27, '1588721000screenshot.png', '2020-05-05 21:23:20', '2020-05-05 21:23:20'),
(28, '1588721041screenshot.png', '2020-05-05 21:24:01', '2020-05-05 21:24:01'),
(29, '1588721058screenshot.png', '2020-05-05 21:24:18', '2020-05-05 21:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'guest', NULL, NULL),
(1, 'administrator', NULL, NULL),
(3, 'editor', NULL, NULL);

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
  `role_id` int(11) NOT NULL DEFAULT 0,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `photo_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `is_approved`, `photo_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed M. Fathy', 'ahmedfathy.1074@gmail.com', NULL, '$2y$10$0i.kbX4rJ6AVuTtYv3O1wuX0kkyntI4QQUX6wbO2hqCqYYD2MtLzC', 1, 1, 21, NULL, '2020-05-05 14:06:17', '2020-05-05 19:08:17'),
(2, 'mohamed2', 'm@m.com', NULL, '$2y$10$tpAfazBOYC5hhMR8oJuFG.E4kBf336fh.gWuYG0OK2DiZuncYd8Fq', 1, 1, NULL, NULL, '2020-05-05 14:33:46', '2020-05-05 19:08:08'),
(3, 'Ahmed Mohamed Fathy', 'a@a.com', NULL, '$2y$10$4SOiUtqrOiUc3GRoUXXiIeiSpF0JOi9n82lIEo51U/XUTckegndmW', 1, 1, NULL, NULL, '2020-05-05 15:47:46', '2020-05-05 19:07:55'),
(4, 'ali', 'ali@a.com', NULL, '$2y$10$GPrL9YgTCO8C.oxd4VssPukwpx1J4i0OFcbQbc2v7SqRCXAIrX0Qu', 1, 1, NULL, NULL, '2020-05-05 16:05:18', '2020-05-05 19:10:49'),
(5, 'alllla', 'aaa@a.com', NULL, '$2y$10$s6NYj1kg/FjBUy/imX1FEe/cKcX4HPcjmokGQKY.Hk9FIVblZ9Tg.', 0, 0, NULL, NULL, '2020-05-05 16:10:19', '2020-05-05 16:10:19'),
(8, 'aaaaa', 'aaaa2@a.com', NULL, '$2y$10$9ggImu4HYhdo9maTpBfAruolf6iPMw4Ib5vpKRt2LmjvE8zU/2J8i', 0, 1, NULL, NULL, '2020-05-05 16:12:23', '2020-05-05 21:29:34'),
(9, 'emad', 'e@e.com', NULL, '$2y$10$YvIB8/OaEFHtz4ucrJGUiOTTg0U8a.Kb6lRLqhlqbwokjwqT91Kk6', 0, 0, NULL, NULL, '2020-05-05 19:05:19', '2020-05-05 19:05:19'),
(10, 'hassan', 'h@a.com', NULL, '$2y$10$ZKFhbdz7nD6cs/LcqBWLfODhbKivtY.j.EGeFmOTVfh67LHerLeEi', 3, 1, 22, NULL, '2020-05-05 19:11:25', '2020-05-05 19:11:25'),
(11, 'amira mohamed', 'amira@a.com', NULL, '$2y$10$zsCwoZbRia2IP/BWNvc4S.bjKJPjZwoksXQrt3sW1jKw26GJswx32', 0, 1, NULL, NULL, '2020-05-05 22:05:11', '2020-05-05 22:06:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_item_id_index` (`item_id`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_replies_comment_id_index` (`comment_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_index` (`category_id`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

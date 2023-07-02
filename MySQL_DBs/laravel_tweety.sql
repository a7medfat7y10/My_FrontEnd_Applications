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
-- Database: `laravel_tweety`
--

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
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `following_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`user_id`, `following_user_id`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, NULL),
(2, 3, NULL, NULL),
(1, 6, NULL, NULL),
(1, 5, NULL, NULL),
(1, 2, NULL, NULL),
(1, 4, NULL, NULL),
(13, 1, NULL, NULL),
(13, 2, NULL, NULL),
(15, 2, NULL, NULL),
(15, 1, NULL, NULL),
(15, 3, NULL, NULL),
(16, 1, NULL, NULL),
(16, 2, NULL, NULL),
(17, 1, NULL, NULL),
(17, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tweet_id` bigint(20) UNSIGNED NOT NULL,
  `liked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `tweet_id`, `liked`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 1, '2020-09-22 04:36:19', '2020-09-22 21:33:47'),
(4, 1, 2, 0, '2020-09-22 04:38:20', '2020-09-22 05:00:05'),
(5, 1, 4, 1, '2020-09-22 06:16:59', '2020-09-22 06:16:59'),
(6, 1, 3, 0, '2020-09-22 06:17:05', '2020-09-22 06:17:05'),
(7, 1, 22, 1, '2020-09-22 06:17:41', '2020-09-22 21:33:36'),
(8, 16, 59, 1, '2020-09-22 21:36:49', '2020-09-22 21:36:49'),
(9, 16, 1, 1, '2020-09-22 21:37:22', '2020-09-22 21:37:22');

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
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2020_09_19_010503_create_tweets_table', 1),
(24, '2020_09_19_042939_create_follows_table', 1),
(25, '2020_09_22_055935_create_likes_table', 2);

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
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'hey from ahmed', '2020-09-20 23:43:52', '2020-09-20 23:43:52'),
(2, 2, 'hey from ali', '2020-09-21 00:36:43', '2020-09-21 00:36:43'),
(3, 2, 'Esse ut voluptas tempore est laborum tempora unde.', '2020-09-21 03:05:31', '2020-09-21 03:05:31'),
(4, 2, 'Commodi magni ipsum similique sunt sunt aliquam quae.', '2020-09-21 03:05:31', '2020-09-21 03:05:31'),
(5, 2, 'Consectetur quasi rem ex eos laboriosam provident.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(6, 2, 'Velit amet mollitia et sed non accusantium.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(7, 2, 'Similique perspiciatis eaque error harum nostrum.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(8, 3, 'Maiores fugiat voluptatem repellendus a nesciunt consequatur velit.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(9, 3, 'Est beatae qui vel quisquam.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(10, 3, 'Temporibus deleniti aliquid exercitationem hic esse quae aut.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(11, 3, 'Alias repellendus ut explicabo sed.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(12, 3, 'Nemo error sequi ut quis dignissimos accusamus.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(13, 4, 'Vel nam est aut explicabo dicta magnam qui.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(14, 4, 'Reiciendis maxime et molestiae enim dolorem.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(15, 4, 'Non sapiente voluptas sit animi blanditiis dicta reprehenderit voluptate.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(16, 4, 'Qui excepturi accusamus incidunt et at animi.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(17, 4, 'Ut cum ipsum in ut voluptatem sit voluptates.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(18, 5, 'Tenetur ad iure architecto harum iste.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(19, 5, 'Quis adipisci earum nemo quos ullam.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(20, 5, 'Porro eum minima cumque sit tempore explicabo sit doloribus.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(21, 5, 'Vitae soluta cupiditate possimus.', '2020-09-21 03:05:32', '2020-09-21 03:05:32'),
(22, 5, 'Nesciunt voluptatem rerum corrupti esse qui quod dolor.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(23, 6, 'Fugiat et voluptas tempora ipsum.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(24, 6, 'Dolores itaque ut quisquam.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(25, 6, 'Porro provident quod atque doloribus id.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(26, 6, 'Repellendus eum dolorem unde occaecati laborum earum sunt sit.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(27, 6, 'Voluptatum culpa non iste mollitia.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(28, 7, 'Esse minima ut id facilis nulla quae.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(29, 7, 'Ea eum reprehenderit eum voluptatum minima voluptatem qui.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(30, 7, 'Voluptas autem earum quasi odio quia consequatur praesentium.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(31, 7, 'Aliquid illo tempore quis quis id qui.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(32, 7, 'Magnam accusamus nam aut dolores.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(33, 8, 'Ullam consectetur dignissimos et explicabo.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(34, 8, 'Minima molestiae cumque ipsa iusto.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(35, 8, 'Perferendis fuga voluptatem voluptatem veniam quisquam.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(36, 8, 'Rem aperiam rem quam provident optio sed.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(37, 8, 'Illum dicta ipsum odio assumenda.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(38, 9, 'Est odit officia quisquam adipisci laborum.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(39, 9, 'Velit hic dolor sunt.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(40, 9, 'Alias deserunt cum expedita fugiat et.', '2020-09-21 03:05:33', '2020-09-21 03:05:33'),
(41, 9, 'Debitis molestiae deserunt sunt cumque neque ullam.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(42, 9, 'Ullam est sint et quis ratione.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(43, 10, 'Laboriosam laborum sint voluptatem eligendi ut et sunt eum.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(44, 10, 'Veritatis saepe quia veniam quaerat amet dolorem.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(45, 10, 'Voluptatibus consequatur vel voluptate debitis voluptatem repellendus fugit.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(46, 10, 'Ipsa asperiores dignissimos quas eius veritatis ad qui.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(47, 10, 'Exercitationem aliquam enim delectus asperiores et iure.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(48, 11, 'Similique dolor unde aut officiis expedita eaque.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(49, 11, 'Est at unde aut laudantium ea asperiores repellat.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(50, 11, 'Natus dolor aut sit soluta ipsa.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(51, 11, 'Enim in numquam fugit molestias voluptatem aut.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(52, 11, 'Hic fugiat sapiente dolor qui quis eum voluptas atque.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(53, 12, 'Eum in officiis quisquam qui repellendus.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(54, 12, 'Eos facere qui repudiandae sit aut quibusdam.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(55, 12, 'Distinctio et vero culpa facilis illum enim modi.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(56, 12, 'Est alias quae eveniet modi.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(57, 12, 'Impedit nam tempore alias et.', '2020-09-21 03:05:34', '2020-09-21 03:05:34'),
(58, 15, 'hey guys', '2020-09-21 08:23:27', '2020-09-21 08:23:27'),
(59, 16, 'hey it\'s alaa', '2020-09-22 21:36:45', '2020-09-22 21:36:45'),
(60, 17, 'hey guys', '2020-09-24 22:12:44', '2020-09-24 22:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'avatars/avatar.png',
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

INSERT INTO `users` (`id`, `username`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'Ahmed M. Fathy', 'avatars/ervIeTOtaOXShxj371VoWe8lFoK2Imo1zmZOIuh3.jpeg', 'ahmedfathy.1074@gmail.com', NULL, '$2y$10$QXNtSfmt37my2iXrSL2bzekK/RJs1a.EUYQLM2TSsN.AJLbPi7hSu', 'Xby8kXCWje64DE3cvtTsMyBCo3EhWDp7ibDvhGva6vWYTVd6l6TVIAUeMLiK', '2020-09-20 23:43:40', '2020-09-21 02:11:39'),
(2, 'ali', 'ALi Mohamed', 'avatars/avatar.png', 'ali@a.com', NULL, '$2y$10$NTTfPi4IqL65dTNmDq/yl.aWx7j.By46NR.SMrrt3loM4UfUozqse', NULL, '2020-09-21 00:26:09', '2020-09-21 02:11:01'),
(3, 'uhackett', 'Madelyn Ratke', 'avatars/avatar.png', 'allison04@example.com', '2020-09-21 02:30:27', '$2y$10$hhS1wJoEqM0z8nytnCXeEeyZ.hZqR8Z2O/b9cHmdT/pzrXLCm8eji', 'VLvpQuWHWr', '2020-09-21 02:30:27', '2020-09-21 02:30:27'),
(4, 'javon12', 'Bartholome Goldner', 'avatars/avatar.png', 'greenfelder.norwood@example.org', '2020-09-21 02:30:27', '$2y$10$RsCBsakol6PlGm8sk.5r/e8dpEeDBY9qhqn8Cll3IDNBqu3M42iAu', '3X1zWhOJg8', '2020-09-21 02:30:28', '2020-09-21 02:30:28'),
(5, 'sabrina.pouros', 'Buddy Denesik', 'avatars/avatar.png', 'noelia.howell@example.net', '2020-09-21 02:30:27', '$2y$10$phstKWvn2YJDBPG1Kz51U.8UeVrgymdmSRZO6UaEeTsslMXaMwv0O', 'WfAAB6FYfO', '2020-09-21 02:30:28', '2020-09-21 02:30:28'),
(6, 'schuppe.muriel', 'Dr. Era Langworth', 'avatars/avatar.png', 'orrin18@example.org', '2020-09-21 02:30:27', '$2y$10$EemihPJZgmdLlYdMqvMixuwpBUT8DHO2STNDs9CDlI8Bd0A0VgkJO', '562HT20GtI', '2020-09-21 02:30:28', '2020-09-21 02:30:28'),
(7, 'pascale52', 'Jaylin Halvorson I', 'avatars/avatar.png', 'heidenreich.amos@example.net', '2020-09-21 02:30:27', '$2y$10$yTNktxTenC/Deh0kJfpwOeNl/2lJW4PJZ/.QD0ZRdRKFpNtOxtfyi', '6AwYMlsmq5', '2020-09-21 02:30:28', '2020-09-21 02:30:28'),
(8, 'ona.reinger', 'Mr. Adrien Pfannerstill DVM', 'avatars/avatar.png', 'sipes.myrtle@example.net', '2020-09-21 02:30:27', '$2y$10$m/atgUwIbsWvwKl5vKKe/eF9ZtMDJLvdlLqzUfP/QCphcPazYUCpq', 'v48IehcDRC', '2020-09-21 02:30:28', '2020-09-21 02:30:28'),
(9, 'reta10', 'Julianne Nicolas', 'avatars/avatar.png', 'marc83@example.org', '2020-09-21 02:30:27', '$2y$10$LtFkdHrapAchwJUVwKHkK.PvPBb4.wq2KzG6twF8U9CEb.tQ9/z/e', 'P2XIOS0zlD', '2020-09-21 02:30:28', '2020-09-21 02:30:28'),
(10, 'lpaucek', 'Francisca McCullough', 'avatars/avatar.png', 'dario.bechtelar@example.org', '2020-09-21 02:30:27', '$2y$10$U8q9t9R7Efu26pexGEADeeZdAQh1/cs7oac138U4qPSHAnyDW/lMa', 'o4RrFB3ez0', '2020-09-21 02:30:28', '2020-09-21 02:30:28'),
(11, 'delpha02', 'Mr. Trace Kessler PhD', 'avatars/avatar.png', 'lyla99@example.org', '2020-09-21 02:30:27', '$2y$10$YyKZVy2Bz4U1AVHirWO7I.s4gGzyeJGkmVhwZY2YBqNjv3twR2Vce', 'ZDWVmufYYz', '2020-09-21 02:30:28', '2020-09-21 02:30:28'),
(12, 'jeffrey.graham', 'Katlyn Rempel DVM', 'avatars/avatar.png', 'eloise38@example.org', '2020-09-21 02:30:27', '$2y$10$X17212dZZcgqqcU4ne/Q1u33Wa/JhCngaNFZQYvBzQeiZ6MKI9kty', 'p1oavZpn8g', '2020-09-21 02:30:28', '2020-09-21 02:30:28'),
(14, 'mahmoud', 'Mahmoud Ali', 'avatars/avatar.png', 'm@m.com', NULL, '$2y$10$x1lJ2SRW9mw7.q9Mi3NTAu6Qp.14PBRPshEFrxWCdFPvLlXHzsTrW', NULL, '2020-09-21 07:51:01', '2020-09-21 07:51:01'),
(15, 'hossam', 'Hossam AHmed', 'avatars/avatar.png', 'h@h.com', NULL, '$2y$10$ZYP4uUoiRYunBJJc7uVS5O7wnRUb/VkWNC/3U7l.7IdTyVV4bJnqO', NULL, '2020-09-21 07:59:02', '2020-09-21 08:12:47'),
(16, 'alaa', 'Alaa Mostafa', 'avatars/avatar.png', 'alaa@a.com', NULL, '$2y$10$btmBV/gPymFJm8nICt3R7u.YGrEvyL8COUbdcCviZ5kk1RaOOdMzK', NULL, '2020-09-22 21:36:21', '2020-09-22 21:36:21'),
(17, 'amany', 'amany ali', 'avatars/n7uZ9nJMCZN9TRrGH2UQ8Qhk5WPP9JFSru4h9iFz.jpeg', 'amany@gmail.com', NULL, '$2y$10$E5WoAbB32VYPaCzLzUqgZeTVEElPnx5xh4R7dEDprgdeO0z0CEDhi', NULL, '2020-09-24 22:12:02', '2020-09-24 22:14:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
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
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

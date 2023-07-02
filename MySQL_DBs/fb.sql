-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 12:59 AM
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
-- Database: `fb`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `postText` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user`, `postText`, `time`) VALUES
(1, 'ahmed', 'loreertytytcghvgvbnv bn b b n nm jmbjkjkbuk huibjln  jkbkl m, jkb', '2020-02-03 17:43:58'),
(2, 'root', '', '2020-02-03 18:19:33'),
(3, 'root', '', '2020-02-03 18:22:39'),
(4, 'root', '', '2020-02-03 18:23:35'),
(5, 'root', '', '2020-02-03 18:23:46'),
(6, 'root', '', '2020-02-03 18:26:20'),
(7, 'root', '', '2020-02-03 18:28:32'),
(8, 'root', '', '2020-02-03 18:29:23'),
(9, 'root', 'aaaaaaaaaaaaaaaa', '2020-02-03 18:29:48'),
(10, 'Ahmed', 'aaaaaaaaaaaaaaaa', '2020-02-03 18:32:26'),
(11, 'Ahmed', 'aaaaaaaaaaaaaaaa', '2020-02-03 18:32:43'),
(12, 'Ahmed', '', '2020-02-03 18:32:53'),
(13, 'Ahmed', '', '2020-02-03 18:33:39'),
(14, 'Ahmed', '', '2020-02-03 18:33:44'),
(15, 'Ahmed', '', '2020-02-03 18:33:45'),
(16, 'Ahmed', '', '2020-02-03 18:35:29'),
(17, 'Ahmed', '', '2020-02-03 18:35:31'),
(18, 'Ahmed', '', '2020-02-03 18:35:51'),
(19, 'Ahmed', '', '2020-02-03 18:35:52'),
(20, 'Ahmed', '', '2020-02-03 18:35:57'),
(21, 'Ahmed', '', '2020-02-03 18:35:59'),
(22, 'Ahmed', '', '2020-02-03 18:36:00'),
(23, 'Ahmed', '', '2020-02-03 18:36:00'),
(24, 'Ahmed', '', '2020-02-03 18:36:01'),
(25, 'Ahmed', '', '2020-02-03 18:36:01'),
(26, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:37:38'),
(27, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:37:39'),
(28, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:37:40'),
(29, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:38:22'),
(30, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:38:26'),
(31, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:38:27'),
(32, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:38:27'),
(33, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:38:28'),
(34, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:38:28'),
(35, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:38:28'),
(36, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:38:28'),
(37, 'Ahmed', '[object HTMLTextAreaElement]', '2020-02-03 18:38:28'),
(38, 'Ahmed', '', '2020-02-03 18:39:27'),
(39, 'Ahmed', '', '2020-02-03 18:39:29'),
(40, 'Ahmed', '', '2020-02-03 18:39:46'),
(41, 'Ahmed', '', '2020-02-03 18:39:46'),
(42, 'Ahmed', '', '2020-02-03 18:39:47'),
(43, 'Ahmed', '', '2020-02-03 18:39:49'),
(44, 'Ahmed', '', '2020-02-03 18:39:52'),
(45, 'Ahmed', '', '2020-02-03 18:39:59'),
(46, 'Ahmed', '', '2020-02-03 18:41:38'),
(47, 'Ahmed', '', '2020-02-03 18:41:39'),
(48, 'Ahmed', '', '2020-02-03 18:41:40'),
(49, 'Ahmed', '', '2020-02-03 18:45:24'),
(50, 'Ahmed', '', '2020-02-03 18:45:25'),
(51, 'Ahmed', '', '2020-02-03 18:45:25'),
(52, 'Ahmed', 'ahmed', '2020-02-03 18:47:36'),
(53, 'Ahmed', 'ahmed', '2020-02-03 18:47:37'),
(54, 'Ahmed', 'ahmed', '2020-02-03 18:47:37'),
(55, 'Ahmed', 'ahmed', '2020-02-03 18:47:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

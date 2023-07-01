-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2020 at 05:52 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat*`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

DROP TABLE IF EXISTS `chat_message`;
CREATE TABLE IF NOT EXISTS `chat_message` (
  `chat_message_id` int(11) NOT NULL AUTO_INCREMENT,
  `to_user_id` int(11) NOT NULL DEFAULT '0',
  `from_user_id` int(11) NOT NULL,
  `chat_message` text COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`chat_message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 2, 1, 'hi', '2020-02-13 01:28:30', 0),
(2, 1, 2, 'hi', '2020-02-13 01:29:02', 0),
(3, 1, 2, 'hey', '2020-02-13 10:28:36', 0),
(4, 2, 1, 'how are u?\n', '2020-02-13 10:29:07', 0),
(5, 1, 2, 'fine nigga \n', '2020-02-13 10:29:24', 0),
(6, 1, 2, 'good to hear from u\n', '2020-02-13 10:29:44', 2),
(7, 1, 2, 'Where are u now? \nam waiting\n', '2020-02-13 10:30:16', 0),
(8, 2, 1, 'here ma nigga\n', '2020-02-13 10:30:36', 0),
(9, 1, 2, 'u r typing ,idiot', '2020-02-13 10:58:36', 0),
(10, 1, 2, 'hi', '2020-02-13 11:25:24', 0),
(11, 2, 1, 'ahmed', '2020-02-13 11:37:34', 2),
(12, 2, 1, '🤣', '2020-02-13 11:47:38', 0),
(13, 0, 1, 'hey', '2020-02-13 13:54:09', 1),
(14, 0, 2, 'hey ahmed', '2020-02-13 13:54:30', 2),
(15, 2, 1, 'محمد\n\n', '2020-02-13 14:20:11', 2),
(16, 1, 2, 'نعم', '2020-02-13 14:20:30', 0),
(17, 0, 1, '<p><img src=\"upload/qJiM1tI9_400x400.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2020-02-13 15:17:07', 1),
(18, 0, 1, '<p><img src=\"upload/qJiM1tI9_400x400.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2020-02-13 15:17:31', 1),
(19, 0, 1, '<p><img src=\"upload/qJiM1tI9_400x400.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p>chan chan man<div><br></div>', '2020-02-13 15:17:54', 1),
(20, 0, 1, 'ahmed', '2020-02-13 15:55:32', 1),
(21, 0, 1, 'ahmed', '2020-02-13 16:01:45', 1),
(22, 0, 1, 'hey', '2020-02-13 16:01:57', 1),
(23, 0, 1, 'ahmed hhh', '2020-02-13 17:00:07', 1),
(24, 0, 1, 'hey all', '2020-02-13 17:09:13', 1),
(25, 0, 2, 'hey ahmed<div><br></div>', '2020-02-13 17:09:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'ahmed', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(2, 'mohamed', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, 'mahmoud', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(4, 'ali', '$2y$10$UvL6ZYFQpJffPDtCaCef0O9OzVlRN8JQPY8C0EibWkQiHltar6TTG'),
(5, 'eman', '$2y$10$qYGg/cMrLEl3dNUrmkRbFuq71/CcjAyTFhfwDcGRz7J3lbbqEqYFi');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

DROP TABLE IF EXISTS `login_details`;
CREATE TABLE IF NOT EXISTS `login_details` (
  `login_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL,
  PRIMARY KEY (`login_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(31, 2, '2020-02-13 17:42:27', 'no'),
(32, 4, '2020-02-13 17:52:27', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

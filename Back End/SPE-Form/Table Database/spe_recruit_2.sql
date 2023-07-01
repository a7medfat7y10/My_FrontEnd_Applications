-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 11:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spe_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `spe_recruit_2`
--

CREATE TABLE `spe_recruit_2` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EMail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Telephone` bigint(20) NOT NULL,
  `faculty` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Academic` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Depart` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Profile` text CHARACTER SET utf8 NOT NULL,
  `feedback` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spe_recruit_2`
--

INSERT INTO `spe_recruit_2` (`id`, `Name`, `EMail`, `Telephone`, `faculty`, `Academic`, `Depart`, `Profile`, `feedback`) VALUES
(1, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'aaaaaaaaaaaaaaaaaaa'),
(2, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(3, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(4, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(5, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(6, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(7, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(8, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(9, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'aaaa hmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spe_recruit_2`
--
ALTER TABLE `spe_recruit_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spe_recruit_2`
--
ALTER TABLE `spe_recruit_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

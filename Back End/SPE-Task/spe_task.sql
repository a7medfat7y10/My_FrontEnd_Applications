-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 03:47 PM
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
-- Table structure for table `spe_form`
--

CREATE TABLE `spe_form` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `EMail` varchar(255) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spe_form`
--

INSERT INTO `spe_form` (`id`, `Name`, `EMail`, `Telephone`, `message`) VALUES
(45, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'thanks'),
(47, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'thanks last'),
(48, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'last message');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spe_form`
--
ALTER TABLE `spe_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spe_form`
--
ALTER TABLE `spe_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

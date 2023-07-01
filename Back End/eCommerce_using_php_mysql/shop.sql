-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2020 at 01:05 PM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` text,
  `parent` int(11) NOT NULL COMMENT '0 for main category',
  `Ordering` int(11) DEFAULT NULL,
  `Visibility` tinyint(4) NOT NULL DEFAULT '0',
  `Allow_Comment` tinyint(4) NOT NULL DEFAULT '0',
  `Allow_Ads` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Name`, `Description`, `parent`, `Ordering`, `Visibility`, `Allow_Comment`, `Allow_Ads`) VALUES
(3, 'Hand Made', 'Hand Made items', 0, 1, 0, 0, 0),
(4, 'Computers', 'computers', 0, 2, 0, 0, 0),
(5, 'Cell Phones', 'Mobiles And Phones', 0, 3, 0, 0, 0),
(6, 'Clothing', 'Clothing And Fashion', 0, 4, 0, 0, 0),
(7, 'Tools', 'Home Tools', 0, 5, 0, 0, 0),
(9, 'Jackets  ', 'very good leather  ', 6, 3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `comment_date` date NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `item_comment` (`item_id`),
  KEY `commenyt_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `comment`, `status`, `comment_date`, `item_id`, `user_id`) VALUES
(1, 'very good', 0, '2019-10-02', 6, 1),
(4, 'very good', 1, '2019-10-02', 6, 1),
(5, 'gooooooood', 0, '2019-11-20', 6, 1),
(8, 'gooooooooood', 0, '2019-11-20', 6, 1),
(9, 'gooooooooood', 0, '2019-11-20', 6, 1),
(14, 'gooooooooood', 0, '2019-11-20', 6, 1),
(16, 'gooooooooood', 1, '2019-11-20', 6, 1),
(17, 'gooooooooood', 0, '2019-11-20', 6, 1),
(19, 'gooooooooood', 0, '2019-11-20', 6, 1),
(21, 'gooooooooood', 0, '2019-11-20', 6, 1),
(23, 'very good', 1, '2019-11-27', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `Item_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Add_Date` date NOT NULL,
  `Country_Made` varchar(255) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Status` varchar(255) NOT NULL,
  `Rating` smallint(6) DEFAULT '0',
  `Approve` int(11) NOT NULL DEFAULT '0',
  `Cat_ID` int(11) DEFAULT '0',
  `Member_ID` int(11) DEFAULT '0',
  `tags` varchar(255) NOT NULL,
  PRIMARY KEY (`Item_ID`),
  KEY `member_1` (`Member_ID`),
  KEY `cat_1` (`Cat_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_ID`, `Name`, `Description`, `Price`, `Add_Date`, `Country_Made`, `Image`, `Status`, `Rating`, `Approve`, `Cat_ID`, `Member_ID`, `tags`) VALUES
(6, 'Iphone', 'good great not used so much ', '199', '2019-11-02', 'china', NULL, '1', 0, 1, 5, 1, ''),
(7, 'speaker', 'good great not used ', '100', '2019-11-02', 'USA', NULL, '2', 0, 1, 4, 6, ''),
(19, 'sayed meaza', 'the body doesnot show any mercy', '100', '2019-11-10', 'argentena', NULL, '1', 0, 1, 7, 1, ''),
(20, 'samsung j5 prime', 'very good cell phone', '1800', '2019-11-27', 'Japan', NULL, '1', 0, 1, 5, 1, ''),
(21, 'samsung j5', 'very good cell phone', '1800', '2019-11-27', 'Japan', NULL, '1', 0, 1, 5, 1, ''),
(22, 'Huawei mate 10', 'very good cell phone', '1800', '2019-11-27', 'Japan', NULL, '1', 0, 1, 5, 1, ''),
(23, 'Wooden Game', 'wooden game description for sale ', '100', '2019-11-29', 'china', NULL, '2', 0, 1, 3, 1, 'ahmed, handmade, discount'),
(24, 'mobile123', 'good great not used so much ', '100', '2019-11-29', 'china', NULL, '1', 0, 1, 5, 1, 'ahmed, games, discount, vr'),
(25, 'aaaaaa', 'aaaaaaaaaaaaaaa', '111', '2019-11-29', 'china', NULL, '1', 0, 0, 7, 1, 'aaaa'),
(26, 'aaaaaa', 'aaaaaaaaaaaaaaa', '111', '2019-11-29', 'china', NULL, '1', 0, 0, 7, 1, 'aaaa'),
(27, 'mobile', 'good great not used so much ', '100', '2019-11-29', 'china', NULL, '1', 0, 1, 7, 1, 'ahmed, shirt'),
(28, 'fortnite', 'good great not used so much ', '100', '2019-11-29', 'korea', NULL, '1', 0, 1, 4, 1, 'ahmed, games, discount, vr');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'To identify user',
  `Username` varchar(255) NOT NULL COMMENT 'username to login',
  `Password` varchar(255) NOT NULL COMMENT 'password to login',
  `Email` varchar(255) NOT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `GroupID` int(11) NOT NULL DEFAULT '0' COMMENT 'identify user group''permission''',
  `TrustStatus` int(11) NOT NULL DEFAULT '0' COMMENT 'seller rank',
  `RegStatus` int(11) NOT NULL DEFAULT '0' COMMENT 'user approval',
  `Date` date NOT NULL DEFAULT '2019-10-20',
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Email`, `FullName`, `GroupID`, `TrustStatus`, `RegStatus`, `Date`, `avatar`) VALUES
(1, 'ahmed', '7c4a8d09ca3762af61e59520943dc26494f8941b   ', 'ahmedfathy.1074@gmail.com', 'ahmed m. fathy', 1, 0, 1, '2019-10-15', ''),
(6, 'mohamed', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m.com', 'mohamed ramzy', 0, 0, 1, '2019-10-20', ''),
(7, 'sayed', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sayed@gmail.com', 'sayed habda', 0, 0, 1, '2019-10-20', ''),
(8, 'eslam', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'eslam@gmail.com', 'eslam ahmed', 0, 0, 1, '2019-10-20', ''),
(9, 'ayman', '645b8fbaef16c732ce0d5d1b18e228ae871a51ce ', 'aym@gmail.com', 'ayman mmmm', 0, 0, 1, '2019-10-20', ''),
(10, 'mazen', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m.com', 'mazen mahmoud', 0, 0, 1, '2019-11-06', ''),
(11, 'amir', '8cb2237d0679ca88db6464eac60da96345513964', 'ahmedfathy.1074@gmail.com', 'ahmed', 0, 0, 0, '2019-11-06', ''),
(12, 'salama', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'a@a.com', 'ahmed', 0, 0, 1, '2019-11-06', ''),
(13, 'amira', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'a@aa.com', 'ahmed', 0, 0, 0, '2019-11-06', ''),
(14, 'maged', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m.com', ' ', 0, 0, 0, '2019-11-06', ''),
(15, 'usef', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'u@u.com', ' ', 0, 0, 1, '2019-11-07', ''),
(16, 'aliii', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ali@a.com', 'ali elhabad', 0, 0, 1, '2019-11-30', '80376023098_1.PNG'),
(17, 'sameh', '7c4a8d09ca3762af61e59520943dc26494f8941b', 's@s.com', 'sammeh mmm', 0, 0, 1, '2019-11-30', '46235829695_2.PNG'),
(18, 'mary', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'mary@m.com', 'mary mary', 0, 0, 1, '2019-11-30', '27848615521_2.PNG'),
(19, 'mahy', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m.com', 'mahy mahy mmmm', 0, 0, 1, '2019-11-30', '35281576956_1.PNG'),
(20, 'salman', '123456', 'a@a.com', NULL, 0, 0, 0, '2019-11-30', NULL),
(21, 'amfaa', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'a@a.com', NULL, 0, 0, 0, '2019-11-30', NULL),
(22, 'aaeea', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'a@aa.com', NULL, 0, 0, 0, '2019-11-30', NULL),
(23, 'aliaaa', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'a@a.com', NULL, 0, 0, 0, '2019-11-30', NULL),
(24, 'helal', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'a@a.com', NULL, 0, 0, 0, '2019-11-30', NULL),
(25, 'hamed', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'a@a.com', NULL, 0, 0, 0, '2019-11-30', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `commenyt_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_comment` FOREIGN KEY (`item_id`) REFERENCES `items` (`Item_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `cat_1` FOREIGN KEY (`Cat_ID`) REFERENCES `categories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_1` FOREIGN KEY (`Member_ID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

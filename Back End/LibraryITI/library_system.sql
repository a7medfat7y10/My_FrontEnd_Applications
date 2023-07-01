-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 09:10 PM
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
-- Database: `library_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_description` text NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `publish_time` date NOT NULL,
  `book_image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_description`, `book_author`, `publish_time`, `book_image_path`) VALUES
(25, 'Who Moved My CHeese', 'Who Moved My Cheese? An Amazing Way to Deal with Change in Your Work and in Your Life, published on September 8, 1998, is a bestselling seminal work and motivational business fable by Spencer Johnson. The text describes the way one reacts to major change in one\'s work and life, and four typical reactions to those changes by two mice and two \"Littlepeople\", during their hunt for \"cheese\". ', '	Spencer Johnson', '1998-07-09', '36889047620_11540604.jpg'),
(26, 'The Seven Habits of Highly Effective People', 'The 7 Habits of Highly Effective People, first published in 1989, is a business and self-help book written by Stephen R. Covey.[1] Covey presents an approach to being effective in attaining goals by aligning oneself to what he calls \"true north\" principles based on a character ethic that he presents as universal and timeless.', 'Stephen Cophey', '0989-01-01', '36492118399_9781471195204.jpg'),
(27, 'الطنطورية', 'الطنطورية رواية للأديبة المصرية رضوى عاشور، صدرت سنة 2010، عن دار الشروق المصرية. تسرد الرواية سيرة متخيلة لعائلة فلسطينية، منتسبة إلى قرية الطنطورة، بين سنتي 1947 و 2000، تم اقتلاعها من أرضها بعد اجتياح العصابات الصهيونية للقرية، لتعيش تجارب اللجوء في لبنان و الإمارات و مصر. تنتظم الرواية حول خط من الأحداث و الوقائع التاريخية كالنكبة و اللجوء الفلسطيني و الحرب الأهلية اللبنانية و الاجتياح الإسرائيلي للبنان', 'رضوي عاشور', '2010-02-02', '71713767651_الطنطورية.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL COMMENT 'To identify user',
  `Username` varchar(255) NOT NULL COMMENT 'username to login',
  `Password` varchar(255) NOT NULL COMMENT 'password to login',
  `Email` varchar(255) NOT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `GroupID` int(11) NOT NULL DEFAULT 0 COMMENT 'identify user group''permission''',
  `TrustStatus` int(11) NOT NULL DEFAULT 0 COMMENT 'seller rank',
  `RegStatus` int(11) NOT NULL DEFAULT 0 COMMENT 'user approval',
  `Date` date NOT NULL DEFAULT '2019-10-20',
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Email`, `FullName`, `GroupID`, `TrustStatus`, `RegStatus`, `Date`, `avatar`) VALUES
(1, 'ahmed', '7c4a8d09ca3762af61e59520943dc26494f8941b   ', 'ahmedfathy.1074@gmail.com', 'ahmed m. fathy', 1, 0, 1, '2019-10-15', ''),
(7, 'sayed', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sayed@gmail.com', 'sayed habda', 0, 0, 1, '2019-10-20', ''),
(8, 'eslam', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'eslam@gmail.com', 'eslam ahmed', 0, 0, 0, '2019-10-20', ''),
(9, 'ayman', '645b8fbaef16c732ce0d5d1b18e228ae871a51ce ', 'aym@gmail.com', 'ayman mmmm', 0, 0, 1, '2019-10-20', ''),
(27, 'ali123', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ali@gmail.com', 'Ali AHmed', 0, 0, 1, '2022-02-23', '80461352664_119470302_3061144974012530_495142593809090751_o.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'To identify user', AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

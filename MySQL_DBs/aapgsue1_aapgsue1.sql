-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 12:58 AM
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
-- Database: `aapgsue1_aapgsue1`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `EMail` varchar(55) NOT NULL,
  `Telephone` bigint(55) NOT NULL,
  `faculty` varchar(55) NOT NULL,
  `Academic` varchar(55) NOT NULL,
  `Depart` varchar(55) NOT NULL,
  `Profile` text NOT NULL,
  `committee1` varchar(55) NOT NULL,
  `committee2` varchar(55) NOT NULL,
  `field9` text NOT NULL,
  `field10` text NOT NULL,
  `chooone` varchar(100) NOT NULL,
  `chootwo` varchar(100) NOT NULL,
  `choothree` varchar(100) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `Name`, `EMail`, `Telephone`, `faculty`, `Academic`, `Depart`, `Profile`, `committee1`, `committee2`, `field9`, `field10`, `chooone`, `chootwo`, `choothree`, `feedback`) VALUES
(223, 'Ragda abd algany', 'ragda.abdalgany@yahoo.com', 1013988244, 'Faculty of arts and humanities ', 'second', 'France ', 'https://www.facebook.com/ragda.a.algany', 'Human Resource', 'Public Relation', 'Because I want to Develop my skills', 'No I didnt have ', 'three', 'four', 'one', ' I think this chapter will be useful for me '),
(224, 'Alaa Abd Elmonaem Abd Elmged mousa ', 'alaalooo55@gmail.com', 1013471333, 'Faculty of arts and humanities ', 'second', 'Franais ', 'https://www.facebook.com/profile.php?id=100010288964463', 'Human Resource', 'Public Relation', 'Because I want to development my skills', 'I didnt have ', 'three', 'four', 'one', 'I think this chapter will be useful for me '),
(225, 'Muhand Magdy Ibrahim', 'magdymuhand1907@gmail.com', 1020640437, 'Petroleum and mining engineering', 'forth', 'Petroleum department', 'https://www.facebook.com/Muhandebnmagdy', 'Academy Petrol', 'Academy El Gamaa', 'American Association of Petroleum Geologists is one of the most successful student chapter particularly is Suez University and having the outstanding two successive times i think joining to the chapter will be extension to my goals in my technical knowledge so i choose academy petrol committee where i will be able refresh my technical knowledge and gain more experiences', 'For four years ago i was a member of Resala Charity Association and i was participate in lots of charity works and dinning tables', 'three', 'two', 'three', ''),
(226, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', ''),
(227, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'bla bla bla', 'bla bla bla', 'one', 'one', 'one', 'bla bla bla'),
(228, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'IT', 'bla ', 'bla', 'two', 'three', 'two', 'feedback'),
(229, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Academy El Gamaa', 'bla', 'bla', 'three', 'three', 'three', 'feed'),
(230, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aajbdn dbjdbmd m', 'dkdnm kdnkd mdnkd d ', 'two', 'three', 'three', 'dnj jhf fmnfjn'),
(231, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'p', 'first', 'p', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Media', 'ha ha ha ', 'ha ha ha ', 'one', 'two', 'two', 'feed'),
(232, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'bla ha', 'bla ha', 'Fire the member', 'Quit the committee and focus on your studies.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'bla'),
(233, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'bla ha', 'bla ha', 'Fire the member', 'Quit the committee and focus on your studies.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'bla'),
(234, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'bla ha', 'bla ha', 'Fire the member', 'Quit the committee and focus on your studies.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'bla'),
(235, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Media', 'bla', 'bla', 'Deliver an officical warning', 'Pay less attention to deadlines and tasks because you need to study.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'feed'),
(236, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Media', 'bla', 'bla', 'Deliver an officical warning', 'Pay less attention to deadlines and tasks because you need to study.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'feed'),
(237, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Media', 'bla', 'bla', 'Deliver an officical warning', 'Pay less attention to deadlines and tasks because you need to study.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'feed'),
(238, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Media', 'bla', 'bla', 'Deliver an officical warning', 'Pay less attention to deadlines and tasks because you need to study.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'feed'),
(239, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Media', 'bla', 'bla', 'Deliver an officical warning', 'Pay less attention to deadlines and tasks because you need to study.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'feed'),
(240, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Media', 'bla', 'bla', 'Deliver an officical warning', 'Pay less attention to deadlines and tasks because you need to study.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'feed'),
(241, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Media', 'bla', 'bla', 'Deliver an officical warning', 'Pay less attention to deadlines and tasks because you need to study.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'feed'),
(242, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Media', 'bla', 'bla', 'Deliver an officical warning', 'Pay less attention to deadlines and tasks because you need to study.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'feed'),
(243, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'why interested', 'volunteering', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one committee in only one student chapter and get to know its technicality more deeply.', 'feedback'),
(244, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'second', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'blaaaaaaaaaaaaaa', 'blaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Try harder to manage your time but still maintain your committee performance. ', 'Join all student chapters you can at the same time.', 'feed'),
(245, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'second', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Public Relation', 'AAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAA', 'Fire the member', 'Try harder to manage your time but still maintain your committee performance. ', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', ''),
(246, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'IT', 'Social Media', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', ''),
(247, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Deliver an officical warning', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'aaaaaaaaaaaaaaaa'),
(248, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'IT', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Deliver an officical warning', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feeeed'),
(249, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(250, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(251, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(252, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(253, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(254, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(255, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(256, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(257, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(258, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(259, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(260, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(261, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(262, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(263, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(264, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(265, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(266, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy Petrol', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feedback'),
(267, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Social Media', 'aaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Try harder to manage your time but still maintain your committee performance. ', 'Join only one student chapter and keep re-positioning among all committees inside that chapter.', 'feeeeeeeeeeeeeeed'),
(268, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(269, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(270, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(271, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(272, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(273, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(274, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(275, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(276, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(277, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(278, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(279, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'prep', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', 'Academy El Gamaa', 'Academy Petrol', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Fire the member', 'Complain to your head and ask him/her to go easier on you.', 'Join all student chapters you can at the same time.', 'feedback'),
(280, 'Ahmed Mohamed Fathy', 'ahmedfathy1074@gmail.com', 1004512030, 'Petroleum Engineering', 'first', 'Petroleum Department', 'https://www.facebook.com/a7medfat7y10', '', '', '', '', '', '', '', 'aaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `reposition`
--

CREATE TABLE `reposition` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telephone` varchar(100) DEFAULT NULL,
  `University` varchar(100) DEFAULT NULL,
  `faculty` varchar(100) DEFAULT NULL,
  `Academic` varchar(100) DEFAULT NULL,
  `Depart` varchar(100) DEFAULT NULL,
  `AAPGID` int(55) DEFAULT NULL,
  `facebookprofile` text DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `freespace` text DEFAULT NULL,
  `f_committee` varchar(55) DEFAULT NULL,
  `s_committee` varchar(55) DEFAULT NULL,
  `repositionreason` varchar(155) DEFAULT NULL,
  `personalqualifications` text DEFAULT NULL,
  `n` varchar(150) DEFAULT NULL,
  `leavecause` varchar(155) DEFAULT NULL,
  `situation` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reposition`
--

INSERT INTO `reposition` (`id`, `Name`, `Email`, `Telephone`, `University`, `faculty`, `Academic`, `Depart`, `AAPGID`, `facebookprofile`, `feedback`, `freespace`, `f_committee`, `s_committee`, `repositionreason`, `personalqualifications`, `n`, `leavecause`, `situation`) VALUES
(1, 'Hossam ashraf fathi', 'ho.ashraf9090@gmail.com', '01095428262', 'Suez uni', 'Fuclty of petroleum ', 'Third', 'Refinery ', 10, 'https://www.facebook.com/hossam979', '', '', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(2, 'Elsayed', 'sayedmosaad331@gmail.com', '01156052379', 'Suez', 'p', 'Third', 'p', 12345, 'https://www.facebook.com/elsayed.mosaad8', 'Problem', 'free', 'Media', '', '', '', '', '', 'remain'),
(3, 'Ahmed Abotaleb Mohamed Abotaleb', 'abotaleba84@gmail.com', '01204384339', 'Suez', 'Petroleum and mining engineering', 'Forth', 'Petroleum engineering', 10171750, 'https://www.facebook.com/profile.php?id=100003595502590', '', '', 'Academy Petrol', '', '', '', '', '', 'remain'),
(4, 'Esraa Waled Mohammed', '', '01020479274', '', '', 'Prep', '', 0, '', '', '', 'Human Resources(HR)', '', '', '', '', 'Because I graduated from faculty and I will joine with new job to learn more skills', 'leave'),
(5, 'Rahma Raafat Rateb', 'rahmaraafat990@gamail.com', '01016520157', 'Suez University ', 'Education ', 'Forth', 'Biology', 10196242, 'https://www.facebook.com/romaraafat11', '', '', 'Direct Publicity', '', '', '', '', '', 'remain'),
(6, 'Nada shawky', '', '01270639631 ', '', '', 'Prep', '', 0, '', '', '', 'Direct Publicity', '', '', '', '', '', 'leave'),
(7, 'Donia Saied mansour ', 'doniasaied54@gmail.com', '01151416019 ', 'Suez university ', 'Faculty of Arts and Humanities sciences', 'Forth', 'French ', 10197704, 'https://www.facebook.com/donia.saied.731', '', '', 'Organization Committee(OC)', 'Magazine', 'Because I want to develop myself more , take advantage of another place , and learn different needs .', '\r\nBecause  I want to learn new things and have more experience .', 'Closely monitor the quality of your work', '', 'reposition'),
(8, 'Ahmed Abdlhalim Badran ', '', '01014252503', '', '', 'Prep', '', 0, '', '', '', 'Public Relations', '', '', '', '', '', 'leave'),
(9, 'Mahmoud Ammar', 'mahmoudammar020998@gmail.com', '01010594993', 'Suez', 'Petroleum and mining engineering', 'Forth', 'Petroleum ', 10181584, 'https://www.facebook.com/hooda.ammar.3', '', '', 'Academy Petrol', 'IT', 'As I think I could work in that possion very well as I tecincally qualifed with front end development programming language and want to learn more and more ', 'As I mentioned I need to make my self more profishional and help the chapter more and more ', 'Ask for a meeting with your team leader', '', 'reposition'),
(10, 'Hassan ahmed hassan ', '', '01115673178', '', '', 'Prep', '', 0, '', '', '', 'Public Relations', '', '', '', '', '', 'leave'),
(11, 'Marwa Nemery', '', '01276215128', '', '', 'Prep', '', 0, '', '', '', 'Social Media', '', '', '', '', '', 'leave'),
(12, 'Muhand Magdy ', '', '01020640437', '', '', 'Prep', '', 0, '', '', '', 'Academy Petrol', '', '', '', '', '', 'leave'),
(13, 'Hossam Elsherbeny Ibrahim ', 'hossamelsherbeny5@gmail.com', '01020332582 ', 'Suez ', 'Faculty of petroleum and mining engineering ', 'Forth', 'Petroleum', 1208751, 'https://www.facebook.com/hossam.elsherbeny.18', '', '', 'Public Relations', '', '', '', '', '', 'remain'),
(14, 'Hager ashraf mohmed', 'augaam10@gmail.com', '01141104533', 'Suez University ', 'Education ', 'Third', 'Science ', 10204570, 'https://www.facebook.com/hager.aismail.1', '', '. ', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(15, 'Ahmed Nasser AbdElaaty', 'ahmednasser656945@gmail.com', '01555168437', 'Suez', 'Petroleum engineering', 'Third', 'Geology', 10191166, 'https://www.facebook.com/profile.php?id=100006216245061', '', '', 'IT', 'Human Resources(HR)', 'Because I have learned a lot of skills and knowledge in IT App committee but it was focused on hard and technical stuff so I need to improve other skills t', 'To enforce my skills such as presentation and communication skills.', 'Ask for a meeting with your team leader', '', 'reposition'),
(16, 'Asmaa Mohamed Abdelkader', 'asmaar9te@gmail.com', '01118544701', 'Suez University', 'Fish Resources', 'Third', 'Aquaculture', 10196208, 'https://www.facebook.com/profile.php?id=100016390963215', '', '', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(17, 'Yasmeen Amer', '', '01066810152', '', '', 'Prep', '', 0, '', '', '', 'Organization Committee(OC)', '', '', '', '', '', 'leave'),
(18, 'Ahmed Mohamed El-Hady', 'ahmedelhady810@gmail.com', '01123530940', 'Suez University ', 'Petroleum and Mining Engineering ', 'Third', 'Petroleum Engineering ', 10199858, 'https://m.facebook.com/profile.php?id=100001919762735', 'Absolutely no problem ', 'Great committee', 'Direct Publicity', '', '', '', '', '', 'remain'),
(19, 'Ahmed Mohamed Fathy ', 'ahmedfathy.1074@gmail.com', '01004512030', 'Suez university', 'Petroleum Engineering', 'Third', 'petroleum engineering', 10205475, 'https://www.facebook.com/a7medfat7y10/', 'No problem', 'I&#39;m pleased to continue as a part of this outstanding team.', 'IT', '', '', '', '', '', 'remain'),
(20, 'Youssef Gamal kandil', 'sso135480@gmail.com', '01117379547', 'Suez University', 'Petroleum and mining engineering', 'Third', 'Petroleum department', 10208763, 'https://www.facebook.com/youssif.gamal.397', 'I didn&#39;t face any problems as I came to AAPG in the last ground recruitment and unfortunately we didn&#39;t attend any ground meetings and we continued the rest of season online and I hope there will be no problems.', 'I want to thank ms Doaa Atef for her efforts with us and for helping us to develop ourselves and I hope this season will be great and we could develop ourselves and help in AAPG Development', 'Human Resources(HR)', '', '', '', '', '', 'remain'),
(21, 'Hadeer Mohamed latif ', 'hadeer.latif11@gmail.com', '0115 518 2452', 'Suez University ', 'Faculty of petroleum and mining engineering ', 'Third', 'Petroleum ', 10182987, 'https://www.facebook.com/profile.php?id=100009595391550', '', '', 'Academy Petrol', 'Human Resources(HR)', 'I want to know more about HR committee and try to do its work', ' Its work is very important, exciting and suitable for me. ', 'Closely monitor the quality of your work', '', 'reposition'),
(22, 'Alek Akoy Dual Akoy', 'Alekdual998@gmail.com', '01124865523', 'Suez University ', 'Petroleum and Mining Engineering ', 'Second', 'Petroleum ', 10204565, 'https://www.facebook.com/alek.dual.7', 'I&#39;ve joined very lately, almost didn&#39;t face any problems during the end of the season.', '  Very unique chapter, and very hard working members, and i&#39;m looking forward to fulfil perfectly my new position next season in this greatness. \r\n  And i would also like to thank each leader and each head that really showed undeniable effort for the sake of great chapter.', 'Direct Publicity', '', '', '', '', '', 'remain'),
(23, 'Omar Abdelaziz Mohamed Barakat ', 'omarbarakat251@gmail.com', '01009066087', 'Suez University ', 'Petroleum and mining engineering ', 'Second', 'Petroleum production and exploration ', 10208128, 'https://www.facebook.com/kotta.962000', 'The difficulty of getting what do you need &#34; like trainings &#34;from HR or Technical engineer.', '', 'Public Relations', '', '', '', '', '', 'remain'),
(24, 'Amira Mohamed Emam ', '', '01120303693 ', '', '', 'Prep', '', 0, '', '', '', 'Direct Publicity', '', '', '', '', 'Because I graduated.\r\nAAPG will still be the best place I have learned from. ', 'leave'),
(25, 'Abdulrhman Khaled Hassan', 'Bodyono3@gmail.com', '01148472090', 'Suez university', 'Computers and Information', 'Second', 'General', 10208776, 'https://www.facebook.com/abdalrahman.khaled.54/', 'No comment', '^_^', 'IT', '', '', '', '', '', 'remain'),
(26, 'Mazen Mohamed Rabie', 'mazenrabie21@gmail.com', '01124332052', 'Suez university', 'faculty of petroleum and mining engineering ', 'Prep', 'general', 10208741, 'https://www.facebook.com/mazen.rabiee.7/', '', '', 'Magazine', '', '', '', '', '', 'remain'),
(27, 'Ahmed Abdelwahab Dawood', '', '01001542982', '', '', 'Prep', '', 0, '', '', '', 'Media', '', '', '', '', 'First of all, Thanks to every single one who helps me for the last 3 years. \r\nSecondly, There is not any reason for leaving. I have another plans for next ', 'leave'),
(28, 'Ahmed magdy kamal', 'Ahmed10_magdi@yahoo.com', '01017032730', 'Suez University ', 'Faculty of Petroleum and Mining Engineering ', 'Second', 'Drilling department ', 102024561, 'https://www.facebook.com/ahmed.magdy.39566905', '', '', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(29, 'نيرة ناصر ابو الوفا', 'nayeranasser996@gmail.com', '01063245583', 'Suez universty', 'Faculty of Arts', 'Second', 'Psychology', 10203344, 'https://m.facebook.com/', '', '', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(30, 'Salama Ali Salama Abd El Salam', 'salamaali427@gmail.com', '01014275714', 'Suez University', 'Faculty of Petroleum and Mining Engineering', 'Third', 'Petroleum', 10208780, 'https://www.facebook.com/salamaali333/', 'I didn&#39;t find any problem at all and every thing was perfect but the activities we have weren&#39;t a lot because of corona virus and I got it', '', 'Human Resources(HR)', '', '', '', '', '', 'remain'),
(31, 'Ahmed Tarek Elsaid Elsayed ', '4petrolesta@gmail.com', '01120071275', 'Suez', 'Petroleum and mining engineering ', 'Third', 'Petrol ', 10176517, 'http://aapgsuez.net/RepositionForm21.php', '', '', 'Media', '', '', '', '', '', 'remain'),
(32, 'Ahmed Abdallah mahmoud', 'ahmedabdallah98mhho@gmail.com', '01125084458', 'Suez', 'Petroleum and mining engineering', 'Third', 'Refining and petrochemical', 10204319, 'https://www.facebook.com/profile.php?id=100018840647472', 'There is no problem', '', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(33, 'Hassan Osama AbouAmer', 'hassanosama1410@gmail.com', '01026641467', 'Suez University', 'Petroleum and Mining Engineering', 'Second', 'Petroleum Engineering', 10196457, 'https://www.facebook.com/hassan.osama.100046', '', '', 'Academy Petrol', '', '', '', '', '', 'remain'),
(34, 'Abdelhakeem Hesham Mohamed Elshinnawi', '', '01210567232', '', '', 'Prep', '', 0, '', '', '', 'Media', '', '', '', '', 'I am satisfied with what I have learned with you last year. Thanks AAPG.', 'leave'),
(35, 'amen abdou', 'amenabdou170@gmail.com', '01148716349', 'suez', 'faculty of petroleum and minning engineering', 'First', 'petroleum', 10208789, 'https://www.facebook.com/profile.php?id=100008122752734', '', '', 'Magazine', '', '', '', '', '', 'remain'),
(36, 'Mohamed Elsayed Ali Elsayed ', 'elsayedmohamedoc@gmail.com', '01100124806 ', 'Suez University ', 'Faculty of petroleum and mining engineering ', 'Third', 'Refining and petrochemical ', 10204571, 'https://www.facebook.com/profile.php?id=100019002780862', 'لم أواجه اى مشكلة ', '', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(37, 'Kassem subhi alhouran', 'kassemalhouran@gmail.com', '01126161402', 'Suez University', 'Petroleum and Mining Engineering', 'Third', 'Oil refining and petrochemicals', 10197655, 'https://www.facebook.com/profile.php?id=100007072202200', 'I had no problem last season.', 'Hope it&#39;s a good season for everyone.', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(38, 'Ghada Shaker Abd Elwahed Morsy', 'ghadashaker179@gmail.com', '01142888105', 'Canal High Institute For engineering and technology ', 'Engineering ', 'Third', 'Chemical engineering ', 10185136, 'https://www.facebook.com/ghada.shaker.965', 'احيانا لم اكن استطيع حضور العديد من الايڤنتات والمؤتمرات بسبب المواعيد ', 'وحيث ان الايڤنتات مثل اسع وغيره يكونو يوم السبت والدراسه عندي تعمل من السبت للأربع فلم استطع حضوره وهذا احزنني كثيرا', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(39, 'Ahmed Elkazaz', 'ahmedelkazaz42@gmail.com', '01276926462', 'Suez', 'Petroleum engineering', 'Second', 'Petroleum', 10196209, 'https://www.facebook.com/ahmed.elkazaz.900', '', '', 'Direct Publicity', 'Magazine', 'I feel that I succeeded in learning new skills, developing my current skills and gaining a lot of information and experiences related to Direct Publicity C', 'I look forward to improving my verbal and written communication skills, being knowledgeable about English language, editing content and managing the production process.\r\nIt greatly enables me to be a successful content writer by editing and proofreading content to approve the potential readers. ', ' Ask for advice to a more experienced colleage', '', 'reposition'),
(40, 'Sayed', 'sayedmosaad331@gmail.com', '01156052379', 'Suez', 'petroleum and mining engineering', 'Third', 'Petroleum', 0, 'https://www.facebook.com/elsayed.mosaad8', '', '', 'Media', '', '', '', '', '', 'remain'),
(41, 'Esraa amr', '', '01011003076', '', '', 'Prep', '', 0, '', '', '', 'Organization Committee(OC)', '', '', '', '', 'اتبسطت جدا بالشغل فيه حقيقي، ولكن الفترة الجاية عندي ضغط شغل كتير فمش هقدر أوازن للاسف', 'leave'),
(42, 'Ahmed Samy Fathallah', 'ahmedsamy22elswas@gmail.com', '01555862450', 'Suez', 'Faculty of science', 'Second', 'Geology ', 0, 'https://www.facebook.com/profile.php?id=100008160795559', '', '', 'Academy El Gamaa', '', '', '', '', '', 'remain'),
(43, 'Asmaa Samir Abd Elgaid', '', '01202018268', '', '', 'Prep', '', 0, '', '', '', 'Human Resources(HR)', '', '', '', '', 'I will graduate this year', 'leave'),
(44, 'Asmaa Maher Mohamed ', 'asmaamaher1166@gmail.com', '01123146462', 'Suze university ', 'Faculty of fish resources and marine studies ', 'Third', 'Inland fisheries ', 0, 'https://www.facebook.com/asmaa.maher.376043', '', '', 'Media', '', '', '', '', '', 'remain'),
(45, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(46, 'My Adress', 'mahmod.elgaml9@gmail.com', '+201069184095', 'Suez University', 'Petroleum and mining engineering', 'Third', 'refining and petrochemicals engineering', 10196215, 'https://www.facebook.com/mahmod.elgaml9', 'I did not face any problems during the season but I suggest that if one of PR committee bring us a training in a company then he should have an opportunity or two to it according to no. of opportunities he brought. ', 'I suggest that if one of PR committee bring us a training in a company then he should have an opportunity or two to it according to no. of opportunities he brought. ', 'Public Relations', '', '', '', '', '', 'remain'),
(47, 'Abdelrahman mostafa eltohamy', 'eltohamya96@yahoo.com', '01282867042', 'Suez university', 'Petroleum and minig', 'Third', 'Petroleum', 10208804, 'https://www.facebook.com/abdo.eltohamy.35', '', '', 'Public Relations', '', '', '', '', '', 'remain'),
(48, 'Abdelrahman Amr Badawy', 'abdelrahmanamr1010@gmail.com', '01142804653', 'Suez university', 'Petroleum and mining engineering', 'Third', 'Refining', 10204460, 'https://www.facebook.com/abdelrahmanamr1010', '', '', 'Public Relations', '', '', '', '', '', 'remain'),
(49, 'Esraa Saad Arafa', 'esraa.saad.arafa@gmail.com', '01204727527', 'Suez University ', 'Mass Communication ', 'Forth', 'Journalism departmen ', 10194119, 'https://www.facebook.com/esraa.sasso.773776', '', '', 'Organization Committee(OC)', 'Social Media', 'I need to gain more experience in the field of social media Marketing.', 'I expect to develop my searching skills and know more about Social Media Marketing.\r\n \r\nMy qualifications for this committee:\r\n- I wrote about many topics as a student at faculty of mass communication, Journalism department, and which developed my writing and research skills but  needed to know more about Social Media Marketing.', 'Closely monitor the quality of your work', '', 'reposition'),
(50, 'Omar Hamdy sedek', '', '01142260752', '', '', 'Prep', '', 0, '', '', '', 'Organization Committee(OC)', '', '', '', '', 'Because I’m Graduated ', 'leave'),
(51, 'زياد أشرف ابراهيم العزبي ', '', '01550767615 ', '', '', 'Prep', '', 0, '', '', '', 'Organization Committee(OC)', '', '', '', '', '', 'leave'),
(52, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(53, 'Ahmed Ibrahim Abd Elsatar lebda', '', '01090517674', '', '', 'Prep', '', 0, '', '', '', 'Organization Committee(OC)', '', '', '', '', '', 'leave'),
(54, 'إسراء أنور سمير ', 'esraaanwee487@gmail.com', '01553036243 ', 'السويس ', 'إعلام وتكنولوجيا الاتصال ', 'Forth', 'اتصالات تسويقيه متكامله ', 3333, 'https://www.facebook.com/profile.php?id=100007195473164', '', '', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(55, 'MOHAMED Gamal Metwalley Ali', 'mgmam33333@gmail.com', '01278922733 ', 'Suez University ', 'Petroleum and mining engineering', 'Second', 'استكشاف وإنتاج البترول ', 10208807, 'https://www.facebook.com/profile.php?id=100027260495166', '', '', 'Social Media', '', '', '', '', '', 'remain'),
(56, 'Abdullah Mohamed Ragab Othman ', 'ekaa2018ekaa@gmail.com', '01118027406', 'Suez ', 'Politics and economics ', 'Third', 'Economic', 12345, 'https://www.facebook.com/profile.php?id=100006749555522', '', 'Thanks AAPG', 'Social Media', 'Human Resources(HR)', 'By nature, I love change, and I am in commitee the social media. I learned almost every need, so I liked in the new season to learn a new thing', 'Because my HR knowledge is very little, and I want to improve from it and know everything', ' Ask for advice to a more experienced colleage', '', 'reposition'),
(57, 'Rana Saad', 'ranasaad71198@gmail.com', '01126051835', 'Suez', 'Fish resource and marine studies', 'Forth', 'marine safety', 10181388, 'https://www.facebook.com/rana.saad.8888', '', '', 'Academy El Gamaa', '', '', '', '', '', 'remain'),
(58, 'Abdelrahman Elsayed Mohamed', 'ouf902@gmail.com', '01006892802', 'Suez University', 'Petroleum and Mining Engineering', 'Second', 'Petroleum', 10196452, 'https://www.facebook.com/abdelrahmanebnouf.hymaida', '', 'Wish to be accepted in the new committee and to continue being belong to AAPG.', 'Organization Committee(OC)', 'Media', 'Hoping to improve some new skills and gain other new ones.', 'To start to learn and improve some skills i want to gain like graphic programes and magazine editing.', 'Closely monitor the quality of your work', '', 'reposition'),
(59, 'Ola AbdElhameid ', 'olaabdelhamid33@gmail.com', '01062783309 ', 'Suez University ', 'Media and Communications technology ', 'Second', 'Radio and TV department ', 11123, 'https://www.facebook.com/ola.anaola.52', '', '', 'Organization Committee(OC)', '', '', '', '', '', 'remain'),
(60, 'Mahmoud Gamal Elhebashy', 'Mahmoud.Elhebashy@gmail.com', '01120585155', 'Suez University', 'Petroleum and Mining Engineering', 'Forth', 'Petroleum', 111111111, 'https://www.facebook.com/mahmoud.elhebashy.1', '', '', 'Human Resources(HR)', 'Social Media', 'To learn new skills.', 'To learn new skills.', ' Ask for advice to a more experienced colleage', '', 'reposition'),
(61, 'Ahmed Ali Ahmed', 'ahmed30302010@gmail.com', '01122381575', 'Suez', 'PME', 'Third', 'Metallurgical and Materials Engineering', 10197709, 'https://m.facebook.com/ahmed.ahmed.31542', '', '', 'Media', '', '', '', '', '', 'remain'),
(62, 'Doaa mahmoud ibrahim', 'www.doaamahmoud111@gmail.com', '01003195859', 'suez university', 'faculty of medicine', 'Third', 'none', 1201445345, 'https://www.facebook.com/profile.php?id=100028225064168', '', '', 'Academy El Gamaa', '', '', '', '', '', 'remain'),
(63, 'Heba Abdelraheem Hussein Elzohary', 'habaabdelraheem@gmail.com', '01068065362', 'Suez university', 'Economics and politics', 'Third', 'politicos ', 10208811, 'https://www.facebook.com/heba.elzohry.33/', 'No problem', '', 'Human Resources(HR)', '', '', '', '', '', 'remain'),
(64, 'Mustafa Morsy', '', '01159701914', '', '', 'Prep', '', 0, '', '', '', 'IT', '', '', '', '', '', 'leave'),
(65, 'Donya Ashraf Mohamed Ismail ', 'adonya833@gmail.com', '01007282891', 'Suez university ', 'Education ', 'Forth', 'Kindergarten', 10191384, 'https://www.facebook.com/profile.php?id=100009795426464', '', '', 'Direct Publicity', 'Operations Committee(OC)', 'I benefited alot of DP committee and i want know new soft skills', 'I want to improve skills for organizing, i want to be apart of organize Mega event and learn photograph ', 'Ask for a meeting with your team leader', '', 'reposition'),
(66, 'muhammad hamdy metwaly mohamed', 'mohamed.hamdy99123@gmail.com', '01022808255', 'Suez', 'petroleum and mining engineering', 'Third', 'refining', 658755, 'https://www.facebook.com/profile.php?id=100004238923283', '', '', 'Organization Committee(OC)', '', 'i need to learn another ', '', '', '', 'remain'),
(67, 'Mohamed abd elatief', 'mahmedabdelatief4678@gmail.com', '01112177658', ' suze university ', 'Petroleum engineering', 'Prep', 'Genral', 0, 'https://www.facebook.com/profile.php?id=100009706688968', '', '', 'Social Media', '', '', '', '', '', 'remain'),
(68, 'Omar Abdelaziz Mohamed Barakat ', 'omarbarakat251@gmail.com', '01009066087', 'Suez University ', 'Petroleum and mining engineering ', 'Second', 'Petroleum production and exploration ', 10208128, 'https://www.facebook.com/kotta.962000', 'The difficulty of getting what do you need &#34; like trainings &#34;from HR or Technical engineer.', '', 'Public Relations', '', '', '', '', '', 'remain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reposition`
--
ALTER TABLE `reposition`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `reposition`
--
ALTER TABLE `reposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

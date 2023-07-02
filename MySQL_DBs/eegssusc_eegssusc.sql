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
-- Database: `eegssusc_eegssusc`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `event_instructor` varchar(255) NOT NULL,
  `event_time` date NOT NULL,
  `event_image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_description`, `event_instructor`, `event_time`, `event_image_path`) VALUES
(1, 'Petroleum and Exploration Day (PED)', 'This conference was held in British University in Egypt on Sat, 2 Dec 2017, it contained 3 main topics presented by pioneers in Oil Field:\r\n* Reservoir Modeling by Dr. Hatem Farouk.\r\n* Automated Seismic Interpretation & Stratigraphic Traps by Dr. Ali Bakr.\r\n* Development Geology by Dr. Ali Farag. 	\r\n', 'instructor', '2017-12-02', '/1.jpg'),
(2, 'Cairo Annual Petroleum International Conference                                  (CAPIC 2)', 'This conference was held in (BUE) on 11 March 2018 in cooperation with many student chapters such SPE BUE and SPE El-Azhar. The feedbacks were awesome after a very fruitful week which included:\r\n	Two full days of technical workshops and sessions presented by pioneers in the oil & gas field, giving you an overview about the recent advancement in the upstream sector of technology.\r\n	One whole day full of interesting non-technical workshops\r\n	Four days of technical sessions given by pioneers in the industry\r\n	Keynote speeches from leaders in oil and gas industry:\r\nMr. Radi El-Nashar, General Manager at BP\r\nEng. Hani Dahi, Head of Engineers’ Syndicate\r\nMr. Hussein El-Ghazzawy, Vice President & GM at Schlumberger\r\nMr. Abed Ezz El-Regal, Chief Executive Officer of EGPC\r\nThe Conference was technically sponsored by many leading companies in petroleum industry such as Apache, Schlumberger, Eni, EDC and EGPC\r\n', 'Mr. Radi El-Nashar,Eng. Hani Dahi, Mr. Hussein El-Ghazzawy, Mr. Abed Ezz El-Regal', '2018-03-11', '/2.jpg'),
(3, 'The compass', 'A mega non-technical conference held with cooperation with goal academy association at Ain Shams University on Sat, 7 Oct 2017. The conference topics were: \r\n	-How to discover your passion \r\n	-The secrets of leadership\r\n	-The art of public speaking\r\n	-Uplift your personal brand \r\n	-How to become a successful freelancer.\r\n\r\n', 'Mr. Mohamed El-Tohamy,Mr. Hisham El-Gamal, Mr. Marwan Nassar,Mr. Mohamed Nassar, Mr. Hossam Heikl.\r\n', '2017-10-07', '/3.jpg'),
(4, 'Cairo Annual Petroleum International Conference                                  (CAPIC 3)', 'After the astonishing success of CAPIC 2 we, EEGS Suez in Cooperation with SPE BUE and SPE Azhar, Come back with our masterpiece CAPIC 3 to be held in BUE on Thursday, 21 Mar.\r\nOur Keynote speakars,\r\nEng. Radi El-Nashar, Operations and Drilling Manager, Dragon Oil Egypt\r\nEng. Salah Abdelkerim, Badr Eldin Petroleum company CEO\r\nEng. Hussein Gomaa, Operations Director in World Oil Services\r\nEng. Mohamed El-Shemy, SAN MISR CEO\r\nEng. Sabry El-Sharkawy, Rashid Petroleum Company CEO\r\nThe conference was technically sponsored by pioneering companies in oil field in Egypt like Halliburton, BP, Soleman Training center and Online Petroleum Academy.\r\nIt has achieved an amazing success more than 450 students attended the conference, the feedbacks were great about all sessions.\r\n', 'Eng. Radi El-Nashar, Eng. Salah Abdelkerim, Eng. Hussein Gomaa, Eng. Mohamed El-Shemy, Eng. Sabry El-Sharkawy.\r\n', '2019-03-21', '/4.jpg'),
(5, 'PetroZone 4', 'With infinite support from EDC and EDCTC, we managed to create a new brand for us, PetroZone conference.\r\nPetroZone was held through 2 days on 5 and 6 April 2019 in EDCTC. It was full of technical sessions and competitions with special surprises for the winners. It was technically sponsored by BGS, BHGE and OPA, Online Petroleum Academy.\r\nTechnical sessions were about Pipeline Process Services, Managed Pressure Drilling, Reservoir Stimulation, Overview about Directional Drilling, Well Planning, Motors and RSS.\r\nThere were Several technical competitions from our sponsors for Job Shadowing Opportunities and technical Courses in Well Control and Stuck Pipe.and.\r\n', 'ahmed', '2019-04-05', '/5.jpg'),
(6, 'Egyptian Drilling Company (EDC) Winter Training', 'With corporation with SPE SU SC, We managed\r\nto provide number of training opportunities \r\nfor petroleum engineering students\r\n', 'EDC', '2019-01-27', '/6.jpg'),
(7, 'Drilling Course', 'It was held in Shamsia Space on 4th Dec.\r\nIt included 2 main topics: Well Control and Rig \r\nHydraulics by Eng. Amir Wagdy from PetroDara Oil\r\nCompany and Eng. Mohamed Abdallah from Petrobel.\r\n', 'Eng. Amir Wagdy ,Eng. Mohamed Abdallah \r\n', '2018-12-04', '/7.jpg'),
(8, 'STC Well Control Course', 'Well control course was for 3 days,16, 17 and 18 of Septembre was provided by STC Center, Soleman for Training and Consulting.\r\n\r\n\r\n\r\n                    We, EEGS, managed to provide 15 opportunities to attend that great Course at the center headquarter\r\n\r\n\r\n\r\n                    Our instructor:  Eng. Walla Attia who has a great experience in the oil field.\r\n\r\n\r\n\r\n                    That course had left a great effect on students that attended a great value was received by them.', 'Eng. Walla Attia', '2018-09-16', '/10.jpg'),
(9, 'Seismic School', 'It was held in Shamsia Space on two days, on 5th & 6th Mar\r\nGeoscience Field which presented by Eng. Eslam Samy from PGS and Eng. \r\nHosni Diab from Alexandria Petroleum Geology Program. \r\n', 'Eng. Eslam Samy ,and Eng. \r\nHosni Diab.\r\n', '2019-03-05', '/8.jpg'),
(11, 'Leadership Program', 'We believe that not only technical knowledge is enough so we managed by providing that great program to have one of the most important skills that all students should have.\r\nThat program was held in EDCTC, (Egyptian Drilling Company Training Center) for 2 days on 28, 29 septembre.\r\nOur instructor was Mr. Ahmed Gad one of the best soft skills trainers in Egypt.\r\nThere were 25 opportunities for all Suez University.\r\n', 'Mr. Ahmed Gad', '2018-09-28', '/11.jpg'),
(12, 'MTC Well Completion and Work over Course', 'MTC, (Misr Training Center) had provided us with a Well Completion and Workover Course.\r\nThere were 15 opportunities available for undergraduate petroleum engineers.\r\nThe course was for 2 days, 6 and 7, of October.\r\nOur instructor was Eng. Elsayed Amer petroleum engineer at SUCO Petroleum Company.\r\nThat course had left a great effect on all attendees.\r\n', 'Eng. Elsayed Amer ', '2018-10-06', '/12.jpg'),
(13, 'Art of Lubrication', 'EEGS aims to keep all students updated with the new technology and qualify them to the Labor market this time was for Refining department by providing them with a course about lubrication.\r\nIt was held on Sunday, 4 of November for 4 hours.\r\nThe course was presented by Eng. Doaa Mohamed a pioneer engineer in the field of lubrication.\r\n', 'Eng. Doaa Mohamed', '2018-11-04', '/13.jpg'),
(14, 'Petroservices Yard Trip', 'In cooperation with petoservices petroleum\r\nCompany, we managed to provide 15 opportunities\r\nFor undergraduate engineers divided into 2 groups to \r\nMaximize the benefits.\r\nWe have discussed mud logging unit, its components, processing system, gas system.\r\nThis day was on Thursday, 8 of November.\r\n', 'Petroservice', '2018-11-11', '/14.jpg'),
(15, 'Rig Components and Rig Mathematics.. Petro Target Course', 'In cooperation with Petro Target Training Center, we managed from providing a Course about Rig Components and Rig Mathematics for 2 days for 20 opportunities.\r\nThe course was held on Thursday and Friday, 8 and 9 of November.\r\nEng. Mohamed Ahdy was our instructor, has a great experience in the field. All of attendees had a great value through 2 days.\r\n', 'Petro target', '2018-11-08', '/15.jpg'),
(16, 'Baker Hughes Yard Trip', 'In cooperation with one of the greatest petroleum companies all over the word, Baker Hughes, we manage from providing a yard trip for 10 opportunities devided into 2 groups for maximum benefit.\r\nIt was held on Sunday, 11 of November, was mainly about directional drilling.\r\nIt was a fruitful day with Eng. Ahmed Khaled.\r\n', 'Eng Ahmed Khaled', '2018-11-11', '/16.jpg'),
(19, 'PetroZone 2', 'ahjhjhjhdkhdkldlkdkdndkndklndm,nd,dnkdkndndnd', 'Dr ahmed', '2017-01-28', '/8.jpg'),
(20, 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaa', '2009-03-04', '/9.jpg'),
(22, 'PetroZone 5', 'ahjhjhjhdkhdkldlkdkdndkndklndm,nd,dnkdkndndnd', 'ahmed', '2015-12-30', '19242788992_2.PNG'),
(23, 'PetroZone 6', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Eng Ahmed', '2018-12-27', '90956390970_2.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `poll_users`
--

CREATE TABLE `poll_users` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poll_users`
--

INSERT INTO `poll_users` (`id`) VALUES
(12581126),
(13370620),
(13371667),
(14028266),
(14028296),
(14028573),
(14029456),
(14029475),
(14029959),
(14030070),
(14030471),
(14031139),
(14033632),
(14034989),
(14035134),
(14035243),
(14035244),
(14036016),
(14075795),
(14076730),
(14081787),
(14081838),
(14081977),
(14081978),
(14081998),
(14082526),
(14082939),
(14082995),
(14090155),
(14090946),
(14092776),
(14211228),
(14211241),
(14211311),
(14211395),
(14211566),
(14211630),
(14211791),
(14212036),
(14214017),
(14214022),
(14214040),
(14214042),
(14214047),
(14214100),
(14214119),
(14214121),
(14214155),
(14214168),
(14214349),
(14214689),
(14227925),
(15211781),
(15211791),
(15211792),
(15211793),
(15211794),
(15211796),
(15211797);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poll`
--

CREATE TABLE `tbl_poll` (
  `poll_id` int(11) NOT NULL,
  `options` varchar(100) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_poll`
--

INSERT INTO `tbl_poll` (`poll_id`, `options`, `user_id`) VALUES
(104, 'Yes', 12581126);

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
(6, 'mohamed', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m.com', 'mohamed ramzy', 0, 0, 1, '2019-10-20', ''),
(7, 'sayed', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sayed@gmail.com', 'sayed habda', 0, 0, 1, '2019-10-20', ''),
(8, 'eslam', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'eslam@gmail.com', 'eslam ahmed', 0, 0, 1, '2019-10-20', ''),
(9, 'ayman', '645b8fbaef16c732ce0d5d1b18e228ae871a51ce ', 'aym@gmail.com', 'ayman mmmm', 0, 0, 1, '2019-10-20', ''),
(10, 'mazen', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m.com', 'mazen mahmoud', 0, 0, 1, '2019-11-06', ''),
(12, 'salama', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'a@a.com', 'ahmed', 0, 0, 1, '2019-11-06', ''),
(15, 'usef', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'u@u.com', ' ', 0, 0, 1, '2019-11-07', ''),
(16, 'aliii', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ali@a.com', 'ali elhabad', 0, 0, 1, '2019-11-30', '80376023098_1.PNG'),
(17, 'sameh', '7c4a8d09ca3762af61e59520943dc26494f8941b', 's@s.com', 'sammeh mmm', 0, 0, 1, '2019-11-30', '46235829695_2.PNG'),
(18, 'mary', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'mary@m.com', 'mary mary', 0, 0, 1, '2019-11-30', '27848615521_2.PNG'),
(19, 'mahy', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m.com', 'mahy mahy mmmm', 0, 0, 1, '2019-11-30', '35281576956_1.PNG'),
(24, 'helal', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'a@a.com', NULL, 0, 0, 1, '2019-11-30', NULL),
(25, 'hamed', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'a@a.com', NULL, 0, 0, 1, '2019-11-30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `poll_users`
--
ALTER TABLE `poll_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_poll`
--
ALTER TABLE `tbl_poll`
  ADD PRIMARY KEY (`poll_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `poll_users`
--
ALTER TABLE `poll_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15211798;

--
-- AUTO_INCREMENT for table `tbl_poll`
--
ALTER TABLE `tbl_poll`
  MODIFY `poll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'To identify user', AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

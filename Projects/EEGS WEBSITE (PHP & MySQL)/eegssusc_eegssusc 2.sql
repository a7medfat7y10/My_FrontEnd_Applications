-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.2
-- Generation Time: Apr 23, 2020 at 08:07 PM
-- Server version: 5.7.29-32-log
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `subject`, `message`, `date`) VALUES
(2, 'ahmed', 'a@a.com', 'thanks', 'thanks alot thanks alot thanks alot	thanks alot	thanks alot	thanks alot	thanks alot	thanks alot	thanks alot	thanks alot	thanks alot', '2020-04-08 14:08:58'),
(4, 'ahmed', 'ahmedfathy.1074@gmail.com', 'thanks again', 'thanks eegs', '2020-04-08 14:11:05'),
(5, 'ahmed', 'ahmedfathy.1074@gmail.com', 'thanks', 'thanks eegs', '2020-04-08 15:05:57'),
(6, 'ahmed', 'ahmedfathy.1074@gmail.com', 'thanks last time', 'this is ahmed ', '2020-04-08 15:07:33'),
(7, 'eegssusc', 'mohamed_hassan_ramzy@yahoo.com', 'Hello', 'Mohamed ', '2020-04-08 15:11:01'),
(8, 'mohamed_hassan_ramzy', 'mohamed_hassan_ramzy@yahoo.com', 'Hello again', 'محمد', '2020-04-08 15:13:24'),
(9, 'mohamed_hassan_ramzy', 'mohamed_hassan_ramzy@yahoo.com', 'Hello again', 'محمد', '2020-04-08 15:17:08'),
(10, 'Claudia Clement', 'claudiauclement@yahoo.com', 'DA 96 Do-follow Backlink from Amazon', 'Hi, We are wondering if you would be interested in our service, where we can provide you with a dofollow link from Amazon (DA 96) back to eegs-susc.org?\r\n\r\nThe price is just $57 per link, via Paypal.\r\n\r\nTo explain backlinks, DA and the benefit they have for your website, along with a sample of an existing link, please read here: https://textuploader.com/16jn8\r\n\r\nIf you&#39;d be interested in learning more, reply to this email but please make sure you include the word INTERESTED in the subject line field, so we can get to your reply sooner.\r\n\r\nKind Regards,\r\nClaudia.\r\n\r\nPS. This does not involve selling anything so you do not need to have a product.', '2020-04-12 02:06:04'),
(11, 'MdjSfPcCIaJy', 'paulmcdonald4368@gmail.com', 'PrEOYIdXb', 'WUMZtzujCTrGOJ', '2020-04-16 05:14:24'),
(12, 'zaFeLwdURhOl', 'paulmcdonald4368@gmail.com', 'MbrxBjnUzHFTS', 'gsMudAjnvrJTmN', '2020-04-16 05:14:25'),
(13, 'WUPaKnjLkcT', 'paulmcdonald4368@gmail.com', 'LwsKMcpe', 'ZwdJDMXepgE', '2020-04-16 05:14:27'),
(14, 'NKZvGfQohteHc', 'paulmcdonald4368@gmail.com', 'soJyUpMRPAlGvdf', 'tmGnZLrePyTBVMz', '2020-04-16 05:14:28');

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
(1, 'Petroleum and Exploration Day (PED)', 'This conference was held in British University in Egypt on Sat, 2 Dec 2017, it contained 3 main topics presented by pioneers in Oil Field:\r\n* Reservoir Modeling by Dr. Hatem Farouk.\r\n* Automated Seismic Interpretation & Stratigraphic Traps by Dr. Ali Bakr.\r\n* Development Geology by Dr. Ali Farag. 	\r\n', ' Dr. Hatem Farouk ,Dr.Ali Bakr , Dr Ali Farag.', '2017-12-02', '/1.jpg'),
(2, 'Cairo Annual Petroleum International Conference                                  (CAPIC 2)', 'This conference was held in (BUE) on 11 March 2018 in cooperation with many student chapters such SPE BUE and SPE El-Azhar. The feedbacks were awesome after a very fruitful week which included:\r\n	Two full days of technical workshops and sessions presented by pioneers in the oil & gas field, giving you an overview about the recent advancement in the upstream sector of technology.\r\n	One whole day full of interesting non-technical workshops\r\n	Four days of technical sessions given by pioneers in the industry\r\n	Keynote speeches from leaders in oil and gas industry:\r\nMr. Radi El-Nashar, General Manager at BP\r\nEng. Hani Dahi, Head of Engineers’ Syndicate\r\nMr. Hussein El-Ghazzawy, Vice President & GM at Schlumberger\r\nMr. Abed Ezz El-Regal, Chief Executive Officer of EGPC\r\nThe Conference was technically sponsored by many leading companies in petroleum industry such as Apache, Schlumberger, Eni, EDC and EGPC\r\n', 'Mr. Radi El-Nashar,Eng. Hani Dahi, Mr. Hussein El-Ghazzawy, Mr. Abed Ezz El-Regal', '2018-03-11', '/2.jpg'),
(3, 'The compass', 'A mega non-technical conference held with cooperation with goal academy association at Ain Shams University on Sat, 7 Oct 2017. The conference topics were: \r\n	-How to discover your passion \r\n	-The secrets of leadership\r\n	-The art of public speaking\r\n	-Uplift your personal brand \r\n	-How to become a successful freelancer.\r\n\r\n', 'Mr. Mohamed El-Tohamy,Mr. Hisham El-Gamal, Mr. Marwan Nassar,Mr. Mohamed Nassar, Mr. Hossam Heikl.\r\n', '2017-10-07', '/3.jpg'),
(4, 'Cairo Annual Petroleum International Conference                                  (CAPIC 3)', 'After the astonishing success of CAPIC 2 we, EEGS Suez in Cooperation with SPE BUE and SPE Azhar, Come back with our masterpiece CAPIC 3 to be held in BUE on Thursday, 21 Mar.\r\nOur Keynote speakars,\r\nEng. Radi El-Nashar, Operations and Drilling Manager, Dragon Oil Egypt\r\nEng. Salah Abdelkerim, Badr Eldin Petroleum company CEO\r\nEng. Hussein Gomaa, Operations Director in World Oil Services\r\nEng. Mohamed El-Shemy, SAN MISR CEO\r\nEng. Sabry El-Sharkawy, Rashid Petroleum Company CEO\r\nThe conference was technically sponsored by pioneering companies in oil field in Egypt like Halliburton, BP, Soleman Training center and Online Petroleum Academy.\r\nIt has achieved an amazing success more than 450 students attended the conference, the feedbacks were great about all sessions.\r\n', 'Eng. Radi El-Nashar, Eng. Salah Abdelkerim, Eng. Hussein Gomaa, Eng. Mohamed El-Shemy, Eng. Sabry El-Sharkawy.\r\n', '2019-03-21', '/4.jpg'),
(5, 'PetroZone', 'With infinite support from EDC and EDCTC, we managed to create a new brand for us, PetroZone conference.\r\nPetroZone was held through 2 days on 5 and 6 April 2019 in EDCTC. It was full of technical sessions and competitions with special surprises for the winners. It was technically sponsored by BGS, BHGE and OPA, Online Petroleum Academy.\r\nTechnical sessions were about Pipeline Process Services, Managed Pressure Drilling, Reservoir Stimulation, Overview about Directional Drilling, Well Planning, Motors and RSS.\r\nThere were Several technical competitions from our sponsors for Job Shadowing Opportunities and technical Courses in Well Control and Stuck Pipe.\r\n', 'EDC, Baker Hughes, Saknafta', '2019-04-05', '/5.jpg'),
(6, 'Egyptian Drilling Company (EDC) Winter Training', 'With corporation with SPE SU SC, We managed\r\nto provide number of training opportunities \r\nfor petroleum engineering students\r\n', 'EDC', '2019-01-27', '/6.jpg'),
(7, 'Drilling Course', 'It was held in Shamsia Space on 4th Dec.\r\nIt included 2 main topics: Well Control and Rig \r\nHydraulics by Eng. Amir Wagdy from PetroDara Oil\r\nCompany and Eng. Mohamed Abdallah from Petrobel.\r\n', 'Eng. Amir Wagdy ,Eng. Mohamed Abdallah \r\n', '2018-12-04', '/7.jpg'),
(8, 'STC Well Control Course', 'Well control course was for 3 days,16, 17 and 18 of Septembre was provided by STC Center, Soleman for Training and Consulting.\r\n\r\n\r\n\r\n                    We, EEGS, managed to provide 15 opportunities to attend that great Course at the center headquarter\r\n\r\n\r\n\r\n                    Our instructor:  Eng. Walla Attia who has a great experience in the oil field.\r\n\r\n\r\n\r\n                    That course had left a great effect on students that attended a great value was received by them.', 'Eng. Walla Attia', '2018-09-16', '/10.jpg'),
(9, 'Seismic School', 'It was held in Shamsia Space on two days, on 5th & 6th Mar\r\nGeoscience Field which presented by Eng. Eslam Samy from PGS and Eng. \r\nHosni Diab from Alexandria Petroleum Geology Program. \r\n', 'Eng. Eslam Samy ,and Eng. \r\nHosni Diab.\r\n', '2019-03-05', '/8.jpg'),
(10, 'Saknafta Yard Trip', 'It was a great day, full of experience, was held on Tuesday, 28th of August.\r\nthe topics were:\r\n- safety induction\r\n - coiled tubing\r\n- Nitrogen pumping.\r\nYard supervisor, Eng. Ahmed Samir was our instructor.\r\n', 'Eng. Ahmed Samir', '2018-08-28', '/9.jpg'),
(11, 'Leadership Program', 'We believe that not only technical knowledge is enough so we managed by providing that great program to have one of the most important skills that all students should have.\r\nThat program was held in EDCTC, (Egyptian Drilling Company Training Center) for 2 days on 28, 29 septembre.\r\nOur instructor was Mr. Ahmed Gad one of the best soft skills trainers in Egypt.\r\nThere were 25 opportunities for all Suez University.\r\n', 'Mr. Ahmed Gad', '2018-09-28', '/11.jpg'),
(12, 'MTC Well Completion and Work over Course', 'MTC, (Misr Training Center) had provided us with a Well Completion and Workover Course.\r\nThere were 15 opportunities available for undergraduate petroleum engineers.\r\nThe course was for 2 days, 6 and 7, of October.\r\nOur instructor was Eng. Elsayed Amer petroleum engineer at SUCO Petroleum Company.\r\nThat course had left a great effect on all attendees.\r\n', 'Eng. Elsayed Amer ', '2018-10-06', '/12.jpg'),
(13, 'Art of Lubrication', 'EEGS aims to keep all students updated with the new technology and qualify them to the Labor market this time was for Refining department by providing them with a course about lubrication.\r\nIt was held on Sunday, 4 of November for 4 hours.\r\nThe course was presented by Eng. Doaa Mohamed a pioneer engineer in the field of lubrication.\r\n', 'Eng. Doaa Mohamed', '2018-11-04', '/13.jpg'),
(14, 'Petroservices Yard Trip', 'In cooperation with petoservices petroleum\r\nCompany, we managed to provide 15 opportunities\r\nFor undergraduate engineers divided into 2 groups to \r\nMaximize the benefits.\r\nWe have discussed mud logging unit, its components, processing system, gas system.\r\nThis day was on Thursday, 8 of November.\r\n', 'Petroservice', '2018-11-11', '/14.jpg'),
(15, 'Rig Components and Rig Mathematics.. Petro Target Course', 'In cooperation with Petro Target Training Center, we managed from providing a Course about Rig Components and Rig Mathematics for 2 days for 20 opportunities.\r\nThe course was held on Thursday and Friday, 8 and 9 of November.\r\nEng. Mohamed Ahdy was our instructor, has a great experience in the field. All of attendees had a great value through 2 days.\r\n', 'Petro target', '2018-11-08', '/15.jpg'),
(16, 'Baker Hughes Yard Trip', 'In cooperation with one of the greatest petroleum companies all over the word, Baker Hughes, we manage from providing a yard trip for 10 opportunities devided into 2 groups for maximum benefit.\r\nIt was held on Sunday, 11 of November, was mainly about directional drilling.\r\nIt was a fruitful day with Eng. Ahmed Khaled.\r\n', 'Eng Ahmed Khaled', '2018-11-11', '/16.jpg'),
(17, 'PetroZone 2', 'After the amazing success of PetroZone 1, we, EEGS Suez in cooperation with EDC, Egyptian Drilling Company, decided to keep on our track and bridging the gap between academic and practical life through our masterpiece #PetroZone_2.\r\n\r\nThere were several Technical and Non-technical Sessions:\r\n1- Interviewing Skills and CV Writing\r\n2- How to Choose the Most Career Fit for You\r\n3- How to Get Ready to Move from Being Academic to Practitioner\r\n4- Petroleum System in Mediterranean and Gas Future In Egypt\r\n5- Water Flooding Management\r\n6- Well Modeling\r\n7- Well Completion and Gravel Pack\r\n8- Liner Hanger \r\n9- Reservoir Characterization', 'Baker Hughes, EDC, Saknafta, Career Advancers', '2019-10-11', '/55.jpg'),
(18, 'Spark', 'Aiming to Reduce the gap between academic life and practical life & making all students and fresh graduates qualified to the labor market, EEGS has launched a unique brand, SAPRK, to discus many nontechnical fields and make all aware of different topics to be easier for them to find the most suitable job. \r\n\r\nSpark has been held on Thursday, 5th of March 2020, with +600 attendees coming in trust of EEGS to get the greatest value. \r\n\r\nWith infinite cooperation from great leaders in each field we have discussed in our amazing event: \r\n◉ Entrepreneurship (How to be an entrepreneur?) \r\n◉ Sales vs. Marketing  \r\n◉ Business Intelligence \r\n◉ Personal Branding & Freelancing \r\n◉ How to be a top performer (Performance Optimization) \r\n◉ Emotional Intelligence  \r\n◉ Motivational Talk', 'Riham ElHawary, Hashem ElGarhy, Mohamed ElShafie, Heba Aboelnasr, Ahmed ElSaady, Mohamed Emera, Marwa Soliman, Kariman ElHelw', '2020-03-05', '/18.jpg');

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
(2019123),
(12581126),
(13370620),
(13371615),
(13371667),
(13488244),
(13829523),
(13856390),
(13881053),
(14008653),
(14028264),
(14028266),
(14028296),
(14028573),
(14028594),
(14029456),
(14029475),
(14029486),
(14029876),
(14029909),
(14029959),
(14030070),
(14030471),
(14031139),
(14031555),
(14031606),
(14032579),
(14033065),
(14033632),
(14034989),
(14035134),
(14035243),
(14035244),
(14035901),
(14036016),
(14075795),
(14076730),
(14077019),
(14077500),
(14077793),
(14079793),
(14081787),
(14081838),
(14081844),
(14081939),
(14081977),
(14081978),
(14081998),
(14082526),
(14082939),
(14082995),
(14090155),
(14090946),
(14092776),
(14096322),
(14211228),
(14211241),
(14211311),
(14211395),
(14211504),
(14211566),
(14211630),
(14211791),
(14212036),
(14212407),
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
(14214170),
(14214349),
(14214478),
(14214683),
(14214689),
(14214906),
(14227925);

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
(146, 'Yes', 14081977),
(147, 'Yes', 14081998),
(148, 'Yes', 13829523),
(149, 'Yes', 14035134),
(150, 'Yes', 14211395),
(151, 'Yes', 13371615),
(152, 'Yes', 14214168),
(153, 'Yes', 14075795),
(154, 'Yes', 14214683),
(155, 'Yes', 14214478),
(156, 'Yes', 14029909),
(157, 'Yes', 13856390),
(158, 'Yes', 14031555),
(159, 'Yes', 14214047),
(160, 'No', 2019123),
(161, 'No', 14028296),
(162, 'Yes', 14036016),
(163, 'Yes', 13370620),
(164, 'No', 14034989),
(165, 'Yes', 14214042),
(166, 'Yes', 14035243),
(167, 'Yes', 14214017),
(168, 'Yes', 14211791),
(169, 'Yes', 14082939),
(170, 'Yes', 14214906),
(171, 'No', 14211630),
(172, 'No', 14081838),
(173, 'No', 14028264),
(174, 'No', 14031606),
(175, 'Yes', 14214022),
(176, 'Yes', 14030070),
(177, 'Yes', 14028266),
(178, 'Yes', 14227925),
(179, 'No', 14211228),
(180, 'Yes', 14029876);

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
  `GroupID` int(11) NOT NULL DEFAULT '0' COMMENT 'identify user group''permission''',
  `TrustStatus` int(11) NOT NULL DEFAULT '0' COMMENT 'seller rank',
  `RegStatus` int(11) NOT NULL DEFAULT '0' COMMENT 'user approval',
  `Date` date NOT NULL DEFAULT '2019-10-20',
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Email`, `FullName`, `GroupID`, `TrustStatus`, `RegStatus`, `Date`, `avatar`) VALUES
(1, 'ahmed', '7c4a8d09ca3762af61e59520943dc26494f8941b   ', 'ahmedfathy.1074@gmail.com', 'ahmed m. fathy', 1, 0, 1, '2019-10-15', ''),
(27, 'M_H_Ramzy', '3433c090449705a341b904ec6cda8f5c6f17dc21 ', 'mohamed_hassan_ramzy@yahoo.com', 'Mohamed Ramzy', 0, 0, 1, '2019-12-08', '99492112268_51401860_2350410918303330_2081189964497813504_o.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `poll_users`
--
ALTER TABLE `poll_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15212014;

--
-- AUTO_INCREMENT for table `tbl_poll`
--
ALTER TABLE `tbl_poll`
  MODIFY `poll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'To identify user', AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

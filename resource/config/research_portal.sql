-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 03:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ucategory` varchar(20) NOT NULL,
  `au_member` varchar(20) NOT NULL,
  `subcribe` varchar(20) NOT NULL,
  `datesub_start` varchar(20) NOT NULL,
  `datesub_end` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`id`, `name`, `email`, `pass`, `status`, `ucategory`, `au_member`, `subcribe`, `datesub_start`, `datesub_end`) VALUES
(1, 'Jaren', 'jarenloydla@gmail.com', '$2y$12$4.GiSCWvibjcXbwg99nweuqt439gwPPh7TeAk6yJVeNExJveTXW.e', 'Inactive', 'Administrator', 'Yes', 'No', '', ''),
(14, 'Jaren Heruela', 'jarenloydheruela@gmail.com', '$2y$12$DNIamupYUhvpfu3dwD6rHeguw.PYbkUhSgSTIkEf3Sb30T0v8dj.W', 'Active', 'Administrator', 'Yes', 'No', '', ''),
(16, 'Admin', 'admin@gmail.com', '$2y$12$rBhHUN7rJbgbIgBFKHcr9O/D9ymes5sACQs7rvTROCOUEcr55g.nq', 'Active', 'Administrator', 'Yes', 'No', '', ''),
(17, 'User', 'user@gmail.com', '$2y$12$ZTjDKMwr6w6.YkGVsIa1n.5ZfFAKGcCGoV4rpxLiliEk4WsyhrKDm', 'Inactive', 'User', 'Yes', 'No', '', ''),
(24, 'sample1', 'sample1@yahoo.com', '$2y$12$OSzAPoj6aPNX.6K4lbotk.aJAwc4dwzy3gW4hwo4BhmMaS0Y9ZmEa', 'Inactive', 'User', 'No', 'No', '', ''),
(26, 'D. Saraswathi', 'DSaraswathi@gmail.com', '$2y$12$kTPKFchYVxf4KX0BnKjX5.dnNvG5GtdI1oCNsS2w4pPYQ1U6oLnzK', 'Active', 'User', 'Yes', '', '', ''),
(27, 'geraldine rilles', 'geraldine@gmail.com', '$2y$12$.xOcw/0hNpSccQQUHQNZYu8r44nDSV3fLzPQEl7zNPNXdhjKLNJ8y', 'Active', 'User', 'Yes', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblarticle`
--

CREATE TABLE `tblarticle` (
  `id` int(100) NOT NULL,
  `a_title` varchar(200) NOT NULL,
  `a_description` longtext NOT NULL,
  `a_author` varchar(100) NOT NULL,
  `a_datepub` varchar(20) NOT NULL,
  `a_creator` varchar(100) NOT NULL,
  `a_created` varchar(20) NOT NULL,
  `a_tagging` varchar(100) NOT NULL,
  `a_pdf_file` varchar(10) NOT NULL,
  `a_cites` varchar(20) NOT NULL,
  `a_views` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblauthor`
--

CREATE TABLE `tblauthor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `fstudy` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblauthor`
--

INSERT INTO `tblauthor` (`id`, `name`, `email`, `profession`, `description`, `fstudy`, `created`) VALUES
(1, 'Jaren Heruela', 'jarenloydheruela@gmail.com', 'Professor', 'dfgbn bf', 'Computer ', '1'),
(2, 'D. Saraswathi', 'D. Saraswathi@gmail.com', 'Analyst', 'ghg', 'Analyst', '1'),
(3, 'Ernest Hemmingway', 'ernest@gmail.com', 'Novelist', 'gnm,nhg', 'Novel', '1'),
(4, 'Yongli Cui', 'Yongli Cui@gmail.com', 'Professor', 'fghm', 'Computer ', '1'),
(5, 'Shubin Song', 'Shubin Song@gamail.com', 'Analyst', 'hmb ', 'Novel', '1'),
(6, 'Liang He', 'Liang He', 'Analyst', 'eghjhgds', 'Computer Technology', '1'),
(7, 'Guorong Li', 'Guorong Li@yahoo.com', 'Professor', 'dfbn ', 'Analyst', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblauthorredirect`
--

CREATE TABLE `tblauthorredirect` (
  `id` int(100) NOT NULL,
  `author_id` varchar(100) NOT NULL,
  `author` varchar(200) NOT NULL,
  `paper_id` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcited`
--

CREATE TABLE `tblcited` (
  `id` int(11) NOT NULL,
  `table_type` varchar(100) NOT NULL,
  `paper_id` varchar(100) NOT NULL,
  `paper_title` varchar(200) NOT NULL,
  `cited_byN` varchar(100) NOT NULL,
  `cited_byE` varchar(100) NOT NULL,
  `cited_date` varchar(100) NOT NULL,
  `cited_byId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcited`
--

INSERT INTO `tblcited` (`id`, `table_type`, `paper_id`, `paper_title`, `cited_byN`, `cited_byE`, `cited_date`, `cited_byId`) VALUES
(2, 'Research', '1', '', 'Admin', 'admin@gmail.com', '', '16'),
(3, 'Research', '1', '', 'Admin', 'admin@gmail.com', 'April 11, 2022, 6:42 pm', '16');

-- --------------------------------------------------------

--
-- Table structure for table `tblevents`
--

CREATE TABLE `tblevents` (
  `id` int(100) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_description` longtext NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbljournal`
--

CREATE TABLE `tbljournal` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  `author` varchar(100) NOT NULL,
  `datepub` varchar(50) NOT NULL,
  `creator` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pdf_file` varchar(100) NOT NULL,
  `tagging` varchar(100) NOT NULL,
  `fstudy` varchar(20) NOT NULL,
  `cites` varchar(20) NOT NULL,
  `views` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbljournal`
--

INSERT INTO `tbljournal` (`id`, `title`, `description`, `author`, `datepub`, `creator`, `created`, `status`, `pdf_file`, `tagging`, `fstudy`, `cites`, `views`) VALUES
(8, 'sample2', 'qwertyuioppoidsasdfghjk', 'Yongli Cui', '2022-04-29', '16', '2022-04-09', '', 'uploads/20090202_ismael_pena-lopez_personal_research_portal.pdf', '#scichat, #mathchat, #edreform', 'Agricultural and Foo', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `action` varchar(200) NOT NULL,
  `management` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE `tblnews` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` longtext NOT NULL,
  `email` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `tags` varchar(200) NOT NULL,
  `cites` varchar(20) NOT NULL,
  `views` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`id`, `name`, `mobile`, `email`, `author`, `tags`, `cites`, `views`) VALUES
(1, 'sample1', ' sample1sample1sample1sample1', '2022-04-11', 'rtyuiutyuio', 'Basketball', '', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tblresearch`
--

CREATE TABLE `tblresearch` (
  `id` int(100) NOT NULL,
  `title` longtext NOT NULL,
  `abstract` longtext NOT NULL,
  `main_author` varchar(100) NOT NULL,
  `co_authors` varchar(100) NOT NULL,
  `date_publish` varchar(20) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `pdf_file` varchar(100) NOT NULL,
  `tagging` varchar(100) NOT NULL,
  `cites` varchar(100) NOT NULL,
  `views` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblresearch`
--

INSERT INTO `tblresearch` (`id`, `title`, `abstract`, `main_author`, `co_authors`, `date_publish`, `field_of_study`, `pdf_file`, `tagging`, `cites`, `views`) VALUES
(1, 'A Collaborative Filtering Algorithm Based on User Activity Level', 'Collaborative Filtering Algorithm is one of the most \r\nsuccessful recommender technologies, and has been widely \r\nused in E-commerce. However, traditional Collaborative \r\nFiltering often focus on user-item ratings, but ignore the \r\ninformation implicated in user activity which means how and \r\nhow often a user makes operations in a system, so it misses \r\nsome important information to improve the prediction quality. \r\nTo solve this problem, we bring user activity factor into \r\ncollaborative filtering and propose a new collaborative filtering \r\nalgorithm based on user activity level (UACF) . Finally, \r\nexperiments have shown that our new algorithm UACF \r\nimproves the precision of traditional collaborative filtering', 'D. Saraswathi', 'Liang He, Guorong Li', '2022-04-04', 'Computer Studies', 'uploads/A Collaborative Filtering Algorithm Based on User Activity Level.pdf', '#K12, #edtech, #edreform', '3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblarticle`
--
ALTER TABLE `tblarticle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblauthor`
--
ALTER TABLE `tblauthor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblauthorredirect`
--
ALTER TABLE `tblauthorredirect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcited`
--
ALTER TABLE `tblcited`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblevents`
--
ALTER TABLE `tblevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbljournal`
--
ALTER TABLE `tbljournal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresearch`
--
ALTER TABLE `tblresearch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tblarticle`
--
ALTER TABLE `tblarticle`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblauthor`
--
ALTER TABLE `tblauthor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblauthorredirect`
--
ALTER TABLE `tblauthorredirect`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcited`
--
ALTER TABLE `tblcited`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblevents`
--
ALTER TABLE `tblevents`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbljournal`
--
ALTER TABLE `tbljournal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblresearch`
--
ALTER TABLE `tblresearch`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

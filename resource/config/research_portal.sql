-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 05:03 PM
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
(1, 'Jaren Heruela', 'jaren@gmail.com', 'admin', 'Active', 'Administrator', 'Yes', '', '', ''),
(2, 'trylang', 'anton-gramm-324@haebom.ga', 'admin', 'Active', 'User', 'No', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblarticle`
--

CREATE TABLE `tblarticle` (
  `id` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `author` varchar(100) NOT NULL,
  `date_pub` varchar(20) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `tagging` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblauthor`
--

CREATE TABLE `tblauthor` (
  `id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `fstudy` varchar(100) NOT NULL,
  `pdf_file` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblauthor`
--

INSERT INTO `tblauthor` (`id`, `name`, `email`, `profession`, `description`, `fstudy`, `pdf_file`, `created`) VALUES
('1', 'Jaren Heruela', 'jaren@gmail.com', '', '', '', '', '');

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
-- Table structure for table `tblevents`
--

CREATE TABLE `tblevents` (
  `id` int(100) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_description` longtext NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblevents`
--

INSERT INTO `tblevents` (`id`, `event_name`, `event_description`, `date`, `time`) VALUES
(2, 'sample1', ' wertyuio', '2022-03-26', '2022-03-08'),
(3, 'sample1', ' poiuytrew', '06:09', '2022-03-03'),
(4, 'sample2', ' lkjljlkkgjb ', '2022-03-02', '04:11');

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
  `pdf_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`id`, `name`, `mobile`, `email`) VALUES
(1, 'sample1', ' sample1sample1sample1sample1sample1sample1sample1sample1sample1sample1sample1', '2022-03-12'),
(2, 'sampl2', ' wertyuio', '2022-04-07'),
(3, 'poiuyt', ' ertyu', '2022-03-01'),
(4, 'dfghjk', ' uytrewqwerty', '2022-03-09');

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
  `status` varchar(20) NOT NULL,
  `pdf_file` varchar(100) NOT NULL,
  `views` varchar(20) NOT NULL,
  `cites` varchar(20) NOT NULL,
  `tagging` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblresearch`
--

INSERT INTO `tblresearch` (`id`, `title`, `abstract`, `main_author`, `co_authors`, `date_publish`, `field_of_study`, `status`, `pdf_file`, `views`, `cites`, `tagging`) VALUES
(1, 'A STUDY ON ONLINE SEARCH BY PEOPLE USING SEARCH ENGINE', 'Thepurpose of this study is to understand how users search for online information \r\nfrom search engine through their own experience using the Internet.', 'Jaren', '', '2022-03-02', 'Computer Studies', '', 'uploads/A Multifunctional Online Research Portal for Facilitation of.pdf', '', '', ''),
(2, 'The Collaborative Filtering Recommendation Algorithm Based on BP Neural', 'Collaborative filtering is one of the most successful \r\ntechnologies in recommender systems, and widely used in \r\nmany personalized recommender areas with the development \r\nof Internet, such as e-commerce, digital library and so on. The \r\nK-nearest neighbor method is a popular way for the \r\ncollaborative filtering realizations. Its key technique is to find k \r\nnearest neighbors for a given user to predict his interests. \r\nHowever, most collaborative filtering algorithms suffer from \r\ndata sparsity which leads to inaccuracy of recommendation. \r\nAiming at the problem of data sparsity for collaborative \r\nfiltering, a collaborative filtering algorithm based on BP neural \r\nnetworks is presented. This method uses the BP neural \r\nnetworks to fill the vacant ratings at first, then uses \r\ncollaborative filtering to form nearest neighborhood, and lastly \r\ngenerates recommendations. The collaborative filtering based \r\non BP neural networks smoothing can produce more accuracy \r\nrecommendation than the traditional method. ', 'Jaren', '', '2022-03-03', 'Computer Studies', '', 'uploads/The Collaborative Filtering Recommendation Algorithm Based on BP Neural Networks.pdf', '', '', '');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblarticle`
--
ALTER TABLE `tblarticle`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblauthorredirect`
--
ALTER TABLE `tblauthorredirect`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblevents`
--
ALTER TABLE `tblevents`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbljournal`
--
ALTER TABLE `tbljournal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblresearch`
--
ALTER TABLE `tblresearch`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

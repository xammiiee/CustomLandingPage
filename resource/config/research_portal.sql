-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 05:55 PM
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
-- Table structure for table `tblauthor`
--

CREATE TABLE `tblauthor` (
  `id` varchar(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pdf_file` varchar(100) NOT NULL,
  `detect` varchar(10) NOT NULL,
  `get-selected` varchar(5) NOT NULL
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
(1, 'sample1', ' sample1sample1sample1sample1sample1sample1sample1sample1sample1sample1sample1sample1', '2022-03-25', '2022-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbljournal`
--

CREATE TABLE `tbljournal` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  `author` varchar(100) NOT NULL,
  `date_pub` varchar(50) NOT NULL,
  `creator` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pdf_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbljournal`
--

INSERT INTO `tbljournal` (`id`, `title`, `description`, `author`, `date_pub`, `creator`, `status`, `pdf_file`) VALUES
(1, 'sample1', '2022-03-03', 'sample1', 'wertyuivbnhgfdghjdcv xrdgfchv5etwrdxtfcghvby gfdzx', '', '', ''),
(2, 'sample 2', 'sample 2sample 2sample 2sample 2sample 2sample 2sample 2sample 2', 'jaren', '1', '2022-03-18', '0', 'uploads/Cluster Algorithm for Search Engine Collator.pdf'),
(3, 'sample 2', 'sample 2sample 2sample 2sample 2sample 2sample 2sample 2sample 2', 'jaren', '1', '2022-03-18', '0', 'uploads/Cluster Algorithm for Search Engine Collator.pdf'),
(4, 'sample 2', 'sample 2sample 2sample 2sample 2sample 2sample 2sample 2sample 2sample 2sample 2sample 2sample 2', 'jaren', '1', '2022-03-18', '0', 'uploads/A multi-level collaborative filtering method that improves recommendations.pdf');

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
(1, 'sample1', ' sample1sample1sample1sample1sample1sample1sample1sample1sample1sample1sample1', '2022-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `tblresearch`
--

CREATE TABLE `tblresearch` (
  `id` int(100) NOT NULL,
  `title` longtext NOT NULL,
  `abstract` longtext NOT NULL,
  `main_author` varchar(100) NOT NULL,
  `co-authors` varchar(100) NOT NULL,
  `date_publish` varchar(20) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pdf_file` varchar(100) NOT NULL,
  `views` varchar(20) NOT NULL,
  `cites` varchar(20) NOT NULL,
  `tagging` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblauthor`
--
ALTER TABLE `tblauthor`
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
-- AUTO_INCREMENT for table `tblevents`
--
ALTER TABLE `tblevents`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbljournal`
--
ALTER TABLE `tbljournal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblresearch`
--
ALTER TABLE `tblresearch`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

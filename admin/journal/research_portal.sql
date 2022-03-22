-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 08:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `creator` int(255) DEFAULT NULL,
  `datepub` timestamp NULL DEFAULT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `author`, `title`, `creator`, `datepub`, `created`, `status`) VALUES
(46, 'adadadadadada', 'kmkcoir', 0, '0000-00-00 00:00:00', '2022-03-18 16:00:00.000000', 0),
(48, 'Erl Bryan Padel Malindog', 'hahhahahha', 1, '0000-00-00 00:00:00', '2022-03-20 16:00:00.000000', 0),
(49, 'jea', 'basa', 1, '0000-00-00 00:00:00', '2022-03-20 16:00:00.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'All the permissions for the role'),
(2, 'Publisher', 'Some items'),
(3, 'Guest ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(100) NOT NULL,
  `aumember` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`id`, `name`, `email`, `password`, `role`, `aumember`) VALUES
(1, 'Malindog', 'bryanerl@gmail.com', '123456', '1', 'Yes'),
(2, 'bless', 'blessmalindog@gmail.com', '123456', '3', ''),
(3, 'edgar', 'edgar@gmail.com', '123456', '3', ''),
(6, 'mari', 'mari@gmail.com', '123456', '3', 'Yes'),
(9, 'pogi', 'pogi@gmail.com', '123456', '3', 'Yes'),
(12, 'erllbryan', 'erllbryan@gmail.com', 'dadadada', '3', 'No'),
(13, 'maymayu', 'may@gmail.com', '1212121', '3', 'No'),
(14, 'jaren', 'jaren@gmail.com', '123456', '3', 'Yes'),
(18, 'Karyl Padel Malindog', 'karylpadel@yahoo.com', '123456', '3', 'Yes'),
(19, 'erllbryan', 'iambryanmalindog@gmail.com', '12345', '3', 'Yes'),
(20, 'Bryan', 'bryan@gmail.com', '12345', '3', 'Yes'),
(21, 'rimuru', 'rimuru@gmail.com', '123456', '3', 'Yes'),
(22, 'rimuru', 'rimuru@gmail.com', '123456', '3', 'Yes');

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

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`date`, `time`, `action`, `management`, `account`) VALUES
('2022/03/05', '9:03:04', 'Uploaded New Book oiuyt with ', 'CMS by', 'Admin'),
('2022/03/05', '9:03:18', 'Uploaded New Book oiuyt with ', 'CMS by', 'Admin'),
('2022/03/05', '9:03:44', 'Uploaded New Book Computer Science Modular Classes with ', 'CMS by', 'Admin'),
('2022/03/05', '10:03:25', 'Uploaded New Book Computer Science Modular Classes with ', 'CMS by', 'Admin'),
('2022/03/05', '10:03:17', 'Uploaded New Book Computer Science with ', 'CMS by', 'Admin'),
('2022/03/07', '14:03:28', 'Uploaded New Book oiuyt with ', 'CMS by', 'Admin'),
('2022/03/08', '3:03:53', 'Uploaded New Book oiuyt with ', 'CMS by', 'Admin'),
('2022/03/08', '3:03:06', 'Uploaded New Book oiuyt with ', 'CMS by', 'Admin'),
('2022/03/08', '3:03:20', 'Uploaded New Book oiuyt with ', 'CMS by', 'Admin'),
('2022/03/08', '6:03:41', 'Uploaded New Book oiuyt with ', 'CMS by', 'Admin'),
('2022/03/09', '15:03:41', 'Uploaded New Book poiuytre with ', 'CMS by', 'Admin'),
('2022/03/10', '13:03:17', 'Uploaded New Book poihgf with ', 'CMS by', 'Admin'),
('2022/03/11', '4:03:34', 'Uploaded New Book lkjbvcxz with ', 'CMS by', 'Admin'),
('2022/03/11', '4:03:14', 'Uploaded New Book poiuytr with ', 'CMS by', 'Admin'),
('2022/03/11', '9:03:58', 'Uploaded New Book wertyui with ', 'CMS by', 'Admin'),
('2022/03/11', '9:03:48', 'Uploaded New Book wertyui with ', 'CMS by', 'Admin'),
('2022/03/11', '10:03:39', 'Uploaded New Book qwertyuio with ', 'CMS by', 'Admin'),
('2022/03/11', '10:03:28', 'Uploaded New Book dfghjkl with ', 'CMS by', 'Admin'),
('2022/03/11', '11:03:02', 'Uploaded New Book pohgfd with ', 'CMS by', 'Admin'),
('2022/03/11', '11:03:05', 'Uploaded New Book pojhgfds with ', 'CMS by', 'Admin'),
('2022/03/11', '11:03:48', 'Uploaded New Book ergonomics with ', 'CMS by', 'Admin'),
('2022/03/13', '5:03:04', 'Uploaded New Book Web Portals with ', 'CMS by', 'Admin'),
('2022/03/13', '5:03:05', 'Uploaded New Book Manga vol 1 with ', 'CMS by', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblresearch`
--

CREATE TABLE `tblresearch` (
  `id` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `abstract` longtext NOT NULL,
  `comment` longtext NOT NULL,
  `authors` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_publish` varchar(100) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `pdf_file` longtext NOT NULL,
  `views` varchar(100) NOT NULL,
  `cites` varchar(100) NOT NULL,
  `downloads` varchar(100) NOT NULL,
  `tagging` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblresearch`
--

INSERT INTO `tblresearch` (`id`, `title`, `abstract`, `comment`, `authors`, `email`, `date_publish`, `field_of_study`, `department`, `pdf_file`, `views`, `cites`, `downloads`, `tagging`) VALUES
('20220313052504', 'Web Portals', 'A portal is a web-based platform that collects information from different sources into a single user interface and presents users with the most relevant information for their context. Over time, simple web portals have evolved into portal platforms that support digital customer experience initiatives.', 'Web portal ', 'Mark Williams', 'markwilliams@gmail.com', '2022-03-13', 'Programming', '', '../papers/uploads/moam.info_web-portals_5bab4790097c47d01a8b46c3.pdf ', '', '', '', 'Portal'),
('20220313054305', 'Manga vol 1', 'manga anime', 'anime', 'malindog', 'iambryanmalindog@gmail.com', '2022-03-13', 'Manga', '', '../papers/uploads/vol2no8_5.pdf ', '', '', '', 'Manga');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `order_id` varchar(20) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `response_code` varchar(50) NOT NULL,
  `response_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`order_id`, `amount`, `response_code`, `response_desc`) VALUES
('12', '12222', '200', 'success'),
('2', '300', '200', 'Success'),
('7', '34', '200', 'success'),
('71', '787878', '200', 'success'),
('777', '3456789', '200', 'success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresearch`
--
ALTER TABLE `tblresearch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

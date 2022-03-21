-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 07:12 AM
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
  `id` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ucategory` varchar(50) NOT NULL,
  `au_member` varchar(50) NOT NULL,
  `subscribe` varchar(50) NOT NULL,
  `datesub_start` varchar(50) NOT NULL,
  `datesub_end` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`id`, `fname`, `lname`, `email`, `pass`, `status`, `ucategory`, `au_member`, `subscribe`, `datesub_start`, `datesub_end`) VALUES
('20220310095326', 'Jaren Loyd', 'Heruela', 'jaren@gmail.com', 'admin', 'Active', 'Administrator', 'Yes', '', '', ''),
('20220310114407', 'Jorn', 'Moro', 'jorn@gmail.com', 'bjorn', 'Active', 'User', 'No', '', '', ''),
('20220310114425', 'Jamie', 'Heruela', 'jamie@gmail.com', 'jamie', 'Inactive', 'User', 'Yes', '', '', '');

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

--
-- Dumping data for table `tblauthor`
--

INSERT INTO `tblauthor` (`id`, `fname`, `lname`, `fullname`, `email`, `pdf_file`, `detect`, `get-selected`) VALUES
('1', 'jaren', 'heruela', 'jaren heruela', 'jaren@gmail.com', '', '', 'Yes');

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
('2022/03/19', '20:03:33', 'Uploaded New Book ertyui with ', 'CMS by', 'Admin'),
('2022/03/19', '20:03:44', 'Uploaded New Book K-Nearest Neighbours with ', 'CMS by', 'Admin'),
('2022/03/20', '3:03:47', 'Uploaded New Book A Study On Online Search By People Using Search Engine with ', 'CMS by', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblresearch`
--

CREATE TABLE `tblresearch` (
  `id` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `abstract` longtext NOT NULL,
  `main_author` varchar(100) NOT NULL,
  `co_authors` varchar(100) NOT NULL,
  `date_publish` varchar(100) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `pdf_file` longtext NOT NULL,
  `views` varchar(100) NOT NULL,
  `cites` varchar(100) NOT NULL,
  `tagging` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblresearch`
--

INSERT INTO `tblresearch` (`id`, `title`, `abstract`, `main_author`, `co_authors`, `date_publish`, `field_of_study`, `department`, `pdf_file`, `views`, `cites`, `tagging`) VALUES
('1', 'A Graph-Based Text Similarity Algorithm', 'This paper is trying to research a text similarity \r\nalgorithm which based on graph theory. A text is mapped into a \r\ngraph which consists of terms as its nodes and term sequences as \r\nits undirected edges. The Maximum Common Subgraph (MCS) \r\nof two graphs is useful for analyzing their similarity and the \r\nsimilarity of two texts is divided into two parts: nodes similarity \r\nand edges similarity. Each part is calculated respectively and text \r\nsimilarity is the sum of two parts.', 'Zuoguo Liu', 'Xiaorong Chen', 'January 24, 2017', 'Computer', '', '', '', '', 'Computer Algorithm'),
('2', 'The Use of Internet and Social Networks as \r\nMethodological Tools in The School Environment', 'This work addresses the integration of the Internet and Social Networks to the teaching-learning processes in \r\nthe school environment, using the computer as an intermediate tool between student and teacher. The use of \r\nthese technologies is transforming human relationships in all their dimensions: economic, social, and \r\neducational. The cognitive development of these students is being mediated by these technological resources, \r\nwhere these new information and communication technologies will expand their potential. The objective of this \r\nstudy was to understand the importance of using the internet and social networks in the teaching-learning \r\nprocess in the school environment as a methodological resource and to what extent it is favorable to the \r\nstudent\'s intellectual development', 'Fabiano Battemarco da Silva Martins', 'Queli Cristiane dos Santos Souza; Marcio Antônio \r\nde Oliveira', 'August 1, 2020', 'Education', '', '', '', '', 'Technology'),
('20220320033447', 'A Study On Online Search By People Using Search Engine', 'Purpose– Thepurpose of this study is to understand how users search for online information \r\nfrom search engine through their own experience using the Internet.', '', '', '2022-03-03', 'Computer Studies', '', '../uploads/OnlineSearch.pdf', '', '', '');

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
-- Indexes for table `tblresearch`
--
ALTER TABLE `tblresearch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

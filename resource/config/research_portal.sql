-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 08:08 AM
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
  `username` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ucategory` varchar(20) NOT NULL,
  `subcribe` varchar(20) NOT NULL,
  `datesub_start` varchar(20) NOT NULL,
  `datesub_end` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`id`, `name`, `username`, `pass`, `email`, `status`, `ucategory`, `subcribe`, `datesub_start`, `datesub_end`) VALUES
(16, 'Admin', 'admin', '$2y$12$rBhHUN7rJbgbIgBFKHcr9O/D9ymes5sACQs7rvTROCOUEcr55g.nq', '', 'Active', 'Administrator', 'Yes', '', ''),
(17, 'User', 'user', '$2y$12$ZTjDKMwr6w6.YkGVsIa1n.5ZfFAKGcCGoV4rpxLiliEk4WsyhrKDm', '', 'Active', 'User', 'No', '', ''),
(29, 'user1', 'user1', '$2y$12$fdW0dvA5/jHzKBzria53Eex1n0d2XZzL25daWs5KGGpmcJXt7yG1W', 'user1@gmail.com', 'Inactive', 'User', 'Yes', '', '');

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

--
-- Dumping data for table `tblarticle`
--

INSERT INTO `tblarticle` (`id`, `a_title`, `a_description`, `a_author`, `a_datepub`, `a_creator`, `a_created`, `a_tagging`, `a_pdf_file`, `a_cites`, `a_views`) VALUES
(2, 'sample1', 'sampl2sampl2sampl2', 'D. Saraswathi', '2022-03-29', '16', 'Apr-14-22', '#learning,#edleadership', 'uploads/20', '', ''),
(3, 'sample12', 'wertyui', 'trylang', '2022-03-17', '16', 'Apr-14-22', '#learning,#edleadership', 'uploads/20', '', '');

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
(1, 'D. Saraswathi', 'D. Saraswathi@gmail.com', 'Professor', 'rtyureghj', 'Geography, Geology, History, Law', '16'),
(2, 'trylang', 'trylang', 'Analyst', 'ghjktrefgnhmj', 'Business, Computer Science, Economics, Education', '16'),
(3, 'William smith', 'smith@gmail.com', 'professor', 'qwertyui', 'Computer Science', '16');

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
(1, 'Research', '1', '', 'Admin', '', 'April 13, 2022, 5:09 am', '16'),
(2, 'Research', '1', '', 'Admin', '', 'April 13, 2022, 7:01 am', '16'),
(3, 'Research', '1', '', 'Admin', '', 'April 13, 2022, 9:14 am', '16');

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
(1, 'sample1', ' sample1sample1sample1sample1sample1', '2022-04-07', '16:00');

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
(1, 'sample1', 'The application of string similarity is very \r\nextensive, and the algorithm based on Levenshtein Distance is \r\nparticularly classic, but it is still insufficient in the aspect of \r\nuniversal applicability and accuracy of results. Combined with \r\nthe Longest Common Subsequence (LCS) and Longest Common \r\nSubstring (LCCS), similarity algorithm based on Levenshtein \r\nDistance is improved, and the string similarity result of the \r\nimproved algorithm is more distinct, reasonable and accurate, \r\nand also has a better universal applicability. What ′ s more in the \r\nprocess of similarity calculation, the Solving algorithm of the LD \r\nand LCS has been optimized in the data structure, reduce the \r\nspace complexity of the algorithm from the order of magnitude. \r\nAnd the experimental results are analyzed in detail, which proves \r\nthe feasibility and correctness of the results. ', 'trylang', '2022-04-06', '16', '2022-04-13', '', 'uploads/Cluster Algorithm for Search Engine Collator.pdf', '#mathchat, #edreform', 'Computer Science, En', '', ''),
(2, 'sampl2', 'sampl2', 'William smith', '2022-04-06', '16', '2022-04-14', '', 'uploads/Code-Quality-Evaluation-methodology-using-the-ISOIEC-9126-Standard.pdf', '#edreform', 'Engineering', '', ''),
(3, 'sample3', 'sampl2sampl2sampl2sampl2sampl2', 'D. Saraswathi', '2022-04-25', '16', '2022-04-14', '', 'uploads/Content Management System (CMS) _ SpringerLink.pdf', '#learning, #scichat', 'Economics', '', '');

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
(1, 'sample1', ' hdhcgvjbkntxtcfgvhjb', '2022-04-06', 'rtyuiutyuio', '', '', '');

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
(1, 'A Kind of Algorithm For Page Ranking \r\nBased on Classified Tree In Search Engine', 'Algorithm of page ranking is the core of search \r\nengine. This paper proposes a new type of algorithm of page \r\nranking by combining classified tree with static algorithm of \r\npage ranking-PageRank, which enables the classified tree to be \r\nconstructed according to a large number of users’ similar \r\nsearching results, and can obviously reduce the problem of \r\nTheme-Drift, caused by using PageRank only, and problem of \r\noutdated web pages. It improves the searching efficiency \r\nwithout reducing the searching speed, which provides the users \r\nwith the abundant expanded information relevant to searching \r\ncontent.', 'trylang', 'D. Saraswathi', '2021-02-12', 'Business and Economics', 'uploads/A Fast Tree-Based Search Algorithm for Cluster Search Engine.pdf', '#edchat, #K12, #learning, #edleadership', '3', '3'),
(2, 'A FULLY ONLINE RESEARCH PORTAL FOR RESEARCH \r\nSTUDENTS AND RESEARCHERS', 'This paper describes the context, development, implementation, and the potential transferability of an integrated online research environment that allows its \r\nusers to conduct all aspects of research online.\r\nBackground While the content of most traditional courses can be delivered online and learning outcomes can be achieved by adopting equivalents to face-to-face pedagogic \r\napproaches, certain courses, such as those that require a substantial research \r\ncomponent, present significant constraints for delivery online. To overcome \r\nthese limitations, Australia’s largest university developed and implemented a \r\nResearch Portal', 'D. Saraswathi', 'trylang', '2022-04-01', 'Computer Studies', 'uploads/Afully ol rs for research student and researchers.pdf', '#scichat, #mathchat, #edreform', '0', '4'),
(3, 'Research on String Similarity Algorithm based on \r\nLevenshtein Distance', 'The application of string similarity is very \r\nextensive, and the algorithm based on Levenshtein Distance is \r\nparticularly classic, but it is still insufficient in the aspect of \r\nuniversal applicability and accuracy of results. Combined with \r\nthe Longest Common Subsequence (LCS) and Longest Common \r\nSubstring (LCCS), similarity algorithm based on Levenshtein \r\nDistance is improved, and the string similarity result of the \r\nimproved algorithm is more distinct, reasonable and accurate, \r\nand also has a better universal applicability. What ′ s more in the \r\nprocess of similarity calculation, the Solving algorithm of the LD \r\nand LCS has been optimized in the data structure, reduce the \r\nspace complexity of the algorithm from the order of magnitude. \r\nAnd the experimental results are analyzed in detail, which proves \r\nthe feasibility and correctness of the results. ', 'D. Saraswathi', 'trylang', '2022-04-06', 'Computer Science', 'uploads/Paper Title (use style_ paper title).pdf', '#scichat, #mathchat, #edreform', '5', '1');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblarticle`
--
ALTER TABLE `tblarticle`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblauthor`
--
ALTER TABLE `tblauthor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbljournal`
--
ALTER TABLE `tbljournal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblresearch`
--
ALTER TABLE `tblresearch`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

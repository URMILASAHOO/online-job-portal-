-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 07:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `id` int(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`id`, `username`, `password`) VALUES
(1, 'Nibedita Acharya', 'neha12');

-- --------------------------------------------------------

--
-- Stand-in structure for view `apply_view`
-- (See below for the actual view)
--
CREATE TABLE `apply_view` (
`jid` int(255)
,`course` varchar(25)
,`job_title` varchar(40)
,`location` varchar(40)
,`job_type` varchar(40)
,`position` varchar(25)
,`salary` varchar(33)
,`valid_upto` varchar(40)
,`cid` int(255)
,`eid` int(11)
,`aid` int(11)
,`cname` varchar(25)
,`image` varchar(40)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `candidate_view`
-- (See below for the actual view)
--
CREATE TABLE `candidate_view` (
`eid` int(255)
,`name` varchar(25)
,`location` varchar(40)
,`contact` varchar(40)
,`email` varchar(40)
,`pdf` varchar(40)
,`jid` int(11)
,`course` varchar(25)
,`job_title` varchar(40)
,`cid` int(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`cat_id`, `cat_name`) VALUES
(1, 'Manager'),
(2, 'Devleoper'),
(3, 'Testing'),
(7, 'software Developer'),
(8, 'Banking'),
(9, 'Other'),
(10, 'python');

-- --------------------------------------------------------

--
-- Table structure for table `employer_master`
--

CREATE TABLE `employer_master` (
  `cid` int(255) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `location` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(33) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employer_master`
--

INSERT INTO `employer_master` (`cid`, `cname`, `location`, `contact`, `email`, `username`, `password`, `image`) VALUES
(2, 'wipro', 'hyderabad', '12345678', 'mm@gmail.com', 'wipro', '12345', '12345678.png'),
(5, 'microsoft', 'pune', '7873000912', 'xy@gmail.com', 'microsoft', '1234567', '1683085020.png'),
(6, 'Tcs', 'pune', '99876543', 'tcs@gmail.com', 'tcs', '0000', '1683134038.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employe_master`
--

CREATE TABLE `employe_master` (
  `eid` int(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `location` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(33) NOT NULL,
  `pdf` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employe_master`
--

INSERT INTO `employe_master` (`eid`, `name`, `location`, `contact`, `email`, `username`, `password`, `pdf`) VALUES
(1, 'julusmita pani', 'hyderabad', '12345678', 'mm@gmail.com', 'julusmita', 'jula12', '1681464454.pdf'),
(2, 'swopna nayak', 'hyderabad', '12345678', 'mm@gmail.com', 'swopna', 'swopna12', '1681464571.pdf'),
(3, 'NIBEDITA  ACHARYA', 'pune', '7873000912', 'nib22@gmail.com', 'nibedita', '12345', '1681464857.pdf'),
(4, 'julusmita behera', 'hyderabad', '12345678', 'xy@gmail.com', 'julu', '12345', '1681572463.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply_master`
--

CREATE TABLE `job_apply_master` (
  `aid` int(11) NOT NULL,
  `jid` int(11) NOT NULL,
  `eid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_apply_master`
--

INSERT INTO `job_apply_master` (`aid`, `jid`, `eid`) VALUES
(2, 10, 3),
(3, 6, 3),
(4, 3, 3),
(5, 13, 3),
(6, 12, 3),
(7, 15, 3),
(9, 4, 3),
(10, 23, 3);

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE `job_master` (
  `jid` int(255) NOT NULL,
  `course` varchar(25) NOT NULL,
  `job_title` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `job_type` varchar(40) NOT NULL,
  `position` varchar(25) NOT NULL,
  `salary` varchar(33) NOT NULL,
  `valid_upto` varchar(40) NOT NULL,
  `cid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`jid`, `course`, `job_title`, `location`, `job_type`, `position`, `salary`, `valid_upto`, `cid`) VALUES
(3, ' Devleoper', 'java developer', 'hyderabad', 'fulltime', 'manager', '50000-60000', '2023-04-30', 2),
(4, ' software engineer', 'python developer', 'banglor', 'fulltime', 'developer', '20000-40000', '2023-05-31', 2),
(5, ' Banking', 'manager', 'kerala', 'fulltime', 'manager', '50000-60000', '2023-06-29', 5),
(6, ' software engineer', 'project manager', 'banglore', 'fulltime', 'developer', '20000-40000', '2023-04-30', 5),
(9, 'Testing', 'system testing', 'banglor', 'parttime', 'developer', '20000-40000', '2023-04-25', 5),
(13, ' .net developer', 'developer', 'banglore', 'fulltime', 'developer', '50000-60000', '2023-08-21', 5),
(14, ' Manager', 'project manager', 'kasmir', 'fulltime', 'manager ', '50000-60000', '2023-05-31', 6),
(15, ' Testing', 'online project testing', 'work from home', 'parttime', 'testiing', '5000-6000', '2023-06-27', 6),
(20, ' software Developer', 'maneger', 'pune', 'fulltime', 'maneger ', '50000-10000', '2023-05-27', 2),
(23, ' Other', 'jj', 'kkkk', 'parttime', 'jjj', '123456', '2023-05-16', 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `job_view`
-- (See below for the actual view)
--
CREATE TABLE `job_view` (
`image` varchar(40)
,`cname` varchar(25)
,`jid` int(255)
,`course` varchar(25)
,`job_title` varchar(40)
,`location` varchar(40)
,`job_type` varchar(40)
,`position` varchar(25)
,`salary` varchar(33)
,`valid_upto` varchar(40)
,`cid` int(255)
);

-- --------------------------------------------------------

--
-- Structure for view `apply_view`
--
DROP TABLE IF EXISTS `apply_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `apply_view`  AS SELECT `job_master`.`jid` AS `jid`, `job_master`.`course` AS `course`, `job_master`.`job_title` AS `job_title`, `job_master`.`location` AS `location`, `job_master`.`job_type` AS `job_type`, `job_master`.`position` AS `position`, `job_master`.`salary` AS `salary`, `job_master`.`valid_upto` AS `valid_upto`, `job_master`.`cid` AS `cid`, `job_apply_master`.`eid` AS `eid`, `job_apply_master`.`aid` AS `aid`, `employer_master`.`cname` AS `cname`, `employer_master`.`image` AS `image` FROM ((`job_master` join `job_apply_master` on(`job_apply_master`.`jid` = `job_master`.`jid`)) join `employer_master` on(`job_master`.`cid` = `employer_master`.`cid`))  ;

-- --------------------------------------------------------

--
-- Structure for view `candidate_view`
--
DROP TABLE IF EXISTS `candidate_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `candidate_view`  AS SELECT `employe_master`.`eid` AS `eid`, `employe_master`.`name` AS `name`, `employe_master`.`location` AS `location`, `employe_master`.`contact` AS `contact`, `employe_master`.`email` AS `email`, `employe_master`.`pdf` AS `pdf`, `job_apply_master`.`jid` AS `jid`, `job_master`.`course` AS `course`, `job_master`.`job_title` AS `job_title`, `job_master`.`cid` AS `cid` FROM ((`employe_master` join `job_apply_master` on(`employe_master`.`eid` = `job_apply_master`.`eid`)) join `job_master` on(`job_apply_master`.`jid` = `job_master`.`jid`))  ;

-- --------------------------------------------------------

--
-- Structure for view `job_view`
--
DROP TABLE IF EXISTS `job_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `job_view`  AS SELECT `employer_master`.`image` AS `image`, `employer_master`.`cname` AS `cname`, `job_master`.`jid` AS `jid`, `job_master`.`course` AS `course`, `job_master`.`job_title` AS `job_title`, `job_master`.`location` AS `location`, `job_master`.`job_type` AS `job_type`, `job_master`.`position` AS `position`, `job_master`.`salary` AS `salary`, `job_master`.`valid_upto` AS `valid_upto`, `job_master`.`cid` AS `cid` FROM (`employer_master` join `job_master` on(`job_master`.`cid` = `employer_master`.`cid`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `employer_master`
--
ALTER TABLE `employer_master`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employe_master`
--
ALTER TABLE `employe_master`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `job_apply_master`
--
ALTER TABLE `job_apply_master`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `job_master`
--
ALTER TABLE `job_master`
  ADD PRIMARY KEY (`jid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employer_master`
--
ALTER TABLE `employer_master`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employe_master`
--
ALTER TABLE `employe_master`
  MODIFY `eid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_apply_master`
--
ALTER TABLE `job_apply_master`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_master`
--
ALTER TABLE `job_master`
  MODIFY `jid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

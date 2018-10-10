-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 04:21 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datatable`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `dept` varchar(22) NOT NULL,
  `sub_code` int(11) NOT NULL,
  `sub_name` varchar(44) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `year`, `sem`, `dept`, `sub_code`, `sub_name`, `status`) VALUES
(6, 2018, 3, 'Mechanical Engineering', 1212, 'material science', 0),
(7, 2018, 3, 'Mechanical Engineering', 1234, 'termodynamic', 0),
(8, 2018, 7, 'Mechanical Engineering', 4514, 'mathematics 3', 0),
(9, 2018, 3, 'Mechanical Engineering', 7894, 'strength of material', 0),
(10, 2018, 5, 'Computer Engineering', 4589, 'software engineering', 0),
(11, 2018, 5, 'Computer Engineering', 7854, 'theory of computer', 0),
(12, 2018, 5, 'Computer Engineering', 2354, 'database management syst', 0),
(13, 2018, 5, 'Computer Engineering', 7589, 'computer network', 0),
(14, 2018, 3, 'Computer Engineering', 1346, 'Object oriented programm', 0),
(15, 2018, 3, 'Computer Engineering', 2346, 'District mathematics', 0),
(19, 2018, 7, 'Computer Engineering', 1458, 'Inteligence', 1),
(20, 2018, 5, 'Mechanical Engineering', 1335, 'software engineering', 1),
(21, 2018, 3, 'Computer Engineering', 4514, 'Mechanics', 0),
(22, 2018, 3, 'Computer Engineering', 3154, 'computer network', 1),
(23, 2018, 3, 'Computer Engineering', 1234, 'Electronics', 0),
(24, 2018, 3, 'Computer Engineering', 5478, 'Mechanics', 1),
(25, 2018, 3, 'Computer Engineering', 7894, 'computer network', 0),
(26, 2018, 3, 'Computer Engineering', 5346, 'Electronics', 1),
(27, 2018, 7, 'Computer Engineering', 3546, 'Machine Learning', 0),
(28, 2018, 7, 'Computer Engineering', 2334, 'Emotional inteligence', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_pract`
--

CREATE TABLE `course_pract` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `dept` varchar(22) NOT NULL,
  `pract_code` int(11) NOT NULL,
  `pract_name` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_pract`
--

INSERT INTO `course_pract` (`id`, `year`, `sem`, `dept`, `pract_code`, `pract_name`) VALUES
(1, 2018, 3, 'Computer Engineering', 2346, 'Object oriented progra'),
(2, 2018, 5, 'Computer Engineering', 1458, 'Computer Network'),
(3, 2018, 7, 'Computer Engineering', 5465, 'Inteligence'),
(4, 0, 0, '--select--', 2346, 'Object oriented progra');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(11) NOT NULL,
  `day` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day`) VALUES
(1, 'MONDAY'),
(2, 'TUESDAY'),
(3, 'WEDNESDAY'),
(4, 'THURSDAY'),
(5, 'FRIDAY'),
(6, 'SATURDAY');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`) VALUES
(1, 'Computer Engineering'),
(2, 'Mechanical Engineering'),
(3, 'Civil Engineering'),
(4, 'Electrical Engineering'),
(5, 'Electronics Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `sem` int(11) NOT NULL,
  `dept` varchar(22) NOT NULL,
  `sub_code` int(11) NOT NULL,
  `sub_name` varchar(22) NOT NULL,
  `pract_code` int(11) NOT NULL,
  `pract_name` varchar(22) NOT NULL,
  `faculty_id` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `year`, `name`, `sem`, `dept`, `sub_code`, `sub_name`, `pract_code`, `pract_name`, `faculty_id`) VALUES
(1, 2018, 'sphurti more', 3, 'Computer Engineering', 7589, 'computer network', 5478, 'Mechanics', '21325'),
(2, 2018, 'Mahesh Gurjar', 3, 'Computer Engineering', 7589, 'computer network', 5346, 'Electronics', '45'),
(63, 2018, 'mahesh Patil', 3, 'Computer Engineering', 4514, 'mathematics 3', 1458, 'Inteligence', '21325'),
(65, 2018, 'Monika Tatte', 3, 'Computer Engineering', 1346, 'Object oriented progra', 0, '-none-', '21325'),
(66, 2018, 'Sandhya Y', 3, 'Computer Engineering', 0, '-none-', 1335, 'software engineering', '21325'),
(67, 2018, 'Deshmukh Raj', 1, 'Computer Engineering', 0, '-none-', 1458, 'Inteligence', '21313'),
(70, 2018, 'Rajesh purohit', 3, 'Mechanical Engineering', 1234, 'termodynamic', 0, '-none-', '21325'),
(71, 2018, 'sphurti more', 1, 'Computer Engineering', 0, '-none-', 1335, 'software engineering', '21325'),
(72, 2018, 'sphurti more', 1, 'Computer Engineering', 0, '-none-', 0, 'Object oriented progra', '21325'),
(73, 2018, 'sphurti more', 1, 'Computer Engineering', 0, '-none-', 1458, 'Inteligence', '21325'),
(75, 2018, 'sphurti more', 1, 'Computer Engineering', 0, '-none-', 1458, 'Inteligence', '21325'),
(77, 2018, 'sphurti more', 1, 'Computer Engineering', 0, '-none-', 1458, 'Inteligence', '21325'),
(78, 2018, 'sphurti more', 5, 'Computer Engineering', 7589, 'computer network', 1458, 'Inteligence', '21325'),
(79, 2018, 'kuldeep kadu', 5, 'Computer Engineering', 1346, 'Object oriented progra', 1335, 'software engineering', '21364'),
(80, 2018, 'Kuldeep ', 5, 'Computer Engineering', 1346, 'Object oriented progra', 1335, 'software engineering', '21325'),
(88, 2018, 'tarun patel', 7, 'Mechanical Engineering', 1346, 'Object oriented progra', 1458, 'Inteligence', '24586'),
(96, 2018, 'J D patil', 3, 'Computer Engineering', 1212, 'material science', 1335, 'software engineering', '56876'),
(99, 2018, 'DEPAY NAMAN', 0, 'Computer Engineering', 0, 'none', 0, 'none', '21452'),
(100, 2018, 'Karan Patil', 3, 'Computer Engineering', 4514, 'mathematics 3', 0, 'none', '23552'),
(101, 2018, 'Karan Patil', 5, 'Computer Engineering', 2354, 'database management sy', 1335, 'software engineering', '23552'),
(102, 2018, 'Karan Patil', 3, 'Computer Engineering', 4514, 'none', 1458, 'Inteligence', '23552'),
(103, 2019, 'kuldeep kadu', 3, 'Computer Engineering', 1234, 'termodynamic', 0, 'none', '2134'),
(104, 2019, 'kuldeep kadu', 5, 'Computer Engineering', 7854, 'theory of computer', 1335, 'software engineering', '2134'),
(105, 2018, 'kuldeep kadu', 7, 'Computer Engineering', 7589, 'computer network', 5478, 'Mechanics', '2134'),
(106, 2018, 'Param Mishra', 3, 'Computer Engineering', 7894, 'strength of material', 0, 'none', '12435'),
(107, 2018, 'Param Mishra', 5, 'Computer Engineering', 7854, 'theory of computer', 1335, 'software engineering', '12435'),
(108, 2018, 'Param Mishra', 3, 'Computer Engineering', 4514, 'mathematics 3', 5478, 'Mechanics', '12435'),
(109, 2018, 'Nishant Gangurde', 3, 'Mechanical Engineering', 1212, 'material science', 3154, 'computer network', '2145'),
(110, 2018, 'Nishant Gangurde', 5, 'Computer Engineering', 4589, 'software engineering', 5478, 'Mechanics', '2145'),
(111, 2018, 'Nishant Gangurde', 0, 'Mechanical Engineering', 0, 'none', 1458, 'Inteligence', '2145'),
(112, 2018, 'Abhishek patil', 3, 'Computer Engineering', 1346, 'Object oriented progra', 5478, 'Mechanics', '1245'),
(113, 2018, 'Abhishek patil', 5, 'Computer Engineering', 7589, 'computer network', 1335, 'software engineering', '1245'),
(114, 2018, 'Abhishek patil', 0, 'Computer Engineering', 0, 'none', 1458, 'Inteligence', '1245');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post`) VALUES
('Teacher'),
('Student');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(22) NOT NULL,
  `post` varchar(22) NOT NULL,
  `pass1` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `post`, `pass1`) VALUES
(1, 'ramesh', 'Student', 'ramesh123'),
(16, 'piyush', 'Asst.Professor', '11111'),
(17, 'raman', 'Student', 'aaaaa'),
(18, 'SB patil', 'Teacher', 'keshav123'),
(19, 'aladin', 'Student', 'kkkkkk'),
(20, 'aaaaaaaa', 'Student', 'aaaaa'),
(21, 'aqwetgrh', 'Student', 'fffff'),
(22, 'xxxxxx', 'Student', 'aaaaa'),
(23, 'milu25', 'Student', '2592000'),
(24, 'milu25', 'Student', '2592000'),
(25, 'zzzzzz', 'Student', 'zzzzz'),
(26, 'ramesh', 'Teacher', 'kkaab'),
(28, 'aqs', 'Student', 'kkkk'),
(29, 'robin', 'Teacher', 'aaaa'),
(30, 'sudarshan', 'Student', 'sudarshan'),
(33, 'admin', 'Student', 'aaaa'),
(37, 'paresh ', '--select--', ''),
(38, 'abhishek', 'Student', '3333'),
(39, 'bhakti', 'Teacher', '123456789'),
(40, 'Rohan kadam', 'Teacher', 'rohan123'),
(41, 'Rohan kadam', 'Teacher', 'rohan123');

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

CREATE TABLE `sem` (
  `sem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem`
--

INSERT INTO `sem` (`sem_id`) VALUES
(3),
(4),
(5),
(6),
(7),
(8);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timeid` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timeid`, `sem`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
(1, 3, 'sphurti more', 'Param Mishra', 'Karan Patil', 'Param Mishra', 'Mahesh Gurjar', 'Monika Tatte'),
(2, 3, 'Mahesh Gurjar', 'sphurti more', 'Sandhya Y', 'sphurti more', 'Rajesh purohit', 'Monika Tatte'),
(3, 3, 'J D patil', 'Monika Tatte', 'Abhishek patil', 'Rajesh purohit', 'sphurti more', 'sphurti more'),
(4, 3, 'Rajesh purohit', 'Rajesh purohit', 'sphurti more', 'J D patil', 'Sandhya Y', 'mahesh Patil'),
(5, 3, 'J D patil', 'Sandhya Y', 'mahesh Patil', 'Monika Tatte', 'Mahesh Gurjar', 'sphurti more'),
(6, 3, 'Monika Tatte', 'Monika Tatte', 'Sandhya Y', 'sphurti more', 'J D patil', 'Rajesh purohit');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `year_id` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `year`) VALUES
(1, 2018),
(2, 2019),
(3, 2020),
(4, 2021),
(5, 2022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_pract`
--
ALTER TABLE `course_pract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem`
--
ALTER TABLE `sem`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timeid`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `course_pract`
--
ALTER TABLE `course_pract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `sem`
--
ALTER TABLE `sem`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

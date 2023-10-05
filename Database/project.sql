-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 10:49 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `user`, `pwd`, `uname`) VALUES
(2, 'admin@abccollege.co.in', 'admin', 'TPO'),
(3, 'tpo@abccollege.co.in', 'tpo', 'TPO'),
(4, 'chief@abccollege.co.in', 'chief', 'Chief Admin');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `email`, `pwd`) VALUES
(1, 'TCS', 'tcsjobs@tcs.co.in', 'tcs'),
(3, 'WIPRO', 'wiprojobs@wipro.co.in', 'wipro'),
(4, 'CAPGEMINI', 'capgeminijobs@capgemini.co.in', 'capgemini'),
(5, 'ACCENTURE', 'career@accenture.co.in', 'accenture'),
(6, 'QA INFOTECH', 'qajobs@qainfotech.co.in', 'qainfotech'),
(7, 'accenture', 'accenture@gmial.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `did` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`did`, `dname`) VALUES
(1, 'BTECH(IT)'),
(2, 'MCA'),
(3, 'BTECH(CS)'),
(4, 'BTECH(ME)'),
(5, 'BTECH(CIVIL)'),
(6, 'BCA'),
(7, 'BBA'),
(8, 'MBA'),
(9, 'MTECH');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `jid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `criteria` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `nov` varchar(20) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `doc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`jid`, `cname`, `criteria`, `date`, `nov`, `skill`, `course`, `location`, `salary`, `doc`) VALUES
(3, 'Wipro', '60', '04/04/2014', '250', 'java,php', 'btech(all streams),mca', 'bangalore', '3.75 lpa', 'cv - 2 copies, passport photo - 2 copies, all educational certificates - 2 copies'),
(4, 'QA INFOTECH', '60', '14-04-2014', '50', 'php,java', 'mca,btech(all branches)', 'noida', '3.00 lpa', 'cv - 2 copies, passport photo - 2 copies, all educational certificates - 2 copies');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `prof_url` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile`, `sid`, `prof_url`) VALUES
(1, 1, 'images/user/1396946098.8772.jpeg'),
(2, 2, 'images/user/1396944753.1727.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `add` varchar(200) NOT NULL,
  `ph` varchar(12) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `agg` varchar(5) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `spath` varchar(100) NOT NULL,
  `apath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `did`, `fname`, `mname`, `lname`, `email`, `pwd`, `add`, `ph`, `dob`, `gen`, `sem`, `agg`, `skill`, `spath`, `apath`) VALUES
(1, 2, 'Saumitra', '', 'Das', 'sau@gmail.com', '123456', 'Saltlake secor 1', '1234567890', '2/4/1969', 'male', '5', '66', 'java', 'admin/file/5097113_1396944631.7061_Char_Bottle_Vodka.mp3', 'file/5097113_1396944631.7061_Char_Bottle_Vodka.mp3'),
(2, 2, 'amrita', '', 'tarat', 'amrita@gmail.com', 'amrita', 'behala', '9876543219', '4/5/1990', 'female', '6', '65', 'php', '', ''),
(7, 2, 'Saurav', '', 'Ganguly', 'saurav@gmail.com', '123456', 'Behela', '9876543210', '09/10/1974', 'male', '5', '88', 'asp.net', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `timeline_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `timeline_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`timeline_id`, `sid`, `timeline_url`) VALUES
(2, 1, 'images/user/1396943788.9086.jpeg'),
(3, 1, 'images/user/1396943788.9086.jpeg'),
(4, 1, 'images/user/1396943788.9086.jpeg'),
(5, 1, 'images/user/1396943788.9086.jpeg'),
(6, 1, 'images/user/1396943788.9086.jpeg'),
(7, 1, 'images/user/1396943788.9086.jpeg'),
(8, 2, 'images/user/1396944182.2573.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`timeline_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `timeline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

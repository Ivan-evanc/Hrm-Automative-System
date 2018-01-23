-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 04:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resourcedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbox_tbl`
--

CREATE TABLE `chatbox_tbl` (
  `cid` int(10) NOT NULL,
  `username` int(25) NOT NULL,
  `subject` int(50) NOT NULL,
  `body` int(200) NOT NULL,
  `attachment` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_reg_tbl`
--

CREATE TABLE `employee_reg_tbl` (
  `regid` int(11) NOT NULL,
  `confirmation_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_reg_tbl`
--

INSERT INTO `employee_reg_tbl` (`regid`, `confirmation_id`) VALUES
(1, 2010),
(2, 2011),
(3, 1212),
(4, 1),
(5, 1234),
(6, 1010),
(7, 1010),
(8, 1010),
(9, 1010),
(10, 10001);

-- --------------------------------------------------------

--
-- Table structure for table `employee_tbl`
--

CREATE TABLE `employee_tbl` (
  `cid` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_tbl`
--

INSERT INTO `employee_tbl` (`cid`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'emp1', 'evans', 'kibet', 'evans@gmail.com', '1234'),
(4, 'victor', 'Kipruto', 'sang', 'victor@gmail.com', '1234'),
(6, 'Boaz', 'Mark', 'Kosgei', 'boaz@gmail.com', '1234'),
(7, 'Boaz', 'Mark', 'Kosgei', 'boaz@gmail.com', '1234'),
(8, 'Boaz', 'Mark', 'Kosgei', 'boaz@gmail.com', '1234'),
(9, 'Jan', 'Jan', 'Javet', 'jan@gmail.com', '1234'),
(10, 'alp', 'alp', 'ndiema', 'alp@gmail.com', '1234'),
(11, 'Brian', 'Brian', 'Kibet', 'b@gmail.com', '10001');

-- --------------------------------------------------------

--
-- Table structure for table `leave_tbl`
--

CREATE TABLE `leave_tbl` (
  `username` varchar(20) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_tbl`
--

INSERT INTO `leave_tbl` (`username`, `reason`, `date_in`, `date_out`, `status`) VALUES
('Boaz', 'wer33', '2018-01-10', '2018-01-18', 'Pending'),
('Brian', 'I need to attend the emmergency kindly', '2018-01-26', '2018-01-26', 'Pending'),
('jan', 'education purpose', '2018-01-10', '2018-01-18', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notice_tbl`
--

CREATE TABLE `notice_tbl` (
  `notice_id` int(10) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_category` varchar(50) NOT NULL,
  `notice_information` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `renumeration_tbl`
--

CREATE TABLE `renumeration_tbl` (
  `cid` int(10) NOT NULL,
  `salary` int(10) NOT NULL,
  `allowances` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) UNSIGNED NOT NULL,
  `uname` varchar(25) NOT NULL,
  `passwd` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `workreport_tbl`
--

CREATE TABLE `workreport_tbl` (
  `username` varchar(30) NOT NULL,
  `date_report` varchar(30) NOT NULL,
  `time_in` varchar(30) NOT NULL,
  `time_out` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workreport_tbl`
--

INSERT INTO `workreport_tbl` (`username`, `date_report`, `time_in`, `time_out`) VALUES
('Boaz', '2018-01-11', '08:08', ''),
('Brian', '2018-01-11', '08:08', '16:34'),
('dan', '2018-01-10', '04:55', '08:00'),
('daniel munge', '2018-01-24', '01:13', '14:32'),
('fgetet', '2018-01-25', '02:42', '15:42'),
('sylvester lebulus', '2018-01-18', '15:33', '15:23'),
('victor', '2018-01-18', '04:44', '14:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbox_tbl`
--
ALTER TABLE `chatbox_tbl`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee_reg_tbl`
--
ALTER TABLE `employee_reg_tbl`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `notice_tbl`
--
ALTER TABLE `notice_tbl`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `renumeration_tbl`
--
ALTER TABLE `renumeration_tbl`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD KEY `passwd` (`passwd`);

--
-- Indexes for table `workreport_tbl`
--
ALTER TABLE `workreport_tbl`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_reg_tbl`
--
ALTER TABLE `employee_reg_tbl`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice_tbl`
--
ALTER TABLE `notice_tbl`
  MODIFY `notice_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chatbox_tbl`
--
ALTER TABLE `chatbox_tbl`
  ADD CONSTRAINT `chatbox_tbl_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `employee_tbl` (`cid`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `renumeration_tbl`
--
ALTER TABLE `renumeration_tbl`
  ADD CONSTRAINT `renumeration_tbl_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `employee_tbl` (`cid`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

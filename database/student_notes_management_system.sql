-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 12:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student notes management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptid` varchar(3) NOT NULL,
  `deptname` varchar(50) NOT NULL,
  `mgrid` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptid`, `deptname`, `mgrid`) VALUES
('CS', 'Computer Science & Eng.', 'CS100'),
('CV', 'Civil Eng.', 'CV200'),
('EC', 'Electronics & Communicational Eng.', 'EC300'),
('FY', 'First Year', 'FY600'),
('IS', 'Information Science & Eng.', 'IS400'),
('MAT', 'Mathematics', 'MAT700'),
('ME', 'Mechanical Eng.', 'ME500');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` varchar(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `deptid` varchar(3) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `deptid`, `password`) VALUES
('CS100', 'Shivamurthy', 'CS', 'shivamurthy'),
('CS101', 'Deepu R', 'CS', 'deepu'),
('CS102', 'Santosh Kumar ', 'CS', 'santosh'),
('CV200', 'Ramakrishna Gowda', 'CV', 'ramakrishna'),
('EC300', 'Mahesh  Rao', 'EC', 'mahesh'),
('FY600', 'Manjunath', 'FY', 'manjunath'),
('IS400', 'Sharath Kumar', 'IS', 'sharath'),
('MAT700', 'Shrinivas', 'MAT', 'shrinivas'),
('ME500', 'Mohammed Khaiser', 'ME', 'mohammed');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `subcode` varchar(7) NOT NULL,
  `module` int(11) NOT NULL,
  `notes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`subcode`, `module`, `notes`) VALUES
('18CS53', 1, 'DBMS MODULE 1.pdf'),
('18CS53', 2, 'DBMS MODULE 2.pdf'),
('18CS53', 3, 'DBMS MODULE 3.pdf'),
('18CS53', 4, 'DBMS MODULE 4.pdf'),
('18CS53', 5, '502238.docx');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(10) NOT NULL,
  `studentname` varchar(30) NOT NULL,
  `deptid` varchar(3) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `studentname`, `deptid`, `dob`) VALUES
('4MH18CS077', 'Preethan H N', 'CS', '2000-02-29'),
('4MH18CS099', 'SATHWIK NIDHI Y T', 'CS', '1999-12-26'),
('4MH18CS100', 'SENA AHAMMEED', 'CS', '1998-11-22'),
('4MH18CS107', 'SREYAS P', 'CS', '2000-08-21'),
('4mh18cs117', 'Thejaswini S', 'CS', '2021-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subcode` varchar(8) NOT NULL,
  `subname` varchar(60) NOT NULL,
  `deptid` varchar(3) NOT NULL,
  `sem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subcode`, `subname`, `deptid`, `sem`) VALUES
('18CHE22', 'Chemistry', 'FY', 2),
('18CIV14', 'Civil', 'FY', 1),
('18CPS23', 'C Programming', 'FY', 2),
('18CS32', 'DS', 'CS', 3),
('18CS33', 'ADE', 'CS', 3),
('18CS34', 'CO', 'CS', 3),
('18CS35', 'SE', 'CS', 3),
('18CS36', 'DMS', 'CS', 3),
('18CS42', 'DAA', 'CS', 4),
('18CS43', 'OS', 'CS', 4),
('18CS44', 'MCES', 'CS', 4),
('18CS45', 'OOC', 'CS', 4),
('18CS46', 'DC', 'CS', 4),
('18CS51', 'MEIT', 'CS', 5),
('18CS52', 'CNS', 'CS', 5),
('18CS53', 'DBMS', 'CS', 5),
('18CS54', 'ATC', 'CS', 5),
('18CS55', 'Python', 'CS', 5),
('18CS56', 'UNIX', 'CS', 5),
('18CS61', 'Data Mining', 'CS', 6),
('18CS62', 'Big Data ', 'CS', 6),
('18CS71', 'ACA', 'CS', 7),
('18CS72', 'ML', 'CS', 7),
('18CS81', 'IOT', 'CS', 8),
('18CS82', 'UID', 'CS', 8),
('18EC31', 'Network Theory', 'EC', 3),
('18EC32', 'Electronic Devices', 'EC', 3),
('18EC41', 'Analog Circuits', 'EC', 4),
('18EC42', 'Microcontroller', 'EC', 4),
('18EC51', 'Digital Signal Processing', 'EC', 5),
('18EC52', 'Electromagnetic Waves', 'EC', 5),
('18EC61', 'Digital Communication', 'EC', 6),
('18EC62', 'Microwaves and Antennas', 'EC', 6),
('18EC71', 'Computer Networks', 'EC', 7),
('18EC72', 'VLSI Design', 'EC', 7),
('18EC81', 'Network Security', 'EC', 8),
('18EC82', 'Radar Engineering', 'EC', 8),
('18EGDL16', 'Eng, Graphics', 'FY', 1),
('18ELE13', 'Electrical', 'FY', 1),
('18ELN24', 'Electronics', 'FY', 2),
('18MAT11', 'Mathematics 1', 'MAT', 1),
('18MAT12', 'Mathematics 2', 'MAT', 2),
('18MAT31', 'Mathematics 3', 'MAT', 3),
('18MAT41', 'Mathematics 4', 'MAT', 4),
('18ME25', 'Mechanical', 'FY', 2),
('18PHY12', 'Physics', 'FY', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptid`),
  ADD KEY `department_ibfk_1` (`mgrid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `faculty_ibfk_1` (`deptid`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`subcode`,`module`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `student_ibfk_1` (`deptid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subcode`),
  ADD KEY `subject_ibfk_1` (`deptid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`mgrid`) REFERENCES `faculty` (`fid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`deptid`) REFERENCES `department` (`deptid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`subcode`) REFERENCES `subject` (`subcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`deptid`) REFERENCES `department` (`deptid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`deptid`) REFERENCES `department` (`deptid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 06:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `admno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `admno`, `name`, `subject`, `status`, `period`, `date`) VALUES
(10, '9001', 'inba', 'Algorithm', 'Present', '1', '08-09-2020'),
(11, '9002', 'vijay', 'Algorithm', 'Absent', '1', '08-09-2020'),
(12, '9003', 'Dinesh', 'Algorithm', 'Present', '1', '08-09-2020'),
(13, '9001', 'inba', 'Data Structure', 'Present', '3', '09-09-2020'),
(14, '9002', 'vijay', 'Data Structure', 'Present', '3', '09-09-2020'),
(15, '9003', 'Dinesh', 'Data Structure', 'Present', '3', '09-09-2020'),
(16, '9001', 'inba', 'Data Structure', 'Present', '6', '09-09-2020'),
(17, '9002', 'vijay', 'Data Structure', 'Absent', '6', '09-09-2020'),
(18, '9003', 'Dinesh', 'Data Structure', 'Present', '6', '09-09-2020'),
(19, '9001', 'inba', 'TOC', 'Absent', '2', '09-09-2020'),
(20, '9002', 'vijay', 'TOC', 'Absent', '2', '09-09-2020'),
(21, '9003', 'Dinesh', 'TOC', 'Present', '2', '09-09-2020');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fcode` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fcode`, `pwd`, `name`, `subject`) VALUES
(1, '101', 'pass', 'kamal', 'Data Structure'),
(3, '102', 'pass', 'Veena', 'Algorithm'),
(5, '103', 'pass', 'Raji', 'TOC'),
(6, '104', 'pass', 'Chitra', 'Computer Graphics'),
(7, '105', 'pass', 'Lavanya', 'DBMS');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `week` varchar(255) NOT NULL,
  `period1` varchar(255) NOT NULL,
  `period2` varchar(255) NOT NULL,
  `period3` varchar(255) NOT NULL,
  `period4` varchar(255) NOT NULL,
  `period5` varchar(255) NOT NULL,
  `period6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `week`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
(1, 'Monday', 'Data Structure', 'TOC', 'Data Structure', 'DBMS', 'Computer Graphics', 'Data Structure'),
(2, 'Tuesday', 'Algorithm', 'DBMS', 'Computer Graphics', 'TOC', 'Algorithm', 'Data Structure'),
(3, 'Wednesday', 'TOC', 'TOC', 'Data Structure', 'Computer Graphics', 'DBMS', 'Data Structure'),
(4, 'Thursday', 'DBMS', 'Algorithm', 'Algorithm', 'Algorithm', 'Algorithm', 'Data Structure'),
(5, 'Friday', 'Data Structure', 'DBMS', 'TOC', 'Algorithm', 'Computer Graphics', 'DBMS');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `admno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `admno`, `name`) VALUES
(1, '9001', 'inba'),
(2, '9002', 'vijay'),
(4, '9003', 'Dinesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

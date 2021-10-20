-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 08:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin123@gmail.com', 1234567);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_no` int(50) NOT NULL,
  `roll_no` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(30) DEFAULT NULL,
  `class` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `remark` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_no`, `roll_no`, `name`, `father_name`, `class`, `email`, `password`, `remark`) VALUES
(1, 1, 'Adiba Sharif', 'MD. Sharif', 10, 'adibasharif123@gmail.com', 1912611642, 'Fine'),
(2, 2, 'Tashin Chowdhury', 'MD. Chowdhury', 10, 'tashinchowdhury123@gmail.com', 1911037642, 'Fine'),
(3, 3, 'Nafis Khan', 'MD. Khan', 12, 'nafiskhan123@gmail.com', 1712322642, 'Fine'),
(4, 4, 'Al Sadat Rafi', 'MD. Rafi', 11, 'alsadatrafi123@gmail.com', 1813118642, 'Fine');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `s_no` int(50) NOT NULL,
  `t_id` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `courses` varchar(30) NOT NULL,
  `mobile` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`s_no`, `t_id`, `name`, `courses`, `mobile`, `email`, `password`) VALUES
(1, 1, 'Nusrat Jahan Chowdhury', 'CSE', 2147483647, 'njc123@gmail.com', 0),
(2, 2, 'Raiyan Khan', 'Lab', 1010101010, 'raiyankhan123@gmail.com', 11111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

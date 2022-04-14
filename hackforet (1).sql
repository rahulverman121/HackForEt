-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3302
-- Generation Time: Apr 14, 2022 at 11:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackforet`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `empid` varchar(20) NOT NULL,
  `password` varchar(49) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fname`, `lname`, `email`, `empid`, `password`) VALUES
(1, 'RAHUL', 'VERMAN', 'admin@cmrtc.edu', 'emp077', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `semester` varchar(19) NOT NULL,
  `subject` varchar(35) NOT NULL,
  `module` varchar(16) NOT NULL,
  `youtube` varchar(45) NOT NULL,
  `weblink` varchar(45) NOT NULL,
  `files` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `semester`, `subject`, `module`, `youtube`, `weblink`, `files`) VALUES
(1, '2nd Semester', 'Data Structure', 'Module 3', 'https://www.youtube.com/embed/a59kOE2Ma1Q', 'https://www.frus.com', 'assets/Untitled (1).pdf'),
(2, '3rd Semester', 'Data Structure', 'Module 1', 'https://youtube.com/embed/wFjEZw-FF_w', 'https://www.w3schools.com', 'assets/sih.pdf'),
(3, '3rd Semester', 'Data Structure', 'Module 1', 'https://youtube.com/embed/b2S4tLkUZZY', 'https://www.javapoint.com', 'assets/FB-web app.pdf'),
(4, '3rd Semester', 'Cryptography', 'Module 2', 'https://youtube.com/embed/yubzJw0uiE4', 'https://www.tutorialpoint.com', 'assets/Assignment (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `semester` varchar(18) NOT NULL,
  `regno` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `email`, `semester`, `regno`, `password`) VALUES
(1, 'RAHUL', 'VERMAN', 'rahulverman44@gmail.com', 'Select Semester', '1MJ19CS193', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
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
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

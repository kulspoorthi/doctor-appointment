-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2021 at 04:01 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16507289_bookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `user`, `pass`) VALUES
(1, 'test@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blacklist`
--

INSERT INTO `blacklist` (`date`) VALUES
('2021-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `date`, `name`, `phone`, `email`, `gender`, `age`, `location`, `timeslot`) VALUES
(71, '2021-05-04', 'Sanjith Kulkarni ', 1234567890, 'sanjithkulkarni@gmail.com', 'male', 13, 'Banglore', '09:00AM-09:10AM'),
(72, '2021-05-03', 'Gyefubbkk', 124578, 'iyed@gmail.com', 'Htdgv', 999, 'Ttuifz', '09:20AM-09:30AM'),
(73, '2021-05-05', 'Rachana Kulkarni 1JS18CS19', 9535291265, 'vkrachana1999@gmail.com', 'female', 21, 'Bangalore', '09:00AM-09:10AM');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackform`
--

CREATE TABLE `feedbackform` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `feed_back` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `user_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `user_email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` bigint(255) NOT NULL,
  `content` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`user_name`, `user_email`, `phone`, `content`) VALUES
('test', 'vkrachana1999@gmail.com', 0, 'ujil,hgloi'),
('test', 'vkrachana1999@gmail.com', 123, 'ujil,hgloi'),
('rachana', 'vkrachana1999@gmail.com', 2147483647, 'thank you'),
('Mukund', 'mukund@gmail.com', 12345, 'thank you'),
('Rachna', 'vkrachana1999@gmail.com', 2147483647, 'Hello'),
('Rachu', 'rachu1999@gmail.com', 9535291265, 'Good Work'),
('test', 'vkrachana1999@gmail.com', 9535291265, 'Excellent'),
('mk', 'mk@gmail.com', 0, 'good'),
('mk', 'mk@gmail.com', 0, 'good'),
('Mk', 'Mk@gmail.com', 7019662116, 'Good'),
('Rachu', 'vkrachana1999@gmail.com', 9535, 'Good'),
('Susheela', 'vksusheela@gmail.com', 9845803086, 'Good'),
('Rachana', 'sanjithkulkarni@gmail.com', 9845, 'Hi dodappa'),
('Mukund', 'mukund@gmail.com', 7019662116, 'Good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`,`phone`,`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

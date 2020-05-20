-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 11:52 AM
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
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinmenthistory`
--

CREATE TABLE `appoinmenthistory` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(32) NOT NULL,
  `doctorname` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinmenthistory`
--

INSERT INTO `appoinmenthistory` (`id`, `date`, `time`, `doctorname`) VALUES
(1, '2020-05-15', '10:00 am', 'Dr. Asgar'),
(2, '2020-05-16', '11:00 am', 'Dr. Anis');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlist`
--

CREATE TABLE `doctorlist` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `specialization` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorlist`
--

INSERT INTO `doctorlist` (`id`, `name`, `specialization`) VALUES
(1, 'asgar', 'Neurology'),
(2, 'Dr. Anis', 'Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `makeappoinment`
--

CREATE TABLE `makeappoinment` (
  `pid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makeappoinment`
--

INSERT INTO `makeappoinment` (`pid`, `name`, `date`, `time`) VALUES
(0, 'asgar', '2020-05-15', '7-8'),
(0, 'Dr. Asgar', '2020-05-04', '7-9:30 pm'),
(0, 'Dr. Anis', '2020-05-20', '7-9:30 pm'),
(0, 'Dr. Anis', '2020-05-20', '7-9:30 pm'),
(0, 'Dr. Anis', '2020-05-21', '7-9:30 pm'),
(0, 'Dr. Anis', '2020-05-21', '7-9:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`) VALUES
(1, 'maruf', 'maruf', 'maruf@gmail.com', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinmenthistory`
--
ALTER TABLE `appoinmenthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorlist`
--
ALTER TABLE `doctorlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

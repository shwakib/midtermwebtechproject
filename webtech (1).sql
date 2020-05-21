-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 10:40 PM
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
-- Table structure for table `admittedpatient`
--

CREATE TABLE `admittedpatient` (
  `name` varchar(32) NOT NULL,
  `problem` text NOT NULL,
  `department` varchar(32) NOT NULL,
  `referredddoc` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admittedpatient`
--

INSERT INTO `admittedpatient` (`name`, `problem`, `department`, `referredddoc`) VALUES
('Maruf', 'Heart disease', 'Cardiology', 'N. A. M Momenuzzaman'),
('Maruf', 'Habijabi', 'Cardiology', 'Mizanur Rahman'),
('Maruf', 'fthbdtf', 'Cardiology', 'N. A. M Momenuzzaman'),
('Maruf', 'fdgdrvcesfxwsesr  er', 'Cardiology', 'N. A. M Momenuzzaman'),
('Maruf', 'gg', 'Cardiology', 'Mizanur Rahman');

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
-- Table structure for table `appointmentlist`
--

CREATE TABLE `appointmentlist` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `docname` varchar(32) NOT NULL,
  `patientname` varchar(32) NOT NULL,
  `visitreason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmentlist`
--

INSERT INTO `appointmentlist` (`date`, `time`, `docname`, `patientname`, `visitreason`) VALUES
('2020-05-11', '08:15:26', 'momenuzzaman', 'Maruf', 'k cghunucsdhkjdfnkdfkbndvbknvkvcxn kdfolsdfigdfkvnkcvnkldffgnlkdfsvnkdsfn vndifshcindfhi kgncsidsoifcj sdfkm hgdfiucvhnkdf kdsfjcvnihfiu hdkjshcgnudfcv8i');

-- --------------------------------------------------------

--
-- Table structure for table `assignednurse`
--

CREATE TABLE `assignednurse` (
  `name` varchar(32) NOT NULL,
  `dept` varchar(32) NOT NULL,
  `docname` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignednurse`
--

INSERT INTO `assignednurse` (`name`, `dept`, `docname`) VALUES
('Nishat', 'Cardiology', 'N. A. M Momenuzzaman'),
('Nishat', 'Cardiology', 'N. A. M Momenuzzaman'),
('Nishat', 'Cardiology', 'Mizanur Rahman');

-- --------------------------------------------------------

--
-- Table structure for table `circularlist`
--

CREATE TABLE `circularlist` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaintlist`
--

CREATE TABLE `complaintlist` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `complaint` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaintlist`
--

INSERT INTO `complaintlist` (`id`, `date`, `complaint`, `userid`) VALUES
(1, '2020-05-12', 'dfscsfgsdfc', 123),
(4, '2020-05-18', 'Ac was not working', 17337791);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `name` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `bg` varchar(32) NOT NULL,
  `marstatus` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `contactnum` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `ecp` varchar(32) NOT NULL,
  `ecn` varchar(32) NOT NULL,
  `relwadmin` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `imgname` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `usertype` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `dob`, `bg`, `marstatus`, `email`, `contactnum`, `address`, `ecp`, `ecn`, `relwadmin`, `password`, `imgname`, `type`, `usertype`) VALUES
(1, 'maruf', 'Male', '2020-05-22', 'A+', 'Single', 'badhonacps@gmail.com', '01792-03643', 'senpara						\r\n							', 'dad', '01713-333425', 'patient', '123', 'maruf', 'patient', 'operations');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

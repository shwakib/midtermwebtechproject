-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 01:56 PM
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

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(101, 'Cardiology'),
(102, 'Orthopedics'),
(103, 'Coronary Care Unit (CCU)'),
(104, 'Diagnostic Imaging');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlist`
--

CREATE TABLE `doctorlist` (
  `id` int(11) NOT NULL,
  `dept` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorlist`
--

INSERT INTO `doctorlist` (`id`, `dept`, `name`) VALUES
(123456, 'Medicine', 'Mizanur Rahman'),
(172584, 'Cardiology', 'N. A. M Momenuzzaman'),
(123456789, 'Cardiology', 'Mizanur Rahman');

-- --------------------------------------------------------

--
-- Table structure for table `dutylist`
--

CREATE TABLE `dutylist` (
  `day` varchar(32) NOT NULL,
  `12am` text NOT NULL,
  `8am` text NOT NULL,
  `4am` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dutylist`
--

INSERT INTO `dutylist` (`day`, `12am`, `8am`, `4am`) VALUES
('Sunday', 'Monir,Moshuiur', 'uhercun,csu', 'Al amin,Nishat'),
('Sunday', 'Dulal,Tuhin', 'Shohag,Shefali', 'Khala,Bua'),
('Monday', 'fgdfgdfsg', 'dfgdsfgbs', 'dfgdsfgbsdr'),
('Monday', 'hfgbfgb', 'dhfbxfgbhfg', 'gbfgbdf');

-- --------------------------------------------------------

--
-- Table structure for table `makeappoinment`
--

CREATE TABLE `makeappoinment` (
  `name` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makeappoinment`
--

INSERT INTO `makeappoinment` (`name`, `date`, `time`) VALUES
('Mizanur Rahman', '2020-05-05', '7-9:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `dept` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `name`, `dept`) VALUES
(17337861, 'Nishat', 'Cardiology');

-- --------------------------------------------------------

--
-- Table structure for table `solvedcomplaintlist`
--

CREATE TABLE `solvedcomplaintlist` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date NOT NULL,
  `complaint` text NOT NULL,
  `action` varchar(32) NOT NULL,
  `report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solvedcomplaintlist`
--

INSERT INTO `solvedcomplaintlist` (`cid`, `uid`, `date`, `complaint`, `action`, `report`) VALUES
(1, 123, '2020-05-12', 'dfscsfgsdfc', 'No', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(1, 123, '2020-05-12', 'dfscsfgsdfc', 'Yes', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(4, 17337791, '2020-05-18', 'Ac was not working', 'Yes', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(4, 17337791, '2020-05-18', 'Ac was not working', 'Yes', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(4, 17337791, '2020-05-18', 'Ac was not working', 'No', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(4, 17337791, '2020-05-18', 'Ac was not working', 'Yes', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(4, 17337791, '2020-05-18', 'Ac was not working', 'Yes', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(4, 17337791, '2020-05-18', 'Ac was not working', 'No', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(4, 17337791, '2020-05-18', 'Ac was not working', 'Yes', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(4, 17337791, '2020-05-18', 'Ac was not working', 'No', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(4, 17337791, '2020-05-18', 'Ac was not working', 'Yes', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that'),
(1, 123, '2020-05-12', 'dfscsfgsdfc', 'Yes', 'We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `bg` text NOT NULL,
  `marstatus` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `contactnum` text NOT NULL,
  `address` text NOT NULL,
  `ecp` varchar(32) NOT NULL,
  `ecn` text NOT NULL,
  `relwadmin` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `imgname` varchar(32) NOT NULL,
  `type` text NOT NULL,
  `usertype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `dob`, `bg`, `marstatus`, `email`, `contactnum`, `address`, `ecp`, `ecn`, `relwadmin`, `password`, `imgname`, `type`, `usertype`) VALUES
(1, 'Maruf', 'Male', '2020-04-26', 'O+', 'Single', 'badhonacps@gmail.com', '01711111111', '			Dhaka					\r\n							', 'Ahmed Ali', '01711-000000', 'Father', '123', 'Maruf', 'patient', 'Normal'),
(123, 'Wakib', 'Male', '2020-04-30', 'O+', 'Single', 'sifat6460@gmail.com', '01714049024', '	Comilla							\r\n							', 'Mojib', '01714-049024', 'Father', '123', 'Wakib', 'admin', 'operations'),
(1234, 'Fariha', 'Female', '2020-05-05', 'B+', 'Single', 'fariha@gmail.com', '01711111111', '			Dhaka					\r\n							', 'demo', '01711-000000', 'N/A', '123', 'Fariha', 'staff', 'Nurse'),
(123456789, 'DR. N. A. M. Momenuzzaman', 'Male', '2020-04-28', 'O-', 'Married', 'momenuzamman@gmail.com', '01711111111', '			dhaka					\r\n							', 'United Hospital', '01711-000000', 'Hospital', '123', 'DR. N. A. M. Momenuzzaman', 'doctor', 'Cardiologist');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` text NOT NULL,
  `upassword` text NOT NULL,
  `uemail` text NOT NULL,
  `utype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `upassword`, `uemail`, `utype`) VALUES
(1234, 'wakib', '741852963', 'wakib@gmail.com', 'Superuser');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaintlist`
--
ALTER TABLE `complaintlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorlist`
--
ALTER TABLE `doctorlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaintlist`
--
ALTER TABLE `complaintlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

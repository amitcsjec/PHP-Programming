-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 01:38 PM
-- Server version: 8.0.27
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoperations`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int NOT NULL,
  `firstName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `visible` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `firstName`, `lastName`, `email`, `mobile`, `password`, `visible`) VALUES
(1, 'Amit', 'Kumar', 'amitk7322@gmail.com', '8918213123', '1234', 0),
(3, 'Ram', 'Kumar', 'ram.kumar@gmail.com', '9900231231', 'ram1233', 0),
(6, 'Amit', 'Kumar', 'amit@gmail.com', '9123021312', '123345', 0),
(7, 'Sam', 'Yulu', 'man@gmail.com', '2342424', '1213123', 0),
(13, 'Ramesh', '', 'ramu@yahoo.com', '999121323', '9678asda', 0),
(15, '1231231', '', 'pat@gmail.com', '90y7182693', '123dsf', 0),
(16, '123123', '', 'pic@gmail.com', '5465464', 'asdas', 0),
(18, 'sahil', '', 'kumar.sahil@gmail.com', '97980798', '12121', 0),
(19, 'adada1323', '', 'asd@yahoo.com', '067986912e', 'asasd', 0),
(20, 'Singh', '', 'singh@gmail.com', '8324234123', 'lic354', 0),
(23, 'Kali', 'Singh', 'kal34@gmail.com', '9123213312', 'kal454', 1),
(24, 'rajesh', 'Kumar', 'raj.kumar@gmail.com', '9283432412', 'raj1223', 1),
(25, 'Priya', 'Tambade', 'tambade@gmail.com', '9821507749', 'tabade', 1),
(26, 'Pankaj', 'singh', 'ramu24@gmail.com', '7792088120', 'ramu-89', 1),
(27, 'Sonu', 'Sharma', 'sonu56@gmail.com', '9999132311', 'sharma98090', 1),
(28, '1231231', '213123', 'aadd@gmail.com', '9999999999', 'sdadad', 1),
(38, '12312312', '213123213', 'dsgfdg@gmail.com', '3274328478', 'werewr-898-', 1),
(53, 'Nayeem', 'Bhati', 'nayeem@gmail.com', '8877223337', 'Nayeem@12', 1),
(54, 'a', 'b', 'Nayeem@hcl.com', '8877998877', 'Nayeem@12', 1),
(55, 'nayeeem', 'Khan', 'nayeem5465@gmail.com', '9344554654', 'ntry90', 1),
(56, '             ', '', 'ak@gmail.com', '9325345323', 'ak435', 1);

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int NOT NULL,
  `firstName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `firstName`) VALUES
(1, ''),
(2, ''),
(3, 'Nayeem');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `phone` bigint NOT NULL,
  `code` mediumint NOT NULL,
  `status` text NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `username`, `email`, `password`, `dob`, `phone`, `code`, `status`, `usertype`) VALUES
(1, 'ram345', 'ram78@gmail.com', '$2y$10$bi12nWHQipsxBLZNuUFbJu8PdvcjmvGcKhRX5SKDT/yZ8eibmAfBW', 'dob', 0, 0, 'verified', 'user'),
(2, 'billy', 'bill.chuck@gmail.com', 'billchuck', '02-04-1995', 9117644234, 0, 'verified', 'user'),
(4, 'tom', 'tom.kelly@gmail.com', '$2y$10$NuNbE7NsjdmARpQAHzvUGOdZeq80plOVhrbXiU8/9mYlHum/vVoRC', '1989-06-21', 9991113330, 0, 'notverified', 'user'),
(5, 'prince', 'raj.kumar@gmail.com', '$2y$10$SGNaoa4kCCmfmBUtowOZ6.apC9EsYZ4XmSl5cgqPu.oBTtfWP09fi', '1996-10-15', 9912133200, 765725, 'verified', 'user'),
(6, 'amitkr', 'amitk7322@gmail.com', '$2y$10$vGBDKG/BUSnJMCXeubtEg.e3c.Y5D5hHhdTwEnkfl.KPv5gNk4Mb2', '1994-09-05', 9116564699, 656946, 'verified', 'admin'),
(7, 'sam321', 'sam.su@gmail.com', '$2y$10$JQzFxb9HJv3v4GaTaoimk.UC//CtxfNOvCjvj3EtNIeUldz1/JKlW', '1993-08-10', 9121306942, 0, 'verified', 'user'),
(8, 'infytech', 'infytech23@gmail.com', '$2y$10$BAFVw/Mo0kHaXooRXokd1.PE1Q2838bac8TFd1WhJv7sE1IPje0.K', '2010-09-14', 9123241565, 0, 'verified', 'user'),
(9, 'demo', 'demoq234@gmail.com', '$2y$10$E60ioF6xiK4mY3J.X6Mv5.T9A.BwTneVR2CvkT/9Jrt//XI6lcgkK', '1998-10-13', 9723764234, 0, 'verified', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

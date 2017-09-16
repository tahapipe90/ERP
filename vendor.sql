-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2017 at 03:45 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `vendorlogin`
--

CREATE TABLE `vendorlogin` (
  `mobileno` int(12) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendorregister`
--

CREATE TABLE `vendorregister` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobileno` int(12) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendorregister`
--

INSERT INTO `vendorregister` (`name`, `email`, `mobileno`, `password`) VALUES
('shanu', 'shanu@example.com', 232323, '1230'),
('taha', 'taha@example.com', 252525, '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendorlogin`
--
ALTER TABLE `vendorlogin`
  ADD PRIMARY KEY (`mobileno`);

--
-- Indexes for table `vendorregister`
--
ALTER TABLE `vendorregister`
  ADD PRIMARY KEY (`mobileno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

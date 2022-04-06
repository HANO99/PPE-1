-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 01:45 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecomm`
--

CREATE TABLE `ecomm` (
  `id` int(10) NOT NULL,
  `description` varchar(250) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `prix` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecomm`
--

INSERT INTO `ecomm` (`id`, `description`, `photo`, `prix`) VALUES
(1, 'The best whatch', 'download (1).jpg', 1000),
(2, 'Rolex watch', 'download (2).jpg', 2000),
(3, 'The super whatch', 'download.jpg', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `logex`
--

CREATE TABLE `logex` (
  `id` int(10) NOT NULL,
  `username` varchar(35) NOT NULL,
  `passw` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `confirm_pasword` varchar(35) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logex`
--

INSERT INTO `logex` (`id`, `username`, `passw`, `email`, `confirm_pasword`, `Phone`) VALUES
(18, 'abdelati', 'abdelati', 'chraiha1abdelati@gmail.com', 'abdelati', '0655609287');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecomm`
--
ALTER TABLE `ecomm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logex`
--
ALTER TABLE `logex`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecomm`
--
ALTER TABLE `ecomm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logex`
--
ALTER TABLE `logex`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

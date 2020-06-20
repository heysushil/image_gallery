-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2020 at 07:43 AM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aidmove8_daibai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'ADMIN', 'user@admin.com', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `covers`
--

CREATE TABLE `covers` (
  `cov_id` int(10) NOT NULL,
  `covTitile` varchar(100) DEFAULT NULL,
  `covShortDetail` varchar(250) DEFAULT NULL,
  `covImgName` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `covers`
--

INSERT INTO `covers` (`cov_id`, `covTitile`, `covShortDetail`, `covImgName`) VALUES
(4, 'Demo Title', 'Demo Discription', '19102401163907.jpg'),
(6, 'Demo Club', 'best work', '191024125431img_7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `imges`
--

CREATE TABLE `imges` (
  `img_id` int(10) NOT NULL,
  `cov_id` int(10) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imges`
--

INSERT INTO `imges` (`img_id`, `cov_id`, `img`) VALUES
(67, 4, '1910240144212.jpg'),
(68, 4, '1910240144214.jpg'),
(69, 4, '1910240144213.jpg'),
(70, 6, '191024125543hero_bg_2.jpg'),
(71, 6, '191024125543hero_bg_3.jpg'),
(72, 6, '191024125543img_1.jpg'),
(73, 6, '191024125632img_6.jpg'),
(74, 6, '191024125632img_5.jpg'),
(75, 6, '191024125707img_5.jpg'),
(76, 6, '191024125707img_7.jpg'),
(77, 6, '191024125757a.jpg'),
(78, 6, '191024125757b.jpg'),
(91, 6, '191030112311s3.gif'),
(92, 6, '191030112311s4.gif'),
(93, 6, '191030112311s5.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `covers`
--
ALTER TABLE `covers`
  ADD PRIMARY KEY (`cov_id`);

--
-- Indexes for table `imges`
--
ALTER TABLE `imges`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covers`
--
ALTER TABLE `covers`
  MODIFY `cov_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `imges`
--
ALTER TABLE `imges`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

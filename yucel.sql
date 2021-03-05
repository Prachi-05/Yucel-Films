-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 02:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yucel`
--
CREATE DATABASE IF NOT EXISTS `yucel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yucel`;

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

DROP TABLE IF EXISTS `crew`;
CREATE TABLE `crew` (
  `ID` varchar(10) NOT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL,
  `IMAGE` varchar(255) DEFAULT NULL,
  `GIF` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crew`
--

INSERT INTO `crew` (`ID`, `NAME`, `DESCRIPTION`, `IMAGE`, `GIF`) VALUES
('1', 'NEBISH BENBSON', 'DIRECTOR.WRITER.PRODUCER', './assets/images/yucel.jpg', './assets/gifs/original.gif'),
('2', 'SHARAN VELAYUDHAN', 'DIRECTOR . D.O.P', './assets/images/yucel.jpg', './assets/gifs/train.gif'),
('3', 'ALVIN', 'PHOTOGRAPHER', './assets/images/yucel.jpg', './assets/gifs/original.gif');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `WORK_ID` varchar(10) NOT NULL,
  `CREW_ID` varchar(10) DEFAULT NULL,
  `PROJECT` varchar(100) DEFAULT NULL,
  `PROJECT_TYPE` varchar(100) DEFAULT NULL,
  `THUMBNAIL` varchar(255) DEFAULT NULL,
  `PROJECT_LINK` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`WORK_ID`, `CREW_ID`, `PROJECT`, `PROJECT_TYPE`, `THUMBNAIL`, `PROJECT_LINK`) VALUES
('1', '1', 'KANAVU', 'SHORT DOCUMENTARY', './assets/images/yucel.jpg', ''),
('2', '1', 'LAYDA AUTOMATIC SANITISER', 'COMMERCIAL', './assets/images/yucel.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`WORK_ID`),
  ADD KEY `fk_crewid` (`CREW_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `fk_crewid` FOREIGN KEY (`CREW_ID`) REFERENCES `works` (`WORK_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

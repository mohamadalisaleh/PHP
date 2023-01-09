-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2019 at 01:04 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `email1` varchar(30) DEFAULT NULL,
  `download` varchar(30) DEFAULT NULL,
  `load1` varchar(20) DEFAULT NULL,
  `price1` int(30) DEFAULT NULL,
  `shared1` varchar(30) DEFAULT NULL,
  `validity1` varchar(30) DEFAULT NULL,
  `password1` varchar(30) DEFAULT NULL,
  KEY `email1` (`email1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`email1`, `download`, `load1`, `price1`, `shared1`, `validity1`, `password1`) VALUES
('aya.s@gmail.com', '50M', '20M', 50, 'no', '30D', 'aaaa'),
('mosa.s@gmail.com', '100M', '50m', 150, 'yes', '30D', 'bbbb');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `email` varchar(30) NOT NULL DEFAULT '',
  `phone_number` int(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `confirmpassword` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`email`,`confirmpassword`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`email`, `phone_number`, `password`, `confirmpassword`) VALUES
('admin', 503921081, '21232f297a57a5a743894a0e4a801f', 'admin'),
('aya.s@gmail.com', 2147483647, '74b87337454200d4d33f80c4663dc5', 'aaaa'),
('mosa.s@gmail.com', 2147483647, '65ba841e01d6db7733e90a5b7f9e6f', 'bbbb');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`email1`) REFERENCES `reg` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

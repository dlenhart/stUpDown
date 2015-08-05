-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2015 at 06:29 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stats`
--

-- --------------------------------------------------------

--
-- Table structure for table `srvr_status`
--

CREATE TABLE IF NOT EXISTS `srvr_status` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `s_server` varchar(25) NOT NULL,
  `s_status` varchar(3) NOT NULL,
  `s_date` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `srvr_status`
--

INSERT INTO `srvr_status` (`ID`, `s_server`, `s_status`, `s_date`) VALUES
(1, '192.168.1.4', 'yes', '2015-08-04 13:35:38'),
(2, '192.168.1.12', 'yes', '2015-08-04 13:35:38'),
(3, '192.168.1.3', 'no', '2015-08-04 13:35:38'),
(4, '192.168.1.2', 'yes', '2015-08-04 13:35:38'),
(5, '192.168.1.125', 'no', '2015-08-04 13:35:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

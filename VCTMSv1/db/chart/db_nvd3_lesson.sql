-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2018 at 06:25 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_nvd3_lesson`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nvd3_lesson`
--

CREATE TABLE IF NOT EXISTS `tbl_nvd3_lesson` (
  `model` varchar(30) NOT NULL,
  `standard_pcs` decimal(11,0) NOT NULL,
  `actual_pcs` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nvd3_lesson`
--

INSERT INTO `tbl_nvd3_lesson` (`model`, `standard_pcs`, `actual_pcs`) VALUES
('Model A', 21, 22),
('Model B', 8, 10),
('Model C', 18, 20),
('Model D', 4, 5),
('Model E', 7, 3),
('Model G', 9, 7),
('Model H', 25, 22),
('Model A', 18, 20),
('Model B', 16, 20),
('Model C', 18, 20),
('Model D', 15, 20),
('Model E', 15, 20),
('Model F', 15, 20),
('Model G', 15, 20),
('Model H', 15, 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

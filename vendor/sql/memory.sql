-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2022 at 03:06 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oclock`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_scores`
--

DROP TABLE IF EXISTS `t_scores`;
CREATE TABLE IF NOT EXISTS `t_scores` (
  `ScoreID` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(20) NOT NULL,
  `Score` int(11) NOT NULL,
  `Date` timestamp NOT NULL,
  PRIMARY KEY (`ScoreID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_scores`
--

INSERT INTO `t_scores` (`ScoreID`, `Pseudo`, `Score`, `Date`) VALUES
(16, 'Ranger', 10, '2022-04-13 02:18:29'),
(15, 'Amel ma femme', 20, '2022-04-13 02:15:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

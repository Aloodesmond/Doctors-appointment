-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2023 at 12:07 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date1` date NOT NULL,
  `place` varchar(255) NOT NULL,
  `vaccine` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `name`, `age`, `gender`, `date1`, `place`, `vaccine`) VALUES
(8, 'Des', 9, '', '2021-07-07', 'Home', 'BCG,polio1 & Hepatities B'),
(11, 'Jason john', 4, 'Male', '2021-07-20', 'Hospital', 'BCG,polio1 & Hepatities B'),
(10, 'julius', 4, 'Male', '2021-07-19', 'Hospital', 'BCG,polio1 & Hepatities B'),
(9, 'owiso', 23, 'Male', '2021-07-09', 'Hospital', 'BCG,polio1 & Hepatities B'),
(12, 'Nelson', 20, 'Male', '2021-08-18', 'Hospital', 'BCG,polio1 & Hepatities B');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mother`
--

DROP TABLE IF EXISTS `mother`;
CREATE TABLE IF NOT EXISTS `mother` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `patientsid` int NOT NULL,
  `age` int NOT NULL,
  `phone` int NOT NULL,
  `status` varchar(255) NOT NULL,
  `keen` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mother`
--

INSERT INTO `mother` (`id`, `name`, `patientsid`, `age`, `phone`, `status`, `keen`, `date`) VALUES
(27, 'Des', 3, 26, 2147483647, 'Separated', 2147483647, '2023-02-10'),
(23, 'ruth', 12, 47, 713547658, 'Separated', 2147483647, '2023-02-02'),
(26, 'Kelvin', 2, 18, 2147483647, 'Single', 2147483647, '2023-02-03'),
(28, 'patricia', 4, 24, 789706798, 'Married', 2147483647, '2023-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `nextapp`
--

DROP TABLE IF EXISTS `nextapp`;
CREATE TABLE IF NOT EXISTS `nextapp` (
  `id` int NOT NULL AUTO_INCREMENT,
  `weight` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `temp` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `vaccine1` varchar(255) NOT NULL,
  `date2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nextapp`
--

INSERT INTO `nextapp` (`id`, `weight`, `height`, `temp`, `age`, `vaccine1`, `date2`) VALUES
(10, '3.7', '14', '27', 7, 'Flue Vaccine', '2021-07-08'),
(12, '2.5', '19', '27', 4, 'Flue Vaccine', '2021-07-30'),
(13, '4.5', '13', '27', 4, 'Polio 2,Pentavalent & Rotarix', '2021-08-18'),
(14, '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

DROP TABLE IF EXISTS `sms`;
CREATE TABLE IF NOT EXISTS `sms` (
  `phone` mediumint NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

DROP TABLE IF EXISTS `visit`;
CREATE TABLE IF NOT EXISTS `visit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `appid` int NOT NULL,
  `mname` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `email` varchar(2555) NOT NULL,
  `datev` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`id`, `appid`, `mname`, `cname`, `email`, `datev`) VALUES
(7, 2, 'lenon', 'ken', 'ken@gmail.com', '2023-02-04'),
(5, 15, 'Irene', 'Michael', 'gretttt@gmail.com', '2021-09-10'),
(8, 3, 'mary', 'mary', 'mary@gmail.com', '2023-02-10'),
(9, 5, 'prime', 'grut', 'prime@gmail.com', '2023-02-09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2014 at 02:30 PM
-- Server version: 5.5.32-MariaDB
-- PHP Version: 5.5.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `freeseats`
--

CREATE TABLE IF NOT EXISTS `freeseats` (
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `floor` int(11) NOT NULL,
  `seats` decimal(10,0) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`location`,`floor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `freeseats`
--

INSERT INTO `freeseats` (`location`, `floor`, `seats`, `date`) VALUES
('', 0, '0', '2014-06-15 00:00:00'),
('27, rue St-Guillaume', 1, '26', '2014-06-15 18:26:00'),
('27, rue St-Guillaume', 2, '93', '2014-06-15 21:09:00'),
('27, rue St-Guillaume', 3, '41', '2014-06-15 18:40:00'),
('27, rue St-Guillaume', 4, '2', '2014-06-16 09:39:00'),
('27, rue St-Guillaume', 5, '3', '2014-06-15 21:09:00'),
('27, rue St-Guillaume', 9, '9', '2014-06-16 08:32:00'),
('28, rue des Sts-Pères', 4, '20', '2014-06-16 09:43:00'),
('56, rue des Sts-Pères', 2, '20', '2014-06-16 12:50:00'),
('56, rue des Sts-Pères', 3, '2', '2014-06-16 10:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`) VALUES
(1, 'caesar', '$1$50$GHABNWBNE/o4VL7QjmQ6x0'),
(2, 'hirschhorn', '$1$50$lJS9HiGK6sphej8c4bnbX.'),
(3, 'jharvard', '$1$50$RX3wnAMNrGIbgzbRYrxM1/'),
(4, 'malan', '$1$HA$azTGIMVlmPi9W9Y12cYSj/'),
(5, 'milo', '$1$HA$6DHumQaK4GhpX8QE23C8V1'),
(6, 'skroob', '$1$50$euBi4ugiJmbpIbvTTfmfI.'),
(7, 'zamyla', '$1$50$uwfqB45ANW.9.6qaQ.DcF.'),
(8, 'vic', '$1$zCs0reH9$xiNfB4u1yzh9d3tuT6jke/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2014 at 05:48 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'piyush');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `regular` varchar(255) NOT NULL,
  `leet` varchar(255) NOT NULL,
  `migration` int(255) NOT NULL,
  `rsr` varchar(2552) NOT NULL,
  `rer` varchar(255) NOT NULL,
  `lsr` varchar(2552) NOT NULL,
  `ler` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `batch`, `branch`, `class`, `section`, `regular`, `leet`, `migration`, `rsr`, `rer`, `lsr`, `ler`) VALUES
(2, '2011', 'COMPUTER SCIENCE ENGINEERING', 'D4CSE', 'C', '22', '23', 3, '123', '145', '11', '34');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE IF NOT EXISTS `coordinator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`id`, `fname`, `lname`, `uname`, `dept`, `email`, `pass`) VALUES
(2, 'Ajayji', 'Shiv', 'ajayshiv1411', 'ELECTRICAL ENGINEERING', '2ajay@gmail.com', 'FF3onk6Z');

-- --------------------------------------------------------

--
-- Table structure for table `evaluators`
--

CREATE TABLE IF NOT EXISTS `evaluators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dept` varchar(120) NOT NULL,
  `email` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `evaluators`
--

INSERT INTO `evaluators` (`id`, `fname`, `lname`, `uname`, `pass`, `dept`, `email`) VALUES
(2, 'piyush', 'kapoor', 'Piyushkapoor786', 'zDWPzHYn', 'COMPUTER APPLICATION', 'piyushkapoor786@gmaail.com');

-- --------------------------------------------------------

--
-- Table structure for table `external marks`
--

CREATE TABLE IF NOT EXISTS `external marks` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  PRIMARY KEY (`idr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `internal marks`
--

CREATE TABLE IF NOT EXISTS `internal marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(255) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `mgr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`id`, `class_id`, `mgr`) VALUES
(7, 2, '1234'),
(11, 2, '12344'),
(12, 2, '1144794');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

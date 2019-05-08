-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2014 at 08:38 AM
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
(2, 'Ajayji', 'Shiv', 'ajayshiv1411', 'ELECTRICAL ENGINEERING', '2ajay@gmail.com', 'ajay');

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
(2, 'piyush', 'kapoor', 'Piyushkapoor786', '123', 'COMPUTER APPLICATION', 'piyushkapoor786@gmaail.com');

-- --------------------------------------------------------

--
-- Table structure for table `internal marks`
--

CREATE TABLE IF NOT EXISTS `internal marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `rfc` varchar(255) NOT NULL,
  `ccd` varchar(255) NOT NULL,
  `dct` varchar(255) NOT NULL,
  `pre` varchar(255) NOT NULL,
  `ppt` varchar(255) NOT NULL,
  `pde` varchar(255) NOT NULL,
  `ins` varchar(255) NOT NULL,
  `dep` varchar(2552) NOT NULL,
  `pts` varchar(255) NOT NULL,
  `dme` varchar(255) NOT NULL,
  `mpw` varchar(255) NOT NULL,
  `opw` varchar(255) NOT NULL,
  `ses` varchar(255) NOT NULL,
  `rfw` varchar(255) NOT NULL,
  `ipd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `internal marks`
--

INSERT INTO `internal marks` (`id`, `student_id`, `rfc`, `ccd`, `dct`, `pre`, `ppt`, `pde`, `ins`, `dep`, `pts`, `dme`, `mpw`, `opw`, `ses`, `rfw`, `ipd`) VALUES
(2, '1', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', ' Acceptable ', 'Excellent'),
(3, '4', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Acceptable', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `m_obt` varchar(255) NOT NULL,
  `m_max` varchar(255) NOT NULL,
  `regular` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `batch`, `branch`, `class`, `roll_no`, `m_obt`, `m_max`, `regular`, `subject`, `name`, `section`, `semester`) VALUES
(1, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183691', '475', '500', 'Regular', 'Ind. Trg.', 'BALJEET SINGH', 'D', '8'),
(2, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183692', '470', '500', 'Regular', 'Ind. Trg.', 'DALJIT KAUR', 'D', '8'),
(3, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183693', '465', '500', 'Regular', 'Ind. Trg.', 'DHEERAJ KUMAR SAHNI', 'D', '8'),
(4, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183695', '460', '500', 'Regular', 'Ind. Trg.', 'GURPREET KAUR', 'D', '8'),
(5, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183697', '445', '500', 'Regular', 'Ind. Trg.', 'HARDEEP KAUR', 'D', '8'),
(6, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183699', '458', '500', 'Regular', 'Ind. Trg.', 'HARMANPREET KAUR', 'D', '8'),
(7, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183700', '478', '500', 'Regular', 'Ind. Trg.', 'INDERPREET SINGH', 'D', '8'),
(8, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183701', '465', '500', 'Regular', 'Ind. Trg.', 'INDRMOHAN SINGH', 'D', '8'),
(9, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183703', '470', '500', 'Regular', 'Ind. Trg.', 'JASPREET KAUR', 'D', '8'),
(10, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183704', '425', '500', 'Regular', 'Ind. Trg.', 'JASPREET SINGH', 'D', '8'),
(11, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183706', '465', '500', 'Regular', 'Ind. Trg.', 'JASWANT SINGH', 'D', '8'),
(12, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183707', '425', '500', 'Regular', 'Ind. Trg.', 'JOTVINDER KAUR', 'D', '8'),
(13, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183708', '475', '500', 'Regular', 'Ind. Trg.', 'MANVIR KAUR', 'D', '8'),
(14, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183709', '460', '500', 'Regular', 'Ind. Trg.', 'NAVDEEP KAUR', 'D', '8'),
(15, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183713', '460', '500', 'Regular', 'Ind. Trg.', 'PRABHJOT KAUR', 'D', '8'),
(16, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183716', '465', '500', 'Regular', 'Ind. Trg.', 'RAMANDEEP KAUR', 'D', '8'),
(17, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183719', '475', '500', 'Regular', 'Ind. Trg.', 'SONIA', 'D', '8'),
(18, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1183720', '460', '500', 'Regular', 'Ind. Trg.', 'VIVEK THAKUR', 'D', '8'),
(19, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1184706', '440', '500', 'Regular', 'Ind. Trg.', 'HARSIMRAN KAUR ', 'D', '8'),
(20, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R1187887', '480', '500', 'Regular', 'Ind. Trg.', 'NAMITA KAPOOR ', 'D', '8'),
(21, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306877', '440', '500', 'Regular', 'Ind. Trg.', 'PARMESARJOT SINGH RANDHAWA', 'D', '8'),
(22, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306878', '475', '500', 'Regular', 'Ind. Trg.', 'PIYUSH PARKASH', 'D', '8'),
(23, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306880', '480', '500', 'Regular', 'Ind. Trg.', 'PREETJOT KAUR', 'D', '8'),
(24, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306881', '440', '500', 'Regular', 'Ind. Trg.', 'RAJWINDER SINGH', 'D', '8'),
(25, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306882', '450', '500', 'Regular', 'Ind. Trg.', 'RAVISHER SINGH', 'D', '8'),
(26, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306883', '430', '500', 'Regular', 'Ind. Trg.', 'RAVI BHUSHAN PASWAN', 'D', '8'),
(27, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306884', '455', '500', 'Regular', 'Ind. Trg.', 'RAVNEET KAUR', 'D', '8'),
(28, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306885', '460', '500', 'Regular', 'Ind. Trg.', 'RIPANJIT KAUR', 'D', '8'),
(29, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306886', '470', '500', 'Regular', 'Ind. Trg.', 'RISHABH JAIN', 'D', '8'),
(30, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306887', '470', '500', 'Regular', 'Ind. Trg.', 'RISHAM KAUR GURAM', 'D', '8'),
(31, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306888', '460', '500', 'Regular', 'Ind. Trg.', 'ROHAN GOYAL', 'D', '8'),
(32, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306889', '460', '500', 'Regular', 'Ind. Trg.', 'RUPINDER KAUR', 'D', '8'),
(33, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306890', '450', '500', 'Regular', 'Ind. Trg.', 'RUPINDER KAUR', 'D', '8'),
(34, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306891', '460', '500', 'Regular', 'Ind. Trg.', 'RUPINDER KAUR', 'D', '8'),
(35, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306892', '430', '500', 'Regular', 'Ind. Trg.', 'RUPINDER SINGH', 'D', '8'),
(36, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306893', '480', '500', 'Regular', 'Ind. Trg.', 'SAPANDEEP KAUR', 'D', '8'),
(37, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306894', '470', '500', 'Regular', 'Ind. Trg.', 'SARBPREET KAUR', 'D', '8'),
(38, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306895', '460', '500', 'Regular', 'Ind. Trg.', 'SHUBREET KAUR BRAR', 'D', '8'),
(39, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306896', '475', '500', 'Regular', 'Ind. Trg.', 'SIMRAT SIDHU', 'D', '8'),
(40, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306897', '475', '500', 'Regular', 'Ind. Trg.', 'SIPPY SOKHI', 'D', '8'),
(41, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306898', '450', '500', 'Regular', 'Ind. Trg.', 'SUKHSAGAR SINGH', 'D', '8'),
(42, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306899', '425', '500', 'Regular', 'Ind. Trg.', 'SUKHVIR SINGH', 'D', '8'),
(43, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306900', '430', '500', 'Regular', 'Ind. Trg.', 'SUKHWINDER SINGH', 'D', '8'),
(44, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306901', '460', '500', 'Regular', 'Ind. Trg.', 'SUMANPREET KAUR', 'D', '8'),
(45, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306902', '470', '500', 'Regular', 'Ind. Trg.', 'TANIA MADANN', 'D', '8'),
(46, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306903', '470', '500', 'Regular', 'Ind. Trg.', 'VANDANA TOOR', 'D', '8'),
(47, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306904', '480', '500', 'Regular', 'Ind. Trg.', 'VANSHIKA JAIN', 'D', '8'),
(48, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370306906', '425', '500', 'Regular', 'Ind. Trg.', 'VIKRAMJEET SINGH', 'D', '8'),
(49, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370380109', '450', '500', 'Regular', 'Ind. Trg.', 'AMANJOT SINGH', 'D', '8'),
(50, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370380687', '425', '500', 'Regular', 'Ind. Trg.', 'BHUVESH GARG', 'D', '8'),
(51, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370380688', '478', '500', 'Regular', 'Ind. Trg.', 'HARSIMAR KAUR', 'D', '8'),
(52, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370380689', '484', '500', 'Regular', 'Ind. Trg.', 'JEEVAN BHATIA', 'D', '8'),
(53, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370380690', '460', '500', 'Regular', 'Ind. Trg.', 'KHUSHI SINGLA', 'D', '8'),
(54, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370380691', '475', '500', 'Regular', 'Ind. Trg.', 'MOHIT KUMAR GAMBHIR', 'D', '8'),
(55, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370380692', '465', '500', 'Regular', 'Ind. Trg.', 'NAVNEET KAUR', 'D', '8'),
(56, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370380693', '465', '500', 'Regular', 'Ind. Trg.', 'PAVNEET SINGH', 'D', '8'),
(57, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370380694', '480', '500', 'Regular', 'Ind. Trg.', 'PREETIKA KAUR', 'D', '8'),
(59, '2014', 'CIVIL ENGINEERING', 'D4CSE', 'R100370824982', '500', '500', 'Regular', 'Ind. Trg.', 'HARSHPREET KAUR', 'D', '8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 06:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinerec`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `applicationID` int(11) NOT NULL AUTO_INCREMENT,
  `jobID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`applicationID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`applicationID`, `jobID`, `userID`, `name`, `email`, `contact`, `description`) VALUES
(1, 2, 7, 'Amila', 'amila@gmail.com', 714250875, 'im qualified in Al with bio stream with ABB passes. and i have expericed of 2 years in another company'),
(2, 2, 7, 'isuru', 'chhaa@gmail.com', 714250875, 'im have experince of 4years in this filed');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `jobID` int(11) NOT NULL AUTO_INCREMENT,
  `catagory` varchar(20) NOT NULL,
  `picURL` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Industry` varchar(50) NOT NULL,
  `JobType` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`jobID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobID`, `catagory`, `picURL`, `Title`, `Industry`, `JobType`, `Location`, `Description`, `Address`, `Contact`) VALUES
(7, 'Medicine', 'images/lab.png', 'Medical Laboratory Technician', 'Medical / Biotech', 'Full time', 'Nawaloka Hospital PLC', 'We have emerged as a well established and leading group of companies engaged in the health care. We ', 'Colombo', '0714250875'),
(8, 'Medicine', 'images/lab.png', 'Laboratory Technician', 'Medical / Biotech', 'Full time', 'Nawaloka Hospital PLC', 'We have emerged as a well established and leading group of companies engaged in the health care. We invite applications for.\r\nMedical Laboratory Technician', 'Colombo', '0714250875'),
(9, 'Transportation', 'images/trans.png', 'Courier Rider', 'Transportation', 'Contract', 'budgetTaxi', 'Need personal driver for a company director. Salary 25000+OT+allowances+annual attractive bonus. Age between 30-40 years.', 'Colombo', '0714250875'),
(10, 'Teaching', 'images/teach.png', 'Pre School Teacher', 'Teaching', 'Full time', 'GANIKMO PRE SCHOOL GREEN ', 'VACANCY FOR TEACHER FOR GANIKMO PRE SCHOOL GREEN GLADE PARK, GONAHENA, KADAWATHA.\r\nAGE BETWEEN 20-35', 'KADAWATHA.', '0714250875'),
(11, 'Security', 'images/security.png', 'Security Officers', 'Security', 'Full time', 'Auto Court', 'We operate Sri Lanka’s leading Automotive Workshop with a 65 plus year history. Our brand name is known for precision automotive engineering amongst many generations of vehicle owners in Sri Lanka. Currently our company employs 200 plus automotive engineers specializing in Diesel and Petrol engines. ', 'Colombo', '0714250875');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstname`, `lastname`, `dob`, `gender`, `address`, `mobile`, `email`, `password`) VALUES
(1, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'a', 'a', 'a', 'male', 'a', NULL, NULL, NULL),
(3, 'a', 'a', 'a', 'male', 'a', '714250875', NULL, 'a'),
(4, 'a', 'a', 'a', 'male', 'a', '714250875', 'asdasd', 'a'),
(5, 'amila', 'a', 'a', 'male', 'a', '0714250875', 'soo.isurunath@gmail.com', 'a'),
(6, 'a', 'a', 'a', 'male', 'a', '0714250875', 'isoo.isurunath@gmail.com', 'a'),
(7, 'Amila', 'Isurunath', '07/15/93', 'male', 'Colombo', '0714250875', '123@gmail.com', '123'),
(8, 'test', 'test', '12/2/39', 'male', 'Colombo', '0714250875', 'isoo@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

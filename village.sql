-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2013 at 05:17 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `village`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`) VALUES
('kiran', 'kiran', 'user'),
('user', 'user', 'user'),
('yatramantra', 'ss', 'user'),
('admin', 'admin', 'admin'),
('safasffsf', 's', 'user'),
('aaa', 'aaa', 'user'),
('1', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `address`, `phone`, `username`, `pass`) VALUES
('sarankumar', 'yatramantraonline@gmail.com', 'Thachupara,vazhavara po', 2147483647, '7', ''),
('admin', 'zarankumar@gmail.com', 'thachupara', 2147483647, '1', ''),
('kiran', 'yatramantraoaaanline@gmail.com', 'afas', 333, 'kiran', ''),
('aaa', 'aaa@gmail.com', 'adas', 24234, 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `username` varchar(20) NOT NULL,
  `certificate` varchar(75) NOT NULL,
  `applydate` varchar(20) NOT NULL,
  `reviewdate` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`username`, `certificate`, `applydate`, `reviewdate`, `status`) VALUES
('admin', 'INCOME CERTIFICATE', '16-03-13', '17-03-13', 'approved'),
('admin', 'RELIGION', '16-03-13', '17-03-13', 'rejected'),
('aaa', 'NATIVITY', '17-03-13', '17-03-13', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `userid` varchar(20) NOT NULL,
  `certificate` varchar(25) NOT NULL,
  `path` varchar(100) NOT NULL,
  `up_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`userid`, `certificate`, `path`, `up_date`) VALUES
('admin', 'DRIVING LICENCE', 'upload/DRIVING LICENCE-admin.j', '0000-00-00'),
('admin', 'RATION CARD', 'upload/RATION CARD-admin.jpg', '0000-00-00'),
('admin', 'PLUS TWO', 'http://localhost/village/uploa', '2013-03-11'),
('admin', 'SSLC', 'http://localhost/village/upload/SSLC-admin.jpg', '2013-03-11'),
('admin', 'PLUS TWO', 'http://localhost/village/upload/PLUS TWO-admin.jpg', '2013-03-17'),
('admin', 'DRIVING LICENCE', 'http://localhost/village/upload/DRIVING LICENCE-admin.jpg', '2013-03-17'),
('admin', 'RATION CARD', 'http://localhost/village/upload/RATION CARD-admin.jpg', '2013-03-17'),
('aaa', 'SSLC', 'http://localhost/village/upload/SSLC-aaa.jpg', '2013-03-17'),
('aaa', 'PLUS TWO', 'http://localhost/village/upload/PLUS TWO-aaa.jpg', '2013-03-17'),
('aaa', 'DRIVING LICENCE', 'http://localhost/village/upload/DRIVING LICENCE-aaa.jpg', '2013-03-17'),
('aaa', 'RATION CARD', 'http://localhost/village/upload/RATION CARD-aaa.jpg', '2013-03-17');

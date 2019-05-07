-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2017 at 02:28 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `uname` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `addr` varchar(240) NOT NULL,
  `sd` date NOT NULL,
  `ad` date NOT NULL,
  `np` int(240) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`uname`, `email`, `addr`, `sd`, `ad`, `np`) VALUES
('dhaval', 'dh@jk.com', 'f2 sanskrut app ', '1234-12-12', '5623-06-05', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(240) NOT NULL,
  `lname` varchar(240) NOT NULL,
  `dob` date NOT NULL,
  `no` int(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `uname` varchar(240) NOT NULL,
  `pass` varchar(240) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='user data';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `dob`, `no`, `email`, `uname`, `pass`) VALUES
('dhaval', 'patel', '1212-12-12', 1234567890, 'dh@gmail.com', 'ddwqd', '123456'),
('abhi', 'rathod', '1998-04-26', 1234567890, 'ab@kiefewfl.com', 'abhi26', '1234'),
('dha', 'pa', '1212-12-12', 1234567890, 'dhavalpatel1996@yahoo.com', 'dhaval', '123'),
('dhaval', 'patel', '3232-02-23', 1234567890, 'dh@hj.com', 'dhaval', '12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

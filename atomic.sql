-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2016 at 08:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atomic`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE IF NOT EXISTS `birthday` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthday` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthday`
--

INSERT INTO `birthday` (`id`, `name`, `birthday`) VALUES
(1, 'etrh5ehyt', '0000-00-00'),
(2, 'etrh5ehytftrhtrht', '0000-00-00'),
(3, 'tyt4hg', '2016-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
`id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`) VALUES
(1, ' 654thy6th6t'),
(2, ' 654thy6th6t'),
(3, ' 654thy6th6t'),
(4, 'ear'),
(5, 'gyjkuk6uk'),
(6, '123'),
(7, 'bangla'),
(8, 'sunday'),
(9, 'Monday'),
(10, 'edgfrfrrfrr'),
(11, 'ewfereerstgterg');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` int(11) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(1, 'Dhaka'),
(2, 'Barisal');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
`id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `email`, `name`) VALUES
(5, 'shibly006@gmail.com', 'sha');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(80) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`, `gender`) VALUES
(1, 'name', 'Male'),
(2, 'xyz', 'Female'),
(3, 'zxz', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `summarry`
--

CREATE TABLE IF NOT EXISTS `summarry` (
`id` int(11) NOT NULL,
  `company` varchar(80) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summarry`
--

INSERT INTO `summarry` (`id`, `company`, `summary`) VALUES
(1, 'fhgterg', 'segergerg'),
(2, 'edytrjh5rytjh', 'tfdjhy'),
(3, 'dsgerwg', 'When we think of absolute paths unlike a website url paths in PHP are UNIX based therefore they will refer the furthest level up in the server our logged in user can access');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthday`
--
ALTER TABLE `birthday`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summarry`
--
ALTER TABLE `summarry`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthday`
--
ALTER TABLE `birthday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `summarry`
--
ALTER TABLE `summarry`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

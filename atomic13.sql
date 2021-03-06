-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2016 at 08:32 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atomic13`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE IF NOT EXISTS `birthday` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthday` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthday`
--

INSERT INTO `birthday` (`id`, `name`, `birthday`) VALUES
(1, 'etrh5ehyt', '0000-00-00'),
(2, 'etrh5ehytftrhtrht', '0000-00-00'),
(3, 'tyt4hg', '2016-01-20'),
(4, 'ytrjhdxsjydytrjdyjrzstjhyrjdrsytjdrsyj', '2016-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
`id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `author`) VALUES
(15, 'dfgf', 'sdfghrfghb'),
(16, 'knbkdfvhfvh', 'elkfhnvoeifghbj'),
(17, 'kolbnortbi', 'a;e,lvnpfbvjher'),
(19, 'dsfgsefbg', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `name`) VALUES
(5, 'Dhaka', 'erth');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
`id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `email`, `name`) VALUES
(5, 'shibly006@gmail.com', 'sha'),
(6, 'ytfujmfythjm@gmailcom', 'tyj');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(80) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`, `gender`) VALUES
(1, 'name', 'Male'),
(2, 'xyz', 'Female'),
(3, 'zxz', 'Male'),
(4, 'fgjntfrjntfryjn', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE IF NOT EXISTS `hobby` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hobby` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`id`, `name`, `hobby`) VALUES
(2, 'fghdsrtgh', 'a:2:{i:0;s:9:"Gardening";i:1;s:16:"Stamp Collection";}'),
(4, 'rthsrthr', 'a:3:{i:0;s:16:"Stamp Collection";i:1;s:9:"Traveling";i:2;s:13:"Reading Books";}'),
(5, 'kjgbjgujguj', 'a:2:{i:0;s:9:"Traveling";i:1;s:13:"Reading Books";}'),
(6, 'name2', 'a:2:{i:0;s:9:"Gardening";i:1;s:13:"Reading Books";}');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `image`) VALUES
(5, 'kjhgoi', '39742_S_Blood-Donor.jpg'),
(7, 'name', 'shanta.png');

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

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `terms` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `name`, `terms`) VALUES
(1, 'rthedrt', ''),
(2, 'name', 'accepted'),
(3, 'Name1', 'accepted'),
(4, 'name2', 'accepted');

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
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summarry`
--
ALTER TABLE `summarry`
 ADD PRIMARY KEY (`id`), ADD KEY `company` (`company`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthday`
--
ALTER TABLE `birthday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `summarry`
--
ALTER TABLE `summarry`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2016 at 05:39 PM
-- Server version: 5.5.44-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sample_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE IF NOT EXISTS `businesses` (
`id` int(255) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL COMMENT 'Post title',
  `address` varchar(255) NOT NULL,
  `introtext` text NOT NULL,
  `maintext` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Truncate table before insert `businesses`
--

TRUNCATE TABLE `businesses`;
--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `date`, `title`, `address`, `introtext`, `maintext`) VALUES
(2, '2008-10-27', 'Commercial Bank Plc', 'Gangarama Colombo 02', '<p>Hellow Commercial Bank Plc Srilanka</p>', '<p>Even the <em>read more</em> works!</p>'),
(3, '2008-11-02', 'Sampath Bank Plc', 'Gangarama Road, Colombo 03', '<p>Private budist bank in Srilanka</p>', '<p> And in the future: Making this blog bigger & better!</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

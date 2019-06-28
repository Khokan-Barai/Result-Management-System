-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2019 at 04:16 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `eight`
--

DROP TABLE IF EXISTS `eight`;
CREATE TABLE IF NOT EXISTS `eight` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse305` float NOT NULL,
  `cse306` float NOT NULL,
  `cse307` float NOT NULL,
  `cse308` float NOT NULL,
  `cse313` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eight`
--

INSERT INTO `eight` (`roll`, `batch`, `cse305`, `cse306`, `cse307`, `cse308`, `cse313`, `final`) VALUES
(1, 'd41', 3.33, 3.7, 3.5, 3.7, 3.7, 3.68),
(5, 'd41', 3.25, 3.52, 3.75, 3.62, 3.82, 3.54);

-- --------------------------------------------------------

--
-- Table structure for table `eleven`
--

DROP TABLE IF EXISTS `eleven`;
CREATE TABLE IF NOT EXISTS `eleven` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse405` float NOT NULL,
  `cse406` float NOT NULL,
  `cse407` float NOT NULL,
  `cse408` float NOT NULL,
  `cse411` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eleven`
--

INSERT INTO `eleven` (`roll`, `batch`, `cse405`, `cse406`, `cse407`, `cse408`, `cse411`, `final`) VALUES
(1, 'd41', 3.33, 3.22, 3.33, 3.44, 3.55, 3.33),
(8, 'd45', 3.11, 3.22, 3.33, 3.44, 3.55, 3.44);

-- --------------------------------------------------------

--
-- Table structure for table `five`
--

DROP TABLE IF EXISTS `five`;
CREATE TABLE IF NOT EXISTS `five` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse203` float NOT NULL,
  `cse204` float NOT NULL,
  `cse205` float NOT NULL,
  `cse206` float NOT NULL,
  `math202` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `five`
--

INSERT INTO `five` (`roll`, `batch`, `cse203`, `cse204`, `cse205`, `cse206`, `math202`, `final`) VALUES
(1, 'd41', 3.33, 4, 3.75, 3.5, 4, 3.75),
(10, 'd41', 3.33, 3.55, 3.22, 3.44, 3.66, 3.55);

-- --------------------------------------------------------

--
-- Table structure for table `four`
--

DROP TABLE IF EXISTS `four`;
CREATE TABLE IF NOT EXISTS `four` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse201` float NOT NULL,
  `eee201` float NOT NULL,
  `eee202` float NOT NULL,
  `ged201` float NOT NULL,
  `math201` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `four`
--

INSERT INTO `four` (`roll`, `batch`, `cse201`, `eee201`, `eee202`, `ged201`, `math201`, `final`) VALUES
(1, 'd41', 3.33, 3.25, 4, 3.75, 2.75, 3.13),
(8, 'd41', 3.33, 3.55, 3.55, 3.44, 3.66, 3.55),
(10, 'd41', 3.33, 3.55, 3.55, 3.44, 3.66, 3.55);

-- --------------------------------------------------------

--
-- Table structure for table `nine`
--

DROP TABLE IF EXISTS `nine`;
CREATE TABLE IF NOT EXISTS `nine` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse309` float NOT NULL,
  `cse310` float NOT NULL,
  `cse311` float NOT NULL,
  `cse312` float NOT NULL,
  `cse315` float NOT NULL,
  `cse317` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nine`
--

INSERT INTO `nine` (`roll`, `batch`, `cse309`, `cse310`, `cse311`, `cse312`, `cse315`, `cse317`, `final`) VALUES
(1, 'd41', 3.11, 3.33, 3.33, 3.44, 3.55, 3.66, 3.55),
(2, 'd41', 3.11, 3.33, 3.44, 3.55, 3.66, 3.55, 3.44);

-- --------------------------------------------------------

--
-- Table structure for table `one`
--

DROP TABLE IF EXISTS `one`;
CREATE TABLE IF NOT EXISTS `one` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse101` float NOT NULL,
  `phy101` float NOT NULL,
  `ged101` float NOT NULL,
  `ged102` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `one`
--

INSERT INTO `one` (`roll`, `batch`, `cse101`, `phy101`, `ged101`, `ged102`, `final`) VALUES
(1, 'd41', 3.22, 3.33, 3.44, 3.55, 3.55),
(5, 'd42', 3.75, 3.35, 2.5, 5.5, 2.1),
(8, 'd41', 3.22, 3.33, 3.44, 3.55, 3.53),
(52, 'd41', 3.75, 3.58, 3.44, 3.45, 3.53);

-- --------------------------------------------------------

--
-- Table structure for table `seven`
--

DROP TABLE IF EXISTS `seven`;
CREATE TABLE IF NOT EXISTS `seven` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse301` float NOT NULL,
  `cse302` float NOT NULL,
  `cse303` float NOT NULL,
  `cse304` float NOT NULL,
  `eee301` float NOT NULL,
  `ged301` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seven`
--

INSERT INTO `seven` (`roll`, `batch`, `cse301`, `cse302`, `cse303`, `cse304`, `eee301`, `ged301`, `final`) VALUES
(1, 'd41', 3.33, 4, 3.75, 3.75, 3.75, 3.5, 3.61),
(5, 'd42', 2.3, 3.3, 3.75, 3.75, 3.75, 3.5, 3.68);

-- --------------------------------------------------------

--
-- Table structure for table `six`
--

DROP TABLE IF EXISTS `six`;
CREATE TABLE IF NOT EXISTS `six` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse207` float NOT NULL,
  `cse208` float NOT NULL,
  `cse209` float NOT NULL,
  `ged202` float NOT NULL,
  `math203` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `six`
--

INSERT INTO `six` (`roll`, `batch`, `cse207`, `cse208`, `cse209`, `ged202`, `math203`, `final`) VALUES
(1, 'd41', 3.33, 3.5, 4, 3.75, 4, 3.75),
(5, 'd42', 2.6, 3.3, 2.5, 3.75, 3.5, 3.75),
(10, 'd42', 2.6, 3.3, 4, 3.75, 3.5, 3.75),
(3, 'd42', 2.6, 3.3, 4, 3.75, 3.5, 3.75),
(1, 'd45', 2.6, 3.5, 4, 3.75, 3.5, 3.68),
(7, 'd42', 4, 3.3, 4, 3.75, 3.5, 3.75),
(8, 'd41', 3.11, 3.22, 3.33, 3.44, 3.55, 3.35);

-- --------------------------------------------------------

--
-- Table structure for table `studata`
--

DROP TABLE IF EXISTS `studata`;
CREATE TABLE IF NOT EXISTS `studata` (
  `reg` int(10) NOT NULL,
  `roll` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `batch` varchar(10) NOT NULL,
  PRIMARY KEY (`reg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studata`
--

INSERT INTO `studata` (`reg`, `roll`, `name`, `batch`) VALUES
(103538, 48, 'Khokan Barai', 'd41'),
(102986, 1, 'Susanto Ray', 'd41'),
(102310, 52, 'Nur -E -Jannat Mishu', 'd41'),
(103127, 13, 'Urmi', 'd41');

-- --------------------------------------------------------

--
-- Table structure for table `tecdata`
--

DROP TABLE IF EXISTS `tecdata`;
CREATE TABLE IF NOT EXISTS `tecdata` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tecdata`
--

INSERT INTO `tecdata` (`username`, `password`) VALUES
('arpita', 'arpita'),
('belali', 'belali'),
('jilani', 'jilani');

-- --------------------------------------------------------

--
-- Table structure for table `ten`
--

DROP TABLE IF EXISTS `ten`;
CREATE TABLE IF NOT EXISTS `ten` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse401` float NOT NULL,
  `cse402` float NOT NULL,
  `cse403` float NOT NULL,
  `cse404` float NOT NULL,
  `cse409` float NOT NULL,
  `cse410` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ten`
--

INSERT INTO `ten` (`roll`, `batch`, `cse401`, `cse402`, `cse403`, `cse404`, `cse409`, `cse410`, `final`) VALUES
(1, 'd41', 3.33, 3.22, 3.33, 3.44, 3.55, 3.66, 3.44),
(5, 'd42', 3.11, 3.22, 2.55, 3.44, 4.33, 3.66, 3.53);

-- --------------------------------------------------------

--
-- Table structure for table `three`
--

DROP TABLE IF EXISTS `three`;
CREATE TABLE IF NOT EXISTS `three` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse105` float NOT NULL,
  `cse106` float NOT NULL,
  `chem101` float NOT NULL,
  `chem102` float NOT NULL,
  `eng102` float NOT NULL,
  `math102` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `three`
--

INSERT INTO `three` (`roll`, `batch`, `cse105`, `cse106`, `chem101`, `chem102`, `eng102`, `math102`, `final`) VALUES
(1, 'd41', 3.33, 3.75, 2.5, 3.5, 3.5, 2.75, 3.09),
(8, 'd42', 3.11, 3.22, 3.33, 3.44, 3.55, 3.66, 3.54),
(8, 'd41', 3.11, 3.22, 3.33, 3.44, 3.55, 3.66, 3.53),
(10, 'd42', 3.11, 3.55, 2.56, 3.44, 3.55, 3.66, 3.44);

-- --------------------------------------------------------

--
-- Table structure for table `twelve`
--

DROP TABLE IF EXISTS `twelve`;
CREATE TABLE IF NOT EXISTS `twelve` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse413` float NOT NULL,
  `cse414` float NOT NULL,
  `cse425` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twelve`
--

INSERT INTO `twelve` (`roll`, `batch`, `cse413`, `cse414`, `cse425`, `final`) VALUES
(1, 'd41', 3.33, 3.44, 3.33, 3.44),
(5, 'd45', 3.33, 3.44, 3.55, 3.33);

-- --------------------------------------------------------

--
-- Table structure for table `two`
--

DROP TABLE IF EXISTS `two`;
CREATE TABLE IF NOT EXISTS `two` (
  `roll` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cse103` float NOT NULL,
  `cse104` float NOT NULL,
  `phy103` float NOT NULL,
  `phy104` float NOT NULL,
  `eng101` float NOT NULL,
  `math101` float NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `two`
--

INSERT INTO `two` (`roll`, `batch`, `cse103`, `cse104`, `phy103`, `phy104`, `eng101`, `math101`, `final`) VALUES
(1, 'd41', 3.33, 3.75, 3.5, 3, 3.25, 4, 3.59),
(5, 'd41', 3.11, 2.22, 3.55, 3.85, 3.22, 4, 3.52),
(9, 'd41', 3.11, 1.22, 2.22, 3.33, 4, 3.66, 3.53),
(8, 'd41', 3.11, 3.22, 3.33, 3.85, 3.22, 3.66, 3.55),
(10, 'd41', 3.11, 2.22, 3.33, 3.44, 3.55, 3.66, 3.55),
(49, 'd42', 3.11, 1.22, 3.33, 3.44, 3.55, 3.66, 3.53),
(5, 'd42', 3.5, 3.22, 3.55, 3.44, 3.22, 4, 3.53);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

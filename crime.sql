-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2015 at 05:26 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `ID` int(50) NOT NULL auto_increment,
  `IDno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` text NOT NULL,
  `adress` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `complain` varchar(1000) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`ID`, `IDno`, `name`, `sex`, `adress`, `phone`, `occupation`, `time`, `date`, `complain`) VALUES
(1, '2332', 'qwewqd', 'Female', '12323', 2147483647, 'opokomcijc', '00:00:00', '2015-02-19', 'vmnjicmkm'),
(2, '123334', 'NEEMA', 'Female', '12arusha', 98645, 'student', '00:00:00', '2015-02-19', 'gasisnydmckj'),
(3, '78', 'Abdu', 'Male', 'po box 40', 763484380, 'student', '00:00:00', '2015-03-03', 'fgdgfch hgfhgb hgchvgh fchgbh gchmn  hgfcvhbh'),
(4, '0732893817', 'janet jacson', 'Female', 'arusha p.o.box arusha', 732893817, 'servant', '00:00:00', '2015-03-09', 'ameibiwa cm yake smart phone'),
(5, 'A120200', 'JOYCE KIRIA', 'Female', '296 ARUSHA', 757745275, 'STUDENT', '00:00:00', '2015-03-13', 'stolen phone'),
(6, '12234', 'emanuel sarun', 'Male', '123 arusha', 2147483647, 'student', '00:00:00', '2015-03-16', 'aaaaaa'),
(7, '93029312', 'chaki mkono', 'Female', 'p.o.box 31 arusha', 836186191, 'bussiness', '00:00:00', '2015-04-03', 'aaaaaaaaaaaa'),
(8, 'A0123567', 'emanuel sarun', 'Male', 'p.o.box 31 arusha', 754263927, 'student', '00:00:00', '2015-04-14', 'phone stolen...'),
(9, '122', 'zana john', 'Female', 'p.o.box23', 764677912, 'student', '00:00:00', '2015-04-20', 'phone stolen');

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE IF NOT EXISTS `criminal` (
  `id` int(50) NOT NULL auto_increment,
  `IDno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `sex` text NOT NULL,
  `age` int(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `crimetype` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `wanted` varchar(50) NOT NULL,
  `image1` varchar(900) NOT NULL,
  `image2` varchar(900) NOT NULL,
  `image3` varchar(900) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`id`, `IDno`, `name`, `nickname`, `sex`, `age`, `occupation`, `crimetype`, `adress`, `wanted`, `image1`, `image2`, `image3`) VALUES
(57, '5666', 'join michael', 'wansi', 'Male', 12, 'student', 'phone stolen', 'p.o.box 31 arusha', 'NotMostWanted', 'Button_Icons_Pack_by_deleket.jpg', 'images_5.jpeg', 'Button_Icons_Pack_by_deleket_2.jpg'),
(55, '9839282', 'tumaini erenest', 'tuma boy', 'Male', 25, 'student', 'robery', 'po box 45 arusha', 'NotMostWanted', '11082013389.jpg', 'Man ima.jpg', '14082013427.jpg'),
(56, '12394820', 'wansi foo', 'wansii', 'Male', 26, 'student', 'robery', 'p.o.box 31 arusha', 'MostWanted', '251120131156.jpg', 'IMG-20131230-WA0006.jpg', 'Man ima.jpg'),
(53, '192839192', 'john shiki', 'mr.shiki', 'Male', 26, 'student', 'robery', 'p.o.box 31 arusha', 'MostWanted', '131120131108.jpg', '251120131156.jpg', '261020131010.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE IF NOT EXISTS `fir` (
  `id` int(11) NOT NULL auto_increment,
  `firno` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `choose` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `infotype` varchar(100) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`id`, `firno`, `date`, `address`, `district`, `choose`, `place`, `infotype`, `info`) VALUES
(1, '0931931903', '2015-03-03', 'qweenj2232', 'tejo', 'Local', 'nikikcm', 'nfkmkewd', 'n ckjnmkmdxks'),
(2, '980498', '2003-03-20', '213SACS', 'DSADC', 'Local', 'DASS', 'SAD', 'QFCRC'),
(7, 'A012234', '2015-03-13', '075628103', 'Arusha', 'Local', 'majengo', 'accident', 'car accident...'),
(8, 'A012234', '2015-03-13', '075628103', 'Arusha', 'Local', 'majengo', 'accident', 'car accident...'),
(9, 'A012234', '2015-03-13', '075628103', 'Arusha', 'Local', 'majengo', 'accident', 'car accident...'),
(10, '9830291', '2015-03-16', '34 arusha', 'arusha', 'Local', 'ngarenaro', 'robery', 'aaaaaa'),
(11, '2033748', '2015-04-03', '07391029382', 'moshi', 'Local', 'majengo', 'robery', 'aaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL default '',
  `usertype` varchar(50) default NULL,
  `password` varchar(50) default NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `usertype`, `password`) VALUES
('0752544582', 'user', '12345'),
('0752544580', 'user', 'qwerty'),
('admin', 'admin', 'qwert'),
('0757745275', 'user', '12345'),
('0752544', 'user', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `postmortem`
--

CREATE TABLE IF NOT EXISTS `postmortem` (
  `id` int(50) NOT NULL auto_increment,
  `image` varchar(400) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `FirNo` varchar(50) NOT NULL,
  `ResultMortem` text NOT NULL,
  `DateDeath` date NOT NULL,
  `info` text NOT NULL,
  `House` varchar(50) NOT NULL,
  `Doctor` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `postmortem`
--

INSERT INTO `postmortem` (`id`, `image`, `name`, `sex`, `FirNo`, `ResultMortem`, `DateDeath`, `info`, `House`, `Doctor`) VALUES
(42, 'Photo1268_001_001_001.jpg', 'mboni masumbuko', 'Female', '12302', 'death due to car accident.', '2015-04-14', 'no case.', 'arusha', 'Emanuel Logan'),
(41, '11082013389.jpg', 'logan loganel', 'Male', '1313412', 'aaaaa', '2015-04-03', 'aaaaa', 'arusha', 'ali'),
(39, 'IMG-20131230-WA0006.jpg', 'mogondo mogondo', 'Male', '1234', 'aaaaa', '2015-04-03', 'aaaa', 'arusha', 'mosha'),
(37, 'Photo1268_001_001_001.jpg', 'quen daud', 'Female', '124', 'car accident', '2015-04-03', 'aaaaa', 'arusha', 'maliki'),
(40, '11082013389.jpg', 'logan loganel', 'Male', '1313412', 'aaaaa', '2015-04-03', 'aaaaa', 'arusha', 'ali');

-- --------------------------------------------------------

--
-- Table structure for table `suspect`
--

CREATE TABLE IF NOT EXISTS `suspect` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` text NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `officer` varchar(50) NOT NULL,
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `suspect`
--

INSERT INTO `suspect` (`id`, `name`, `age`, `sex`, `occupation`, `address`, `height`, `weight`, `time`, `date`, `officer`, `remark`) VALUES
(4, 'antony nelson', 34, 'Male', 'mwalimu', 'p.o.box 123 dar', 23, 60, '00:00:00', '2015-04-03', 'mangwesi', 'aaaa'),
(3, 'mayasa mollel', 34, 'Female', 'teacher', 'arusha', 12, 56, '00:00:00', '2015-03-04', 'mwalami', 'qwefffc');

-- --------------------------------------------------------

--
-- Table structure for table `wanted`
--

CREATE TABLE IF NOT EXISTS `wanted` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `sex` text NOT NULL,
  `age` int(11) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(900) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `wanted`
--

INSERT INTO `wanted` (`id`, `name`, `nickname`, `sex`, `age`, `date`, `location`, `description`, `image`) VALUES
(11, 'Ayoub Bablay', 'Bablay', 'male', 25, '2015-04-14', 'Arusha', 'bank robbery. ', '131120131108.jpg'),
(10, 'wansifo wansifa', 'wansifo', 'male', 26, '2015-04-03', 'mara', 'aaaaaaaaaaaa', '251120131156.jpg');

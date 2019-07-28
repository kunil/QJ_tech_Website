-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 16, 2019 at 10:04 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qj`
--

-- --------------------------------------------------------

--
-- Table structure for table `development`
--

DROP TABLE IF EXISTS `development`;
CREATE TABLE IF NOT EXISTS `development` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `desc_title` varchar(100) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `creative_design` varchar(200) DEFAULT NULL,
  `technology` varchar(200) DEFAULT NULL,
  `service` varchar(200) DEFAULT NULL,
  `modify` varchar(200) DEFAULT NULL,
  `structure` varchar(200) DEFAULT NULL,
  `perspective` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `development`
--

INSERT INTO `development` (`id`, `image`, `title`, `desc_title`, `description`, `creative_design`, `technology`, `service`, `modify`, `structure`, `perspective`) VALUES
(1, '30454.jpg', 'kdnfm', 'jndsf', 'kjns', 'jndfsk', 'lnjds ahdiofj', 'ijdfn dvouw j', ' sbhkj', 'jfs v', 'ljnv c'),
(2, '30454.jpg', 'jskdq', 'knds', 'lndsjqen qd ijkn', 'nsvj dwudojk', 'hidnj cid jckn', ' djcdhs djscn ', ' djcn', 'hdj n', ' dijnd'),
(3, '30454.jpg', 'jskdq', 'knds', 'lndsjqen qd ijkn', 'nsvj dwudojk', 'hidnj cid jckn', ' djcdhs djscn ', ' djcn', 'hdj n', ' dijnd'),
(4, '5c9bfca2-82c7-4a9d-b39a-c262665a1f40.jpg', 'a', 'aa', 'abc', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `fname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`fname`, `Lname`, `email`, `message`) VALUES
('Mickey', 'Mouse', 'kotharikunil9@gmail.com', 'abc'),
('Mickey', 'Mouse', 'kotharikunil9@gmail.com', 'abc'),
('Mickey', 'Mouse', 'kotharikunil9@gmail.com', 'abc'),
('Mickey', 'Mouse', 'kotharikunil9@gmail.com', 'abc'),
('Mickey', 'Mouse', 'kotharikunil9@gmail.com', 'abc'),
('Mickey', 'Mouse', 'kotharikunil9@gmail.com', 'abc'),
('Mickey', 'Mouse', 'kotharikunil9@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

DROP TABLE IF EXISTS `training`;
CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(800) DEFAULT NULL,
  `minidesc` varchar(200) DEFAULT NULL,
  `attend` varchar(300) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `certificates` varchar(300) DEFAULT NULL,
  `features` varchar(300) DEFAULT NULL,
  `skills` varchar(300) DEFAULT NULL,
  `syllabus` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `title`, `image`, `minidesc`, `attend`, `duration`, `certificates`, `features`, `skills`, `syllabus`) VALUES
(1, 'Hello World', 'books-business-computer-459654.jpg', 'ksdkmkvfh \r\nwkwf bfkj wfj v lfej', 'njfqkl', 'klsfn', 'kdfkf', '[\"njfl\"]', '[\"hejeie\",\"hajdfj\",\"ejhfnf\",\"aejfn\",\"sdfnjfkn\"]', '[\"hajdn\",\"adhfn\",\"dbjfue\",\"ejchuf\",\"fuhen\"]'),
(2, 'riya loya', 'linuxfundamentals_qjt.png', 'kjjhrn', 'fwejqelhm', 'kjf ', 'bhshinf', '[\"mw d\"]', '[\"kjkja\",\"fkhndf\",\"shmeccfekhf\",\"efjhn \",\"ehdnm\",\"ehnff\",\"skhdn\"]', '[\"bksdiye\",\"dygbd\",\"eheb\",\"eyugbd\",\"ehkd\",\"ejhend\",\"hjebd\",\"ahjsnd\",\"ehend\",\"ehjd n\",\"sbkhn\",\"jkehb\",\"ednjh\",\"ekhnms\",\"ehgnms\"]'),
(3, 'riya loya', 'linuxfundamentals_qjt.png', 'kjjhrn', 'fwejqelhm', 'kjf ', 'bhshinf', '[\"jhadnm\",\"ehns\",\"ehnfd\"]', '[\"kjkja\",\"fkhndf\",\"shmeccfekhf\",\"efjhn \",\"ehdnm\",\"ehnff\",\"skhdn\"]', '[\"bksdiye\",\"dygbd\",\"eheb\",\"eyugbd\",\"ehkd\",\"ejhend\",\"hjebd\",\"ahjsnd\",\"ehend\",\"ehjd n\",\"sbkhn\",\"jkehb\",\"ednjh\",\"ekhnms\",\"ehgnms\"]'),
(4, 'a', '5c9bfca2-82c7-4a9d-b39a-c262665a1f40 (1).jpg', 'a', 'a', 'a', 'a', '[\"a\"]', '[\"a\"]', '[\"a\"]'),
(5, 'a', '5c9bfca2-82c7-4a9d-b39a-c262665a1f40 (1).jpg', 'aa', 'Pune', 'a', 'aa', '[\"a\"]', '[\"aa\"]', '[\"aa\"]');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

DROP TABLE IF EXISTS `try`;
CREATE TABLE IF NOT EXISTS `try` (
  `image` varchar(200) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`image`, `title`) VALUES
('18123950529_ANBxxxxx1F_A3.pdf', 'riya loya hwllo'),
('18123950529_ANBxxxxx1F_A3.pdf', 'hello hdaf lejke');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

DROP TABLE IF EXISTS `workshop`;
CREATE TABLE IF NOT EXISTS `workshop` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `minidesc` varchar(300) DEFAULT NULL,
  `attend` varchar(300) DEFAULT NULL,
  `duration` varchar(300) DEFAULT NULL,
  `certificates` varchar(300) DEFAULT NULL,
  `features` varchar(300) DEFAULT NULL,
  `skills` varchar(300) DEFAULT NULL,
  `contents` varchar(300) DEFAULT NULL,
  `pdf` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `title`, `image`, `minidesc`, `attend`, `duration`, `certificates`, `features`, `skills`, `contents`, `pdf`) VALUES
(1, 'a', '30454.jpg', 'ahgdj', 'a', 'a', 'a', '[\"a\"]', '[\"a\",\"b\",\"c\"]', '[\"a\",\"f\",\"h\"]', NULL),
(1, 'hello kunil', '30454.jpg', '', '', '', '', '[\"\"]', '[\"\"]', '[\"\"]', NULL),
(1, 'hello kunil', '30454.jpg', '', '', '', '', '[\"\"]', '[\"\"]', '[\"\"]', NULL),
(10, 'a', '5c9bfca2-82c7-4a9d-b39a-c262665a1f40 (1).jpg', 'aa', 'Pune', 'a', 'a', '[\"a\"]', '[\"aaa\"]', '[\"aa\"]', 'ass5get.pdf'),
(34, 'QJ TECH', '5c9bfca2-82c7-4a9d-b39a-c262665a1f40.jpg', 'knfv', 'Pune', 'knsf', 'jbfk', '[\"jbsf\"]', '[\"nsfj\"]', '[\"jndfkv\"]', 'ass1.docx'),
(34, 'QJ TECH', '5c9bfca2-82c7-4a9d-b39a-c262665a1f40.jpg', 'knfv', 'Pune', 'knsf', 'jbfk', '[\"jbsf\"]', '[\"nsfj\"]', '[\"jndfkv\"]', '18123639676_AAFxxxxx0B_A3.pdf'),
(43, 'heamlr', '5c9bfca2-82c7-4a9d-b39a-c262665a1f40 (1).jpg', 'isdfinjnjvinvs nsivvj sdvi', 'jdnk  ', '10 hrs', 'hsvn', '[\"adhbfug\"]', '[\"hsdnvu\",\"sdhub\",\"dshubu\"]', '[\"fnivs\",\"gsd\",\"std\",\"stsg\",\"sts\"]', 'African-Trading-Blocs-and-Economic-Growth-A-Critical-Review-of-the-Literature.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

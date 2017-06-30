-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2014 at 08:18 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting`
--

CREATE TABLE IF NOT EXISTS `accounting` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`,`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `surname`, `othername`, `username`, `password`, `email`, `phone`, `sex`) VALUES
(1, 'Mayowa', 'Afolabi', 'Sheriff', 'afomayor', '69130938f8b9958fded020e8cebc6ff5', 'afotrick2011@gmail.com', '08023447374', 'male'),
(2, 'Kingfahd', 'Afolabi', 'Tope', 'afokingok', '6a4c9e97345b1828e14d91d4e848b9ce', 'afokingok@yahoo.com', '08023448823', 'male'),
(3, 'Usman', 'Adam', 'Olayinka', 'Adamzy', '2f062af02f437d879af66ed0f007ef2b', 'adboi4realluv@yahoo.com', '08029721856', 'male'),
(4, 'Sherifat', 'Agbelekale', 'banku', 'Banku', '827ccb0eea8a706c4c34a16891f84e7b', 'sherry@yahoo.com', '08033774485', 'female'),
(10, 'age', 'wjhd', 'jdj', 'afomayor1', '827ccb0eea8a706c4c34a16891f84e7b', 'aka@ha.com', '08022332283', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `agricultural_science`
--

CREATE TABLE IF NOT EXISTS `agricultural_science` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `agriculture`
--

CREATE TABLE IF NOT EXISTS `agriculture` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applied_electricity`
--

CREATE TABLE IF NOT EXISTS `applied_electricity` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `arabic`
--

CREATE TABLE IF NOT EXISTS `arabic` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `arabic_`
--

CREATE TABLE IF NOT EXISTS `arabic_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `auto_mechanics`
--

CREATE TABLE IF NOT EXISTS `auto_mechanics` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `biology`
--

CREATE TABLE IF NOT EXISTS `biology` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `book_keeping`
--

CREATE TABLE IF NOT EXISTS `book_keeping` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `business_studies`
--

CREATE TABLE IF NOT EXISTS `business_studies` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chemistry`
--

CREATE TABLE IF NOT EXISTS `chemistry` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `civic_education`
--

CREATE TABLE IF NOT EXISTS `civic_education` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(50) NOT NULL,
  `subjects` varchar(500) NOT NULL,
  `no_of_subjects` int(10) NOT NULL,
  `class_teacher` varchar(50) NOT NULL,
  `session` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`, `subjects`, `no_of_subjects`, `class_teacher`, `session`) VALUES
(10, 'SS1 Science', 'Mathematics,English,Yoruba,Igbo,Hausa,Biology,Chemistry,Physics,Economics,Computer_Science,Technical_Drawing,Geography,Agriculture,Metal_Work', 14, 'afomayor', '2014/2015'),
(11, 'SS1 Commercial', 'Mathematics,English,Yoruba,Igbo,Hausa,Biology,Economics,Commerce,Clothing_And_Textile,Home_Management,Accounting,Government', 12, 'bovi123', '2014/2015'),
(12, 'SS1 Art', 'Mathematics,English,Literature,Yoruba,Igbo,Hausa,Biology,Economics,French,Music,History,CRS,IRS,Government,Arabic', 15, 'jibo', '2014/2015'),
(13, 'SS2 Science', 'Mathematics,English,Yoruba,Biology,Chemistry,Physics,Economics,Computer_Science,Applied_Electricity,Technical_Drawing,Geography', 11, 'bovi123', '2014/2015'),
(14, 'JSS1 ', 'English_,Mathematics_,Integrated_Science,Social_Studies,Introductory_Technology,Business_Studies,Home_Economics,Fine_Art,French_,Yoruba_,Arabic_,CRS_,Agricultural_Science,Music_,Physical_Education_,Health_Education', 16, 'afoking', '2014/2015'),
(15, 'SS2 Commercial', 'Mathematics,English,Yoruba,Biology,Economics,Commerce,Accounting,Government,Book_keeping,Office_Practice', 10, 'bovi123', '2014/2015'),
(16, 'SS2 Art', 'Mathematics,English,Literature,Yoruba,Biology,Economics,Computer_Science,CRS,Government,Book_keeping,Civic_Education', 11, 'jibo', '2014/2015'),
(17, 'JSS2 ', 'English_,Mathematics_,Integrated_Science,Social_Studies,Introductory_Technology,Business_Studies,Home_Economics,Fine_Art,French_,Yoruba_,CRS_,Agricultural_Science,Music_,Physical_Education_', 14, 'bovi123', '2014/2015'),
(18, 'JSS3 ', 'English_,Mathematics_,Integrated_Science,Social_Studies,Introductory_Technology,Business_Studies,Home_Economics,Fine_Art,French_,Yoruba_,CRS_,Agricultural_Science,Music_,Physical_Education_', 14, 'afoking', '2014/2015');

-- --------------------------------------------------------

--
-- Table structure for table `clothing_and_textile`
--

CREATE TABLE IF NOT EXISTS `clothing_and_textile` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commerce`
--

CREATE TABLE IF NOT EXISTS `commerce` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `computer_science`
--

CREATE TABLE IF NOT EXISTS `computer_science` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `crs`
--

CREATE TABLE IF NOT EXISTS `crs` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `crs_`
--

CREATE TABLE IF NOT EXISTS `crs_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `economics`
--

CREATE TABLE IF NOT EXISTS `economics` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE IF NOT EXISTS `english` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `english`
--

INSERT INTO `english` (`no`, `student_id`, `name`, `CA_for_first`, `EXAM_for_first`, `total_for_first`, `CA_for_second`, `EXAM_for_second`, `total_for_second`, `CA_for_third`, `EXAM_for_third`, `total_for_third`, `overall_average`, `session`, `class`) VALUES
(1, '526e4747c0660', 'Ajola Oluwa ayo', 12, 56, 68, 0, 0, 0, 0, 0, 0, 23, '2014/2015', 'SS1 Science'),
(2, '5307b6f8910c3', 'kazeem olagunju ayo', 23, 28, 51, 0, 0, 0, 0, 0, 0, 17, '2014/2015', 'SS1 Science'),
(3, '5344817489a7b', 'Korede Ayo Opeyemi', 21, 54, 75, 0, 0, 0, 0, 0, 0, 25, '2014/2015', 'SS1 Science'),
(4, '53dfabfb1c368', 'Akolawole Sherifat Bola', 40, 60, 100, 40, 60, 100, 40, 60, 100, 100, '2014/2015', 'SS1 Science'),
(5, '526bbcd547b9e', 'deborah ayo ayomide', 12, 36, 48, 0, 0, 0, 0, 0, 0, 16, '2014/2015', 'SS1 Commercial'),
(6, '530cd930ab806', 'Bimpe Tomisin Ayo', 23, 54, 77, 0, 0, 0, 0, 0, 0, 26, '2014/2015', 'SS1 Commercial'),
(7, '5331988ff30b6', 'KingFad Ajao Ayo', 15, 34, 49, 0, 0, 0, 0, 0, 0, 16, '2014/2015', 'SS1 Commercial'),
(8, '526cc086734df', 'Adekunle Selim Bayo', 23, 47, 70, 0, 0, 0, 0, 0, 0, 23, '2014/2015', 'SS2 Science');

-- --------------------------------------------------------

--
-- Table structure for table `english_`
--

CREATE TABLE IF NOT EXISTS `english_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `english_`
--

INSERT INTO `english_` (`no`, `student_id`, `name`, `CA_for_first`, `EXAM_for_first`, `total_for_first`, `CA_for_second`, `EXAM_for_second`, `total_for_second`, `CA_for_third`, `EXAM_for_third`, `total_for_third`, `overall_average`, `session`, `class`) VALUES
(1, '53ef3752dacd8', 'Afolake Korede Ade', 12, 45, 57, 0, 0, 0, 0, 0, 0, 19, 2014, 0),
(2, '53f9aa886af5a', 'Aroyeun Omar Faruq', 23, 54, 77, 0, 0, 0, 0, 0, 0, 26, 2014, 0),
(3, '5346d8ed7e296', 'Abiola Ade Femi', 23, 24, 47, 0, 0, 0, 0, 0, 0, 16, 2015, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fine_art`
--

CREATE TABLE IF NOT EXISTS `fine_art` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `food_and_nutrition`
--

CREATE TABLE IF NOT EXISTS `food_and_nutrition` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `french`
--

CREATE TABLE IF NOT EXISTS `french` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `french_`
--

CREATE TABLE IF NOT EXISTS `french_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `geography`
--

CREATE TABLE IF NOT EXISTS `geography` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE IF NOT EXISTS `government` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hausa`
--

CREATE TABLE IF NOT EXISTS `hausa` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hausa`
--

INSERT INTO `hausa` (`no`, `student_id`, `name`, `CA_for_first`, `EXAM_for_first`, `total_for_first`, `CA_for_second`, `EXAM_for_second`, `total_for_second`, `CA_for_third`, `EXAM_for_third`, `total_for_third`, `overall_average`, `session`, `class`) VALUES
(1, '526e4747c0660', 'Ajola Oluwa ayo', 12, 38, 50, 0, 0, 0, 0, 0, 0, 17, '2014/2015', 'SS1 Science'),
(2, '5307b6f8910c3', 'kazeem olagunju ayo', 14, 37, 51, 0, 0, 0, 0, 0, 0, 17, '2014/2015', 'SS1 Science'),
(3, '5344817489a7b', 'Korede Ayo Opeyemi', 23, 25, 48, 0, 0, 0, 0, 0, 0, 16, '2014/2015', 'SS1 Science'),
(4, '53dfabfb1c368', 'Akolawole Sherifat Bola', 40, 60, 100, 40, 60, 100, 40, 60, 100, 100, '2014/2015', 'SS1 Science');

-- --------------------------------------------------------

--
-- Table structure for table `hausa_`
--

CREATE TABLE IF NOT EXISTS `hausa_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `health_education`
--

CREATE TABLE IF NOT EXISTS `health_education` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `home_economics`
--

CREATE TABLE IF NOT EXISTS `home_economics` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `home_management`
--

CREATE TABLE IF NOT EXISTS `home_management` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `igbo`
--

CREATE TABLE IF NOT EXISTS `igbo` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `igbo`
--

INSERT INTO `igbo` (`no`, `student_id`, `name`, `CA_for_first`, `EXAM_for_first`, `total_for_first`, `CA_for_second`, `EXAM_for_second`, `total_for_second`, `CA_for_third`, `EXAM_for_third`, `total_for_third`, `overall_average`, `session`, `class`) VALUES
(1, '526e4747c0660', 'Ajola Oluwa ayo', 13, 0, 13, 0, 0, 0, 0, 0, 0, 4, '2014/2015', 'SS1 Science'),
(2, '5307b6f8910c3', 'kazeem olagunju ayo', 26, 0, 26, 0, 0, 0, 0, 0, 0, 9, '2014/2015', 'SS1 Science'),
(3, '5344817489a7b', 'Korede Ayo Opeyemi', 18, 0, 18, 0, 0, 0, 0, 0, 0, 6, '2014/2015', 'SS1 Science'),
(4, '53dfabfb1c368', 'Akolawole Sherifat Bola', 40, 60, 100, 40, 60, 100, 40, 60, 100, 100, '2014/2015', 'SS1 Science'),
(5, '526cc086734df', 'Adekunle Selim Bayo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2014/2015', 'SS1 Science'),
(6, '53ee3c9a4df2e', 'jhjhd jksjk jhdjh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2014/2015', 'SS1 Science'),
(7, '53ee3dfa84ea7', 'jhjhd jksjk jhdjh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2014/2015', 'SS1 Science');

-- --------------------------------------------------------

--
-- Table structure for table `igbo_`
--

CREATE TABLE IF NOT EXISTS `igbo_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `integrated_science`
--

CREATE TABLE IF NOT EXISTS `integrated_science` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `introductory_technology`
--

CREATE TABLE IF NOT EXISTS `introductory_technology` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `irs`
--

CREATE TABLE IF NOT EXISTS `irs` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `irs_`
--

CREATE TABLE IF NOT EXISTS `irs_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jss1__first_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `jss1__first_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `English_` int(5) NOT NULL,
  `Mathematics_` int(5) NOT NULL,
  `Integrated_Science` int(5) NOT NULL,
  `Social_Studies` int(5) NOT NULL,
  `Introductory_Technology` int(5) NOT NULL,
  `Business_Studies` int(5) NOT NULL,
  `Home_Economics` int(5) NOT NULL,
  `Fine_Art` int(5) NOT NULL,
  `French_` int(5) NOT NULL,
  `Yoruba_` int(5) NOT NULL,
  `Arabic_` int(5) NOT NULL,
  `CRS_` int(5) NOT NULL,
  `Agricultural_Science` int(5) NOT NULL,
  `Music_` int(5) NOT NULL,
  `Physical_Education_` int(5) NOT NULL,
  `Health_Education` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jss1__first_term_broad_sheet`
--

INSERT INTO `jss1__first_term_broad_sheet` (`s/n`, `student_id`, `name`, `English_`, `Mathematics_`, `Integrated_Science`, `Social_Studies`, `Introductory_Technology`, `Business_Studies`, `Home_Economics`, `Fine_Art`, `French_`, `Yoruba_`, `Arabic_`, `CRS_`, `Agricultural_Science`, `Music_`, `Physical_Education_`, `Health_Education`, `total_marks`, `percentage`, `position`, `session`) VALUES
(1, '53ef3752dacd8', 'Afolake Korede Ade', 57, 68, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 125, 62.50, NULL, '2014/2015'),
(2, '53f9aa886af5a', 'Aroyeun Omar Faruq', 77, 66, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 143, 71.50, NULL, '2014/2015'),
(7, '5346d8ed7e296', 'Abiola Ade Femi', 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 47, 47.00, NULL, '2015/2016');

-- --------------------------------------------------------

--
-- Table structure for table `jss1__second_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `jss1__second_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `English_` int(5) NOT NULL,
  `Mathematics_` int(5) NOT NULL,
  `Integrated_Science` int(5) NOT NULL,
  `Social_Studies` int(5) NOT NULL,
  `Introductory_Technology` int(5) NOT NULL,
  `Business_Studies` int(5) NOT NULL,
  `Home_Economics` int(5) NOT NULL,
  `Fine_Art` int(5) NOT NULL,
  `French_` int(5) NOT NULL,
  `Yoruba_` int(5) NOT NULL,
  `Arabic_` int(5) NOT NULL,
  `CRS_` int(5) NOT NULL,
  `Agricultural_Science` int(5) NOT NULL,
  `Music_` int(5) NOT NULL,
  `Physical_Education_` int(5) NOT NULL,
  `Health_Education` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `total_for_first` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jss1__second_term_broad_sheet`
--

INSERT INTO `jss1__second_term_broad_sheet` (`s/n`, `student_id`, `name`, `English_`, `Mathematics_`, `Integrated_Science`, `Social_Studies`, `Introductory_Technology`, `Business_Studies`, `Home_Economics`, `Fine_Art`, `French_`, `Yoruba_`, `Arabic_`, `CRS_`, `Agricultural_Science`, `Music_`, `Physical_Education_`, `Health_Education`, `total_marks`, `total_for_first`, `percentage`, `position`, `session`) VALUES
(1, '53ef3752dacd8', 'Afolake Korede Ade', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 125, 31.25, NULL, '2014/2015'),
(2, '53f9aa886af5a', 'Aroyeun Omar Faruq', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 143, 35.75, NULL, '2014/2015'),
(5, '5346d8ed7e296', 'Abiola Ade Femi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 47, 23.50, NULL, '2015/2016');

-- --------------------------------------------------------

--
-- Table structure for table `jss1__third_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `jss1__third_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `English_` int(5) NOT NULL,
  `Mathematics_` int(5) NOT NULL,
  `Integrated_Science` int(5) NOT NULL,
  `Social_Studies` int(5) NOT NULL,
  `Introductory_Technology` int(5) NOT NULL,
  `Business_Studies` int(5) NOT NULL,
  `Home_Economics` int(5) NOT NULL,
  `Fine_Art` int(5) NOT NULL,
  `French_` int(5) NOT NULL,
  `Yoruba_` int(5) NOT NULL,
  `Arabic_` int(5) NOT NULL,
  `CRS_` int(5) NOT NULL,
  `Agricultural_Science` int(5) NOT NULL,
  `Music_` int(5) NOT NULL,
  `Physical_Education_` int(5) NOT NULL,
  `Health_Education` int(5) NOT NULL,
  `first_term_score` int(10) NOT NULL,
  `second_term_score` int(10) NOT NULL,
  `third_term_score` int(10) NOT NULL,
  `total_average` int(10) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jss1__third_term_broad_sheet`
--

INSERT INTO `jss1__third_term_broad_sheet` (`s/n`, `student_id`, `name`, `English_`, `Mathematics_`, `Integrated_Science`, `Social_Studies`, `Introductory_Technology`, `Business_Studies`, `Home_Economics`, `Fine_Art`, `French_`, `Yoruba_`, `Arabic_`, `CRS_`, `Agricultural_Science`, `Music_`, `Physical_Education_`, `Health_Education`, `first_term_score`, `second_term_score`, `third_term_score`, `total_average`, `percentage`, `position`, `session`) VALUES
(1, '53ef3752dacd8', 'Afolake Korede Ade', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 125, 0, 0, 42, 20.83, NULL, '2014/2015'),
(2, '53f9aa886af5a', 'Aroyeun Omar Faruq', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 143, 0, 0, 48, 23.83, NULL, '2014/2015'),
(5, '5346d8ed7e296', 'Abiola Ade Femi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 47, 0, 0, 16, 15.67, NULL, '2015/2016');

-- --------------------------------------------------------

--
-- Table structure for table `jss2__first_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `jss2__first_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `English_` int(5) NOT NULL,
  `Mathematics_` int(5) NOT NULL,
  `Integrated_Science` int(5) NOT NULL,
  `Social_Studies` int(5) NOT NULL,
  `Introductory_Technology` int(5) NOT NULL,
  `Business_Studies` int(5) NOT NULL,
  `Home_Economics` int(5) NOT NULL,
  `Fine_Art` int(5) NOT NULL,
  `French_` int(5) NOT NULL,
  `Yoruba_` int(5) NOT NULL,
  `CRS_` int(5) NOT NULL,
  `Agricultural_Science` int(5) NOT NULL,
  `Music_` int(5) NOT NULL,
  `Physical_Education_` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jss2__second_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `jss2__second_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `English_` int(5) NOT NULL,
  `Mathematics_` int(5) NOT NULL,
  `Integrated_Science` int(5) NOT NULL,
  `Social_Studies` int(5) NOT NULL,
  `Introductory_Technology` int(5) NOT NULL,
  `Business_Studies` int(5) NOT NULL,
  `Home_Economics` int(5) NOT NULL,
  `Fine_Art` int(5) NOT NULL,
  `French_` int(5) NOT NULL,
  `Yoruba_` int(5) NOT NULL,
  `CRS_` int(5) NOT NULL,
  `Agricultural_Science` int(5) NOT NULL,
  `Music_` int(5) NOT NULL,
  `Physical_Education_` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `total_for_first` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jss2__third_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `jss2__third_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `English_` int(5) NOT NULL,
  `Mathematics_` int(5) NOT NULL,
  `Integrated_Science` int(5) NOT NULL,
  `Social_Studies` int(5) NOT NULL,
  `Introductory_Technology` int(5) NOT NULL,
  `Business_Studies` int(5) NOT NULL,
  `Home_Economics` int(5) NOT NULL,
  `Fine_Art` int(5) NOT NULL,
  `French_` int(5) NOT NULL,
  `Yoruba_` int(5) NOT NULL,
  `CRS_` int(5) NOT NULL,
  `Agricultural_Science` int(5) NOT NULL,
  `Music_` int(5) NOT NULL,
  `Physical_Education_` int(5) NOT NULL,
  `first_term_score` int(10) NOT NULL,
  `second_term_score` int(10) NOT NULL,
  `third_term_score` int(10) NOT NULL,
  `total_average` int(10) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jss3__first_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `jss3__first_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `English_` int(5) NOT NULL,
  `Mathematics_` int(5) NOT NULL,
  `Integrated_Science` int(5) NOT NULL,
  `Social_Studies` int(5) NOT NULL,
  `Introductory_Technology` int(5) NOT NULL,
  `Business_Studies` int(5) NOT NULL,
  `Home_Economics` int(5) NOT NULL,
  `Fine_Art` int(5) NOT NULL,
  `French_` int(5) NOT NULL,
  `Yoruba_` int(5) NOT NULL,
  `CRS_` int(5) NOT NULL,
  `Agricultural_Science` int(5) NOT NULL,
  `Music_` int(5) NOT NULL,
  `Physical_Education_` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jss3__second_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `jss3__second_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `English_` int(5) NOT NULL,
  `Mathematics_` int(5) NOT NULL,
  `Integrated_Science` int(5) NOT NULL,
  `Social_Studies` int(5) NOT NULL,
  `Introductory_Technology` int(5) NOT NULL,
  `Business_Studies` int(5) NOT NULL,
  `Home_Economics` int(5) NOT NULL,
  `Fine_Art` int(5) NOT NULL,
  `French_` int(5) NOT NULL,
  `Yoruba_` int(5) NOT NULL,
  `CRS_` int(5) NOT NULL,
  `Agricultural_Science` int(5) NOT NULL,
  `Music_` int(5) NOT NULL,
  `Physical_Education_` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `total_for_first` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jss3__third_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `jss3__third_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `English_` int(5) NOT NULL,
  `Mathematics_` int(5) NOT NULL,
  `Integrated_Science` int(5) NOT NULL,
  `Social_Studies` int(5) NOT NULL,
  `Introductory_Technology` int(5) NOT NULL,
  `Business_Studies` int(5) NOT NULL,
  `Home_Economics` int(5) NOT NULL,
  `Fine_Art` int(5) NOT NULL,
  `French_` int(5) NOT NULL,
  `Yoruba_` int(5) NOT NULL,
  `CRS_` int(5) NOT NULL,
  `Agricultural_Science` int(5) NOT NULL,
  `Music_` int(5) NOT NULL,
  `Physical_Education_` int(5) NOT NULL,
  `first_term_score` int(10) NOT NULL,
  `second_term_score` int(10) NOT NULL,
  `third_term_score` int(10) NOT NULL,
  `total_average` int(10) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `literature`
--

CREATE TABLE IF NOT EXISTS `literature` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `literature`
--

INSERT INTO `literature` (`no`, `student_id`, `name`, `CA_for_first`, `EXAM_for_first`, `total_for_first`, `CA_for_second`, `EXAM_for_second`, `total_for_second`, `CA_for_third`, `EXAM_for_third`, `total_for_third`, `overall_average`, `session`, `class`) VALUES
(1, '526e4747c0660', 'Ajola Oluwa ayo', 23, 0, 23, 0, 0, 0, 0, 0, 0, 8, '2014/2015', 'SS1 Science'),
(2, '5307b6f8910c3', 'kazeem olagunju ayo', 12, 0, 12, 0, 0, 0, 0, 0, 0, 4, '2014/2015', 'SS1 Science'),
(3, '5344817489a7b', 'Korede Ayo Opeyemi', 31, 0, 31, 0, 0, 0, 0, 0, 0, 10, '2014/2015', 'SS1 Science'),
(4, '53dfabfb1c368', 'Akolawole Sherifat Bola', 28, 0, 28, 0, 0, 0, 0, 0, 0, 9, '2014/2015', 'SS1 Science');

-- --------------------------------------------------------

--
-- Table structure for table `mathematics`
--

CREATE TABLE IF NOT EXISTS `mathematics` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `mathematics`
--

INSERT INTO `mathematics` (`no`, `student_id`, `name`, `CA_for_first`, `EXAM_for_first`, `total_for_first`, `CA_for_second`, `EXAM_for_second`, `total_for_second`, `CA_for_third`, `EXAM_for_third`, `total_for_third`, `overall_average`, `session`, `class`) VALUES
(1, '526e4747c0660', 'Ajola Oluwa ayo', 12, 0, 12, 0, 0, 0, 0, 0, 0, 4, '2014/2015', 'SS1 Science'),
(2, '5307b6f8910c3', 'kazeem olagunju ayo', 25, 0, 25, 0, 0, 0, 0, 0, 0, 8, '2014/2015', 'SS1 Science'),
(3, '5344817489a7b', 'Korede Ayo Opeyemi', 15, 0, 15, 0, 0, 0, 0, 0, 0, 5, '2014/2015', 'SS1 Science'),
(4, '53dfabfb1c368', 'Akolawole Sherifat Bola', 40, 60, 100, 40, 60, 100, 40, 60, 100, 100, '2014/2015', 'SS1 Science'),
(11, '526bbcd547b9e', 'deborah ayo ayomide', 12, 53, 65, 0, 0, 0, 0, 0, 0, 22, '2014/2015', 'SS1 Commercial'),
(12, '530cd930ab806', 'Bimpe Tomisin Ayo', 12, 53, 65, 0, 0, 0, 0, 0, 0, 22, '2014/2015', 'SS1 Commercial'),
(13, '5331988ff30b6', 'KingFad Ajao Ayo', 12, 51, 63, 0, 0, 0, 0, 0, 0, 21, '2014/2015', 'SS1 Commercial'),
(14, '526cc086734df', 'Adekunle Selim Bayo', 12, 43, 55, 0, 0, 0, 0, 0, 0, 18, '2014/2015', 'SS2 Science'),
(15, '526cc086734df', 'Adekunle Selim Bayo', 12, 45, 57, 0, 0, 0, 0, 0, 0, 19, '2014/2015', 'SS1 Science');

-- --------------------------------------------------------

--
-- Table structure for table `mathematics_`
--

CREATE TABLE IF NOT EXISTS `mathematics_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mathematics_`
--

INSERT INTO `mathematics_` (`no`, `student_id`, `name`, `CA_for_first`, `EXAM_for_first`, `total_for_first`, `CA_for_second`, `EXAM_for_second`, `total_for_second`, `CA_for_third`, `EXAM_for_third`, `total_for_third`, `overall_average`, `session`, `class`) VALUES
(1, '53ef3752dacd8', 'Afolake Korede Ade', 23, 45, 68, 0, 0, 0, 0, 0, 0, 23, 2014, 0),
(2, '53f9aa886af5a', 'Aroyeun Omar Faruq', 23, 43, 66, 0, 0, 0, 0, 0, 0, 22, 2014, 0);

-- --------------------------------------------------------

--
-- Table structure for table `metal_work`
--

CREATE TABLE IF NOT EXISTS `metal_work` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `music_`
--

CREATE TABLE IF NOT EXISTS `music_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `admin` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `news_caption` varchar(100) NOT NULL,
  `news_content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `admin`, `date`, `time`, `news_caption`, `news_content`) VALUES
(1, 'afomayor', '2013-10-19', '19:44:23', 'late coming', 'l'),
(2, 'afomayor', '2013-10-19', '19:44:33', 'new teacher', 't'),
(3, 'afomayor', '2013-10-19', '19:46:20', 'New library', 'T'),
(4, 'afomayor', '2013-10-19', '23:31:19', 'new school bus', 't'),
(5, 'afomayor', '2013-10-19', '23:31:31', 'new school bus', 't'),
(6, 'afomayor', '2013-10-19', '23:39:51', 'new school fees', 't'),
(7, 'afomayor', '2013-10-20', '11:16:41', 'new id', 't'),
(8, 'afomayor', '2013-10-22', '11:19:19', 'covocation day', 'T'),
(9, 'Adamzy', '2013-10-22', '11:21:07', 'convocation', 'I'),
(10, 'Adamzy', '2013-10-22', '11:21:20', 'convocation', 'I'),
(11, 'Banku', '2013-11-02', '20:44:25', 'This school ois going on strike', 'T'),
(12, 'afomayor', '2014-02-22', '08:45:16', 'Exam is almost through', 'T'),
(13, 'afomayor', '2014-04-29', '18:57:33', 'INTRUDER ALERT', 'K'),
(14, 'afomayor', '2014-04-29', '18:58:13', 'INTRUDER ALERT', 'K'),
(15, 'afomayor', '2014-05-11', '18:53:02', 'saheed', 'B'),
(16, 'afomayor', '2014-07-16', '20:26:03', 'news of the day', 'b'),
(17, 'afomayor', '2014-08-13', '14:44:29', 'df', ''),
(18, 'afomayor', '2014-08-13', '14:47:17', 'To day Is great', 'This is to inform all students that school is opeening back on the <b>20th of september.</b>'),
(19, 'afomayor', '2014-08-14', '14:51:34', 'Muhammad', '<p class="MsoNormal"><span lang="EN-US">The wholeworld was created for you, if not for you the word would be empty. Your lightgives strength to the sun and the moon. Through your fit lie earth and theheaven. Nothing in creation is quite like you. Still you remain so humble.<o:p></o:p></span></p><p class="MsoNormal"><span lang="EN-US">YAHROSULULLAH! 0 pride of creation, the protector, strong, intercessor, virtuous,guide, excellent, sincere and pious, the teacher, the leader, key to mercy,distinguished for glory, prophet of love.<o:p></o:p></span></p><p class="MsoNormal"><span lang="EN-US">Philosopher,orator, apostle, legislator, warrior, conqueror of ideas, restorer of rationaldogmas, of a cult without images; The founder of twenty terrestrial empiresthat is Muhammad(S.A.W). As a regards, all standards by which human greatnessmay be measured, we may well ask, is there anyone greater than he?<o:p></o:p></span></p><p class="MsoListParagraph" style="text-indent:-18.0pt;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><span lang="EN-US">-<span style="font-size: 7pt; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><!--[endif]--><span lang="EN-US">Lamartine,histoire de la turquie, paris1854,vol 2, pp276-77.<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:324.0pt"><span lang="EN-US">Sanni lukmon olamilekan.<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:324.0pt"><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mathematics(200L).<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:288.0pt;text-indent:36.0pt"><span lang="EN-US">08027669191/07063468188<o:p></o:p></span></p>'),
(20, 'afomayor', '2014-08-14', '14:53:47', 'Rossululah', '<h3 style="text-align: center;"><span lang="EN-US">The wholeworld was created for you, if not for you the word would be empty. Your lightgives strength to the sun and the moon. Through your fit lie earth and theheaven. Nothing in creation is quite like you. Still you remain so humble.<o:p></o:p></span></p><p class="MsoNormal"><span lang="EN-US">YAHROSULULLAH! 0 pride of creation, the protector, strong, intercessor, virtuous,guide, excellent, sincere and pious, the teacher, the leader, key to mercy,distinguished for glory, prophet of love.<o:p></o:p></span></p><p class="MsoNormal"><span lang="EN-US">Philosopher,orator, apostle, legislator, warrior, conqueror of ideas, restorer of rationaldogmas, of a cult without images; The founder of twenty terrestrial empiresthat is Muhammad(S.A.W). As a regards, all standards by which human greatnessmay be measured, we may well ask, is there anyone greater than he?<o:p></o:p></span></p><p class="MsoListParagraph" style="text-indent:-18.0pt;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><span lang="EN-US">-<span style="font-size: 7pt; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><!--[endif]--><span lang="EN-US">Lamartine,histoire de la turquie, paris1854,vol 2, pp276-77.<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:324.0pt"><span lang="EN-US"><b>Sanni lukmon olamilekan</b>.<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:324.0pt"><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mathematics(200L).<o:p></o:p></span></p><p class="MsoNormal" style="text-align: left; margin-left: 288pt; text-indent: 36pt;"><span lang="EN-US">08027669191/07063468188 <a href="http://www.facebook.com">find us on Facebook</a><o:p></o:p></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `notice` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`) VALUES
(1, 'this is getting worse'),
(2, 'i hate all this'),
(3, 'its just getting better'),
(4, 'This is to report a theft all will be expelled'),
(5, 'the new bus sysstem will soon be available'),
(6, 'I hatte all u student. this is the vc. hence u will all be expelled. WAKA'),
(7, 'I am luving this discussion.'),
(8, 'Sherry Banku is Pregnant'),
(9, 'i am hungry. Very hungry'),
(10, 'Moridiya is very disturbing. Kai'),
(11, 'sherry is disturbing me oooooo\r\n'),
(12, 'Am back to the hostel. And its great'),
(13, 'Alfa Ridwan is very Disturbing. BAdddoooooo'),
(14, 'Annas is putting the world at his feet cause of girl\r\n\r\n'),
(15, 'Back to the hostel. Beginning second semester. Yippy\r\n'),
(16, 'Working hard to finish up this stuff. God help!!!'),
(17, 'Kingfahd was here.... Just passing by!!!'),
(18, 'Cant hold this feeling. OOH'),
(19, 'in class right now\r\n'),
(20, 'this is a good story'),
(21, 'this is a a bad story'),
(22, 'this is the second malicious attack'),
(23, 'Getting the Groove On!!!');

-- --------------------------------------------------------

--
-- Table structure for table `office_practice`
--

CREATE TABLE IF NOT EXISTS `office_practice` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `physical_education`
--

CREATE TABLE IF NOT EXISTS `physical_education` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `physical_education_`
--

CREATE TABLE IF NOT EXISTS `physical_education_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `physics`
--

CREATE TABLE IF NOT EXISTS `physics` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `session` varchar(20) NOT NULL,
  `present` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `session` (`session`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session`, `present`) VALUES
(1, '2013/2014', '0'),
(2, '2014/2015', '1'),
(3, '2015/2016', '0'),
(4, '2016/2017', '0'),
(5, '2017/2018', '0'),
(6, '2018/2019', '0'),
(7, '2019/2020', '0'),
(8, '2020/2021', '0'),
(9, '2021/2022', '0'),
(10, '2022/2023', '0'),
(11, '2023/2024', '0'),
(12, '2024/2025', '0'),
(13, '2025/2026', '0'),
(14, '2026/2027', '0'),
(15, '2027/2028', '0'),
(16, '2028/2029', '0'),
(17, '2029/2030', '0'),
(18, '2030/2031', '0'),
(19, '2031/2032', '0'),
(20, '2032/2033', '0'),
(21, '2033/2034', '0'),
(22, '2034/2035', '0'),
(23, '2035/2036', '0'),
(24, '2036/2037', '0'),
(25, '2037/2038', '0'),
(26, '2038/2039', '0'),
(27, '2039/2040', '0'),
(28, '2040/2041', '0'),
(29, '2041/2042', '0'),
(30, '2042/2043', '0'),
(31, '2043/2044', '0'),
(32, '2044/2045', '0'),
(33, '2045/2046', '0'),
(34, '2046/2047', '0'),
(35, '2047/2048', '0'),
(36, '2048/2049', '0'),
(37, '2049/2050', '0'),
(38, '2050/2051', '0'),
(39, '2051/2052', '0'),
(40, '2052/2053', '0'),
(41, '2053/2054', '0'),
(42, '2054/2055', '0'),
(43, '2055/2056', '0'),
(44, '2056/2057', '0'),
(45, '2057/2058', '0'),
(46, '2058/2059', '0'),
(47, '2059/2060', '0'),
(48, '2060/2061', '0'),
(49, '2061/2062', '0'),
(50, '2062/2063', '0'),
(51, '2063/2064', '0');

-- --------------------------------------------------------

--
-- Table structure for table `social_studies`
--

CREATE TABLE IF NOT EXISTS `social_studies` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss1_art_first_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss1_art_first_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Literature` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Igbo` int(5) NOT NULL,
  `Hausa` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `French` int(5) NOT NULL,
  `Music` int(5) NOT NULL,
  `History` int(5) NOT NULL,
  `CRS` int(5) NOT NULL,
  `IRS` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `Arabic` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss1_art_second_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss1_art_second_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Literature` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Igbo` int(5) NOT NULL,
  `Hausa` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `French` int(5) NOT NULL,
  `Music` int(5) NOT NULL,
  `History` int(5) NOT NULL,
  `CRS` int(5) NOT NULL,
  `IRS` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `Arabic` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `total_for_first` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss1_art_third_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss1_art_third_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Literature` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Igbo` int(5) NOT NULL,
  `Hausa` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `French` int(5) NOT NULL,
  `Music` int(5) NOT NULL,
  `History` int(5) NOT NULL,
  `CRS` int(5) NOT NULL,
  `IRS` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `Arabic` int(5) NOT NULL,
  `first_term_score` int(10) NOT NULL,
  `second_term_score` int(10) NOT NULL,
  `third_term_score` int(10) NOT NULL,
  `total_average` int(10) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss1_commercial_first_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss1_commercial_first_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Igbo` int(5) NOT NULL,
  `Hausa` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Commerce` int(5) NOT NULL,
  `Clothing_And_Textile` int(5) NOT NULL,
  `Home_Management` int(5) NOT NULL,
  `Accounting` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ss1_commercial_first_term_broad_sheet`
--

INSERT INTO `ss1_commercial_first_term_broad_sheet` (`s/n`, `student_id`, `name`, `Mathematics`, `English`, `Yoruba`, `Igbo`, `Hausa`, `Biology`, `Economics`, `Commerce`, `Clothing_And_Textile`, `Home_Management`, `Accounting`, `Government`, `total_marks`, `percentage`, `position`, `session`) VALUES
(8, '526bbcd547b9e', 'Deborah Ayo Bimpe', 65, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 113, 56.50, NULL, '2015/2016'),
(9, '526bf460ac2e3', 'kacho kazim ayo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00, NULL, '2015/2016'),
(10, '530cd930ab806', 'Bimpe Tomisin Ayo', 65, 77, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 142, 71.00, NULL, '2015/2016'),
(11, '5331988ff30b6', 'KingFad Ajao Ayo', 63, 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 112, 56.00, NULL, '2015/2016'),
(12, '53edb7b993776', 'Olaoluwa Anjola Ope', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00, NULL, '2015/2016'),
(13, '53edc30ea498e', 'kjdk kjdkj kfk', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00, NULL, '2015/2016'),
(14, '53ef103ee82ef', 'Aroyeun Tunde Sulaiman', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00, NULL, '2015/2016');

-- --------------------------------------------------------

--
-- Table structure for table `ss1_commercial_second_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss1_commercial_second_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Igbo` int(5) NOT NULL,
  `Hausa` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Commerce` int(5) NOT NULL,
  `Clothing_And_Textile` int(5) NOT NULL,
  `Home_Management` int(5) NOT NULL,
  `Accounting` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `total_for_first` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss1_commercial_third_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss1_commercial_third_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Igbo` int(5) NOT NULL,
  `Hausa` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Commerce` int(5) NOT NULL,
  `Clothing_And_Textile` int(5) NOT NULL,
  `Home_Management` int(5) NOT NULL,
  `Accounting` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `first_term_score` int(10) NOT NULL,
  `second_term_score` int(10) NOT NULL,
  `third_term_score` int(10) NOT NULL,
  `total_average` int(10) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss1_science_first_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss1_science_first_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Igbo` int(5) NOT NULL,
  `Hausa` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Chemistry` int(5) NOT NULL,
  `Physics` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Computer_Science` int(5) NOT NULL,
  `Technical_Drawing` int(5) NOT NULL,
  `Geography` int(5) NOT NULL,
  `Agriculture` int(5) NOT NULL,
  `Metal_Work` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`),
  UNIQUE KEY `student_id` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ss1_science_first_term_broad_sheet`
--

INSERT INTO `ss1_science_first_term_broad_sheet` (`s/n`, `student_id`, `name`, `Mathematics`, `English`, `Yoruba`, `Igbo`, `Hausa`, `Biology`, `Chemistry`, `Physics`, `Economics`, `Computer_Science`, `Technical_Drawing`, `Geography`, `Agriculture`, `Metal_Work`, `total_marks`, `percentage`, `position`, `session`) VALUES
(1, '526cc086734df', 'Adekunle Selim Bayo', 57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 57, 28.50, NULL, '2015/2016'),
(2, '526e4747c0660', 'Ajola Oluwa ayo', 12, 68, 0, 13, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 143, 28.60, NULL, '2015/2016'),
(3, '5307b6f8910c3', 'kazeem olagunju ayo', 25, 51, 0, 26, 51, 0, 0, 0, 0, 0, 0, 0, 0, 0, 153, 30.60, NULL, '2015/2016'),
(4, '5344817489a7b', 'Korede Ayo Opeyemi', 15, 75, 0, 18, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 156, 31.20, NULL, '2015/2016'),
(5, '53dfabfb1c368', 'Akolawole Sherifat Bola', 100, 100, 100, 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 500, 100.00, NULL, '2015/2016'),
(6, '53ee3dfa84ea7', 'jhjhd jksjk jhdjh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00, NULL, '2015/2016');

-- --------------------------------------------------------

--
-- Table structure for table `ss1_science_second_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss1_science_second_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Igbo` int(5) NOT NULL,
  `Hausa` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Chemistry` int(5) NOT NULL,
  `Physics` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Computer_Science` int(5) NOT NULL,
  `Technical_Drawing` int(5) NOT NULL,
  `Geography` int(5) NOT NULL,
  `Agriculture` int(5) NOT NULL,
  `Metal_Work` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `total_for_first` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss1_science_third_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss1_science_third_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Igbo` int(5) NOT NULL,
  `Hausa` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Chemistry` int(5) NOT NULL,
  `Physics` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Computer_Science` int(5) NOT NULL,
  `Technical_Drawing` int(5) NOT NULL,
  `Geography` int(5) NOT NULL,
  `Agriculture` int(5) NOT NULL,
  `Metal_Work` int(5) NOT NULL,
  `first_term_score` int(10) NOT NULL,
  `second_term_score` int(10) NOT NULL,
  `third_term_score` int(10) NOT NULL,
  `total_average` int(10) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  `session` varchar(20) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss2_art_first_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss2_art_first_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Literature` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Computer_Science` int(5) NOT NULL,
  `CRS` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `Book_keeping` int(5) NOT NULL,
  `Civic_Education` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss2_art_second_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss2_art_second_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Literature` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Computer_Science` int(5) NOT NULL,
  `CRS` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `Book_keeping` int(5) NOT NULL,
  `Civic_Education` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `total_for_first` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss2_art_third_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss2_art_third_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Literature` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Computer_Science` int(5) NOT NULL,
  `CRS` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `Book_keeping` int(5) NOT NULL,
  `Civic_Education` int(5) NOT NULL,
  `first_term_score` int(10) NOT NULL,
  `second_term_score` int(10) NOT NULL,
  `third_term_score` int(10) NOT NULL,
  `total_average` int(10) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss2_commercial_first_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss2_commercial_first_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Commerce` int(5) NOT NULL,
  `Accounting` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `Book_keeping` int(5) NOT NULL,
  `Office_Practice` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss2_commercial_second_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss2_commercial_second_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Commerce` int(5) NOT NULL,
  `Accounting` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `Book_keeping` int(5) NOT NULL,
  `Office_Practice` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `total_for_first` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss2_commercial_third_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss2_commercial_third_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Commerce` int(5) NOT NULL,
  `Accounting` int(5) NOT NULL,
  `Government` int(5) NOT NULL,
  `Book_keeping` int(5) NOT NULL,
  `Office_Practice` int(5) NOT NULL,
  `first_term_score` int(10) NOT NULL,
  `second_term_score` int(10) NOT NULL,
  `third_term_score` int(10) NOT NULL,
  `total_average` int(10) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss2_science_first_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss2_science_first_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Chemistry` int(5) NOT NULL,
  `Physics` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Computer_Science` int(5) NOT NULL,
  `Applied_Electricity` int(5) NOT NULL,
  `Technical_Drawing` int(5) NOT NULL,
  `Geography` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss2_science_second_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss2_science_second_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Chemistry` int(5) NOT NULL,
  `Physics` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Computer_Science` int(5) NOT NULL,
  `Applied_Electricity` int(5) NOT NULL,
  `Technical_Drawing` int(5) NOT NULL,
  `Geography` int(5) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `total_for_first` int(5) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` int(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss2_science_third_term_broad_sheet`
--

CREATE TABLE IF NOT EXISTS `ss2_science_third_term_broad_sheet` (
  `s/n` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Mathematics` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Yoruba` int(5) NOT NULL,
  `Biology` int(5) NOT NULL,
  `Chemistry` int(5) NOT NULL,
  `Physics` int(5) NOT NULL,
  `Economics` int(5) NOT NULL,
  `Computer_Science` int(5) NOT NULL,
  `Applied_Electricity` int(5) NOT NULL,
  `Technical_Drawing` int(5) NOT NULL,
  `Geography` int(5) NOT NULL,
  `first_term_score` int(10) NOT NULL,
  `second_term_score` int(10) NOT NULL,
  `third_term_score` int(10) NOT NULL,
  `total_average` int(10) NOT NULL,
  `percentage` float(10,2) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(15) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admission_date` date NOT NULL,
  `admin_admitting` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state_of_origin` varchar(30) NOT NULL,
  `state_of_birth` varchar(30) NOT NULL,
  `parent_phone` varchar(20) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `class_of_admitant` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `courses` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id` (`student_id`,`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `surname`, `firstname`, `othername`, `username`, `password`, `phone`, `email`, `admission_date`, `admin_admitting`, `date_of_birth`, `age`, `gender`, `nationality`, `religion`, `address`, `state_of_origin`, `state_of_birth`, `parent_phone`, `parent_email`, `class_of_admitant`, `department`, `picture`, `courses`) VALUES
(3, '526bbcd547b9e', 'Deborah', 'Ayo', 'Bimpe', 'debby', '12345', '08187960333', 'Debby@yahoo.com', '2013-10-26', 'afomayor', '1995-06-18', 19, 'female', 'Ghanian', 'traditional', 'iju ishaga, lagos', 'ENUGU', 'IMO', '08033447722', 'jaiye@yahoo.com', 'SS1 Commercial', 'art', 'Fighting for bus 2.jpg', 'Metal_Work,Agriculture,IRS,Geography,Technical_Drawing,French,Computer_Science,Economics,Physics,Chemistry,Biology,Yoruba,English,Mathematics,'),
(4, '526bf460ac2e3', 'kacho', 'kazim', 'ayo', 'muizudeen', '12345', '08187960584', 'kazeem@yahoo.com', '2013-10-26', 'afomayor', '2014-04-11', 0, 'male', 'ghanian', 'traditional', 'labalaba, lagos', 'GOMBE', 'BORNO', '08074747474', 'jaiye@yahoo.com', 'SS1 Commercial', 'commerce', 'two fighting.jpg', ''),
(6, '526cbfbee0d28', 'Opola', 'Abiola', 'Ope', 'ayo99', '12345', '08187960584', 'abiloa@yahoo.com', '2013-10-27', 'afomayor', '1997-12-04', 17, 'male', 'Nigerian', 'traditional', 'agbado, lagos', 'IMO', 'DELTA', '08044882237', 'jaiye@yahoo.com', 'SS1 Art', 'art', '1_2.jpg', ''),
(7, '526cc086734df', 'Adekunle', 'Selim', 'Bayo', 'taiwo@mail.com', 'Adekunle', '08033442231', 'adesel@yahoo.com', '2013-10-26', 'afomayor', '1996-06-20', 19, 'male', 'Nigerian', 'muslim', 'ajao estate, lagos', 'LAGOS', 'OGUN', '08033772263', 'jaiye@yahoo.com', 'SS1 Science', 'art', 'Fighting for bus 2.jpg', ''),
(8, '526e4747c0660', 'Ajola', 'Oluwa', 'ayo', 'davido', '12345', '08183434223', 'slaba@yahoo.com', '2013-10-11', 'afomayor', '2014-08-06', 19, 'male', 'ghanian', 'traditional', 'labalaba, lagos', 'IMO', 'JIGAWA', '08074744534', 'jaiye@yahoo.com', 'SS1 Science', 'science', '1_2.jpg', ''),
(9, '5307b6f8910c3', 'kazeem', 'olagunju', 'ayo', 'kayzee', '12345', '0818796876', 'kacho@yahoo.com', '2014-02-20', 'afomayor', '2014-08-06', 19, 'male', 'Nigerian', 'muslim', 'labalaba, lagos', 'IMO', 'GOMBE', '08074747474', 'jaiye@yahoo.com', 'SS1 Science', 'commerce', '', 'accounting,commerce,government,literature,further_maths,french,yoruba,economics,english,mathematics,'),
(11, '530cd930ab806', 'Bimpe', 'Tomisin', 'Ayo', 'sido', '12345', '0818372718', 'ayoo@yahoo.com', '2014-02-25', 'afomayor', '2014-08-07', 19, 'female', 'nigerian', 'christian', 'labalaba, lagos', 'ANAMBRA', 'JIGAWA', '0807434321', 'jaiy33e@yahoo.com', 'SS1 Commercial', 'art', '44502_472366406140938_1003873417_n.jpg', ''),
(13, '5331988ff30b6', 'KingFad', 'Ajao', 'Ayo', 'afoking', '12345', '08187343212', 'l3wa@yahoo.com', '2014-06-19', 'afomayor', '2014-08-01', 19, 'male', 'ghanian', 'traditional', 'labalaba, lagos', 'AKWA_IBOM', 'GOMBE', '08074743432', 'jaiye@yahoo.com', 'SS1 Commercial', 'science', '44502_472366406140938_1003873417_n.jpg', 'biology,chemistry,physics,agriculture,further_maths,geography,yoruba,economics,english,mathematics,'),
(16, '53447dab2bcbf', 'kandeski', 'abbe', 'olab', 'kandeski11', '12345', '08033223421', 'kanch@yahoo.com', '2014-04-09', 'afomayor', '2014-05-14', 19, 'male', 'ghanian', 'traditional', 'labalaba, lagos', 'ABUJA', 'GOMBE', '08074744321', 'jaiye@yahoo.com', 'ss2', 'science', '537555_283615115103137_2138346181_n.jpg', 'biology,chemistry,physics,agriculture,further_maths,geography,yoruba,economics,english,mathematics,'),
(17, '5344817489a7b', 'Korede', 'Ayo', 'Opeyemi', 'ola333', '12345', '08187967374', 'akoko@yahoo.com', '2014-04-20', 'afomayor', '2014-07-02', 19, 'male', 'Nigerian', 'Islam', 'labalaba,ogun', 'GOMBE', 'EBONYI', '08074742734', 'jaiyeee@yahoo.com', 'SS1 Science', 'commerce', '548932_380351968712587_1820246567_n.jpg', ''),
(20, '5346d8ed7e296', 'Abiola', 'Ade', 'Femi', 'ss22', '12345', '08187962345', 'femo@yahoo.com', '2014-04-01', 'afomayor', '1996-07-19', 19, 'male', 'Nigerian', 'christian', 'labalaba, lagos', 'BENUE', 'EDO', '08074234564', 'jaiye@yahoo.com', 'JSS1', 'art', 'images.jpg', 'Physical_Education_,Music_,Agricultural_Science,CRS_,Yoruba_,French_,Fine_Art,Home_Economics,Business_Studies,Introductory_Technology,Social_Studies,Integrated_Science,Mathematics_,English_,'),
(21, '53dfabfb1c368', 'Akolawole', 'Sherifat', 'Bola', 'sheree', '12345', '08044882288', 'sherifa@gmail.com', '2014-08-01', 'afomayor', '2014-08-05', 18, 'female', 'nigerian', 'muslim', 'lagos', 'ENUGU', 'BENUE', '080337721277', 'a@h.com', 'SS1 Science', '', '44502_472366406140938_1003873417_n.jpg', ''),
(22, '53edb7b993776', 'Olaoluwa', 'Anjola', 'Ope', 'anjy', '12345', '08033228844', 'anjy@gmail.com', '2014-08-15', 'afomayor', '2014-08-15', 12, 'male', 'Nigerian', 'muslim', 'no 1 taiwo lawal street', 'IMO', 'ENUGU', '08033448822', 'ola@yahoo.com', 'SS1 Commercial', '', '1.jpg', ''),
(24, '53edc30ea498e', 'kjdk', 'kjdkj', 'kfk', 'kldkl', '12345', '08033443323', 'kdkj@hdh.com', '2014-08-15', 'afomayor', '2014-08-15', 12, 'male', 'niklzs', 'traditional', 'klkc', 'JIGAWA', 'GOMBE', 'ojsjks', 'tsfA@oifj.com', 'SS1 Commercial', '', '1_2.jpg', ''),
(26, '53ee3dfa84ea7', 'jhjhd', 'jksjk', 'jhdjh', 'ajjoo', '12345', '08033882283', 'jhdjh@jdj.com', '2014-08-15', 'afomayor', '2014-08-14', 2028, 'male', 'Nigerian', 'muslim', 'iju lagos', 'CROSS_RIVER', 'KWARA', '08033772212', 'jdj@hfh.com', 'SS1 Science', '', '1.jpg', ''),
(27, '53ee41c8eecf0', 'Ade', 'Ajoke', 'Bimpe', 'bimpe123', '12345', '08033228833', 'bimpa@gmail.com', '2014-08-15', 'afomayor', '1993-06-18', 2008, 'male', 'Nigerian', 'christian', '', 'CROSS_RIVER', 'CROSS_RIVER', '08033882212', '', 'SS1 Art', '', 'graduation2.jpg', ''),
(28, '53ef103ee82ef', 'Aroyeun', 'Tunde', 'Sulaiman', 'tunde21', '12345', '08022883384', 'tunex@gmail.com', '2014-08-16', 'afomayor', '1995-08-10', 19, 'male', 'Nigerian', 'muslim', 'Sango Lagos', 'KWARA', 'LAGOS', '', '', 'SS1 Commercial', '', '282385_380346805379770_441024064_n.jpg', ''),
(29, '53ef3752dacd8', 'Afolake', 'Korede', 'Ade', 'koko', '12345', '08044663321', 'koko@gmail.com', '2014-08-16', 'afomayor', '2003-06-13', 11, 'male', 'Nigerian', 'muslim', 'Sango ogun state', 'LAGOS', 'LAGOS', '', '', 'JSS2 ', '', 'graduation2.jpg', 'Physical_Education_,Music_,Agricultural_Science,IRS_,Yoruba_,French_,Fine_Art,Home_Economics,Business_Studies,Introductory_Technology,Social_Studies,Integrated_Science,Mathematics_,English_,'),
(30, '53f9aa886af5a', 'Aroyeun', 'Omar', 'Faruq', 'omaru', '12345', '08033884952', 'omar364@gmailc.com', '2014-08-24', 'afomayor', '1997-06-26', 17, 'male', 'Nigerian', 'muslim', 'sango iju ogun state', 'KWARA', 'SOKOTO', '08033448384', '', 'JSS2 ', '', 'graduation2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `teacher`, `level`, `session`) VALUES
(15, 'Mathematics', 'jibo', 'senior', '2014/2015'),
(17, 'English', 'simby12', 'senior', '2014/2015'),
(18, 'Literature', 'afoking', 'senior', '2014/2015'),
(19, 'Yoruba', 'simby12', 'senior', '2014/2015'),
(20, 'Igbo', 'afomayor', 'senior', '2014/2015'),
(21, 'Hausa', 'simby12', 'senior', '2014/2015'),
(22, 'Biology', 'bovi123', 'senior', '2014/2015'),
(23, 'Chemistry', 'afomayor', 'senior', '2014/2015'),
(24, 'Physics', 'bovi123', 'senior', '2014/2015'),
(25, 'Economics', 'bovi123', 'senior', '2014/2015'),
(26, 'Commerce', 'simby12', 'senior', '2014/2015'),
(30, 'Food_And_Nutrition', 'simby12', 'senior', '2014/2015'),
(31, 'Clothing_And_Textile', 'simby12', 'senior', '2014/2015'),
(32, 'Home_Management', 'afomayor', 'senior', '2014/2015'),
(33, 'Computer_Science', 'simby12', 'senior', '2014/2015'),
(34, 'French', 'afomayor', 'senior', '2014/2015'),
(35, 'Music', 'bovi123', 'senior', '2014/2015'),
(36, 'Applied_Electricity', 'simby12', 'senior', '2014/2015'),
(37, 'Auto_Mechanics', 'simby12', 'senior', '2014/2015'),
(38, 'Technical_Drawing', 'bovi123', 'senior', '2014/2015'),
(39, 'History', 'afomayor', 'senior', '2014/2015'),
(40, 'Geography', 'afomayor', 'senior', '2014/2015'),
(41, 'CRS', 'afomayor', 'senior', '2014/2015'),
(42, 'IRS', 'simby12', 'senior', '2014/2015'),
(43, 'Accounting', 'afomayor', 'senior', '2014/2015'),
(44, 'Government', 'afomayor', 'senior', '2014/2015'),
(45, 'Physical_Education', 'afomayor', 'senior', '2014/2015'),
(46, 'Agriculture', 'afomayor', 'senior', '2014/2015'),
(47, 'Arabic', 'afomayor', 'senior', '2014/2015'),
(48, 'Wood_Work', 'simby12', 'senior', '2014/2015'),
(49, 'Metal_Work', 'bovi123', 'senior', '2014/2015'),
(50, 'Visual', 'afomayor', 'senior', '2014/2015'),
(54, 'English_', 'afomayor', 'junior', '2014/2015'),
(55, 'Mathematics_', 'bovi123', 'junior', '2014/2015'),
(56, 'Integrated_Science', 'simby12', 'junior', '2014/2015'),
(57, 'Social_Studies', 'simby12', 'junior', '2014/2015'),
(58, 'Introductory_Technology', 'afomayor', 'junior', '2014/2015'),
(59, 'Business_Studies', 'simby12', 'junior', '2014/2015'),
(60, 'Home_Economics', 'afomayor', 'junior', '2014/2015'),
(61, 'Fine_Art', 'bovi123', 'junior', '2014/2015'),
(62, 'French_', 'simby12', 'junior', '2014/2015'),
(63, 'Igbo_', 'bovi123', 'junior', '2014/2015'),
(64, 'Hausa_', 'bovi123', 'junior', '2014/2015'),
(65, 'Yoruba_', 'afomayor', 'junior', '2014/2015'),
(66, 'Arabic_', 'bovi123', 'junior', '2014/2015'),
(67, 'CRS_', 'simby12', 'junior', '2014/2015'),
(68, 'IRS_', 'afomayor', 'junior', '2014/2015'),
(69, 'Agricultural_Science', 'simby12', 'junior', '2014/2015'),
(70, 'Music_', 'simby12', 'junior', '2014/2015'),
(71, 'Physical_Education_', 'bovi123', 'junior', '2014/2015'),
(72, 'Health_Education', 'bovi123', 'junior', '2014/2015'),
(73, 'Book_keeping', 'afoking', 'senior', '2014/2015'),
(74, 'Office_Practice', 'jibo', 'senior', '2014/2015'),
(75, 'Civic_Education', 'bovi123', 'senior', '2014/2015');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `subject_teacher` varchar(20) NOT NULL,
  `age` int(4) NOT NULL,
  `acess` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`phone`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `surname`, `firstname`, `othername`, `username`, `password`, `phone`, `email`, `class`, `address`, `sex`, `subject_teacher`, `age`, `acess`) VALUES
(1, 'Afolabi', 'Mayowa', 'Sheriff', 'afomayor', '827ccb0eea8a706c4c34a16891f84e7b', '08033448856', 'akoko@gmail.com', 'ss1', 'agege lagos', 'male', 'maths', 35, 1),
(2, 'Akoko', 'Tola', 'Simbi', 'simby12', '827ccb0eea8a706c4c34a16891f84e7b', '08044556677', 'simby@yahoo.com', 'jss2', 'agege,lagos, Nigeria', 'male', 'maths', 25, 1),
(3, 'Olagunju', 'Kazeem', 'Bovi', 'bovi123', '827ccb0eea8a706c4c34a16891f84e7b', '08022332214', 'bovi@gmail.com', '', 'agege', 'female', 'maths', 21, 1),
(5, 'Lawal', 'Jibola', 'Akanbi', 'jibo', '827ccb0eea8a706c4c34a16891f84e7b', '08044992230', 'jibo@yahoo.com', '', 'iju ishaga lagos', 'female', '', 23, 1),
(6, 'Afolabi', 'Kingfahd', 'Tope', 'afoking', '827ccb0eea8a706c4c34a16891f84e7b', '08033448823', 'afoking23@yahoo.com', '', 'sango ilorin .', 'male', '', 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `technical_drawing`
--

CREATE TABLE IF NOT EXISTS `technical_drawing` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `visual_art`
--

CREATE TABLE IF NOT EXISTS `visual_art` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wood_work`
--

CREATE TABLE IF NOT EXISTS `wood_work` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yoruba`
--

CREATE TABLE IF NOT EXISTS `yoruba` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `yoruba`
--

INSERT INTO `yoruba` (`no`, `student_id`, `name`, `CA_for_first`, `EXAM_for_first`, `total_for_first`, `CA_for_second`, `EXAM_for_second`, `total_for_second`, `CA_for_third`, `EXAM_for_third`, `total_for_third`, `overall_average`, `session`, `class`) VALUES
(1, '526e4747c0660', 'Ajola Oluwa ayo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2014/2015', 'SS1 Science'),
(2, '5307b6f8910c3', 'kazeem olagunju ayo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2014/2015', 'SS1 Science'),
(3, '5344817489a7b', 'Korede Ayo Opeyemi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2014/2015', 'SS1 Science'),
(4, '53dfabfb1c368', 'Akolawole Sherifat Bola', 40, 60, 100, 40, 60, 100, 40, 60, 100, 100, '2014/2015', 'SS1 Science');

-- --------------------------------------------------------

--
-- Table structure for table `yoruba_`
--

CREATE TABLE IF NOT EXISTS `yoruba_` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `CA_for_first` int(5) NOT NULL,
  `EXAM_for_first` int(5) NOT NULL,
  `total_for_first` int(11) NOT NULL,
  `CA_for_second` int(11) NOT NULL,
  `EXAM_for_second` int(11) NOT NULL,
  `total_for_second` int(11) NOT NULL,
  `CA_for_third` int(11) NOT NULL,
  `EXAM_for_third` int(11) NOT NULL,
  `total_for_third` int(11) NOT NULL,
  `overall_average` int(11) NOT NULL,
  `session` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

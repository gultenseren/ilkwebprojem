-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2018 at 10:20 PM
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
-- Database: `stdmgdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `hours_number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `label`, `hours_number`) VALUES
(1, 'CENG101 - Introduction of Computer Engineering', 42),
(2, 'CENG204 - Database', 38),
(3, 'CENG109 - Computer Networking', 36),
(4, 'CENG105 - Data Structure', 38),
(5, 'CENG307 - Numerical Analysis', 35),
(8, 'CENG209 - Internet Programming', 27),
(9, 'CENG215 - Computer Architecture', 25),
(15, 'CENG307- Bussiness English', 28),
(17, 'CENG207 - Object Oriented Programming', 32);

-- --------------------------------------------------------

--
-- Table structure for table `coursestudent`
--

DROP TABLE IF EXISTS `coursestudent`;
CREATE TABLE IF NOT EXISTS `coursestudent` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_lastname` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `score` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coursestudent`
--

INSERT INTO `coursestudent` (`student_id`, `student_name`, `student_lastname`, `course_name`, `score`) VALUES
(12, 'Hüseyin', 'Tekin', 'CENG101 - Introduction of Computer Engineering', 40),
(11, 'Yasemin', 'Çetin', 'CENG101 - Introduction of Computer Engineering', 70),
(14, 'Burçe', 'Karagül', 'CENG101 - Introduction of Computer Engineering', 75),
(15, 'Emre ', 'Karagül', 'CENG101 - Introduction of Computer Engineering', 90),
(13, 'Sena Selin', 'Tekin', 'CENG101 - Introduction of Computer Engineering', 55),
(20, 'Zimam', 'Asghar', 'CENG101 - Introduction of Computer Engineering', 11),
(16, 'Bahar', 'Yalkın', 'CENG101 - Introduction of Computer Engineering', 80),
(18, 'Furkan ', 'Özgül', 'CENG204 - Database', 30),
(19, 'Hakan', 'Hüzünlü', 'CENG204 - Database', 88),
(21, 'Sena', 'Topgül', 'CENG204 - Database', 46),
(17, 'Hamdiye', 'Ergül', 'CENG204 - Database', 32),
(2, 'Aylin', 'Akkan', 'CENG101 - Introduction of Computer Engineering', 70),
(28, 'Selin', 'Akkan', 'CENG204 - Database', 0),
(10, 'Sadık', 'Çetin', 'CENG204 - Database', 92),
(6, 'Ayşe', 'İLVAN', 'CENG109 - Computer Networking', 80),
(5, 'Kaan', 'Çetin', 'CENG109 - Computer Networking', 77),
(9, 'İrem', 'Çetin', 'CENG109 - Computer Networking', 60),
(10, 'Sadık', 'Çetin', 'CENG109 - Computer Networking', 0),
(2, 'Aylin', 'Akkan', 'CENG105 - Data Structure', 22),
(16, 'Bahar', 'Yalkın', 'CENG105 - Data Structure', 78),
(17, 'Hamdiye', 'Ergül', 'CENG105 - Data Structure', 85),
(18, 'Furkan ', 'Özgül', 'CENG105 - Data Structure', 92),
(19, 'Hakan', 'Hüzünlü', 'CENG105 - Data Structure', 0),
(20, 'Zimam', 'Asghar', 'CENG105 - Data Structure', 0),
(12, 'Hüseyin', 'Tekin', 'CENG304 - Visual Programming', 0),
(11, 'Yasemin', 'Çetin', 'CENG304 - Visual Programming', 0),
(18, 'Furkan ', 'Özgül', 'CENG304 - Visual Programming', 0),
(17, 'Hamdiye', 'Ergül', 'CENG304 - Visual Programming', 0),
(12, 'Hüseyin', 'Tekin', 'CENG209 - Internet Programming', 88),
(13, 'Sena Selin', 'Tekin', 'CENG209 - Internet Programming', 0),
(9, 'İrem', 'Çetin', 'CENG307- Bussiness English', 0),
(16, 'Bahar', 'Yalkın', 'CENG307- Bussiness English', 85),
(6, 'Ayşe', 'İLVAN', 'CENG307- Bussiness English', 0),
(28, 'Selin', 'Akkan', 'CENG307- Bussiness English', 80),
(32, 'Karya', 'Kale', 'CENG307- Bussiness English', 78),
(29, 'Fatma', 'Kılıç', 'CENG204 - Database', 11),
(38, 'Nur', 'Arslan', 'CENG204 - Database', 0),
(39, 'Yusuf', 'Gök', 'CENG204 - Database', 56),
(37, 'Hamza', 'Aslan', 'CENG109 - Computer Networking', 43),
(18, 'Furkan ', 'Özgül', 'CENG109 - Computer Networking', 69),
(16, 'Bahar', 'Yalkın', 'CENG109 - Computer Networking', 19),
(30, 'Ömer', 'Kaya', 'CENG105 - Data Structure', 18),
(23, 'Fatma', 'Dikili', 'CENG307 - Numerical Analysis', 0),
(10, 'Sadık', 'Çetin', 'CENG307 - Numerical Analysis', 0),
(6, 'Ayşe', 'İLVAN', 'CENG307 - Numerical Analysis', 0),
(5, 'Kaan', 'Çetin', 'CENG307 - Numerical Analysis', 0),
(33, 'Maide', 'Ersel', 'CENG307 - Numerical Analysis', 0),
(32, 'Karya', 'Kale', 'CENG307 - Numerical Analysis', 0),
(18, 'Furkan ', 'Özgül', 'CENG307 - Numerical Analysis', 0),
(23, 'Fatma', 'Dikili', 'CENG209 - Internet Programming', 92),
(36, 'Aylin', 'Akkan', 'CENG209 - Internet Programming', 60),
(14, 'Burçe', 'Karagül', 'CENG209 - Internet Programming', 0),
(11, 'Yasemin', 'Tekin', 'CENG209 - Internet Programming', 75),
(9, 'İrem', 'Çetin', 'CENG209 - Internet Programming', 0),
(16, 'Bahar', 'Yalkın', 'CENG215 - Computer Architecture', 78),
(5, 'Kaan', 'Çetin', 'CENG215 - Computer Architecture', 69),
(30, 'Ömer', 'Kaya', 'CENG215 - Computer Architecture', 63),
(36, 'Aylin', 'Akkan', 'CENG215 - Computer Architecture', 70),
(9, 'İrem', 'Çetin', 'CENG215 - Computer Architecture', 44),
(1, 'Gülten Seren', 'İLVAN', 'CENG215 - Computer Architecture', 98),
(5, 'Kaan', 'Çetin', 'CENG307- Bussiness English', 75),
(23, 'Fatma', 'Dikili', 'CENG307- Bussiness English', 61),
(14, 'Burçe', 'Karagül', 'CENG207 - Object Oriented Programming', 0),
(6, 'Ayşe', 'İLVAN', 'CENG207 - Object Oriented Programming', 63),
(1, 'Gülten Seren', 'İLVAN', 'CENG207 - Object Oriented Programming', 79),
(21, 'Sena', 'Topgül', 'CENG207 - Object Oriented Programming', 54),
(36, 'Aylin', 'Akkan', 'CENG207 - Object Oriented Programming', 78),
(20, 'Zimam', 'Asghar', 'CENG207 - Object Oriented Programming', 22),
(13, 'Sena Selin', 'Tekin', 'CENG207 - Object Oriented Programming', 17);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `student_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `student_score` float NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `sex`, `birthdate`, `phone`, `address`) VALUES
(1, 'Gülten Seren', 'İLVAN', 'Female', '1994-03-16', '05398553523', 'İstanbul'),
(5, 'Kaan', 'Çetin', 'male', '2012-01-01', '05396652314', 'İzmir'),
(6, 'Ayşe', 'İLVAN', 'Female', '1957-04-18', '05333079490', 'Adapazarı'),
(9, 'İrem', 'Çetin', 'Female', '2015-07-10', '05554211563', 'Bartın'),
(10, 'Sadık', 'Çetin', 'Male', '1981-03-20', '05412367799', 'Bartın'),
(11, 'Yasemin', 'Tekin', 'Female', '1973-08-22', '05317531269', 'Bolu'),
(12, 'Hüseyin', 'Tekin', 'Male', '2018-04-20', '05368521478', 'Bolu'),
(13, 'Sena Selin', 'Tekin', 'Female', '2018-04-12', '05236987452', 'Bolu'),
(14, 'Burçe', 'Karagül', 'Female', '2018-04-20', '05321478963', 'Kastamonu'),
(15, 'Emre ', 'Karagül', 'Male', '2018-04-12', '05369875362', 'Kastamonu'),
(16, 'Bahar', 'Yalkın', 'Female', '2018-04-12', '05963521478', 'Denizli'),
(18, 'Furkan ', 'Özgül', 'Male', '2018-04-05', '05896325412', 'İzmir'),
(19, 'Hakan', 'Hüzünlü', 'Male', '2018-04-14', '05869325142', 'Kartal'),
(20, 'Zimam', 'Asghar', 'Female', '2018-04-05', '05896325689', 'Pakistan'),
(21, 'Sema', 'Topgül', 'female', '2018-04-20', '05398657412', 'Bostancı'),
(23, 'Fatma', 'Dikili', 'female', '2000-04-18', '05987412563', 'Etiler'),
(28, 'Selin', 'Akkan', 'Female', '2018-05-04', '05362147879', 'Tuzla'),
(29, 'Fatma', 'Kılıç', 'Female', '2017-11-17', '05362221100', 'İstanbul'),
(30, 'Ömer', 'Kaya', 'Male', '2015-05-30', '05366662244', 'İzmir'),
(31, 'Kaya', 'Er', 'Male', '2017-05-20', '05398887744', 'Erzurum'),
(32, 'Karya', 'Kale', 'Male', '2017-05-12', '05366665544', 'İzmir'),
(33, 'Maide', 'Ersel', 'Female', '2015-05-29', '05369954411', 'İzmir'),
(36, 'Aylin', 'Akkan', 'female', '1994-11-14', '5963521478', 'Tuzla'),
(37, 'Hamza', 'Aslan', 'male', '2004-02-29', '5369875362', 'Adana'),
(38, 'Nur', 'Arslan', 'female', '1994-05-05', '05398885533', 'Maltepe'),
(39, 'Yusuf', 'Gök', 'male', '1988-07-03', '05554231263', 'Bostancı');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'gultenseren', 'kaancetin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2018 at 11:00 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `label`, `hours_number`) VALUES
(1, 'CENG101 - Introduction of Computer Engineering', 42),
(2, 'CENG204 - Database', 38),
(3, 'CENG109 - Computer Networking', 36),
(4, 'CENG105 - Data Structure', 38),
(5, 'CENG307 - Numerical Analysis', 35),
(8, 'CENG209 - Internet Programming', 28),
(9, 'CENG215 - Computer Architecture', 25),
(15, 'CENG307- Bussiness English', 28),
(17, 'CENG207 - Object Oriented Programming', 32),
(19, 'ING202 - English II', 20);

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

DROP TABLE IF EXISTS `enroll`;
CREATE TABLE IF NOT EXISTS `enroll` (
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `score` int(4) NOT NULL,
  KEY `FK_studentid` (`student_id`),
  KEY `FK_courseid` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`student_id`, `course_id`, `score`) VALUES
(1, 2, 90),
(19, 1, 36),
(9, 1, 44),
(20, 1, 85),
(10, 2, 70),
(18, 2, 55),
(21, 2, 0),
(19, 2, 23),
(6, 2, 90),
(36, 2, 77),
(16, 1, 60),
(10, 1, 90),
(23, 1, 10),
(14, 3, 0),
(6, 3, 0),
(31, 3, 0),
(12, 3, 0),
(37, 3, 0),
(5, 3, 0),
(19, 4, 0),
(5, 4, 0),
(31, 4, 0),
(29, 4, 0),
(23, 4, 0),
(6, 5, 0),
(15, 5, 0),
(32, 5, 0),
(9, 5, 0),
(19, 5, 0),
(31, 5, 0),
(14, 1, 0),
(33, 2, 0),
(18, 4, 0),
(37, 4, 0),
(21, 19, 0),
(10, 19, 0),
(6, 19, 0),
(23, 19, 0),
(32, 19, 0),
(36, 19, 0),
(12, 19, 0),
(19, 15, 0),
(12, 15, 0),
(9, 15, 0),
(20, 15, 0),
(33, 15, 0),
(16, 15, 0),
(10, 15, 0),
(14, 17, 0),
(12, 17, 0),
(28, 17, 0),
(1, 17, 0),
(18, 17, 0),
(23, 17, 0),
(6, 17, 0),
(14, 9, 0),
(15, 9, 0),
(31, 9, 0),
(6, 9, 0),
(33, 9, 0),
(19, 9, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `sex`, `birthdate`, `phone`, `address`) VALUES
(1, 'Gülten Seren', 'İlvan', 'female', '1994-03-16', '05398553523', 'İstanbul'),
(5, 'Kaan', 'Çetin', 'male', '2012-01-01', '05396652314', 'İzmir'),
(6, 'Ayşe', 'İlvan', 'female', '1957-04-18', '05333079490', 'Adapazarı'),
(9, 'İrem', 'Çetin', 'female', '2015-07-10', '05554211563', 'Bartın'),
(10, 'Sadık', 'Çetin', 'male', '1981-03-20', '05412367799', 'Bartın'),
(12, 'Hüseyin', 'Tekin', 'male', '2018-04-20', '05368521478', 'Bolu'),
(13, 'Sena Selin', 'Tekin', 'female', '1998-10-12', '05236987452', 'Bolu'),
(14, 'Burçe', 'Karagül', 'female', '2007-04-20', '05321478963', 'Kastamonu'),
(15, 'Emre ', 'Karagül', 'male', '2018-04-12', '05369875362', 'Kastamonu'),
(16, 'Bahar', 'Yalkın', 'female', '2018-04-12', '05963521478', 'Denizli'),
(18, 'Furkan ', 'Özgül', 'Male', '2018-04-05', '05896325412', 'İzmir'),
(19, 'Hakan', 'Hüzünlü', 'Male', '2018-04-14', '05869325142', 'Kartal'),
(20, 'Zimam', 'Asghar', 'female', '2018-04-05', '05896325689', 'Pakistan'),
(21, 'Sema', 'Topgül', 'female', '2018-04-20', '05398657412', 'Bostancı'),
(23, 'Fatma', 'Dikili', 'female', '2000-04-18', '05987412563', 'Etiler'),
(28, 'Selin', 'Akkan', 'female', '2018-05-04', '05362147879', 'Tuzla'),
(29, 'Fatma', 'Kılıç', 'female', '2017-11-17', '05362221100', 'İstanbul'),
(30, 'Ömer', 'Kaya', 'male', '2015-05-30', '05366662244', 'İzmir'),
(31, 'Kaya', 'Er', 'male', '2017-05-20', '05398887744', 'Erzurum'),
(32, 'Karya', 'Kale', 'male', '2017-05-12', '05366665544', 'İzmir'),
(33, 'Maide', 'Ersel', 'female', '2015-05-29', '05369954411', 'İzmir'),
(36, 'Aylin', 'Akkan', 'female', '1994-11-14', '5963521478', 'Tuzla'),
(37, 'Hamza', 'Aslan', 'male', '2004-02-29', '5369875362', 'Adana'),
(38, 'Nur', 'Arslan', 'female', '1994-05-05', '05398885533', 'Maltepe'),
(41, 'Ahmet', 'Yılmaz', 'female', '2006-06-05', '5366545641', 'İzmir');

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `FK_courseid` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_studentid` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

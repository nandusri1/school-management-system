-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 06:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `regno` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`regno`, `psw`) VALUES
('student1', 'pstudent01'),
('student2', 'pstudent2');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `pincode` int(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `currentaddress` varchar(60) NOT NULL,
  `email` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `mothername` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`firstname`, `middlename`, `lastname`, `gender`, `course`, `pincode`, `phone`, `currentaddress`, `email`, `fathername`, `mothername`) VALUES
('nandu', 'sri', 'yarramreddy', 'Male', '', 522016, 2147483647, '', 'nandusri.yarramreddy', 'ykr', 'ysr'),
('nandu', 'sri', 'yarramreddy', 'Male', '', 522016, 2147483647, '', 'nandusri.yarramreddy', 'ykr', 'ysr'),
('nandu', 'sri', 'yarramreddy', 'Male', '', 522016, 2147483647, '', 'nandusri.yarramreddy', 'ykr', 'ysr'),
('nandu', 'sri', 'yarramreddy', 'Male', '', 522016, 2147483647, '', 'nandusri.yarramreddy', 'ykr', 'ysr'),
('nandu', 'sri', 'yarramreddy', 'Male', '', 522016, 2147483647, '', 'nandusri.yarramreddy', 'ykr', 'ysr'),
('nandu', 'sri', 'yarramreddy', 'Male', '', 522016, 2147483647, '', 'nandusri.yarramreddy', 'ykr', 'ysr'),
('nandu', 'sri', 'yarramreddy', 'Female', 'Course', 522016, 2147483647, 'mukkamalaa', 'nandusri.yarramreddy', 'ykr', 'ysr'),
('nandu', 'sri', 'yarramreddy', 'Female', 'second', 522016, 2147483647, 'mukkamalaa', 'nandusri.yarramreddy', 'koteswara rao', 'sudharani'),
('nandu sri', 'yarramreddy', 'sri', 'Female', 'first', 780912, 2147483647, 'mukkamalaa', 'nandusri.yarramreddy', 'koteswara rao', 'sudharani');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classname` varchar(20) NOT NULL,
  `classtime` time NOT NULL,
  `classdate` date NOT NULL,
  `classstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classname`, `classtime`, `classdate`, `classstatus`) VALUES
('subtraction class in', '12:00:00', '0000-00-00', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstname`, `lastname`, `email`, `place`, `subject`) VALUES
('nandu sri', 'yarramreddy', 'nandusri.yarramreddy@gmail.com', 'mukkkamala', 'wjlxhkauuxo0ipjjhgxftutyoh');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `regno` varchar(20) NOT NULL,
  `class` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `exam` varchar(20) NOT NULL,
  `mark` int(11) NOT NULL,
  `uname` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`regno`, `class`, `subject`, `exam`, `mark`, `uname`) VALUES
('0', 1, 'CSE2002', '1', 50, ''),
('0', 1, 'CSE2002', '1', 50, ''),
('0', 0, '', '', 0, ''),
('0', 2, 'telugu', 'unit', 50, ''),
('0', 2, 'telugu', 'unit', 50, 'student1'),
('0', 3, 'hindi', 'unittest', 50, ''),
('0', 2, 'english', 'unittest', 50, ''),
('0', 9, 'english', 'unittest', 50, 'student2'),
('0', 5, 'telugu', 'unit4', 56, 'nandu'),
('0', 7, 'rekk', '4', 87, 'student1'),
('765', 5, 'telugu', 'fa1', 45, 'student1'),
('765', 6, 'hindi', 'fa1', 34, ''),
('765', 6, 'hindi', 'fa1', 34, ''),
('765', 6, 'hindi', 'fa1', 34, ''),
('0', 0, 'hhd', 'ajai', 45, ''),
('0', 0, 'hhd', 'ajai', 45, ''),
('0', 0, 'hhd', 'ajai', 45, ''),
('655', 6, 'telugu', 'summative', 66, ''),
('0', 0, 'hhd', 'ajai', 45, ''),
('87', 6, 'hindi', 'sss', 99, ''),
('87', 6, 'hindi', 'sss', 99, ''),
('student1', 6, 'telugu', 'fa1', 100, ''),
('87', 6, 'hindi', 'sss', 99, ''),
('', 0, '', '', 0, ''),
('', 0, '', '', 0, ''),
('', 0, '', '', 0, ''),
('', 0, '', '', 0, ''),
('', 0, '', '', 0, ''),
('', 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `uname` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `class` int(5) NOT NULL,
  `section` varchar(6) NOT NULL,
  `pno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`uname`, `fullname`, `fname`, `mname`, `regno`, `class`, `section`, `pno`) VALUES
('root@localhost', 'Yarramreddy Nandu sri', 'Yarramreddy Koteswara rao', 'Yarramreddy Sudha rani', 'pstudent001', 10, 'A', 789213),
('student2', 'spandana', 'srinivasa rao', 'prerana', 'pstudent002', 7, 'c', 8764322);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `testname` varchar(30) NOT NULL,
  `testtime` datetime NOT NULL,
  `syllabus` text NOT NULL,
  `instructions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testname`, `testtime`, `syllabus`, `instructions`) VALUES
('mcq test on biology', '0000-00-00 00:00:00', 'ddjljlhkgajghaliaj', 'aiaopopiduddkls');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

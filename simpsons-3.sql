-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2017 at 12:09 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpsons`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`student_id`, `course_id`, `grade`) VALUES
(123, 10001, 'B-'),
(123, 10002, 'C'),
(456, 10001, 'B+'),
(888, 10002, 'A+'),
(888, 10003, 'A+'),
(404, 10004, 'D+'),
(404, 10002, 'B'),
(456, 10002, 'D-');

-- --------------------------------------------------------

--
-- Table structure for table `snippets`
--

CREATE TABLE `snippets` (
  `snippet_id` int(11) NOT NULL,
  `snippet` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `isPrivate` tinyint(1) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snippets`
--

INSERT INTO `snippets` (`snippet_id`, `snippet`, `user_id`, `isPrivate`, `dateTime`) VALUES
(2, 'Hello', 777, 0, '2017-01-11 01:30:25'),
(3, 'whey', 222, 0, '2017-01-11 01:40:41'),
(4, 'heyyyyyy', 872, 0, '2017-01-11 01:48:28'),
(5, 'hwefoejfwjew', 872, 0, '2017-01-11 10:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `pwd` varchar(16) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `pwd`, `isAdmin`) VALUES
(67, 'hi', 'hi', 'hi', 0),
(222, 'Yll', 'kela@kela.com', 'matt123', 1),
(333, 'Yll', 'yll@yll.com', 'Adriana', 0),
(404, 'Ralph', 'ralph@fox.com', 'catfood', 0),
(456, 'Milhouse', 'milhouse@fox.com', 'mattp', 0),
(476, 'Yll', 'yll@hello.com', 'mattisthebest', 0),
(477, 'Matt', 'matt@w.com', NULL, 0),
(479, 'hi', 'hi', NULL, 0),
(666, 'admin', 'admin@admin.com', 'admin', 1),
(777, 'Matt', 'matt@test.com', 'test', 0),
(872, 'test', 'test', '', 0),
(875, 'test', 'test', '', 0),
(888, 'Lisa', 'lisa@fox.com', 'vegan', 0),
(999, 'matt', 'matt@gmail.com', 'hello', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `snippets`
--
ALTER TABLE `snippets`
  ADD PRIMARY KEY (`snippet_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `snippets`
--
ALTER TABLE `snippets`
  MODIFY `snippet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

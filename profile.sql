-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 03:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `emai` varchar(30) NOT NULL,
  `detail` text NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `emai`, `detail`, `subject`) VALUES
(1, 'mero', 'mero', 'mero', 'mero'),
(2, 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf'),
(3, 'dfsdf', 'sdfs@sadasd', 'sdfsdfs', 'sdfsd'),
(4, 'dfsdf', 'sdfs@sadasd', 'sdfsdfs', 'sdfsd'),
(5, 'dfsdf', 'sdfs@sadasd', 'sdfsdfs', 'sdfsd'),
(6, 'sailesh', 'saileshacharya1229@gmail.coom', 'kjscsdjcnsdjkcnsjkdcnkjsdnc', 'kandakari');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `course_name` varchar(20) NOT NULL,
  `per` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`course_name`, `per`) VALUES
('HTML', 80),
('CSS', 70),
('BOOTSTRAP', 90),
('PHP', 70),
('JAVASCRIPT', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

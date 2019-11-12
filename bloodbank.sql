-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 08:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_roll` int(5) NOT NULL,
  `department` varchar(5) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `std_name`, `std_roll`, `department`, `semester`, `blood`, `contact`, `status`) VALUES
(1, 'hafiz', 17101, 'cmt', '5th', 'null', 'null', '0'),
(2, 'any mia', 17102, 'cmt', '5th', 'null', 'null', '0'),
(3, 'masum', 17103, 'cmt', '5th', 'null', 'null', '0'),
(4, 'muttakin', 17104, 'cmt', '5th', 'null', 'null', '0'),
(5, 'sneha', 17105, 'cmt', '5th', 'null', 'null', '0'),
(6, 'niloy', 17106, 'cmt', '5th', 'null', 'null', '0'),
(7, 'mim', 17107, 'cmt', '5th', 'null', 'null', '0'),
(8, 'null', 17108, 'cmt', '5th', 'null', 'null', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

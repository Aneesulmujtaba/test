-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2016 at 07:13 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sch`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmission`
--

CREATE TABLE `addmission` (
  `NO` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `FatherName` varchar(25) NOT NULL,
  `DoB` date NOT NULL,
  `DoJ` date NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Fee` int(11) NOT NULL,
  `CellNO` varchar(13) NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmission`
--

INSERT INTO `addmission` (`NO`, `FirstName`, `LastName`, `FatherName`, `DoB`, `DoJ`, `Class`, `Fee`, `CellNO`, `Address`) VALUES
(2, '', '', '', '0000-00-00', '0000-00-00', '', 0, '', ''),
(3, 'asif', 'hazarvi', 'khalid', '2016-08-11', '2016-08-11', 'Four', 8090, '78979678', ''),
(4, 'Anees', 'UlMujtaba', 'Qari Nazir Ahmed', '0000-00-00', '0000-00-00', '', 0, '', ''),
(5, 'Anees', 'UlMujtaba', 'Qari Nazir Ahmed', '1994-05-05', '1994-05-05', 'Ten', 1000, '0322-6621976', 'Manzora Abad M.B.Din'),
(6, '', '', '', '0000-00-00', '0000-00-00', 'One', 0, '', ''),
(7, '', '', '', '0000-00-00', '0000-00-00', 'One', 0, '', ''),
(8, 'Naeem', '', '', '0000-00-00', '0000-00-00', 'Three', 0, '', ''),
(9, 'Ijaz Ahmad', '', '', '0000-00-00', '0000-00-00', 'One', 0, '', ''),
(16, 'nafees', '', '', '0000-00-00', '0000-00-00', 'One', 0, '', ''),
(17, 'anees', '', '', '0000-00-00', '0000-00-00', 'One', 0, '', ''),
(47, 'baber', '', '', '0000-00-00', '0000-00-00', 'One', 0, '', ''),
(48, 'kashif', 'mehmood', 'Muhammad yaqoob', '0000-00-00', '0000-00-00', 'Nine', 9000, '', ''),
(49, 'nafees', 's', '', '0000-00-00', '0000-00-00', 'Three', 909, '', ''),
(50, 'noman', 'ali', 'maqsood ahmed', '2016-08-01', '2016-08-01', 'Eight', 8404, '54534', 'x'),
(51, 'Addel', 'kashif', '', '0000-00-00', '0000-00-00', 'Seven', 9, '', ''),
(52, 'Shahbaz', 'Ashraf', 'Muhammad Ashraf', '2016-08-03', '2016-08-03', 'Ten', 890, '80', ''),
(53, 'Muhammad', 'Tuseef', 'Muhammad Saghir', '2016-06-08', '2016-08-20', 'Eight', 90898, '', ''),
(54, 'Tahseen', 'Farrukh', 'Munir Hussain', '1992-10-01', '2015-06-16', 'Two', 1000, '1234567', 'sdf'),
(55, 'anum', 'shahzadi', '', '1993-11-27', '2016-09-26', 'Ten', 9000, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmission`
--
ALTER TABLE `addmission`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmission`
--
ALTER TABLE `addmission`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

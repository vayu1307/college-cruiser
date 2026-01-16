-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 07:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_mang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(3) NOT NULL,
  `amail` varchar(25) NOT NULL,
  `apass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `amail`, `apass`) VALUES
(1, 'dhruvparmar@gmail.com', 'vayu13');

-- --------------------------------------------------------

--
-- Table structure for table `bookingdata`
--

CREATE TABLE `bookingdata` (
  `bookid` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `studid` int(9) NOT NULL,
  `busstop` varchar(20) NOT NULL,
  `busnum` int(3) NOT NULL,
  `seat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookingdata`
--

INSERT INTO `bookingdata` (`bookid`, `name`, `studid`, `busstop`, `busnum`, `seat`) VALUES
(14, 'vipul', 634215974, 'Hotel kaveri', 1, '17R'),
(15, 'dhruv', 130723734, 'Kamlabag', 1, '14R'),
(16, 'Ganpati', 329463189, 'Hotel kaveri', 1, '9RW');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `feedback` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `feedback`) VALUES
(1, 'dhruv', 'dhruvparmar1323@gmail.com', 'Nice and useful website. you can book your seat here.'),
(8, 'vipul', 'vipulkhunti91@gmail.com', 'Easy to use website...'),
(9, 'karan', 'karanmakwana22@gmail.com', 'You can easily book your seat here.'),
(10, 'yuvraj', 'yuvrajsharma22@gmail.com', 'useful website.');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `uid` int(3) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `umobno` bigint(10) NOT NULL,
  `umail` varchar(40) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `uplace` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`uid`, `uname`, `umobno`, `umail`, `upass`, `uplace`) VALUES
(1, 'Dhruv Parmar', 7228993219, 'dhruvparmar1323@gmail.com', '123', 'Old Campus'),
(2, 'Vipul Khunti', 7096447726, 'vipulkhunti91@gmail.com', '456', 'Narsang Tekri'),
(7, 'karan', 7862877203, 'collegecruiser1999@gmail.com', '789', 'Narsang Tekri'),
(8, 'Ravi ', 8140877541, 'ravisparmar315@gmail.com', '795', 'Kamlabag'),
(9, 'Manisha', 8765423195, 'manisha195@gmail.com', 'mani45', 'Mer samaj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bookingdata`
--
ALTER TABLE `bookingdata`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookingdata`
--
ALTER TABLE `bookingdata`
  MODIFY `bookid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `uid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

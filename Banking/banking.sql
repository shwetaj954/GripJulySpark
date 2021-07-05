-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 07:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about` varchar(200) NOT NULL,
  `query` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `about`, `query`) VALUES
(1, 'a@gmail.com', 'aa', 'aa'),
(2, 'user1@gmail.com', 'ss', 'ss'),
(3, 'user1@gmail.com', 'ss', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `custumer`
--

CREATE TABLE `custumer` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `transcatlast` varchar(200) NOT NULL,
  `transactuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custumer`
--

INSERT INTO `custumer` (`id`, `img`, `name`, `dob`, `email`, `phone`, `balance`, `transcatlast`, `transactuser`) VALUES
(1, 'assets/img/profile1.jpg', 'Ruchika', '1999-06-15', 'Ru@gmail.com', '12345', '49400', '200', 'Ruchika'),
(2, 'assets/img/profile2.jpg', 'Neha', '2001-07-11', 'ne@gmail.com', '13579', '60020', '30', 'Neha'),
(3, 'assets/img/profile3.jpg', 'Radha', '2002-07-11', 'radha@gmail.com', '681097', '60070', '10', 'Radha'),
(4, 'assets/img/profile4.jpg', 'Renuka', '2001-07-31', 'renuka@gmail.com', '786532', '59850', '50', 'Neha'),
(5, 'assets/img/profile14.jpg', 'Vivek', '1995-07-13', 'vivk@gmail.com', '545489656', '59700', '300', 'Shyam'),
(6, 'assets/img/profile9.jpg', 'Anand', '1993-07-22', 'anand@gmail.com', '4545421', '30000', '0', ''),
(7, 'assets/img/profile10.jpg', 'Harry', '1999-02-17', 'har@gmail.com', '1215787', '70000', '0', ''),
(8, 'assets/img/profile11.jpg', 'Shyam', '1996-12-17', 'shy@gmail.com', '765421878', '80300', '0', ''),
(9, 'assets/img/profile6.jpg', 'Ankita', '2004-08-12', 'ank@gmail.com', '7875641454', '50000', '0', ''),
(10, 'assets/img/profile13.jpg', 'Shubham', '1995-10-13', 'shubham@gmail.com', '245559565232', '450000', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `transactb`
--

CREATE TABLE `transactb` (
  `id` int(11) NOT NULL,
  `Sender` varchar(100) NOT NULL,
  `Receiver` varchar(100) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactb`
--

INSERT INTO `transactb` (`id`, `Sender`, `Receiver`, `Amount`, `Date`) VALUES
(23, 'Neha', 'Radha', '500', '04.07.2021 14:13'),
(24, 'Neha', 'Ruchika', '100', '04.07.2021 14:14'),
(25, 'Neha', 'Ruchika', '100', '04.07.2021 14:19'),
(26, 'Neha', 'Ruchika', '100', '04.07.2021 14:20'),
(27, 'Neha', 'Ruchika', '100', '04.07.2021 14:32'),
(28, 'Radha', 'Radha', '20', '04.07.2021 19:52'),
(29, 'Neha', 'Ruchika', '200', '04.07.2021 20:17'),
(30, 'Neha', 'Neha', '200', '04.07.2021 20:19'),
(31, 'Renuka', 'Radha', '60', '04.07.2021 20:20'),
(32, 'Renuka', 'Neha', '30', '04.07.2021 20:21'),
(33, 'Renuka', 'Radha', '10', '04.07.2021 20:43'),
(34, 'Renuka', 'Neha', '50', '04.07.2021 20:48'),
(35, 'Vivek', 'Shyam', '300', '05.07.2021 06:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custumer`
--
ALTER TABLE `custumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactb`
--
ALTER TABLE `transactb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `custumer`
--
ALTER TABLE `custumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactb`
--
ALTER TABLE `transactb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

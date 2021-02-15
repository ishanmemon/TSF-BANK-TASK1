-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 02:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1_tsfbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfermoney`
--

CREATE TABLE `transfermoney` (
  `sno` int(3) NOT NULL,
  `sender` varchar(50) CHARACTER SET utf8 NOT NULL,
  `receiver` varchar(50) CHARACTER SET utf8 NOT NULL,
  `balance` bigint(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfermoney`
--

INSERT INTO `transfermoney` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'memon ishan abdulsattar', 'vats', 50, '0000-00-00 00:00:00'),
(2, 'rohit', 'memon ishan abdulsattar', 50, '2021-02-15 18:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `viewcustomer`
--

CREATE TABLE `viewcustomer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewcustomer`
--

INSERT INTO `viewcustomer` (`id`, `name`, `email`, `balance`) VALUES
(1, 'memon ishan abdulsattar', 'ishan@gmail.com', 50000),
(2, 'rohit', 'rohit@gmail.com', 99950),
(3, 'vats', 'vats11@gmail.com', 10050),
(4, 'mihir', 'mihir23@yahoo.com', 2000),
(5, 'sarvesh', 'abc@yahoo.com', 150000),
(6, 'jestin', 'j1234@gmail.com', 50000),
(7, 'aman', 'aman@christuniversity.in', 200000),
(8, 'jay', 'jayk@gmail.com', 10000),
(9, 'sadiq', 'sadiqabc@gmail.com', 50000),
(10, 'sakil', 'sa@gmail.com', 500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transfermoney`
--
ALTER TABLE `transfermoney`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `viewcustomer`
--
ALTER TABLE `viewcustomer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfermoney`
--
ALTER TABLE `transfermoney`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `viewcustomer`
--
ALTER TABLE `viewcustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

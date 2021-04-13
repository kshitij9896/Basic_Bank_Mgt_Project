-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 12:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(20) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `avl_bal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `avl_bal`) VALUES
(1, 'Kshitij', 100),
(2, 'Kiran', 0),
(3, 'Omkar', 14000),
(4, 'Suraj', 100);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `c_id` int(20) NOT NULL,
  `c_id2` int(20) NOT NULL,
  `amt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`c_id`, `c_id2`, `amt`) VALUES
(1, 2, '121'),
(1, 2, '121'),
(1, 2, '121'),
(1, 2, '121'),
(1, 2, '121'),
(1, 2, '121'),
(1, 2, '121'),
(1, 1, '121'),
(1, 1, '121'),
(1, 2, '12'),
(1, 2, '12'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '101'),
(1, 2, '101'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(2, 1, '100'),
(2, 1, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(2, 1, '100'),
(2, 1, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100'),
(3, 4, '100'),
(3, 4, '100'),
(3, 4, '100'),
(0, 0, '101'),
(1, 2, '100'),
(1, 2, '100'),
(1, 2, '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

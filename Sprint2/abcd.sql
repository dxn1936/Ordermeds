-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 06:31 AM
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
-- Database: `abcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'ordermeds');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mrp` double NOT NULL,
  `bestRate` double NOT NULL,
  `saving` double NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `mrp`, `bestRate`, `saving`, `available`) VALUES
(1, 'Dettol Antiseptic', 150.65, 120.23, 30.42, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `ID` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `telephone` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postcode` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`ID`, `firstName`, `lastName`, `email`, `username`, `telephone`, `address`, `city`, `postcode`, `country`, `state`, `password`) VALUES
(1, 'Dhanraj', 'Raiturkar', 'dhanraj.raiturkar@gmail.com', 'dhan123', '2147483647', 'SApANA PLAZA 4TH FLOOR FLAT 08 DR AD COSTA ROAD MARGAO GOA', 'margao', 403601, '244', '3516', 'dhan'),
(2, 'Dhanraj', 'Raiturkar', 'dhanraj.raiturkar@gmail.com', 'dhan123', '2147483647', 'SApANA PLAZA 4TH FLOOR FLAT 08 DR AD COSTA ROAD MARGAO GOA', 'margao', 403601, '244', '3516', 'dhan'),
(3, 'akshay', 'kumar', 'ek-ka-double@gmail.com', 'raju', '2147483647', 'build more woods ', 'mapusa', 403701, '244', '3515', 'raju123'),
(4, 'vijai', 'sardessai', 'vjsd@gmail.com', 'vij', '2147483647', 'asaskjnkjdc', 'fatorda', 403604, '244', '3515', 'vijai'),
(5, 'nimbu', 'bhindi', 'nimbu@gmail.com', 'nimbu', '2147483647', 'margao', 'margao', 403701, '4', '3518', 'nim'),
(8, 'Dhanraj', 'Raiturkar', 'dhanraj.raiturkar@gmail.com', 'dhan123', '2147483647', 'SApANA PLAZA 4TH FLOOR FLAT 08 DR AD COSTA ROAD MARGAO GOA', 'margao', 403601, '244', '3516', 'dhan'),
(13, 'john', 'snow', 'johnSnow@gmail.com', 'john', '9011589130', 'walhala', 'north', 601302, 'Anguilla', 'Angus', 'snow');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `telephone` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstName`, `lastName`, `email`, `username`, `telephone`, `address`, `password`) VALUES
(1, 'admin', 'admin', 'ordermeds@gmail.com', 'admin', '8788610201', 'margao goa', 'ordermeds'),
(2, 'balli', 'kedi', 'balli@gmail.com', 'balli', '8975003088', 'ambaji fatorda', 'balli123'),
(3, 'balli', 'kedi', 'balli@gmail.com', 'balli', '8975003088', 'ambaji fatorda', 'balli123'),
(4, 'balli', 'kedi', 'balli@gmail.com', 'balli', '8975003088', 'ambaji fatorda', 'balli123'),
(5, 'eish', 'kakodkar', 'eish@gmail.com', 'eish', '8897562356', 'margao', 'eish1234');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `telephone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postcode` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(0, 'testuser', 'testuserpass'),
(1, 'testuser', 'testuserpass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 02:45 PM
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
(5, 'eish', 'kakodkar', 'eish@gmail.com', 'eish', '8897562356', 'margao', 'eish1234'),
(6, 'ranbir', 'kapoor', 'rb@gmail.com', 'ranbir', '1234567891', 'goa', 'ranbir'),
(7, '', '', '', '', '', '', ''),
(8, 'katrina  ', 'kaif', 'kat@gmail.com', 'katrina', '8876541232', 'mapusa', 'katkaif'),
(9, 'vikram', 'gawde', 'vikram@gmail.com', 'viki', '1234567898', 'goa', 'abcdefg'),
(10, 'babu ', 'rao', 'babu@gmail.com', 'babu', '8881212', 'star garage', 'herapheri'),
(11, 'babu', 'naik', 'babu@gmail.com', 'babu', '872386743', 'goa', 'abcd'),
(12, 'mohit', 'naik', 'mohit@gmail.com', 'mohit', '9283298934', 'margao', 'vfhj'),
(13, 'shivani', 'gaonkar', 'shivani@gmail.com', 'shivani', '12', 'navelim', 'shivani'),
(14, 'vikas', 'dubey', 'vikas@gmail.com', 'vikas', '12345688', 'margao', 'Vikas123'),
(15, 'John', 'Snow', 'john@gmail.com', 'john', '8975003088', 'margao', 'John1234'),
(16, 'rahul', 'singh', 'rahul@gmail.com', 'rahul', '8975003088', 'margao', 'Rahul123'),
(17, 'joshua', 'pereira', 'josh@gmail.com', 'josh', '8788610201', 'margao', 'Josh12'),
(18, 'rohan', 'naik', 'rohan@gmail.com', 'rohan', '8975003088', 'margao', 'Rohan123'),
(19, 'Darshan', 'naik', 'darshan@gmail.com', 'darshan', '8975003088', 'margao', 'Darshan123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

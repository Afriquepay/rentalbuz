-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 08:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afriq_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `escrowlog`
--

CREATE TABLE `escrowlog` (
  `id` int(11) NOT NULL,
  `from_user` varchar(1000) NOT NULL,
  `to_user` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `file` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `escrowlog`
--

INSERT INTO `escrowlog` (`id`, `from_user`, `to_user`, `message`, `file`) VALUES
(1, '01555555555', '01666666666', 'i sent him a money and he claim he didnt see it', 'transc.pdf'),
(2, '01666666666', '01555555555', 'I did not receive the money truly', 'transc.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `escrowlog`
--
ALTER TABLE `escrowlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `escrowlog`
--
ALTER TABLE `escrowlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

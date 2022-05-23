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
-- Table structure for table `escrowtable`
--

CREATE TABLE `escrowtable` (
  `id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escrowtable`
--

INSERT INTO `escrowtable` (`id`, `sender`, `receiver`, `amount`, `message`, `status`, `password`, `date`) VALUES
(1, '08161749362', '08055310164', '100', 'Create Envelope', 1, '123456', '2021-12-06 17:36:25'),
(2, '924120215859', '08043564320', '500', 'Packet', 0, '123456', '2021-12-06 17:37:27'),
(3, '08161749362', '08161749362', '50', 'Fund Basket', 2, '123456', '2021-12-06 18:04:40'),
(4, '01666666666', '01555555555', '100', 'Fund Basket', 3, '123456', '2021-12-06 18:06:49'),
(5, '08161749362', '08161749362', '99.0', 'Picked Envelope', 2, '123456', '2021-12-06 18:14:45'),
(6, '07042141314', '01666666666', '3000', 'Create Envelope', 0, '123456', '2021-12-06 18:59:38'),
(7, '07042141314', '07069578634', '2970.0', 'Picked Envelope', 2, '123456', '2021-12-06 19:03:46'),
(8, '07037804888', '08055310164', '5000', 'Create Envelope', 1, '123456', '2021-12-07 11:36:28'),
(9, '07037804889', '07037804888', '100', 'Packet', 2, '123456', '2021-12-07 11:47:12'),
(10, '07037804889', '07161749362', '800', 'Offline Payment', 2, '123456', '2021-12-07 11:47:34'),
(11, '07037804889', '08161749362', '500', 'Create Envelope', 1, '123456', '2021-12-07 11:48:38'),
(12, '07037804889', '07037804889', '500', 'Fund Basket', 2, '123456', '2021-12-07 11:49:55'),
(13, '07040319332', '08161749362', '10', 'Packet', 1, '', '2021-12-12 07:16:18'),
(14, '07040319332', '08161749362', '1', 'Packet', 1, '', '2021-12-12 07:20:51'),
(15, '07040319332', '8801685417220', '100', 'Offline Payment', 1, '', '2021-12-12 07:23:49'),
(16, '08161749362', '07040319332', '50', 'Packet', 1, '', '2021-12-12 07:25:19'),
(17, '08161749362', '07040319332', '12', 'QRCode Packet', 1, '', '2021-12-12 07:28:52'),
(18, '01666666666', '08055310164', '100', 'Create Envelope', 1, '', '2021-12-12 14:45:06'),
(19, '08161749362', '08055310164', '100', 'Create Envelope', 2, '', '2021-12-12 14:47:21'),
(20, '08161749362', '01666666666', '99.0', 'Picked Envelope', 1, '', '2021-12-12 14:47:45'),
(21, '08161749362', '08055310164', '1000', 'Create Envelope', 1, '', '2021-12-12 14:48:48'),
(22, '08161749362', '01666666666', '990.0', 'Picked Envelope', 2, '', '2021-12-12 14:48:58'),
(23, '08161749362', '08055310164', '20', 'Create Envelope', 1, '', '2021-12-12 14:51:28'),
(24, '08161749362', '08161749362', '7.2', 'Picked Envelope', 2, '', '2021-12-12 14:51:39'),
(25, '08161749362', '08055310164', '25', 'Create Envelope', 2, '', '2021-12-12 15:44:53'),
(26, '08161749362', '08055310164', '11', 'Create Envelope', 1, '', '2021-12-12 15:45:45'),
(27, '08161749362', '01666666666', '10.9', 'Picked Envelope', 1, '', '2021-12-12 15:45:53'),
(28, '08161749362', '08055310164', '20', 'Create Envelope', 1, '', '2021-12-12 16:02:24'),
(29, '08161749362', '01666666666', '7.8', 'Picked Envelope', 1, '', '2021-12-12 16:02:30'),
(30, '08161749362', '01555555555', '12.0', 'Picked Envelope', 1, '', '2021-12-12 16:02:45'),
(31, '08161749362', '08055310164', '30', 'Create Envelope', 1, '', '2021-12-12 16:04:45'),
(32, '08161749362', '01666666666', '29.7', 'Picked Envelope', 1, '', '2021-12-12 16:05:12'),
(33, '08161749362', '01666666666', '200', 'Fund Basket', 1, '', '2021-12-12 16:19:54'),
(34, '08161749362', '08055310164', '90', 'Create Envelope', 1, '', '2021-12-12 17:09:19'),
(35, '08161749362', '01666666666', '57.1', 'Picked Envelope', 1, '', '2021-12-12 17:09:38'),
(36, '08161749362', '01666666666', '57.1', 'Loss Envelope', 1, '', '2021-12-12 17:09:38'),
(37, '08161749362', '01555555555', '32.0', 'Picked Envelope', 1, '', '2021-12-12 17:09:50'),
(38, '08161749362', '01555555555', '32.0', 'Loss Envelope', 1, '', '2021-12-12 17:09:50'),
(39, '01555555555', '08055310164', '100', 'Create Envelope', 1, '', '2021-12-12 17:11:43'),
(40, '01555555555', '01666666666', '33.5', 'Picked Envelope', 1, '', '2021-12-12 17:12:00'),
(41, '01555555555', '01666666666', '33.5', 'Loss Envelope', 1, '', '2021-12-12 17:12:00'),
(42, '01555555555', '08161749362', '23.7', 'Picked Envelope', 1, '', '2021-12-12 17:12:05'),
(43, '01555555555', '08161749362', '23.7', 'Loss Envelope', 1, '', '2021-12-12 17:12:05'),
(44, '01555555555', '01555555555', '41.8', 'Picked Envelope', 1, '', '2021-12-12 17:12:23'),
(45, '01555555555', '01555555555', '41.8', 'Loss Envelope', 1, '', '2021-12-12 17:12:23'),
(46, '08161749362', '08055310164', '100', 'Create Envelope', 1, '', '2021-12-12 17:55:51'),
(47, '01555555555', '08055310164', '20', 'Create Envelope', 1, '', '2021-12-12 17:56:54'),
(48, '01666666666', '08055310164', '22', 'Create Envelope', 1, '', '2021-12-12 17:58:30'),
(49, '01666666666', '01666666666', '55', 'Fund Basket', 1, '', '2021-12-12 18:03:17'),
(50, '03128910850', '03030627767', '500', 'Offline Payment', 1, '', '2021-12-12 19:10:34'),
(51, '03128910850', '03128910850', '500', 'Packet', 1, '', '2021-12-12 19:12:22'),
(52, '08161749362', '01555555555', '25', 'Packet', 1, '', '2021-12-12 19:43:06'),
(53, '03128910850', '03030627767', '500', 'Offline Payment', 1, '', '2021-12-16 20:35:35'),
(54, '03030627767', '03128910850', '100', 'Packet', 1, '', '2021-12-18 12:09:46'),
(55, '03030627767', '03128910850', '200', 'Packet', 1, '', '2021-12-18 13:24:09'),
(56, '03128910850', '08055310164', '200', 'Create Envelope', 1, '', '2021-12-18 13:27:22'),
(57, '03128910850', '03030627767', '198.0', 'Picked Envelope', 1, '', '2021-12-18 13:27:44'),
(58, '03128910850', '03030627767', '200', 'Packet', 1, '', '2021-12-18 14:35:18'),
(59, '03128910850', '03030627767', '200', 'Packet', 1, '', '2021-12-18 14:40:27'),
(60, '08161749362', '08161749362', '200', 'QRCode Packet', 1, '', '2021-12-18 14:59:21'),
(61, '03128910850', '03030627767', '2000', 'QRCode Packet', 1, '', '2021-12-18 20:04:48'),
(62, '03128910850', '03030627767', '2000', 'QRCode Packet', 1, '', '2021-12-18 20:06:53'),
(63, '03030627767', '03336258074', '4000', 'Offline Payment', 1, '', '2021-12-18 20:08:15'),
(64, '03128910850', '03030627767', '60000', 'QRCode Packet', 1, '', '2021-12-18 20:20:22'),
(65, '03030627767', '03128910850', '50000', 'Packet', 1, '', '2021-12-19 14:30:13'),
(66, '03128910850', '03128910850', '20', 'Fund Basket', 1, '', '2021-12-19 14:34:19'),
(67, '03128910850', '08055310164', '200', 'Create Envelope', 1, '', '2021-12-19 17:14:26'),
(68, '03128910850', '03128910850', '198.0', 'Picked Envelope', 1, '', '2021-12-19 17:14:39'),
(69, '03030627767', '08055310164', '100', 'Create Envelope', 1, '', '2021-12-19 17:29:21'),
(70, '03030627767', '03128910850', '99.0', 'Picked Envelope', 1, '', '2021-12-19 17:29:34'),
(71, '03128910850', '08055310164', '2000', 'Create Envelope', 1, '', '2021-12-19 17:33:28'),
(72, '03128910850', '08055310164', '2000', 'Create Envelope', 1, '', '2021-12-19 17:58:39'),
(73, '07161749362', '08100737379', '100', 'Packet', 1, '', '2021-12-30 21:09:33'),
(74, '07161749362', '07161749362', '600', 'Fund Basket', 1, '', '2021-12-30 21:17:06'),
(75, '07042141314@nairapacket.com.ng', '08100737379', '1000', 'Testing the app', 0, '', '2022-03-17 21:03:09'),
(76, '07042141314', '08100737379', '1000', 'asasasssssssss', 1, '', '2022-03-17 21:12:19'),
(77, '07042141314', '08140642443', '20000', 'New member bonus', 1, '', '2022-03-19 06:36:00'),
(78, '07042141314', '08043564320', '1000', 'Testing the app', 1, '', '2022-03-19 06:41:10'),
(79, '07042141314', '08100737379', '1000', 'asasasssssssss', 1, '', '2022-03-19 06:42:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `escrowtable`
--
ALTER TABLE `escrowtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `escrowtable`
--
ALTER TABLE `escrowtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

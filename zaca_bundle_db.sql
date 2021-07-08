-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 09:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zaca_bundle_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile_network`
--

CREATE TABLE `mobile_network` (
  `id` int(6) UNSIGNED NOT NULL,
  `network_name` varchar(200) NOT NULL,
  `headquater` varchar(200) NOT NULL,
  `website` varchar(200) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile_network`
--

INSERT INTO `mobile_network` (`id`, `network_name`, `headquater`, `website`, `reg_date`) VALUES
(1, 'Zantel', 'Vuga', 'www.zantel.com', '2021-07-03 20:48:40'),
(2, 'Tigo', 'Maisara', 'www.tigo.com', '2021-07-03 20:48:40'),
(3, 'Halotel', 'Kikwajuni', 'www.halotel.com', '2021-07-03 20:48:40'),
(4, 'Airtel', 'Fumba', 'www.airtel.com', '2021-07-03 20:48:40'),
(5, 'Safaricom', 'Kilifi', 'www.safaricom.com', '2021-07-04 20:15:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile_network`
--
ALTER TABLE `mobile_network`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobile_network`
--
ALTER TABLE `mobile_network`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 10:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(255) NOT NULL,
  `tipus` varchar(255) NOT NULL,
  `marka` varchar(255) NOT NULL,
  `rendszam` varchar(255) NOT NULL,
  `tulaj_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `tipus`, `marka`, `rendszam`, `tulaj_id`) VALUES
(1, '1', 'ASD-123', 'Honda', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usr` varchar(45) DEFAULT NULL,
  `teljes_nev` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usr`, `teljes_nev`, `email`, `pwd`) VALUES
(7, 'admin', 'Admin Kolbász', 'balint@kolbasz.space', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4'),
(11, 'tbmike', 'TurboMike', 'tbmike@kolbasz.space', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4'),
(12, 'asder', 'asder', 'asder@email.com', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

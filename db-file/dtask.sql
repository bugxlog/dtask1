-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 01:17 AM
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
-- Database: `dtask`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(2, 'adnan.softwarecraft@gmail.com', '', 'admin'),
(3, 'adnan.softwarecraft@gmail.com', '', 'admin'),
(4, 'adnan.softwarecraft@gmail.com', '$2y$10$t0wlqqtEWHj8G3.P9K3zY.JZpq/OSD5fPvkdtd7443F2jBvXF.O0.', 'admin'),
(5, 'adnan.softwarecraft@gmail.com', '$2y$10$Cl00ZQTXkhTklYIcPBaXhuoub5km4d3tLwC4Rhvln8h/.X/aooIoK', 'user'),
(6, 'adnan.softwarecraft@gmail.com', '$2y$10$1FDFQEiED.v321G/E3h2H.B2SPjMEtPpSgXj5vEIqy467RwE8TCZi', 'admin'),
(7, 'abu@gmail.com', '$2y$10$bOf52BMd4Gf9bjgXeRsSYe4lCXHnhoLJp.OtLg9hVmkfp4YgSbQjG', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

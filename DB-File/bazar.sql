-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 11:05 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bazar`
--

CREATE TABLE `bazar` (
  `id` int(11) NOT NULL,
  `manik` int(11) NOT NULL,
  `sayed` int(11) NOT NULL,
  `durjoy` int(11) NOT NULL,
  `mahmud` int(11) NOT NULL,
  `rono` int(11) NOT NULL,
  `jony` int(11) NOT NULL,
  `jakir` int(11) NOT NULL,
  `gmjakir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bazar`
--

INSERT INTO `bazar` (`id`, `manik`, `sayed`, `durjoy`, `mahmud`, `rono`, `jony`, `jakir`, `gmjakir`) VALUES
(1, 200, 100, 410, 420, 450, 41, 32, 12),
(2, 40, 40, 40, 40, 40, 40, 40, 40),
(3, 45, 54, 54, 55, 45, 45, 54, 54),
(4, 500, 600, 400, 7878, 100, 3000, 400, 6000),
(15, 40, 40, 40, 40, 40, 40, 40, 40),
(18, 4000, 4000, 4000, 4000, 4000, 4000, 4000, 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bazar`
--
ALTER TABLE `bazar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bazar`
--
ALTER TABLE `bazar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

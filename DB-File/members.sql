-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 11:07 AM
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
-- Table structure for table `members`
--

CREATE TABLE `members` (
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
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `manik`, `sayed`, `durjoy`, `mahmud`, `rono`, `jony`, `jakir`, `gmjakir`) VALUES
(35, 2, 2, 2, 2, 2, 2, 2, 2),
(36, 1, 1, 1, 1, 1, 1, 1, 1),
(37, 3, 3, 3, 3, 3, 3, 3, 3),
(38, 7, 7, 7, 7, 7, 7, 7, 7),
(39, 3, 3, 3, 3, 3, 3, 3, 3),
(42, 10, 10, 10, 10, 10, 10, 10, 10),
(43, 4, 5, 6, 7, 8, 9, 2, 1),
(44, 5, 5, 5, 5, 5, 5, 5, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

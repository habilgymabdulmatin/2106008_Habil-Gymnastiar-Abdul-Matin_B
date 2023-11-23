-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 06:41 AM
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
-- Database: `2106008_habil`
--

-- --------------------------------------------------------

--
-- Table structure for table `songlist`
--

CREATE TABLE `songlist` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `artist` varchar(100) DEFAULT NULL,
  `album` varchar(100) NOT NULL,
  `tanggal_ditambahkan` date NOT NULL DEFAULT current_timestamp(),
  `durasi` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songlist`
--

INSERT INTO `songlist` (`id`, `judul`, `artist`, `album`, `tanggal_ditambahkan`, `durasi`) VALUES
(1, 'Live Forever', 'Oasis', 'Definitely Maybe', '2023-11-01', '00:04:37'),
(2, 'Some Might Say', 'Oasis', 'Morning Glory', '2023-11-13', '00:05:28'),
(3, 'Twist And Shout', 'The Beatles', 'Please Please Me', '2023-10-30', '00:02:35'),
(4, 'After Images of Summer', 'ASIAN KUNG-FU GENERATION', 'Kimi Tsunagi Five M', '2023-11-16', '00:04:41'),
(5, 'Satu Hati', 'Noah', 'Taman Langit', '2023-11-23', '00:03:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songlist`
--
ALTER TABLE `songlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songlist`
--
ALTER TABLE `songlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
